<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">

    <title>Pont & Click Adventures</title>
    <meta name="pinterest" content="nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Uma discussão sobre as origens das questões narraivas na mídia digitial, e os primeiros artefatos que lhe deram forma">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="editorial, narrativa, hq, livros">

    <meta property="og:title" content="Pont & Click Adventures">
    <meta property="og:description" content="Uma discussão sobre as origens das questões narraivas na mídia digitial, e os primeiros artefatos que lhe deram forma">

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


    <?php

    if ($_GET['bg']) {



        echo "<meta name='theme-color' content='" . $_GET['bg'] . "'><meta name='msapplication-navbutton-color' content='" . $_GET['bg'] . "'><meta name='apple-mobile-web-app-status-bar-style' content='" . $_GET['bg'] . "'>";
    } else {
        echo "<meta name='theme-color' content='#0dc2f2'><meta name='msapplication-navbutton-color' content='#0dc2f2'><meta name='apple-mobile-web-app-status-bar-style' content='#0dc2f2'>";
    }

    ?>

    <link rel="stylesheet" href="https://www.ranoya.com/Assets/JSLibs/markdown/md.css">

    <script>
        function labeia(event, nome, subtitulo, produtora, imagem) {

            // console.log("porra: " + event.clientX + "," + event.clientY + " - " + nome + " > " + subtitulo + ", " + produtora);

            document.getElementById('olabel').style.display = "block";
            document.getElementById('olabel').innerHTML = "<b>" + nome + "</b><br>" + subtitulo + "<br><img class='thumbn' src='" + imagem + "' /><br>" + produtora;
            document.getElementById('olabel').style.top = (event.clientY - 80) + "px";

            if (event.clientX < window.innerWidth - 300) {
                document.getElementById('olabel').style.left = (event.clientX + 30) + "px";
            } else {
                document.getElementById('olabel').style.left = (event.clientX - 310) + "px";

            }

        }

        function resetalabel() {
            document.getElementById('olabel').style.left = 0;
            document.getElementById('olabel').style.right = 0;
            document.getElementById('olabel').style.top = 0;
            document.getElementById('olabel').style.display = "none";
            document.getElementById('olabel').style.width = "236px";

        }
    </script>

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=DotGothic16&family=Press+Start+2P&family=Silkscreen:wght@400;700&display=swap'); */

        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Silkscreen:wght@400;700&display=swap');

        @font-face {
            font-family: 'DotGothic16';
            src: url('./ModernDOS8x16.ttf');
        }

        :root {

            --md-font: 'DotGothic16';
            /* --md-hfont: 'Press Start 2P'; */
            --md-hfont: Silkscreen;
            --tamanhobloco: 60px;
            --espacol: 5px;
            --espacob: 0;
            --bordaitens: 25px;

            --viz-corB: #29cbf8;
            --viz-corA: #15b3df;
            --lightgrey: #4ad1f7;
            --darkgrey: #517179;
            --hover--icon: #d098b4;
            /* --all-dark: #bb4550; */
            --all-dark: black;

            --md-bg: #0dc2f2;
            --md-fg: white;
            --md-h1: #ffe3f1;
            --md-mark: #05556b;
            --md-highlight: #FF55FF;

        }



        ::placeholder {
            color: var(--darkgrey, #05556b);

        }

        strong {
            color: #517179;
        }

        #shelf {
            background-image: url(https://www.ranoya.com/Assets/Diagramas/coversshelf.png);
            background-repeat: repeat-x;
            background-position: left bottom;
            height: 220px;
            width: calc(100% + 190px);
            margin-top: -80px;
            margin-left: -30px;
            margin-bottom: 30px;
        }

        #xeroxalto {
            adding-top: 30px;
            background-color: var(--md-bg);
            position: sticky;
            top: 0;
            z-index: 30;
        }

        #sobrepoe {
            width: 100%;
            height: 100%;
            background-color: var(--md-bg, #0dc2f2);
            opacity: 0.7;
        }

        #painelbreakt {
            position: sticky;
            top: -10px;
        }

        .thumbn {
            width: 220px;
            border: 8px solid var(--darkgrey, #517179);
            margin-bottom: 8px;
            margin-top: 8px;

        }

        #olabel {
            position: fixed;
            z-index: 1000;
            padding: 15px;
            background-color: var(--md-fg, white);
            color: var(--md-bg, #0dc2f2);
            display: none;
            border-radius: 3px;
        }

        h1 {
            text-align: right;
            color: #00000099;
            /* margin-bottom: 8px; */
            margin-right: -120px;
            position: sticky;
            margin-bottom: 0;
            top: 0;
            padding-bottom: 30px;
            padding-top: 30px;
            background-color: var(--md-bg, #0dc2f2);
        }

        p {
            font-size: min(26px, 2.71vw);
            line-height: min(28px, 2.8vw);
        }

        .autor {
            margin-bottom: 75px;
            font-size: min(25px, 2.5vw);
            line-height: min(28px, 2.6vw);
            text-align: right;
            float: right;
            width: calc (100% + 118px);
            color: #00000099;
            margin-right: -118px;
            font-family: 'Press Start 2P', cursive !important;

        }

        .autor img {
            margin-top: -10px;
        }

        .ancoras {
            position: fixed;
            right: 40px;
            width: auto;
            text-align: right;
            top: min(58vw, 540px);
            font-size: 11px;
            line-height: 16px;

        }

        h3 {
            margin-top: 80px;
        }

        #vizinputs {


            display: grid;
            grid-template-columns: 1fr 1fr;
            background-color: var(--md-bg, #FFFFFF);

        }

        .vizinpgrudatopo {
            position: sticky;
            top: 0;
            z-index: 600;

        }

        #observablehq-viewof-filtros-0ac78f84 {
            /* width: 50%; */
            /* float : right; */
        }

        #observablehq-viewof-eixoy-0ac78f84 {

            padding-top: 5px;
        }


        #observablehq-viewof-filtros-0ac78f84,
        #observablehq-viewof-eixoy-0ac78f84 {
            margin-bottom: 40px;
        }

        #observablehq-titulo-0ac78f84 {
            clear: both;
            width: 100%;
        }

        #observablehq-titulo-0ac78f84 p {
            width: 60%;
        }

        #observablehq-emulador {
            width: calc(100% + 190px);
            margin-left: -30px;
            background-color: black;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .colossal {
            width: 40%;
            margin-left: 30%;
        }

        input,
        select {
            outline: none;
        }

        select,
        #oi-ec050e-input {
            width: 100px !important;
            background-color: var(--md-bg, white);
            color: var(--md-fg, black) !important;
        }

        input {
            border-bottom: 1px dashed var(--darkgrey, #888888);
            background-color: var(--md-bg, white);
            color: var(--md-fg, black) !important;
            font-size: 14px;
            line-height: 40px;
            height: 40px;
        }

        #observablehq-viewof-filtros-0ac78f84 form div.oi-ec050e-input {
            width: calc(50vw - 95px);
        }

        input:focus {
            border-bottom: 1px solid var(--all-dark, black);
            color: var(--all-dark, black) !important;
        }

        .oi-ec050e {
            color: var(--md-fg, black) !important;
        }

        body {
            margin-top: 80px;
            margin-bottom: 40px;
            margin-left: 30px;
            margin-right: 160px;
        }


        #observablehq-viz-0ac78f84 {
            cursor: crosshair;

        }


        .linhadotempofull {

            width: 100%;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 0 0;
            max-height: calc(98vh - 32px);
            overflow: scroll;



        }

        .linhadotempo {
            display: grid;
            gap: 0 0;

        }

        .painel {

            background-color: var(--all-dark, black);
            width: 100%;
            max-width: 300px;
            color: white;
            padding: 0;

        }

        .linha1 {
            grid-row: 1;
            min-height: 63px;
            overflow: hidden;
            height: 100%;
        }

        .videoslaterais {
            width: 100%;
            height: 35vh;
            position: sticky;
            top: 10px;
            z-index: 10;
        }

        .corA {
            background-color: var(--viz-corA, #FbFbFb);
        }

        .corB {
            background-color: var(--viz-corB, #FFFFFF);
        }

        .anohead {
            grid-row: 1;
            border-left: 1px solid var(--lightgrey, #eeeeee);
            display: inline;
            padding-right: 4px;
            padding-left: 2px;
            line-height: 10px;
            padding-bottom: 8px;
            min-width: 10px;
            position: sticky;
            top: 0;
            background-color: var(--md-bg, #FFFFFF);
            z-index: 350;

        }

        .linha1 {
            position: sticky;
            top: 0;
            background-color: var(--md-bg, #FFFFFF);
        }

        .anolead {
            transform-origin: top left;
            transform: rotate(-90deg) translate(-33px, 0px);
            color: var(--darkgrey, #888888);
            font-size: 22px;
            line-height: 22px;
            font-family: 'DotGothic16';
        }

        .ano {
            border-left: 1px solid var(--lightgrey, #eeeeee);
            padding: 0;
            padding-top: 4px;
            padding-left: 4px;
            display: inherit;
            align-items: center;
        }

        .bloco {
            display: inline-block;
            width: var(--tamanhobloco, 45px);
            height: var(--tamanhobloco, 45px);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            border-radius: var(--bordaitens, 3px);
            border: 3px solid transparent;
            overflow: hidden;
        }

        .bloco div {
            margin-top: -5px;
            margin-left: -5px;
            width: calc(var(--tamanhobloco, 45px) + 10px);
            height: calc(var(--tamanhobloco, 45px) + 10px);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .bloco:hover {
            border: 3px solid var(--hover--icon, pink);
        }

        .quanti1 {
            width: calc((var(--tamanhobloco, 45px) + 6px) * 1);
            align-items: center;
            display: inline-block;
        }

        .quanti2 {
            width: calc((var(--tamanhobloco, 45px) + 6px) * 2);
            align-items: center;
            display: inline-block;
        }

        .quanti3 {
            width: calc((var(--tamanhobloco, 45px) + 6px) * 3);
            align-items: center;
            display: inline-block;
        }

        .nomedaserie {

            /* min-width: calc((var(--tamanhobloco, 45px) + 6px) * 3); */

            font-size: 14px;
            line-height: 14px;
            font-weight: bolder;
            text-align: right;
            padding-right: 15px;
            display: inherit;
            align-items: center;
            color: var(--all-dark, black);
            /* width: calc(100% - 20px); */

        }

        .barrafechamento {
            border-right: 1px solid var(--lightgrey, #eeeeee);
            height: 60px;
        }

        .singleartefato {

            width: calc(100% - 10px);
            /* padding-top: 20%; */
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            display: inline-block;
            min-height: 160px;
            height: 35vh;
            border: 5px solid transparent;

        }

        .closebutton {
            background-color: red;
            position: relative;
            display: inline-block;
            right: 0;
            float: right;
            top: 0;
            z-index: 800;
            width: 34px;
            height: 37px;
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 22px;
            line-height: 40px;
            margin-bottom: -50px;
            font-family: 'Press Start 2P';
            padding-left: 2px;
            cursor: pointer;
        }

        .closebutton:hover {
            background-color: var(--md-highlight, #FF55FF);
        }

        .singleartefato:hover {
            border: 5px solid var(--hover--icon, pink);
        }


        .painelsingle {
            margin: 10px !important;
        }

        .titulosingle {
            font-weight: bolder;
            color: white;
            font-size: 18px;
            line-height: 18px;
        }

        .subtitulosingle,
        .produtorasingle,
        .generosingle {
            font-size: 16px;
            line-height: 16px;
        }

        .blocosEGA {
            width: 20px;
            height: 20px;
            float: right;
            border: 1px solid #AAAAAA;
            margin-left: -1px;
            margin-bottom: 60px;
        }

        .blocodividido {
            display: grid;
            grid-template-columns: 1.85fr 1.15fr;
            gap: 0 30px;
        }

        .blocodivididoinvert {
            display: grid;
            grid-template-columns: 1.15fr 1.85fr;
            gap: 0 30px;

        }

        .delado {
            width: 100%;
            margin-top: 80px;
        }

        .legenda {

            font-size: min(18px, 1.3vw);
            margin-top: 10px;
            line-height: min(22px, 1.45vw);
            opacity: 0.8;
            text-align: justify;
        }

        .quarentporcento {
            width: 100%;
            height: 40vh;
            position: sticky;
            top: 20px;
            z-index: 10;
        }


        #logofoot {
            width: 60px;
            height: 60px;
        }

        #logofoottext {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 13px;
            padding-top: 6px;
            color: var(--md-mark, #d4317d);
        }

        #ranoya-regexredux-truewhite path {
            fill: var(--md-mark, #d4317d);
        }

        .halfofhalfauto {
            display: flex;
            gap: 0 20px;
        }

        .halfofhalfauto iframe {
            width: calc(50% - 10px);
        }

        .ega16cores {
            margin-right: -120px;
        }


        .espacoemulador {
            margin-left: -30px;
            background-color: black !important;
            padding-top: 10px;
            padding-bottom: 20px;
            width: calc(100% + 30px);

        }

        #dosbox {
            width: calc(100% - 50px);
            margin-left: 0;
            padding-left: 30px;
            height: 38vh;

        }

        #dosbox iframe {
            height: 35vh;
        }

        #opcoesemulador {
            padding-left: 20px;
        }

        #referenciasbibliograficas div p {}



        /* NOVO TIMELINE */

        .tabeladotempo {
            display: grid;
            width: 100%;
            overflow-x: scroll;
            grid-auto-columns: 200px;
            background-color: var(--md-bg, #ffffff);
        }

        .espacosentre {
            gap: 1px 0;
        }

        .matriztempoanos {
            height: 90px;
            position: sticky;
            left: 200px;
        }

        .matriztempocategorias {
            position: sticky;
            left: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 20px;
            text-align: right;
            color: var(--md-mark, white);
            font-family: Silkscreen;
            box-shadow: 8px 0px 4px #00000033;
            margin-bottom: 40px;
            z-index: 80;
        }

        .matrizend {
            height: 40px;
        }

        .anolead {
            transform-origin: top left;
            transform: rotate(-90deg) translate(-83px, 5px);
            color: var(--md-mark, #888888);
            font-size: 22px;
            line-height: 22px;
            font-family: 'DotGothic16';
        }

        .separa {
            border-left: 1px solid black;
        }

        .separaB {
            border-left: 1px dashed #00000022;
        }

        .matrizlinha0 {
            background-color: #dddddd;
        }

        .matrizlinha1 {
            background-color: #eeeeee;
        }

        .matrizlinhaespecial {
            background-color: var(--md-bg, white);
        }

        .matrizcelulatimelineB {

            border: 1px solid var(--md-mark, red);
            background-color: var(--md-highlight, white);
            color: white;
            display: flex;
            align-self: center;
            flex-direction: column;
            width: 100%;
            font-family: 'Press Start 2P';


        }

        .celulaindividual {
            border-left: 1px dashed #00000022;
            display: flex;


            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;

        }

        .matrizcelulatimeline {


            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: center;





        }

        .matriztimeline_blococomponente {

            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 4px 4px;
            padding: 5px;
            width: calc(100% - 12px);

            align-self: center;
            border: 1px solid #00000022;

        }

        .matriztimeline_blococomponente:hover {
            background-color: #00000022;
            cursor: pointer;
        }

        .matriztimeline_blococomponenteO {

            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 4px 4px;
            padding: 5px;
            width: 200px !important;

            align-self: center;


        }

        .matriztimeline_blococomponenteO:hover {
            background-color: #00000022;
            cursor: pointer;
        }

        .matriztimeline_imagemcomponente {
            width: 30px;
            height: 30px;
            background-position: center center;
            background-size: cover;
            border-radius: 20px;


        }

        .matriztimeline_textocomponente {
            font-size: 13px;
            line-height: 15px;
            align-self: center;
        }

        .matriz_espacamento {
            height: 16px;
            background-color: transparent;
        }

        #bigpainel {

            color: var(--md-bg, #0dc2f2);

        }

        .nullfield {
            overflow: hidden;
            width: 0;
        }

        .painelsticky {
            position: sticky !important;
            right: 0 !important;
            width: 500px !important;
            overflow-y: scroll;
            background-color: black;
            z-index: 10;
        }


        .espacodummy {

            background-color: transparent;
            overflow: hidden;
            width: 0;
            display: none;
        }

        .espacopainelsticky {
            display: block;
            width: 500px !important;

        }

        .quadroimagens {
            display: grid;
            width: 100%;
            gap: 16px 16px;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .quadimagem {
            width: 100%;

            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: 200px;
        }

        #opcoesemulador form select {
            width: 234px !important;
        }

        #opcoesemulador form label {
            width: 170px !important;
        }

        #recorteespecial {
            width: 25vw;
            position: relative;
            float: right;
            background-color: var(--md-fg, white);
            padding: 16px;
            margin-right: -140px;
            margin-left: 16px;
            margin-bottom: 16px;
            box-shadow: -8px 8px #00000022;
            z-index: 7000;
            color: var(--lightgrey, #4ad1f7);
            font-family: var(--md-font, 'Crimson Pro'), serif;
        }

        .recorteespecialimagens {
            color: var(--lightgrey, #4ad1f7);
            font-size: 14px;
            line-height: 16px;
        }


        @media screen and (max-width: 850px) {

            :root {

                --tamanhobloco: 30px;
            }

            #observablehq-viewof-filtros-0ac78f84 form div.oi-ec050e-input {
                width: calc(51.5vw) !important;
            }

            .quadroimagens {

                grid-template-columns: 1fr 1fr;
            }

            .blocodividido {
                grid-template-columns: 1fr;
                gap: 0 30px;
            }

            .matriztempocategorias {

                left: -150px;
            }

            .painelsticky {
                position: sticky !important;
                width: calc(100vw - 71px) !important;
                z-index: 5000;
            }

            .espacopainelsticky,
            .painelsingle {
                width: calc(100vw - 91px) !important;
            }



            .blocodivididoinvert {
                grid-template-columns: 1fr;
                gap: 0 30px;

            }

            #observablehq-titulo-0ac78f84 p {
                width: 100%;
            }

            body {
                margin-right: 40px;
            }

            #shelf {
                width: calc(100% + 70px);

            }

            #observablehq-emulador {
                width: calc(100% + 70px);
            }

            #olabel {
                width: 170px;
            }

            h1 {

                margin-right: 0;
            }

            h3 {
                font-size: 26px;
                line-height: 28px;
            }

            .nomedaserie {
                font-size: 10px;
                line-height: 10px;
            }

            .autor {
                width: 100%;
                margin-right: 0;
            }

            .ancoras {
                display: none;
            }

            #loslinks {
                display: none;
            }

            .ega16cores {
                margin-right: 0;
            }

            .painel {
                max-width: 250px;
                z-index: 500;
                position: sticky;
                right: 0;
            }

            .subtitulosingle,
            .produtorasingle,
            .generosingle {
                text-align: justify;
                font-size: 16px;
                line-height: 16px;
            }



            form.oi-ec050e>label {
                width: auto !important;
                margin-right: 15px;
            }

            form.oi-ec050e {

                width: calc(50vw - 50px) !important;
            }



            p {
                font-size: 23px;
                line-height: 27px;
            }

            .legenda {
                font-size: 11px;
                line-height: 11px;
            }

            .halfofhalfauto {
                flex-direction: column;
            }

            .halfofhalfauto iframe {
                width: 100%;
            }

            .legenda {
                font-size: 18px;
                line-height: 22px;
            }

            #recorteespecial {
                display: none;
            }

        }
    </style>

    <?php

    if ($_GET['theme']) {

        echo "<link href='" . $_GET['theme'] . "timelinetheme.css' rel='stylesheet'>";
    }

    ?>

    <style>
        p a {
            font-family: 'DotGothic16', sans-serif !important;
        }

        .ancoras a {
            font-family: 'Press Start 2P', cursive;
        }

        h1 {
            font-family: 'Silkscreen', cursive;
            font-family: 'Press Start 2P', cursive !important;
            font-size: min(36px, 2.8vw) !important;
            line-height: min(40px, 2.95vw) !important;

        }
    </style>

</head>


<body>

    <div id='shelf'>
        <div id='sobrepoe'></div>
    </div>

    <div id='olabel'></div>

    <div class='ega16cores'>
        <div class='blocosEGA' style='background-color: #FFFFFF'></div>
        <div class='blocosEGA' style='background-color: #FFFF55'></div>
        <div class='blocosEGA' style='background-color: #FF55FF'></div>
        <div class='blocosEGA' style='background-color: #FF5555'></div>
        <div class='blocosEGA' style='background-color: #55FFFF'></div>
        <div class='blocosEGA' style='background-color: #55FF55'></div>
        <div class='blocosEGA' style='background-color: #5555FF'></div>
        <div class='blocosEGA' style='background-color: #555555'></div>
    </div>


    <br>

    <div id="observablehq-titulo-0ac78f84"></div>
    <a name="listaartefatos"></a>
    <div id="vizinputs" class="vizinpgrudatopo">
        <div id="observablehq-viewof-eixoy-0ac78f84"></div>
        <div id="observablehq-viewof-filtros-0ac78f84"></div>
    </div>

    <div id="observablehq-viz-0ac78f84"></div>
    <div id="thumbnails"></div>


    <a name="midia"></a>
    <div class='blocodividido'>
        <div id="observablehq-texto-midia"></div>
        <div id="observablehq-xeroxalto"></div>
    </div>

    <div id="observablehq-emulador"></div>
    <p class='legenda'>Emulação de terminal rodando Colossal Cave Adventure</p>


    <a name="genealogia"></a>
    <div class='blocodivididoinvert'>
        <div id="engines">

            <div id="comparaversoes"></div>


            <a name="Emulador"></a>
            <div class="espacoemulador videoslaterais">
                <div id="dosbox">
                </div>

                <div id="opcoesemulador">
                </div>
            </div>

        </div>
        <div>
            <div id="observablehq-texto2-0ac78f84"></div>
            <a name="relevancia"></a>
            <div id="observablehq-texto3-0ac78f84"></div>
        </div>
    </div>


    <br>






    <br>
    <a name="linguagem"></a>
    <div class='blocodivididoinvert'>
        <div id="diagrama-linaguagem"></div>

        <div id='conteudolinguagem'>
        </div>
    </div>


    <a name="inovacoes"></a>
    <div class='blocodivididoinvert'>
        <div id="conteudolinguagem2"></div>

        <div id='referenciasbibliograficas'>
        </div>
    </div>

    <a name="estetica"></a>
    <div class='blocodivididoinvert'>
        <div>
            <br><br><br><br>
            <div class='halfofhalfauto'>
                <iframe style='height: 40vh' frameborder=0 src='https://www.youtube.com/embed/cQzien5H2Do'></iframe>
                <iframe style='height: 40vh' frameborder=0 src='https://www.youtube.com/embed/rrT6v5sOwJg'></iframe>
            </div>
            <p class='legenda'>Material Design: uma visão de mundo; uma ideologia; uma estética.</p>
            <br>
            <div class='halfofhalfauto'>
                <iframe style='height: 40vh' frameborder=0 src='https://www.youtube.com/embed/jGna-wppo5Y'></iframe>
                <iframe style='height: 40vh' frameborder=0; src='https://www.youtube.com/embed/juT3_toUqE8'></iframe>
            </div>
            <p class='legenda'>Sable: uma HQ de Moebius para jogar. Plastiek: Quadrinhos tridimensionais.</p>

            <br><br>
            <div class='halfofhalfauto'>
                <iframe style='height: 40vh' ; frameborder=0 src='https://www.youtube.com/embed/afr27sHwDGU'></iframe>
                <iframe style='height: 40vh' frameborder=0; src='https://www.youtube.com/embed/8G0BMxkwHYM'></iframe>
            </div>
            <p class='legenda'>Protanopia e RRR.</p>
        </div>
        <div id='conteudolinguagem3'></div>
    </div>


    <a name="cinematografia"></a>
    <div class='blocodividido'>
        <div id="observablehq-texto-cinemaA"></div>
        <div>
            <br><br><br><br><iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/wKqk9kosCs4'></iframe>
            <p class='legenda'>Karateka, para Apple II</p>
            <iframe style=' height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/9foIojy8b-M'></iframe>
            <p class='legenda'>Compilação das Cut Scenes da série Ninja Gaiden para Nintendo Entertainment System</p>

        </div>
        <div id="observablehq-texto-cinemaB"></div>
        <div>
            <iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/E9bsZDVA4YA'></iframe>
            <p class='legenda'>Wing Commander II - Vengeance of the Kilrathi, último jogo da série Wing Commander em linguagem pixel art.</p>

            <iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/uhPlK6yOT3g'></iframe>
            <p class='legenda'>Wing Commander III - Heart of the Tiger, já com uma Cut Scenes em Live Action, e um contexto tridimensional de jogo.</p>

            <br>
            <div class='halfofhalfauto'>
                <iframe style='height: 40vh;' frameborder=0 src=' https://www.youtube.com/embed/VQLgjXpPndI'></iframe>
                <iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/R0RUDUw2iQI'></iframe>
            </div>
            <p class='legenda'>Notes on Blindness e Duck Tales.</p>

        </div>
    </div>





    <a name="if"></a>
    <div class='blocodivididoinvert'>
        <div>
            <br><br><br><br><br><br><br>
            <iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/qXAubRZ-qjw'></iframe>
            <p class='legenda'>Documentário da BBC (1985) sobre a Infocom e suas aventuras textuais.</p>
            <br><br>
            <iframe style='height: 40vh;' frameborder=0 src='https://www.youtube.com/embed/ZpCrBBj6AWE'></iframe>
            <p class='legenda'>A aventura de texto Zork (1979) com imagens geradas por Inteligência Artificial.</p>
        </div>
        <div id='conteudoif'></div>
    </div>



    </div>



    <div style="margin-top: 80px;">

        <svg id='logofoot' viewBox="0 0 719 719" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 40px; height: 40px; float: left; vertical-align: top; margin-right: 10px;">
            <g id="ranoya-regexredux-truewhite">
                <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M719 0H0V719H719V0ZM230.686 183.844H337.371L230.686 535.31H124L230.686 183.844ZM383.351 183.844H381.782L275.097 535.31H381.782L435.91 356.992L490.037 535.31H596.723L490.037 183.844H488.468H383.351Z" />
            </g>
        </svg>

        <div id="logofoottext">COPYRIGHT &copy; 2022<br>PROF. DR. GUILHERME RANOYA</div>

    </div>


    <script type="module">
        import {
            Runtime,
            Inspector
        } from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
        import define from "https://api.observablehq.com/@ranoya/point-click-adventures.js?v=3";
        new Runtime().module(define, name => {
            if (name === "titulo") return new Inspector(document.querySelector("#observablehq-titulo-0ac78f84"));
            if (name === "viewof filtros") return new Inspector(document.querySelector("#observablehq-viewof-filtros-0ac78f84"));
            if (name === "viz2") return new Inspector(document.querySelector("#observablehq-viz-0ac78f84"));
            if (name === "viewof eixoy") return new Inspector(document.querySelector("#observablehq-viewof-eixoy-0ac78f84"));
            if (name === "quadroimagens") return new Inspector(document.querySelector("#thumbnails"));
            if (name === "texto1") return new Inspector(document.querySelector("#observablehq-texto-midia"));
            if (name === "texto2") return new Inspector(document.querySelector("#observablehq-texto2-0ac78f84"));
            if (name === "emulador") return new Inspector(document.querySelector("#observablehq-emulador"));
            if (name === "texto3") return new Inspector(document.querySelector("#observablehq-texto3-0ac78f84"));
            if (name === "computador") return new Inspector(document.querySelector("#observablehq-xeroxalto"));
            if (name === "discussaolinguagem") return new Inspector(document.querySelector("#diagrama-linaguagem"));
            if (name === "textolinguagem") return new Inspector(document.querySelector("#conteudolinguagem"));
            if (name === "bibliografia") return new Inspector(document.querySelector("#referenciasbibliograficas"));
            if (name === "textolinguagem2") return new Inspector(document.querySelector("#conteudolinguagem2"));
            if (name === "textolinguagem3") return new Inspector(document.querySelector("#conteudolinguagem3"));
            if (name === "emulacaoiframe") return new Inspector(document.querySelector("#dosbox"));
            if (name === "viewof selecionaemulador") return new Inspector(document.querySelector("#opcoesemulador"));
            if (name === "cinemaA") return new Inspector(document.querySelector("#observablehq-texto-cinemaA"));
            if (name === "cinemaB") return new Inspector(document.querySelector("#observablehq-texto-cinemaB"));
            if (name === "ramaks") return new Inspector(document.querySelector("#comparaversoes"));
            if (name === "contif") return new Inspector(document.querySelector("#conteudoif"));

            return ["viewof artefatosfiltrados", "seriesidentificadas", "generosindenticidos", "linguagensidentificadas", "tipologias", "anos", "linhadotempo"].includes(name);
        });
    </script>


    <script>
        seleciona = function(n, sn) {

            document.getElementsByTagName("input")[0].value = n;
            document.getElementsByTagName("input")[0].dispatchEvent(new Event("input", {
                bubbles: true
            }));
            resetalabel();
            window.location = "#listaartefatos";
        }

        let gruda = true;

        checa = function() {
            let selec = document.getElementById("o-computador-como-uma-m-dia");
            let bott = document.getElementById("observablehq-viz-0ac78f84");


            if (selec.getBoundingClientRect().top < 80 && gruda == true) {

                /* bott.style.position = "static"; */
                document.getElementById("vizinputs").style.position = "static";
                gruda = false;

            }

            if (selec.getBoundingClientRect().top >= 80 && gruda == false) {

                // console.log(bott.getBoundingClientRect().top);

                /* bott.style.position = "sticky"; */
                document.getElementById("vizinputs").style.position = "sticky";
                gruda = true;

            }



        }



        let fixatop = function() {



            /*
            let w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            if (w> 850) {

            let alto = document.getElementById("xeroxalto");

            if (alto.getBoundingClientRect().top < 45 && alto.getBoundingClientRect().top > -500) {

              alto.style.paddingTop = 45 - alto.getBoundingClientRect().top + "px";

            }


            let sierraengines = document.getElementById("engines");

            if (sierraengines.getBoundingClientRect().top < -60 && sierraengines.getBoundingClientRect().top > -900) {

              sierraengines.style.paddingTop = -60 - sierraengines.getBoundingClientRect().top + "px";

            }

            let tmlnpages = document.getElementById("painelbreakt");

            if (tmlnpages.getBoundingClientRect().top < -10 && tmlnpages.getBoundingClientRect().top > -500) {

              tmlnpages.style.paddingTop =  - tmlnpages.getBoundingClientRect().top + "px";

            }

            }

            */
        }







        document.onscroll = function() {
            fixatop();

            checa();

        }
    </script>



</body>

</html>