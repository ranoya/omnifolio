<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>noFill | O tecido das tecnologias criativas</title>
    <meta name="description" content="noFill | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="noFill | O tecido das tecnologias criativas">
    <meta property="og:description" content="noFill | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="noFill()" class="indice">noFill()</a>
<h1 id='titulocapitulo'>noFill()</h1>

  <p>A função <code>noFill()</code> define o preenchimento de formas bidimensionais (polígonos, shapes, elípses, etc.) como vazio.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  stroke(#78008A);
  noFill();
  ellipse(50,50,50,50);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>noFill();</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>noFill()</code> não recebe nenhuma entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>noFill()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-color.php');"><code>color()</code></a></td><td>Define propriedades de cor armazenadas em uma variável</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-colorMode.php');"><code>colorMode()</code></a></td><td>Define o sistema de cor utilizado (RGB ou HSB)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a></td><td>Define uma cor de preenchimento para formas</td>
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

