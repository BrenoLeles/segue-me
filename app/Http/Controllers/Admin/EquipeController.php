<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Equipe;
use App\Models\Funcao;

class EquipeController extends Controller
{
    public function index(){
        
        $registros = DB::table('equipes')->select('*')->where('excluido','=','n')->get();
        return view('equipe.index', compact('registros'));
    }
    public function cadastrar(){
        return view('equipe.cadastrar');
    }
    public function salvar(Request $req){
        $dados = $req->all();
        if(Equipe::where('nome','=',$dados['nome'])->where('excluido','=','n')->count()){
            echo "Equipe já existe!";
        }
        else{
            $id_equipe = Equipe::create($dados)->id;
            foreach ($dados['funcoes'] as $funcao) {
                if(!empty($funcao)){
                    $func = [
                        'equipe_id'=>$id_equipe,
                        'nome'=>$funcao,
                        '_token'=>$dados['_token']
                    ];
                    Funcao::create($func);
                }
            }
            echo "Equipe cadastrada com sucesso!";
        }
    }
    public function editar($id){
        $equipe = Equipe::find($id);
        $funcao = Funcao::where('equipe_id','=',$id)->get();
        return view('equipe.editar', compact('equipe', 'funcao'));
    }
    public function atualizar(Request $req, $id){
        $dados = $req->all();

        $checando = Funcao::where('equipe_id','=',$id)->get()->toArray(); // CHECA SE ALGUMA FUNÇÃO FOI DELETADA PELO USUÁRIO
        foreach($checando as $se_e_pra_deletar){
            if(!in_array($se_e_pra_deletar, $dados['funcoes'])){
                Funcao::find($se_e_pra_deletar['id'])->delete();
            }
        }

        foreach ($dados['funcoes'] as $funcao) {   // CHECA SE AS FUNÇÕES INSERIDAS JÁ EXISTEM NO BANCO, SE NÃO, INCLUIR
            if(!Equipe::where('nome','=',$funcao)->count() && !empty($funcao)){
                Funcao::create(['nome'=>$funcao,'equipe_id'=>$id, '_token'=>$dados['_token']]);
            }
        }
        Equipe::find($id)->update($dados);

        echo "Registro atualizado com sucesso!";
    }
    public function deletar ($id) {
        Equipe::find($id)->update(array('excluido' => 's'));
        return redirect()->route('equipes.index');
    }
    public function buscarFuncoes($id){
        $funcoes = Funcao::where('equipe_id','=',$id)->get();
        echo JSON_ENCODE($funcoes,JSON_UNESCAPED_UNICODE);
        
    }
}
