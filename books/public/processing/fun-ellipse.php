<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>ellipse | O tecido das tecnologias criativas</title>
    <meta name="description" content="ellipse | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="ellipse | O tecido das tecnologias criativas">
    <meta property="og:description" content="ellipse | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="ellipse()" class="indice">ellipse()</a>
<h1 id='titulocapitulo'>ellipse()</h1>

  <p>A função <code>ellipse()</code> desenha uma circunferência ou uma elipse em uma coordenada dada como ponto de referência, e com um tamanho especificado. A configuração do ponto de referência é dada pela função <a href="javascript:carrega('fun-ellipseMode.php');"><code>ellipseMode()</code></a>, espessura e cor da borda pelas funções <a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a> e <a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a>, e a cor de preenchimento pela função <a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a>.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  ellipseMode(CORNER);
  ellipse(20,20,80,120);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>ellipse(<span class="marca">x</span>,<span class="marca">y</span>,<span class="marca">w</span>,<span class="marca">h</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x</span></td><td>float</td><td>coordenada horizontal do ponto de referência</td>
    </tr>
    <tr>
      <td><span class="marca">y</span></td><td>float</td><td>coordenada vertical do ponto de referência</td>
    </tr>
    <tr>
      <td><span class="marca">w</span></td><td>float</td><td>largura (dimensão horizontal) da circunferência</td>
    </tr>
    <tr>
      <td><span class="marca">h</span></td><td>float</td><td>altura (dimensão vertical) da circunferência</td>
    </tr>
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>ellipse()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p>Por <i>default</i> o ponto de referência da elipse/circunferência é seu canto superior esquerdo. Através de <a href="javascript:carrega('fun-ellipseMode.php');"><code>ellipseMode()</code></a> é possível definir como ponto de referência o centro da elipse, ou é possível definir os parâmetros <span class="marca">w</span> e <span class="marca">h</span> como coordenadas finais da elipse, e não suas dimensões.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-ellipseMode.php');"><code>ellipseMode()</code></a></td><td>Define como serão interpretados os dados de entrada</td>
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

