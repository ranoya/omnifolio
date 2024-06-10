<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>colorMode | O tecido das tecnologias criativas</title>
    <meta name="description" content="colorMode | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="colorMode | O tecido das tecnologias criativas">
    <meta property="og:description" content="colorMode | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="colorMode()" class="indice">colorMode()</a>
<h1 id='titulocapitulo'>colorMode()</h1>

  <p>A função <code>colorMode()</code> define qual o formato dos resitros de cor e suas dimensões, para instruir funções que recebem registros de cores em como devem desenhar algo no sketch. É através da função <code>colorMode()</code> que alteramos o sistema de cor entre <span class="marca">RGB</span> ou <span class="marca">HSB</span>, ou redefinimos quais os limites numéricos para representar as cores em cada um dos canais destes sistemas.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  colorMode(RGB,1000,1000,1000);
  stroke(800,800,800);
  line(10,10,140,140);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>colorMode(<span class="marca">s</span><span class="optionalattr">,max1</span><span class="optionalattr">,max2</span><span class="optionalattr">,max2</span><span class="optionalattr">,maxA</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">s</span></td><td>const<br><span class="marca">RGB</span><br><span class="marca">HSB</span></td><td>Sistema utilizado para representação das cores<br>RGB - Vermelho, Verde e Azaul<br>HSB - Espectro, Saturação e Brilho</td>
    </tr>
    <tr>
      <td><span class="marca">max1</span></td><td>float</td><td>valor máximo utilizado para representação das cores em todos os canais (se for definido apenas <span class="marca">max1</span>), ou para o primeiro canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">max2</span></td><td>float</td><td>valor máximo utilizado para representação das cores no segundo canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">max3</span></td><td>float</td><td>valor máximo utilizado para representação das cores no terceiro canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">maxA</span></td><td>float</td><td>valor máximo utilizado para representação da opacidade no desenho, sendo <span class="marca">0</span> como totalmente transparente, e <span class="marca">maxA</span> como totalmente opaco</td>
    </tr>           
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>colorMode()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a></td><td>Define a cor de preenchimento para polígonos e superfícies</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a></td><td>Define a cor para contornos e linhas</td>
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

