<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>vertex | O tecido das tecnologias criativas</title>
    <meta name="description" content="vertex | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="vertex | O tecido das tecnologias criativas">
    <meta property="og:description" content="vertex | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="vertex" class="indice">vertex()</a>
  <h1 id='titulocapitulo'>vertex()</h1>

  <p>A função <code>vertex()</code> determina um ponto (vértice) de ligação dentro da definição de uma superfície ou polígono iniciado com a função <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> e finalizado com a função <a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a>.</p>

<a name="uso" class="indice">Uso</a>
  <h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  stroke(0);
  fill(200,30,200);

  beginShape();
  vertex(10,10);
  vertex(20,130);
  vertex(40,40);
  vertex(50,100);
  vertex(80,20);
  vertex(140,80);
  endShape();

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="sintaxe" class="indice">Sintaxe</a>
  <h2>Sintaxe</h2>

  <p><code>vertex(<span class="marca">x</span>,<span class="marca">y</span><span class="optionalattr">,z</span>);</code></p>

<a name="Entradas" class="indice">Entradas</a>
  <h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x</span></td>
      <td>float</td>
      <td>coordenada horizontal</td>
    </tr>
     <tr>
      <td><span class="marca">y</span></td>
      <td>float</td>
      <td>coordenada vertical</td>
    </tr>
     <tr>
      <td><span class="marca">z</span></td>
      <td>float</td>
      <td>altura em relação ao plano cartesiano bidimensional</td>
    </tr>
    
  </table>

<a name="Retorno" class="indice">Retorno</a>
  <h2>Retorno</h2>

  <p><code>vertex()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

<a name="Associadas" class="indice">Funções associadas</a>
  <h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a></td><td>Inicializa a especificação de um polígono ou superfície</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-bezierVertex.php');"><code>bezierVertex()</code></a></td><td>Especifica uma curva Bezier com dois pontos de controle para sua tangência</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-curveVertex.php');"><code>curveVertex()</code></a></td><td>Especifica uma curva até uma coordenada</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a></td><td>Finaliza a especificação de um polígono ou superfície iniciado com <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> e o desenha na tela</td>
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
