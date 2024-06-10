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
    <meta name="description" content="Variáveis | O código Javascript, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Variáveis | O tecido das tecnologias criativas">
    <meta property="og:description" content="Variáveis | O código Javascript, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  TodosEditoresPre = "<sty" + "le>body, html { margin: 0; padding: 0; } body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</s" + "tyle><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";

  TodosEditoresPost = "</scri" + "pt>";

  Predata_editor_1 = TodosEditoresPre;
 
  Postdata_editor_1 = "println('a = ' + a); println('b = ' + b); println('y = ' + y);  println('r = ' + r); println('c = ' + c); println('g = ' + g); println('s = ' + s); println('p = ' + p); println('n = ' + n);" + TodosEditoresPost;

  Postdata_editor_2 = "println('a = ' + a); println('b = ' + b); println('y = ' + y);  println('r = ' + r); println('c = ' + c); println('g = ' + g); println('s = ' + s); println('p = ' + p); println('n = ' + n);" + TodosEditoresPost;

  Postdata_editor_3 = "println('a = ' + a); println('b = ' + b); println('y = ' + y);  println('r = ' + r); println('c = ' + c); println('g = ' + g); println('s = ' + s); println('p = ' + p); println('n = ' + n);" + TodosEditoresPost;

  Predata_editor_2 = TodosEditoresPre;
  Predata_editor_3 = TodosEditoresPre;

  Predata_editor_4 = `<sty` + `le>body, html { margin: 0; padding: 0; } body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</st` + `yle>
                      <scr` + `ipt>
                        linha = 0;
                        conteudo = "";
                        function println(u) {
                            linha++;
                            if (typeof u === 'undefined') {
                            conteudo += linha + ": undefined<br>";
                            
                            } else {
                            conteudo += '<span>' + linha + "</span>: " + u + '<br>';
                            }
                        }`;

  Postdata_editor_4 = ` document.write(conteudo);
                        </sc` + `ript>`;
 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="variaveis" class="indice">Variáveis no JS</a>
<h1 id='titulocapitulo'>Variáveis no Javascript</h1>

  <p>Variáveis são a forma como guardamos dados temporariamente nas linguagens de programação. Os dados de uma variável ficam na memória pelo tempo que um programa estiver sendo executado; para que estes dados estejam disponíveis de forma permanente, é necessário outro recurso, como escrever um arquivo contendo estes dados, ou enviando os dados para armazenamento em um banco de dados.</p>

  <p>Toda variável ocupa espaço na memória RAM do computador onde o programa está sendo executado. Linguagens de programação que tentam ser mais simples e fáceis de programar reservam largas porções de memória para que o programador não tenha problemas relacionados a isto, mas acabam sendo mais lentas; linguagens que tentam ser mais eficientes e rápidas precisam ter maior precisão naquilo que reservam da memória, e consequentemente, exigem um pouco mais do programador.</p>

  <p></p>
  <a name="Variáveis tipadas e não tipadas" class="indice">Variáveis tipadas e não tipadas</a>
<h2>Variáveis tipadas e não tipadas</h2>
  <p>Liguagens mais simples e fáceis, ao reservar grandes porções de memória, permitem que o programador guarde qualquer tipo de dado em qualquer variável. <span class="marca">Javascript</span>, por exemplo, é uma linguagem onde isto acontece: não é necessário definir o tipo de dado que uma variável pode guardar, e mesmo depois de armazenar nela um valor, pode-se colocar outro tipo imediatamente. As instruções <code>x = 3.5; x = "palavra";</code>, nesta sequência, não causam nenhum tipo de erro em <span class="marca">Javascript</span>; chamamos este tipo de linguagem de <span class="marca">linguagem não-tipada</span>.</p>

  <p>Já o <span class="marca">Java</span>, e todas as linguagens derivadas dele, como o <a href="../processing">Processing</a>, são <span class="marca">linguagens tipadas</span>, onde é necessário definir os tipos de dados (e suas dimensões), que serão armazenados na memória. Isto é feito no ato de criação da variável, que chamamos de <span class="marca">declaração</span>. Ao <span class="marca">declarar</span> uma variável, é necessário informar o seu tipo, para que o devido espaço de memória seja reservado. Não é obrigatório que esta variável seja <span class="marca">inicializada</span>, isto é, que algum valor seja atribuído a ela inicialmente, mas é bastante comum que tanto a <span class="marca">declaração</span>, quanto a <span class="marca">inicialização</span> sejam feitas juntas, em uma única instrução.</p>
  
  <p>Em <span class="marca">Javascript</span> isto é feito com uma instrução do tipo <code>var x = <span class="marca">10</span>;</code>, que poderia ser dividida em duas instruções separadas, sendo a primeira <code>var x;</code>, e a segunda <code>x = <span class="marca">10</span>;</code>.</p>

  <p>Há 4 maneiras de se <span class="marca">declarar</span> variáveis em javascript. A primeira é simplesmente dar nome a uma variável e lhe atribuir um valor, como <code>z = 10;</code>. Este procedimento não causa nenhum erro ou problema no código, mas não tem sido mais recomendado por não deixar explícito que se trata da <span class="marca">declaração</span> de uma variável (e não somente da atribuição de valor a ela). O segundo é através da diretriz <code>var</code>, como em <code>var z = 10;</code>. Não há nenhuma diferença prática entre isso e o que foi feito anteriormente (sem <code>var</code>), mas, neste caso, há uma <span class="marca">declação</span> formal e explícita, que não deixa margem à dúvida. A terceira maneira é utilizando a diretriz <code>let</code>. Sua diferença para <code>var</code> é pequena: enquanto o <a href="#escopo">escopo</a> de <code>var</code> se limita à <a href="functionbasics.php">função</a> em que ela é declarada, o <a href="#escopo">escopo</a> de <code>let</code> se restringe a um bloco (ainda menor). Pro fim, temos também a diretiz <code>const</code> que define uma constante, isto é, uma variável que, após ter um valor atribuído, não poderá mais ser alterada.</a>

  <p>Em uma linguagem <span class="marca">tipada</span>, ao se atribuir um dado incompatível com o tipo da variável, produzimos um erro, e o programa é suspenso. Isto pode parecer como algo ruim para o programador de primeira viagem, mas é, na verdade, algo essencial para sabermos que há um problema (bug) no código que foi desenvolvido. As <span class="marca">linguagens não-tipadas</span>, como <span class="marca">Javascript</span>, mascaram problemas com os dados e são bem mais trabalhosas para que se possa identificá-los e resolvê-los.</p>

  <p>No exemplo abaixo, declaramos e inicializamos algumas variáveis em <span class="marca">Javascript</span>:</p> 


<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_1" style="height: 200px; border: 0 transparent none;"></iframe>
</div>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">

var a = 10;
var b = 5;
y = 3.5;
let r = Math.random(50);
let c = false;
var g = true;
s = "palavra";
var p = "junta";
n = "3";
</pre>
</div>


<a name="tipologias" class="indice">Tipologias de dados</a>
<h2 style="width: 100%; clear: both; height: 15px;"></h2>
<h2>Tipologias de dados</h2>

<p>Apesar de <span class="marca">Javascript</span> ser uma <span class="marca">linguagem não-tipada</span>, as variáveis possuem sim tipologias. Há dados numéricos que são constituídos por números inteiros; há dados númericos constituídos por frações; há dados binários (<code>booleanos</code>), constituídos por valores <code>true</code> ou <code>false</code>, e há dados do tipo <code>String</code>, isto é, constituído por sequências de caracteres (palavras, textos, etc.). <span class="marca">Javascript</span> define a tipologia do dado na memória por inferência (conforme o programador atribui um valor a ela).</p>

<p>É necessário ter especial atenção para a última linha do código onde a variável <code>n</code> é <span class="marca">declarada</span>: <code>n</code> não recebe um valor numérico, apesar de parecer. O valor <code>3</code> contido em <code>n</code> não é um número, mas literalmente o caractere "3". As <span class="marca">declarações</span> <code>var n = 3;</code> e <code>var n = "3";</code> implicam em resultados diferentes: no primeiro caso, o interpretador julga se tratar de uma variável numérica, e no segundo caso de uma variável <code>String</code>.</p>

<a name="peracoes" class="indice">Operações</a>
<h2 style="width: 100%; clear: both; height: 15px;"></h2>
<h2>Operações com variáveis</h2>

<p>No exemplo abaixo, manipulamos e alteramos os dados declarados anteriormente, através de cálculos com as variáveis (somar, subtrair, igualar, concatenar, etc). Novamente, é necessária a atenção ao que ocorre nas operações envolvendo a variável <code>n</code>, e como a ordem das operações altera os resultados.</p>

<p>Experimente modificar a ordem das instruções, os valores originais do exemplo anterior (incluído no código), ou as operações realizadas sobre cada variável no exemplo abaixo:</p>


<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_2" style="height: 200px; border: 0 transparent none;"></iframe>
</div>


<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
  
var a = 10;
var b = 5;
y = 3.5;
let r = Math.random(50);
let c = false;
var g = true;
s = "palavra";
var p = "junta";
n = "3";

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

<p>A função <code>parseInt(<span class="marca">p</span>)</code> transforma um dado constituído por caracteres numéricos (<code>String</code>) em um valor numérico inteiro, e <code>parseFloat(<span class="marca">p</span>)</code> em uma fração, ou valor numérico com casas decimais.</p>

<p>As variáveis <code>c</code> e <code>g</code> são do tipo <code>boolean</code>, e portanto, guardam dados binários. Estes dados são normalmente representados por <code>true</code> ou <code>false</code>, mas em sua essência, dados binários são, na verdade, <code>0</code> e <code>1</code>. Desta forma, é possível somar dados binários como se fossem dados numéricos.</p>

<p>Experimente alterar os dados e as operações no exemplo abaixo para ver os resultados:</p>

<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_3" style="height: 200px; border: 0 transparent none;"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">

var a = 10;
var b = 5;
y = 3.5;
let r = Math.random(50);
let c = false;
var g = true;
s = "palavra";
var p = "junta";
n = "3";

b = b + 2;
y = y - 10;
r = (b + y) + (a - 20);
c = g;
s = s + p;
p = n;
n = n + 1;

y = a / 2;
a = parseInt(p) + 1;
c = false;
r = c + a;
b = g + a;
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>A forma como representamos as variáveis ou as operações feitas sobre elas nas diversas linguagens de programação podem variar muito, mas a lógica de como elas funcionam, como os dados são processados, e como os armazenam, é invariável. Ao entender como lidar com variáveis em uma linguagem, entendemos como todas as linguagens de programação procedem, ainda que a sintaxe varie.</p>

<a name="escopo" class="indice">Escopo</a>
<h2>Escopo</h2>

<p>Variáveis possuem <span class="marca">escopo</span>, isto é, dependendo da posição hierárquica do código onde elas são <span class="marca">declaradas</span>, elas podem, ou não podem, ser acessadas por parte deles. A cada <a href="functionsbasics.php">função</a> ou bloco criado e aninhado no código, estabelecemos um novo nível hierarquico no código, e, as variáveis criadas em um determinado nível não são acessíveis ao nível anterior. Vejamos no código:</p>


<div class="diagramahalf" style="height: 200px;">
<iframe id="View_editor_4" style="height: 200px; border: 0 transparent none;"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
    
var k = 20;
var z = 5;

function xpto() {

    var z = 10;

}

xpto();
println(k); // 20
println(z); // 5

</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>A variável <code>z</code> permanece com valor <code>5</code>, mesmo sendo <span class="marca">declarada</span> com valor <code>10</code> dentro da <a href="functionsbasics.php">função</a> <code>xpto()</code>. Isto acontece por que a variável <code>z</code> dentro de <code>xpto()</code> não é acessível fora de seu bloco. Para o interpretador do código, há duas variáveis <code>z</code>, uma que pode ser acessada por todo o código, pois faz parte do nível hierárquico mais alto do código, e outra com o mesmo nome, que só consegue ser acessada dentro de <code>xpto()</code>. Experimente incluir, dentro de <code>xpto()</code>, uma instrução <code>println(z);</code> logo em baixo de <code>var z = 10;</code>, e veja o resultado. Você verá que será exibido o valor <code>10</code> (da variável <code>z</code> de <code>xpto()</code>), e na sequência os valores <code>20</code> (de <code>k</code>) e <code>5</code> da variável <code>z</code> no escopo geral (mais alto).</p>

<p>Experimente também retirar a linha <code>var z = 10;</code> de <code>xpto()</code>, e manter <code>println(z);</code> dentro dele. Você perceberá que o valor de <code>z</code> declarada no escopo geral (nível mais alto) é acessível por <code>xpto()</code>.</p>

<p>Por fim, experimente alterar o código em <code>xpto()</code> para <code>z = 10;</code>, retirando a diretriz <code>var</code>. Isso produzirá uma mudança no valor de <code>z</code> do escopo geral, já que não se trata da <span class="marca">declaração</span> de uma (nova) variável, mas sim de uma operação de atribuição de valor em uma variável que já existe (e é acessível no escopo de <code>xpto()</code>). Este é um dos motivos pelo qual devemos usar as diretrizes <code>var</code>, <code>let</code> ou <code>const</code> para <span class="marca">declaração</span> de variáveis de forma explícita: para que não sejam confundidas com outras variáveis existentes, <span class="marca">declaradas</span> em outro lugar. Em um programa simples e de poucas linhas isso pode parecer desnecessário, mas quando passamos de mil linhas de código, este tipo de situação provavelmente irá acontecer.</p>

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

