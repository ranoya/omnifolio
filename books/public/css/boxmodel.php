<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Box Model | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Box Model | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Box Model | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Box Model | O código CSS, capítulo do livro O tecido das tecnologias criativas">

</head>
<body>

  <script>

    Predata_editor_3 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="Box Model" class="indice">Box Model</a>
<h1 id='titulocapitulo'>Box Model</h1>

  <p>Toda tag html, seja ela do tipo inline/conteúdo, ou do tipo block/bloco, está envolta em um grupo de camadas conhecida como <strong>Box Model</strong>. Entre seu conteúdo e os limites do espaço que ela ocupa na tela, temos o atributo <a href="css-padding.php"><code>padding</code></a>, entre o final do <a href="css-padding.php"><code>padding</code></a> (espaçamento interno) e a área externa à tag, temos o atributo <a href="css-border.php"><code>border</code></a>, e entre a tag no espaço externo e outras tags, temos o atributo <a href="css-margin.php"><code>margin</code></a>. O dimensionamento destes elementos é essencial um controle preciso do layout no documento web.</p>

  <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 100%; text-align: center;">
    <br><code>margin</code><br><br>
    
    <div style="display: block; background-color: var(--text-color, white); color: var(--bg-color, #8487BE); width: 80%; text-align: center; margin: auto;">
        <br><code>border</code><br><br>
      
      <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); width: 80%; text-align: center; margin: auto;">
         <br><code>padding</code><br><br>
        

            <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 80%; text-align: center; margin: auto;">

                <p style="text-align: center;">conteúdo</p>
          
        </div>

        <br><br><br>


      </div>

      <br><br><br>


    </div>

    <br><br><br>

  </div>

  <h2></h2>

  <p>Estes atributos são definidos através de <a href="css-margin.php"><code>margin</code></a>, <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a>, ou aspecto por aspecto como através dos atributos específicos <a href="css-margin-bottom-style.php"><code>margin-bottom-style</code></a> ou <a href="css-border-left-color.php"><code>border-left-color</code></a>.</p>
 
  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf  firstblock">
  <iframe id="View_editor_1"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { color: violet; }
     span { 
          border: 3px dotted cyan;
          padding: 5px 10px 2px 20px; 
          margin: 30px;
      }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    um texto para completar o espa&ccedil;o ao longo do de baixo&lt;br&gt;
    texto com um &lt;span&gt;box model&lt;/span&gt; diferente no meio&lt;br&gt;
    outro texto para completar o espa&ccedil;o
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<hr style="border: 0; width: 100%; clear: both;"></hr>

<a name="CSS Reset" class="indice">CSS Reset</a>

<h2>CSS Reset</h2>

<p>Como cada navegador vem com atrbiutos definidos originalmente diferentes uns dos outros para cada tag, aplica-se normalmente uma técnica conhecida como <strong>CSS Reset</strong>, zerando todos os atributos de <a href="css-margin.php"><code>margin</code></a>, <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a> (dentre outros atributos também) para que sejam redefinidos pontualmente. Esta é uma prática recomendada para todo código CSS para que o resultado visual seja consistente em qualquer navegador web.</p>

<a name="Uso" class="indice">Uso</a>
<h3>Uso</h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_2"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { 
         padding: 0;
         margin: 0;
         border: 0;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    um texto para completar o espa&ccedil;o ao longo do de baixo&lt;br&gt;
    texto com um &lt;span&gt;box model&lt;/span&gt; diferente no meio&lt;br&gt;
    outro texto para completar o espa&ccedil;o
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<hr style="border: 0; width: 100%; clear: both;"></hr>


<a name="Dimensões" class="indice">Dimensões</a>
<h2>Dimensões</h2>

<p>As dimensões <a href="css-width.php"><code>width</code></a> e <a href="css-height.php"><code>height</code></a> devem sempre considerar que <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a> ocupam espaço na tag. Estas definições de dimensionamento se aplicam à tag em conjunto com os atributos que lhe são internos, e podem acabar especificando dimensões maiores do que de seu nó pai ao desconsiderarem o <strong>box model</strong>.</p>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>


  <div class="diagramahalf firstblock">
  <iframe id="View_editor_3"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
         text-align: right;
         color: violet;
         width: 100%;
         padding: 30px;
         border: 5px solid cyan;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;9 8 7 6 5 4 3 2 1&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


<hr style="border: 0; width: 100%; clear: both; margin-bottom: 10px;"></hr>


<p>A dimensão de uma tag é a sua propriedade <a href="css-width.php"><code>width</code></a> ou <a href="css-height.php"><code>height</code></a> somadas às duas propriedades <a href="css-border.php"><code>border</code></a> (<a href="css-border-left-width.php"><code>border-left-width</code></a> + <a href="css-border-right-width.php"><code>border-right-width</code></a> no caso de <a href="css-width.php"><code>width</code></a>, e <a href="css-border-top-width.php"><code>border-top-width</code></a> + <a href="css-border-bottom-width.php"><code>border-bottom-width</code></a> no caso de <a href="css-height.php"><code>height</code></a>), e também somada às duas propriedades <a href="css-padding.php"><code>padding</code></a> (<a href="css-padding-left.php"><code>padding-left</code></a> + <a href="css-padding-right.php"><code>padding-right</code></a> no caso de <a href="css-width.php"><code>width</code></a>, e <a href="css-padding-top.php"><code>padding-top</code></a> + <a href="css-padding-bottom.php"><code>padding-bottom</code></a> no caso de <a href="css-height.php"><code>height</code></a>).</p>

<div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color:, white); border: 1px dashed var(--text-color, white); width: 100%; text-align: center; border-bottom: 0 transparent none;">
    <br>
    <div style="color: var(--text-color, white); background-color: var(--bg-color, #8487BE); width: calc(51% - 2px); text-align: right; margin: auto;"><code style="color: var(--conteudo-highlight, #000081);">width</code></div>

    <div style="color: var(--text-color, white); background-color: var(--bg-color, #8487BE); width: calc(51% - 2px); text-align: right; margin: auto; border-right: solid 1px var(--conteudo-highlight, #000081); border-left: solid 1px var(--conteudo-highlight, #000081); border-top: dashed 1px var(--conteudo-highlight, #000081); margin-bottom: 5px; border-bottom: 0 transparent none;"><br></div>
    

    <div style="display: block; background-color: var(--text-color, white); color: var(--bg-color, #8487BE); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">
        <br><code>border</code><br><br>
      
      <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">
         <br><code>padding</code><br><br>
        

            <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">

                <p style="text-align: center;">conteúdo</p>
          
        </div>




      </div>




    </div>



  </div>

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


    