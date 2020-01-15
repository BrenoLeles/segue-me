<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Equipe;
use App\Models\Funcao;
use App\Models\Pessoa;
use App\Models\Funcao_Pessoa;

class QuadranteController extends Controller
{
    public function index(){

        $registros = DB::table('pessoas')
            ->join('funcao_pessoas', 'pessoas.id', '=', 'funcao_pessoas.pessoa_id')
            ->join('funcaos', 'funcaos.id', '=', 'funcao_pessoas.funcao_id')
            ->join('equipes', 'equipes.id', '=', 'funcaos.equipe_id')
            ->select('pessoas.id','pessoas.nome AS nome_pessoa', 'pessoas.foto','equipes.nome AS nome_equipe')
            ->where('pessoas.excluido','=','n')
            ->get();
        return view('pessoa.index', compact('registros'));
    }
    public function indexQuadrante(){
        return view('quadrante.index');
    }
    public function gerarQuadrante(){
        $equipes = Equipe::where('excluido','=','n')->get();
        // dd($equipes);
        return view('quadrante.gerar', compact('equipes'));
    }
 
    public function impressao(Request $req){
        $dados = array(
            'largura'=> 8,
            'altura'=> 29.7,
            'margem'=> 1.5
        );
        $equipes = Equipe::where('excluido','=','n')->get();
        
        return view('quadrante.impressao', compact('equipes', 'dados'));
    }
 
    public function impressao_doisQuadrante(Request $req){
        $dados = $req->all();

        $equipes = Equipe::where('excluido','=','n')->get();
        
        return view('quadrante.template_dois', compact('equipes', 'dados'));
    }
 
    public function listagemQuadrante(){
        $equipes = Equipe::where('excluido','=','n')->get();
        
        return view('quadrante.listagem', compact('equipes'));
    }
}
