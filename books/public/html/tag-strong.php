<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: strong | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: strong | Tecnologias Criativas">
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
  <a name="strong" class="indice">strong</a>
<h1 id='titulocapitulo'><code>&lt; strong &gt;</code></h1>

  <p>A tag <code>&lt;strong&gt;</code> renderiza o texto contido nela com um reforço gráfico (negrito), e informa a mecanismos de busca e outras plataformas que aquele conteúdo tem maior significação do que os demais conteúdos apresentados no documento. <code>&lt;strong&gt;</code> é uma tag semântica, e atua tanto visualmente quanto em nível de meta-informação para outros mecanismos da web. Os resultados visuais são idênticos ao da tag <a href="tag-b.php"><code>&lt;b&gt;</code></a>, mas esta não produz nenhuma meta-informação, ficando restrita a formatação de texto.

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


meu texto com uma &lt;strong&gt;palavra&lt;/strong&gt; em negrito e com peso semântico.
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
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Este conte&uacute;do n&atilde;o est&aacute; em negrito&lt;br&gt;
    &lt;strong&gt;Este conte&uacute;do est&aacute; em negrito&lt;/strong&gt; e possui peso semântico&lt;br&gt;
    E o que mais &lt;strong&gt;estiver dentro 
      &lt;p&gt;tamb&eacute;m est&aacute;&lt;/p&gt;
    em negrito&lt;/strong&gt; e possui peso semântico&lt;br&gt;
    Os resultados visuais s&atilde;o indiferentes&lt;br&gt;
    do uso de &lt;b&gt;b&lt;/b&gt;

  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>



</div>
<hr class="limpa"></hr>

    </div>

    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</body>

</html>

    