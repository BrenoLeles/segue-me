@extends('usuario.template_usuario')



@section('titulo', 'Atualizar Usuário')



@section('conteudo')



<div class="wrapper-page">

	<div class=" card-box">

		<div class="panel-heading">

			<h3 class="text-center">ATUALIZAR USUÁRIO</strong> </h3>

		</div>



		<div class="panel-body">

			<!-- <form class="form-horizontal m-t-20" action="{{ route('usuario.atualizar',$registro->id) }}"> -->
			<form class="form-horizontal m-t-20" onsubmit="return atualizarUsuario(this)">

				{{ csrf_field() }}

				@include('usuario.formulario')

				<div class="form-group text-center m-t-40">

					<div class="col-xs-12">

						<button class="btn btn-blue btn-block text-uppercase waves-effect waves-light" type="submit">

							Atualizar

						</button>

					</div>

				</div>

			</form>



		</div>

	</div>

</div>

<script type="text/javascript">

function verificarSenhas(senhaConfirm){
	const senha = document.getElementById("senha").value;
	
	if(senha != senhaConfirm.value){
		mostrarSnackBar("Senhas não correspondem");
		senhaConfirm.focus();
		return false;
	}
	return true;
}

function atualizarUsuario(formulario){

	if($(formulario).validate().form() && verificarSenhas(document.getElementById("senha_confirm"))){

		const dados = $(formulario).serialize();


		$.ajax({

			type: "GET",

			url: "{{ route('usuario.atualizar',$registro->id) }}",

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

