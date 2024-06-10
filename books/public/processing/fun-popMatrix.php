<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>popMatrix | O tecido das tecnologias criativas</title>
    <meta name="description" content="popMatrix | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="popMatrix | O tecido das tecnologias criativas">
    <meta property="og:description" content="popMatrix | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

  Predata_editor_2 = Predata_editor_1;

  Postdata_editor_2 = Postdata_editor_1;

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="popMatrix()" class="indice">popMatrix()</a>
<h1 id='titulocapitulo'>popMatrix()</h1>

  <p>A função <code>popMatrix()</code> finaliza operações na matriz de transformação para serem aplicadas no sketch. Apesar dos conceitos de matriz de transformação, e de pilha, serem complicadas de serem explicadas em poucas linhas, seu uso é bastante simples: a função <code>popMatrix()</code> permite que transformações equivalentes às ferramentas de ampliar/reduzir, girar ou mover das aplicações gráficas como <span class="marca">Adobe Photoshop</span> ou <span class="marca">Adobe Illustrator</span> sejam feitas sobre o desenho construído com código.</p>

  <p>Toda operação iniciada com <a href="javascript:carrega('fun-pushMatrix.php');"><code>pushMatrix()</code></a> precisa ser aplicada com a função <code>popMatrix()</code>, ou seja, assim que o desenho com alterações em sua escala, angulação ou posicionamento é construído, ele só será efetivamente desenhado quando as operações na matriz forem finalizadas com <code>popMatrix()</code>.</p>


  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

  line(50,0,150,0);
  pushMatrix();
  rotate(PI/4);
  line(50,0,150,0);
  popMatrix();

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>popMatrix();</code></p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>popMatrix()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p>Transformações de matrizes realizadas com <a href="javascript:carrega('fun-pushMatrix.php');"><code>pushMatrix()</code></a> e <code>popMatrix()</code> modificam a forma como o sistema cartesiano utilizado no desenho naquele momento será interpretado em relação à tela/sketch. Ao se aplicar uma rotação na matriz (o que tecnicamente é multiplicar a matriz gráfica por uma matriz rotação), o que estamos rotacionando é como o sistema de coordenadas será aplicado quando <a href="javascript:carrega('fun-popMatrix.php');"><code>popMatrix()</code></a> for invocada e as operações delinadas entre <code>pushMatrix()</code> e ela forem executadas. Estas alterações podem ser feitas recursivamente, ou seja, uma matriz alterada dentro de outra matriz alterada, e assim por diante.</p>


<a name="Matriz de transformação" class="indice">Matriz de transformação</a>
<h2>Matriz de transformação</h2>

<p>A matriz de transformação é uma matriz de cálculo que está sendo constantemente aplicada a tudo que se desenha na tela do computador, seja ela aplicada àpenas uma porção da tela, ou a sua totalidade. Quando aplicamos modificações nesta matriz, aquilo que é desenhado se transforma conforme as instruções dadas. As operações na matriz de transformação são feitas dentro da funções <a href="javascript:carrega('fun-pushMatrix.php');"><code>pushMatrix()</code></a> e popMatrix()</code>. No Processing, ela se comporta como um sistema cartesiano virtual, que desenhará no sketch do processing de maneira diferente de seu sistema cartesiano original, até que seja terminado por <code>popMatrix()</code>.</p>

<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


boolean toggleGrid = true;

void mouseDragged() {
  toggleGrid = false;
}

void mouseReleased() {
  toggleGrid = true;
}

function desenhaPlano() {
 if (toggleGrid == true) {
  for (int linha=1; linha < height; linha = linha + 20) {
    line (0,linha,width,linha);
  }
  for (int coluna=1; coluna < width; coluna = coluna + 20) {
    line(coluna,0,coluna,height);
  }
  textSize(16);
  text("(0,0)",5,16);
  text("(50,0)",55,16);
  text("(60,60)",65,76);
 }
 fill(#78008A);
 rect(20,20,20,20);
}

void draw() {
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);

  stroke(#999999);
  fill(#999999);
  strokeWeight(1);
  desenhaPlano()
  
  pushMatrix();

      rotate(atan2(mouseY,mouseX));
      translate(mouseX,0);
      scale(1.5);
      stroke(#f29610);
      fill(#f29610);
      strokeWeight(1);
      desenhaPlano();

  popMatrix();

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-pushMatrix.php');"><code>pushMatrix()</code></a></td><td>Inicia a construção de operações na nova matriz na pilha</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-scale.php');"><code>scale()</code></a></td><td>Amplia ou reduz a escala do desenho sendo construído</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-translate.php');"><code>translate()</code></a></td><td>Move (desloca) o desenho sendo construído no sistema de coordenadas</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotate.php');"><code>rotate()</code></a></td><td>Gira o desenho em relação ao sistema de coordenadas, considerando o ponto de origem do sistema (0,0) como pivô.</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateX.php');"><code>rotateX()</code></a></td><td>Gira o desenho tridimensionalmente sobre o eixo X (horizontal)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateY.php');"><code>rotateY()</code></a></td><td>Gira o desenho tridimensionalmente sobre o eixo Y (vertical)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateZ.php');"><code>rotateZ()</code></a></td><td>Gira o desenho tridimensionalmente sobre o eixo Z (normal)</td>
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

