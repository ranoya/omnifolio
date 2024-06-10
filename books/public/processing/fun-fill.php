<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>fill | O tecido das tecnologias criativas</title>
    <meta name="description" content="fill | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="fill | O tecido das tecnologias criativas">
    <meta property="og:description" content="fill | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="fill()" class="indice">fill()</a>
<h1 id='titulocapitulo'>fill()</h1>

  <p>A função <code>fill()</code> define uma cor de preenchimento para o desenho de formas bidimensionais (polígonos, shapes, elípses, etc.).</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  fill(#78008A);
  ellipse(50,50,50,50);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>fill(<span class="marca">c1</span><span class="optionalattr">,c2</span><span class="optionalattr">,c3</span><span class="optionalattr">,a</span>);</code><br><code>fill(<span class="marca">color</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>formato</th>
      <th>exemplo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>float</td><td>escala de cinza</td><td>0 - 255</td><td>valor que representa registro em escala de cinzas, sendo 0 o preto absoluto, e 255 o branco absoluto</td>
    </tr>
     <tr>
      <td><span class="marca">c1</span></td><td>int</td><td>registro de cor hexadecimal</td><td>#000000 - #FFFFFF</td><td>valor que representa registro de cor RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>float</td><td>canal vermelho em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal vermelho do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c2</span></td><td>float</td><td>canal verde em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal verde do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c3</span></td><td>float</td><td>canal azul em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal azul do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>int</td><td>frequência em sistema HSB</td><td>0 - 360</td><td>ângulo em graus do espectro de cor, sendo 0 e 360 a cor vermelha, 90 a cor verde, e 180 a cor azul</td>
    </tr>
    <tr>
      <td><span class="marca">c2</span></td><td>float</td><td>saturação em sistema HSB</td><td>0 - 255</td><td>valor que representa a saturação no sistema HSB, sendo 0 o absolutamente pálido, e 255 o super-saturado</td>
    </tr>
    <tr>
      <td><span class="marca">c3</span></td><td>float</td><td>brilho em sistema HSB</td><td>0 - 255</td><td>valor que representa o brilho no sistema HSB, sendo 0 o absolutamente escuro, e 255 o absolutamente claro</td>
    </tr>
    <tr>
      <td><span class="marca">a</span></td><td>float</td><td>transparência</td><td>0 - 255</td><td>valor que representa a transparência, sendo 0 o absolutamente transparente, e 255 o absolutamente opaco</td>
    </tr>
    <tr>
      <td><span class="marca">color</span></td><td>color</td><td>retorno de função</td><td>color c = <a href="javascript:carrega('fun-color.php');"><code>color(<span class="marca">255</span>,<span class="marca">255</span>,<span class="marca">0</span>);</code></a></td><td>variável que guarda um registro de cor definido através da função <a href="javascript:carrega('fun-color.php');"><code>color()</code></a></td>
    </tr>
    
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>fill()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p><code>fill()</code> recebe valores em formatos diferentes, e os resolve conforme são dados. Se apenas um valor <span class="marca">float</span> for especificado, ela interpretará que se trata de uma escala de cinzas; se um valor hexadecimal for especificado, ela interpretará que se trata de um registro RGB; se um valor do tipo <span class="marca">color</span> for especificado, ela usará este registro com as propriedades estabelecidas nele; se 2 valores forem especificados, ela interpretará que se trata de uma escala de cinzas com transparência; se 3 valores forem especificados, ela recorrerá ao que for definido por <a href="javascript:carrega('fun-colorMode.php');"><code>colorMode()</code></a> para interpretá-los; se um quarto valor for especificado, ela o interpretará como o canal alpha (transparência).</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-color.php');"><code>color()</code></a></td><td>Define propriedades de cor armazenadas em uma variável</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-colorMode.php');"><code>colorMode()</code></a></td><td>Define o sistema de cor utilizado (RGB ou HSB)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-noFill.php');"><code>noFill()</code></a></td><td>Define o preenchimento como vazio (nulo)</td>
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

