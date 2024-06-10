<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: svg | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: style | Tecnologias Criativas">
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
  <a name="svg" class="indice">svg</a>
<h1 id='titulocapitulo'><code>&lt; svg &gt;</code></h1>

  <p>A tag <code>&lt;svg&gt;</code> cria um contexto gráfico <i>vetorial</i> (um espaço na tela) para inclusão de códigos SVG (Scalabe Vector Graphics) dentro do próprio código HTML. SVG é um formato de arquivos gráficos <i>vetoriais</i> construídos com uma estrutura e sintaxe XML (Extensible Markup Language, bem próxima ao próprio HTML), que lhe permite ser incluído no navegador por método <i>inline</i>, isto é, incluído através de seu próprio código dentro do HTML, e não como uma referência a um arquivo externo (como nos casos de em imagens como GIF, JPG ou PNG). Arquivos SVG externos também podem ser apresentados por navegadores compatíveis da mesma forma como os demais arquivos de imagem, através da tag <a href="tag-img.php"><code>&lt;img&gt;</code></a>.</p>

  <p>A sintaxe e propriedades do código SVG são apresentadas no volume de <a href="../svg" target="_self">SVG</a> desta obra.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


 &lt;svg width=&quot;100&quot; height=&quot;100&quot;&gt;
  &lt;circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;40&quot; stroke=&quot;green&quot; stroke-width=&quot;4&quot; fill=&quot;yellow&quot; /&gt;
 &lt;/svg&gt;
</pre>

<h2 class="separabloco"></h2>

  <p>Todo o contexto <code>&lt;svg&gt;</code> pode ser manipulado em tempo-real e de forma transparente através de CSS e Javascript, como se fosse o próprio código HTML. As tags SVG são incorporadas pelo navegador dentro do DOM (Document Object Model), e todas as propriedades do contexto SVG ficam acessíveis para o CSS e para a programação em Javascript.</p>

  <a name="Diferenças" class="indice">Diferenças entre svg e canvas</a>
<h2>Diferenças entre <code>&lt;svg&gt;</code> e <code>&lt;canvas&gt;</code></h2>

  <p>Tanto <code>&lt;svg&gt;</code> quanto <a href="tag-canvas.php"><code>&lt;canvas&gt;</code></a> criam contextos gráficos dentro do navegador. A diferença primordial entre eles é que o contexto de <code>&lt;svg&gt;</code> é <i>vetorial</i>, enquanto o de <a href="tag-canvas.php"><code>&lt;canvas&gt;</code></a> é <i>bitmap</i>. A segunda diferença é que o contexto <code>&lt;svg&gt;</code> possui um conjunto de instruções próprias, estruturadas em formato e sintaxe XML (Extensible Markup Language) para ser manipulado, enquanto <a href="tag-canvas.php"><code>&lt;canvas&gt;</code></a> é manipulado apenas por programação Javascript.</p>

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
    
  &lt;/head&gt;
  &lt;body&gt;
  
    &lt;svg width=&quot;100&quot; height=&quot;100&quot;&gt;
      &lt;circle cx=&quot;50&quot; cy=&quot;50&quot;
      r=&quot;40&quot; stroke=&quot;green&quot;
      stroke-width=&quot;4&quot; fill=&quot;yellow&quot; /&gt;
    &lt;/svg&gt;

  &lt;/body&gt;
&lt;/html&gt;
</pre>

  </div>


<hr class="limpa"></hr>


    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>


</div>
</body>

</html>

    