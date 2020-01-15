<?php

use App\Models\Equipe;

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
    if(Auth::guest()){
        return view('usuario.login');
    }
    $registros = Equipe::all();
    return view('equipe.index', compact('registros'));
});
Route::get('/login/sair', ['as'=>'login.sair','uses'=>'Admin\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'login.entrar','uses'=>'Admin\LoginController@entrar']);
Auth::routes();
Route::get('/login', ['as'=>'login','uses'=>'Admin\LoginController@index']);

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');

    // ROTAS DE MANUTENÇÃO DE USUÁRIO
    Route::post('/usuario/salvar', ['as'=>'usuario.salvar','uses'=>'Admin\LoginController@salvar']);
    Route::get('/registrar', ['as'=>'registrar','uses'=>'Admin\LoginController@registrar']);
    Route::get('/usuario/atualizar/{id}', ['as'=>'usuario.atualizar','uses'=>'Admin\LoginController@atualizar']);
    Route::get('/usuario/editar', ['as'=>'usuario.editar','uses'=>'Admin\LoginController@editar']);
    Route::get('/usuario/deletar/{id}', ['as'=>'usuario.deletar','uses'=>'Admin\LoginController@deletar']);
 
    // ROTAS DE MANUTENÇÃO DE EQUIPES 
    Route::get('/equipes', ['as'=>'equipes.index','uses'=>'Admin\EquipeController@index']);
    Route::get('/equipes/cadastrar', ['as'=>'equipes.cadastrar','uses'=>'Admin\EquipeController@cadastrar']);
    Route::post('/equipes/salvar', ['as'=>'equipes.salvar','uses'=>'Admin\EquipeController@salvar']);
    Route::get('/equipes/editar/{id}', ['as'=>'equipes.editar','uses'=>'Admin\EquipeController@editar']);
    Route::put('/equipes/atualizar/{id}', ['as'=>'equipes.atualizar','uses'=>'Admin\EquipeController@atualizar']);
    Route::get('/equipes/deletar/{id}', ['as'=>'equipes.deletar','uses'=>'Admin\EquipeController@deletar']);
    Route::get('/equipes/buscar-funcoes/{id}', ['as'=>'equipes.buscar-funcoes','uses'=>'Admin\EquipeController@buscarFuncoes']);

    // ROTAS DE MANUTENÇÃO DE PESSOAS
    Route::get('/pessoas', ['as'=>'pessoas.index','uses'=>'Admin\PessoaController@index']);
    Route::get('/pessoas/cadastrar', ['as'=>'pessoas.cadastrar','uses'=>'Admin\PessoaController@cadastrar']);
    Route::post('/pessoas/salvar', ['as'=>'pessoas.salvar','uses'=>'Admin\PessoaController@salvar']);
    Route::get('/pessoas/editar/{id}', ['as'=>'pessoas.editar','uses'=>'Admin\PessoaController@editar']);
    Route::put('/pessoas/atualizar/{id}', ['as'=>'pessoas.atualizar','uses'=>'Admin\PessoaController@atualizar']);
    Route::get('/pessoas/deletar/{id}', ['as'=>'pessoas.deletar','uses'=>'Admin\PessoaController@deletar']);
    Route::get('/pessoas/visualizar/{id}', ['as'=>'pessoas.visualizar','uses'=>'Admin\PessoaController@visualizar']);

    
    // ROTAS DE MANUTENÇÃO DE PESSOAS
    Route::get('/quadrante', ['as'=>'quadrante.index','uses'=>'Admin\QuadranteController@indexQuadrante']);
    Route::get('/quadrante/impressao', ['as'=>'quadrante.impressao','uses'=>'Admin\QuadranteController@impressao']);
    Route::get('/quadrante/impressao_dois', ['as'=>'quadrante.impressao_dois','uses'=>'Admin\QuadranteController@impressao_doisQuadrante']);
    Route::get('/quadrante/listagem', ['as'=>'quadrante.listagem','uses'=>'Admin\QuadranteController@listagemQuadrante']);
});

