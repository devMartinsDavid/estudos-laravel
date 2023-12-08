@extends('main')

@section('title', 'Crie um evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/create" method="POST" enctype="multipart/form-data" class="form-create">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" name="title" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" name="title" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" name="city" id="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option>Selecione:</option>
                    <option value="0">Não</option>
                    <option value="1">sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class=" btn btn-primary mt-2" value="Criar Evento">
        </form>
</div>
@endsection