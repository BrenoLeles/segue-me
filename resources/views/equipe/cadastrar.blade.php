@extends('layouts.template')

@section('titulo', 'Cadastrar Equipe')

@section('conteudo')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Wizard with Validation -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title"><b>Cadastro de Equipe</b></h4>
                            <div class="row">
                                <form onsubmit="return cadastrarEquipe(this)" >
                                <!-- <form action="{{ route('equipes.salvar') }}" method="POST" > -->
                                    {{ csrf_field() }}
                                    @include('equipe._form')
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default waves-effect waves-light">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->

            </div> <!-- container -->
                        
        </div> <!-- content -->

        <!-- <footer class="footer">
        </footer> -->

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    
<script type="text/javascript">

    function cadastrarEquipe(formulario){
        if($(formulario).validate().form()){
            const dados = $(formulario).serialize();
            $.ajax({
                type: "POST",
                url: "{{ route('equipes.salvar') }}",
                data: dados,
                success: function(data)
                { 
                    mostrarSnackBar(data);
                    formulario.reset();
                    return true;
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
            return false;
        }else {
            return false;
        }
    }
</script>

@endsection