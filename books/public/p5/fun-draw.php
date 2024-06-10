<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>draw | O tecido das tecnologias criativas</title>
    <meta name="description" content="draw | O código P5, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="draw | O tecido das tecnologias criativas">
    <meta property="og:description" content="draw | O código P5, capítulo do livro O tecido das tecnologias criativas">       

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<scri"+ "pt src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js'></sc" + "ript><scri" + "pt>" + "function setup() { createCanvas(148,148); background('#FFFFFF'); frameRate(20); stroke('#78008A'); strokeWeight(2); fill('#78008A'); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="draw()" class="indice">draw()</a>
<h1 id='titulocapitulo'>draw()</h1>

  <p>A função <code>draw()</code> é parte, junto com a função <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a> e <a href="javascript:carrega('fun-windowResized.php');"><code>windowResized()</code></a>, das três funções auto-executadas do <span class="marca">P5</span>, isto é, invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre elas é que <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado; <code>draw()</code> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><code>frameRate()</code></a>, e <a href="javascript:carrega('fun-windowResized.php');"><code>windowResized()</code></a> é invocada toda vez que as dimensões no navegador, ou contexto onde o <span class="marca">P5</span> está rodando, são modificadas.</p>

  <p>O papel da função <code>draw()</code> é, como seu próprio nome diz, desenhar na tela. Contudo, ela acaba desempenhando papel muito mais importante: ela é o próprio fio-condutor de toda a execução de um programa em <span class="marca">P5</span>. Conforme a função vai sendo continuamente executada pelo próprio contexto em que o programa está sendo executado, é <code>draw()</code> que vai acionando outras funções, e vai coordenando e tocando os processos do programa. De forma simples, <code>draw()</code> é o esqueleto central de todo progama desenvolvido em <span class="marca">P5</span>, pela própria arquitetura da linguagem de programação.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="javascript" data-acetheme="tomorrow">


function draw() {

  line(10,50,100,150);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>É importante lembrar que <code>draw()</code> não apaga o campo de desenho automaticamente a cada iteração. Cada desenho realizado em cada iteração é sobreposto ao anterior ou ao que já existia na tela. Para apagar o campo de desenho é necessário usar a função <a href="javascript:carrega('fun-background.php');"><code>background()</code></a> no início dos procedimentos operados por <code>draw()</code>, de forma que o campo seja continuamente apagado e refeito.</p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

<p><code>draw()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>draw()</code> não retorna nenhum valor.</p>


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

