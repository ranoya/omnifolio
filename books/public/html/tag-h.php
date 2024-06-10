<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: h | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: h | Tecnologias Criativas">
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
  <a name="hs" class="indice">h1, h2, h3, h4, h5 e h6</a>
<h1 id='titulocapitulo'><code>&lt; h1 &gt;</code>, <code>&lt; h2 &gt;</code>, <code>&lt; h3 &gt;</code>, <code>&lt; h4 &gt;</code>,<code>&lt; h5 &gt;</code> e <code>&lt; h6 &gt;</code></h1>

  <p>As tags <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>,<code>&lt;h5&gt;</code> e <code>&lt;h6&gt;</code> criam blocos que são compreendido como títulos e subtítulos, hierarquicamente, pelos navegadores, idealmente para agrupar um pequeno texto. Ainda que este seja o propósito original da tag, as tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> podem conter qualquer tipo de nó na estrutura HTML, não apenas texto, recebendo outras tags de bloco como <a href="tag-div.php"><code>&lt;div&gt;</code></a>, <a href="tag-p.php"><code>&lt;p&gt;</code></a>, ou mesmo <a href="tag-table.php"><code>&lt;table&gt;</code></a>; as tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> não estão limitadas a conter apenas tags inline/conteúdo como nós internos.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;h2&gt;Subt&iacute;tulo&lt;/h2&gt;
</pre>

<h2 class="separabloco"></h2>

  <p>As tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> carregam pesos semânticos, indicando que <code>&lt;h1&gt;</code> é hierarquicamente mais importante do que <code>&lt;h2&gt;</code>, e assim por diante. Os navegadores e, principalmente, os mecanismos de busca compreendem que estas tags carregam conceitos-chaves que descrevem o conteúdo, como de fato títulos e subtítulos. O ideal é mantê-las para esta finalidade.</p>

  <p>Seu comportamento visual não é diferente de nenhuma outra tag de bloco. Como todas elas, as tags <code>&lt;h1&gt;</code> -  <code>&lt;h6&gt;</code> tendem a ocupar todo o espaço disponível para elas na tela do navegador, se não houver alteração em seus atributos via CSS.</p>
  
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
      h1,h2 { 
        color: violet; 
        border: 1px solid violet; 
        } 
   &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;h1&gt;T&iacute;tulo&lt;/h1&gt;
    &lt;h2&gt;Subt&iacute;tulo&lt;/h2&gt;
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

    