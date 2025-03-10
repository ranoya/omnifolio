<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Arrays | O tecido das tecnologias criativas</title>
    <meta name="description" content="Arrays | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Arrays | O tecido das tecnologias criativas">
    <meta property="og:description" content="Arrays | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_2 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(250,130); background(#ffffff); frameRate(20); stroke(#78008A); strokeWeight(1); fill(#78008A); }";

  Postdata_editor_2 = "void draw() { fill(#cccccc); textSize(18); text('1:', 8, 20); text('2:', 8, 40); text('3:', 8, 60); text('4:', 8, 80); text('5:', 8, 100); text('6:', 8, 120); fill(#ac2ac6); text('X[4] = ' + X[4], 33,20); text('nomes[2] = ' + nomes[2], 33,40); text('X[6] = ' + X[6], 33,60); text('nomes[4] = ' + nomes[4], 33,80); text('X[0] = ' + X[0], 33,100); text('nomes[0] = ' + nomes[0], 33,120); noLoop(); }" + "</scri" + "pt>";

  Predata_editor_3 = Predata_editor_2;

  Postdata_editor_3 = "void draw() { fill(#cccccc); textSize(18); text('1:', 8, 20); text('2:', 8, 40); text('3:', 8, 60); text('4:', 8, 80); text('5:', 8, 100); text('6:', 8, 120); fill(#ac2ac6); text('k[0] = ' + k[0], 33,20); text('k[1] = ' + k[1], 33,40); text('k[2] = ' + k[2], 33,60); text('k[3] = ' + k[3], 33,80); text('k[4] = ' + k[4], 33,100); text('k[49] = ' + k[49], 33,120); noLoop(); }" + "</scri" + "pt>";



  Predata_editor_7 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

  Postdata_editor_7 = "</scri" + "pt>";

  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Matrizes / Arrays" class="indice">Matrizes / Arrays</a>
<h1 id='titulocapitulo'>Matrizes / Arrays</h1>

  <p><span class="marca">Arrays</span> são uma coleção de dados associadas a uma única variável, indexadas e acessadas através de um índice. Ao invés de criarmos diversas variáveis para registrar os dados, utilizamos uma única, e para cada um de seus índices, registramos dados diferentes.</p>

  <p>Todas as linguagens de programação se utilizam das <span class="marca">Arrays</span> para navegar de forma flexível e programática ao longo de dados. O que uma <span class="marca">Array</span> cria é uma situação como esta:</p>

  <p>Variável <span class="marca">X</span><br>
    <table><tr><th>índice</th><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
          <tr><th>valor</th><td>10</td><td>25</td><td>5</td><td>12</td><td>40</td><td>0</td><td>10</td></tr>
    </table></p>

  <p>Através da tabela acima, podemos inferir que o valor de <span class="marca">X</span>, no seu índice <span class="marca">3</span> é igual a <span class="marca">12</span>, enquanto seu valor no índice <span class="marca">5</span> é igual a <span class="marca">0</span>. Isto é representado na maioria das linguagens de programação como <span class="marca">X</span>[<span class="marca">3</span>]=<span class="marca">12</span> e <span class="marca">X</span>[<span class="marca">5</span>]=<span class="marca">0</span>.</p>

  <p>O <span class="marca">Processing</span> trata as <span class="marca">arrays</span> como <span class="marca">objetos</span>, que precisam ser instanciados de forma muito parecida como se faz com quaisquer <span class="marca">objetos</span> em uma programação orientada à <span class="marca">objetos</span>. Para se declarar/instanciar uma <span class="marca">array</span>, é necessário infromar a quantidade máxima de itens que ela irá guardar, conforme as sintaxes abaixo:

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


int[] X = new int[7];
String[] nomes = new String[20];
</pre>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>Estas declarações criarão 2 <span class="marca">arrays</span>, uma contendo uma coleção de valores do tipo <code>int</code> com 7 itens (a variável <span class="marca">X</span> que já apresentamos), e outra do tipo <code>String</code> com 20 itens, chamada <span class="marca">nomes</span>. Para se atribuir valores para estas variáveis em seus respectivos índices, ou mesmo realizar operações lógicas ou aritiméticas com elas, basta se referir a elas como <span class="marca">X</span>[<span class="marca">5</span>] ou <span class="marca">nomes</span>[<span class="marca">15</span>], conforme demonstramos abaixo:</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


int[] X = new int[7];
String[] nomes = new String[20];

X = {10,25,5,12,40,0,10};
nomes[0] = "Ana";
nomes[1] = "Maria";
nomes[2] = nomes[0] + " " + nomes[1];
nomes[3] = nomes[X[5]];

if (nomes[0] == "Maria") {
  
  nomes[4] = "Ricardo";

} else {
  
  nomes[4] = "Rafael";

}
</pre>
</div>

<div class="diagramahalf">
  <iframe id="View_editor_2" style="height: 250px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>Podemos atribuir valores sequenciais para uma <span class="marca">array</span> através da sintaxe de bloco <span class="marca">{ }</span>, separando os valores por vírgulas, como no exemplo acima (<code>X = {10,25,5,12,40,0,10}</code>), e é muito comum utilizarmos loops para atribuir valores iniciais às <span class="marca">arrays</span>. 


<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">


float[] k = new float[50];

for (int i = 0; i < k.length; i++) {
  
  k[i] = random(100);

}
</pre>
</div>

<div class="diagramahalf">
  <iframe id="View_editor_3" style="height: 250px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p><br><br>A variável/propriedade <code>length</code> registra a dimensão da <span class="marca">array</span> (sua quantidade de índices). Ao se tentar acessar um índice além das dimensões definidas inicialmente na <span class="marca">array</span>, ou se tentar atribuir um valor além de suas dimensões, obtemos um erro. Como toda variável, as <span class="marca">arrays</span> não podem conter dados que sejam incompatíveis com seu tipo, e não podem extrapolar a memória reservada para armazenar seus dados.</p>

<a name="Arrays Associativas" class="indice">Arrays Associativas</a>
<h3><span class="marca">Arrays Associativas</span></h3>

<p>O <span class="marca">Processing</span>, por ser uma linguagem baseada em <span class="marca">java</span>, não possui as <span class="marca">arrays associativas</span> que são muito utilizadas em linguagens como <span class="marca">javascript</span>, <span class="marca">php</span>, etc. Esta é uma de suas desvantagens em relação a sua versão mais moderna baseada em <span class="marca">javascript</span>, o <span class="marca">P5</span>, mas também um dos motivos que o fazem ter mais performance que ela.</p>

<p><span class="marca">Arrays associativas</span> permitem que utilizemos <code>String</code> como índices, ao invés de um valor do tipo <code>int</code>. Em linguagens como <span class="marca">javascript</span>, isto é declarado através da sintaxe <code>aluno["nome"]="Guilherme"</code>. A biblioteca completa da linguagem <span class="marca">Java</span> (<span class="marca">API</span>) possui a <span class="marca">classe</span> <code>HashMap</code>, que instancia objetos que se comportam como <span class="marca">arrays associativas</span>. É possível utilizar este tipo de objeto no <span class="marca">Processing</span>, mas sua adoção envolverá trabalhar com seus próprios <span class="marca">métodos/funções</span> e uma sintaxe própria, para acessar e atribuir valores ao objeto <code>HashMap</code>. Para usá-lo, é necessário importar a biblioteca para o código, como no exemplo abaixo:</p>

<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">


import java.util.Map;

HashMap&lt;String,Integer&gt; hm = new HashMap&lt;String,Integer&gt;();

hm.put(&quot;Ava&quot;, 1);
hm.put(&quot;Cait&quot;, 35);
hm.put(&quot;Casey&quot;, 36);

for (Map.Entry me : hm.entrySet()) {
  print(me.getKey() + &quot; is &quot;);
  println(me.getValue());
}

int val = hm.get(&quot;Casey&quot;);
println(&quot;Casey is &quot; + val);
</pre>


<a name="Arrays Bidimensionais e Ndimensionais" class="indice">Arrays Bidimensionais e Ndimensionais</a>
<h3><span class="marca">Arrays Bidimensionais e Ndimensionais</span></h3>

<p>Uma <span class="marca">array bidimensional</span> é acessada através de dois índices respectivamente. É um objeto mais próximo das matrizes que conhecemos na matemática (as <span class="marca">arrays simples</span> são tratadas na matemática como <span class="marca">vetores</span>). A situação em uma <span class="marca">array bidimensional</span> fica evidente através do diagrama abaixo:</p>

<p>Variável <span class="marca">S</span><br>

    <table>

    <tr><td style="text-align: center;">índice x<br>índice y</td><th>0</th><th>1</th><th>2</th><th>3</th><th>4</th><tr>
    <tr><th>0</th><td>20</td><td>0</td><td>14</td><td>7</td><td>6</td></tr>
    <tr><th>1</th><td>86</td><td>27</td><td>68</td><td>54</td><td>97</td></tr>
    <tr><th>2</th><td>52</td><td>11</td><td>0</td><td>37</td><td>77</td></tr>
    <tr><th>3</th><td>13</td><td>5</td><td>11</td><td>12</td><td>3</td></tr>


  </table></p>

  <p>Neste exemplo, podemos inferir que <span class="marca">S</span>[<span class="marca">1</span>][<span class="marca">3</span>]=<span class="marca">5</span>. A sintaxe para a criação de <span class="marca">arrays bidimensionais</span> é a seguinte:</p>

<pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">


int x = 5;
int y = 4;
int[][] S = new int[x][y];
</pre>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>É possível criar quantas dimensões forem necessárias para as <span class="marca">arrays</span>, entendendo sempre que os limites definidos na sua declaração/instanciamento precisam ser respeitados, e que o tipo de dado armazenado será sempre o mesmo em todas as suas dimensões (diferentemente de como linguagens como <span class="marca">javascript</span> podem fazer).</p>

<pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">


int x = 5;
int y = 4;
int z = 10;
int t = 8;

int[][][][] S = new int[x][y][z][t];
</pre>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<a name="Matrizes / Arrays e suas aplicações gráficas" class="indice">Matrizes / Arrays e suas aplicações gráficas</a>
<h3><span class="marca">Matrizes / Arrays e suas aplicações gráficas</span></h3>

<p>O exemplo abaixo cria duas <span class="marca">arrays</span> para armazenar posições anteriores do mouse e traçar um rastro através delas. Aumente o valor da variável <code>estagios</code> e verifique a diferença sobre o resultado:</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_7" style="overflow: hidden;"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_7' id='editor_7' data-linguagem="java" data-acetheme="tomorrow">


void setup() { 
  size(130,130);
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

int estagios = 5;
int[] mx = new int[estagios];
int[] my = new int[estagios];

void draw() {
  
  background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>);

  for (int p = 0; p <= mx.length-1; p++) {

    if (p == mx.length-1) {

      mx[p] = mouseX;
      my[p] = mouseY;

    } else {

    mx[p] = mx[p+1];
    my[p] = my[p+1];

    }

  }

  for (int p = mx.length-1; p >= 1; p--) {

    line(mx[p],my[p],mx[p-1],my[p-1]);

  }

}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>O exemplo acima poderia ter sido desenvolvido com o uso de uma <span class="marca">array bidimensional</span>.</p>


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

    