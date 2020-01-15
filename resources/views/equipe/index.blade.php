@extends('layouts.template')



@section('titulo', 'Lista de Equipes')



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

                        <h4 class="m-t-0 header-title"><b>Lista de Equipes</b></h4>

                        <div class="elemento-solitario">

                            <a href="{{ route('equipes.cadastrar')}}" class="btn btn-default waves-effect waves-light">Novo Cadastro</a>

                        </div>

                        <table id="datatable" class="table table-striped table-bordered">

                            <thead>

                                <tr>

                                    <th>Nome</th>

                                    <th class="pessoa-coluna-funcoes"></th>

                                    <th class="pessoa-coluna-funcoes"></th>

                                </tr>

                            </thead>

                            <tbody>

                            @foreach($registros as $registro)

                                <tr>

                                    <td>{{ $registro->nome }}</td>

                                    <td><a class="btn btn-default waves-effect waves-light"  href="{{  route('equipes.editar',$registro->id) }}">Editar</a></td>

                                    <td><a onclick="definirDadosDeExclusao(this,{{ $registro->id }})" class="btn btn-danger waves-effect waves-light"
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

                    <span>Excluir a equipe <b id="nomeAExcluir"></b>? Essa ação não será reversível.

                </div>

            </div> 

            <div class="modal-footer"> 

                <a class="btn btn-default waves-effect" data-dismiss="modal">Não</a> 

                <a href="" id="botaoAExcluir" class="btn btn-danger waves-effect waves-light">Sim</a> 

            </div> 

        </div> 

    </div>

</div><!-- /.modal -->

<!-- End content-page -->
<script type="text/javascript">

    function definirDadosDeExclusao(elemento,idParaExcluir){

        const nomeEquipe = elemento.parentElement.parentElement.querySelectorAll("td:nth-child(1)")[0].textContent;

        

        document.getElementById("nomeAExcluir").innerText = nomeEquipe;

        document.getElementById("botaoAExcluir").href = `/equipes/deletar/${idParaExcluir}`;

    }

</script>


@endsection