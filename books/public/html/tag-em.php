<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: em | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: em | Tecnologias Criativas">
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
  <a name="em" class="indice">em</a>
<h1 id='titulocapitulo'><code>&lt; em &gt;</code></h1>

  <p>A tag <code>&lt;em&gt;</code> renderiza o texto contido nela de forma oblíqua (itálico), e informa a mecanismos de busca e outras plataformas que aquele conteúdo tem maior significação do que os demais conteúdos apresentados no documento. <code>&lt;em&gt;</code> é uma tag semântica, e atua tanto visualmente quanto em nível de meta-informação para outros mecanismos da web. Os resultados visuais são idênticos ao da tag <a href="tag-i.php"><code>&lt;i&gt;</code></a>, mas esta não produz nenhuma meta-informação, ficando restrita a formatação de texto.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


meu texto com uma &lt;em&gt;palavra&lt;/em&gt; em itálico e com peso semântico.
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
      * { color: white }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Este conte&uacute;do n&atilde;o est&aacute; em itálico&lt;br&gt;
    &lt;em&gt;Este conte&uacute;do est&aacute; em itálico&lt;/em&gt; e possui peso semântico&lt;br&gt;
    E o que mais &lt;em&gt;estiver dentro 
      &lt;p&gt;tamb&eacute;m est&aacute;&lt;/p&gt;
    em itálico&lt;/em&gt; e possui peso semântico&lt;br&gt;
    Os resultados visuais s&atilde;o indiferentes&lt;br&gt;
    do uso de &lt;i&gt;i&lt;/i&gt;

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

    