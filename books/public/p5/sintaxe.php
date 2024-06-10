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
    <meta name="description" content="Sintaxe | O código P5, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Sintaxe | O tecido das tecnologias criativas">
    <meta property="og:description" content="Sintaxe | O código P5, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>



  <script>

  Predata_editor_11 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>";
  
  Predata_editor_12 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<scri"+ "pt src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js'></sc" + "ript><scri" + "pt>" + "function setup() { createCanvas(148,148); background('#FFFFFF'); frameRate(20); stroke('#78008A'); strokeWeight(2); fill('#78008A'); }";


  Postdata_editor_11 = "</scr" + "ipt>";
  Postdata_editor_12 = Postdata_editor_11;
  
  </script>
   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Iniciando" class="indice">Framework</a>
<h1 id='titulocapitulo'>P5: um <i>framework</i></h1>

<p>P5 não é uma linguagem de programação. Trata-se de um <i>framework</i>, isto é, uma biblioteca de funções (API) de código criativo para uma linguagem de programação específica, que trabalha de acordo com um processo (<i>pipeline</i>) bem definido e estruturado. A biblioteca e o processo utilizados vieram do <a href="../processing">Processing</a>, e a linguagem de programação utilizada quando trabalhamos com este <i>framework</i> é <a href="../javascript">Javascript</a>, o que significa, portanto, que para se aprender a programar com P5, é necessário aprender (ao menos um pouco de) <a href="../javascript">Javascript</a>.

<p>Tudo que se faz usando P5 é, integralmente, <a href="../javascript">Javascript</a>, o que permite que todas as instruções existentes na linguagem possam ser utilizadas livremente no código P5, mesmo quando há funções ou variáveis equivalentes nele herdados do <a href="../processing">Processing</a>. Como exemplo, podemos citar a constante matemática &pi;, que em <a href="../javascript">Javascript</a> é acessada por <code>Math.PI</code>, e em <a href="../processing">Processing</a> apenas por <code>PI</code>. Uma vez utilizando P5, as duas formas se tornam disponíveis. Da mesma maneira, o código P5 consegue se comunicar transparentemente com tudo que for definido no código para gerar interatividade no documento <a href="../html">HTML</a>.</p>

<p>Outro aspecto inicial intrincado é o fato de que <a href="../javascript">Javascript</a> é a linguagem de programação nativa dos navegadores web, e P5 foi criado para que seus sketchs (o produto visual do código criativo criado com essas tecnologias) sejam executados dentro do navegador. Sendo assim, todo sketch, além de construído com linguagem <a href="../javascript">Javascript</a>, utilizando a biblioteca/<i>framework</i> P5, está inserido dentro de um documento <a href="../html">HTML</a>, que é o tipo de documento que um navegador utiliza. É recomendável, dessa forma, que haja algum conhecimento prévio sobre o <a href="../html">código HTML</a> antes de se iniciar o aprendizado com P5. Esta não é uma questão imprescindível, mas ajudará bastante, principalmente nos casos onde o sketch se integra/interage com outros elementos do documento no navegador.</p>


<a name="implementacao" class="indice">Implementando o P5</a>
<h2>Implementando o framework/biblioteca P5 no seu código</h2>

<p>Para utilizar o P5, é necessário carregar a biblioteca/<i>framework</i> no seu próprio código <a href="../javascript">Javascript</a>, ou, mais especificamente, no documento <a href="../html">HTML</a> que funcionará como suporte para o código. Isto é feito com uma única linha de código inserida no documento <a href="../html">HTML</a>:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
</pre>

<h2 style="width: 150px; clear: both;"></h2>

<p>Este código incorpora a biblioteca diretamente de seu repositório na web; é possível fazer a mesma coisa com uma cópia local da biblioteca, mas isto não confere nenhuma vantagem (na verdade, só desvantagens). O arquivo contendo a biblioteca para uso local está disponível no <a href="https://p5js.org/">website do P5</a>.</p>

<p>Uma vez carregada a biblioteca no documento web, você já pode utilizar todas as funções e recursos do P5 no seu código <a href="../javascript">Javascript</a>. Este código deve ser colocado no documento dentro da <a href="../html/tag-script">tag <code>script</code></a>, ou, se preferir, carregado externamente por ela de um arquivo indicado.</p>

<pre class='editor codefull' data-name='editor_10' id='editor_10' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;

  // código javascript

&lt;/script&gt;
</pre>

<h2 style="width: 150px; clear: both;"></h2>



<a name="Case sensitive" class="indice">Case sensitive</a>
<h2>Case sensitive</h2>
<p><a href="../javascript">Javascript</a> faz diferenciação entre letras maísculas e letras minúsculas no código. Uma variável ou função declarada com todas as letras maísculas, ou com apenas a primeira letra maíscula, é diferente de outra com todas as letras minúsculas, ainda que as letras em si sejam as mesmas. Um dos erros mais comuns em códigos <span class="marca">case sensitive</span> são a digitação de variáveis e funções de formas diferentes quanto à maísculas e minúsculas. No exemplo abaixo declaramos duas variáveis com a mesma palavra, mas escritas de formas diferentes em relação às maísculas e minúsculas. Repare que a máquina computacional às interpreta como coisas completamente diferentes. Experimente trocar as variáveis utilizadas em <a href="fun-fill.php"><code>fill()</code></a> e <a href="fun-stroke.php"><code>stroke()</code></a> para notar a diferença.</p>

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_11"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_11' id='editor_11' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;

  var cor = '#78008A'; // cor roxa
  var Cor = '#36787e'; // cor ciano

  function setup() {
    createCanvas(150,150);
  }

  function draw() {
    fill(Cor);
    stroke(cor);
    ellipse(mouseX, mouseY, 15, 15);
  }

&lt;/script&gt;
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<a name="Comentários" class="indice">Comentários</a>
<h2>Comentários</h2>
<p>Toda linguagem de programação possui uma forma de incluir textos livres dentro do código, geralmente para explicações, anotações, comentários, ou meramente para documentar o que é aquele código. Os <span class="marca">Comentários</span> são ignorados pela máquina computacional, mas permanecem ali para o programador, ou para outros programadores que venham a ter contato com o código. É necessário usar uma sintaxe específica para que a máquina computacional entenda que o trecho deve ser ignorado. Há duas formas de se fazer isso, através de <span class="marca">comentários por linha</span>, e <span class="marca">comentários multilinha</span>. No primeiro caso, deve-se utilizar <code>//</code> no início do comentário; tudo que vier depois, naquela linha, será ignorado. No segundo caso, deve-se utilizar <code>/*</code> no início daquilo que é um comentário, e <code>*/</code> para determinar o que é o final do comentário.</p>

<p>Experimente modificar a posição das marcações ou fazer comentários no código abaixo:</p> 

<div class="diagramahalf firstblock sketch borderon">
<iframe id="View_editor_12"></iframe>
</div>

<div class="diagramahalf sketch">
  <pre class='editor codefull' data-name='editor_12' id='editor_12' data-linguagem="java" data-acetheme="tomorrow">
function draw() {

  fill('#36787e'); // cor azul

  /*
  fill('#78008A');
  */
 
  // a borda está azul
  stroke('#36787e');

  // background('#FFFFFF');

  /* este trecho desenha
  os círculos.
  */
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

<p>Um código bem documentado, com comentários explicando cada decisão do programador, o funcionamento das funções, o esquema lógico do seu processamento, etc., é essencial para um bom desenvolvimento. O funcionamento de um código pode parecer óbvio quando se está trabalhando nele, mas podo ficar indecifrável após alguns meses sem vê-lo; por isso, é essencial que ele seja devidamente explicado nos comentários.</p>

<a name="Console" class="indice">Console</a>
<h2>Console</h2>
<p>Para saber o que está acontecendo no seu código, entender o valor de alguma variável, ou acompanhar sua mudança, geralmente é necessário visualizar algum tipo de dado. Para fazer isso utilizamos o <span class="marca">Console</span>, um painel disponível nas funções de desenvolvedor do seu navegador, onde mensagens enviadas pelo código podem ser exibidas enquanto o programa é executado.</p>

<p>Para exibir mensagens no <span class="marca">Console</span> usamos as funções <a href="../javascript/console-log.php"><code>Console.log(<span class="marca">mensagem</span>)</code></a> e <a href="console-table.php"><code>Console.table(<span class="marca">array</span>)</code></a> (esta última para matrizes de dados). A <code>mensagem</code> pode ser composta com o valor de variávies, textos, ou qualquer informação que o desenvolvedor julgar necessária visualizar.</p>


<a name="instancias" class="indice">Estratégias</a>
<h2>Estratégias de implementação: código externo, sketch único, frame com código externo, instâncias P5, e módulos Javascript</h2>

<p>Há cinco maneiras de se incluir um sketch em um documento <a href="../html">HTML</a>. A priemeira delas, explicada nos documentos de intrudução à programação do próprio P5 e utilizada pelo seus editores online ou desktop (IDE), é através da construção de um documento com o código P5 separado do código <a href="../html">HTML</a>, e sua incorporação através da <a href="../html/tag-script.php">tag <code>script</code></a> no documento que será exibido pelo navegador.</p>

<div class="diagramahalf firstblock">
<code>index.html</code><br><br>
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;meusketch.js&quot;&gt;&lt;/script&gt;
</pre>
</div>

<div class="diagramahalf">
<code>meusketch.js</code><br><br>
<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="javascript" data-acetheme="tomorrow">


function draw() {

  line(0,0,100,200);

}
</pre>
</div>

<h2 style="width: 150px; clear: both; height: 15px;"></h2>

<p>Esta forma é a mais recomendada para quem está começando. Como P5 tem sua origem no <a href="../processing">Processing</a>, e muitas das pessoas que aprendem P5 vêm de uma experiência anterior com ele, é mais fácil entender ou se lidar com uma espécie de "código P5", como se ele fosse equivalente a um arquivo .PDE de <a href="../processing">Processing</a>.</p> 

<p>A segunda forma é utilizando a totalidade do documento <a href="../html">HTML</a> para acomodar um único sketch P5, sem que o documento contenha outros elementos <a href="../html">HTML</a> ou mesmo outros sketchs.</p>

<code>index.html</code><br><br>
<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
&lt;script&gt

function draw() {

  line(0,0,100,200);

}

&lt;/script&gt;
</pre>

<h2 style="width: 150px; clear: both;"></h2>

<p>Apesar deste formato não ter a mesma organização do primero, ele é sinal de que o programador começa a entender que não se trata de uma "linguagem P5", ou um .PDE de P5, mas tão somente <a href="../javascript">Javascript</a> usufruíndo de uma biblioteca gráfica P5. A vantagem deste formato é ser mais direto e conciso (se considerarmos que o sketch será o único elemento do documento).</p>


<p>Nestes dois casos, falamos do uso do <a href="../html">HTML</a> apenas como um meio/suporte para exibir um único sketch P5; o <a href="../html">HTML</a> não é relevante, e o que realmente está em jogo é o que é exibido com o sketch. Os três outros casos são destinados a situações onde o sketch P5 convive com outros elementos no documento <a href="../html">HTML</a>, e vão crescendo em complexidade:</p>

<p>A inclusão por uma janela para outra página HTML (<i>frame</i>) é a maneira mais simples de se fazer isso, mas a que possibilita menos integração entre o sketch e outros elementos do documento. Ela funciona com a ciração de um documento de sketch único, e sua inclusão dentro de outro documento <a href="../html">HTML</a> que irá acomodar o primeiro (contendo o sketch) e outros elementos, pelo uso da <a href="../html/tag-iframe.php">tag <code>iframe</code></a>.</p>

<div class="diagramahalf firstblock">
<code>index.html</code><br><br>
<pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="html" data-acetheme="tomorrow">


&lt;iframe src=&quot;meucodigoHTMLcomSketch.html&quot;&gt;&lt;/iframe&gt;
&lt;p&gt;Legenda: Meu Sketch&lt;/p&gt;
</pre>
</div>

<div class="diagramahalf">
<code>meucodigoHTMLcomSketch.html</code><br><br>
<pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.js&quot;&gt;&lt;/script&gt;
&lt;script&gt

function draw() {

  line(0,0,100,200);

}

&lt;/script&gt;
</pre>
</div>

<h2 style="width: 150px; clear: both; height: 15px;"></h2>

<p>Este também é um formato recomendável para quem está iniciando com o P5. Ele mantem as coisas bem separadas, de forma que tudo possa ser facilmente manipulado sem criar problemas ou interferências uns sobre os outros. Como se vê, o entendimento do <a href="../html">código HTML</a> começa a se fazer necessário.</p>

<p>Já uso de instâncias P5 é uma técnica que torna o próprio <a href="../javascript">Javascript</a> (com P5) bem mais complexo. Trata-se da construção de um ou mais sketchs dentro de um <a href="objetosbasics.php">Objeto</a> P5 (um <i>instance container</i>) no documento <a href="../html">HTML</a>. Para que isso seja possível, cada instrução do código P5 precisará apontar para qual <a href="objetosbasics.php">Objeto</a> específico ela se refere, por que, afinal, ela pode ser direcionada para qualquer sketch ou elemento <a href="../html">HTML</a> presente no documento (o interpretador não é inteligente, e não é capaz de deduzir à qual pedaço ou elemento no documento o programador se refere). O código precisará ser, então, construído considerando sempre a multiplicidade de outros códigos e interações no documento, e a necessidade de trabalhar com <a href="../javascript">Javascript</a> orientado a <a href="objetosbasics.php">Objetos</a>.</p>

<code>index.html</code><br><br>
<pre class='editor codefull' data-name='editor_7' id='editor_7' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;
  var sketch = function(p) {
        p.draw = function() {
            p.line(0,0,100,150);
        }
  };
  
  new p5(sketch, &#039;elementoHTML&#039;);
&lt;/script&gt;
</pre>

<h2 style="width: 150px; clear: both;"></h2>

<p>Por fim, a construção de módulos é uma inclusão recente no <a href="../javascript">código Javascript</a>. Ele permite a criação de instâncias P5 carregadas por definições de funções em um código externo (inclusive que um código <a href="../javascript">código Javascript</a> externo carrege outro código para ser incorporado nele). Além da complexidade própria do uso de instâncias, os módulos não aceitam algumas técnicas comumente utilizadas quando se programa com <a href="../javascript">Javascript</a>, como o uso de variáveis globais e a reconstrução de código em tempo de execução, por serem blocos de código que podem ser re-utilizados em diversos sistemas, mas que funcionam isolados do resto da programação (e demandando um trabalho de engenharia para que dialoguem com o resto, com todo o rigor de uma programação profissional).</p>


<div class="diagramahalf firstblock">
<code>index.html</code><br><br>
<pre class='editor' data-name='editor_8' id='editor_8' data-linguagem="html" data-acetheme="tomorrow">


&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;module&quot;&gt;

  import quads from &quot;../quadrados.js&quot;;

  let playquads = quads({
    p5,
    &#039;bgcolor&#039;: &#039;#FFFFFF&#039;,    
    &#039;el&#039;: &#039;elementoHTML&#039;
  });

&lt;/script&gt;
</pre>
</div>

<div class="diagramahalf">
<code>quadrados.js</code><br><br>
<pre class='editor codefull' data-name='editor_9' id='editor_9' data-linguagem="javascript" data-acetheme="tomorrow">


export default ({
    p5,
    el = &#039;iddoelemento&#039;,
    bgcolor = &#039;#FFFFFF&#039;
    }) =&gt; {

        let sketch = function (p) {
          p.draw = function() {
                p.line(0,0,100,150);
          }
        }

        return new p5(sketch, el);

    };
</pre>
</div>

<h2 style="width: 150px; clear: both; height: 15px;"></h2>

<p>Evidentemente, estes dois últimos exemplos são formas bem mais complexas e de difícil entendimento para quem está começando a lidar com P5. Se você não consegue entender o que está escrito nestes códigos, nem mesmo nas primeiras versões (mais simples), não se preocupe. Todos estes exemplos fazem exatamente a mesma coisa:  apenas desenham uma linha na tela. <a href="../javascript">Javascript</a> é uma linguagem muito flexível, permitindo que um programa seja escrito de formas muito diferentes umas das outras. Isto costuma ser intimidador para quem está começando, mas, se for este seu caso, relaxe: não há nenhuma necessidade de você conhecer todas as maneiras como <a href="../javascript">Javascript</a> pode trabalhar; elas começam a aparecer conforme necessidades e demandam específicas surgem, tornando sua programação mais sofisticada. Apenas um programador experiente entenderá as vantagens de se trabalhar de acordo com a última versão (módulos), pois perceberá que o código poderá ser reaproveitado em outros documentos sem qualquer necessidade de adaptação, o que se classifica como um problema de engenharia/produtividade, e não uma questão de criação, ou da construção de um código que funcione direito. Uma programação simples e básica está sempre de ótimo tamanho, se ela cumpre com seu dever.</p>



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

