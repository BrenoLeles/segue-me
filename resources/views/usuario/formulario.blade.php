<div class="form-group ">

    <div class="col-xs-12">

        <input class="form-control" minlenght="3" value="{{ isset($registro->email) ? $registro->email : '' }}"
            name="email" type="email" required="" placeholder="Email">

    </div>

</div>



<div class="form-group ">

    <div class="col-xs-12">

        <input class="form-control" value="{{ isset($registro->name) ? $registro->name : '' }}" name="name" type="text" required="" placeholder="Nome completo">

    </div>

</div>



<div class="form-group">

    <div class="col-xs-12">

        <input class="form-control" id="senha" name="password" type="password" required="" placeholder="Senha">

    </div>

</div>

<div class="form-group">

    <div class="col-xs-12">

        <input class="form-control" id="senha_confirm" onlostfocus="verificarSenhas(this)" name="senha_confirm" type="password" required="" placeholder="Confirmar senha">

    </div>

</div>

