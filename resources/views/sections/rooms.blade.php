<section id="rooms" class="section">
    Rooms
    @foreach($rooms as $room)
        <h1>{{$room->title}}</h1>
    @endforeach
</section>