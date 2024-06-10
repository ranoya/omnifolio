<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Variáveis | O tecido das tecnologias criativas</title>
    <meta name="description" content="Variáveis | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Variáveis | O tecido das tecnologias criativas">
    <meta property="og:description" content="Variáveis | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "size(320,200); background(#ffffff);";
 
 /*
  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";
  */
 
  Predata_editor_2 = Predata_editor_1;
  Predata_editor_3 = Predata_editor_1;



  Postdata_editor_1 = "fill(#cccccc); textSize(18); text('1:', 15, 20); text('2:', 15, 40); text('3:', 15, 60); text('4:', 15, 80); text('5:', 15, 100); text('6:', 15, 120); text('7:', 15, 140); text('8:', 15, 160); text('9:', 15, 180); fill(#ac2ac6); text('a = ' + a, 40,20); text('b = ' + b, 40,40); text('y = ' + y, 40,60); text('r = ' + r, 40,80); text('c = ' + c, 40, 100); text('g = ' + g, 40, 120); text('s = ' + s, 40, 140); text('p = ' + p, 40, 160); text('n = ' + n, 40, 180);" + "</scr" + "ipt>";

  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="variaveis" class="indice">Variáveis no Processing</a>
<h1 id='titulocapitulo'>Variáveis no Processing</h1>

  <p>Variáveis são a forma como guardamos dados temporariamente nas linguagens de programação. Os dados de uma variável ficam na memória pelo tempo que um programa estiver sendo executado; para que estes dados estejam disponíveis de forma permanente, é necessário outro recurso, como escrever um arquivo contendo estes dados, ou enviando os dados para armazenamento em um banco de dados.</p>

  <p>Toda variável ocupa espaço na memória RAM do computador onde o programa está sendo executado. Linguagens de programação que tentam ser mais simples e fáceis de programar reservam largas porções de memória para que o programador não tenha problemas relacionados a isto, mas acabam sendo mais lentas; linguagens que tentam ser mais eficientes e rápidas precisam ter maior precisão naquilo que reservam da memória, e consequentemente, exigem um pouco mais do programador.</p>

  <p></p>
  <a name="Variáveis tipadas e não tipadas" class="indice">Variáveis tipadas e não tipadas</a>
<h2>Variáveis tipadas e não tipadas</h2>
  <p>Liguagens mais simples e fáceis, ao reservar grandes porções de memória, permitem que o programador guarde qualquer tipo de dado em qualquer variável. <a href="../javascript">Javascript</a>, por exemplo, é uma linguagem onde isto acontece: não é necessário definir o tipo de dado que uma variável pode guardar, e mesmo depois de armazenar nela um valor, pode-se colocar outro tipo imediatamente. As instruções <code>x = 3.5; x = "palavra";</code>, nesta sequência, não causam nenhum tipo de erro em <a href="../javascript">Javascript</a>; chamamos este tipo de linguagem de <span class="marca">linguagem não-tipada</span>.</p>

  <p>Já o <span class="marca">Java</span>, e todas as linguagens derivadas dele, como o <span class="marca">Processing</span>, são <span class="marca">linguagens tipadas</span>, onde é necessário definir os tipos de dados (e suas dimensões), que serão armazenados na memória. Isto é feito no ato de criação da variável, que chamamos de <span class="marca">declaração</span>. Ao <span class="marca">declarar</span> uma variável, é necessário informar o seu tipo, para que o devido espaço de memória seja reservado. Não é obrigatório que esta variável seja <span class="marca">inicializada</span>, isto é, que algum valor seja atribuído a ela inicialmente, mas é bastante comum que tanto a <span class="marca">declaração</span>, quanto a <span class="marca">inicialização</span> sejam feitas juntas, em uma única instrução. Isto é feito com uma instrução do tipo <code>int x = <span class="marca">10</span>;</code>, que poderia ser dividida em duas instruções separadas, sendo a primeira <code>int x;</code>, e a segunda <code>x = <span class="marca">10</span>;</code>.</p>

  <p>Em uma linguagem <span class="marca">tipada</span>, ao se atribuir um dado incompatível com o tipo da variável, produzimos um erro, e o programa é suspenso. Isto pode parecer como algo ruim para o programador de primeira viagem, mas é, na verdade, algo essencial para sabermos que há um problema (bug) no código que foi desenvolvido. As <span class="marca">linguagens não-tipadas</span> mascaram problemas com os dados e são bem mais trabalhosas para que se possa identificá-los e resolvê-los.</p>

  <p>No exemplo abaixo, declaramos e inicializamos algumas variáveis em <span class="marca">Processing</span>:</p> 


<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_1" style="height: 200px; border: 0 transparent none;"></iframe>
</div>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";
</pre>
</div>


<a name="tipologias" class="indice">Tipologias de dados</a>
<h2 style="width: 100%; clear: both; height: 15px;"></h2>
<h2>Tipologias de dados</h2>

<p>Os tipos de dados <span class="marca">declarados</span> são: <code>int</code>, que define dados numéricos inteiros (sem casas decimais), positivos ou negativos; <code>float</code>, que define dados numéricos com casas decimais, positivos ou negativos; <code>boolean</code>, que define dados binários do tipo <span class="marca">true</span> ou <span class="marca">false</span>, e <code>String</code>, que define dados formados por sequências de caracteres, ou em termos coloquiais, texto. Uma atenção especial para a última linha do código onde a variável <code>n</code> é <span class="marca">declarada</span>: <code>n</code> não comporta números, mas sim textos; o valor <span class="marca">3</span> contido em <code>n</code> não é um número, mas literalmente o caractere "3". Há outros tipos além destes, como <code>char</code>, <code>color</code>, <code>long</code> ou <code>byte</code>, menos usuáis. É possível também criar objetos que funcionam como novos tipos de dados.</p>

<p>Algumas vezes você encontrará códigos como este abaixo:</p>

<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">


Xpto a = new Xpto();

</pre>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p><code>Xpto</code> não é um tipo de dado. Esta instrução cria uma <a href="objetosbasics.php">instância de um objeto</a> previamente definido, atribuído à variável <code>a</code>, que, precisará ter reservada a devida parecela de memória. A <span class="marca">declaração</span> de uma variável para acomodar um <a href="objetosbasics.php">objeto</a> segue a mesma lógica da declaração de uma variável para acomodar dados (primitivas), utilizando o <a href="objetosbasics.php">objeto</a> como uma tipologia. Este recurso é bastante utilizando, e abordado em capítulo posterior.</p>

<a name="peracoes" class="indice">Operações</a>
<h2 style="width: 100%; clear: both; height: 15px;"></h2>
<h2>Operações com variáveis</h2>

<p>No exemplo abaixo, manipulamos e alteramos os dados declarados anteriormente. Respeitando a tipologia da variável e o que pode ser contido nela, é possível fazer todo o tipo de cálculo e operação com os dados, isto é: atribuir novos valores; atribuir valores à partir de cálculo com outras variáveis ou valores; somar, subtrair, igualar, concatenar, etc. Novamente, é necessária a atenção ao que ocorre nas operações envolvendo a variável <code>n</code>, e como a ordem das operações altera os resultados.</p>

<p>Experimente modificar a ordem das instruções, os valores originais do exemplo anterior (incluído no código), ou as operações realizadas sobre cada variável no exemplo abaixo:</p>


<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_2" style="height: 200px; border: 0 transparent none;"></iframe>
</div>


<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
  
int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";

a++;
b = b + 2;
y = y - 10;
r = (b + y) + (a - 20);
c = g;
s = s + p;
p = n;
n = n + 1;
</pre>
</div>


<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>Por fim, algumas questões mais complexas envolvendo variáveis: a operação <code>/</code> é uma divisão; toda divisão pode resultar em frações, e consequentemente onde houver divisão, o resultado precisa ser contido em uma variável do tipo <code>float</code>, como <span class="marca">y</span>.</p>

<p>A função <code>int(<span class="marca">p</span>)</code> transforma um <code>float</code> ou uma <code>String</code> (desde que contenha caracteres numéricos) em um <code>int</code>.</p>

<p>As variáveis <code>c</code> e <code>g</code> são do tipo <code>boolean</code>, e portanto, guardam dados binários. Estes dados são normalmente representados por <span class="marca">true</span> ou <span class="marca">false</span>, mas em sua essência, dados binários são, na verdade, <span class="marca">0</span> e <span class="marca">1</span>. Desta forma, é possível somar dados binários como se fossem dados numéricos.</p>

<p>Experimente alterar os dados e as operações no exemplo abaixo para ver os resultados:</p>

<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_3" style="height: 200px; border: 0 transparent none;"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
    
int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";

a++;
b = b + 2;
y = y - 10;
r = (b + y) + (a - 20);
c = g;
s = s + p;
p = n;
n = n + 1;

y = a / 2;
a = int(p) + 1;
c = false;
r = c + a;
b = g + a;
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>A forma como representamos as variáveis ou as operações feitas sobre elas nas diversas linguagens de programação podem variar muito, mas a lógica de como elas funcionam, como os dados são processados, e como os armazenam, é invariável. Ao entender como lidar com variáveis em uma linguagem, entendemos como todas as linguagens de programação procedem, ainda que a sintaxe varie.</p>




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

