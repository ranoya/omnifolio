<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: br | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: br | Tecnologias Criativas">
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
  <a name="br" class="indice">br</a>
<h1 id='titulocapitulo'><code>&lt; br &gt;</code></h1>


  <p>A tag <code>&lt;br&gt;</code> pula uma linha. Linhas puladas pela tecla Enter &crarr; no código, ou no conteúdo digitado no código HTML, são ignoradas pelo navegador. Para que uma linha seja pulada, é ncessário utilizar a tag <code>&lt;br&gt;</code></p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


primeira linha &lt;br&gt;segunda linha.
</pre>

<h2 class="separabloco"></h2>
<p class="separabloco">A tag <code>&lt;br&gt;</code> faz parte de um pequeno conjunto de tags que constitui um nó terminal na estrutura de árvore do documento (DOM), não existindo um fechamento do tipo <code>&lt;/br&gt;</code></p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock" style="float: right">
  <iframe id="View_editor_2"></iframe>
  </div>


  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      * { color: violet; }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Primeira linha digitada
    Segunda linha digitada
    &lt;br&gt;
    Finalmente pulou de linha

  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>




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

    