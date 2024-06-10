<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>  
    <title>CSS: Seletores | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Seletores | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Seletores | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Seletores | O código CSS, capítulo do livro O tecido das tecnologias criativas">    
</head>
<body>

  <script>
   
    Predata_editor_3 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="aplica" class="indice">Aplicações e seletores</a>
<h1 id='titulocapitulo'>Aplicações do CSS no HTML, e seletores CSS</h1>

  <p>Há 4 formas básicas de se aplicar uma definição CSS a um elemento/nó CSS: pela definição da tag, pela definição de um <code>id</code>, pela definição de uma <code>class</code>, ou pelo atributo <code>style</code> da própria tag. A definição do método de aplicação é feita através dos seletores básicos do CSS:</p>

  <a name="Seletor de <code>id</code>" class="indice">Seletor de id</a>
<h3>Seletor de <code>id</code></h3>
  <p>Toda definição atribuída a um <code>id</code> específico deve ser feita através do caractere <code>#</code> no código CSS:</p>

<div class="diagramahalf firstblock">
<code>CSS</code><br>
<pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
#titulo {
       color: violet;
}
</pre>
</div>

<div class="diagramahalf">
<code>HTML</code><br>
<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;h1 id=&quot;titulo&quot;&gt;T&iacute;tulo Geral&lt;/h1&gt;
</pre>
</div>

<h2 style="width: 100%; clear: both; margin-top: 10px;"></h2>

<p><code>Ids</code> são identificadores únicos, o que significa que não podem existir dois ou mais elementos HTMLs (tags) com o mesmo <code>id</code>.</p>

<a name="Seletor de <code>class</code>" class="indice">Seletor de class</a>
<h3>Seletor de <code>class</code></h3>

<p>Toda definição atribuída a um elemento HTML (tag) marcado com uma classe específica deve ser feita através do caractere <code>.</code> no código CSS:</p>

<div class="diagramahalf firstblock">
<code>CSS</code><br>
<pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
.links {
       text-decoration: none;
}
</pre>
</div>

<div class="diagramahalf">
<code>HTML</code><br>
<pre class='editor codefull' data-name='editor_4' id='editor_4'>


&lt;a class=&quot;links&quot; href=&quot;https://www.ranoya.com&quot;&gt;meu site&lt;/a&gt;
</pre>
</div>

<h2 style="width: 100%; clear: both; margin-top: 10px;"></h2>

<p><code>class</code> são marcadores seriais, o que significa que muito provavelmente haverá inúmeros elementos HTMLs (tags) marcadas com o mesmo <code>class</code>.</p>

<a name="Seletor de tags" class="indice">Seletor de tags</a>
<h3>Seletor de tags</h3>

<p>Toda definição atribuída a um tipo de tag específica deve ser feita através da declaração da tag no código CSS:</p>

<div class="diagramahalf firstblock">
<code>CSS</code><br>
<pre class='editor codefull' data-name='editor_5' id='editor_5'>
  
div {
       color: white;
}
</pre>
</div>

<div class="diagramahalf">
<code>HTML</code><br>
<pre class='editor codefull' data-name='editor_6' id='editor_6'>


&lt;div&gt;conte&uacute;do&lt;/div&gt;
</pre>
</div>

<h2 style="width: 100%; clear: both; margin-top: 10px;"></h2>

<a name="porstyle" class="indice">Aplicação por style</a>
<h3><br>Aplicação por <code>style</code></h3>

<p>A aplicação de CSS via <code>style</code> é feita diretamente no código HTML, através da própriedade style do elemento HTML:</p>

<pre class='editor codefull' data-name='editor_7' id='editor_7'>
  
&lt;p style=&quot;color: white;&quot;&gt;conte&uacute;do&lt;/p&gt;
</pre>

<h2 style="width: 100%; clear: both; margin-top: 10px;"></h2>

<p>A aplicação por <code>style</code> não é recomendada, pois torna o código menos organizado e inteligível. Ela não é uma aplicação errada do CSS, mas não é considerada uma boa prática, e deve ser adotada em situações de excessão. Uma boa prática de construção do código HTML/CSS prevê a separação clara dos códigos de forma que fique claro para o desenvolvedor onde se localizam os atributos e propriedades que ele precisa manipular. Ao se definirem atributos via <code>style</code> na própria tag, realizamos uma mistura entre os códigos que dificulta o trabalho de manutenção e melhoria sobre ele.</p>

<a name="Seletores de estado/comportamento" class="indice">Seletores de estado</a>
<h2>Seletores de estado/comportamento</h2>

<p>Algumas tags como <code>&lt;a&gt;</code> ou <code>&lt;input&gt;</code> registram estados diferentes. Um estado diferente pode ser, por exemplo, quando o mouse está sobre o elemento, ou quando o elemento foi clickado.</p>

<p>Pode-se associar atributos diferentes para estados diferentes através do CSS. Isto é feito utilizando o caractere <code>:</code> seguido do estado (por exemplo, <code>visited</code>) na definição da <code>class</code>, <code>id</code> ou tag.</p>

<a name="Usoestado" class="indice">Uso</a>
<h3>Uso</h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_8"></iframe>
  </div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_8' id='editor_8'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     a { color: violet; }
     a:hover { background-color: black; }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a&gt;meu link&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

<h2 style="width: 100%; border: 0; clear: both; margin-top: 25px;"></h2>

<a name="Seletores condicionais" class="indice">Condicionais</a>
<h2>Seletores condicionais</h2>

<p>Seletores condicionais são aplicados quando uma determinada condição estabelecida no código CSS é encontrada dentro do código HTML. Um seleção condicional pode estabelecer que um conjunto de atributos devam ser aplicados a uma tag <code>a</code> quando ela estiver dentro de uma tag <class>div</class>, ou que uma <code>class</code> só deva ser aplicada às tags <code>p</code>, por exemplo. Os seletores condicionais podem ser feitos para condições simultâneas para a mesma tag, ou para condições de encadeamento/hierarquia das tags.</p>

<a name="Condições para a mesma tag" class="indice">na mesma tag</a>
<h3>Condições para a mesma tag</h3>

<p>Para se definir seletores condicionais em uma mesma tag, basta declarar os seletores básicos de tag, <code>id</code> e <code>class</code> juntos (sem espaços ou separações) em uma única definição, conforme os exemplos abaixo:</p>

<pre class='editor codefull' data-name='editor_9' id='editor_9'>
  
&lt;!DOCTYPE html&gt;

a#logotipo { color: violet; }
div.especial { background-color: black; }
p#titulo.texto { font-size: 40px; }
#rodape.pequeno { font-size: 11px; }
a.link:hover {}
</pre>

<h2 style="width: 100%; border: 0; clear: both;"></h2>

<p>Os atributos definidos serão aplicados apenas nos casos onde todas as condições (tag, estado, <code>class</code> e <code>id</code>) coincidirem com a especificação dada.</p>

<a name="Condições de encadeamento/hierarquia" class="indice">Hierarquicos</a>
<h3>Condições de encadeamento/hierarquia</h3>

<p>Para se definir seletores condicionais para um contexto onde uma determinada hierarquia se apresente, basta definir os elementos que configuram esta hierarquia com espaço entre eles, conforme os exemplos abaixo:</p>

<pre class='editor codefull' data-name='editor_10' id='editor_10'>
  
&lt;!DOCTYPE html&gt;

h1 p { font-size: 30px; }
.texto a:hover { background-color: black; }
div.conteudo p span.pequeno { font-size: 10px; }
</pre>

<h2 style="width: 100%; border: 0; clear: both;"></h2>

<p>No exemplo <code>div.conteudo p span.pequeno</code> o atributo <code>font-size</code> será aplicado quando se encontrar no código HTML um padrão de hierarquia contendo uma tag <code>&lt;span&gt;</code> com <code>class="pequeno"</code>, dentro de qualquer tag <code>&lt;p&gt;</code>, que esteja dentro de uma tag <code>&lt;div&gt;</code> com <code>class="conteudo"</code>. Se todas estas condições forem cumpridas, o atributo será aplicado ao conteúdo dentro da tag <code>&lt;span&gt;</code>.</p>

<a name="Uso" class="indice">Uso</a>
<h3>Uso</h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_11"></iframe>
  </div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_11' id='editor_11'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { color: violet; }
     div.conteudo p span.pequeno {
       background-color: black;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;
      &lt;p&gt;
        &lt;span class=&quot;pequeno&quot;&gt;n&atilde;o aplica&lt;/span&gt;
      &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;conteudo&quot;&gt;
      &lt;p id=&quot;paragrafo&quot;&gt;
        outros conte&uacute;dos no meio das tags s&atilde;o irrelevantes para o seletor, e mesmo um id especificado n&atilde;o &eacute; relevante, uma vez que isso n&atilde;o foi determinado na declara&ccedil;&atilde;o das condi&ccedil;&otilde;es do CSS
        &lt;span class=&quot;pequeno&quot;&gt;aplica&lt;/span&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

<h2 style="width: 100%; border: 0; clear: both; margin-top: 25px;"></h2>

<p class="separabloco">É importante esclarecer que ao determinar uma condição (seja de encadeamento quanto simultânea na tag), o interpretador HTML buscará por padrões no código; Ao encontrar qualquer padrão que se assemelhe ao que foi determinado como condição, os atributos serão aplicados. A existência de outras características, outros elementos internos ou no mesmo nível hierarquico, classes, <code>style</code> ou quaisquer outras propriedades adicionais não interferem sobre o padrão identificado, se isto não estiver especificado na regra condicional especificada.</p>

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


    