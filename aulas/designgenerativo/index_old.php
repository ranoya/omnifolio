<script type="text/javascript">
	/* -- Google Analytics ---------------------------------------------------- */

	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-61225449-1', 'auto');
	ga('send', 'pageview');

	/* ---------------------------------------------------- Google Analytics -- */
</script>

<!DOCTYPE html>
<html class="sl-root decks export loaded ua-phantomjs reveal-viewport theme-font-opensans theme-color-black-blue">

<head>

	<meta charset="utf-8">
	<meta name="pinterest" content="nopin" />
	<meta name="pinterest" content="nohover">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>DESIGN GENERATIVO</title>
    <meta name="generator" content="slides.com" />
    <meta name="description"
        content="Material interativo para ensino de programação com a linguagem Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="design generativo, arte generativa, design paramétrico, processing">
    <meta property="og:url" content="https://www.ranoya.com/aulas/designgenerativo/index.html">
    <meta property="og:title" content="DESIGN GENERATIVO">
    <meta property="og:description"
        content="Material interativo para ensino de programação com a linguagem Processing">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/dgen600.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/dgen600.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/dgen600o.jpg" />

    <link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/DesigngenerativoFavicon.png">
    <link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/dgen57.png" />
    <link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/dgen57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/dgen72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/dgen114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/dgen144.png" />

	<link rel="stylesheet" type="text/css" href="./unifiedstyle.css">

	<script src="https://www.ranoya.com/hal9000/samcore2.js"></script>
	<script src="https://www.ranoya.com/Assets/JSLibs/Scrollytelling/audiolead.js"></script>
	<script src="https://www.ranoya.com/Assets/JSLibs/AMS/listlinks.js"></script>
	<script src="https://www.ranoya.com/Assets/JSLibs/AMS/listcal.js"></script>
	<script src="https://www.ranoya.com/Assets/JSLibs/AMS/imagepanel.js"></script>

	<!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#40124d">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#40124d">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#40124d">

</head>

<body style="padding: 0 0 0 0; margin: 0 0 0 0; overflow-y: hidden; overflow-x: hidden;">

	<a href="javascript: menu();" class="menubutton"><img
			src="https://www.ranoya.com/Assets/WebsiteIcons/hamburguer-white.svg" style="width: 100%;"></a>

	<div id="samthings">
		<div id="pontoatual"></div>
		<input type="text" id="entrada" autocomplete="off">
		<div id="notificacao"></div>
		<div id="dialogbox"></div>
	</div>

	<a id="samBlock" href="javascript:changeSam()">

		<div id="samdialogbox">
         <div id='sam2'>
                <svg viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect id='sam2-shine' />
				<rect id='sam2-interno' />
                <rect id='sam2-externo' />
                <rect id='sam2-over' />
                </svg>
        </div>

	</a>
	<nav id="navpresentation">
		
		<div id='bigblock' style='background-position: center center; background-size: cover; background-image: url(https://www.projetao.com.br/img/fGrupos.png);'>
			<div id='invisibleblocsA'></div>

            <svg id="logosmall" viewBox="0 0 1566 1566" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect fill="#FFFFFF" x="0" width="1566" height="1566" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1566 0H0V1566H1566V0ZM781.207 12.4841L834.24 65.5171L1356.28 587.558L1409.31 640.591L1356.28 693.624L836.248 1213.66L783.215 1266.69L730.182 1213.66L351.703 835.177L298.67 782.144L351.703 729.111L732.19 348.624L785.223 295.591L838.256 348.624L1130.53 640.901L1024.47 746.967L785.223 507.723L510.802 782.144L783.215 1054.56L1197.18 640.591L781.207 224.616L253.533 752.29L147.467 646.224L728.174 65.517L781.207 12.4841ZM782.439 978.437L979.796 781.08L782.439 583.723L585.081 781.08L782.439 978.437ZM836.033 1502.61L1557.61 781.033L1451.55 674.967L783 1343.51L114.456 674.967L8.38959 781.033L729.967 1502.61L783 1555.65L836.033 1502.61Z" fill="#e95601"/>
            <path d="M200.5 699.258L781.207 118.551L1303.25 640.592L783.215 1160.63L404.735 782.145L785.223 401.658L1077.5 693.935" stroke="#e95601" stroke-opacity="0.35" stroke-width="150"/>
            </svg>




			<div id='invisibleblocsB'></div>
		</div>

		<div id='molduratitle'>
			<div id='visibleblocsA'></div>
			<div id='visibleblocsB'>
				<p class='bigtitle'>Aprendendo Processing
					<span class='blocktext1'>Design Generativo</span>
					<span class='blocktext2'></span></p>
			</div>
		</div>

		<div>

			<div class='singleblock triple' style='background-image: url(https://www.projetao.com.br/img/tRanoya.png);'>
				<a target="_blank" href="https://www.ranoya.com/public/profile">Professor

					<span class='blocktext1'>Mais informações sobre o professor Guilherme Ranoya</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple' style='background-image: url(https://www.ranoya.com/Assets/screenshots/openprocessingbg2.png);'>
				<a href="javascript:pausengoto('livecode');">Livecode

					<span class='blocktext1'>Ambiente integrado de programação com resposta em tempo real</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple' style='background-image: url(https://www.ranoya.com/Assets/screenshots/tecido.jpg);'>
				<a href="javascript:pausengoto('livro');">O tecido das tecnologias criativas

					<span class='blocktext1'>Livro interativo integrado</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple' style='background-image: url(https://www.ranoya.com/projetaosite/img/tCIn.png);'>
				<a href="javascript:bookmark(76.2);">Programar é preciso?

					<span class='blocktext1'>Designers deveriam programar?</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			



			<!-- singleblock superdouble right' 
				singleblock quad 
				singleblock triple -->





			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Fundamentos
						<span class='blocktext1'>Parte 1</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>


			<div class='singleblock triple'
				style='background-image: url(https://www.projetao.com.br/img/tlinguagem.png);'>
				<a href="javascript:bookmark(213.7);">O que é programar?

					<span class='blocktext1'>Explicações iniciais do que é o código computacional</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/diskette.jpg);'>
				<a href="javascript:bookmark(345.0);">Como funciona a máquina

					<span class='blocktext1'>Vídeo didático sobre a relação do código com o computador</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://dzone.com/storage/temp/12648431-connections.jpg);'>
				<a href="javascript:bookmark(367.6);">Introdução à programação

					<span class='blocktext1'>Um exemplo histórico de introdução à programação com BASIC</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/processoweb.svg);'>
				<a href="javascript:bookmark(464.6);">Linguagens

					<span class='blocktext1'>Um panorama das linguagens de programação introdutórias</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/elementos.svg);'>
				<a href="javascript:bookmark(559.2);">Elementos

					<span class='blocktext1'>Elementos principais da programação</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			

			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Sintaxe
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			
			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/screenshots/designsintax.jpeg);'>
				<a href="javascript:bookmark(635.1);">Sintaxe

					<span class='blocktext1'>Primeiras instruções e seus parâmetros</span>
					<span class='blocktext2'></span>
				</a>
			</div>


			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/sintaxecss.svg);'>
				<a href="javascript:bookmark(849.1);">Blocos de programação

					<span class='blocktext1'>As chaves e seus conjuntos de instruções</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/limites.svg);'>
				<a href="javascript:bookmark(984);">Setup e Draw

					<span class='blocktext1'>As funções mínimas do programa em Processing</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(1047.6);">Primeiro código rodando

					<span class='blocktext1'>Um exemplo funcional no ambiente de livecode</span>
					<span class='blocktext2'></span>
				</a>
			</div>








			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Variáveis
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/variaveis.svg);'>
				<a href="javascript:bookmark(1183.6);">O que são variáveis?

					<span class='blocktext1'>Lidando com dados em um programa</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/tiposdedados.svg);'>
				<a href="javascript:bookmark(1298.5);">Tipos de dados

					<span class='blocktext1'>O que são tipos e quais são os tipos de dados usados em Processing</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/declaracao.svg);'>
				<a href="javascript:bookmark(1372.1);">Declaração de variáveis

					<span class='blocktext1'>Como criar e usar variáveis</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(1417.7);">Exemplo com variáveis

					<span class='blocktext1'>Código rodando com uso de variáveis</span>
					<span class='blocktext2'></span>
				</a>
			</div>
			

			

			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'>Operadores Aritméticos
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/operacoesaritmeticas.svg);'>
				<a href="javascript:bookmark(1493.6);">Operações aritméticas?

					<span class='blocktext1'>Manipulando dados</span>
					<span class='blocktext2'></span>
				</a>
			</div>


			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/operacoesbasicas.svg);'>
				<a href="javascript:bookmark(1509.9);">As quatro operações básicas

					<span class='blocktext1'>Manipulando dados</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/outrasoperacoes.svg);'>
				<a href="javascript:bookmark(1797.8);">Operações com outros dados?

					<span class='blocktext1'>Operações não se limitam à números</span>
					<span class='blocktext2'></span>
				</a>
			</div>








			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'>Operadores Lógicos
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/seletorescss.svg);'>
				<a href="javascript:bookmark(1846.3);">Lógica computacional

					<span class='blocktext1'>O que são operações lógicas em um programa</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/comparacao.svg);'>
				<a href="javascript:bookmark(1913.3);">Comparações

					<span class='blocktext1'>Operadores de comparação</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/condicionais.svg);'>
				<a href="javascript:bookmark(1996.4);">Condicionais

					<span class='blocktext1'>If e Else</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(2035.3);">Exemplo de condicionais

					<span class='blocktext1'>Usando If e Else</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/loops.svg);'>
				<a href="javascript:bookmark(2106.3);">Loops

					<span class='blocktext1'>Criando rotinas</span>
					<span class='blocktext2'></span>
				</a>
			</div>









			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Funções
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/funcoes.svg);'>
				<a href="javascript:bookmark(2291.7);">O que são Funções

					<span class='blocktext1'>Construíndo suas ferramentas</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/evocandofuncoes.svg);'>
				<a href="javascript:bookmark(2441.7);">Usando funções

					<span class='blocktext1'>Executando suas próprias funções</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(2479.1);">Exemplo com funções

					<span class='blocktext1'>Usando funções para criar resultados visuais</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/retorno.svg);'>
				<a href="javascript:bookmark(2534.7);">Funções com retorno

					<span class='blocktext1'>Funções com tipos de dados</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/parametros.svg);'>
				<a href="javascript:bookmark(2656);">Parâmetros

					<span class='blocktext1'>Funções com parâmetros de entrada</span>
					<span class='blocktext2'></span>
				</a>
			</div>



			
			


			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Matrizes
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/arrays.svg);'>
				<a href="javascript:bookmark(2747.5);">Variáveis complexas

					<span class='blocktext1'>O que são Arrays ou Matrizes?</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/declaracao.svg);'>
				<a href="javascript:bookmark(2834.6);">Declaração de arrays

					<span class='blocktext1'>Como criar Arrays</span>
					<span class='blocktext2'></span>
				</a>
			</div>


			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(3006.5);">Exemplo com Arrays

					<span class='blocktext1'>Usando Arrays no código</span>
					<span class='blocktext2'></span>
				</a>
			</div>







			<div id='molduratitle'>

				<div id='visibleblocsB'>
					<p class='bigtitle'><br>Objetos
						<span class='blocktext1'>Programação</span>
						<span class='blocktext2'></span></p>
				</div>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/oop.svg);'>
				<a href="javascript:bookmark(3161.1);">Introdução à OOP
					<span class='blocktext1'>Entendendo o que são e como funcionam objetos na programação</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/elementosoop.svg);'>
				<a href="javascript:bookmark(3275.1);">Variáveis e funções
					<span class='blocktext1'>Objetos possuem seus próprios elementos internos</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/instancias.svg);'>
				<a href="javascript:bookmark(3383.8);">Classes e instâncias
					<span class='blocktext1'>Modelos e suas cópias em operação no código</span>
					<span class='blocktext2'></span>
				</a>
			</div>

			<div class='singleblock triple'
				style='background-image: url(https://www.ranoya.com/Assets/Diagramas/rodando.svg);'>
				<a href="javascript:bookmark(3629);">Exemplos com objetos
					<span class='blocktext1'>A construção de um código com objetos e instâncias</span>
					<span class='blocktext2'></span>
				</a>
			</div>







			<div style="display: inline-block; height: 90px; width: 100%;">&nbsp;</div>





		</div>

	</nav>

	<div id="placehold" frameborder=0 style="position: fixed; left: 0; width: 100%; height: calc(100% + 34px);"
		scrolling="no"></div>

	<audio id="myVideo" style="position: fixed; bottom: 20px; left: calc(50% - 150px); width: 300px; height: 80px; z-index: 500; outline:
        none; transition: all .6s ease-in-out;" controls>

		<source src="https://drive.google.com/uc?export=view&id=1vb4LVGw-bIOVkuKiGM2vOC8x_cnSeMqe" type="audio/mp3">


        <!-- <source src="https://designgenerativo.ranoya.com/dgen32.mp3" type="audio/mp3"> -->
        Your browser does not support HTML5 video.
    </audio>







<script>


/* 
 *
 * TABELA PARA JOGAR NOTIFICAÇÕES NO SAM
 *
 */

		var tabela_de_notificacao_sam = {
			"0": "limpa",
			"5": "hal: instalar processing",
			"50": "limpa",
			"77": "hal: futuro do design",
			"180": "limpa",
			"385": "hal: emulador de msx basic",
			"396": "limpa",
			"430": "hal: gerador de capas do Fronteias do Design",
			"450": "limpa",
			"466": "hal: história da linguagem processing",
			"500": "limpa",
			"622": "hal: documentação sobre sintaxe",
			"632": "limpa",
			"640": "hal: documentação sobre line",
			"720": "limpa",
			"767": "hal: documentação sobre ellipse",
			"880": "limpa",
			"897": "hal: documentação sobre setup",
			"920": "limpa",
			"988": "hal: documentação sobre draw",
			"1000": "limpa",
			"1185": "hal: documentação sobre variáveis",
			"1300": "limpa",
			"1478": "hal: documentação sobre operadores",
			"1600": "limpa",
			"1830": "hal: documentação sobre lógica",
			"2000": "limpa",
			"2036": "hal: documentação sobre loops",
			"2200": "limpa",
			"2267": "hal: documentação sobre funções",
			"2500": "limpa",
			"2687": "hal: exemplos no OpenProcessing",
			"2745": "limpa",
			"2749": "hal: documentação sobre arrays",
			"3000": "limpa",
			"3125": "hal: documentação sobre objetos",
			"3300": "limpa",
			"3906": "hal: contato com a comunidade"
		};

/*
 *
 * TABELA DE MINUTAGEM DA APRESENTAÇÃO
 *
 */

		var minutagem = [{
                'time': 0,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/capa'
            },
            {
                'time': 76.2,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/futuro1'
            },
			{
                'time': 112.1,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/futuro2'
            },
			{
                'time': 127.3,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/futuro3'
            },
			{
                'time': 139.2,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/futuro4'
            },
			{
                'time': 171.6,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/futuro5'
            },
			{
                'time': 199.1,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/fundamentossub'
            },
			{
                'time': 213.7,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo1'
            },
			{
                'time': 273.6,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo2'
            },
			{
                'time': 300.7,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo3'
            },
			{
                'time': 345.0,
                'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigosimples'
            },
			{
                'time': 366.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigosimples',
				'pause': true
            },
			{
                'time': 367.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/msxpier'
            },
			{
                'time': 394.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/msxpier',
				'pause': true
            },
			{
                'time': 396.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo4'
            },
			{
                'time': 410.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo5'
            },
			{
                'time': 429.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo6'
            },
			{
                'time': 441.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/codigo7'
            },
			{
                'time': 464.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/linguagens1'
            },
			{
                'time': 507.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/linguagens2'
            },
			{
                'time': 525.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/linguagens3'
            },
			{
                'time': 559.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/hexagono1'
            },
			{
                'time': 618.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxecapa'
            },
			{
                'time': 635.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe1'
            },
			{
                'time': 663.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe2'
            },
			{
                'time': 669.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe3'
            },
			{
                'time': 685.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe4'
            },
			{
                'time': 719.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe5'
            },
			{
                'time': 741.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe6'
            },
			{
                'time': 755.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe7'
            },
			{
                'time': 766.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe8'
            },
			{
                'time': 807.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe9'
            },
			{
                'time': 819.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe10'
            },
			{
                'time': 836.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe11'
            },
			{
                'time': 849.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe12'
            },
			{
                'time': 895,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe13'
            },
			{
                'time': 928.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe14'
            },
			{
                'time': 958.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe15'
            },
			{
                'time': 984,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe16'
            },
			{
                'time': 1011.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe17'
            },
			{
                'time': 1028.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe17-2'
            },
			{
                'time': 1047.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/exemplosintaxe'
            },
			{
                'time': 1096.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/exemplosintaxe',
				'pause': true
            },
			{
                'time': 1097.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe18'
            },
			{
                'time': 1134.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/sintaxe19'
            },
			{
                'time': 1157.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveiscapa'
            },
			{
                'time': 1183.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis1'
            },
			{
                'time': 1212.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis2'
            },
			{
                'time': 1247.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis3'
            },
			{
                'time': 1298.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis4'
            },
			{
                'time': 1355.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis5'
            },
			{
                'time': 1372.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis6'
            },
			{
                'time': 1393.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis6-2'
            },
			{
                'time': 1417.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/varexemplo'
            },
			{
                'time': 1432.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/varexemplo',
				'pause': true
            },
			{
                'time': 1432.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis7'
            },
			{
                'time': 1452.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/variaveis8'
            },
			{
                'time': 1476.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculocapa'
            },
			{
                'time': 1493.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo1'
            },
			{
                'time': 1509.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo2'
            },
			{
                'time': 1532.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo3'
            },
			{
                'time': 1541.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo4'
            },
			{
                'time': 1586.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo5'
            },
			{
                'time': 1621.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo6'
            },
			{
                'time': 1640.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo7'
            },
			{
                'time': 1665.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo8'
            },
			{
                'time': 1686.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo9'
            },
			{
                'time': 1710.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo10'
            },
			{
                'time': 1743.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo11'
            },
			{
                'time': 1750.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo12'
            },
			{
                'time': 1785.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo13'
            },
			{
                'time': 1797.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo14'
            },
			{
                'time': 1809.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/calculo15'
            },
			{
                'time': 1829.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logicacapa'
            },
			{
                'time': 1846.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica1'
            },
			{
                'time': 1860.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica2'
            },
			{
                'time': 1891.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica3'
            },
			{
                'time': 1913.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica4'
            },
			{
                'time': 1931.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica5'
            },
			{
                'time': 1947.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica6'
            },
			{
                'time': 1996.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica7'
            },
			{
                'time': 2018.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica8'
            },
			{
                'time': 2035.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logicaexemplo1'
            },
			{
                'time': 2105.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logicaexemplo1',
				'pause': true
            },
			{
                'time': 2106.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica9'
            },
			{
                'time': 2153.0,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica11'
            },
			{
                'time': 2183.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica12'
            },
			{
                'time': 2199.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica13'
            },
			{
                'time': 2217.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica14'
            },
			{
                'time': 2232.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica15'
            },
			{
                'time': 2249,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/logica16'
            },
			{
                'time': 2266.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/funccapa'
            },
			{
                'time': 2291.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func1'
            },
			{
                'time': 2328.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func2'
            },
			{
                'time': 2355.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func3'
            },
			{
                'time': 2372,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func4'
            },
			{
                'time': 2396.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func5'
            },
			{
                'time': 2420.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func6'
            },
			{
                'time': 2441.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func7'
            },
			{
                'time': 2479.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/funcexemplo1'
            },
			{
                'time': 2533.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/funcexemplo1',
				'pause': true
            },
			{
                'time': 2534.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func8'
            },
			{
                'time': 2554.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func9'
            },
			{
                'time': 2566.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func10'
            },
			{
                'time': 2592,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func11'
            },
			{
                'time': 2629.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func12'
            },
			{
                'time': 2656,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func13'
            },
			{
                'time': 2670.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/func14'
            },
			{
                'time': 2687.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matrizcapa'
            },
			{
                'time': 2747.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matrizcapa',
				'pause': true
            },
			{
                'time': 2748.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz1'
            },
			{
                'time': 2775.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz2'
            },
			{
                'time': 2796.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz3'
            },
			{
                'time': 2802.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz4'
            },
			{
                'time': 2806.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz5'
            },
			{
                'time': 2827.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz6'
            },
			{
                'time': 2834.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz7'
            },
			{
                'time': 2863.9,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz8'
            },
			{
                'time': 2893.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz9'
            },
			{
                'time': 2932.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz10'
            },
			{
                'time': 2960.6,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz11'
            },
			{
                'time': 2970.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz12'
            },
			{
                'time': 3006.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matrizexemplo1'
            },
			{
                'time': 3077.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matrizexemplo1',
				'pause': true
            },
			{
                'time': 3078.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/matriz13'
            },
			{
                'time': 3124.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetocapa'
            },
			{
                'time': 3161.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto1'
            },
			{
                'time': 3208.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto2'
            },
			{
                'time': 3275.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto3'
            },
			{
                'time': 3306.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto4'
            },
			{
                'time': 3339.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto5'
            },
			{
                'time': 3383.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto6'
            },
			{
                'time': 3454.8,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto7'
            },
			{
                'time': 3509.5,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto8'
            },
			{
                'time': 3559.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto9'
            },
			{
                'time': 3594.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objeto10'
            },
			{
                'time': 3629,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo1'
            },
			{
                'time': 3716.4,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo1',
				'pause': true
            },
			{
                'time': 3717.1,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo2'
            },
			{
                'time': 3780.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo2',
				'pause': true
            },
			{
                'time': 3780.7,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo3'
            },
			{
                'time': 3904.3,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/objetoexemplo3',
				'pause': true
            },
			{
                'time': 3905.2,
				'href': 'https://slides.com/ranoya/dgen-storytelling/embed#/fim'
            }
		];


/*
 *
 * FUNÇÃO DE INTERFACE COM MENU
 *
 */

		var notificouentrada = {};
		var menuOpen = true;
		var samOpen = false;
		var menuOpen = false;
		
		function menu() {

			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			if (!menuOpen) {

				menuOpen = true;
				samOpen = false;
				document.getElementById("navpresentation").style.right = "0";
				if (mobile > 640) {
					document.getElementById("placehold").style.left = "-375px";
					document.getElementById("samthings").style.left = "-750px";
				} else {
					document.getElementById("placehold").style.left = "-100%";
					document.getElementById("samthings").style.left = "-200%";
				}
				document.getElementById('myVideo').pause();

			} else {

				menuOpen = false;
				samOpen = false;
				if (mobile > 640) {
					document.getElementById("navpresentation").style.right = "-375px";
					document.getElementById("samthings").style.left = "-375px";
				} else {
					document.getElementById("navpresentation").style.right = "calc(-40px - 100%)";
					document.getElementById("samthings").style.left = "-100%";

				}
				document.getElementById("placehold").style.left = "0";
				document.getElementById('myVideo').play();

			}

		}




/*
 *
 * FUNÇÃO DE INTERFACE COM SAM
 *
 */

		function changeSam() {

			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			if (!samOpen) {

				samOpen = true;
				menuOpen = false;
				if (mobile > 640) {
					document.getElementById("navpresentation").style.right = "-375px";
					document.getElementById("placehold").style.left = "375px";
					document.getElementById("samthings").style.left = 0;
				} else {
					document.getElementById("navpresentation").style.right = "-200%";
					document.getElementById("placehold").style.left = "100%";
					document.getElementById("samthings").style.left = 0;
				}
				document.getElementById('myVideo').pause();

			} else {

				samOpen = false;
				menuOpen = false;
				if (mobile > 640) {
					document.getElementById("navpresentation").style.right = "-375px";
					document.getElementById("samthings").style.left = "-375px";
				} else {
					document.getElementById("navpresentation").style.right = "calc(-40px - 100%)";
					document.getElementById("samthings").style.left = "-100%";
				}
				document.getElementById("placehold").style.left = "0";
				document.getElementById('myVideo').play();

			}

		}

		window.onresize = function (event) {

			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			if (!menuOpen) {

				if (mobile > 640) {
					document.getElementById("navpresentation").style.right = "-375px";
				} else {
					document.getElementById("navpresentation").style.right = "calc(-40px - 100%)";
				}
				document.getElementById("placehold").style.left = "0";

			} else if (menuOpen) {

				document.getElementById("navpresentation").style.right = "0";
				if (mobile > 640) {
					document.getElementById("placehold").style.left = "-375px";
				} else {
					document.getElementById("placehold").style.left = "-100%";
				}

			} else if (!samOpen) {
				if (mobile > 640) {
					document.getElementById("samthings").style.left = 0;
				} else {
					document.getElementById("samthings").style.left = 0;
				}

			}

		};

		
/*
 *
 * FUNÇÃO DE AUTOMAÇÃO DE NOTIFICAÇÃO DO SAM
 *
 */

		function notificacao_no_sam() {
			
			for (var tempomarcado in tabela_de_notificacao_sam) {
				
				if (eval(document.getElementById('myVideo').currentTime) >= eval(tempomarcado) && eval(document.getElementById('myVideo').currentTime) < (eval(tempomarcado)+1)) {
					notificouentrada[tempomarcado] = false;
					document.getElementById('sam2-shine').classList.remove("shineCrazyDiamond");
				}

				if (sam.memory['nomedousuario'] != "" && sam.memory['nomedousuario'] != undefined && notificouentrada[tempomarcado] == false && eval(document.getElementById('myVideo').currentTime) >= (eval(tempomarcado)+1) && eval(document.getElementById('myVideo').currentTime) < (eval(tempomarcado)+2)) {
					notificouentrada[tempomarcado] = true;

					
					if (tabela_de_notificacao_sam[tempomarcado] == "limpa") {

						console.log("é pra apagar notificação");
						sam.dialogNotificationClear();

					} else {
						sam.user_reply = tabela_de_notificacao_sam[tempomarcado];
						document.getElementById('sam2-shine').classList.add("shineCrazyDiamond");
					}
					
				}
			}
		}

		function contrai() {

			document.getElementById('myVideo').style.width = "120px";
			document.getElementById('myVideo').style.left = "calc(50% - 60px)";

		}

		function saidafrente() {

			document.getElementById('myVideo').style.width = "120px";
			document.getElementById('myVideo').style.left = "calc(100% - 130px)";

		}

		function voltaaonormal() {

			document.getElementById('myVideo').style.width = "300px";
			document.getElementById('myVideo').style.left = "calc(50% - 150px)";

		}

		function gototime(tempo) {

			document.getElementById('myVideo').currentTime = tempo;
			document.getElementById('myVideo').play();
			document.getElementById('myVideo').pause();

		}

		function bookmark(tempo) {
			document.getElementById('myVideo').currentTime = tempo;
			document.getElementById('myVideo').play();
			document.getElementById('myVideo').pause();
			menu();
		}

		function pausengoto(place) {
			document.getElementById('myVideo').pause();
			document.getElementById('placehold').firstChild.src = 'https://slides.com/ranoya/dgen-storytelling/embed#/' + place;
			menuOpen = false;
			samOpen = false;
			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
				if (mobile > 640) {
					document.getElementById("navpresentation").style.right = "-375px";
					document.getElementById("samthings").style.left = "-375px";
				} else {
					document.getElementById("navpresentation").style.right = "calc(-40px - 100%)";
					document.getElementById("samthings").style.left = "-100%";

				}
				document.getElementById("placehold").style.left = "0";

		}


/*
 *
 * CARREGAMENTO DO SAM E DO AUDIOLEAD
 *
 */
		
		document.addEventListener('DOMContentLoaded', function () {

			sam.addDialogBox("entrada", "dialogbox", "notificacao");
			sam.loadscript("./dialogo/samscript.json");

		 	addAudioLead('placehold', 'myVideo', minutagem);

		if (localStorage.getItem("pontodomaterial") != null && localStorage.getItem("pontodomaterial") != undefined) {
			
			console.log('AudioLead capturou o ponto e mandou o video para ' + eval(localStorage.getItem("pontodomaterial")));
			document.getElementById('myVideo').currentTime = eval(localStorage.getItem("pontodomaterial"));
		
		} else {

			console.log('AudioLead zerou o ponto do video');
			localStorage.setItem("pontodomaterial", 0);
		}
		
		var notificou_futuro = false;
		audiolead_interface = function (slidenumber, assetsObject) {

			if (assetsObject[slidenumber].contrai == true) {
				contrai();
			}

			if (assetsObject[slidenumber].normal == true) {
				voltaaonormal();
			}

			localStorage.setItem("pontodomaterial", document.getElementById('myVideo').currentTime);

			// Checa e manda notificações para o SAM
			notificacao_no_sam();

		}

		});

		window.addEventListener("message", receiveMessage, false);

		function receiveMessage(event) {

			console.log("---- Recebi mensagem para continuar!");
  			if (event.data == "continue") {

				document.getElementById('myVideo').play();
			
			}
		}
		
	</script>
</body>

</html>

