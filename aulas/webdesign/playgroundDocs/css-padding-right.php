<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: PADDING | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: BORDER | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de CSS">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <link rel="icon" type="image/png" href="https://www.ranoya.com/aulas/playgroundDocs/icon.png">
<link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon144.png" />

    <meta name="theme-color" content="#8487BE">
    <meta name="msapplication-navbutton-color" content="#8487BE">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8487BE">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.ranoya.com/aulas/playgroundDocs/dev2.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.ranoya.com/aulas/webdesign/playgroundDocs/tipografia2.css">
</head>
<body>

  <script>
    acegeneralconfig = { 
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    showPrintMargin: false,
    highlightSelectedWord: true,
    wrap: true
    
  };

    Predata_editor_1 = "";
    Predata_editor_2 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <a name="padding-right" class="indice">padding-right</a>
 <h1>padding-right</h1>

  <p>O atributo <code>padding-right</code> define as dimensões do espaçamento interno direito (distância do elemento para sua própria borda), conforme a estrutura de <a href="javascript:carrega('boxmodel.php');">box model</a> que compõe cada elemento HTML na tela do navegador.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
padding-right: 20px;
</pre>

  <p>O atributo recebe apenas uma informação de dimensionamento em qualquer <a href="javascript:carrega('unidadescss.php');">tipo de medida</a> aceita pelo CSS ou definida através de uma <a href="javascript:carrega('funcoescss.php');"><code>função</code></a>.</p>

<a name="Exemplo" class="indice">Exemplo</a>
 <h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
         padding-right: 100px;
         border: 2px solid white;
         width: 50%;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;bloco 1
        &lt;div&gt;interno&lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;bloco 2&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>


<a name="Atributos associados" class="indice">Atributos associados</a>
 <h2>Atributos associados</h2>
<p>Para controlar os demais espaçamentos dos elementos HTML, utilizar os atributos:
  <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>,
  <a href="javascript:carrega('css-margin-bottom.php');"><code>margin-bottom</code></a>,
  <a href="javascript:carrega('css-margin-left.php');"><code>margin-left</code></a>,
  <a href="javascript:carrega('css-margin-right.php');"><code>margin-right</code></a>,
  <a href="javascript:carrega('css-margin-top.php');"><code>margin-top</code></a>,
  <a href="javascript:carrega('css-padding.php');"><code>padding</code></a>,
  <a href="javascript:carrega('css-padding-bottom.php');"><code>padding-bottom</code></a>,
  <a href="javascript:carrega('css-padding-left.php');"><code>padding-left</code></a>,
  <a href="javascript:carrega('css-padding-top.php');"><code>padding-top</code></a>.
</p>



</div>
</body>
</html>

    