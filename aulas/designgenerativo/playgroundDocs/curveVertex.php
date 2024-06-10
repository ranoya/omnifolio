<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin">
    <meta name="pinterest" content="nohover">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <title>Processing</title>
    <meta name="generator" content="artesanal">
      <meta name="description" content="">
    <meta name="author" content="Guilherme Ranoya">
    <link REL="SHORTCUT ICON" href="https://www.ranoya.com/aulas/playgroundDocs/icon.png">   
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <meta property="og:image:width" content="1145" />
    <meta property="og:image:height" content="601" />
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

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); fill(#78008A); strokeWidth(2); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

  <div id="texto">
  <h1>curveVertex()</h1>

  <p>A função <strong>curveVertex()</strong> determina pontos de uma curva dentro da definição de uma superfície ou polígono iniciado com a função <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e finalizado com a função <a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a>.</p>

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
  curveVertex(50,30);
  curveVertex(110,70);
  curveVertex(30,120);
  endShape();

}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>curveVertex(<span class="marca">x</span>,<span class="marca">y</span><span class="optionalattr">,z</span>);</strong></p>

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

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>curveVertex()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

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
      <td><a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a></td><td>Finaliza a especificação de um polígono ou superfície iniciado com <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e o desenha na tela</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-quadraticVertex.php');"><strong>quadraticVertex()</strong></a></td><td>Especifica uma curva Bezier quadrática com um ponto de controle para cada vetor</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a></td><td>Define um novo vertice para o polígono ou superfície a ser desenhado</td>
    </tr>
  </table>


</div>
</body>
</html>

    