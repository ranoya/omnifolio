<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="pinterest" content="nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Editorial, HQ & Artefatos Narrativos Digitais * UFPE</title>
    <meta name="generator" content="slides.com" />
    <meta name="description" content="Material de apoio da disciplina de Editorial, HQ & Artefatos Narrativos Digitais da Universidade Federal de
		Pernambuco">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="editorial, narrativa, hq, livros">
    <meta property="og:url" content="https://www.ranoya.com/aulas/interfaces/index.html">
    <meta property="og:title" content="Design de Interfaces * UFPE">
    <meta property="og:description" content="Material de apoio da disciplina de Editorial, HQ & Artefatos Narrativos Digitais da Universidade Federal de
		Pernambuco">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/And600.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/And600.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/And600.jpg" />

    <link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/And16.png">
    <link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/And57.png" />
    <link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/And57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/And72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/And114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/And144.png" />

    <meta name="theme-color" content="#0dc2f2">
    <meta name="msapplication-navbutton-color" content="#0dc2f2">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0dc2f2">
    <link rel="stylesheet" type="text/css" href="https://www.projetao.com.br/style/CIncolor.css">

    <script>
        // FUNÇÃO URL GET
        // urlGet('xpto'); www.site.com/?xpto=teste
        // let data = $_GET['xpto']; www.site.com/?xpto=teste

        $_GET = [];
        (function() {
            corte = window.location.href.toString().indexOf('?');
            if (corte > 0) {
                argumento = window.location.href.toString().substring(corte + 1);
                argumentos = argumento.split('&');
                for (arg in argumentos) {
                    let argCorte = argumentos[arg].indexOf('=');
                    $_GET[argumentos[arg].substring(0, argCorte)] = argumentos[arg].substring(argCorte + 1);
                }
            }
        })();
    </script>

    <script src="https://www.ranoya.com/Assets/JSLibs/DataT/basics.js"></script>
    <script src="https://www.ranoya.com/Assets/JSLibs/timeliner/timeliner.js"></script>



</head>

<body>



    <style>
        html {
            background-color: #780ac1;
        }

        body {
            margin: 30px;
            font-family: Helvetica, Arial, sans-serif;
            background-color: #780ac1;
        }

        .timeliner_cronologia_ano {

            background-image: none;
            color: transparent;
            border-left: 35px solid #0dc2f2dd;
            margin-top: 2px;

        }

        .cronopar1 {
            border-left: 35px solid #0dc2f2;
        }

        .lista_final {
            border-left: 5px solid transparent !important;
        }


        .timeliner-cronologia {
            display: grid;
            grid-template-columns: [init] 5px [startmarks] 40px [endmarks] 150px 1fr [fim];
            gap: 0 0;
            color: white;
            margin-left: auto;
            margin-right: auto;
            max-width: 800px;

        }

        .timeliner-cronologia b {
            display: block;
            margin-top: 15px;
            margin-bottom: -15px;
        }

        .timeliner-cronologia a {
            text-decoration: none;
            color: #1b4159;
        }

        .timeliner-cronologia a:hover {
            text-decoration: none;
            color: #0dc2f2;
        }

        h1 {
            margin-left: auto;
            margin-right: auto;
            max-width: 800px;
        }

        h6 {
            font-size: 90px;
            line-height: 6px;
            font-weight: bolder;
            padding: 0;
            margin-top: 40px;
            margin-bottom: 10px;
        }

        .timeliner-cronologia strong {
            padding-right: 25px;
            text-align: left;
        }

        .timeliner_cronologia_links {
            display: block;
            width: 100%;
            padding-top: 16px;
            font-size: 12px;
            padding-bottom: 4px;
        }

        .timeliner_cronologia_gridprodutos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 10px;
        }

        .timeliner_cronologia_evidencia {
            width: 100%;
            height: 180px;
        }

        .cronologiadata {

            padding-top: 5px;
            font-size: 16px;
            line-height: 16px;
            text-align: right;
            width: 250px;

            transform-origin: top right;
            transform: rotate(-90deg);

            color: white;
        }

        .datascronologia {

            min-height: 160px;
            position: relative;
            left: -250px;
            top: 14px;

        }

        .datafraco {
            opacity: 0.5;
        }

        @media screen and (max-width: 750px) {

            h6 {
                margin-bottom: 30px;
            }

            .timeliner_cronologia_ano,
            .datascronologia {
                grid-row: Span 2;
            }

            .timeliner-cronologia {

                grid-template-columns: [init] 5px [startmarks] 40px [endmarks] 1fr [fim];
                gap: 0 0;
                color: white;

            }
        }
    </style>

    <h1>Cronograma</h1>
    <br>

    <div id="cvitae"></div>



    <script>
        getdata("https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/AtvidadesProjetoEditorial", function(dados) {

            console.table(dados);
            let crono = select(dados, multipatterncheck_add, "aula-atual");
            let cvita = timeliner_cronologia(crono);

            document.getElementById("cvitae").innerHTML = cvita;

        });
    </script>





</body>

</html>