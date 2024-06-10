<?php
session_start();
?>

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
	<title>DESIGN GENERATIVO * UFPE</title>
	<meta name="generator" content="slides.com" />
	<meta name="description"
		content="Material de apoio da disciplina de Design Generativo do Bacharelado de Design da Universidade Federal de Pernambuco">
	<meta name="author" content="Prof. Dr. Guilherme Ranoya">
	<meta name="keywords" content="design generativo, artefatos digitais, design paramétrico, processing, javascript">
	<meta property="og:url" content="https://www.ranoya.com/aulas/designgenerativo/index.html">
	<meta property="og:title" content="DESIGN GENERATIVO * EMENTA">
	<meta property="og:description"
		content="Material de apoio da disciplina de Design Generativo do Bacharelado de Design da Universidade Federal de Pernambuco">
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

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#40124d">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#40124d">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#40124d">

	<style>
		:root {
			--text-color: #777777;
			--highlight-color: #40124d;
			--invert-color: white;
			--darker-color: #40124d;
			--other-color: #FF5BAA;
			--neutral-color: #cccccc;
			--darker-neutral: grey;
			--sam-foreground: white;
			--sam-bgcolor: transparent;
			--sam-borderColor: transparent;
			--sam-ps: #FF5BAA;
			--sam-pm: #E682F9;
			--sam-pl: #FF5BAA;
			--sam-pxl: #F99399;
		}

		html {

			background-color: #7A1A8B;

		}

		.menubutton {

			width: 30px;
			height: 30px;
			position: fixed;
			z-index: 100;
			top: 20px;
			right: 30px;
			background-color: #40124d;
			-webkit-transition: all 0.4s ease-in;
			transition: all 0.4s ease-in-out;

		}

		.menubutton:hover {

			background-color: grey;
			-webkit-transition: all 0.4s ease-in;
			transition: all 0.4s ease-in-out;

		}

		h3 {

			font-family: Helvetica, Arial, sans-serif;
			color: #d681e7;
			font-size: 1.8vh;
			padding: 0;
			margin: 0;
			margin-bottom: 1.2vh;


		}

		nav {

			position: fixed;
			width: 335px;
			height: calc(100% - 120px);
			overflow-y: scroll;
			z-index: 99;
			top: 0;
			right: -375px;
			background-color: #40124d;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 1.4vh;
			color: white;
			padding-top: 50px;
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 70px;
			vertical-align: middle;

		}

		nav a {

			font-size: 2.2vh;
			padding-left: 8px;
			padding-right: 8px;
			margin-left: -8px;
			padding-top: 0.7vh;
			padding-bottom: 0.7vh;
			text-decoration: none;
			color: white;
			display: block;
			margin-bottom: 0px;
			-webkit-transition: all 0.4s ease-in;
			transition: all 0.4s ease-in-out;

		}

		nav a:hover {

			background-color: white;
			color: #7A1A8B;
			-webkit-transition: all 0.4s ease-in;
			transition: all 0.4s ease-in-out;

		}

		#samthings {
			width: 375px;
			height: 100%;
			position: fixed;
			left: -375px;
			top: 0;
			background-color: #40124d;
			z-index: 50;
			font-family: Helvetica, Arial, sans-serif;

		}

		.desligado {
			color: white !important;
			background-color: transparent !important;
			cursor: default;
		}

		.desligado:hover {
			color: white !important;
			background-color: transparent !important;
			cursor: default;
		}

		* {
			-webkit-transition: all 0.6s ease-in-out;
			transition: all 0.6s ease-in-out;
		}

		#samBlock {

			position: fixed;
			z-index: 10000;
			bottom: 30px;
			/*left: calc(46% - 20px);*/
			left: 30px;
			background-color: transparent;
			margin: 0;
			padding: 0;
			padding: 0;
			border-radius: 50%;
			width: 42px;
			height: 42px;
			border: transparent solid 2px;
			transition: all .4s ease-in;
		}

		#samBlock:hover #sam9000 {
			border: #FF5BAA solid 5px !important;
			transition: all .4s ease-in;
		}

		#sam9000 {
			width: 30px;
			height: 30px;
			background-color: var(--sam-bgcolor, transparent);
			padding: 1px;
			margin: 0;
			border: 0;
			border-radius: 50%;
			border: var(--sam-borderColor, transparent) solid 5px;
			transition: border-color 1s ease-out;
			transition: background-color 1.2s ease-out;
		}

		#sam-xl {
			fill: var(--sam-foreground, #78008A);
			transition: fill 0.8s ease-in-out;
		}

		#sam-s {
			fill: var(--sam-foreground, #78008A);
			transition: fill 0.8s ease-in-out;
		}

		#sam-m {
			fill: var(--sam-foreground, #78008A);
			transition: fill 0.8s ease-in-out;
		}

		#sam-l {
			fill: var(--sam-foreground, #78008A);
			transition: fill 0.8s ease-in-out;
		}

		#pontoatual {

			padding: 20px;
			padding-bottom: 0;
			width: calc(100% - 40px);
			display: inline-block;
			background-color: transparent;
			color: white;
			font-family: Helvetica, Arial, sans-serif;


		}

		#entrada {

			width: calc(100% - 40px);
			display: inline-block;
			background-color: transparent;
			font-size: 16px;
			line-height: 22px;
			padding: 20px;
			padding-bottom: 5px;
			outline: none;
			border: 0;
			margin-left: 0;
			color: white;
			font-family: Helvetica, Arial, sans-serif;
		}

		#dialogbox {
			width: calc(100% - 40px);
			padding: 20px;
			font-size: 16px;
			line-height: 22px;
			overflow-y: auto;
			max-height: calc(100vh - 250px);
			color: white;
			font-family: Helvetica, Arial, sans-serif;
		}

		#dialogbox iframe {
			width: 100%;
			height: 300px;
			border: 0 transparent none;
			margin-top: 8px;
		}

		#notificacao {
			display: inline-block;
			width: calc(100% - 40px);
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 15px;
			color: var(--other-color, #07607e);
			font-family: Helvetica, Arial, sans-serif;
			font-size: 16px;
			line-height: 22px;
		}

		#notificacao a {
			text-decoration: none;
			background-color: transparent;
			color: var(--other-color, #07607e);
			border: 1px solid var(--other-color, #07607e);
			font-weight: bold;
			padding: 5px;
			padding-left: 8px;
			padding-right: 8px;
			margin-left: 7px;
			margin-top: -5px;
			border-radius: 6px;
			transition: all 0.4s ease-out;

		}

		#notificacao a:hover {

			background-color: var(--other-color, #07607e);
			color: var(--invert-color, white);
			border: transparent solid 1px;
			transition: all 0.4s ease-out;

		}

		#dialogbox a {
			text-decoration: none;
			background-color: transparent;
			color: var(--other-color, #07607e);
			border: 1px solid var(--other-color, #07607e);
			font-weight: bold;
			padding: 5px;
			padding-left: 8px;
			padding-right: 8px;
			margin-left: 3px;
			margin-top: -5px;
			border-radius: 6px;
			transition: all 0.4s ease-out;

		}

		#dialogbox a:hover {

			background-color: var(--other-color, #07607e);
			color: var(--darker-color, #42008a);

			transition: all 0.4s ease-out;

		}

		#dialogbox b {
			display: inline-block;
			clear: left;
			padding-top: 15px;
		}

		.text_userreply {
			color: var(--other-color, #07607e);
			font-weight: bold;
		}

		@media (max-width: 640px) {

			.menubutton {

				background-color: grey;

			}


			nav {

				width: calc(100% - 40px);
				right: calc(-40px - 100%);
				padding-bottom: 110px;
				font-size: 1.8vh;
			}

			nav a {

				font-size: 2.8vh;
				padding-left: 13px;
				padding-right: 8px;
				margin-left: -8px;
				padding-top: 1.5vh;
				padding-bottom: 1.5vh;
				text-decoration: none;
				color: white;
				display: block;
				margin-bottom: 10px;
				margin-top: 10px;
				-webkit-transition: all 0.4s ease-in;
				transition: all 0.4s ease-in;
				background-color: rgba(255, 255, 255, 0.2);

			}

			#samthings {
				width: 100%;
				left: -100%;
			}

			#samBlock {

				bottom: 50%;
				/*left: calc(46% - 20px);*/
				left: -25px;
				background-color: transparent;
				margin: 0;
				padding: 0;
				padding: 0;
				border-radius: 50%;
				width: 25px;
				height: 25px;
				border: transparent solid 2px;
				transition: all .4s ease-in;

			}

			#samBlock:hover #sam9000 {
				border: transparent solid 5px !important;
			}

			#dialogbox {
				max-height: calc(100vh - 180px);

			}

		}
	</style>

</head>

<body style="padding: 0 0 0 0; margin: 0 0 0 0; overflow-y: hidden; overflow-x: hidden;">

	<?php
	if ($_SESSION['professor'] == true) {
	echo '<a href="javascript: menu();" class="menubutton"><img
			src="https://www.ranoya.com/Assets/WebsiteIcons/hamburguer-white.svg" style="width: 100%;"></a>';

	}
	?>

	<nav id="menu">
		<h3>SUMÁRIO</h3><br>

		<br>INSTITUCIONAL<br>
		<a href="javascript:sumario('capa',0);">APRESENTAÇÃO</a>
		<a href="javascript:sumario('cultura',0);">CULTURA DO CURSO</a>
		<a href="javascript:sumario('novacultura',0);">NOVA PROPOSTA</a>
		<a href="javascript:sumario('qexpectativa',0);">SUA EXPECTATIVA</a>
		<a href="javascript:sumario('ementa',0);">PROGRAMA</a>
		<a href="javascript:sumario('professor',0);">SOBRE O PROFESSOR</a>
		<a href="javascript:sumario('comm',0);">COMUNICAÇÃO</a>
		<a href="javascript:sumario('bibliografia',0);">BIBLIOGRAFIA</a>
		<a href="javascript:sumario('vernaculo',0);">VERNÁCULO</a>
		<a href="javascript:sumario('lugares',0);">LUGARES</a>
		<a id="workshops" target="_blank">REMOTE SESSIONS / WORKSHOPS</a>

		<br><br>PANORAMA<br>
		<a href="javascript:sumario('historia',0);">HISTÓRIA DA ARTE + TECNOLOGIA</a>
		<a href="javascript:sumario('codigocriativo',0);">APLICAÇÕES DO CÓDIGO CRIATIVO</a>
		<a href="javascript:sumario('embalagem',0);">DESIGN DE PRODUTO</a>
		<a href="javascript:sumario('tatoo1',0);">ARTES APLICADAS</a>
		<a href="javascript:sumario('identidadevisual',0);">IDENTIDADE VISUAL</a>
		<a href="javascript:sumario('tipografia',0);">TIPOGRAFIA</a>
		<a href="javascript:sumario('instalacoes',0);">EXPOGRAFIA / INSTALAÇÕES</a>
		<a href="javascript:sumario('infografia',0);">INFOGRAFIA</a>
		<a href="javascript:sumario('educacao',0);">EDUCAÇÃO</a>
		<a href="javascript:sumario('poeticas',0);">POÉTICAS COMPUTACIONAIS</a>
		<a href="javascript:sumario('entretenimento',0);">ENTRETENIMENTO</a>
		<a href="javascript:sumario('projetos',0);">PROJETOS DE TECNOLOGIA CRIATIVA</a>

		<br><br>INICIANDO NA PROGRAMAÇÃO<br>
		<a href="javascript:sumario('plataformas',0);">LINGUAGENS E PLATAFORMAS</a>
		<a href="javascript:sumario('downloads',0);">DOWNLOADS</a>
		<a href="javascript:sumario('online',0);">IDES ONLINE</a>
		<a href="javascript:sumario('editorexperimental',0);">AMBIENTE DE EXPERIMENTAÇÃO</a>
		<a href="javascript:sumario('introducao',0);">INTRODUÇÃO À PROGRAMAÇÃO</a>
		<a href="javascript:sumario('escolhelang',0);">LINGUAGEM ADOTADA AQUI</a>
		<a href="javascript:sumario('cursosonline',0);">CURSOS E AULAS ON-LINE</a>

		<br><br>CÓDIGO<br>
		<a href="javascript:sumario('manual',4);">REFERÊNCIA</a>
		<a href="javascript:sumario('editor',4);">AMBIENTE DE PRODUÇÃO</a>
		<a href="javascript:sumario('sintaxe',4);">SINTAXE</a>
		<a href="javascript:sumario('variaveis',4);">VARIÁVEIS</a>
		<a href="javascript:sumario('operadores',4);">OPERADORES</a>
		<a href="javascript:sumario('loops',4);">LOOPS</a>
		<a href="javascript:sumario('funcoes',4);">FUNÇÕES</a>
		<a href="javascript:sumario('oop',4);">OBJETOS</a>
		<a href="javascript:sumario('matrizes',4);">MATRIZES</a>
		<a href="javascript:sumario('comandos',4);">INSTRUÇÕES GRÁFICAS</a>
		<a href="javascript:sumario('geometria',4);">GEOMETRIA</a>

	</nav>

	<iframe id="placehold" frameborder=0 style="position: fixed; left: 0; width: 100%; height: 100%;"
		scrolling="no"></iframe>

	<script>
		// FUNÇÃO PARA ALTERAR A LINGUAGEM PADRÃO DO MATERIAL DE DGEN
		function muda_lang_dgen(lang) {
			localStorage.setItem('dgenmateriallinguagem', lang);
		}


		// FUNÇÃO DE FETCH DE ARQUIVO JSON

		sessionavaliable = false;
		sessionaddress = "";
		arquivojson = './session.json';
		fetch(arquivojson).then(response => response.json()).then((dados) => {

			console.table(dados);
			sessionavaliable = dados[0].status;
			sessionaddress = dados[0].url;
			console.log("URL É: " + sessionaddress);

			if (dados[0].status == false) {

				console.log("no session!");
				document.getElementById("workshops").className = "desligado";

			} else {

				console.log("there is a session!");
				document.getElementById("workshops").href = sessionaddress;


			}

		});


		var s = [
			"https://slides.com/ranoya/designgenerativov3mobile/live",
			"https://slides.com/ranoya/designgenerativov3mobile/live",
			"https://slides.com/ranoya/designgenerativoatividades/live",
			"https://slides.com/ranoya/designgenerativoatividades/live",
			"https://slides.com/ranoya/designgenerativov3mobile/live",
			"https://slides.com/ranoya/designgenerativov3mobile/live"
		];


		var menuOpen = true;
		var samOpen = false;
		sumario('capa', 0);

		var menuOpen = false;

		function menu() {

			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			if (!menuOpen) {

				menuOpen = true;
				document.getElementById("menu").style.right = "0";
				if (mobile > 640) {
					document.getElementById("placehold").style.left = "-375px";
				} else {
					document.getElementById("placehold").style.left = "-100%";
				}

			} else {

				menuOpen = false;
				if (mobile > 640) {
					document.getElementById("menu").style.right = "-375px";
				} else {
					document.getElementById("menu").style.right = "calc(-40px - 100%)";
				}
				document.getElementById("placehold").style.left = "0";

			}

		}

		window.onresize = function (event) {

			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

			if (!menuOpen) {

				if (mobile > 640) {
					document.getElementById("menu").style.right = "-375px";
				} else {
					document.getElementById("menu").style.right = "calc(-40px - 100%)";
				}
				document.getElementById("placehold").style.left = "0";

			} else {

				document.getElementById("menu").style.right = "0";
				if (mobile > 640) {
					document.getElementById("placehold").style.left = "-375px";
				} else {
					document.getElementById("placehold").style.left = "-100%";
				}

			}

		};

		/*
				function justgoto(place, slide) {
					var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
					if (!slide) {

						slide = 0;

					}

					//alterna para versão mobile, se for acessado de um
					if (mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) {
						slide++;
					}

					if (place == "editorexperimental" && (mobile <= 640 || navigator.userAgent.match(/iPad/i) != null)) {

						window.open("https://designgenerativo.ranoya.com/escolheambiente.html");

					} else if (place == "editor" && (mobile <= 640 || navigator.userAgent.match(/iPad/i) != null)) {

						window.open("https://www.openprocessing.org/sketchs/create");

					} else {

						document.getElementById("placehold").src = s[slide] + "#/" + place;
					}

				}
		*/


		function sumario(place, slide) {
			var mobile = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if (!slide) {

				slide = 0;

			}

			linguagem = "";
			if (slide >= 4) {

				if (localStorage.getItem("dgenmateriallinguagem") != undefined && localStorage.getItem(
						"dgenmateriallinguagem") != "") {
					linguagem = localStorage.getItem("dgenmateriallinguagem");
				} else {
					linguagem = "processing";
				}
			}


			completa = "";
			//alterna para versão mobile, se for acessado de um
			if (mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) {
				completa = "";
			}

			if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "vernaculo") {
				place = "bibliografia";
			}

			if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "editorexperimental") {

				if (localStorage.getItem("ambientedgen") != undefined || localStorage.getItem("ambientedgen") != "") {
					window.open(localStorage.getItem("ambientedgen"));
				} else {
					localStorage.setItem("ambientedgen", "https://www.ranoya.com/p/playprocessing");
					window.open(localStorage.getItem("ambientedgen"));
				}

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "editor") {

				if (localStorage.getItem("ambienteidedgen") != undefined || localStorage.getItem("ambientedgen") != "") {
					window.open(localStorage.getItem("ambienteidedgen"));
				} else {
					localStorage.setItem("ambienteidedgen", "https://www.openprocessing.org/sketch/create");
					window.open(localStorage.getItem("ambienteidedgen"));
				}

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "cursosonline") {

				window.open(
					"https://referencias.ranoya.com/?filter=auladg,cursosonline&embed=slides&theme=violetpinkonwhite&listtitle=CURSOS&theme=violetpink&contentonly=true"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "plataformas") {
				window.open(
					"https://referencias.ranoya.com/?filter=auladg,progplat&embed=slides&theme=violetpinkonwhite&listtitle=CURSOS&theme=violetpink&contentonly=true"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "bibliotecas") {
				window.open(
					"https://referencias.ranoya.com/?filter=auladg,downloadlinks&embed=slides&theme=violetpinkonwhite&listtitle=CURSOS&theme=violetpink&contentonly=true"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "downloads") {
				window.open(
					"https://referencias.ranoya.com/?filter=auladg,downloadlinks&embed=slides&theme=violetpinkonwhite&listtitle=CURSOS&theme=violetpink&contentonly=true"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "online") {
				window.open(
					"https://referencias.ranoya.com/?filter=auladg,idesonline&embed=slides&theme=violetpinkonwhite&listtitle=CURSOS&theme=violetpink&contentonly=true"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "vernaculo") {
				window.open(
					"https://referencias.ranoya.com/?filter=auladg&embed=slides&theme=violetpinkonwhite&listtitle=OUTRAS%20REFER%C3%8ANCIAS"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "bibliografia") {
				window.open(
					"https://bibliografia.ranoya.com/index.php?theme=violetpink&filtro=audadg&embed=slides&contentonly=true&filter=auladg"
				);

			} else if ((mobile <= 640 || navigator.userAgent.match(/iPad/i) != null) && place == "projetos") {
				window.open("https://www.ranoya.com/aulas/alemdosandbox/?contentonly=true&filter=ontcoding&embed=slides");

			} else {

				document.getElementById("placehold").src = s[slide] + linguagem + completa + "#/" + place;
				menu();

			}
		}
	</script>
</body>

</html>