<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>mouseMoved | O tecido das tecnologias criativas</title>
    <meta name="description" content="mouseMoved | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="mouseMoved | O tecido das tecnologias criativas">
    <meta property="og:description" content="mouseMoved | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#eeeeee"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="mouseMoved()" class="indice">mouseMoved()</a>
<h1 id='titulocapitulo'>mouseMoved()</h1>

  <p>A função <code>mouseMoved()</code> é uma função invocada pelo contexto do <span class="marca">Processing</span> quando o mouse se movimenta em qualquer direção, e o botão não está pressionado.</p>

  <p>Se o botão estiver, ou for pressionado, enquanto o mouse se moviementa, a função invocada será <a href="javascript:carrega('fun-mouseDragged.php');"><code>mouseDragged()</code></a>.

  <p>Para se saber o valor da coordenada horizontal (x) da posição do mouse, se utiliza a variável de sistema <code>mouseX</code>, e para se saber o valor da coordenada vertical (y), se utiliza a variável <code>mouseY</code>. O <span class="marca">Processing</span> também fornece duas outras variáveis, <code>pmouseX</code> e <code>pmouseY</code>, que fornecem a última posição horizontal e vertical do mouse, antes daquela que ele ocupa agora.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


int value = 0;

void draw() {
  colorMode(HSB, 320, 100, 255);
  fill(color(270, 100, value));
  stroke(color(270, 100, value));
  rect(10, 10, 130, 130);
}

void mouseMoved() {
  value = value + 5;
  if (value > 255) {
    value = 0;
  }
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>mouseMoved()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>mouseMoved()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

<a name="Variáveis relacionadas" class="indice">Variáveis relacionadas</a>
<h2>Variáveis relacionadas</h2>
<table>
<tr><th>variável</th><th>tipo</th><th style="text-align: left;">descrição</th></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor atual da coordenada horizontal do mouse</td></tr>
<tr><td>mouseY</td><td><span class="marca">int</span></td><td>Valor atual da coordenada vertical do mouse</td></tr>
<tr><td>pmouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada horizontal do mouse</td></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada vertical do mouse</td></tr>
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

