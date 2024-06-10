<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Display | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Display | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Display | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Display | O código CSS, capítulo do livro O tecido das tecnologias criativas">    
</head>
<body>

  <script>

    Predata_editor_1 = "";
    Predata_editor_2 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="display" class="indice">display</a>
<h1 id='titulocapitulo'>display</h1>

  <p>O atributo <code>display</code> define o comportamento do elemento em relação aos demais elementos do documento. Originalmente, o código HTML possuia dois tipos de elementos: <i>inline</i>, apresentados no navegador de forma contínua, como conteúdo; e <i>block</i>, apresentdos no navegador como blocos de separação e organização do conteúdo. Atualmente, os elementos podem ter suas tipologias alteradas por <code>display</code>, assim como há um conjunto de outras tipologias além de elementos <i>inline</i> ou <i>block</i>.</p>

  <p>De forma mais técnica, o atributo <code>display</code> define como o navegador fará o <i>render</i> do elemento na tela.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
display: none;
</pre>

  <a name="Valores" class="indice">Valores</a>
<h2>Valores</h2>

  <table>
    <tr><th>tipologia</th><th>resultado</th></tr>
    <tr><td><code>inline</code></td><td>apresenta o elemento como conteúdo corrido, inserido organicamente junto ao texto ou outros elementos, ocupado apenas sua própria dimensão na tela, sem que propriedades como <a href="css-width.php"><code>width</code></a> ou <a href="css-height.php"><code>height</code></a> provoquem qualquer efeito.</td></tr>
    <tr><td><code>block</code></td><td>apresenta o elemento como um bloco, inserido separadamente do conteúdo, e ocupado (até que se altere) 100% do espaço disponível na tela.</td></tr>
    <tr><td><code>none</code></td><td>não exibe o elemento na tela.</td></tr>
    <tr><td><code>inline-block</code></td><td>apresenta o elemento como conteúdo corrido, inserido organicamente junto ao texto ou outros elementos, mas permite que propriedades como <a href="css-width.php"><code>width</code></a> ou <a href="css-height.php"><code>height</code></a> o modifiquem como se fosse um tipo <code>block</code>.</td></tr>
    <tr><td><code>grid</code></td><td>apresenta o elemento como um conteiner de <code>grid</code>, tipologia disponível apenas no HTML5 e em alguns navegadores.</td></tr>
    <tr><td><code>flex</code></td><td>apresenta o elemento como um conteiner de <code>flex</code>, tipologia disponível apenas no HTML5 e em alguns navegadores.</td></tr>
  </table>
  
<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>


  <div class="diagramahalf firstblock">
  <iframe id="View_editor_2"></iframe>
  </div>


  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     a {
      border: 1px red solid;
      display: block;
    }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;#&quot;&gt;a &eacute;, normalmente, inline&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<h2 style="width: 100%; clear: both;"></h2>

<a name="Atributos associados" class="indice">Atributos associados</a>
<h2>Atributos associados</h2>
<p>Para controlar o posicionamento dos elementos HTML, utilizar também os atributos:
  
  <a href="css-clear.php"><code>clear</code></a>,
  <a href="css-float.php"><code>float</code></a>,
  <a href="css-position.php"><code>position</code></a>,
  <a href="css-bottom.php"><code>bottom</code></a>,
  <a href="css-left.php"><code>left</code></a>,
  <a href="css-right.php"><code>right</code></a>,
  <a href="css-top.php"><code>top</code></a>,
  <a href="css-z-index.php"><code>z-index</code></a>.
</p>


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


    