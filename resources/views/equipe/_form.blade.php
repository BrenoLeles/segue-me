

    <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

    <div class="col-lg-12 form-group clearfix">

        <label class="col-lg-2 control-label " for="nome">Nome da equipe</label>

        <div class="col-lg-10">

            <input id="nome" value="{{ isset($equipe->nome) ? $equipe->nome : '' }}" minlength="3" name="nome" type="text" class="required form-control">

            <!-- <input id="nomeEntrevistado" minlength="3" value="{{ isset($equipe->nome_entrevistado) ? $equipe->nome_entrevistado : '' }}" name="nome_entrevistado" type="text" class="required form-control"> -->

        </div>

    </div>

    <hr>

    <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->



    <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

    <div id="funcaoEquipeDinamica">

            @if(isset($funcao) && !empty($funcao))

                @foreach($funcao as $func)

                    <div class="col-lg-12 form-group clearfix">

                        <label class="col-lg-2 control-label " >Funções</label>

                        <div class="col-lg-7">

                            <input minlength="3" value="{{ $func->nome }}" name="funcoes[]" type="text" class="required form-control">

                        </div>

                        <div class="col-lg-3 div-nova-funcao">

                        <a onclick="this.parentElement.parentElement.remove();" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Remover Função</a>

                        </div>

                    </div>

                @endforeach

            @endif

            <div class="col-lg-12 form-group clearfix">

                <label class="col-lg-2 control-label " >Funções</label>

                <div class="col-lg-7">

                    <input minlength="3" name="funcoes[]" type="text" class="required form-control">

                </div>

                <div class="col-lg-3 div-nova-funcao">

                    <a onclick="novaFuncaoEquipe()" class="btn btn-block btn-md btn-default waves-effect waves-light funcao-equipe">Adicionar outra função</a>

                </div>

            </div>

        <hr>

    </div>

    <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->