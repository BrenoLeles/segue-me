@extends('usuario.template_usuario')



@section('titulo', 'Registrar Usuário')



@section('conteudo')



<div class="wrapper-page">

    <div class=" card-box">

    <div class="panel-heading text-center"> 

        <div class="logo-in-login">

            <img src="/images/logos/logo-header.png">

            <!-- <h4>LOGIN</h4> -->

        </div>

    </div> 

    <div class="panel-body">

        <form class="form-horizontal m-t-20" action="{{ route('login.entrar') }}" method="POST">

            {{ csrf_field() }}

            <div class="form-group ">

                <div class="col-xs-12">

                    <input class="form-control" name="email" type="text" required="" placeholder="e-mail">

                </div>

            </div>



            <div class="form-group">

                <div class="col-xs-12">

                    <input class="form-control" name="senha" type="password" required="" placeholder="Senha">

                </div>

            </div>

            

            <div class="form-group text-center m-t-40">

                <div class="col-xs-12">

                    <button class="btn btn-blue btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>

                </div>

            </div>

            <!-- <div class="form-group m-t-30 m-b-0">

                <div class="col-sm-12">

                    <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Esqueceu a senha?</a>

                </div>

            </div> -->

        </form> 

    </div>

</div>


@if(session('resposta'))

<script type="text/javascript">

    window.onload = () =>{

        mostrarSnackBar("{{ session('erro_senha') }}");

    }

</script>

@endif

@endsection