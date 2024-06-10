<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>windoResized | O tecido das tecnologias criativas</title>
    <meta name="description" content="windoResized | O código P5, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="windoResized | O tecido das tecnologias criativas">
    <meta property="og:description" content="windoResized | O código P5, capítulo do livro O tecido das tecnologias criativas">       

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<scri"+ "pt src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js'></sc" + "ript><scri" + "pt>" + "function setup() { createCanvas(148,148); background('#FFFFFF'); frameRate(20); stroke('#78008A'); strokeWeight(2); fill('#78008A'); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="windoResized()" class="indice">windoResized()</a>
<h1 id='titulocapitulo'>windoResized()</h1>

  <p>A função <code>windoResized()</code> é parte, junto com a função <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> e <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a>, das três funções auto-executadas do <span class="marca">P5</span>, isto é, invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre elas é que <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado; <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><code>frameRate()</code></a>, e <code>windowResized()</code> é invocada toda vez que as dimensões no navegador, ou contexto onde o <span class="marca">P5</span> está rodando, são modificadas.</p>

  <p>O papel da função <code>windowResized()</code> é atualizar o contexto onde o código será computado quando há alguma modificação nas dimensões deste contexto, isto é, modificar valores de variáveis, atualizar registros iniciais como modalidade de definição das cores, espessura de linhas ou cores de preenchimento.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="javascript" data-acetheme="tomorrow">


function windowResized() {
  tamanhoBase = windowWidth;
  background("#FFFFFF");
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>windowResized(<span class="optionalattr">evento</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

<p><code>windowResized()</code> pode receber um <code>objeto</code> de evento como parâmetro, como nos <code>eventListener</code> de Javascript, para que sejam registradas as informações disparadas no navegador pelo evento de mudança de suas dimenões.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>windowResized()</code> não retorna nenhum valor.</p>


  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-resizeCanvas.php');"><code>resizeCanvas()</code></a></td><td>Redefine as dimensões do elemento canvas e atualiza as variáveis de sistema <code>width</code> e <code>height</code>.</td>
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

