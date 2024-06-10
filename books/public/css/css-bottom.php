<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>  
    <title>CSS: Bottom | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Bottom | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Bottom | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Bottom | O código CSS, capítulo do livro O tecido das tecnologias criativas">    
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
  <a name="bottom" class="indice">bottom</a>
<h1 id='titulocapitulo'>bottom</h1>

  <p>Através do atributo <code>bottom</code> é possível definir a posição vertical do elemento em relação a sua borda inferior. Se o atributo <a href="css-position.php"><code>position</code></a> for <code>fixed</code>, a posição será dada em relação à janela do navegador; se for <code>absolute</code>, em relação ao fim do documento; e se for <code>relative</code>, relativa ao seu elemento pai que possua também <a href="css-position.php"><code>position</code></a> <code>relative</code>.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
bottom: 100px;
</pre>

  <a name="Valores" class="indice">Valores</a>
<h2>Valores</h2>

  <p><code>bottom</code> recebe qualquer dimensão aceita pelo CSS, tais como <code>%</code>, <code>vh</code>, <code>vw</code>, <code>em</code>, <code>px</code>, ou mesmo <code>cm</code>.</p>
  
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
     div { 
         position: fixed;
         bottom: 100px;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;bloco 1&lt;/div&gt;
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
  <a href="css-display.php"><code>display</code></a>,
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


    