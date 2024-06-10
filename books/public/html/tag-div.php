<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>HTML: div | Tecnologias Criativas</title>
    <meta name="description" content="HTML: div | O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="HTML: div | Tecnologias Criativas">
    <meta property="og:description" content="HTML: div | O código HTML, capítulo do livro O tecido das tecnologias criativas">
</head>
<body>
    <script>
        sumarionsize = 220;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>
  <a name="div" class="indice">div</a>
<h1 id='titulocapitulo'><code>&lt; div &gt;</code></h1>

  <p>A tag <code>&lt;div&gt;</code> cria um bloco genérico para agrupar conteúdos. Ela é equivalente, no grupo de tags de bloco, ao que a tag <a href="tag-span"><code>&lt;span&gt;</code></a> representa no grupo de tags inline/conteúdo. A função da tag <code>&lt;div&gt;</code> é separar os conteúdos do código HTML em divisões de espaço/conjunto, sem qualquer peso semântico.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>

&lt;div class=&quot;rodape&quot;&gt;Meu conte&uacute;do ou tags&lt;/div&gt;
</pre>

<h2 class="separabloco"></h2>

  <p>Seu comportamento visual não é diferente de nenhuma outra tag de bloco. Como todas elas, a tag <code>&lt;div&gt;</code> tende a ocupar todo o espaço disponível para ela na tela do navegador, se não houver alteração em seus atributos via CSS.</p>
  
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
      div { 
        color: violet;
        border: 1px solid violet; 
      }
   &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;este &eacute; um conte&uacute;do&lt;/div&gt;
    &lt;div&gt;este &eacute; outro conte&uacute;do&lt;/div&gt;
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

    