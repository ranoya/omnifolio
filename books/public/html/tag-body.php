<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: body | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: body | Tecnologias Criativas">
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
   <a name="body" class="indice"><code>body</code></a>
  <h1 id='titulocapitulo'><code>&lt; body &gt;</code></h1>

  <p>A tag <code>&lt;body&gt;</code> contem todo o espectro de elementos visíveis do documento HTML. Tudo aquilo que deve aparecer na tela do navegador deverá estar contido dentro de <code>&lt;body&gt;</code>. Em síntese, a tela "em branco" no navegador é o próprio <code>&lt;body&gt;</code>. 

 <a name="Uso corrente" class="indice">Uso corrente</a>
  <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;body&gt;

  [C&Oacute;DIGO HTML]

&lt;/body&gt;
</pre>

  <h2 class="separabloco"></h2>

  <p>Por representar a integridade (visível) do documento, a tag <code>&lt;body&gt;</code> se confunde visualmente com a própria tag <a href="tag-html.php"><code>&lt;html&gt;</code></a>, que, ao contrário de <code>&lt;body&gt;</code>, também incorpora os elementos invisíveis/metadados definidos na tag <a href="tag-head.php"><code>&lt;head&gt;</code></a>.</p>

  <p>Via de regra, não há distinções visuais entre <code>&lt;body&gt;</code> e <a href="tag-html.php"><code>&lt;html&gt;</code></a>, mas, em certas circunstâncias quando as propriedades de <code>&lt;body&gt;</code> são alteradas, é possível observar sua distinção, mesmo visualmente.</p>

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

    