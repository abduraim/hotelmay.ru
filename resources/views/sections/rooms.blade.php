<section id="rooms" class="section">
    <div class="wrapper">
        <h1>Наши номера</h1>
        <ul class="rooms_list">
            <li class="rooms_item btn_show_modal get_json" data-modal="room" data-json="api/get_room_info/1">
                <div class="rooms_title"><h3>Апартаменты "Delux" с&nbsp;кухней</h3></div>
                <div class="rooms_photo" style="background-image: url('{{ asset('/img/01.jpg') }}')"></div>
                <div class="rooms_cost">1212 руб</div>
                <div class="rooms_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eligendi id libero necessitatibus nisi numquam, quaerat reiciendis? Alias cupiditate ea eum inventore libero perspiciatis possimus quibusdam quo repudiandae veritatis?</div>
                <a href="#" class="button rooms_order btn_show_modal" data-modal="room">Забронировать</a>
                <div class="rooms_eye"><i class="fa fa-eye"></i></div>
            </li>
            <li class="rooms_item btn_show_modal get_json" data-modal="room" data-json="api/get_room_info/2">
                <div class="rooms_title"><h3>Апартаменты "Delux" с&nbsp;кухней</h3></div>
                <div class="rooms_photo" style="background-image: url('{{ asset('/img/01.jpg') }}')"></div>
                <div class="rooms_cost">1212 руб</div>
                <div class="rooms_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eligendi id libero necessitatibus nisi numquam, quaerat reiciendis? Alias cupiditate ea eum inventore libero perspiciatis possimus quibusdam quo repudiandae veritatis?</div>
                <a href="#" class="button rooms_order btn_show_modal" data-modal="room">Забронировать</a>
                <div class="rooms_eye"><i class="fa fa-eye"></i></div>
            </li>
            <li class="rooms_item btn_show_modal" data-modal="room">
                <div class="rooms_title"><h3>Апартаменты "Delux" с&nbsp;кухней</h3></div>
                <div class="rooms_photo" style="background-image: url('{{ asset('/img/01.jpg') }}')"></div>
                <div class="rooms_cost">1212 руб</div>
                <div class="rooms_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eligendi id libero necessitatibus nisi numquam, quaerat reiciendis? Alias cupiditate ea eum inventore libero perspiciatis possimus quibusdam quo repudiandae veritatis?</div>
                <a href="#" class="button rooms_order btn_show_modal" data-modal="room">Забронировать</a>
                <div class="rooms_eye"><i class="fa fa-eye"></i></div>
            </li>
            <li class="rooms_item btn_show_modal" data-modal="room">
                <div class="rooms_title"><h3>Апартаменты "Delux" с&nbsp;кухней</h3></div>
                <div class="rooms_photo" style="background-image: url('{{ asset('/img/01.jpg') }}')"></div>
                <div class="rooms_cost">1212 руб</div>
                <div class="rooms_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eligendi id libero necessitatibus nisi numquam, quaerat reiciendis? Alias cupiditate ea eum inventore libero perspiciatis possimus quibusdam quo repudiandae veritatis?</div>
                <a href="#" class="button rooms_order btn_show_modal" data-modal="room">Забронировать</a>
                <div class="rooms_eye"><i class="fa fa-eye"></i></div>
            </li>
            <li class="rooms_item btn_show_modal" data-modal="room">
                <div class="rooms_title"><h3>Апартаменты "Delux" с&nbsp;кухней</h3></div>
                <div class="rooms_photo" style="background-image: url('{{ asset('/img/01.jpg') }}')"></div>
                <div class="rooms_cost">1212 руб</div>
                <div class="rooms_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque eligendi id libero necessitatibus nisi numquam, quaerat reiciendis? Alias cupiditate ea eum inventore libero perspiciatis possimus quibusdam quo repudiandae veritatis?</div>
                <a href="#" class="button rooms_order btn_show_modal" data-modal="room">Забронировать</a>
                <div class="rooms_eye"><i class="fa fa-eye"></i></div>
            </li>
            <li class="rooms_item empty"></li>
        </ul>
        {{--@foreach($rooms as $room)--}}
            {{--<h1>{{$room->title}}</h1>--}}
        {{--@endforeach--}}
    </div>
</section>