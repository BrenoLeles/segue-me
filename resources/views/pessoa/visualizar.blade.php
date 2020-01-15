@extends('layouts.template')



@section('titulo', 'Gráfica - Visualizar Pessoa')



@section('conteudo')



<!-- ============================================================== -->

<!-- Start right Content here -->

<!-- ============================================================== -->

<div class="content-page">

    <!-- Start content -->

    <div class="content">

        <!-- Start container -->

        <div class="container">

            <div class="row">
                <div class="card-box" style="display:flex;">
                    <div class="col-md-3 col-sm-12 imagem-perfil-visu">
                        <img src="{{ asset( '/storage/' . $registro->foto ) }}" class="img-responsive">
                    </div>  
                    <div class="col-md-8 text-left">
                        <p class="text-muted font-13"><strong>Nome :</strong> <span class="m-l-15">{{ $registro->nome_pessoa }}</span></p>

                        @if(!empty($registro->email))
                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $registro->email  }}</span></p>
                        @endif
                        <p class="text-muted font-13"><strong>Endereço :</strong><span class="m-l-15">{{ $registro->endereco }}</span></p>
                        
                        @if(!empty($registro->data_nascimento))
                        <p class="text-muted font-13"><strong>Data de nascimento :</strong> <span class="m-l-15">
                            {{ date('d-m-Y', strtotime($registro->data_nascimento)) }}</span>
                        </p>
                        @endif
                        @if(isset($registro->telefone) && !empty($registro->telefone))
                            @foreach (json_decode($registro->telefone) as $tel)
                                <p class="text-muted font-13"><strong>Telefone :</strong>
                                    <span class="m-l-15">{{ $tel->num_telefone }} | {{ $tel->tipo_telefone }} | {{ $tel->operadora_telefone }}</span>
                                </p>
                            @endforeach
                        @endif

                        <p class="text-muted font-13"><strong>Equipe :</strong> <span class="m-l-15">{{ $registro->equipe }}</span></p>
                        <p class="text-muted font-13"><strong>Função :</strong> <span class="m-l-15">{{ $registro->funcao }}</span></p>
                        <hr>
                        <div class="row">
                            <a class="btn btn-default waves-effect waves-light"  href="{{ route('pessoas.editar',$registro->id) }}">Editar</a> 
                            <a onclick="definirDadosDeExclusao(this,{{ $registro->id }})" class="btn btn-danger waves-effect waves-light"
                                            data-toggle="modal" data-target="#con-close-modal">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>

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

    function definirDadosDeExclusao(){

        const nomePessoa = "{{ $registro->nome_pessoa }}";

        

        document.getElementById("nomeAExcluir").innerText = nomePessoa;

        document.getElementById("botaoAExcluir").href = `{{ route('pessoas.deletar', $registro->id ) }}`;

    }

</script>



@endsection