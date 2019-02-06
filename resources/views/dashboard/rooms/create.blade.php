@extends('layouts.dashboard')

@section('content')
    {!! Form::open(['route' => 'rooms.store']) !!}

    {!! Form::label('title', 'Название номера') !!}
    {!! Form::text('title') !!}

    {!! Form::label('description', 'Описание номера') !!}
    {!! Form::textarea('description') !!}

    {!! Form::label('cost', 'Цена за сутки') !!}
    {!! Form::number('cost') !!}

    {!! Form::submit('Сохранить'); !!}

    {!! Form::button('Cancel') !!}

    {!! Form::close() !!}
@endsection