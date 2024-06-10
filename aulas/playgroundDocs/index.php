<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "pinterest" content = "nopin" />
		<meta name="pinterest" content="nohover">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keywords" content="">
		<title></title>
		<meta name="generator" content="">
  		<meta name="description" content="">
		<meta name="author" content="">
        <link REL="SHORTCUT ICON" href="">		
		<link rel="image_src" type="image/jpg" href="">
		<meta property="og:image" content="" />
		<meta property="og:image:width" content="1145" />
		<meta property="og:image:height" content="601" />
  		<meta name="theme-color" content="#">
  		<meta name="msapplication-navbutton-color" content="#">
  		<meta name="apple-mobile-web-app-status-bar-style" content="#">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://www.ranoya.com/public/dev/processing.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="<?php echo $_GET['theme'] ?>.css">
  	</head>

  	<style>

  		body, html {

  			margin: 0;
  			padding: 0;
  			width: 100%;
  			height: 100%;
  			overscroll-behavior: none;
        transition: all 0.4s ease-in-out;

  		}

  		#elementoDocs {

        font-family: monospace;
        font-size: 14px;
        line-height: 18px;
        display:block;
        margin: 0;
        padding: 0;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: fixed;
        width: 380px;
        height: calc(100% - 20px);
        top: 0;
        left: 0;
            overflow-x: hidden;
        overflow-y: auto;
        transition: all 0.4s ease-in-out;
        z-index: 5;


        }

        #conteudoDocs {

        display:block;
        margin: 0;
        padding: 0;
        padding-right: 20px;
        padding-left: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: fixed;
        width: calc(100% - 430px);
        left: 400px;
        height: calc(100% - 20px);
        overflow-y: auto;
        transition: all 0.4s ease-in-out;

        }

      #insertDocs {
        display:none;
      }

      input {

        font-size: 16px;
        line-height: 22px;
        height: 28px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 10px;
        padding-right: 10px;
        border: 0;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        transition: all 0.4s ease-in-out;
        width: calc(100% - 20px);
        clear: both;
        outline-width: 0;
        margin-bottom: 20px;



      }

      input:focus {

        transition: all 0.4s ease-in-out;
        outline-width: 0;
        border-bottom: transparent 1px solid;

      }

      #iconmenumobile {

        position: fixed;
        z-index: 10;
        left: 5px;
        top: 5px;
        padding: 5px;
        width: 30px;
        height: calc(100% - 10px);
        display: none;
        transition: all 0.4s ease-in-out;

      }

      #iconmenumobile:hover {
        transition: all 0.4s ease-in-out;

      }

      @media (max-width: 750px) {

        #iconmenumobile {
          display: block;
          transition: all 0.4s ease-in-out;

        }

        #elementoDocs { 

          width: 0;
          transition: all 0.4s ease-in-out;
          left: -20px;
          z-index: 20;

         }

         #conteudoDocs {

          left: 0;
          width: calc(100% - 70px);
          padding-left: 50px;

         }

      }

  	</style>


    <body>

<a href="javascript:menu()" id="iconmenumobile"><img src="https://www.ranoya.com/Assets/WebsiteIcons/leftgray.svg" style="width: 100%; padding-top: 50vh;"></a>
<div id="elementoDocs"></div>
<div id="conteudoDocs"></div>
<iframe id="insertDocs" frameborder=0></iframe>

   	
    </body>
</html>

    <script>

    w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    if (w < 750) {

      console.log("menu esta fechado");
      menuisopen = false;

    } else {
    
    menuisopen = true;
    console.log("menu esta aberto");

    }

    tpcs = {};
    conteudoformfiltro = "";

    // carrega elementos do "menu"
    // carrega arquivo json com os dados dos tópicos e urls a serem colocadas
    // no sistema
    // 
    sumariojson = '<?php echo $_GET['theme'] ?>.json';

    fetch(sumariojson).then(response => response.json()).then((data) => {

          document.getElementById('elementoDocs').innerHTML = apresentaElementos(data, "");
          carrega(data[0].startpage, true);
          tpcs = data;

    });


    // constroi html do menu com base em um json externo
    // recebe um json e um filtro, e seleciona o que deve ser apresentado
    // devolve como retorno o código html a ser colocado em #elementoDocs
    // 
    function apresentaElementos(json, filtro) {

      codigohtml = "";

      document.getElementById('elementoDocs').style.backgroundColor = json[0].cordefundo;
      document.getElementById('elementoDocs').style.color = json[0].cordefrente;

      codigohtml = codigohtml + "<img src='" + json[0].logourl + "' style='width: calc(100%);'>";
      
      if (json[0].nextrefdoc || json[0].nextrefdoc != "") { codigohtml = codigohtml + "<a href='https://www.ranoya.com/aulas/referenceDocs/?theme=" + json[0].nextrefdocurl + "' class='topicolink' style='text-align: right'>" + json[0].nextrefdoc + " &#10562;</a>"; }

      codigohtml = codigohtml + "<input type=text id='filtrodata' onchange='filtra(this.value)'>";

        for (i = 1; i<json.length; i++) {

            if (json[i].topico.indexOf(filtro) >= 0) {
              codigohtml = codigohtml + "<a href=\"javascript:carrega('" + json[i].url + "',"+json[i].estatico+");\" class='topicolink'>" + json[i].topico + "</a>";
          }

        }

      return codigohtml;

    }

    // carrega um documento no painel de conteúdo
    // 
    function carrega(url,ativaiframe) {

      menu();

      if (ativaiframe) {
          fetch(url).then(response => response.text()).then((data) => {

            document.getElementById('conteudoDocs').innerHTML = data;

          });

      } else {



      }


    }


    function filtra(valor) {

      novoconteudo = valor;
      console.log(novoconteudo);

        if (valor == "*" || valor == null) {

        document.getElementById('elementoDocs').innerHTML = apresentaElementos(tpcs, "");

        } else {
        
        document.getElementById('elementoDocs').innerHTML = apresentaElementos(tpcs, novoconteudo);

        }

    }

    function menu() {

      w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      if (menuisopen) {

        

        if (w > 750) {



        } else {

        console.log("fechando menu");
        menuisopen = false;
        document.getElementById('elementoDocs').style.left = "-20px";
        document.getElementById('elementoDocs').style.width = 0;;

        }


      } else {

        console.log("abrindo menu");
        menuisopen = true;

        if (w <= 750) {
        
        document.getElementById('elementoDocs').style.width = "calc(100% - 20px)";
        document.getElementById('elementoDocs').style.left = 0;

        } else {

        document.getElementById('elementoDocs').style.width = "380px";
        document.getElementById('elementoDocs').style.left = 0;
        
        }

      }


    }


    window.addEventListener("resize", function() {

      w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      if (w > 750) {

        console.log("tela grande, abrindo menu");

        menu();
        document.getElementById('elementoDocs').style.width = "380px";
        document.getElementById('elementoDocs').style.left = 0;

      }


      if (w <= 750 && !menuisopen) {

        console.log("tela pequena, menu fechado");

        document.getElementById('elementoDocs').style.width = 0;
        document.getElementById('elementoDocs').style.left = "-20px";

      }

      if (w <= 750 && menuisopen) {

        document.getElementById('elementoDocs').style.width = "calc(100% - 20px)";
        document.getElementById('elementoDocs').style.left = 0;

      }


    });





    </script>