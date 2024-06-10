<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: style | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: style | Tecnologias Criativas">
    <meta property="og:description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    
</head>
<body>

    <script>
        sumarionsize = 220;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>
  <a name="style" class="indice">style</a>
<h1 id='titulocapitulo'><code>&lt; style &gt;</code></h1>

  <p>A tag <code>&lt;style&gt;</code> abre espaço para inclusão de código CSS dentro do próprio código HTML. A sintaxe e propriedades do código CSS são apresentadas no volume de <a href="../css" target="_self">CSS</a> desta obra.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;style&gt;

   [C&Oacute;DIGO CSS]
   
&lt;/style&gt;
</pre>

  <a name="style ou link" class="indice">style ou link</a>
<h2><code>&lt;style&gt;</code> ou <code>&lt;link&gt;</code></h2>

  <p>Carregar um CSS de um arquivo externo, ou definir o CSS no próprio documento é uma questão estratégica de projeto. Além da preferência pessoal do programador, também estão em jogo a reutilização do código por outras páginas, o trabalho de manutenção e alteração deste código quando suas características são utilizadas em vários documentos, e o intrincamento resultante de alterações quando vários documentos compartilham de um mesmo recurso.</p>

  <p>Considere a seguinte situação: um website conterá 18 páginas. Todas estas páginas possuem as mesmas características em seu layout, como cores, posições, dimensionamentos, etc; a única mudança entre cada uma delas é o conteúdo em si, que é atribuição do código HTML, e não do código CSS. Neste caso, parece interessante que todos os documentos HTML carreguem um único documento CSS contendo as especificações visuais de que todos compartilham. Uma cor alterada neste documento, e todas as 18 páginas do websites receberão automaticamente a mesma modificação. Neste sentido, parece mais inteligente adotar uma abordagem de separação dos códigos.</p>

  <p>Contudo, se há alguma coisa muito específica, que apenas uma única página utilizará/precisa, não parece prático nem útil criar mais um arquivo e carregá-lo, se isso pode ser incluído no próprio código HTML.</p>

  <a name="Utilizando as duas abordagens ao mesmo tempo" class="indice">Utilizando as duas abordagens ao mesmo tempo</a>
<h2>Utilizando as duas abordagens ao mesmo tempo</h2>

  <p>Nada impede que um código seja carregado externamente pela tag <a href="tag-link.php"><code>&lt;link&gt;</code></a>, e mais definições CSS sejam adicionadas pela tag <code>&lt;style&gt;</code> no próprio código HTML. No exemplo abaixo, um código CSS externo carrega um conjunto de definições, mas não há nada nele estabelecido para a tag <a href="tag-h.php"><code>&lt;h6&gt;</code></a>, que tem suas características definidas na tag <code>&lt;style&gt;</code></p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">

<iframe id="View_editor_2"></iframe>

  </div>

  <div class="diagramahalf">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://www.ranoya.com/aulas/webdesign/playgroundDocs/html.css&quot;&gt;
    &lt;style&gt;
      h6 {
        color: red;
      }
    &lt;/style&gt;

  &lt;/head&gt;
  &lt;body&gt;
  
    &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Passe o mouse nesse link&lt;/a&gt;&lt;/p&gt;
    &lt;h6&gt;este bloco foi definido por style&lt;/h6&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

  </div>



<a name="Override" class="indice">Override</a>
<h2 style="display: inline-block; width: 100%; clear: both;"></h2>

<h2>Override</h2>

<p>Override é uma técnica onde se sobrepõem atributos CSS definidos originalmente com novos atributos, seja por um código carregado externamente, por um CSS atribuído a uma tag pela propriedade <code>style</code> das tags, ou até por javascript. É possível, portanto, fazer override de um código externo por um código definido no próprio documento, mas a ordem/prioridade de aplicação é sempre complexa no CSS, residindo a regra mais específica com base na quantidade de filtros de especificidade definidos. Em última instância, quando não há diferenças entre as especificidades, a última regra CSS carregada, é a que será utilizada, e no geral, as regras estabelecidas no próprio documento são sempre as primeiras.</p>
  
</div>
<hr class="limpa"></hr>


    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>


    </div>
</body>

</html>

    