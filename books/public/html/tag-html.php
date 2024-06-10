<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: html | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: html | Tecnologias Criativas">
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
  <a name="thtml" class="indice">html</a>
<h1 id='titulocapitulo'><code>&lt; html &gt;</code></h1>

  <p>A tag <code>&lt;html&gt;</code> é o nó pai de toda a estrutura de árvore que constitui o documento HTML. Ela representa uma um nível invariável do documento que antecede tudo que é aprentado nele. A tag <code>&lt;html&gt;</code> não é visível normalmente, pois é sobreposta em termos visuais pela tag <a href="tag-body.php"><code>&lt;body&gt;</code></a>, que incorpora todo o aspecto visual do código. Contudo, dependendo das características atribuidas a tag <a href="tag-body.php"><code>&lt;body&gt;</code></a>, a tag <code>&lt;html&gt;</code> pode se tornar visível. Esta situação é comum nos navegadores atuais com o efeito de <i>bounce</i> nas bordas do documento quando são movidos rapidamente pelo <i>scroll</i> do mouse ou do toque em dispositivos mobile, ou mesmo quando aplicamos propriedades de <code>margin</code> ou <code>padding</code> ao <a href="tag-body.php"><code>&lt;body&gt;</code></a></p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;html lang=&quot;pt&quot;&gt;

  &lt;head&gt;
  &lt;/head&gt;

  &lt;body&gt;
  &lt;/body&gt;

&lt;/html&gt;
</pre>

<h2 class="separabloco"></h2>
  <p>A visualidade do <code>&lt;html&gt;</code> pode ser observada neste exemplo:</p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

 
  <div class="diagramahalf firstblock">
    <iframe id="View_editor_2"></iframe>
  </div>


  <div class="diagramahalf">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;html style=&quot;background-color: black;&quot;&gt;
  
  &lt;body style=&quot;background-color: red; padding: 10px; margin: 20px;&quot;&gt;

    A tag html &eacute; preta&lt;br&gt;
    A tag body &eacute; vermelha&lt;br&gt;

  &lt;/body&gt;

&lt;/html&gt;
</pre>
 </div>

  <a name="Tags filhas" class="indice">Tags filhas</a>
  <hr style="border: 0; width: 100%; clear: both;"></hr>
<h2>Tags filhas</h2>

  <p>Por convenção, a tag <code>&lt;html&gt;</code> só deve possuir 2 nós filhos, a tag <a href="tag-head.php"><code>&lt;head&gt;</code></a> e a tag <a href="tag-body.php"><code>&lt;body&gt;</code></a>. Quaisquer elementos do documento, visíveis ou invisíveis, devem fazer parte destas duas tags filhas de <code>&lt;html&gt;</code>.</p>


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

    