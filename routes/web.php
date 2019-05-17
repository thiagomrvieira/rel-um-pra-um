<?php

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
use App\Client;
use App\Endereco;

Route::get('/clientes', function () {
    $clientes = Client::all();
    foreach($clientes as $c){
        echo "<p> ID: " . $c->id . "</p>";
        echo "<p> Nome: " . $c->nome . "</p>";
        echo "<p> Telefone: " . $c->telefone . "</p>";

        echo "<p> rua : " . $c->endereco->rua . "</p>";
        echo "<p> numero : " .  $c->endereco->numero . "</p>";
        echo "<p> bairro : " . $c->endereco->bairro . "</p>";
        echo "<p> Cidade : " . $c->endereco->cidade . "</p>";
        echo "<p> UF : " . $c->endereco->uf . "</p>";
        echo "<p> CEP : " . $c->endereco->cep . "</p>";

        echo "</br>";
    }
});


Route::get('/enderecos', function () {
    $enderecos = Endereco::all();
    foreach($enderecos as $end){
        echo "<p> ID cliente : " . $end->cliente_id . "</p>";
        echo "<p> rua : " . $end->rua . "</p>";
        echo "<p> numero : " . $end->numero . "</p>";
        echo "<p> bairro : " . $end->bairro . "</p>";
        echo "<p> Cidade : " . $end->cidade . "</p>";
        echo "<p> UF : " . $end->uf . "</p>";
        echo "<p> CEP : " . $end->cep . "</p>";
        echo "</br>";
    }
});