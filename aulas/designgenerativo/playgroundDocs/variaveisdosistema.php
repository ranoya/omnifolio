<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Variáveis do sistema (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Variáveis do sistema (Processing) | ReferenceDocs">
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
</head>
<body>

  <script>

  acegeneralconfig = { 
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    showPrintMargin: false,
    highlightSelectedWord: true
    
  };

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

  <div id="texto">
  <a name="Variáveis de sistema" class="indice">Variáveis de sistema</a>
<h1>Variáveis de sistema</h1>

  <p>Variáveis de sistema são variáveis contendo informações que são fornecidas e atualizadas pelo próprio contexto do <strong>Processing</strong>.</p>

  <p>Uma variável de sistema importante é, por exemplo, <span class="marca">width</span>, que recebe a dimensão horizontal do programa.</p>

  <a name="Uso" class="indice">Uso</a>
<h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  background(#eeeeee);
  textSize(32);
  text(key, 70,80);

}
</pre>
</div>

<a name="Variáveis de sistema importantes" class="indice">Variáveis de sistema importantes</a>
<h3><span class="marca">Variáveis de sistema importantes</span></h3>
<table>
<tr><th>variável</th><th>tipo</th><th style="text-align: left;">descrição</th></tr>
<tr><td>width</td><td><span class="marca">int</span></td><td>Valor atual da dimensão horizontal do sketch/programa</td></tr>
<tr><td>height</td><td><span class="marca">int</span></td><td>Valor atual da dimensão vertical do sketch/programa</td></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor atual da coordenada horizontal do mouse</td></tr>
<tr><td>mouseY</td><td><span class="marca">int</span></td><td>Valor atual da coordenada vertical do mouse</td></tr>
<tr><td>pmouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada horizontal do mouse</td></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada vertical do mouse</td></tr>
<tr><td>key</td><td><span class="marca">char / String</span></td><td>Última tecla pressionada no teclado</td></tr>
</table>

</div>
</body>
</html>

    