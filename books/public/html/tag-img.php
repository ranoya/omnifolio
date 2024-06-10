<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: img | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: img | Tecnologias Criativas">
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
  <a name="img" class="indice">img</a>
<h1 id='titulocapitulo'><code>&lt; img &gt;</code></h1>

  <p>A tag <code>&lt;img&gt;</code> apresenta na tela do navegador uma imagem, carregada a partir de um arquivo externo ao código HTML. Esta imagem pode ser apontada na propriedade <code>src</code>, de forma absoluta (uma url fixa, como "https://www.ranoya.com/imagens/logotipo.png"), ou relativa ao documento HTML (como "../imagens/logotipo.png").</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;img src=&quot;../imagens/logotipo.svg&quot;&gt;
</pre>

<h2 class="separabloco"></h2>
  <p class="separabloco">A tag <code>&lt;img&gt;</code> faz parte de um pequeno conjunto de tags que constitui um nó terminal na estrutura de árvore do documento (DOM), não existindo um fechamento do tipo <code>&lt;/img&gt;</code></p>

  <p>Os arquivos de imagem reconhecidos pelos navegadores atuais são o JPG, PNG, GIF e SVG. Navegadores antigos não interpretam arquivos SVG, e os mais antigos ainda em uso não conseguem lidar com transparências em arquivos PNG.</p>

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
    &lt;img src=&quot;https://www.ranoya.com/Assets/Logotipos/UFPESmall.png&quot;&gt;
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

    