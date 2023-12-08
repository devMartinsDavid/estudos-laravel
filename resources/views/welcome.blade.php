@extends('main')

@section('title', 'Estudo Laravel')

@section('content')

<div id="search-container" class="col-md-12 mb-4">
   <h1>Busque um evento</h1>
   <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
   </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3 customer-card">
            <img src="./image/events/{{ $event->image }} " alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">11/05/2023</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="/create/{{ $event->id }}" class="btn btn-primary">Saiba mais...</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection