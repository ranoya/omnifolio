<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>line | O tecido das tecnologias criativas</title>
    <meta name="description" content="line | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="line | O tecido das tecnologias criativas">
    <meta property="og:description" content="line | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#ffffff); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="background" class="indice">line()</a>
  <h1 id='titulocapitulo'>line()</h1>

  <p>A função <code>line()</code> desenha uma linha de um ponto inicial à um ponto final. A configuração desta linha é realizada por funções assessórias, como <a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a> e <a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a></p>

  <a name="uso" class="indice">Uso</a>
  <h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  line(10,50,100,150);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="sintaxe" class="indice">Sintaxe</a>
  <h2>Sintaxe</h2>

  <p><code>line(<span class="marca">x1</span>,<span class="marca">y1</span><span class="optionalattr">,z1</span>,<span class="marca">x2</span>,<span class="marca">y2</span><span class="optionalattr">,z2</span>);</code></p>

  <a name="entrada" class="indice">Entradas</a>
  <h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x1</span></td><td>float</td><td>coordenada horizontal do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">y1</span></td><td>float</td><td>coordenada vertical do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">z1</span></td><td>float</td><td>coordenada ortogonal ao plano cartesiano (altura) do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">x2</span></td><td>float</td><td>coordenada horizontal do ponto final</td>
    </tr>
    <tr>
      <td><span class="marca">y2</span></td><td>float</td><td>coordenada vertical do ponto final</td>
    </tr>
    <tr>
      <td><span class="marca">z2</span></td><td>float</td><td>coordenada ortogonal ao plano cartesiano (altura) do ponto final</td>
    </tr>
  </table>

 <a name="retorno" class="indice">Retorno</a>
  <h2>Retorno</h2>

  <p><code>line()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

<a name="Observacoes" class="indice">Observações</a>
  <h2>Observações</h2>

  <p>Os valores <span class="marca">z1</span> e <span class="marca">z2</span> não precisam ser especificados. Ao encontrar apenas 4 valores de entrada, a função <code>line()</code> opera sobre o plano bidimensional.</p>

<a name="associadas" class="indice">Funções associadas</a>
  <h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a></td><td>Define a cor da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a></td><td>Define a espessura da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeCap.php');"><code>strokeCap()</code></a></td><td>Define como são resolvidos graficamente os limites iniciais e finais da linha</td>
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

