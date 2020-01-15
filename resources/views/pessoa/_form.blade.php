<div class="row">

    @if(isset($equipes))

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <div class="col-lg-12 form-group clearfix">

            <div class="col-lg-4">

                <label class="col-lg-2 control-label" for="equipe">Equipe</label>

                <div class="col-lg-10">

                    <select onchange="buscarFuncoes(this.value)" id="equipe" name="equipe" class="form-control">

                        <option disabled value selected>Selecione uma equipe:</option>

                        @foreach($equipes as $equipe)

                            <option value="{{ $equipe->id }}" {{ isset($registro) && $registro->nome_equipe == $equipe->nome ? 'selected' : ''}} >{{$equipe->nome}}</option>

                        @endforeach

                    </select>

                </div>

            </div>

            <div class="col-lg-4">

                <label class="col-lg-2 control-label" for="funcao">Função</label>

                <div class="col-lg-10">

                    <select id="funcao" {{ !isset($funcoes) ? 'disabled' : '' }} name="funcao" class="form-control">

                        @if(isset($funcoes))

                            @foreach($funcoes as $funcao)

                                <option value="{{ $funcao->id }}" {{ $funcao->id == $registro->funcao_id ? 'selected' : '' }} >{{ $funcao->nome }}</option>

                            @endforeach

                        @else

                            <option value="0">Selecione uma equipe</option>

                        @endif

                    </select>

                </div>

            </div>

            <div class="col-lg-4 form-group clearfix">

                <label class="col-lg-2 control-label " for="ano">Ano</label>

                <div class="col-lg-10">

                    <select id="ano" name="ano" {{ isset($registro->ano)? '' : 'disabled' }} class="required form-control campos-pessoas">

                        <option value="2019" {{ isset($registro->ano) && $registro->ano == "2019" ? 'selected' : '' }} >2019</option>

                        <option value="2020" {{ isset($registro->ano) && $registro->ano == "2020" ? 'selected' : '' }} >2020</option>

                        <option value="2021" {{ isset($registro->ano) && $registro->ano == "2021" ? 'selected' : '' }} >2021</option>

                        <option value="2022" {{ isset($registro->ano) && $registro->ano == "2022" ? 'selected' : '' }} >2022</option>

                        <option value="2023" {{ isset($registro->ano) && $registro->ano == "2023" ? 'selected' : '' }} >2023</option>

                        <option value="2024" {{ isset($registro->ano) && $registro->ano == "2024" ? 'selected' : '' }} >2024</option>

                        <option value="2025" {{ isset($registro->ano) && $registro->ano == "2025" ? 'selected' : '' }} >2025</option>

                    </select>

                </div>

            </div>

        </div>

        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <div class="col-lg-12 form-group clearfix">

            <div class="col-lg-6">

                <label class="col-lg-2 control-label" for="nome">Nome</label>

                <div class="col-lg-10">

                    <input id="nome" {{ !isset($registro) ? 'disabled' : '' }} value="{{ isset($registro->nome_pessoa) ? $registro->nome_pessoa : '' }}" minlength="3" name="nome"

                        placeholder="Nome completo" type="text" class="required form-control campos-pessoas">

                </div>

            </div>

            <div class="col-lg-6">

                <label class="col-lg-2 control-label" for="endereco">Endereço</label>

                <div class="col-lg-10">

                    <input id="endereco" {{ !isset($registro) ? 'disabled' : '' }} value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" minlength="3" 

                        placeholder="Endereço completo" name="endereco" type="text" class="required form-control campos-pessoas">

                </div>

            </div>

        </div>

        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->



        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <div class="col-lg-12 form-group clearfix">

            <div class="col-lg-4">

                <label class="col-lg-3 control-label" for="email">Email</label>

                <div class="col-lg-9">

                    <input id="email" {{ !isset($registro) ? 'disabled' : '' }} value="{{ isset($registro->email) ? $registro->email : '' }}" minlength="3" name="email" type="email" class="form-control campos-pessoas">

                </div>

            </div>

            <div class="col-lg-4">

                <label class="col-lg-6 control-label" for="data_nascimento">Data de nascimento</label>

                <div class="col-lg-6">

                    <input type="date" {{ !isset($registro) ? 'disabled' : '' }} value="{{ isset($registro->data_nascimento) ? $registro->data_nascimento : '' }}" minlength="10" maxlength="10" name="data_nascimento" id="data_nascimento" class="form-control campos-pessoas">

                </div>

            </div>

            <div class="col-lg-4 col-sm-12">

                <label class="col-lg-2 control-label" for="foto">Foto</label>

                <div class="col-lg-10">
                    
                    <input type="file" {{ !isset($registro) ? 'disabled' : '' }} name="foto" class="filestyle campos-pessoas"
                         data-placeholder="{{ isset($registro->foto) ? ( $registro->foto == 'images/fotos/sem-foto.jpg' ? 'Sem foto' : $registro->foto ) : 'Sem arquivo' }}">

                    <!-- <input type="file" {{ !isset($registro) ? 'disabled' : '' }} class="filestyle campos-pessoas" data-buttonbefore="true"

                        name="foto" id="filestyle-8" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">

                    <div class="bootstrap-filestyle input-group">

                        <span class="group-span-filestyle input-group-btn" tabindex="0">

                            <label for="filestyle-8" class="btn btn-default ">

                                <span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>

                                <span class="buttonText">Arquivo</span>

                            </label>

                        </span>

                        <input type="text" class="form-control " placeholder="{{ isset($registro->foto) ? $registro->foto : '' }}" disabled=""> -->

                    </div>
                </div>

            </div>

        </div>

        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->



        <div id="Telefones">

            <div class="col-lg-12">

                <h4>Telefone de contato</h4>

            </div>

            <div class="row" id="funcaoTelefoneDinamico">

                @if(isset($registro->telefone) && !empty($registro->telefone))

                    @foreach(json_decode($registro->telefone) as $tel)

                        <div class="col-lg-12 form-group clearfix">

                            <div class="col-lg-4">

                                <label class="col-lg-4 control-label" for="numTelefone">Telefone</label>

                                <div class="col-lg-8">

                                    <input minlength="9" name="num_telefone[]" onkeyup="mascararTelefone(this)" type="text" value="{{ $tel->num_telefone }}"

                                        placeholder="(XX)XXXXX-XXXX" id="numTelefone" class="required form-control campo-telefone campos-pessoas">

                                </div>

                            </div>

                            <div class="col-lg-3">

                                <label class="col-lg-3 control-label" for="tipoTelefone" >Tipo</label>

                                <div class="col-lg-9">

                                    <select id="tipoTelefone" name="tipo_telefone[]" class="required form-control campos-pessoas">

                                        <option value="Celular" {{ $tel->tipo_telefone == 'Celular' ? 'selected' : '' }} >Celular</option>

                                        <option value="Fixo" {{ $tel->tipo_telefone == 'Fixo' ? 'selected' : '' }} >Fixo</option>

                                        <option value="Recados" {{ $tel->tipo_telefone == 'Recados' ? 'selected' : '' }} >Recados</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-3">

                                <label class="col-lg-4 control-label" for="operadora" >Operadora</label>

                                <div class="col-lg-8">

                                    <select id="operadora" name="operadora_telefone[]" class="form-control campos-pessoas">

                                        <option value=""></option>

                                        <option value="VIVO" {{ isset($tel->operadora_telefone) && $tel->operadora_telefone == 'VIVO' ? 'selected' : '' }} >VIVO</option>

                                        <option value="CLARO" {{ isset($tel->operadora_telefone) && $tel->operadora_telefone == 'CLARO' ? 'selected' : '' }} >CLARO</option>

                                        <option value="TIM" {{ isset($tel->operadora_telefone) && $tel->operadora_telefone == 'TIM' ? 'selected' : '' }} >TIM</option>

                                        <option value="OI" {{ isset($tel->operadora_telefone) && $tel->operadora_telefone == 'OI' ? 'selected' : '' }} >OI</option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-2 div-novo-telefone">

                                <a onclick="this.parentElement.parentElement.remove();" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Remover Telefone</a>

                            </div>

                        </div>

                        <hr>

                    @endforeach

                @endif

                <div class="col-lg-12 form-group clearfix">

                    <div class="col-lg-4">

                        <label class="col-lg-4 control-label" for="numTelefone">Telefone</label>

                        <div class="col-lg-8">

                            <input minlength="9" {{ !isset($registro) ? 'disabled' : '' }} name="num_telefone[]" type="text" onkeyup="mascararTelefone(this)"

                                placeholder="(XX)XXXXX-XXXX" id="numTelefone" class="required form-control campo-telefone campos-pessoas">

                        </div>

                    </div>

                    <div class="col-lg-3">

                        <label class="col-lg-3 control-label" for="tipoTelefone" >Tipo</label>

                        <div class="col-lg-9">

                            <select id="tipoTelefone" {{ !isset($registro) ? 'disabled' : '' }} name="tipo_telefone[]" class="required form-control campos-pessoas">

                                <option value="Celular">Celular</option>

                                <option value="Fixo">Fixo</option>

                                <option value="Recados">Recados</option>

                            </select>

                        </div>

                    </div>

                    <div class="col-lg-3">

                        <label class="col-lg-4 control-label" for="operadora" >Operadora</label>

                        <div class="col-lg-8">

                            <select id="operadora" {{ !isset($registro) ? 'disabled' : '' }} name="operadora_telefone[]" class="form-control campos-pessoas">

                                <option value=""></option>

                                <option value="VIVO">VIVO</option>

                                <option value="CLARO">CLARO</option>

                                <option value="TIM">TIM</option>

                                <option value="OI">OI</option>

                            </select>

                        </div>

                    </div>

                    <div class="col-lg-2 div-novo-telefone">

                        <a onclick="novoTelefonePessoa()" class="btn btn-block btn-md btn-default waves-effect waves-light campos-pessoas">Outro Telefone</a>

                    </div>

                </div>

                <hr>

            </div>

        </div>

    @else

        <div class="col-lg-12"><h3>Necessário criar uma Equipe primeiramente.</h3></div>

    @endif

</div>



<script type="text/javascript">

function buscarFuncoes(equipeId = 0){

    const dados = {equipe_id:equipeId};

    const selectFuncoes = document.getElementById("funcao");

    $.ajax({

        type: "GET",

        url: "/equipes/buscar-funcoes/"+equipeId,

        data: dados,

        success: function(data)

        { 

            selectFuncoes.options.length = 0;

            const elementos = JSON.parse(data);

            elementos.forEach((elemento)=>{

                selectFuncoes.options[selectFuncoes.options.length] = new Option(elemento.nome, elemento.id );

            });

            if(elementos){

                selectFuncoes.disabled = false;

                const elementos = document.getElementsByClassName("campos-pessoas");

                for (let i=0; i <elementos.length; i++){

                    elementos[i].disabled = false;

                }

            }

        },

        error: function(xhr, status, error) {

            alert(xhr.responseText);

        }

    });

}

</script>