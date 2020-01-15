<div>
    <!-- Título do tab section -->
    <h3>Entrevistado</h3>

    <!-- INÍCIO DO FORMULÁRIO DE CAMPOS DO ENTREVISTADO-->
    <section>
        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-12 form-group clearfix">
            <label class="col-lg-2 control-label " for="nomeEntrevistado">Nome *</label>
            <div class="col-lg-10">
                <input id="nomeEntrevistado" minlength="3" value="{{ isset($registro->nome_entrevistado) ? $registro->nome_entrevistado : '' }}" name="nome_entrevistado" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label ">Sexo *</label>
            <div class="col-lg-4">
                <div class="radio-buttom-mesma-linha">
                    <input id="sexoEntrevistadoM" name="sexo_entrevistado" {{ isset($registro->sexo_entrevistado) ? ($registro->sexo_entrevistado=='masculino' ? 'checked' : '') : 'checked' }} value="masculino" type="radio" class="required form-control">
                    <label for="sexoEntrevistadoM" class="control-label">Masculino</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="radio-buttom-mesma-linha">
                    <input id="sexoEntrevistadoF" name="sexo_entrevistado" type="radio" class="form-control">
                    <label for="sexoEntrevistadoF" {{ isset($registro->sexo_entrevistado) && $registro->sexo_entrevistado=='feminino'? 'checked' : ''}} value="feminino" class="control-label ">Feminino</label>
                </div>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-5 control-label " for="dataNascEntrevistado">Data de nascimento *</label>
            <div class="col-lg-7">
                <input id="dataNascEntrevistado" value="{{ isset($registro->data_nascimento_entrevistado) ? $registro->data_nascimento_entrevistado : '' }}" maxlength="10" name="data_nascimento_entrevistado" type="date" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="estadoCivilEntrevistado">Estado civil *</label>
            <div class="col-lg-8">
                <select id="estadoCivilEntrevistado" name="estado_civil_entrevistado" class="required form-control">
                    <option value="solteiro" {{ isset($registro->estado_civil_entrevistado) && $registro->estado_civil_entrevistado == "solteiro" ? "selected" : '' }} >Solteiro (a)</option>
                    <option value="casado" {{ isset($registro->estado_civil_entrevistado) && $registro->estado_civil_entrevistado == "casado" ? "selected" : '' }} >Casado (a)</option>
                    <option value="divorciado" {{ isset($registro->estado_civil_entrevistado) && $registro->estado_civil_entrevistado == "divorciado" ? "selected" : '' }} >Divorciado (a)</option>
                    <option value="viuvo" {{ isset($registro->estado_civil_entrevistado) && $registro->estado_civil_entrevistado == "viuvo" ? "selected" : '' }} >Viúvo (a)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="naturalidadeEntrevistado">Naturalidade *</label>
            <div class="col-lg-8">
                <input id="naturalidadeEntrevistado" value="{{ isset($registro->naturalidade_entrevistado) ? $registro->naturalidade_entrevistado : '' }}" minlength="3" name="naturalidade_entrevistado" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="ufEntrevistado">UF *</label>
            <div class="col-lg-8">
                <select id="ufEntrevistado" name="uf_entrevistado" class="form-control">
                    <option value="AC" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "AC" ? "selected" : '' }} >Acre (AC)</option>
                    <option value="AL" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "AL" ? "selected" : '' }} >Alagoas (AL)</option>
                    <option value="AM" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "AM" ? "selected" : '' }} >Amazonas (AM)</option>
                    <option value="AP" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "AP" ? "selected" : '' }} >Amapá (AP)</option>
                    <option value="BA" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "BA" ? "selected" : '' }} >Bahia (BA)</option>
                    <option value="CE" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "CE" ? "selected" : '' }} >Ceará (CE)</option>
                    <option value="DF" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "DF" ? "selected" : '' }} >Distrito Federal (DF)</option>
                    <option value="ES" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "ES" ? "selected" : '' }} >Espírito Santo (ES)</option>
                    <option value="GO" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "GO" ? "selected" : '' }} >Goiás (GO)</option>
                    <option value="MA" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "MA" ? "selected" : '' }} >Maranhão (MA)</option>
                    <option value="MT" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "MT" ? "selected" : '' }} >Mato Grosso (MT)</option>
                    <option value="MS" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "MS" ? "selected" : '' }} >Mato Grosso do Sul (MS)</option>
                    <option value="MG" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "MG" ? "selected" : '' }} >Minas Gerais (MG)</option>
                    <option value="PA" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "PA" ? "selected" : '' }} >Pará (PA)</option>
                    <option value="PB" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "PB" ? "selected" : '' }} >Paraíba (PB)</option>
                    <option value="PR" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "PR" ? "selected" : '' }} >Paraná (PR)</option>
                    <option value="PE" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "PE" ? "selected" : '' }} >Pernambuco (PE)</option>
                    <option value="PI" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "PI" ? "selected" : '' }} >Piauí (PI)</option>
                    <option value="RJ" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "RJ" ? "selected" : '' }} >Rio de Janeiro (RJ)</option>
                    <option value="RN" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "RN" ? "selected" : '' }} >Rio Grande do Norte (RN)</option>
                    <option value="RS" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "RS" ? "selected" : '' }} >Rio Grande do Sul (RS)</option>
                    <option value="RO" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "RO" ? "selected" : '' }} >Rondônia (RO)</option>
                    <option value="RR" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "RR" ? "selected" : '' }} >Roraima (RR)</option>
                    <option value="SC" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "SC" ? "selected" : '' }} >Santa Catarina (SC)</option>
                    <option value="SP" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "SP" ? "selected" : '' }} >São Paulo (SP)</option>
                    <option value="SE" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "SE" ? "selected" : '' }} >Sergipe (SE)</option>
                    <option value="TO" {{ isset($registro->uf_entrevistado) && $registro->uf_entrevistado == "TO" ? "selected" : '' }} >Tocantins (TO)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="escolaridadeEntrevistado">Escolaridade *</label>
            <div class="col-lg-8"></select>
                <select id="escolaridadeEntrevistado" name="escolaridade_entrevistado" class="form-control">
                    <option value="analfabeto" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "analfabeto" ? "selected" : '' }} >Analfabeto</option>
                    <option value="fundamental-incompleto" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "fundamental-incompleto" ? "selected" : '' }} >Ensino Fundamental (incompleto)</option>
                    <option value="fundamental-completo" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "fundamental-completo" ? "selected" : '' }} >Ensino Fundamental (completo)</option>
                    <option value="medio-incompleto" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "medio-incompleto" ? "selected" : '' }} >Ensino Médio (incompleto)</option>
                    <option value="medio-completo" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "medio-completo" ? "selected" : '' }} >Ensino Médio (completo)</option>
                    <option value="superior-completo" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "superior-completo" ? "selected" : '' }} >Superior (incompleto)</option>
                    <option value="superior-incompleto" {{ isset($registro->escolaridade_entrevistado) && $registro->escolaridade_entrevistado == "superior-incompleto" ? "selected" : '' }} >Superior (completo)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="rgEntrevistado">RG *</label>
            <div class="col-lg-8">
                <input id="rgEntrevistado" value="{{ isset($registro->rg_entrevistado) ? $registro->rg_entrevistado : '' }}" maxlength="10" minlength="5" name="rg_entrevistado" type="text" class="required form-control campo-apenas-num">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="orgExpedidorEntrevistado">Órgão Expedidor *</label>
            <div class="col-lg-8">
                <input id="orgExpedidorEntrevistado" value="{{ isset($registro->orgao_expedidor_entrevistado) ? $registro->orgao_expedidor_entrevistado : '' }}" minlength="3" name="orgao_expedidor_entrevistado" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="cpfEntrevistado">CPF *</label>
            <div class="col-lg-8">
                <input id="cpfEntrevistado" minlength="14" maxlength="14" value="{{ isset($registro->cpf_entrevistado) ? $registro->cpf_entrevistado : '' }}" name="cpf_entrevistado" type="text" class="required form-control campo-cpf">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="profissaoEntrevistado">Profissão *</label>
            <div class="col-lg-8">
                <input id="profissaoEntrevistado" minlength="3" value="{{ isset($registro->profissao_entrevistado) ? $registro->profissao_entrevistado : '' }}" name="profissao_entrevistado" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="ocupacaoEntrevistado">Ocupação</label>
            <div class="col-lg-8">
                <input id="ocupacaoEntrevistado" value="{{ isset($registro->ocupacao_entrevistado) ? $registro->ocupacao_entrevistado : '' }}" minlength="3" name="ocupacao_entrevistado" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="rendaEntrevistado">Renda *</label>
            <div class="col-lg-8">
                <input id="rendaEntrevistado" minlength="3" value="{{ isset($registro->renda_entrevistado) ? $registro->renda_entrevistado : '' }}" name="renda_entrevistado" type="text" class="required form-control campo-dinheiro">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-12 form-group clearfix">
            <label class="col-lg-4 control-label " for="empresaRendaEntrevistado">Empresa em que tem a principal renda</label>
            <div class="col-lg-8">
                <input id="empresaRenda" minlength="3" value="{{ isset($registro->empresa_renda_entrevistado) ? $registro->empresa_renda_entrevistado : '' }}" name="empresa_renda_entrevistado" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-5 control-label" for="vinculoEmpregEntrevistado">Vínculo empregatício</label>
            <div class="col-lg-7">
                <input id="vinculoEmpreg" value="{{ isset($registro->vinculo_empregaticio_entrevistado) ? $registro->vinculo_empregaticio_entrevistado : '' }}" name="vinculo_empregaticio_entrevistado" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="nisEntrevistado">NIS *</label>
            <div class="col-lg-8">
                <input id="nisEntrevistado" value="{{ isset($registro->nis_entrevistado) ? $registro->nis_entrevistado : '' }}" minlength="3" name="nis_entrevistado" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <div class="form-group clearfix">
            <label class="col-lg-12 control-label "><span class="observacao">(*) Obrigatórios</span></label>
        </div>
    </section>
    <!-- FIM DO FORMULÁRIO DE CAMPOS DO ENTREVISTADO-->

    <!-- Título do tab section -->
    <h3>Cônjuge</h3>
    <!-- INÍCIO DO FORMULÁRIO DE CAMPOS DO CÔNJUGE-->
    <section>
        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-12 form-group clearfix">
            <label class="col-lg-2 control-label " for="nomeConjuge">Nome *</label>
            <div class="col-lg-10">
                <input id="nomeConjuge" value="{{ isset($registro->nome_conjuge) ? $registro->nome_conjuge : '' }}" minlength="3" name="nome_conjuge" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label ">Sexo *</label>
            <div class="col-lg-4">
                <div class="radio-buttom-mesma-linha">
                    <input id="sexoConjugeM" {{ isset($registro->sexo_conjuge) ? ($registro->sexo_conjuge=='masculino' ? 'checked' : '') : 'checked' }} name="sexo_conjuge" value="masculino" checked type="radio" class="form-control">
                    <label for="sexoConjugeM" class="control-label ">Masculino</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="radio-buttom-mesma-linha">
                    <input id="sexoConjugeF" {{ isset($registro->sexo_conjuge) && $registro->sexo_conjuge =='feminino' ? 'checked' : '' }} name="sexo_conjuge" value="feminino" type="radio" class="form-control">
                    <label for="sexoConjugeF" class="control-label ">Feminino</label>
                </div>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-5 control-label" for="dataNascConjuge">Data de nascimento *</label>
            <div class="col-lg-7">
                <input id="dataNascConjuge" value="{{ isset($registro->data_nascimento_conjuge) ? $registro->data_nascimento_conjuge : '' }}" maxlength="10" name="data_nascimento_conjuge" type="date" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="estadoCivilConjuge">Estado civil *</label>
            <div class="col-lg-8">
                <select id="estadoCivilConjuge" name="estado_civil_conjuge" class="required form-control">
                    <option value="solteiro" {{ isset($registro->estado_civil_conjuge) && $registro->estado_civil_conjuge == "solteiro" ? "selected" : '' }} >Solteiro (a)</option>
                    <option value="casado" {{ isset($registro->estado_civil_conjuge) && $registro->estado_civil_conjuge == "casado" ? "selected" : '' }} >Casado (a)</option>
                    <option value="divorciado" {{ isset($registro->estado_civil_conjuge) && $registro->estado_civil_conjuge == "divorciado" ? "selected" : '' }} >Divorciado (a)</option>
                    <option value="viuvo" {{ isset($registro->estado_civil_conjuge) && $registro->estado_civil_conjuge == "viuvo" ? "selected" : '' }} >Viúvo (a)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="regimeUniao">Regime de união</label>
            <div class="col-lg-8">
                <input id="regimeUniao" value="{{ isset($registro->regime_uniao_conjuge) ? $registro->regime_uniao_conjuge : '' }}" minlength="3" name="regime_uniao_conjuge" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="juntosDesde">Juntos desde</label>
            <div class="col-lg-8">
                <input id="juntosDesde" value="{{ isset($registro->juntos_desde_conjuge) ? $registro->juntos_desde_conjuge : '' }}" maxlength="4" name="juntos_desde_conjuge" type="text" class="form-control campo-apenas-num">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="naturalidadeConjuge">Naturalidade *</label>
            <div class="col-lg-8">
                <input id="naturalidadeConjuge" value="{{ isset($registro->naturalidade_conjuge) ? $registro->naturalidade_conjuge : '' }}" minlength="3" name="naturalidade_conjuge" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="ufConjuge">UF *</label>
            <div class="col-lg-8">
                <select id="ufConjuge" name="uf_conjuge" class="form-control">
                    <option value="AC" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "AC" ? "selected" : '' }} >Acre (AC)</option>
                    <option value="AL" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "AL" ? "selected" : '' }} >Alagoas (AL)</option>
                    <option value="AM" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "AM" ? "selected" : '' }} >Amazonas (AM)</option>
                    <option value="AP" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "AP" ? "selected" : '' }} >Amapá (AP)</option>
                    <option value="BA" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "BA" ? "selected" : '' }} >Bahia (BA)</option>
                    <option value="CE" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "CE" ? "selected" : '' }} >Ceará (CE)</option>
                    <option value="DF" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "DF" ? "selected" : '' }} >Distrito Federal (DF)</option>
                    <option value="ES" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "ES" ? "selected" : '' }} >Espírito Santo (ES)</option>
                    <option value="GO" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "GO" ? "selected" : '' }} >Goiás (GO)</option>
                    <option value="MA" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "MA" ? "selected" : '' }} >Maranhão (MA)</option>
                    <option value="MT" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "MT" ? "selected" : '' }} >Mato Grosso (MT)</option>
                    <option value="MS" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "MS" ? "selected" : '' }} >Mato Grosso do Sul (MS)</option>
                    <option value="MG" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "MG" ? "selected" : '' }} >Minas Gerais (MG)</option>
                    <option value="PA" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "PA" ? "selected" : '' }} >Pará (PA)</option>
                    <option value="PB" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "PB" ? "selected" : '' }} >Paraíba (PB)</option>
                    <option value="PR" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "PR" ? "selected" : '' }} >Paraná (PR)</option>
                    <option value="PE" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "PE" ? "selected" : '' }} >Pernambuco (PE)</option>
                    <option value="PI" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "PI" ? "selected" : '' }} >Piauí (PI)</option>
                    <option value="RJ" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "RJ" ? "selected" : '' }} >Rio de Janeiro (RJ)</option>
                    <option value="RN" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "RN" ? "selected" : '' }} >Rio Grande do Norte (RN)</option>
                    <option value="RS" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "RS" ? "selected" : '' }} >Rio Grande do Sul (RS)</option>
                    <option value="RO" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "RO" ? "selected" : '' }} >Rondônia (RO)</option>
                    <option value="RR" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "RR" ? "selected" : '' }} >Roraima (RR)</option>
                    <option value="SC" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "SC" ? "selected" : '' }} >Santa Catarina (SC)</option>
                    <option value="SP" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "SP" ? "selected" : '' }} >São Paulo (SP)</option>
                    <option value="SE" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "SE" ? "selected" : '' }} >Sergipe (SE)</option>
                    <option value="TO" {{ isset($registro->uf_conjuge) && $registro->uf_conjuge == "TO" ? "selected" : '' }} >Tocantins (TO)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="escolaridadeConjuge">Escolaridade *</label>
            <div class="col-lg-8"></select>
                <select id="escolaridadeConjuge" name="escolaridade_conjuge" class="form-control">
                    <option value="analfabeto">Analfabeto</option>
                    <option value="analfabeto" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "analfabeto" ? "selected" : '' }} >Analfabeto</option>
                    <option value="fundamental-incompleto" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "fundamental-incompleto" ? "selected" : '' }} >Ensino Fundamental (incompleto)</option>
                    <option value="fundamental-completo" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "fundamental-completo" ? "selected" : '' }} >Ensino Fundamental (completo)</option>
                    <option value="medio-incompleto" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "medio-incompleto" ? "selected" : '' }} >Ensino Médio (incompleto)</option>
                    <option value="medio-completo" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "medio-completo" ? "selected" : '' }} >Ensino Médio (completo)</option>
                    <option value="superior-completo" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "superior-completo" ? "selected" : '' }} >Superior (incompleto)</option>
                    <option value="superior-incompleto" {{ isset($registro->escolaridade_conjuge) && $registro->escolaridade_conjuge == "superior-incompleto" ? "selected" : '' }} >Superior (completo)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="rgConjuge">RG *</label>
            <div class="col-lg-8">
                <input id="rgConjuge" value="{{ isset($registro->rg_conjuge) ? $registro->rg_conjuge : '' }}" maxlength="10" minlength="5" name="rg_conjuge" type="text" class="required form-control campo-apenas-num">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="orgExpedidorConjuge">Órgão Expedidor *</label>
            <div class="col-lg-8">
                <input id="orgExpedidorConjuge" value="{{ isset($registro->orgao_expedidor_conjuge) ? $registro->orgao_expedidor_conjuge : '' }}" minlength="3" name="orgao_expedidor_conjuge" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="cpfConjuge">CPF *</label>
            <div class="col-lg-8">
                <input id="cpfConjuge" value="{{ isset($registro->cpf_conjuge) ? $registro->cpf_conjuge : '' }}" minlength="14" maxlength="14" name="cpf_conjuge" type="text" class="required form-control campo-cpf">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="profissaoConjuge">Profissão</label>
            <div class="col-lg-8">
                <input id="profissaoConjuge" value="{{ isset($registro->profissao_conjuge) ? $registro->profissao_conjuge : '' }}" name="profissao_conjuge" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="ocupacaoConjuge">Ocupação</label>
            <div class="col-lg-8">
                <input id="ocupacaoConjuge" value="{{ isset($registro->ocupacao_conjuge) ? $registro->ocupacao_conjuge : '' }}" name="ocupacao_conjuge" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="rendaConjuge">Renda</label>
            <div class="col-lg-8">
                <input id="rendaConjuge" value="{{ isset($registro->renda_conjuge) ? $registro->renda_conjuge : '' }}" name="renda_conjuge" type="text" class="form-control capmo-dinheiro">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-12 form-group clearfix">
            <label class="col-lg-2 control-label" for="vinculoEmpregConjuge">Vínculo empregatício</label>
            <div class="col-lg-10">
                <input id="vinculoEmpreg" value="{{ isset($registro->vinculo_empregaticio_conjuge) ? $registro->vinculo_empregaticio_conjuge : '' }}" name="vinculo_empregaticio_conjuge" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

    </section>
    <!-- FIM DO FORMULÁRIO DE CAMPOS DO CÔNJUGE-->
    
    <!-- Título do tab section -->
    <h3>Situação Habitacional</h3>
    <!-- INÍCIO DO FORMULÁRIO DE SITUAÇÃO HABITACIONAL-->
    <section>
        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-12 form-group clearfix">
            <label class="col-lg-2 control-label " for="endreco">Endereço *</label>
            <div class="col-lg-10">
                <input id="endreco" value="{{ isset($registro->endereco) ? $registro->endereco : '' }}" name="endereco" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="numeroEndereco">Número</label>
            <div class="col-lg-8">
                <input id="numeroEndereco" value="{{ isset($registro->numero) ? $registro->numero : '' }}" name="numero" type="text" class="form-control campo-apenas-num">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="telefone">Telefone</label>
            <div class="col-lg-8">
                <input id="telefone" value="{{ isset($registro->telefone) ? $registro->telefone : '' }}" placeholder="(xx) xxxxx-xxxx" name="telefone" type="text" class="form-control campo-telefone">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="cidade">Cidade *</label>
            <div class="col-lg-8">
                <input id="cidade" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}" name="cidade" type="text" class="required form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="uf">UF *</label>
            <div class="col-lg-8">
                <select id="uf" name="uf_habitacao" class="form-control">
                    <option value="AC" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "AC" ? "selected" : '' }} >Acre (AC)</option>
                    <option value="AL" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "AL" ? "selected" : '' }} >Alagoas (AL)</option>
                    <option value="AM" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "AM" ? "selected" : '' }} >Amazonas (AM)</option>
                    <option value="AP" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "AP" ? "selected" : '' }} >Amapá (AP)</option>
                    <option value="BA" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "BA" ? "selected" : '' }} >Bahia (BA)</option>
                    <option value="CE" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "CE" ? "selected" : '' }} >Ceará (CE)</option>
                    <option value="DF" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "DF" ? "selected" : '' }} >Distrito Federal (DF)</option>
                    <option value="ES" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "ES" ? "selected" : '' }} >Espírito Santo (ES)</option>
                    <option value="GO" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "GO" ? "selected" : '' }} >Goiás (GO)</option>
                    <option value="MA" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "MA" ? "selected" : '' }} >Maranhão (MA)</option>
                    <option value="MT" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "MT" ? "selected" : '' }} >Mato Grosso (MT)</option>
                    <option value="MS" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "MS" ? "selected" : '' }} >Mato Grosso do Sul (MS)</option>
                    <option value="MG" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "MG" ? "selected" : '' }} >Minas Gerais (MG)</option>
                    <option value="PA" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "PA" ? "selected" : '' }} >Pará (PA)</option>
                    <option value="PB" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "PB" ? "selected" : '' }} >Paraíba (PB)</option>
                    <option value="PR" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "PR" ? "selected" : '' }} >Paraná (PR)</option>
                    <option value="PE" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "PE" ? "selected" : '' }} >Pernambuco (PE)</option>
                    <option value="PI" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "PI" ? "selected" : '' }} >Piauí (PI)</option>
                    <option value="RJ" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "RJ" ? "selected" : '' }} >Rio de Janeiro (RJ)</option>
                    <option value="RN" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "RN" ? "selected" : '' }} >Rio Grande do Norte (RN)</option>
                    <option value="RS" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "RS" ? "selected" : '' }} >Rio Grande do Sul (RS)</option>
                    <option value="RO" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "RO" ? "selected" : '' }} >Rondônia (RO)</option>
                    <option value="RR" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "RR" ? "selected" : '' }} >Roraima (RR)</option>
                    <option value="SC" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "SC" ? "selected" : '' }} >Santa Catarina (SC)</option>
                    <option value="SP" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "SP" ? "selected" : '' }} >São Paulo (SP)</option>
                    <option value="SE" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "SE" ? "selected" : '' }} >Sergipe (SE)</option>
                    <option value="TO" {{ isset($registro->uf_habitacao) && $registro->uf_habitacao == "TO" ? "selected" : '' }} >Tocantins (TO)</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="cep">CEP</label>
            <div class="col-lg-8">
                <input id="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}" name="cep" type="text" class="form-control campo-cep">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="pontoReferencia">Ponto de referência</label>
            <div class="col-lg-8">
                <input id="pontoReferencia" value="{{ isset($registro->ponto_referencia) ? $registro->ponto_referencia : '' }}" name="ponto_referencia" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="tempoResidencia">Tempo de residência na cidade</label>
            <div class="col-lg-5">
                <input id="tempoResidencia" value="{{ isset($registro->tempo_residencia) ? $registro->tempo_residencia : '' }}" placeholder="em anos" maxlength="3" name="tempo_residencia" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-8 control-label" for="tempoEndereco">Tempo de residência no endereço atual</label>
            <div class="col-lg-4">
                <input id="tempoEndereco" value="{{ isset($registro->tempo_endereco) ? $registro->tempo_endereco : '' }}" placeholder="em anos" maxlength="3" name="tempo_endereco" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="situacaoImovel">Situação do imóvel</label>
            <div class="col-lg-8">
                <input id="situacaoImovel" value="{{ isset($registro->situacao) ? $registro->situacao : '' }}" name="situacao" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="aluguelCompromete">Aluguel compromete mais de 30% da renda? </label>
            <div class="col-lg-8">
                <select id="aluguelCompromete"  name="aluguel_compromete" class="form-control">
                    <option value="sim" {{ isset($registro->aluguel_compromete) && $registro->aluguel_compromete == "sim" ? "selected" : '' }} >Sim</option>
                    <option value="não" {{ isset($registro->aluguel_compromete) && $registro->aluguel_compromete == "não" ? "selected" : '' }} >Não</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="tipoConstrucao">Tipo de construção</label>
            <div class="col-lg-8">
                <input id="tipoConstrucao" value="{{ isset($registro->tipo_construcao) ? $registro->tipo_construcao : '' }}" name="tipo_construcao" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="iluminacao">Iluminação</label>
            <div class="col-lg-8">
                <input id="iluminacao" value="{{ isset($registro->iluminacao) ? $registro->iluminacao : '' }}" name="iluminacao" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="agua">Água</label>
            <div class="col-lg-8">
                <input id="agua" value="{{ isset($registro->agua) ? $registro->agua : '' }}" name="agua" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-4 control-label" for="destinoDejetos">Destino dos dejetos</label>
            <div class="col-lg-8">
                <input id="destinoDejetos" value="{{ isset($registro->destino_dejetos) ? $registro->destino_dejetos : '' }}" name="destino_dejetos" type="text" class="form-control">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

    </section>
    <!-- FIM DO FORMULÁRIO DE CAMPOS DE SITUAÇÃO HABITACIONAL -->

    <!-- Título do tab section -->
    <h3>Composição Familiar</h3>
    <!-- INÍCIO DO FORMULÁRIO DA COMPOSIÇÃO FAMILIAR-->
    <section>

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numeroFamilias">Número de famílias na casa *</label>
            <div class="col-lg-5">
                <input id="numeroFamilias" value="{{ isset($registro->qtd_familias) ? $registro->qtd_familias : '' }}" maxlength="2" name="qtd_familias" type="text" class="required form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numPessoasCasa">Número de pessoas na casa * </label>
            <div class="col-lg-5">
                <input id="numPessoasCasa" value="{{ isset($registro->qtd_pessoas) ? $registro->qtd_pessoas : '' }}" min="2" onfocusout="comporPessoasAdicionais()" maxlength="2" name="qtd_pessoas" type="text" class="required form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numAdultosCasa">Quantos adultos residem na casa</label>
            <div class="col-lg-5">
                <input id="numAdultosCasa" value="{{ isset($registro->qtd_adultos) ? $registro->qtd_adultos : '' }}" maxlength="2" name="qtd_adultos" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numIdososCasa">Quantos idosos residem na casa</label>
            <div class="col-lg-5">
                <input id="numIdososCasa" value="{{ isset($registro->qtd_idosos) ? $registro->qtd_idosos : '' }}" maxlength="2" name="qtd_idosos" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numCrianca">Quantas crianças residem na casa</label>
            <div class="col-lg-5">
                <input id="numCrianca" value="{{ isset($registro->qtd_criancas) ? $registro->qtd_criancas : '' }}" maxlength="2" name="qtd_criancas" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numGestantesCasa">Quantas gestantes residem na casa</label>
            <div class="col-lg-5">
                <input id="numGestantesCasa" value="{{ isset($registro->qtd_gestantes) ? $registro->qtd_gestantes : '' }}" maxlength="2" name="qtd_gestantes" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="numDeficientes">Quantos deficientes residem na casa</label>
            <div class="col-lg-5">
                <input id="numDeficientes" value="{{ isset($registro->qtd_deficientes) ? $registro->qtd_deficientes : '' }}" maxlength="2" name="qtd_deficientes" type="text" class="form-control campo-numerico">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="totalDesepesas">Total das despesas</label>
            <div class="col-lg-5">
                <input id="totalDesepesas" value="{{ isset($registro->total_despesas) ? $registro->total_despesas : '' }}" placeholder="R$" name="total_despesas" type="text" class="form-control campo-dinheiro">
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="partipaPrograma">Participa de algum programa social?</label>
            <div class="col-lg-5">
                <select id="partipaPrograma" name="se_beneficiado_programa" class="form-control">
                    <option value="sim" {{ isset($registro->se_beneficiado_programa) && $registro->se_beneficiado_programa == "sim" ? "selected" : '' }} >Sim</option>
                    <option value="não" {{ isset($registro->se_beneficiado_programa) && $registro->se_beneficiado_programa == "sim" ? "selected" : '' }} >Não</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->

        <!-- INÍCIO LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <div class="col-lg-6 form-group clearfix">
            <label class="col-lg-7 control-label" for="partipaPrograma">Foi beneficiado de algum programa habitacional?</label>
            <div class="col-lg-5">
                <select id="partipaPrograma" name="se_participa_programa" class="form-control">
                    <option value="sim" {{ isset($registro->se_participa_programa) && $registro->se_participa_programa == "sim" ? "selected" : '' }} >Sim</option>
                    <option value="não" {{ isset($registro->se_participa_programa) && $registro->se_participa_programa == "sim" ? "selected" : '' }} >Não</option>
                </select>
            </div>
        </div>
        <!-- FIM LINHA AO MEIO COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <!-- INÍCIO DOS CAMPOS DINÂMICOS -->
        <span style="display:inline-block; font-size: 1.5em;font-weight: 900;padding-top: 30px;">Pessoas Adicionais</span>
        <div id="pessoasAdicionais">
            @if (isset($registro->pessoas_adicionais) && !empty(pessoas_adicionais))
            <div class="pessoa-adicional">
                <hr>
                <h4 style="font-size:1.4em; font-weight: 900;font-style: italic;">Pessoa adicional
                    <span style="font-weight: 900;font-style: italic; font-size:0.7em"> - 
                        <a style="cursor: pointer;" onclick="removerPessoaAdicional(this)">remover</a>
                    </span>
                </h4>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="example-input1-group1">Nome</label>
                            <div class="input-group tamanho-cem">
                                <input type="text" name="nome-adicional[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="example-input1-group1">Data Nascimento</label>
                            <div class="input-group tamanho-cem">
                                <input type="date" maxlength="10" name="data-nasc-adicional[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="example-input1-group1">Se trabalha salariado</label>
                            <div class="input-group tamanho-cem">
                                <select id="seTrabSalariado" name="se-salariado-adicional[]" class="form-control">
                                    <option value="s">Sim</option>
                                    <option value="n">Não</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="example-input1-group1">Grau de parentesco</label>
                            <div class="input-group tamanho-cem">
                                <input type="text" id="example-input1-group1" name="parentesco-adicional[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <span style="font-style=italic;">Não há pessoas adicionais</span>
            @endif
        </div>
        <div>
            <hr>
            <span>
                <a style="cursor:pointer; font-weight: 900;" onclick="adicionarPessoaAdicional()">Adicionar nova pessoa adicional</a>
            </span>
        </div>
        <!-- FIM DOS CAMPOS DINÂMICOS -->
        
        <!-- INÍCIO LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
        <span style="display:inline-block; font-size: 1.5em;font-weight: 900;padding-top: 30px;">Observações</span>
        <div class="col-lg-12 form-group clearfix">
            <textarea id="observacoes" value="{{ isset($registro->observacoes) ? $registro->observacoes : '' }}" name="observacoes" class="form-control" rows="5"></textarea>
        </div>
        <!-- FIM LINHA COM LABEL A ESQUERDA E CAMPO DE TEXTO A DIREITA -->
    </section>
    <!-- FIM DO FORMULÁRIO DE CAMPOS DA COMPOSIÇÃO FAMILIAR -->
</div>
