<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>mouseDragged | O tecido das tecnologias criativas</title>
    <meta name="description" content="mouseDragged | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="mouseDragged | O tecido das tecnologias criativas">
    <meta property="og:description" content="mouseDragged | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#eeeeee"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="mouseDragged()" class="indice">mouseDragged()</a>
<h1 id='titulocapitulo'>mouseDragged()</h1>

  <p>A função <code>mouseDragged()</code> é uma função invocada pelo contexto do <span class="marca">Processing</span> quando um evento específico ocorre: o botão esquerdo do mouse é pressionado e o mouse muda de posição enquanto o botão continuia pressionado. Os procedimentos que estiverem estabelecidos dentro desta função serão executados assim que o evento for detectado.</p>

  <p>O click do mouse é dividido em 2 partes: um primeiro momento onde o botão é pressionado, cujos procedimentos são definidos em <a href="javascript:carrega('fun-mousePressed.php');"><code>mousePressed()</code></a>, um segundo momento onde o botão é liberado após o click. Se o tempo entre o pressionar e o liberar for muito rápido e a posição do mouse não se alterar, é invocada a função <a href="javascript:carrega('fun-mouseClicked.php');"><code>mouseClicked()</code></a>; se o tempo entre o pressionar e o liberar for mais longo, ou houver uma mudança de posição, a função <code>mouseDragged()</code> é invocada, e posteriormente a função <a href="javascript:carrega('fun-mouseReleased.php');"><code>mouseReleased()</code></a> quando o botão do mouse for liberado.</p>

  <p>Na ausência de <a href="javascript:carrega('fun-mouseReleased.php');"><code>mouseReleased()</code></a>, a função <a href="javascript:carrega('fun-mouseClicked.php');"><code>mouseClicked()</code></a> será chamada, caso não haja alteração na posição do mouse.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

}

void mousePressed() {

  background(#d000f2); // roxo
  
}

void mouseClicked() {

  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); // cinza

}

void mouseReleased() {

  background(#469CA2); // ciano

}

void mouseDragged() {

  background(#F49A49); // amarelo

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>mouseDragged()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>mouseDragged()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

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

