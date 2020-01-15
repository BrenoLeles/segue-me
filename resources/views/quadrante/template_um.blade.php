<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900|Open+Sans:400,700,800|Roboto:300,400,900&display=swap" rel="stylesheet">
<!-- -->
<style>
    @media print {
        .quadrante .pagina{
            page-break-after: always; 
        }
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }
    }
    body {
    @if($dados['largura'] > 14.0)
        font-size:0.7rem;
    @elseif($dados['largura'] > 16.0)
        font-size:0.8rem;
    @elseif($dados['largura'] > 18.0)
        font-size:0.9rem;
    @elseif($dados['largura'] > 20.0 && $dados['qtd_divisoes'] <3)
        font-size:1rem;
    @elseif($dados['largura'] > 22.0 && $dados['qtd_divisoes'] <3)
        font-size:1.1rem;
    @endif
        font-family: 'Roboto', sans-serif;
    }
    /* .quadrante {
        margin-left: 1cm;
    } */
    .quadrante .pagina{
        min-height:28.7cm;
        padding-top: 1cm;
        width:100%;
        display: inline-flex;
    }
    .quadrante div{
        display: block; 
        position: relative;
        /* outline: solid 1px; */
    }
    .divisao-pagina {
        float:left;
        width: {{ $dados['largura'] / $dados['qtd_divisoes'] }}cm;
        padding-left: {{ $dados['margem'] }}cm;
        padding-right:{{ $dados['margem'] }}cm;
        /* min-height: 18cm; */
        min-height: 100%;
        margin: 0;
    }
    /* ESTILO TITULO EQUIPE */
    .pagina .titulo-equipe {
        border-bottom: solid 1px #000;
        margin-bottom: 15px; 
        width: 100%;
    }
    .pagina .titulo-equipe h3{
        margin: 0;
        padding: 0 10px 5px;
        font-size:1.3rem;
    }
    /* ESTILO TITULO FUNÇÃO */
    .pagina .titulo-funcao h4{
        margin: 0;
        padding: 0 10px 2px;
        font-weight: 600;
    }

    /* ESTILO DO QUADRO DE PESSOAS */
    .quadrante .bloco-pessoa {
        border-bottom: solid 1px;
        display: inline-block;
        margin-bottom: 10px;
        width: 100%;
    }
    .bloco-pessoa .info-pessoa p {
        width: 100%;
        padding-left:5px;
    }
    .bloco-pessoa .foto-pessoa{
        width: 15%;
    }
    .bloco-pessoa .info-pessoa{
        width: 85%;
    }
    .bloco-pessoa div{
        float:left;
    }
    .bloco-pessoa .foto-pessoa {
        outline: solid 1px #000;
        max-height: 68px;
        overflow: hidden;
        margin-bottom: 5px;
    }

    .bloco-pessoa .foto-pessoa img{
        max-width: 100%;
    }
    .bloco-pessoa .linha-dividida {
        width: 100%;
    }
    .bloco-pessoa p {
        margin: 0;
        font-size: 0.7em;
    }
    .bloco-pessoa .nome-pessoa {
        text-transform: uppercase;
        font-size:0.8rem;
        font-weight:bold;
    }
    .bloco-pessoa .linha-dividida .data-pessoa, .bloco-pessoa .linha-dividida .email-pessoa {
        width: fit-content;
        float: left;
    }
    .bloco-pessoa .linha-dividida span {
        padding: 0 3px;
        font-weight:900;
        float:left;
        margin-top:-3px;
    }    
    /* .bloco-pessoa .linha-dividida .email-pessoa {
        padding-left: 5px;
    }     */
    .foto-impressoa {
        width: 60px;height:60px;
        background-size: auto 70px;
        background-position: top center;
        -webkit-print-color-adjust: exact;
        background-repeat: no-repeat;
    }

</style>
<div class="quadrante">
    @foreach($equipes as $equipe)
        <?php $auxiliar=1; ?>
        <div class="pagina">
            <div class="divisao-pagina">
                <div class="titulo-equipe">
                    <h3>{{ $equipe->nome }}</h3>
                </div>

                <?php $funcoes = DB::table('funcaos')->where('equipe_id','=', $equipe->id)
                    ->get();
                ?>
            
                @foreach($funcoes as $funcao)
                    <?php 
                        $pessoas = DB::table('pessoas')
                            ->join('funcao_pessoas', 'pessoas.id','=','funcao_pessoas.pessoa_id')
                            ->where('funcao_pessoas.funcao_id','=',$funcao->id)
                            ->where('pessoas.excluido','=','n')
                            ->orderBy('nome','asc')
                            ->get();
                    ?>
                    <div class="titulo-funcao">
                        <h4>{{ $funcao->nome}}:</h4>
                    </div>
                    
                    @foreach($pessoas as $pessoa)
                        <div class="bloco-pessoa">
                            <div class="foto-pessoa">
                                <div class="foto-impressoa"
                                    style="background-image: url({{ asset('storage/' . $pessoa->foto) }}) !important;"></div>
                                <!-- <img src=" {{ asset('storage/' . $pessoa->foto) }}"> -->
                            </div>
                            <div class="info-pessoa"> 
                                <p class="nome-pessoa">
                                    {{ $pessoa->nome }}
                                </p>
                                @if(!empty($pessoa->data_nascimento) || !empty($pessoa->email))
                                <div class="linha-dividida">
                                    @if(!empty($pessoa->data_nascimento) && $pessoa->data_nascimento != null)
                                        <p class="data-pessoa">
                                            {{ date('d/m/Y', strtotime($pessoa->data_nascimento)) }}
                                        </p>
                                    @endif
                                    @if(!empty($pessoa->data_nascimento) && !empty($pessoa->email))
                                        <span>|</span>
                                    @endif
                                    @if(!empty($pessoa->email))
                                        <p class="email-pessoa">
                                            {{ $pessoa->email }}
                                        </p>
                                    @endif
                                </div>
                                @endif
                                <p class="endereco-pessoa">
                                    {{ $pessoa->endereco }}
                                </p>

                                @if(isset($pessoa->telefone) && !empty($pessoa->telefone))
                                    @foreach (json_decode($pessoa->telefone) as $tel)
                                        <p class="telefone-pessoa">
                                            {{ $tel->tipo_telefone }}: {{ $tel->num_telefone }} {{ isset($tel->operadora_telefone)? ' - '.$tel->operadora_telefone :'' }}
                                        </p>
                                    @endforeach
                                @endif
                            </div>
                        </div> 

                        <?php $contador = DB::table('pessoas')
                            ->join('funcao_pessoas', 'funcao_pessoas.pessoa_id','=','pessoas.id')
                            ->join('funcaos', 'funcaos.id','=','funcao_pessoas.funcao_id')
                            ->join('equipes', 'equipes.id','=','funcaos.equipe_id')
                            ->where('equipes.id','=',$equipe->id)->count();
                        ?>
                        @if($auxiliar % 11 == 0 && $contador != 11)
                            </div>
                        </div>
                        <div class="pagina">
                            <div class="divisao-pagina">
                        @endif
                        <?php $auxiliar++; ?>
                    @endforeach
                @endforeach
            </div>
        </div>
    @endforeach
</div>
<script type="text/javascript">
    window.onload = () => {
        window.print();
    }
    window.onfocus = () => {
        console.log('teste')
    }
</script>