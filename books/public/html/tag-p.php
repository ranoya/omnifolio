<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: p | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: p | Tecnologias Criativas">
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
  <a name="p" class="indice">p</a>
<h1 id='titulocapitulo'><code>&lt; p &gt;</code></h1>

  <p>A tag <code>&lt;p&gt;</code> cria um bloco compreendido como um parágrafo pelos navegadores, idealmente para agrupar textos. Ainda que este seja seu propósito original, a tag <code>&lt;p&gt;</code> pode conter qualquer tipo de nó na estrutura HTML, não apenas texto, recebendo outras tags de bloco como <a href="tag-div"><code>&lt;div&gt;</code></a>, <a href="tag-h"><code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code></a>, ou mesmo <a href="tag-table"><code>&lt;table&gt;</code></a>; a tag <code>&lt;p&gt;</code> não está limitada a conter tags inline/conteúdo como nós internos.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;p class=&quot;textosimples&quot;&gt;meu texto.&lt;/p&gt;
</pre>

<h2 class="separabloco"></h2>

  <p>Não há nenhum peso semântico sobre a tag <code>&lt;p&gt;</code>, como se encontra nas tags <a href="tag-h"><code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code></a> ou <a href="tag-strong"><code>&lt;strong&gt;</code></a>, mas os navegadores, e principalmente os mecanismos de busca, compreendem que a tag essencialmente descreve um conteúdo de texto. O ideal é manter a tag <code>&lt;p&gt;</code> para uso com parágrafos de texto, se possível.</p>

  <p>Seu comportamento visual não é diferente de nenhuma outra tag de bloco. Como todas elas, a tag <code>&lt;p&gt;</code> tende a ocupar todo o espaço disponível para ela na tela do navegador, se não houver alteração em seus atributos via CSS.</p>
  
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
    p { 
      color: violet; 
      border: 1px solid violet;
    } 
   &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;p&gt;este &eacute; um conte&uacute;do&lt;/p&gt;
    &lt;p&gt;este &eacute; outro conte&uacute;do&lt;/p&gt;
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

    