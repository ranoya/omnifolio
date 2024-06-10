<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>setup | O tecido das tecnologias criativas</title>
    <meta name="description" content="setup | O código P5, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="setup | O tecido das tecnologias criativas">
    <meta property="og:description" content="setup | O código P5, capítulo do livro O tecido das tecnologias criativas">       

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<scri"+ "pt src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js'></sc" + "ript><scri" + "pt>" + "function setup() { createCanvas(148,148); background('#FFFFFF'); frameRate(20); stroke('#78008A'); strokeWeight(2); fill('#78008A'); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="setup()" class="indice">setup()</a>
<h1 id='titulocapitulo'>setup()</h1>

  <p>A função <code>setup()</code> é parte, junto com a função <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> e <a href="javascript:carrega('fun-windowResized.php');"><code>windowResized()</code></a>, das três funções auto-executadas do <span class="marca">P5</span>, isto é, invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre elas é que <code>setup()</code> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado; <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><code>frameRate()</code></a>, e <a href="javascript:carrega('fun-windowResized.php');"><code>windowResized()</code></a> é invocada toda vez que as dimensões no navegador, ou contexto onde o <span class="marca">P5</span> está rodando, são modificadas.</p>

  <p>O papel da função <code>setup()</code> é configurar o contexto onde o código será computado, isto é, determinar suas dimensões com a função <a href="javascript:carrega('fun-createCanvas.php');"><code>createCanvas()</code></a>, inicializar valores para variáveis, definir registros iniciais como modalidade de definição das cores, espessura de linhas ou cores de preenchimento. Uma vez realizada esta atividade, a função <code>setup()</code> não tem qualquer outra utilidade, e nunca mais será invocada ao longo do código.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="javascript" data-acetheme="tomorrow">


function setup() {
  createCanvas(150,150);
  background("#78008A");
  frameRate(20);
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

<p><code>setup()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>setup()</code> não retorna nenhum valor.</p>


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

