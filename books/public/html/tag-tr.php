<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: tr | Tecnologias Criativas</title>
    
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: tr | Tecnologias Criativas">
    <meta property="og:description" content="Guia de referencia de HTML">
    
</head>
<body>

    <script>
        sumarionsize = 220;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>
  <a name="tr" class="indice">tr</a>
<h1 id='titulocapitulo'><code>&lt; tr &gt;</code></h1>

  <p>A tag <code>&lt;tr&gt;</code> cria uma linha dentro de uma tag  <a href="tag-table.php"><code>&lt;table&gt;</code></a> e acomoda diversas tags <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <a href="tag-td.php"><code>&lt;td&gt;</code></a> que criam colunas dentro das linhas, formando uma tabela no documento.</p>

  <p>As únicas tags que devem existir diretamente dentro de <code>&lt;tr&gt;</code> são <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <a href="tag-td.php"><code>&lt;td&gt;</code></a>, responsáveis pela criação das colunas da tabela. Qualquer outra tag inserida dentro de <code>&lt;tr&gt;</code> resultará em uma deformação da tabela.</p>

  <a name="Estrutura das tabelas" class="indice">Estrutura das tabelas</a>
<h2>Estrutura das tabelas</h2>

  <p>A ordem hierarquica de toda tabela é a definição do bloco com a tag <a href="tag-table.php"><code>&lt;table&gt;</code></a>, a definição de cada linha da tabela, dentro de <a href="tag-table.php"><code>&lt;table&gt;</code></a> pelas tags <code>&lt;tr&gt;</code>, e a definição das colunas pelas tags <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <a href="tag-td.php"><code>&lt;td&gt;</code></a>, dentro de cada <code>&lt;tr&gt;</code>, conforme o código abaixo:


<div class="diagramahalf firstblock">
  <iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1'>
&lt;html&gt;
&lt;head&gt;
  &lt;style&gt;
     table { border: 1px dashed cyan; padding: 5px; }
     th { background-color: grey; color: white; padding: 5; }
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

<p>A tag <code>&lt;tr&gt;</code> fica invisível no código, como pode se observar no exemplo acima, mas ela estrutura a formatação da tabela, definindo as dimensões de cada linha exibida.</p>



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

    