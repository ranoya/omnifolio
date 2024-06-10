<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Sintaxe | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Sintaxe | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Sintaxe | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Sintaxe | O código CSS, capítulo do livro O tecido das tecnologias criativas">
</head>
<body>

  <script>

    Predata_editor_3 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <a name="sintaxe" class="indice">Sintaxe</a>
  <div id="langtype"><code>{ } CSS</code></div>
  <h1 id='titulocapitulo'>Sintaxe</h1>

  <p>O código CSS pode ser definido para um documento HTML de 3 formas: através de um código separado carregado pela tag <code>&lt;link&gt;</code>; através do código construído no próprio documento definido pela tag <code>&lt;style&gt;</code>, ou pela propriedade <code>style</code> na própria tag.</p>

  <a name="codexterno" class="indice">Código externo</a>
  <h3>Código externo</h3>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;[ARQUIVO]&quot;&gt;
</pre>

<h2 style="width: 100%; clear: both;"></h2>

<p>O arquivo externo deve ser do tipo texto puro, com codificação UTF-8</p>

<a name="tagstyle" class="indice">Tag style</a>
<h3>Tag <code>&lt;style&gt;</code></h3>
<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;head&gt;
  &lt;style&gt;
    [código CSS]
  &lt;/style&gt;
&lt;/head&gt;
</pre>

<a name="propstyle" class="indice">Propriedade style</a>
<h3>Propriedade <code>style</code></h3>

<pre class='editor codefull' data-name='editor_3' id='editor_3'>


&lt;div style=&quot;[c&oacute;digo CSS]&quot;&gt;...&lt;/div&gt;
</pre>

<a name="ocss" class="indice">Código CSS</a>
<h2>Código CSS</h2>

<p>A construção do código CSS precisa obedecer a seguinte sintaxe:</p>

<table style="border: transparent none 0;">

  <tr>

    <th>sintaxe</th>
    <td><a href="seletorescss.php"><code>seletor</code></a></td>
    <td style="min-width: 20px;">{</td>
    <td> <code>atributos</code> </td>
    <td style="min-width: 20px;"> : </td>
    <td> <a href="unidadescss.php"><code>valores atribuídos</code></a></td>
    <td style="min-width: 20px;">;</td>
    <td style="min-width: 20px;">}</td>

  </tr>

  <tr>

    <td style="border: none transparent 0;"></td>
    <td style="border: none transparent 0;">tag, classe, id ou condição onde os atributos devem ser aplicados</td>
    <td style="border: none transparent 0; min-width: 20px;"></td>
    <td style="border: none transparent 0;">conjunto de atributos que serão modificados</td>
    <td style="border: none transparent 0; min-width: 20px;"></td>
    <td style="border: none transparent 0;">valores definidos para cada atributo</td>
    <td style="border: none transparent 0; min-width: 20px;"></td>
    <td style="border: none transparent 0; min-width: 20px;"></td>

  </tr>

  <tr>

    <th>valores</th>
    <td>tag<br>
        #id<br>
        .classe<br>
        :estado
    </td>

    <td style="vertical-align: top; min-width: 20px;">{</td>

    <td><a href="css-width.php"><code>width</code></a><br>
        <a href="css-position.php"><code>position</code></a><br>
        <a href="css-color.php"><code>color</code></a><br>
        <a href="css-border.php"><code>border</code></a>
    </td>

    <td style="min-width: 20px;">:<br>:<br>:<br>:</td>

    <td><code>100%</code><br>
        <code>static</code><br>
        <code>#FF0000</code><br>
        <code>1px</code>
    </td>

    <td style="min-width: 20px;">;<br>;<br>;<br>;</td>

    <td style="min-width: 20px;"><br><br><br><br>}</td>


  </tr>

    <tr>

    <th>uso</th>
    <td style="vertical-align: top;">a.meulink:hover
    </td>

    <td style="vertical-align: top; min-width: 20px;">{</td>

    <td><a href="css-background-color.php"><code>background-color</code></a><br>
        <a href="css-padding.php"><code>padding</code></a><br>
        <a href="css-color.php"><code>color</code></a><br>
    </td>

    <td style="min-width: 20px;">:<br>:<br>:</td>

    <td><code>cyan</code><br>
        <code>5px</code><br>
        <code>blue</code><br>
    </td>

    <td style="min-width: 20px;">;<br>;<br>;</td>

    <td style="min-width: 20px;"><br><br><br>}</td>


  </tr>


</table>


<a name="exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_4"></iframe>
  </div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     .meulink { 
         color: violet;
         background-color: green;
         padding: 5px;
       }
     .meulink:hover { 
         background-color: cyan;
         color: blue;
       }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a class="meulink"&gt;meu link&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>

<h2 style="width: 100%; clear: both;"></h2>

<a name="multiplas" class="indice">Definições multiplas</a>
<h3 class="separabloco"><br>Definições multiplas</h3>

<p>Para se fazer várias definições com os mesmos atributos, utilizamos o separador <code>,</code> entre cada elemento sendo definido. A sintaxe para definições multiplas é a seguinte:</p>

<pre class='editor codefull' data-name='editor_5' id='editor_5'>
  
div.meubloco, p#titulo, a:hover, h1 { 
  margin: 0;
  padding: 0;
}
</pre>

<h2 style="width: 100%; clear: both;"></h2>

<p>O código acima define atributos <a href="css-margin.php"><code>margin</code></a> e <a href="css-padding.php"><code>padding</code></a> iguais para <code>div.meubloco</code>, <code>p#titulo</code>, <code>a:hover</code>, e para a tag <code>&lt;h1&gt;</code>, de uma única vez.</p>

<a name="override" class="indice">Override</a>
<h2>Override</h2>

<p>Os atributos CSS podem ser re-escritos ou adicionados a uma mesma definição, ou a uma aplicação, através de técnicas conhecidas como css override. A primeira forma de override é no próprio código CSS, seja através de um código carregado externamente, de uma aplicação na propriedade <code>style</code>, ou na redefinição do código dentro da tag <code>&lt;style&gt;</code></p>

<p>Observe o código abaixo:</p>

<pre class='editor codefull' data-name='editor_6' id='editor_6'>
  
div, p, a, h1 { 
  margin: 0;
}

div {
  margin-top: 10px;
  padding: 10px;
}
</pre>

<h2 style="width: 100%; clear: both;"></h2>

<p>Neste código todas as margens da tag <code>&lt;div&gt;</code> são zeradas, e posteriormente a margem superior (<a href="css-margin-top.php"><code>margin-top</code></a>) é re-escrita com valor <code>10px</code>. Na primeira definição não havia nenhuma informação sobre o atributo <a href="css-padding.php"><code>padding</code></a>, mas na segunda, e apenas para a tag <code>&lt;div&gt;</code> os atributos de <a href="css-padding.php"><code>padding</code></a> são acrescidos à definição da tag. Este override de atributos poderia ter sido feito por um código externo, por um atributo <code>style</code> na própria tag, ou até por programação javascript.</p>

<p>Enquanto a propriedade <a href="css-margin-top.php"><code>margin-top</code></a> foi modificada pelo override da segunda definição, os atributos <a href="css-padding.php"><code>padding</code></a> foram <b>somados</b> a ela. O override como soma de atributos é um conceito importante para se entender as definições feitas pela diretriz <a href="css-media.php"><code>@media</code></a> ou pelas modificações de estado/comportamento feitas por <a href="seletorescss.php"><code>seletores</code></a> como <code>hover</code> ou <code>focus</code>. Nestas mudanças, ou nas mudanças operadas por <a href="css-media.php"><code>@media</code></a>, são operados overrides das definições originais.</p>

<a name="overaplicacao" class="indice">Override de aplicação</a>
<h3>Override de aplicação</h3>

<p>Também é possível fazer um override na aplicação do CSS sobre o código HTML, utilizando multiplas <code>class</code>, uma combinação de <code>class</code> e <code>id</code>, ou mesmo sobrepondo as definições através de uma propriedade <code>style</code>.</p>

<p>Para se somar os atributos de duas <code>class</code> diferentes em um mesmo elemento HTML, basta colocar as definições na propriedade <code>class</code> do elemento HTML separadas por espaço, como no exemplo abaixo:</p>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_7"></iframe>
  </div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_7' id='editor_7'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     .classeA { 
         color: blue;
         background-color: green;
         padding: 25px;
       }
     .classeB { 
         background-color: cyan;
         width: 150px;
         text-decoration: underline;
       }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div class="classeA classeB"&gt;meu link&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
</div>



  <h2 style="width: 100%; clear: both;"></h2>

<a name="prioridade" class="indice">Prioridade</a>
<h3 class="separabloco"><br>Prioridade</h3>

<p>Como as propriedades vão sendo re-escritas em uma ordem que o próprio navegador julga adequada, geralmente colocando especificações mais elaboradas e com mais condicionais como prioritárias sobre especificações gerais, pode-se fazer necessário apontar qual é a especificação com maior prioridade em um conjunto de overrides. Para isso, após a definição de um atributo, inclui-se a expressão <code>!important</code>, como no código abaixo:</p>

<pre class='editor codefull' data-name='editor_8' id='editor_8'>
  
p { 
     color: red !important;
  }
</pre>

<h2 style="width: 100%; clear: both;"></h2>

<p>Isto forçará esse atributo, mesmo quando houver override na definição.</p>

<a name="diretrizes" class="indice">Diretrizes</a>
<h2>Diretrizes</h2>

<p>As diretrizes CSS são instruções que permitem que elementos externos ou modificações sejam feitas ao próprio código em algumas condições. As diretrizes mais importantes e utilizadas são <a href="css-import.php"><code>@import</code></a>, utilizada para carregar instruções externas e ampliar as possibilidades do código CSS, <a href="css-font-face.php"><code>@font-face</code></a>, utilizada para carregar fontes externas, e <a href="css-media.php"><code>@media</code></a> utilizada para determinar pontos de quebra com novas regras para um documento responsivo que se adapte a diferentes mídias ou dimensões de tela</p>

<pre class='editor codefull' data-name='editor_9' id='editor_9'>
  
@font-face {
  font-family: "CustomFont";
  src: url("CustomFont.eot");
  src: url("CustomFont.woff") format("woff"),
  url("CustomFont.otf") format("opentype"),
  url("CustomFont.svg") format("svg");
}
</pre>


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


    