<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});
Route::get('/products/{id?}', function ($id = 1 ) {
    return view('product', ['id' => $id]);
});