<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Margin | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Margin | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Margin | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Margin | O código CSS, capítulo do livro O tecido das tecnologias criativas">    

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
  <a name="margin-bottom" class="indice">margin-bottom</a>
 <h1 id='titulocapitulo'>margin-bottom</h1>

  <p>O atributo <code>margin-bottom</code> define as dimensões da margem inferior (distância do elemento para o elemento conseguinte), conforme a estrutura de <a href="boxmodel.php">box model</a> que compõe cada elemento HTML na tela do navegador.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
margin-bottom: 20px;
</pre>

  <h2 style="width: 100%; clear: both;"></h2>

  <p>O atributo recebe apenas uma informação de dimensionamento em qualquer <a href="unidadescss.php">tipo de medida</a> aceita pelo CSS ou definida através de uma <a href="funcoescss.php"><code>função</code></a>.</p>

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
         margin-bottom: 50px;
         border: 2px solid violet;
         clear: both;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;bloco 1&lt;/div&gt;
    &lt;div&gt;bloco 2&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


<a name="Atributos associados" class="indice">Atributos associados</a>
<h2 style="width: 100%; clear: both; height: 15px;"></h2>
 <h2>Atributos associados</h2>
<p>Para controlar os demais espaçamentos dos elementos HTML, utilizar os atributos:
  <a href="css-margin.php"><code>margin</code></a>,
  <a href="css-margin-left.php"><code>margin-left</code></a>,
  <a href="css-margin-right.php"><code>margin-right</code></a>,
  <a href="css-margin-top.php"><code>margin-top</code></a>,
  <a href="css-padding.php"><code>padding</code></a>,
  <a href="css-padding-bottom.php"><code>padding-bottom</code></a>,
  <a href="css-padding-left.php"><code>padding-left</code></a>,
  <a href="css-padding-right.php"><code>padding-right</code></a>,
  <a href="css-padding-top.php"><code>padding-top</code></a>.
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


    