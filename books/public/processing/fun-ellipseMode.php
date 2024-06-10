<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>ellipseMode | O tecido das tecnologias criativas</title>
    <meta name="description" content="ellipseMode | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="ellipseMode | O tecido das tecnologias criativas">
    <meta property="og:description" content="ellipseMode | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="ellipseMode()" class="indice">ellipseMode()</a>
<h1 id='titulocapitulo'>ellipseMode()</h1>

  <p>A função <code>ellipseMode()</code> define a forma como os valores de entrada da função <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> são interpretados.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  ellipseMode(CENTER);
  ellipse(50,50,100,100);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>ellipseMode(<span class="marca">modo</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>modo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">CENTER</span></td><td>entende os dois primeiros dados entregues à <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> como coordenadas do centro da circunferência, e os dois últimos como os diâmetros da elipse.</td>
    </tr>
    <tr>
      <td><span class="marca">RADIUS</span></td><td>entende os dois primeiros dados entregues à <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> como coordenadas do centro da circunferência, e os dois últimos como os raios da elipse.</td>
    </tr>
    <tr>
      <td><span class="marca">CORNER</span></td><td>modo padrão de <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> onde os dois primeiros dados demarcam o canto superior esquerdo a circunferência, e os dois últimos sua largura (dimensão horizontal) e alutra (dimensão vertical) da elipse.</td>
    </tr>
    <tr>
      <td><span class="marca">CORNERS</span></td><td>entende os dois primeiros dados entregues à <a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a> como coordenadas do canto superior esquerdo, e os dois últimos como o canto inferor direito, de um retangulo onde a elipse está circunscrita.</td>
    </tr>
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>ellipseMode()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-ellipse.php');"><code>ellipse()</code></a></td><td>Desenha uma elipse/circunferência</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a></td><td>Define a cor da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a></td><td>Define a espessura da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a></td><td>Define a cor de preenchimento</td>
    </tr>
  </table>


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

