<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>bezierVertex | O tecido das tecnologias criativas</title>
    <meta name="description" content="bezierVertex | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="bezierVertex | O tecido das tecnologias criativas">
    <meta property="og:description" content="bezierVertex | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="bezierVertex()" class="indice">bezierVertex()</a>
<h1 id='titulocapitulo'>bezierVertex()</h1>

  <p>A função <code>bezierVertex()</code> desenha uma curva à partir de um <a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a> anteriormente dado. Por se tratar de uma curva do tipo Bezier, ela é traçada pela tensão de seus pontos inicial e final através de dois vetores dados. A função <code>bezierVertex()</code> precisa ser utilizada entre as funções <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> e <a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a>, que especificam o desenho de um polígono ou forma. A configuração deste polígono ou superfície é realizada por funções assessórias, como <a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a>, <a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a> ou <a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a></p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  beginShape();
  vertex(20,20);
  bezierVertex(140,10,140,110,20,40);
  endShape(CLOSE);

  stroke(#cccccc);
  strokeWeight(1);
  line(20,20,140,10);
  line(20,40,140,110);
  strokeWeight(4);
  point(140,10);
  point(140,110);
  noStroke();

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>bezieVertex(<span class="marca">tX1</span>,<span class="marca">tY1</span><span class="optionalattr">,tZ1</span>,<span class="marca">tX2</span>,<span class="marca">tY2</span><span class="optionalattr">,tZ2</span>,<span class="marca">x</span></code>,<span class="marca">y</span><span class="optionalattr">,z</span>);</p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>

    <tr>
      <td><span class="marca">tX1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tY1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tZ1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tX2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto que tensiona o final da curva em relação a <span class="marca">x</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">tY2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto que tensiona o final da curva em relação a <span class="marca">y</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">tZ2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto que tensiona o final da curva em relação a <span class="marca">z</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">x</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto de término da curva
      </td>
    </tr>

    <tr>
      <td><span class="marca">y</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto de término da curva
      </td>
    </tr>

    <tr>
      <td><span class="marca">z</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto de término da curva
      </td>
    </tr>
    
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>bezierVertex()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a></td><td>Inicializa a especificação de um polígono ou superfície terminado com <a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a></td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-curveVertex.php');"><code>curveVertex()</code></a></td><td>Especifica uma curva até uma coordenada</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-endShape.php');"><code>endShape()</code></a></td><td>Finaliza a especificação de um polígono ou superfície iniciado com <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> e o desenha na tela</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-vertex.php');"><code>vertex()</code></a></td><td>Define um novo vertice para o polígono ou superfície a ser desenhado</td>
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

