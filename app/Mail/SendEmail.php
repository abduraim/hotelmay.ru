<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $htmlTemplate;
    public $textTemplate;

    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $subject = 'subject', string $template = 'default', \stdClass $data)
    {
        $this->subject = $subject;
        $this->htmlTtemplate = 'mails.' . $template . '.html_mail';
        $this->textTtemplate = 'mails.' . $template . '.text_mail';
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view($this->htmlTtemplate)
            ->text($this->textTemplate)
            ->subject($this->subject)
            ->from('noreplay@hotelmay.ru');
    }
}
