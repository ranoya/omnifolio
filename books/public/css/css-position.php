<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Position | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Position | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Position | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Position | O código CSS, capítulo do livro O tecido das tecnologias criativas">       
    
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
  <a name="position" class="indice">position</a>
<h1 id='titulocapitulo'>position</h1>

  <p>Através do atributo <code>position</code> é possível estabelecer de que maneira o elemento HTML será posicionado na tela.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
position: absolute;
</pre>

  <a name="Valores para position" class="indice">Valores para position</a>
<h2>Valores para position</h2>

  <table>
  <tr>
    <th>Tipo</th>
    <th>Funcionamento</th>
  </tr>
  <tr>
    <td><code>static</code></td>
    <td>Condição <code>default</code>. Os elementos são posicionados um ao lado do outro conforme vão aparecendo no código.</td>
  </tr>
   <tr>
    <td><code>relative</code></td>
    <td>Os elementos são posicionados em referência a sua própria posição no código, e sobrepõe uns aos outros. O tipo <code>relative</code> é igual ao <code>static</code>, mas pode ser modificado pelas propriedades <a href="css-bottom.php"><code>bottom</code></a>,
  <a href="css-left.php"><code>left</code></a>,
  <a href="css-right.php"><code>right</code></a>,
  <a href="css-top.php"><code>top</code></a> e/ou 
  <a href="css-z-index.php"><code>z-index</code></a></td>
  </tr>
  <tr>
    <td><code>absolute</code></td>
    <td>Os elementos são posicionados usando como referência a posição do seu primeiro elemento pai não-static na estrutura do código, e sobrepõe uns aos outros. No tipo <code>absolute</code> é possível alterar a posição dos elementos dentro de um elemento de "contenção".</td>
  </tr>
  <tr>
    <td><code>fixed</code></td>
    <td>Os elementos são posicionados em referência ao canto superior esquerdo da tela, e sobrepõe uns aos outros.</td>
  </tr>
 
</table>

<p style="clear: both"><br></p>

<a name="Exemplos" class="indice">Exemplos</a>
<h3>Exemplos</h3>

<a name="static" class="indice">static</a>
<h3><code>static</code></h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_2"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: static;
         background-color: violet;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;bloco 1&lt;/span&gt;
    &lt;span&gt;bloco 2&lt;/span&gt;
    &lt;span&gt;bloco 3&lt;/span&gt;
    &lt;span&gt;bloco 4&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>



<p style="clear: both"><br></p>

<a name="absolute" class="indice">absolute</a>
<h3><code>absolute</code></h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_3"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: absolute;
         background-color: violet;
         top: 10px;
         left: 10px
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;01
      &lt;span&gt;02
        &lt;span&gt;03&lt;/span&gt;
      &lt;/span&gt;
    &lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>






<p style="clear: both"><br></p>

<a name="fixed" class="indice">fixed</a>
<h3><code>fixed</code></h3>


  <div class="diagramahalf firstblock">
  <iframe id="View_editor_4"></iframe>
  </div>



  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: fixed;
         background-color: violet;
     }
     .b1 {
         left: 20px;
         top: 80px;
     }
     .b2 {
         left: 100px;
         top: 10px;
     }
     .b3 {
         right: 10px;
         bottom: 10px;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span class=&quot;b1&quot;&gt;B1&lt;/span&gt;
    &lt;span class=&quot;b2&quot;&gt;B2&lt;/span&gt;
    &lt;span class=&quot;b3&quot;&gt;B3&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


<p style="clear: both"><br></p>

<a name="relative" class="indice">relative</a>
<h3><code>relative</code></h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_5"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_5' id='editor_5'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: relative;
         background-color: violet;
     }
     .b2 {
         left: 100px;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;B1&lt;/span&gt;
    &lt;span class=&quot;b2&quot;&gt;B2&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>



<p style="clear: both"><br></p>

<p style="clear: both">Ao posicionar elementos ao longo da tela, é necessário considerar tanto que outras características, como o próprio <a href="boxmodel.php">box model</a>, também interferem sobre o layout.</p>

<a name="Atributos associados" class="indice">Atributos associados</a>
<h2>Atributos associados</h2>
<p>Para controlar o posicionamento dos elementos HTML, utilizar também os atributos:
  
  <a href="css-clear.php"><code>clear</code></a>,
  <a href="css-float.php"><code>float</code></a>,
  <a href="css-display.php"><code>display</code></a>,
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


    