<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;

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
    return view('welcome');
});


Route::post('/cadastrar-usuario', function(Request $informacoes){

    Usuario::create([
        'nome' => $informacoes->primeiro_nome, 
        'sobrenome' => $informacoes->sobrenome, 
        'apelido' => $informacoes->apelido, 
        'data_nascimento' => $informacoes->data_nascimento, 
        'email' => $informacoes->email, 
        'senha' => $informacoes->senha, 
        'whatsapp' => $informacoes->whatsapp,

    ]); 

    echo "Usuário cadastrado !"; 
 
    

}); 
