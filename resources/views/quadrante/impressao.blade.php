<!DOCTYPE html>
            <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Impressão de certificado</title>
                    <style>
                        @font-face {
                            font-family: 'AlexBrush-Regular';
                            font-weight: normal;
                            src: url('http://localhost:8000/uploads/certificados/AlexBrush-Regular.ttf')  format('truetype');
                        }
                        @font-face {
                            font-family: 'Crimson-Bold';
                            font-weight: normal;
                            src: url('/uploads/certificados/Crimson-Bold.otf')  format('truetype');
                        }
                        @font-face {
                            font-family: 'Crimson-Italic';
                            font-weight: normal;
                            src: url('/uploads/certificados/Crimson-Italic.otf') format('truetype') ;
                        }
                        @font-face {
                            font-family: 'Crimson-Roman';
                            font-weight: normal;
                            src: url('/uploads/certificados/Crimson-Roman.otf') format('truetype') ;
                        }
                        @font-face {
                            font-family: 'Crimson-Semibold';
                            font-weight: normal;
                            src: url('/uploads/certificados/Crimson-Semibold.otf') format('truetype') ;
                        }
                        
                        @media print {
                            @page {
                            margin: 0px 0px 0px 0px !important;
                            padding: 0px 0px 0px 0px !important;
                            size: landscape;
                            }
                            *{margin:0;padding:0}
                        }
                        *{margin:0;padding:0}
                        body {
                        }
                        .corpo-certificado {
                            width: 29.7cm;
                            /* height:20cm; */
                            top:0;
                            background: url('http://localhost:8000/uploads/certificados/bg-ead.jpg');
                            -webkit-print-color-adjust: exact;
                            background-color:#000;
                            background-attachment: scroll;
                            background-size: 100% auto;
                            background-repeat: no-repeat;
                            width: 20cm;
                        }
                        .nome-aluno {
                            color:#ffffff;
                            font-size:46px;
                            width: 100%;
                            text-align: center;
                            margin-top: 9.4cm;
                            font-family: 'AlexBrush-Regular';
                        }
                        .nome-aluno h2 {
                            margin: 0;
                            font-weight: normal;
                        }
                        .descricao-curso {
                            font-family: 'Crimson-Roman';
                            color:#ffffff;
                            width: 100%;
                            text-align: center;
                            display: inline-flex;
                        }
                        .descricao-curso p{
                            margin: auto;
                            margin-top: 0.5cm;
                            max-width: 14.5cm;
                            font-size: 20px;
                        }
                        .imagem-fundo {
                            position: absolute;
                            width: 100%;
                            height: auto;
                            z-index: 99999;
                            top: 0;
                        }
                    </style>
                </head>
                <body>
                    <div class="corpo-certificado">
                        <!-- <div class="imagem-fundo">
                            <img src="/uploads/certificados/bg-ead.jpg">
                        </div> -->
                        <div class="nome-aluno">
                            <h2>
                                Nome do Aluno
                            </h2>
                        </div>
                        <div class="descricao-curso">
                            <p>
                                concluiu o curso Bolsa de Valores na modalidade EAD
                                com carga horária de 10 horas, no período de 00/00/2019.
                            </p>
                        </div>
                    </div>
                </body>
            </html>