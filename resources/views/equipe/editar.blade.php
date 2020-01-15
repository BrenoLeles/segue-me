@extends('layouts.template')



@section('titulo', 'Editar Equipe')



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

                            <h4 class="m-t-0 m-b-30 header-title"><b>Edição de cadastro</b></h4>

                            <div class="row">

                                <!-- <form action="{{ route('equipes.atualizar', $equipe->id) }}" method="POST" > -->

                                <form onsubmit="return atualizarEquipe(this)" >

                                    {{ csrf_field() }}

                                    @include('equipe._form')

                                    <input type="hidden" name="_method" value="put">

                                    <div class="col-sm-12">

                                        <button type="submit" class="btn btn-default waves-effect waves-light">Atualizar</button>

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
        function atualizarEquipe(formulario){
            if($(formulario).validate().form()){

                const dados = $(formulario).serialize();

                $.ajax({

                    type: "POST",

                    url: "{{ route('equipes.atualizar', $equipe->id) }}",

                    data: dados,

                    success: function(data)

                    { 

                        mostrarSnackBar(data);

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