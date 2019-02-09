<div class="modal" id="application">
    <div class="modal_back"></div>
    <div class="modal_wrapper">
        <div class="modal_body">
            <i class="fa fa-times btn_close_modal" aria-hidden="true"></i>
            <form action="/send_form">
                {!! Form::token() !!}
                <div class="input_group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" name="name" id="name" placeholder="Введите Ваше имя">
                </div>
                <div class="input_group">
                    <label for="phone">Ваш телефон:</label>
                    <input type="tel" name="phone" id="phone"placeholder="Введите Ваш телефон">
                </div>
                <input type="submit" value="Забронировать">
            </form>
        </div>
    </div>
</div>
