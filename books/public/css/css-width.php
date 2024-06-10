<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Width | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Width | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Width | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Width | O código CSS, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

    Predata_editor_1 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="width" class="indice">width</a>
 <h1 id='titulocapitulo'>width</h1>

  <p>O atribuito <code>width</code> define o tamanho horizontal ocupado por uma tag na tela do navegador. Esta dimensão incorpora todos os elementos internos do <a href="boxmodel.php">box model</a>, incluíndo o atribuito <a href="css-padding.php"><code>padding</code></a> e o atributo <a href="css-border.php"><code>border</code></a>. Para que o atributo <code>width</code> possa ser aplicado, o atributo <a href="css-display.php"><code>display</code></a> precisa ser diferente de <code>inline</code>, caso contrário, a dimensão horizontal será sempre a menor possível.</a></p>

  <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 100%; text-align: center; border-bottom: 0 transparent none;">
    <br>
    <div style="width: calc(100% - 2px);"><code>margin</code></div>

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





  


  <p>Estes atributos são definidos através de <a href="css-margin.php"><code>margin</code></a>, <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a>, ou aspecto por aspecto como através dos atributos <a href="css-margin-right-style.php"><code>margin-tight-style</code></a> ou <a href="css-border-left-color.php"><code>border-left-color</code></a>, por exemplo.</p>
 

<p>A dimensão <code>width</code> deve sempre considerar que <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a> ocupam espaço na tag. <code>width</code> se aplica à tag em conjunto com os atributos que lhe são internos, e pode acabar especificando dimensões maiores do que de seu nó pai ao desconsiderar o <a href="boxmodel.php">box model</a></p>

<a name="Exemplo1" class="indice">Exemplo</a>
 <h3>Exemplo</h3>


  <div class="diagramahalf firstblock">
  <iframe id="View_editor_1"></iframe>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
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

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>A dimensão de uma tag é o seu atributo <code>width</code> somado às duas propriedades <a href="css-border.php"><code>border</code></a> (<a href="css-border-left-width.php"><code>border-left-width</code></a> + <a href="css-border-right-width.php"><code>border-right-width</code></a>), e também somada às duas propriedades <a href="css-padding.php"><code>padding</code></a> (<a href="css-padding-left.php"><code>padding-left</code></a> + <a href="css-padding-right.php"><code>padding-right</code></a>).</p>

<a name="O conteúdo tem prioridade sobre o dimensionamento" class="indice">Prioridade</a>
 <h2>O conteúdo tem prioridade sobre o dimensionamento</h2>

<p>Se o atributo <a href="css-overflow.php"><code>overflow</code></a>, ou mais especificamente o <a href="css-overflow-x.php"><code>overflow-x</code></a>, não forem definidos para <code>hidden</code> ou <code>scroll</code>, o conteúdo de uma tag forcará o seu redimensionamento para acomodá-lo. O conteúdo sempre tem prioridade sobre a dimensão da tag.</a>

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
    p {
         border-top: 1px dashed violet;
         border-left: 1px solid violet;
         border-right: 1px solid violet;
         width: 93px;
         padding: 0;
         padding-top: 5px;
         padding-bottom: 5px;
         padding-right: 5px;
         text-align: right;
         color: white;
    }
    div { 
         width: 88px;
         padding-left: 5px;
         padding-right: 5px;
         border: 1px solid violet;
         color: violet;
    }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;p&gt;100px&lt;/p&gt;
    &lt;div&gt;normal&lt;/div&gt;
    &lt;div&gt;ConteúdoForçandoOTamanhoDaTagPorSerMaiorQueAEspecificação&lt;/div&gt;
    &lt;div&gt;Conteúdo que pode ser quebrado não força o tamanho&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

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


    