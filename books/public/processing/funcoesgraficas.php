<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Funções gráficas | O tecido das tecnologias criativas</title>
    <meta name="description" content="Funções gráficas | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Funções gráficas | O tecido das tecnologias criativas">
    <meta property="og:description" content="Funções gráficas | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); strokeWeight(1); fill(#78008A); }";
 
 /*
  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";
  */
 
  Predata_editor_2 = Predata_editor_1;
  Predata_editor_3 = Predata_editor_1;
  Predata_editor_4 = Predata_editor_1;
  Predata_editor_5 = Predata_editor_1;
  Predata_editor_6 = Predata_editor_1 + "function au" + "xOn() { stroke(#cccc" + "cc); strokeWeight(1); line(20,20,140,10); line(20" + ",40,140,110); strokeWeight(4); point(140" + ",10); point(140,110); noStroke(); }";
  Predata_editor_7 = Predata_editor_1;
  Predata_editor_8 = Predata_editor_1;
  Predata_editor_9 = Predata_editor_1;
  Predata_editor_10 = Predata_editor_1;



  Postdata_editor_1 = "</scr" + "ipt>";

  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
  Postdata_editor_4 = Postdata_editor_1;
  Postdata_editor_5 = Postdata_editor_1;
  Postdata_editor_6 = Postdata_editor_1;
  Postdata_editor_7 = Postdata_editor_1;
  Postdata_editor_8 = Postdata_editor_1;
  Postdata_editor_9 = Postdata_editor_1;
  Postdata_editor_10 = Postdata_editor_1;
 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Instruções Gráficas" class="indice">Instruções Gráficas</a>
<h1 id='titulocapitulo'>Instruções Gráficas</h1>

  <p><span class="marca">Processing</span> é uma plataforma criada para produzir mídia visual e interativa, portanto, instruções para gerar resultados gráficos são uma parte importante de seu lexo de programação. Apresentaremos aqui um conjunto de instruções mínimas para construção de formas e de expressão gráfica/visual com a linguagem:</p> 

<a name="Fundo" class="indice">Fundo</a>
<h2>Fundo</h2>

  <p>A função <a href="javascript:carrega('fun-background.php');"><code>background()</code></a> é responsável por apagar o sketch e estabelecer uma cor de fundo. Ela recebe um dado de cor para fazer isso, que pode ser recebido em qualquer um dos formatos de cor que o <span class="marca">Processing</span> reconhece.</p>

<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {

  background(#78008A);

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Linhas" class="indice">Linhas</a>
<h2>Linhas</h2>

  <p>A função <a href="javascript:carrega('fun-line.php');"><code>line()</code></a> é responsável pelo desenho de linhas simples no sketch. Ela recebe 4 valores com coordenadas <code>x</code> e <code>y</code> iniciais da linha, e <code>x</code> e <code>y</code> finais.</p>

<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {

  line(0,0,100,50);

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>






<a name="Circunferências / Elipses" class="indice">Circunferências / Elipses</a>
<h2>Circunferências / Elipses</h2>

  <p>A função <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> é responsável pelo desenho de círculos e elipses no sketch. Ela recebe 4 valores com coordenadas <code>x</code> e <code>y</code> de referência, e <code>w</code> e <code>h</code> com as dimensões horizontais e verticais da elipse.</p>

<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {

  ellipse(40,40,80,50);

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>





<a name="Quadrados / Retângulos" class="indice">Quadrados / Retângulos</a>
<h2>Quadrados / Retângulos</h2>

  <p>A função <a href="javascript:carrega('fun-rect.php');"><code>rect()</code></a> é responsável pelo desenho de quadrados e retângulos no sketch. Ela recebe 4 valores com coordenadas <code>x</code> e <code>y</code> de referência, e <code>w</code> e <code>h</code> com as dimensões horizontais e verticais do retângulo.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {

  rect(40,40,80,50);

}
</pre>
</div>

 <h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<a name="Polígonos e Superfícies" class="indice">Polígonos e Superfícies</a>
<h2>Polígonos e Superfícies</h2>
  
  <p>A função <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> inicia o desenho de um polígono ou superfície, elaborado através da definições de vertices do polígono dados pela função <a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a> ou por curvas construídas com as funções <a href="javascript:carrega('fun-curveVertex.php');"><code>curveVertex()</code></a> ou <a href="javascript:carrega('fun-bezierVertex.php');"><code>bezierVertex()</code></a>. O desenho do polígono ou superfície é finalizado pela função <a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a>, que pode receber a constante <code>CLOSE</code> como valor de entrada, forçando o fechamento do polígono/superfície.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {

  beginShape();
  vertex(20,20);
  curveVertex(70,40);
  vertex(120,100);
  curveVertex(50,120);
  vertex(20,80);
  endShape(CLOSE);

}
</pre>
</div>

 <h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>


<p>A função <a href="javascript:carrega('fun-bezierVertex.php');"><code>bezierVertex()</code></a> desenha uma curva tensionada por dois pontos de controle. Ela recebe 3 pares de coordenadas: o primeiro par sendo o ponto de tensão relativo ao vertex de origem anterior à função, o segundo é ponto de tensão da curva em relação ao seu término, e o último é a coordenada onde ela termina.</a>

  </p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_6"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  beginShape();
  vertex(20,20);
  bezierVertex(140,10,140,110,20,40);
  endShape(CLOSE);

  auxOn(); // mostra linhas auxiliares
}
</pre>
</div>

 <h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<p>A classe <code>PShape</code> é capaz de criar ou carregar formas (shapes) de um arquivo externo. Ela é bastante útil para carregar arquivos <span class="marca">SVG</span> ou <span class="marca">OBJ</span> (3D) para serem usados no Processing. Estas formas ou arquivos vetoriais externos são criados pela função <a href="javascript:carrega('fun-createShape.php');"><code>createShape()</code></a> ou carregados pela função <a href="javascript:carrega('fun-loadShape.php');"><code>loadShape()</code></a>, e são desenhados na tela pela função <a href="javascript:carrega('fun-shape.php');"><code>shape()</code></a>.
</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_7"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_7' id='editor_7' data-linguagem="java" data-acetheme="tomorrow">


PShape s;
s = loadShape(&quot;https://www.ranoya.com/Assets/Logotipos/auladgen-purplevazado.svg&quot;);

void draw() {
s.rotate(PI/4);
shape(s, 30, 30, 60, 60);

s.resetMatrix();

}
</pre>
</div>

 <h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<p>Da mesma forma que <code>PShape</code>, a classe <code>PGraphics</code> é capaz de criar formas (shapes), e é também capaz de criar arquivos (externos) à partir destas formas. Ela é bastante útil para gerar arquivos <span class="marca">PDF</span>, <span class="marca">PNG</span>, <span class="marca">SVG</span> ou <span class="marca">DXF</span>(3D). Estas formas ou arquivos externos são criados pela função <a href="javascript:carrega('fun-createGraphics.php');"><code>createGraphics()</code></a> ou desenhados na tela pela função <a href="javascript:carrega('fun-image.php');"><code>image()</code></a>.
</p>



<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_8"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_8' id='editor_8' data-linguagem="java" data-acetheme="tomorrow">


PGraphics p;
p = createGraphics(100, 100);

void draw() {
  p.beginDraw();
  p.background(#78008A);
  p.stroke(#eeeeee);
  p.line(p.width*0.5, p.height*0.5, mouseX, mouseY);
  p.endDraw();
  image(p, 40, 30); 
}
</pre>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<p style="clear: both;">
Para criar arquivos externos, como um <span class="marca">PDF</span>, é necessário carregar uma biblioteca para a pasta onde o Processing guarda os arquivos, e utilizar a diretriz <span class="marca">import</span> para informar ao interpretador que ela será usada. 
</p>

<pre class='editor codefull' data-name='editor_9' id='editor_9' data-linguagem="java" data-acetheme="tomorrow">


import processing.pdf.*;

PGraphics pdf = createGraphics(300, 300, PDF, &quot;output.pdf&quot;);
pdf.beginDraw();
pdf.background(128, 0, 0);
pdf.line(50, 50, 250, 250);
pdf.dispose();
pdf.endDraw();
</pre>

<h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<p>A criação de arquivos <span class="marca">SVG</span> funciona da mesma maneira:</p>

<pre class='editor codefull' data-name='editor_10' id='editor_10' data-linguagem="java" data-acetheme="tomorrow">


import processing.svg.*;

PGraphics svg = createGraphics(300, 300, SVG, &quot;output.svg&quot;);
svg.beginDraw();
svg.background(128, 0, 0);
svg.line(50, 50, 250, 250);
svg.dispose();
svg.endDraw();
</pre>

<h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>







<h6 style="clear:both;">ATENÇÃO: Este documento ainda está sendo escrito, descrevendo funções e instruções gráficas importantes para o uso do Processing</h6>




<hr class="limpa"></hr>

    </div>

    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</div>
</body>

</html>


    