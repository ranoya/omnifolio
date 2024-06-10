<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Border | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Border | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Border | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Border | O código CSS, capítulo do livro O tecido das tecnologias criativas">    

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
  <a name="border-color" class="indice">border-color</a>
<h1 id='titulocapitulo'>border-color</h1>

  <p>O atributo <code>border-color</code> atribui cores para até 4 bordas do <a href="boxmodel.php">box model</a>.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
border-color: blue green coral white;
</pre>

<h2 style="width: 100%; clear: both;"></h2>

  <p>Os valores, quando atribuídos em um grupo de 4, definem cores na seguinte ordem: topo (top), direita (right), baixo (bottom) e esquerda (left); quando atribuidos em um grupo de 2, definem cores de topo (top) e baixo (top) no primeiro valor, esquerda (left) e direita (right) no segundo valor; quando atribuído apenas um único valor, as quatro bordas o receberão igualmente.</p>


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
         border-width: 5px;
         border-style: solid;
         border-color: red green grey cyan;
         color: violet;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;borda dupla&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<a name="Atributos associados" class="indice">Atributos associados</a>

<h2 style="width: 100%; clear: both; margin-top: 15px;"></h2>

<h2>Atributos associados</h2>
<p>Para controlar cada aspecto da borda individualmente deve-se utilizar os atributos
  <a href="css-border-bottom-color.php"><code>border-bottom-color</code></a>,
  <a href="css-border-bottom-style.php"><code>border-bottom-style</code></a>,
  <a href="css-border-bottom-width.php"><code>border-bottom-width</code></a>,
  <a href="css-border-left-color.php"><code>border-left-color</code></a>,
  <a href="css-border-left-style.php"><code>border-left-style</code></a>,
  <a href="css-border-left-width.php"><code>border-left-width</code></a>,
  <a href="css-border-right-color.php"><code>border-right-color</code></a>,
  <a href="css-border-right-style.php"><code>border-style-style</code></a>,
  <a href="css-border-right-width.php"><code>border-right-width</code></a>,
  <a href="css-border-top-color.php"><code>border-top-color</code></a>,
  <a href="css-border-top-style.php"><code>border-top-style</code></a>,
  <a href="css-border-top-width.php"><code>border-top-width</code></a>, os shortcuts 
  <a href="css-border-bottom.php"><code>border-bottom</code></a>,
  <a href="css-border-left.php"><code>border-left</code></a>,
  <a href="css-border-right.php"><code>border-right</code></a>,
  <a href="css-border-top.php"><code>border-top</code></a>,
  ou mesmo determinar especificamente cada uma das características para cada uma das bordas pelos atributos
  <a href="css-border-color.php"><code>border-color</code></a>,
  <a href="css-border-style.php"><code>border-style</code></a>,
  <a href="css-border-width.php"><code>border-width</code></a>.</p>

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


    