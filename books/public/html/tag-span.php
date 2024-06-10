<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: span | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: span | Tecnologias Criativas">
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
  <a name="span" class="indice">span</a>
<h1 id='titulocapitulo'><code>&lt; span &gt;</code></h1>

  <p>A tag <code>&lt;span&gt;</code> é uma tag de uso genérico, sem nenhuma função específica. Ela é usada para modificar propriedades do texto, ou separar partes do texto, de forma que o código CSS ou a programação javascript possam atuar nestes trechos.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;span style=&quot;color: pink;&quot;&gt;conteúdo&lt;/span&gt;
</pre>

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
    &lt;style&gt;
      * { color: violet; }
      .tipoA { color: red; }
      .tipoB { color: cyan; }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    texto com &lt;span class=&quot;tipoA&quot;&gt;classe tipo A&lt;/span&gt;&lt;br&gt;
    texto com &lt;span class=&quot;tipoB&quot;&gt;classe tipo B&lt;/span&gt;&lt;br&gt;

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

    