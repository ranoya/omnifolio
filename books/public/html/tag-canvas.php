<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: canvas | Tecnologias Criativas</title>
    
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
  <a name="canvas" class="indice">canvas</a>
<h1 id='titulocapitulo'><code>&lt; canvas &gt;</code></h1>

  <p>A tag <code>&lt;canvas&gt;</code> cria um contexto gráfico <i>bitmap</i> (um espaço na tela) para construção de imagens através de programação em javascript no HTML.</p>

  <p>A sintaxe e propriedades do <code>&lt;canvas&gt;</code> são apresentadas no volume <a href="../canvas" target="_self">Canvas</a> desta obra.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


 &lt;canvas id=&quot;meuCanvas&quot;&gt;&lt;/canvas&gt;
</pre>

  <h2 class="separabloco"></h2>
  
  <p>Todo o código do <code>&lt;canvas&gt;</code> pode ser manipulado em tempo-real e de forma transparente através de programação Javascript.</p>

  <a name="Diferenças entre" class="indice">Diferenças entre svg e canvas</a>
<h2>Diferenças entre <code>&lt;svg&gt;</code> e <code>&lt;canvas&gt;</code></h2>

  <p>Tanto <a href="tag-svg.php"><code>&lt;svg&gt;</code></a> quanto <code>&lt;canvas&gt;</code> criam contextos gráficos dentro do navegador. A diferença primordial entre eles é que o contexto de <a href="tag-svg.php"><code>&lt;svg&gt;</code></a> é <i>vetorial</i>, enquanto o de <code>&lt;canvas&gt;</code> é <i>bitmap</i>. A segunda diferença é que o contexto <a href="tag-svg.php"><code>&lt;svg&gt;</code></a> possui um conjunto de instruções próprias, estruturadas em formato e sintaxe XML (Extensible Markup Language) para ser manipulado, enquanto <code>&lt;canvas&gt;</code> é manipulado apenas por programação Javascript.</p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">

<iframe id="View_editor_2"></iframe>

  </div>

  <div class="diagramahalf">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;canvas id=&quot;meuCanvas&quot;&gt;&lt;/canvas&gt;

&lt;script&gt;
var canvas = document.getElementById(&quot;meuCanvas&quot;);
var ctx = canvas.getContext(&quot;2d&quot;);
ctx.fillStyle = &quot;#FF0000&quot;;
ctx.fillRect(0, 0, 80, 80);
&lt;/script&gt;
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

    