@extends('layouts.main')

@section('title', 'Estudo Laravel')

@section('content')

<div id="container">
    <div>
        <h1>Página que mostra o que contém no banco de dados</h1>
    </div>
</div>

<div id="dados">
    @foreach($events as $event)
        <p> {{ $event->id }} -- {{ $event->title }} -- {{ $event->description }} -- {{ $event->city }} </p>
    @endforeach
</div>

@endsection