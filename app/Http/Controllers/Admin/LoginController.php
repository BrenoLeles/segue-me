<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Equipe;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('usuario.login');
    }
    public function entrar(Request $req){
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('equipes.index');
        }
        return redirect()->route('login')->with('erro_senha','E-mail ou senha inválida.');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function registrar(){
        return view('usuario.registrar');
    }


    public function salvar(Request $req){
        $dados = $req->all();

        if(isset($dados['password'])){
            $dados['password'] = bcrypt($dados['password']);
        }

        User::create($dados);
        echo "Usuário criado com sucesso!";
    }
    public function editar(){
        $registro = Auth::user();
        return view('usuario.editar', compact('registro'));
    }
    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if(isset($dados['password'])){
            $dados['password'] = bcrypt($dados['password']);
        }
        $usuario = User::find($id)->update($dados);

        return "Usuário atualizado com sucesso!";
    }
    public function deletar ($id) {
        User::find($id)->delete();
        return redirect()->route('login');
    }
}
