@extends('layout.template')

@section('titulo', 'Editar Cidadão')

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
                            <h4 class="m-t-0 header-title padd-bottom-vinte"><b>Edição de cadastro</b></h4>
                            <form id="cadastroCidadao" action="{{ route('atualizar',$registro->id) }}" method="post" >
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                @include('_form')
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
        var form = $("#cadastroCidadao");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                document.getElementById("cadastroCidadao").submit();
            }
        });
    </script>
@endsection