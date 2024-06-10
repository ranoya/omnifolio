<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>keyReleased | O tecido das tecnologias criativas</title>
    <meta name="description" content="keyReleased | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="keyReleased | O tecido das tecnologias criativas">
    <meta property="og:description" content="keyReleased | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#eeeeee"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="keyReleased()" class="indice">keyReleased()</a>
<h1 id='titulocapitulo'>keyReleased()</h1>

  <p>A função <code>keyReleased()</code> é uma função invocada pelo contexto do <span class="marca">Processing</span> quando uma tecla é liberada qapós ter sido mantida pressionada por um pequeno intervalo de tempo.</p>

  <p>O evento de reconhecimento de uma tecla é dividido em 2 partes: um primeiro momento onde a tecla é pressionada, cujos procedimentos são definidos em <a href="javascript:carrega('fun-keyPressed.php');"><code>keyPressed()</code></a> e um segundo momento onde a tecla é liberada, cujos procedimentos são definidos em <code>keyReleased()</code>.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#eeeeee"; } ?>);

}

void keyReleased() {

    background(#F49A49);
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>keyPressed()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>keyPressed()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

<a name="Variáveis relacionadas" class="indice">Variáveis relacionadas</a>
<h2>Variáveis relacionadas</h2>
<table>
<tr><th>variável</th><th>tipo</th><th style="text-align: left;">descrição</th></tr>
<tr><td>key</td><td><span class="marca">char / String</span></td><td>Última tecla pressionada no teclado</td></tr>
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

