<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Height | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Height | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Height | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Height | O código CSS, capítulo do livro O tecido das tecnologias criativas">    

  </head>
<body>

  <script>

    Predata_editor_1 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="height" class="indice">height</a>
<h1 id='titulocapitulo'>height</h1>

  <p>O atribuito <code>height</code> define o tamanho vertical ocupado por uma tag na tela do navegador. Esta dimensão incorpora todos os elementos internos do <a href="boxmodel.php">box model</a>, incluíndo o atribuito <a href="css-padding.php"><code>padding</code></a> e o atributo <a href="css-border.php"><code>border</code></a>. Para que o atributo <code>height</code> possa ser aplicado, o atributo <a href="css-display.php"><code>display</code></a> precisa ser diferente de <code>inline</code>, caso contrário, a dimensão vertical será sempre a menor possível. O dimensionamento de <code>height</code> também não funciona quando seu valor é dado em porcertagem, e o elemento a recebê-lo está dentro de uma tag que tenha seu atributo <a href="css-position.php"><code>position</code></a> definido como <code>static</code> (geralmente a condição original de todas as tags em todos os navegadores). O dimensionamento vertical com porcentagens só funciona adequadamente quando se opera com o atributo <a href="css-position.php"><code>position</code></a> definido como <code>fixed</code>, pois a interpretação dos valores quando  <a href="css-position.php"><code>position</code></a> é definido como <code>relative</code> ou <code>absolute</code> é muito diferente de navegador para navegador.</p>

  <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 100%; text-align: center;">
    <br>

    <div style="width: calc(90% - 120px); margin-left: 130px;"><code>margin</code></div><br>
    
    <div style="display: block; float: left; color: var(--text-color, white); background-color: var(--bg-color, #8487BE); width: 100px; text-align: right; padding-top: 130px;"><code style="color: var(--conteudo-highlight, #000081); padding-right: 10px;">height</code><br><br><br><br><br><br><br></div>

    <div style="display: block; float: left; color: var(--text-color, white); background-color: var(--bg-color, #8487BE); width: 10px; text-align: right; margin: auto; border-top: solid 1px var(--conteudo-highlight, #000081); border-left: dashed 1px var(--conteudo-highlight, #000081); border-bottom: solid 1px var(--conteudo-highlight, #000081); margin-bottom: 5px; height: 55px; margin-top: 133px;"></div>
    

    <div style="display: block; float: left; background-color: var(--text-color, white); color: var(--bg-color, #8487BE); width: calc(90% - 122px); text-align: center; margin-left: 20px;">
        <br><code>border</code><br><br>
      
      <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); width: 80%; text-align: center; margin: auto;">
         <br><code>padding</code><br><br>
        

            <div style="display: block; background-color: var(--bg-color, #8487BE); color: var(--text-color, white); border: 1px dashed var(--text-color, white); width: 80%; text-align: center; margin: auto;">

                <p style="text-align: center;">conteúdo</p>
          
            </div><br><br><br>
      </div><br><br><br>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


  <h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <p>Estes atributos são definidos através de <a href="css-margin.php"><code>margin</code></a>, <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a>, ou aspecto por aspecto como através dos atributos <a href="css-margin-bottom-style.php"><code>margin-bottom-style</code></a> ou <a href="css-border-top-color.php"><code>border-top-color</code></a>, por exemplo.</p>
 

<p>A dimensão <code>height</code> deve sempre considerar que <a href="css-border.php"><code>border</code></a> e <a href="css-padding.php"><code>padding</code></a> ocupam espaço na tag. <code>height</code> se aplica à tag em conjunto com os atributos que lhe são internos, e pode acabar especificando dimensões maiores do que de seu nó pai ao desconsiderar o <a href="boxmodel.php">box model</a></p>

<a name="Exemplo" class="indice">Exemplo</a>
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

<p>A dimensão de uma tag é o seu atributo <code>height</code> somado às duas propriedades <a href="css-border.php"><code>border</code></a> (<a href="css-border-top-width.php"><code>border-top-width</code></a> + <a href="css-border-bottom-width.php"><code>border-bottom-width</code></a>), e também somada às duas propriedades <a href="css-padding.php"><code>padding</code></a> (<a href="css-padding-top.php"><code>padding-top</code></a> + <a href="css-padding-bottom.php"><code>padding-bottom</code></a>).</p>

<a name="O conteúdo tem prioridade sobre o dimensionamento" class="indice">Prioridade</a>
<h2>O conteúdo tem prioridade sobre o dimensionamento</h2>

<p>Se o atributo <a href="css-overflow.php"><code>overflow</code></a>, ou mais especificamente o <a href="css-overflow-y.php"><code>overflow-y</code></a>, não forem definidos para <code>hidden</code> ou <code>scroll</code>, o conteúdo de uma tag forcará o seu redimensionamento para acomodá-lo. O conteúdo sempre tem prioridade sobre a dimensão da tag.</a>

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
         margin: 0;
         border-top: 1px solid violet;
         border-left: 1px dashed violet;
         border-bottom: 1px solid violet;
         height: 100px;
         padding: 0;
         text-align: left;
         color: white;
         float: left;
         width: 15px;
    }

    .palavra {

         margin: 0;
         padding: 0;
         color: white;
         text-align: right;
         padding-right: 5px;
         float: left;
         width: 60px;
         height: 100px;
  }

    div { 

         float: left;
         width: 100px;
         height: 100px;
         padding-left: 5px;
         padding-right: 5px;
         border: 1px solid violet;
         color: violet;
         margin-left: 15px;
    }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span class=&quot;palavra&quot;&gt;100px&lt;/span&gt;
    &lt;p&gt;&amp;nbsp;&lt;/p&gt;
    &lt;div&gt;Este conte&uacute;do&lt;br&gt;&eacute; bem maior do que&lt;br&gt;o espa&ccedil;o destinado&lt;br&gt;para ele,&lt;br&gt;e em fun&ccedil;&atilde;o disso,&lt;br&gt; seu height&lt;br&gt;n&atilde;o ser&aacute; respeitado&lt;br&gt;pelo navegador&lt;/div&gt;
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


    