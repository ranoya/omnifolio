<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Loops | O tecido das tecnologias criativas</title>
    <meta name="description" content="Loops | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Loops | O tecido das tecnologias criativas">
    <meta property="og:description" content="Loops | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";

  Predata_editor_3 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Predata_editor_4 = Predata_editor_3;

  Postdata_editor_2 = "println('x = ' + x); println('a = ' + a);</scr" + "ipt>";
  Postdata_editor_3 = "</scr" + "ipt>";
  Postdata_editor_4 = Postdata_editor_3;
 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Loops" class="indice">Loops</a>
<h1 id='titulocapitulo'>Loops</h1>

  <p><span class="marca">Loops</span> são a definição de um bloco de instruções que são executadas repetidas vezes dentro de condições pré-estabelecidas. Eles são essenciais para todo tipo de programação porque toda a computação se origina na ideia de ações repetitivas que precisam ser executadas tantas vezes que se torne inviável para um ser humano realizá-las.</p>

  <p>Na grande maioria das linguagens de programação há duas instruções para definir <span class="marca">loops</span>: o <code>for</code> e o <code>while</code>. Há sutis diferenças entre as duas, e o <code>for</code> é geralmente mais usado do que o <code>while</code>. Ambas instruções exigem alguns parâmetros para poderem operar, que são, resumidamente, as condições para que o <span class="marca">loop</span> permaneça sendo executado. No caso do <code>for</code>, três parâmetros são necessários: uma variável de controle, a condição logica sobre esta variável de controle para que o <span class="marca">loop</span> continue sendo executado, e o que acontece com esta variável ao final de cada execução do <span class="marca">loop</span>; já o <code>while</code> recebe apenas um único parâmetro, que é a condição para que o <span class="marca">loop</span> continue sendo executado, sem atribuir uma variável de controle a ele, ou uma modificação sobre ela ao final da execução de cada <span class="marca">iteração</span> dele.</p>

  <p><span class="marca">Loops</span> também podem ser uma instrução perigosa na programação, pois se a condição dada nunca chegar ao fim, o programa pode travar a máquina computacional em uma tarefa infinita. É por conta disso que os <code>for</code> são mais utilizados do que os <code>while</code>, pois há mais chances de um <code>for</code> não constituir um <span class="marca">loop</span> sem fim.</p>

  <p>No exemplo abaixo, ambos os <span class="marca">loops</span> <strong>não</strong> podem ser executados, pois criariam um <span class="marca">loop</span> sem fim. Tente imaginar o que aconteceria com as respectivas variáveis estabelecidas como condições para que estes <span class="marca">loops</span> sejam executados:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


for (int i=0; i<10; i++) {
  i=0;
}

int k = 0;
int a = 5;

while(k<10) {
  a=k-3;
}
</pre>
<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

  <p>Para evitar este tipo de situação, os programadores acabam preferindo utilizar mais o <code>for</code> do que o <code>while</code> pois este último deixa a condição para execução do <span class="marca">loop</span> mais aberta, ainda que ambas as instruções possam causar <span class="marca">loops</span> infinitos, como visto no exemplo acima. A diferença sutil entre os dois é que <code>while</code> permite que se utilize qualquer variável já presente no código como variável de controle na condição para execução dele. Por se tratar de uma condição, ou seja, uma operação lógica condicional, qualquer parâmetro informado como condição (em <code>for</code>ou <code>while</code>) precisa dar um resultado <code>boolean</code> <code>true</code> para que o <span class="marca">loop</span> continue ativo.</p>

<p><strong>ATENÇÃO: Cuidado ao alterar os códigos neste documento, para que o último parâmetro do <b><code>for</code></b> não acabe virando, ao se digitar, algo como <b><code>i = i;</code></b> ou <b><code>x = 0</code></b>. Isto irá fazer seu navegador travar com um loop infinito.</strong></p>

<p>Experimente mudar a operação no bloco de <span class="marca">loop</span> no exemplo abaixo, ou mesmo as condições, para ver como o resultado se altera:</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


x = 0;
a = 0;

for(x=0; x<10; x++) {
  
  a = a + (x * 2);

}
</pre>
</div>

<div class="diagramahalf">
<iframe id="View_editor_2" style="height: 190px; border: 0 transparent none;"></iframe>
</div>


<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>Repare que as variáveis <code>x</code> e <code>a</code> precisam ser declaradas fora do próprio <span class="marca">loop</span> para que possamos ter acesso aos seus valores, já que tanto a variável de controle, quanto outras variáveis declaradas dentro do bloco ficam restritas ao próprio bloco por causa de seu <span class="marca">escopo</span>. Se você retirar sua declaração das primeiras linhas, elas continuarão existindo e permanecerão funcionando, mas não haverá como acessá-las para saber seus valores no console abaixo do código, pois assim que o <span class="marca">loop</span> se encerra, as variáveis deixam de existir.</p>
<p>Agora, vejamos como este tipo de recurso pode ser aplicado em um contexto gráfico:</p>


<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {
  
  for(int x = 0; x <= 150; x = x + 10) {

    line(x,0,x,150);

  }
}
</pre>
</div>


<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p class="separabloco"></p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">


  void draw() {
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  for(int c = 0; c < 5; c++) {

    rect(mouseX,mouseY+(c*15),10,10);

  }
}
</pre>
</div>



<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>Qual a utilidade de um <span class="marca">loop</span>, então?<br><span class="marca">Loops</span> são necessários para realizar tarefas repetitivas, geralmente quando há algum parâmetro na tarefa que se altera. Eles são a base da própria computação. Se você verificar que está realizando a mesma instrução (ou um conjunto de instruções) repetidas vezes com alguns parâmetros alterados em seu código, isto é sinal que as instruções deveriam estar dentro de um <span class="marca">loop</span>.</p>





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

