@extends('layouts.dashboard')

@section('content')
    {!! Form::model($room, ['route' => ['rooms.update', $room->id]]) !!}
    {!! Form::close() !!}
@endsection