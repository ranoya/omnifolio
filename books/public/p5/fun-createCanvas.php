<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>createCanvas | O tecido das tecnologias criativas</title>
    <meta name="description" content="createCanvas | O código P5, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="createCanvas | O tecido das tecnologias criativas">
    <meta property="og:description" content="createCanvas | O código P5, capítulo do livro O tecido das tecnologias criativas">       

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<scri"+ "pt src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js'></sc" + "ript><scri" + "pt>" + "function setup() { createCanvas(148,148); background('#FFFFFF'); frameRate(20); stroke('#78008A'); strokeWeight(2); fill('#78008A'); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="createCanvas()" class="indice">createCanvas()</a>
<h1 id='titulocapitulo'>createCanvas()</h1>

  <p>A função <code>createCanvas()</code> define o tamanho (em pixels) do sketch e qual o sistema de renderização utilizado. Ela é utilizada, geralmente, dentro da função auto-invocada <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a>.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="javascript" data-acetheme="tomorrow">


function setup() {

  createCanvas(500,400);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>createCanvas(<span class="marca">w</span><span class="marca">,h</span><span class="optionalattr">,render</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>valor</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">w</span></td><td>número</td><td></td><td>Dimensão horizontal em pixels</td>
    </tr>
     <tr>
      <td><span class="marca">h</span></td><td>número</td><td></td><td>Dimensão vertical em pixels</td>
    </tr>
    <tr>
      <td><span class="marca">render</span></td><td>sigla</td><td><span class="marca">P2D</span><br><span class="marca">WEBGL</span></td><td>Tipo de Render Engine. Se não declarado, utilizará o P2D.</td>
    </tr>
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>createCanvas()</code> retorna ao canvas um objeto <code>p5.Renderer</code>, que é tratado pelo <span class="marca">P5</span> automaticamente, sem que o desenvolvedor precise se preocupar com isso.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p><code>createCanvas()</code> é utilizado sistematicamente com as variáveis de sistema <code>windowWidth</code> e <code>windowHeight</code>, que recebem respectivamente a dimensão do navegador no momento.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-resizeCanvas.php');"><code>resizeCanvas()</code></a></td><td>Redimensiona o canvas já criado</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-windowResized.php');"><code>windowResized()</code></a></td><td>Função auto-invocada quando há algum redimensionamento no navegador</td>
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

