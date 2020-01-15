$( document ).ready(function() {

    $(".campo-numerico").mask("000.000.000.000.000", {reverse: true, maxlength: 9999999999999});

    $(".campo-apenas-num").mask("000000000000000", {reverse: true, maxlength: 999999999999999});

    $(".campo-cpf").mask("000.000.000-00", {reverse: true, maxlength: 999999999});

    // $(".campo-telefone").mask("(00)00000-0000", {reverse: false, maxlength: 999999999}); 

    $(".campo-cep").mask("00.000-000", {reverse: true, maxlength: 999999999});

    $(".campo-dinheiro").maskMoney({prefix:'R$ ', allowNegative: false, allowZero: true, defaultZero: false, thousands:'.', decimal:',', affixesStay: false});
});

// document.getElementsByClassName('.campo-telefone').onkeydow = (this) => console.log(this);


function mostrarSnackBar(texto = "Alerta!") {

	$("body").append(`<div id="snackbarAviso"><span class="ico-info"></span><p class="snackbar-texto">${texto}</p></div>`);

	setTimeout(()=> {

		document.getElementById("snackbarAviso").remove();

	}, 5000);

}



function novaFuncaoEquipe() {

    const btRemover = `<a onclick="this.parentElement.parentElement.remove();" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Remover Função</a>`;

    const elementos = document.getElementsByClassName("div-nova-funcao");

    elementos[elementos.length-1].innerHTML= btRemover;



    const content = `<div class="col-lg-12 form-group clearfix">

                        <label class="col-lg-2 control-label " >Funções</label>

                        <div class="col-lg-7">

                            <input minlength="3" name="funcoes[]" type="text" class="required form-control">

                        </div>

                        <div class="botao-remover-funcao"></div>

                        <div class="col-lg-3 div-nova-funcao">

                            <a onclick="novaFuncaoEquipe()" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Adicionar outra função</a>

                        </div>

                        <hr>

                    </div>`;

    

    $('#funcaoEquipeDinamica').append(content);

}

function novoTelefonePessoa() {

    const btRemover = `<a onclick="this.parentElement.parentElement.remove();" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Remover Telefone</a>`;

    const elementos = document.getElementsByClassName("div-novo-telefone");

    if (elementos.length >= 3){

        mostrarSnackBar("É permitdo cadastrar somente até três telefones.");

        return;

    }

    elementos[elementos.length-1].innerHTML= btRemover;



    const content = `

    <div class="col-lg-12 form-group clearfix">

        <div class="col-lg-4">

            <label class="col-lg-4 control-label" for="numTelefone">Telefone</label>

            <div class="col-lg-8">

                <input minlength="9" name="num-telefone[]" onkeyup="mascararTelefone(this)" placeholder="(XX)XXXXX-XXXX" type="text" id="numTelefone" class="required form-control tipo-telefone">

            </div>

        </div>

        <div class="col-lg-3">

            <label class="col-lg-3 control-label" for="tipoTelefone" >Tipo</label>

            <div class="col-lg-9">

                <select id="tipoTelefone" name="tipo-telefone" class="required form-control">

                    <option value="Celular">Celular</option>

                    <option value="Fixo">Fixo</option>

                    <option value="Recados">Recados</option>

                </select>

            </div>

        </div>

        <div class="col-lg-3">

            <label class="col-lg-4 control-label" for="tipoTelefone" >Operadora</label>

            <div class="col-lg-8">

                <select id="tipoTelefone" name="tipo-telefone" class="form-control">

                    <option value=""></option>

                    <option value="VIVO">VIVO</option>

                    <option value="CLARO">Claro</option>

                    <option value="TIM">TIM</option>

                    <option value="OI">OI</option>

                </select>

            </div>

        </div>

        <div class="col-lg-2 div-novo-telefone">

            <a onclick="novoTelefonePessoa()" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Outro Telefone</a>

        </div>

    </div>

    <hr>`;

    

    $('#funcaoTelefoneDinamico').append(content);

}
function mascararTelefone(elemento){
    if(elemento.value.length <= 13){
        $(elemento).mask("(00)0000-00000", {reverse: false, maxlength: 999999999});
    }
    else {
        $(elemento).mask("(00)00000-0000", {reverse: false, maxlength: 999999999});
    }
}