@extends('main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <!-- Use asset() para referenciar a imagem -->
                <img src="{{ asset('image/events/' . $event->image) }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"> <ion-icon name="location-outline"></ion-icon> {{ $event->city }} </p>
                <p class="event-participants"> <ion-icon name="people-outline"></ion-icon> X participantes</p>
                <p class="event-owner"> <ion-icon name="start-outline"></ion-icon> Dono do evento</p>
                <a href="#" class="btn btn-primary" id="event-submit" > Confimar Presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                @foreach($event->items as $item)
                    <li> <ion-icon name="play-outline"></ion-icon> {{ $item }} </li>
                @endforeach
                </ul>

            </div>
            <div class="col-md-12 border mt-2 mb-2" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description"> {{ $event->description }} </p>
            </div>
        </div>
    </div>

@endsection
