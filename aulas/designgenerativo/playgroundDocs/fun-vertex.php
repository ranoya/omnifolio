<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>vertex (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="vertex (Processing) | ReferenceDocs">
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
  <a name="vertex" class="indice">vertex()</a>
  <h1>vertex()</h1>

  <p>A função <strong>vertex()</strong> determina um ponto (vértice) de ligação dentro da definição de uma superfície ou polígono iniciado com a função <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e finalizado com a função <a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a>.</p>

<a name="uso" class="indice">Uso</a>
  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  stroke(0);
  fill(200,30,200);

  beginShape();
  vertex(10,10);
  vertex(20,130);
  vertex(40,40);
  vertex(50,100);
  vertex(80,20);
  vertex(140,80);
  endShape();

}
</pre>
</div>

<a name="sintaxe" class="indice">Sintaxe</a>
  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>vertex(<span class="marca">x</span>,<span class="marca">y</span><span class="optionalattr">,z</span>);</strong></p>

<a name="Entradas" class="indice">Entradas</a>
  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x</span></td>
      <td>float</td>
      <td>coordenada horizontal</td>
    </tr>
     <tr>
      <td><span class="marca">y</span></td>
      <td>float</td>
      <td>coordenada vertical</td>
    </tr>
     <tr>
      <td><span class="marca">z</span></td>
      <td>float</td>
      <td>altura em relação ao plano cartesiano bidimensional</td>
    </tr>
    
  </table>

<a name="Retorno" class="indice">Retorno</a>
  <h3><span class="marca">Retorno</span></h3>

  <p><strong>vertex()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

<a name="Associadas" class="indice">Funções associadas</a>
  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a></td><td>Inicializa a especificação de um polígono ou superfície</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-bezierVertex.php');"><strong>bezierVertex()</strong></a></td><td>Especifica uma curva Bezier com dois pontos de controle para sua tangência</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-curveVertex.php');"><strong>curveVertex()</strong></a></td><td>Especifica uma curva até uma coordenada</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a></td><td>Finaliza a especificação de um polígono ou superfície iniciado com <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e o desenha na tela</td>
    </tr>
  </table>


</div>
</body>
</html>

    