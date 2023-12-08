<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//chamando o método que criamos do model pra poder ter acesso ao banco de dados
use App\Models\Event;


class EventController extends Controller
{
    public function index() { 

        $events = Event::all(); //método ORM que pega todos os resgistros

        return view('welcome', ['events' => $events]);
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
