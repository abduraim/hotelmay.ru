@extends('layouts.dashboard')

@section('content')
    @foreach($rooms as $room)
        <h1>{{$room->title}}</h1>
        <p>{{$room->description}}</p>
        <strong>{{$room->cost}}</strong>
    @endforeach
@endsection