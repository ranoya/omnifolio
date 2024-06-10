<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Float | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Float | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Float | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Float | O código CSS, capítulo do livro O tecido das tecnologias criativas">    
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
  <a name="float" class="indice">float</a>
<h1 id='titulocapitulo'>float</h1>

  <p>O atributo <code>float</code> Define para qual direção (esquerda ou direita) os elementos do tipo <code>static</code> serão posicionados em relação um aos outros.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
float: left;
</pre>

<h2 style="width: 100%; clear: both;"></h2>

  <p>O atributo <code>float</code>, assim como seu atributo complementar <a href="css-clear.php"><code>clear</code></a>, só funcionam em elementos cujo atributo <a href="css-position.php"><code>position</code></a> esteja definido como <code>static</code>.</p>

  <a name="Valores para float" class="indice">Valores para float</a>
<h2>Valores para float</h2>

  <table>
  <tr>
    <th>Float</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>left</code></td>
    <td>Os elementos são direcionados sempre à esquerda, se posicionando ao lado direito do elemento anterior.</td>
  </tr>
   <tr>
    <td><code>right</code></td>
    <td>Os elementos são direcionados sempre à direita, se posicionando ao lado esquerdo do elemento anterior.</td>
  </tr>
  <tr>
    <td><code>none</code></td>
    <td>Condição <code>default</code>. Os elementos não serão direcionados; permanecerão exatamente onde forem colocados no código.</td>
  </tr>
</table>

<h2 style="width: 100%; clear: both;"></h2>

<p style="clear: both">É importante lembrar que os elementos do <a href="boxmodel.php">box model</a>, como <a href="css-margin.php"><code>margin</code></a> e <a href="css-padding.php"><code>padding</code></a> interferem sobre layout.</p>

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
     .bA {
        float: right;
        background-color: cyan;
        color: blue;
      }

     .bB {
        float: left;
        background-color: violet;
        color: blue;
      }

      .cont {
        float: left;
        width: 50%;
        border: 1px solid cyan;
        margin-right: 30px;
        height: 100px;
      }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div class=&quot;bA&quot;&gt;BA&lt;/div&gt;
    &lt;div class=&quot;bB&quot;&gt;BB&lt;/div&gt;
    &lt;div class=&quot;cont&quot;&gt;
      &lt;div class=&quot;bA&quot;&gt;BA int&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bB&quot;&gt;BB2&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


<p style="clear: both"><br></p>

<a name="Atributos associados" class="indice">Atributos associados</a>
<h2>Atributos associados</h2>
<p>Para controlar o posicionamento dos elementos HTML, utilizar também os atributos:
  
  <a href="css-border.php"><code>border</code></a>,
  <a href="css-margin.php"><code>margin</code></a>,
  <a href="css-padding.php"><code>padding</code></a>,
  <a href="css-clear.php"><code>clear</code></a>,
  <a href="css-float.php"><code>float</code></a>,
  <a href="css-display.php"><code>display</code></a>.
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


    