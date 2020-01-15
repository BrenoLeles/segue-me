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

class PessoaController extends Controller
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
    public function cadastrar(){
        $equipes = Equipe::where('excluido','=','n')->get();
        return view('pessoa.cadastrar', compact('equipes'));
    }

    public function visualizar($id){
        $registro = DB::table('pessoas')
        ->join('funcao_pessoas', 'pessoas.id', '=', 'funcao_pessoas.pessoa_id')
        ->join('funcaos', 'funcaos.id', '=', 'funcao_pessoas.funcao_id')
        ->join('equipes', 'equipes.id', '=', 'funcaos.equipe_id')
        ->select('pessoas.id','pessoas.nome AS nome_pessoa', 'email', 'endereco','telefone', 'data_nascimento','funcaos.nome AS funcao',
            'pessoas.foto','equipes.nome AS equipe')
        ->where('pessoas.excluido','=','n')->where('pessoas.id','=',$id)
        ->first();
        
        return view('pessoa.visualizar', compact('registro'));
    }

    public function salvar(Request $req){
        $dados = $req->all();
        if(Pessoa::where('nome','=',$dados['nome'])->where('data_nascimento','=',$dados['data_nascimento'])->where('excluido','=','n')->count()){
            return redirect()->route('pessoa.cadastrar')->with('resposta','Essa pessoa já existe');
        }
        else{
            $arquivo = $req->file('foto');
            if(isset($arquivo)){
                $dados['foto'] = $req->file('foto')->store('images/fotos','public');
            }
            else {
                $dados['foto'] = 'images/fotos/sem-foto.jpg';
            }
            $dados['data_nascimento'] = date('Y-m-d', strtotime($dados['data_nascimento']));

            $telefones = [];
            if (isset($dados['num_telefone'])){
                for ($i=0; $i< count($dados['num_telefone']); $i++) {
                    if(!empty($dados['num_telefone'][$i])){
                        array_push($telefones, [
                            "num_telefone"=>$dados['num_telefone'][$i],
                            "tipo_telefone"=>$dados['tipo_telefone'][$i],
                            "operadora_telefone"=>$dados['operadora_telefone'][$i]
                            ]
                        );
                    }
                }
                $telefones = json_encode($telefones, JSON_UNESCAPED_UNICODE);
            }
            else {
                $telefones = "";
            }
            $dados['telefone'] = $telefones;

            $id_pessoa = Pessoa::create($dados)->id;
            
            Funcao_Pessoa::create([
                'ano'=>$dados['ano'],
                'funcao_id'=>$dados['funcao'],
                'pessoa_id'=>$id_pessoa,
                '_token'=>$dados['_token']
                ]);

            return redirect()->route('pessoas.cadastrar')->with('resposta','Pessoa cadastrada com sucesso!');
        }
    }
    public function editar($id){
        $equipes = Equipe::all();

        $registro = DB::table('pessoas')
        ->join('funcao_pessoas', 'pessoas.id', '=', 'funcao_pessoas.pessoa_id')
        ->join('funcaos', 'funcaos.id', '=', 'funcao_pessoas.funcao_id')
        ->join('equipes', 'equipes.id', '=', 'funcaos.equipe_id')
        ->select('pessoas.id','pessoas.nome AS nome_pessoa', 'email', 'endereco','equipes.id AS equipe_id', 'ano','telefone',
            'data_nascimento','funcaos.nome AS funcao_nome', 'funcaos.id AS funcao_id','pessoas.foto','equipes.nome AS nome_equipe')
        ->where('pessoas.excluido','=','n')->where('pessoas.id','=',$id)
        ->first();
        $funcoes = Funcao::where('equipe_id','=',$registro->equipe_id)->get();

        return view('pessoa.editar', compact('equipes', 'funcoes', 'registro'));
    }
    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
            if($req->hasFile('foto')){
                $arquivo = $req->file('foto');
                $dados['foto'] = $req->file('foto')->store('images/fotos','public');                
            }

            $telefones = [];
            if (isset($dados['num_telefone'])){
                for ($i=0; $i< count($dados['num_telefone']); $i++) {
                    if(!empty($dados['num_telefone'][$i])){
                        array_push($telefones, [
                            "num_telefone"=>$dados['num_telefone'][$i],
                            "tipo_telefone"=>$dados['tipo_telefone'][$i],
                            "operadora_telefone"=>$dados['operadora_telefone'][$i]
                            ]
                        );
                    }
                }
                $telefones = json_encode($telefones, JSON_UNESCAPED_UNICODE);
            }
            else {
                $telefones = "";
            }
            $dados['telefone'] = $telefones;
            $pessoa->update($dados);

            Funcao_Pessoa::where('pessoa_id','=',$id)->where('ano','=',$dados['ano'])->delete();
            
            Funcao_Pessoa::create([
                'ano'=>$dados['ano'],
                'funcao_id'=>$dados['funcao'],
                'pessoa_id'=>$id
            ]);
            return redirect()->route('pessoas.editar', $pessoa->id)->with('resposta','Pessoa atualizada com sucesso!');
        }

        echo "Registro atualizado com sucesso!";
    }
    public function deletar ($id) {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
            $arquivo = $pessoa->foto;
            if(isset($arquivo) && !empty($arquivo) && $arquivo != 'images/fotos/sem-foto.jpg'){
                Storage::disk('public')->delete($arquivo);
            }
            $pessoa->update(array('excluido' => 's'));
        }
        return redirect()->route('pessoas.index');
    }
}
