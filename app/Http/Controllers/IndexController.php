<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    // Вывод главной страницы
    public function index()
    {
        $rooms = Room::all();
        $obj = new \stdClass();
        $obj->var = 'Test variable';
        // Отправка сообщения
        //Mail::to('abduraim.t@gmail.com')->send(new SendEmail('theme', $obj));
        return view('welcome', compact(['rooms']));
    }

    public function sendForm(Request $request)
    {
        // Создаем объект, для передачи его в тело Письма
        $data = new \stdClass();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->date = Carbon::now()->format('d.m.Y H:i');

        // Отправляем письмо
        Mail::to('admin@hotelmay.ru')
            ->send(new SendEmail(
                'Новая заявка на сайте HOTELMAY.RU',
                'applications',
                $data)
        );
    }
}
