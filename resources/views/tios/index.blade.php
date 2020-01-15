@extends('layout.site')

@section('titulo', 'Lista de Cidadãos')

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
                            <a href="{{ route('cadastrar') }}" class="btn btn-default waves-effect waves-light">Novo Cadastro</a>
                        </div>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>CPF</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->cpf_entrevistado }}</td>
                                    <td>{{ $registro->nome_entrevistado }}</td>
                                    <td>{{ $registro->telefone }}</td>
                                    <td><a href="{{ route('editar',$registro->id) }}">Editar</a></td>
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

@endsection