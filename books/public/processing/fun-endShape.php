<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>endShape | O tecido das tecnologias criativas</title>
    <meta name="description" content="endShape | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="endShape | O tecido das tecnologias criativas">
    <meta property="og:description" content="endShape | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="endShape()" class="indice">endShape()</a>
<h1 id='titulocapitulo'>endShape()</h1>

  <p>A função <code>endShape()</code> marca o final da construção de um polígono ou superfície, e o desenha na tela. Tudo aquilo que for especificando entre a função <a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a> e ela, será desenhado na tela. A configuração deste polígono ou superfície é realizada por funções assessórias, como <a href="javascript:carrega('fun-stroke.php');"><code>stroke()</code></a>, <a href="javascript:carrega('fun-strokeWeight.php');"><code>strokeWeight()</code></a> ou <a href="javascript:carrega('fun-fill.php');"><code>fill()</code></a></p>

  <a name="Uso" class="indice">Uso</a>
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
  endShape(CLOSE);

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>endShape(<span class="optionalattr">modo</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>valores</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">modo</span></td><td>const</td><td>
        <span class="marca">CLOSE</span><br>
      </td><td>especifica se o polígono ou superfície deverá ser fechada ou não</td>
    </tr>
    
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>endShape()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p>É possível especificar curvas na superfície desenhada com as funções <a href="javascript:carrega('fun-bezierVertex.php');"><code>bezierVertex()</code></a> e <a href="javascript:carrega('fun-curveVertex.php');"><code>curveVertex()</code></a></p>

  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-beginShape.php');"><code>beginShape()</code></a></td><td>Inicía a especificação de um polígono ou superfície</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-bezierVertex.php');"><code>bezierVertex()</code></a></td><td>Especifica uma curva Bezier com dois pontos de controle para sua tangência</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-curveVertex.php');"><code>curveVertex()</code></a></td><td>Especifica uma curva até uma coordenada</td>
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

