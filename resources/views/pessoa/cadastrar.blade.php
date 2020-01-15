@extends('layouts.template')



@section('titulo', 'Gráfica - Cadastrar Pessoa')



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

                        <div class="card-box" style="display:inline-block">

                            <h4 class="m-t-0 header-title padd-bottom-vinte"><b>Cadastrar pessoa</b></h4>

                            <!-- <form action="{{ route('pessoas.salvar') }}" method="POST" enctype="multipart/form-data"> -->
                            <form onsubmit="return cadastrarPessoa(this)" method="POST" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                @include('pessoa._form')

                                <div class="col-sm-12">

                                    <button type="submit" class="btn btn-default waves-effect waves-light">Salvar</button>

                                </div>

                            </form>

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

        function cadastrarPessoa(formulario){

            if($(formulario).validate().form()){

                formulario.action="{{ route('pessoas.salvar') }}";

                formulario.submit();

            }
            return false;

        }

    </script>



@if(session('resposta'))

<script type="text/javascript">

    window.onload = () =>{

        mostrarSnackBar("{{ session('resposta') }}");

    }

</script>

@endif

@endsection