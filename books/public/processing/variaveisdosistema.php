<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Variáveis do Sistema | O tecido das tecnologias criativas</title>
    <meta name="description" content="Variáveis do Sistema | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Variáveis do Sistema | O tecido das tecnologias criativas">
    <meta property="og:description" content="Variáveis do Sistema | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Variáveis de sistema" class="indice">Variáveis de sistema</a>
<h1 id='titulocapitulo'>Variáveis de sistema</h1>

  <p>Variáveis de sistema são variáveis contendo informações que são fornecidas e atualizadas pelo próprio contexto do <span class="marca">Processing</span>.</p>

  <p>Uma variável de sistema importante é, por exemplo, <code>width</code>, que recebe a dimensão horizontal do programa.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  // clique no sketch e aperte alguma tecla

  background(#eeeeee);
  textSize(32);
  text(key, 70,80);

}
</pre>
</div>



<a name="Variáveis de sistema importantes" class="indice">Tabela de variáveis</a>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<h2>Variáveis de sistema importantes</h2>
<table style="width: 100%;">
<tr><th>variável</th><th>tipo</th><th style="text-align: left;">descrição</th></tr>
<tr><td><code>width</code></td><td><span class="marca"><code>int</code></span></td><td>Valor atual da dimensão horizontal do sketch/programa</td></tr>
<tr><td><code>height</code></td><td><span class="marca"><code>int</code></span></td><td>Valor atual da dimensão vertical do sketch/programa</td></tr>
<tr><td><code>mouseX</code></td><td><span class="marca"><code>int</code></span></td><td>Valor atual da coordenada horizontal do mouse</td></tr>
<tr><td><code>mouseY</code></td><td><span class="marca"><code>int</code></span></td><td>Valor atual da coordenada vertical do mouse</td></tr>
<tr><td><code>pmouseX</code></td><td><span class="marca"><code>int</code></span></td><td>Valor anterior da coordenada horizontal do mouse</td></tr>
<tr><td><code>mouseX</code></td><td><span class="marca"><code>int</code></span></td><td>Valor anterior da coordenada vertical do mouse</td></tr>
<tr><td><code>key</code></td><td><span class="marca"><code>char / String</code></span></td><td>Última tecla pressionada no teclado</td></tr>
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


    