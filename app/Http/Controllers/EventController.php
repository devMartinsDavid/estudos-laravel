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
        return view('events.create');
    }
}
