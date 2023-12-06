<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() { 
        $nome2 = "João";
        $idade = 23;
        $arr = [10, 20, 30, 40, 50];
        $nomes = ["Maria", "João", "Matheus", "Pedro"];
    
        return view('welcome', 
        [
            'nome2' => $nome2,
            'idade' => $idade,
            'profissao' => "Administrative assistant",
            'arr' => $arr,
            'nomes' => $nomes,
        ]);
        // com chaves duplas dá pra usar essa variável lá no views
    }
    public function create() {
        return view('events.create');
    }
}
