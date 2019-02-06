@extends('layouts.dashboard')

@section('content')
    <a href="{{ route('rooms.create') }}">Add room</a>
    @foreach($rooms as $room)
        <h1><a href="{{ route('rooms.edit', [$room]) }}">{{$room->title}}</a></h1>
        <p>{{$room->description}}</p>
        <strong>{{$room->cost}}</strong>
    @endforeach
@endsection