@extends('layouts.template')



@section('titulo', 'Gráfica - Listar Pessoas')



@section('conteudo')



<!-- ============================================================== -->

<!-- Start right Content here -->

<!-- ============================================================== -->

<div class="content-page">

    <!-- Start content -->

    <div class="content">

        <!-- Start container -->

        <div class="container">

            <!-- Start Row -->

            <div class="row">

                <div class="col-sm-12">

                    <div class="card-box table-responsive">

                        <h4 class="m-t-0 header-title"><b>Lista de Cidadãos</b></h4>

                        <div class="elemento-solitario">

                            <a href="{{ route('pessoas.cadastrar')}}" class="btn btn-default waves-effect waves-light">Novo Cadastro</a>

                        </div>

                        <table id="datatable" class="table table-striped table-bordered">

                            <thead>

                                <tr>

                                    <th class="pessoa-coluna-foto">Foto</th>

                                    <th class="pessoa-coluna-nome">Nome</th>

                                    <th class="pessoa-coluna-equipe">Equipe</th>

                                    <th class="pessoa-coluna-funcoes"></th>

                                    <th class="pessoa-coluna-funcoes"></th>

                                    <th class="pessoa-coluna-funcoes"></th>

                                </tr>

                            </thead>

                            <tbody>

                            @foreach($registros as $registro)

                                <tr>

                                    <td>

                                        <img class="imagem-foto-tabela" src="{{isset($registro->foto) ? asset('storage/'.$registro->foto) : '' }}">

                                    </td>

                                    <td>{{ $registro->nome_pessoa }}</td>

                                    <td>{{ $registro->nome_equipe }}</td>

                                    <td>

                                        <a class="btn btn-default waves-effect waves-light"  href="{{ route('pessoas.editar',$registro->id) }}">Editar</a>

                                    </td>

                                    <td>

                                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('pessoas.visualizar',$registro->id) }}">Visualizar</a>

                                    </td>

                                    <td>

                                        <a onclick="definirDadosDeExclusao(this,{{ $registro->id }})" class="btn btn-danger waves-effect waves-light"

                                        data-toggle="modal" data-target="#con-close-modal">Excluir</a>

                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <!-- End Row -->

        </div>

        <!-- End container -->

    </div>

    <!-- End content -->

</div>

<!-- End content-page -->



<!-- MODAL DE DELETAR -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog"> 

        <div class="modal-content"> 

            <div class="modal-header"> 

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 

                <h4 class="modal-title">Deseja realmente excluir esse registro?</h4> 

            </div> 

            <div class="modal-body"> 

                <div class="row"> 

                    <span>Excluir a pessoa <b id="nomeAExcluir"></b>? Essa ação não será reversível.

                </div>

            </div> 

            <div class="modal-footer"> 

                <a class="btn btn-default waves-effect" data-dismiss="modal">Não</a> 

                <a href="" id="botaoAExcluir" class="btn btn-danger waves-effect waves-light">Sim</a> 

            </div> 

        </div> 

    </div>

</div><!-- /.modal -->



<script type="text/javascript">

    function definirDadosDeExclusao(elemento,idParaExcluir){

        const nomePessoa = elemento.parentElement.parentElement.querySelectorAll("td:nth-child(2)")[0].textContent;

        

        document.getElementById("nomeAExcluir").innerText = nomePessoa;

        document.getElementById("botaoAExcluir").href = `/pessoas/deletar/${idParaExcluir}`;

    }

</script>



@endsection