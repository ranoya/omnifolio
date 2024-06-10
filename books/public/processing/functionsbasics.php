<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Funções | O tecido das tecnologias criativas</title>
    <meta name="description" content="Funções | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Funções | O tecido das tecnologias criativas">
    <meta property="og:description" content="Funções | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_2 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,130); background(#ffffff); frameRate(20); stroke(#78008A); strokeWeight(1); fill(#78008A); }";

  Postdata_editor_2 = "void draw() { fill(#cccccc); textSize(18); text('1:', 8, 20); text('2:', 8, 40); fill(#ac2ac6); text('a = ' + a, 33,20); text('b = ' + b, 33,40); noLoop(); }" + "</scri" + "pt>";

  Predata_editor_3 = Predata_editor_2;

  Postdata_editor_3 = "void draw() { fill(#cccccc); textSize(18); text('1:', 8, 20); fill(#ac2ac6); text('a = ' + a, 33,20); noLoop(); }" + "</scri" + "pt>";

  Predata_editor_4 = Predata_editor_2;
  Postdata_editor_4 = "</scri" + "pt>";

  Predata_editor_5 = Predata_editor_2;
  Postdata_editor_5 = Postdata_editor_4;

  Predata_editor_6 = Predata_editor_2;
  Postdata_editor_6 = Postdata_editor_4;

  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="funcoes" class="indice">Funções / Métodos</a>
<h1 id='titulocapitulo'>Funções / Métodos</h1>

  <p><span class="marca">Funções</span> (para quem aprende a programar com linguagens cuja base é a linguagem <span class="marca">C</span>) ou <span class="marca">Métodos</span> (para quem aprende a programar com linguagens cuja base é a linguagem <span class="marca">Java</span>) são um conjunto de instruções executadas em sequência, que utilizam dados variáveis informados através dos parâmetros da própria <span class="marca">função</span>, que podem ser criadas pelo programador para resolver tarefas específicas e recorrentes no código que está construíndo, ou recorrentes nos códigos que ele costuma construir.</p>

  <p>Instruções como <code>size()</code> ou <code>background()</code> são <span class="marca">funções</span> que já vêm definidas com o próprio Processing. Toda vez que você invoca a <span class="marca">função</span> <code>background(<span class="marca">128</span>)</code>, uma instrução <code>fill()</code> utiliza o parâmetro <span class="marca">128</span> para definir a cor de preenchimento de um retângulo que cobre a tela toda. Para ser mais preciso, o código da <span class="marca">função</span> <code>background()</code> é este abaixo:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void background(int c) { 
  
  fill(c);
  noStroke();
  rect(0,0,width,height);
}
</pre>

<h2 style="width: 100%; clear: both; border: 0; height: 15px;"></h2>

<p>Para evitar que seja necessário colocar todo este procedimento apenas para apagar a tela, coisa que acontece em praticamente todo código em Processing, e repetidamente toda vez que a <span class="marca">função</span> <code>draw()</code> é chamada em cada código, é mais conveniente criar uma <span class="marca">função</span> <code>background()</code> para realizar esta tarefa, e reutilizá-la em todos os códigos.</p>

<p>O intuito de se criar <span class="marca">funções</span> é o de dividir a solução de um problema em pequenas partes, de forma que cada uma delas possa se especializar naquilo que é responsável. Ao se fazer necessário corrigir ou aprimorar um conjunto de procedimentos que se repete várias vezes no código, basta fazer a correção/melhoria em um único lugar, que todos os pontos onde eles são aplicados já estarão resolvidos. A <span class="marca">função</span>, portanto, é uma ferramenta para facilitar a vida do programador. Além de facilitar a manutenção e o entendimento do código, ela também ajuda a racionalizar a forma como o programador lida com todos os programas que faz. Ao identificar problemas que aparecem sempre em seus códigos, ele pode criar uma <span class="marca">função</span> que trate a questão, e usar sempre a mesma <span class="marca">função</span> neles. Em casos mais sofisticados, é possível agrupar todas as <span class="marca">funções</span> criadas em um único conjunto que pode ser carregado externamente pelo Processing, de forma que ao modificar/aprimorar uma determinada <span class="marca">função</span> neste conjunto, todos os códigos já produzidos herdarão a solução alterada. A este recurso de carregar externamente <span class="marca">funções</span> auxiliares, criadas pelo próprio programador ou feitas e disponibilizadas por outros programadores, damos o nome de <span class="marca">bibliotecas</span> ou <span class="marca">frameworks</span>. Praticamente todas as linguagens de programação contam com recursos deste tipo.</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


float cmtopol(float v) {

  return v * 2.54;

}

float a = cmtopol(4.5);
float b = cmtopol(11.3);
</pre>
</div>

<div class="diagramahalf" style="height: 190px; border: 0 transparent none;" >
  <iframe id="View_editor_2" style="height: 190px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<p><span class="marca">Funções</span> não precisam, necessariamente, receber parâmetros. Mesmo uma função que retorna algum valor, não precisa receber algum parâmetro de entrada. A <span class="marca">função</span> à seguir, apenas retorna um valor <span class="marca">boolean true</span> ou <span class="marca">false</span> dependendo se a largura do canvas/sketch for maior que <span class="marca">600</span> pixels. <span class="marca">Funções</span> que não recebem parâmetros são declaradas utilizando os parêntesis "()" com nada dentro.</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">


boolean tamanhodatela() {
  if (width>600) {
    return true;
  } else {
    return false;     
  }
}

boolean a = tamanhodatela();
</pre>
</div>

<div class="diagramahalf secondsmallblock">
  <iframe id="View_editor_3" style="height: 190px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

<a name="aplicacoes" class="indice">Funções e suas aplicações gráficas</a>
<h3><span class="marca">Funções e suas aplicações gráficas</span></h3>

<p>O primeiro exemplo abaixo cria uma <span class="marca">função</span> para traçar linhas utilizando coordenadas polares, que adotam uma dimensão e um ângulo para determinar a reta a ser desenhada. A <span class="marca">função</span> <code>polarline()</code> recebe 4 parâmetros: os dois primeiros, <span class="marca">x</span> e <span class="marca">y</span>, são os pontos de origem da linha; o terceiro, <span class="marca">tamanho</span>, é a dimensão em pixels da reta; e o quarto, <span class="marca">angulo</span>, é o angulo em graus, lembrando que o sistema cartesiano adotado pela computação define que os valores no eixo <span class="marca">y</span> crescem de cima para baixo, e consequentemente, um angulo de 45&deg; vai do canto superior esquerdo para o canto inferior direito.</p>

<p>Experimente criar outras linhas utilizando a <span class="marca">função</span>, ou se aventure em alterá-la:</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">


void setup() { 
  size(150,150);
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

void polarline(int x, int y, int tamanho, int angulo) {
  float alfa = (angulo * PI)/180;
  line(x,y,x+(cos(alfa)*tamanho),y+(sin(alfa)*tamanho));
}
void draw() {
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  polarline(10,120,100,-60);
  polarline(140,10,100,90);
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>Como se trata de uma função do tipo <code>void</code>, <code>polarline()</code> não retorna nenhum valor, e pode ser invocada como uma instrução comum do tipo <code>polarline(<span class="marca">10</span>,<span class="marca">50</span>,<span class="marca">100</span>,<span class="marca">45</span>);</code>. O problema que ela se destina a resolver é apenas o de desenhar uma linha.</p>

<p>Uma <span class="marca">função</span> pode invocar outras <span class="marca">funções</span> internamente, sem qualquer problema. Se pegarmos a mesma tarefa de <code>polarline()</code> e quisermos separar a parte do código que transforma o ângulo dado, de <span class="marca">graus</span> para <span class="marca">radianos</span> (a computação utiliza a medida <span class="marca">radianos</span> para notação de ângulos, e não <span class="marca">graus</span>), podemos criar uma nova função que se especializa neste cálculo e pode servir tanto a <code>polarline()</code>, quanto a qualquer outra instrução que necessitar ângulos nesta métrica. <code>polarline()</code> fica responsável apenas pelo desenho da linha, e <code>radiano()</code> fica responável pela conversão dos valores. Veja o exemplo abaixo:</p>


<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">


  void setup() { 
  size(150,150);
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

float radiano(int angulo) {
  float r = (angulo * PI)/180;
  return r;
}
void polarline(int x, int y, int tamanho, int angulo) {
  line(x,y,x+(cos(radiano(angulo))*tamanho),y+(sin(radiano(angulo))*tamanho));
}
void draw() {
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  polarline(10,120,100,-60);
  polarline(140,10,100,90);
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p><code>radiano()</code> é uma <span class="marca">função</span> do tipo <span class="marca">float</span>, que retorna uma fração como resultado; ela só pode ser invocada quando associada a uma variável também do tipo <span class="marca">float</span>, como por exemplo <code>float a = radiano(<span class="marca">45</span>);</code>, ou entrando como parâmetro para outra função, como <code>cos(radiano(<span class="marca">45</span>));</code>, exatamente o caso do código acima onde é utilizada para alimentar o cálculo do seno e cosseno do ângulo dado.</p>

<p>Reaproveitando estas funções que temos disponíveis, já podemos construir inúmeros códigos diferentes, capazes de realizar diversas soluções gráficas:</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_6"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">


  void setup() { 
  size(150,150);
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

colorMode(HSB, 300);
int ang, cx, cy, cor = 0, d = 20;

float radiano(int angulo) {
  float r = (angulo * PI)/180;
  return r;
}

void polarline(int x, int y, int tamanho, int angulo) {
  line(x,y,x+(cos(radiano(angulo))*tamanho),y+(sin(radiano(angulo))*tamanho));
}

void draw() {
  stroke(240,cor,250);
  d = random(20)+20;
  cx = width/2 + (cos(radiano(ang))*d);
  cy = height/2 + (sin(radiano(ang))*d);
  polarline(cx,cy,50+random(20)-15,ang);
  ang = ang + 3;
  cor++;
  if (cor>300) { 
      cor = 0;
  }
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>No código acima, <code>radiano()</code> é utilizando tanto pela <span class="marca">função</span> <code>polarline()</code>, quanto em <code>draw()</code> para definir o ponto inicial da linha. Se toda vez que um ponto em <span class="marca">x</span> ou <span class="marca">y</span> precisasse ser calculado, fosse necessário realizar, caso a caso, o cálculo de conversão (<span class="marca">angulo</span> x <span class="marca">PI</span> / <span class="marca">180</span>), o código ficaria ainda mais ilegível do que ele já naturalmente é.</p>




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

