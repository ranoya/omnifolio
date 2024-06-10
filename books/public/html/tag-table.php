<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: table | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: table | Tecnologias Criativas">
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
  <a name="table" class="indice">table</a>
<h1 id='titulocapitulo'><code>&lt; table &gt;</code></h1>

  <p>A tag <code>&lt;table&gt;</code> cria um espaço/bloco para a inserção de linhas e colunas em forma de uma tabela. A função da tag <code>&lt;table&gt;</code> é apenas delimitar este espaço, ficando reservado à tag <a href="tag-tr.php"><code>&lt;tr&gt;</code></a> a criação das linhas da tabela, e dentro desta às tags <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <a href="tag-td.php"><code>&lt;td&gt;</code></a> a criação das colunas.</p>

  <p>A única tag que deve existir diretamente dentro de <code>&lt;table&gt;</code> são suas linhas, determinadas pela tag <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>. A inclusão de qualquer outra tag dentro de <code>&lt;table&gt;</code> irá fazer com que a tabela não seja construída de forma correta no documento.</p>

  <a name="Estrutura das tabelas" class="indice">Estrutura das tabelas</a>
<h2>Estrutura das tabelas</h2>

  <p>A ordem hierarquica de toda tabela é a definição do bloco com a tag <code>table</code>, a definição de cada linha da tabela, dentro de <code>table</code> pelas tags <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>, e a definição das colunas pelas tags <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <a href="tag-td.php"><code>&lt;td&gt;</code></a>, dentro de cada <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>, conforme o código abaixo:


<div class="diagramahalf firstblock">
  <iframe id="View_editor_1"></iframe>
</div>


<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1'>
&lt;html&gt;
&lt;head&gt;
  &lt;style&gt;
     table { border: 1px dashed cyan; padding: 5px; }
     th { background-color: grey; color: violet; padding: 5; }
     tr { border: 1px solid red; padding: 5px; }
     td { border: 1px solid violet; padding: 5px; color: violet; }
  &lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;  
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;A&lt;/th&gt;
    &lt;th&gt;B&lt;/th&gt;
    &lt;th&gt;C&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;2&lt;/td&gt;
    &lt;td&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;4&lt;/td&gt;
    &lt;td&gt;5&lt;/td&gt;
    &lt;td&gt;6&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;7&lt;/td&gt;
    &lt;td&gt;8&lt;/td&gt;
    &lt;td&gt;9&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;10&lt;/td&gt;
    &lt;td&gt;11&lt;/td&gt;
    &lt;td&gt;12&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>

<h2></h2>
<p>O número de colunas precisa coincidir em cada linha, ou a tabela também não será construída corretamente. Se uma linha possuir 3 colunas, e outra linha possuir 4, a tabela ficará deformada.
</p>


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

    