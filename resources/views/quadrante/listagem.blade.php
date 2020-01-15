<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900|Open+Sans:400,700,800|Roboto:300,400,900&display=swap" rel="stylesheet">
<!-- -->
<style>

@media print {
        .assinaturas{
            page-break-after: always; 
        }
        @page {
            size: auto;   /* auto is the initial value */
            margin: 1cm;  /* this affects the margin in the printer settings */
        }
}
    body {
        font-family: 'Roboto', sans-serif;
    }
    .info-pessoa {
        display: inline-flex;
    }
    .nome-pessoa {
        width: fit-content;
        float:left;
    }
    .data-pessoa {
        width: fit-content;
        float:left;
    }
    th, td {
        border: solid 1px #000;
        border-collapse: collapse;
        /* word-break:break-all; */
    }
    .assinaturas{
        width:100%;
        text-align: center;
        padding-top: 30px;
    }
    .assinaturas div {
        width: 100%;
    }
    img{
        width:50px;
        height:auto;
    }
</style>

@foreach($equipes as $equipe)
    <?php $funcoes = DB::table('funcaos')->where('equipe_id','=', $equipe->id)
        ->get();
    ?>
    <h2>{{ $equipe->nome }}</h2>
    <div class="pagina">
            <table>
        @foreach($funcoes as $funcao)
            <?php 
                $pessoas = DB::table('pessoas')
                    ->join('funcao_pessoas', 'pessoas.id','=','funcao_pessoas.pessoa_id')
                    ->where('funcao_pessoas.funcao_id','=',$funcao->id)
                    ->where('pessoas.excluido','=','n')
                    ->orderBy('nome','desc')
                    ->get();
            ?>
                    
            @foreach($pessoas as $pessoa)
                <tr>
                    <td><b>Nome:</b>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>
                        @if($pessoa->data_nascimento)
                            {{ date('d/m/Y', strtotime($pessoa->data_nascimento)) }}
                        @endif
                    </td>
                    <td rowspan="2">
                        <img src="{{ asset('storage/' . $pessoa->foto) }}">
                    </td>
                </tr>
                
                <tr>
                    <td>{{ $pessoa->endereco }}</td>
                    <td>
                        @if(isset($pessoa->telefone) && !empty($pessoa->telefone))
                            @foreach (json_decode($pessoa->telefone) as $tel)
                                {{ $tel->tipo_telefone }}: {{ $tel->num_telefone }} {{ isset($tel->operadora_telefone)? ' - '.$tel->operadora_telefone :'' }}
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $funcao->nome}}</td>
                </tr>
            @endforeach
        @endforeach
        <div class="assinaturas">
            <div>
                <span>_______________________________________</span>
            </div>
            <div>
                <span>Assinatura</span>
            </div>
        </div>
    </div>
@endforeach
<script type="text/javascript">
    // window.onload = () => {
    //     window.print();
    // }
    // window.onfocus = () => {
    //     console.log('teste')
    // }
</script>