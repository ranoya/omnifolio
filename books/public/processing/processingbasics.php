<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Sintaxe | O tecido das tecnologias criativas</title>
    <meta name="description" content="Sintaxe | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Sintaxe | O tecido das tecnologias criativas">
    <meta property="og:description" content="Sintaxe | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

   Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

  Predata_editor_2 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#FFFFFF); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Predata_editor_3 = Predata_editor_2;
  Predata_editor_4 = Predata_editor_2;
  Predata_editor_5 = Predata_editor_2;

  Postdata_editor_1 = "</scr" + "ipt>";
  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
  Postdata_editor_4 = Postdata_editor_1;
  Postdata_editor_5 = Postdata_editor_1;



  </script>
   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Iniciando com Processing" class="indice">Iniciando com Processing</a>
<h1 id='titulocapitulo'>Iniciando com Processing</h1>

  <p>Duas funções especiais precisam ser declaradas em um código de <span class="marca">Processing</span> para que ele funcione: a função <a href="fun-setup.php"><code>setup()</code></a> e a função <a href="fun-draw.php"><code>draw()</code></a>. A função <a href="fun-setup.php"><code>setup()</code></a> é responsável por configurar o documento / sketch, e estabelecer valores ou definições iniciais para as variáveis e funções. Já a função <a href="fun-draw.php"><code>draw()</code></a> é quem efetivamente realiza o trabalho de desenhar coisas na tela, sendo executada pela máquina computacional continuamente, na velocidade definida através de <a href="fun-frameRate.php"><code>frameRate()</code></a>, geralmente dentro de <a href="fun-setup.php"><code>setup()</code></a>.</p>

  <p>Todo código <span class="marca">Processing</span> deve ter, no mínimo, estas duas funções declaradas. Elas fazem parte da estrutura mínima da programação em <span class="marca">Processing</span>. No exemplo abaixo, a função <a href="fun-setup.php"><code>setup()</code></a> configura um sketch de 150 x 150 pixels <a href="fun-size.php"><code>size(<span class="marca">150</span>,<span class="marca">150</span>)</code></a>, estabelece uma cor de fundo branca <a href="fun-background.php"><code>background(<span class="marca">#FFFFFF</span>)</code></a>, uma taxa de atualização de 20 quadros por segundo <a href="fun-frameRate.php"><code>frameRate(<span class="marca">20</span>)</code></a>, cor roxa para as bordas <a href="fun-stroke.php"><code>stroke(<span class="marca">#78008A</span>)</code></a> e preenchimento <a href="fun-fill.php"><code>fill(<span class="marca">#78008A</span>)</code></a> do que for desenhado, e uma espessura de 2 pixels para as bordas ou linhas <a href="fun-strokeWeight.php"><code>strokeWeight(<span class="marca">2</span>)</code></a>. Exceto pela a instrução <a href="fun-size.php"><code>size()</code></a>, todas as demais definições poderiam ter sido feitas normalmente dentro de <a href="fun-draw.php"><code>draw()</code></a>, ao invés de <a href="fun-setup.php"><code>setup()</code></a> - mais precisamente, para cada elemento que for desenhado, convem definir todas as suas características no momento que o código responsável pelo desenho for colocado em <a href="fun-draw.php"><code>draw()</code></a>.</p>

  <p>Neste mesmo exemplo, a função <a href="fun-draw.php"><code>draw()</code></a> só realiza uma única tarefa: desenhar um quadrado com seu canto superior esquerdo nas posições 20 x 20 (pixels) do campo ortogonal presente no sketch, com dimensão de 110 x 110 pixels <a href="fun-rect.php"><code>rect(<span class="marca">20</span>,<span class="marca">20</span>,<span class="marca">110</span>,<span class="marca">110</span>)</code></a>. É importante frisar que este retângulo está sendo repetidamente desenhado, um sobre o outro, em uma frequência de 20 vezes por segundo. Como não há nenhuma instrução para que o sketch seja apagado em cada vez que <a href="fun-draw.php"><code>draw()</code></a> é executada, o desenho sobrepõe o que já está lá. Experimente alterar as cores na função <a href="fun-setup.php"><code>setup()</code></a> ou modificar o que é desenhado para um círculo ou elípse, através da função <a href="fun-ellipse.php"><code>ellipse(<span class="marca">x</span>,<span class="marca">y</span>,<span class="marca">w</span>,<span class="marca">h</span>)</code></a>.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>
<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void setup() {
  
  size(150,150);
  background(#FFFFFF);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);

}

void draw() {
  
  rect(20,20,110,110);

}</pre>


</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <p>Utilizando as mesmas configurações de <a href="fun-setup.php"><code>setup()</code></a>, o exemplo abaixo desenha um pequeno círculo na posição em que o mouse se encontra sobre o sketch <a href="fun-ellipse.php"><code>ellipse(<span class="marca">mouseX</span>, <span class="marca">mouseY</span>, <span class="marca">15</span>, <span class="marca">15</span>)</code></a>. Novamente, como nenhuma instrução é dada para que a tela seja limpa, o circulo vai deixando um rastro por onde o mouse passar. Experimente incluir uma instrução para que a tela seja limpa antes que o circulo seja desenhado, através da instrução <a href="fun-background.php"><code>background(#FFFFFF)</code></a>.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
void draw() {
  
  ellipse(mouseX, mouseY, 15, 15);

}</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="Escopo" class="indice">Escopo</a>
<h2><span class="marca">Escopo</span></h2>
<p>Você pode declarar novas funções ou novas variáveis ao longo do código na medida que precisar. No exemplo abaixo, declaramos a função <code>rastro()</code> que faz a mesma coisa que o exemplo anterior: desenha um circulo na posição do mouse. Mas <code>rastro()</code> não é uma função executada automaticamente pela máquina computacional; as únicas funções que são executadas automaticamente são <a href="fun-setup.php"><code>setup()</code></a> uma única vez, e <a href="fun-draw.php"><code>draw()</code></a> continuamente. Se <code>rastro()</code> fosse chamada à partir de <a href="fun-setup.php"><code>setup()</code></a>, teríamos apenas um círculo, provavelmente na posição 0 x 0 do campo ortogonal, desenhado imediatamente no momento que o processamento do código é iniciado. Mas quando <code>rastro()</code> é chamada à partir de <a href="fun-draw.php"><code>draw()</code></a>, ela passa a ser executada toda vez que <a href="fun-draw.php"><code>draw()</code></a> é executada. Experimente cortar a chamada à <code>rastro()</code> dentro de <a href="fun-draw.php"><code>draw()</code></a>, e o código não desenhará mais nada na tela.</p>

<p>Para que <code>rastro()</code> esteja acessível para ser chamada por outras funções no código, ela precisa ser declarada no mesmo nível hierárquico das demais funções. Funções não podem ser declaradas dentro de funções (ou variáveis dentro de variáveis); declarar uma função dentro de outra função resultará em um erro de código. Mas variáveis podem ser declaradas dentro de funções. <a href="objectosbasics.php">Classes / objetos</a> são um terceiro elemento de programação - que serão vistos posteriormente - que podem ter diversas funções e variáveis declaradas dentro deles.</p>

<p>As funções declaradas dentro de <a href="objectosbasics.php">classes/objetos</a> só são acessíveis aos próprios objetos, e não podem ser usadas em outros lugares, como em <a href="fun-draw.php"><code>draw()</code></a> ou <a href="fun-setup.php"><code>setup()</code></a>, assim como uma variável declarada dentro de uma função não é acessível/visível para outra função. Isso é chamado, em programação, de <span class="marca">escopo de variáveis e funções</span>.</p>

<p>Se a variável cor <code>int cor = <span class="marca">#36787e</span></code> tivesse sido declarada dentro de <code>rastro()</code>, <a href="fun-draw.php"><code>draw()</code></a> não saberia de sua existência, e o código pararia de funcionar em decorrência de um erro (uma variável que não existe por estar fora do escopo da função sendo utilizada nas chamadas a <a href="fun-fill.php"><code>fill(<span class="marca">cor</span>)</code></a> e <a href="fun-stroke.php"><code>stroke(<span class="marca">cor</span>)</code></a> ). Contudo, se a variável cor <code>int cor = <span class="marca">#36787e</span></code> for declarada dentro de <code>rastro()</code>, e as funções <a href="fun-fill.php"><code>fill(<span class="marca">cor</span>)</code></a> e <a href="fun-stroke.php"><code>stroke(<span class="marca">cor</span>)</code></a> também forem colocadas dentro de <code>rastro()</code>, o código funcionará perfeitamente, já que a variável cor está sendo usada em um lugar onde ela faz parte do <span class="marca">escopo</span>. Experimente alterar o lugar das funções e da declaração da variável, para entender como isso funciona:</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
int cor = #36787e;

void draw() {
  fill(cor);
  stroke(cor);
  rastro();
}

void rastro() {
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="Case sensitive" class="indice">Case sensitive</a>
<h2><span class="marca">Case sensitive</span></h2>
<p>Toda linguagem de programação que compartilha da sintaxe de Java faz diferenciação entre letras maísculas e letras minúsculas no código. Uma variável ou função declarada com todas as letras maísculas, ou com apenas a primeira letra maíscula, é diferente de outra com todas as letras minúsculas, ainda que as letras em si sejam as mesmas. Um dos erros mais comuns em códigos <span class="marca">case sensitive</span> são a digitação de variáveis e funções de formas diferentes quanto à maísculas e minúsculas. No exemplo abaixo declaramos duas variáveis com a mesma palavra, mas escritas de formas diferentes em relação às maísculas e minúsculas. Repare que a máquina computacional às interpreta como coisas completamente diferentes. Experimente trocar as variáveis utilizadas em <a href="fun-fill.php"><code>fill()</code></a> e <a href="fun-stroke.php"><code>stroke()</code></a> para notar a diferença.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
int cor = #78008A;
int Cor = #36787e;

void draw() {
  fill(Cor);
  stroke(cor);
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="Comentários" class="indice">Comentários</a>
<h2><span class="marca">Comentários</span></h2>
<p>Toda linguagem de programação possui uma forma de incluir textos livres dentro do código, geralmente para explicações, anotações, comentários, ou meramente para documentar o que é aquele código. Os <span class="marca">Comentários</span> são ignorados pela máquina computacional, mas permanecem ali para o programador, ou para outros programadores que venham a ter contato com o código. É necessário usar uma sintaxe específica para que a máquina computacional entenda que o trecho deve ser ignorado. Há duas formas de se fazer isso, através de <span class="marca">comentários por linha</span>, e <span class="marca">comentários multilinha</span>. No primeiro caso, deve-se utilizar <code>//</code> no início do comentário; tudo que vier depois, naquela linha, será ignorado. No segundo caso, deve-se utilizar <code>/*</code> no início daquilo que é um comentário, e <code>*/</code> para determinar o que é o final do comentário.</p>

<p>Experimente modificar a posição das marcações ou fazer comentários no código abaixo:</p> 

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  fill(#36787e); // cor azul

  /*
  fill(#78008A);
  */
 
  // a borda está azul
  stroke(#36787e);

  // background(#FFFFFF");

  /* este trecho desenha
  os círculos.
  */
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>Um código bem documentado, com comentários explicando cada decisão do programador, o funcionamento das funções, o esquema lógico do seu processamento, etc., é essencial para um bom desenvolvimento. O funcionamento de um código pode parecer óbvio quando se está trabalhando nele, mas podo ficar indecifrável após alguns meses sem vê-lo; por isso, é essencial que ele seja devidamente explicado nos comentários.</p>

<a name="Console" class="indice">Console</a>
<h2><span class="marca">Console</span></h2>
<p>Para saber o que está acontecendo no seu código, entender o valor de alguma variável, ou acompanhar sua mudança, geralmente é necessário visualizar algum tipo de dado. Para fazer isso utilizamos o <span class="marca">Console</span>, um painel de texto disponível na IDE do <span class="marca">Processing</span> onde mensagens enviadas pelo código podem ser exibidas enquanto o programa é executado.</p>

<p>Para exibir mensagens no <span class="marca">Console</span> usamos as funções <a href="fun-print.php"><code>print(<span class="marca">mensagem</span>)</code></a> e <a href="fun-println.php"><code>println(<span class="marca">mensagem</span>)</code></a>. Esta <span class="marca">mensagem</span> pode ser composta com o valor de variávies, textos, ou qualquer informação que o desenvolvedor julgar necessária visualizar. Enquanto <a href="fun-print.php"><code>print()</code></a> exibe uma mensagem e mantem o cursor ao final desta mensagem, <a href="fun-println.php"><code>println()</code></a> exibe a mensagem e pula a linha automaticamente.</p>




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

