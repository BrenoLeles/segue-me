@extends('layouts.template')
@section('titulo', 'Gráfica - Quadrante')
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
                <div class="col-md-6 col-md-offset-3">
                    <!-- <span>Em desenvolvimento</span> -->
                    <form action="{{ route('quadrante.impressao') }}" method="get">
                        <!-- <div class="form-group">
                            <label class="control-label" for="numTelefone">Largura (cm):</label>
                            <input name="largura" type="text" value="10.5" class="required form-control campo-escala">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="numTelefone">Altura (cm):</label>
                            <input name="altura" type="text" value="29.7" class="required form-control campo-escala">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="numTelefone">Margem de segurança (cm):</label>
                            <input name="margem" type="text" value="3.0" class="required form-control campo-escala">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="numTelefone">Quantidade de divisoes:</label>
                            <input name="qtd_divisoes" type="text" value="1" class="required form-control campo-numerico">
                        </div> -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-default waves-effect waves-light">Gerar impressão</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End content -->
</div>
<!-- End content-page -->

<script type="text/javascript">
    window.onload = () => {
        $(".campo-escala").mask("000.0", {reverse: true, maxlength: 5});
    }
    const padroes = {
        um: {
            largura: '21.0',
            altura: '18.0',
            margem: '1.0',
            divisoes: '2'
        },
        dois: {
            largura: '10.5',
            altura: '29.7',
            margem: '3.0',
            divisoes: '1'
        },
        tres: {
            largura: '21.0',
            altura: '18.0',
            margem: '1.0',
            divisoes: '2'
        }
    }
</script>
@endsection