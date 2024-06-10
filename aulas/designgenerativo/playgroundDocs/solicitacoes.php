<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Solicitações | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Solicitações | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de programação em Processing">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <link REL="SHORTCUT ICON" HREF="https://www.ranoya.com/aulas/playgroundDocs/icon.png">

    <meta name="theme-color" content="#8487BE">
    <meta name="msapplication-navbutton-color" content="#8487BE">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8487BE">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.ranoya.com/aulas/playgroundDocs/dev2.js"></script>
    <script type='text/javascript' src="https://www.ranoya.com/aulas/pesquisas/dev/formgrid.js"></script>
</head>
<body>

 <style>

        #tela {

          width: 100%;
          text-align: left;
          padding: 0;
          margin: 0;
          transition: all .4s ease-in;

        }
        .lds-grid {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        }
        .lds-grid div {
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--formgrid-background, #fff);
        animation: lds-grid 1.2s linear infinite;
        }
        .lds-grid div:nth-child(1) {
        top: 8px;
        left: 8px;
        animation-delay: 0s;
        }
        .lds-grid div:nth-child(2) {
        top: 8px;
        left: 32px;
        animation-delay: -0.4s;
        }
        .lds-grid div:nth-child(3) {
        top: 8px;
        left: 56px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(4) {
        top: 32px;
        left: 8px;
        animation-delay: -0.4s;
        }
        .lds-grid div:nth-child(5) {
        top: 32px;
        left: 32px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(6) {
        top: 32px;
        left: 56px;
        animation-delay: -1.2s;
        }
        .lds-grid div:nth-child(7) {
        top: 56px;
        left: 8px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(8) {
        top: 56px;
        left: 32px;
        animation-delay: -1.2s;
        }
        .lds-grid div:nth-child(9) {
        top: 56px;
        left: 56px;
        animation-delay: -1.6s;
        }
        @keyframes lds-grid {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
        }

      </style>

  <div id="texto">
  <a name="Solicitações" class="indice">Solicitações</a>
<h1>Solicitações</h1>

  <p>Solicite por aqui a documentação e inclusão de instruções ou procedimentos relacionados ao código HTML ou CSS</p>

  <div id="tela">

  <div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

  </div>

      <script>

        forma = [
          {
          'label': '',
          'wait': 'PREENCHA O FORMULÁRIO',
          'botao': 'SOLICITAR',
          'blockCorner': '0',
          'fontsizecampos': '16px',
          'handler': 'https://script.google.com/macros/s/AKfycbzlG_Ctau80GhXNLOEvwY_m39I2xJ-FNENPlWpn65uNDoGKvQ0/exec'
          },
          {
            'tipo': 'singleoption',
            'var': 'COMENTARIO1',
            'nome': 'Para qual tipo de código?',
            'alternativas': {
                              'PROCESSING': 'PROCESSING',
                              'P5': 'P5',
                              'SVG': 'SVG'
                            },
            'default': 'PROCESSING',
          },
          {
            'tipo': 'multiline',
            'var': 'COMENTARIO2',
            'nome': 'Qual instrução ou procedimento?',
            'exemplo': 'Ex: matriz de transformação',
            'default': '',
            'maxchar': 500,
            'maxheight': 50,
            'alturainicial': 50,
          },
          { 
            'tipo': 'hidden',
            'var': 'DISCIPLINA',
            'default': 'ReferenceDocs Web'
          },
          { 
            'tipo': 'hidden',
            'var': 'FASE',
            'default': 'Solicitacoes'
          }
        ];

        setTimeout(function(event) {
                document.getElementById("tela").formgridstart(forma);
        }, 5000);
        
      </script>


    <hr style="width: 100%; clear: both; border-color: transparent;"></hr>

    <h3>Instruções / Procedimentos já solicitados</h3>
    <div class="diagramahalf firstblock">
        <p><strong>Processing</strong></p>
        <code>

<?php


$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_edu";
$conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);


$q = "SELECT FASE,COMENTARIO1,COMENTARIO2 FROM FEEDBACK WHERE FASE='Solicitacoes' AND COMENTARIO1='PROCESSING'"; // QUERY

if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
}

$response = mysqli_query($conn, $q);

if (mysqli_num_rows($response) > 0) {

	while($row = mysqli_fetch_assoc($response)) {

		echo $row['COMENTARIO2'] . "<br>";
        
    }
}

?>

        </code>

    </div>

    <div class="diagramahalf firstblock">
         <p><strong>P5</strong></p>
          <code>

<?php


$q = "SELECT FASE,COMENTARIO1,COMENTARIO2 FROM FEEDBACK WHERE FASE='Solicitacoes' AND COMENTARIO1='P5'"; // QUERY

if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
}

$response = mysqli_query($conn, $q);

if (mysqli_num_rows($response) > 0) {

	while($row = mysqli_fetch_assoc($response)) {

		echo $row['COMENTARIO2'] . "<br>";
        
    }
}

?>

        </code>

    </div>

    <div class="diagramahalf firstblock">
         <p><strong>SVG</strong></p>
          <code>

<?php


$q = "SELECT FASE,COMENTARIO1,COMENTARIO2 FROM FEEDBACK WHERE FASE='Solicitacoes' AND COMENTARIO1='SVG'"; // QUERY

if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
}

$response = mysqli_query($conn, $q);

if (mysqli_num_rows($response) > 0) {

	while($row = mysqli_fetch_assoc($response)) {

		echo $row['COMENTARIO2'] . "<br>";
        
    }
}

?>

        </code>

    </div>

</div>
</body>
</html>

    