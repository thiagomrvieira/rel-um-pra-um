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
        
        // $e = Endereco::where('cliente_id', $c->id)->first();
        
        echo "<p> Rua : " . $c->endereco->rua . "</p>";
        echo "<p> Número : " .  $c->endereco->numero . "</p>";
        echo "<p> Bairro : " . $c->endereco->bairro . "</p>";
        echo "<p> Cidade : " . $c->endereco->cidade . "</p>";
        echo "<p> UF : " . $c->endereco->uf . "</p>";
        echo "<p> CEP : " . $c->endereco->cep . "</p>";

        echo "<hr>";
    }
});


Route::get('/enderecos', function () {
    $enderecos = Endereco::all();
    foreach($enderecos as $end){
        echo "<p> ID cliente : " . $end->client_id . "</p>";

        echo "<p> Nome: " . $end->client->nome . "</p>";
        echo "<p> Telefone: " . $end->client->telefone . "</p>";
        
        echo "<p> Rua : " . $end->rua . "</p>";
        echo "<p> Numero : " . $end->numero . "</p>";
        echo "<p> Bairro : " . $end->bairro . "</p>";
        echo "<p> Cidade : " . $end->cidade . "</p>";
        echo "<p> UF : " . $end->uf . "</p>";
        echo "<p> CEP : " . $end->cep . "</p>";
        echo "<hr>";
    }
});