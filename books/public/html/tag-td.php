<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: td | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: td | Tecnologias Criativas">
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
  <a name="td" class="indice">td</a>
<h1 id='titulocapitulo'><code>&lt; td &gt;</code></h1>

  <p>A tag <code>&lt;td&gt;</code> cria uma coluna para inserção de conteúdos, junto a diversas outras colunas em uma mesma linha (definida pela tag <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>), dentro do bloco de uma tabela (definida pela tag <a href="tag-table.php"><code>&lt;table&gt;</code></a>). As tags <code>&lt;td&gt;</code> precisam sempre estar dentro de tags <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>, que por sua vez precisam estar sempre dentro de uma tag <a href="tag-table.php"><code>&lt;table&gt;</code></a>.</p> 

  <p>Não há nenhuma diferença formal entre a tag <code>&lt;td&gt;</code> e a tag <a href="tag-th.php"><code>&lt;th&gt;</code></a>, usada para definir "cabeçalhos" para a tabela. As diferenças são apenas semnânticas (a tag <a href="tag-th.php"><code>&lt;th&gt;</code></a> descreve uma célula que será entendida como um "cabeçalho", enquanto a tag <code>&lt;td&gt;</code> descreve uma célula comum de conteúdo), e a possibilidade de se definir atributos diferentes a elas via CSS.
  </p>

  <a name="Estrutura das tabelas" class="indice">Estrutura das tabelas</a>
<h2>Estrutura das tabelas</h2>

  <p>A ordem hierarquica de toda tabela é a definição do bloco com a tag <a href="tag-table.php"><code>&lt;table&gt;</code></a>, a definição de cada linha da tabela, dentro de <a href="tag-table.php"><code>&lt;table&gt;</code></a> pelas tags <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>, e a definição das colunas pelas tags <a href="tag-th.php"><code>&lt;th&gt;</code></a> ou <code>&lt;td&gt;</code>, dentro de cada <a href="tag-tr.php"><code>&lt;tr&gt;</code></a>, conforme o código abaixo:

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



<a name="colspan" class="indice">COLSPAN / ROWSPAN</a>
<h2><br><code>COLSPAN</code> / <code>ROWSPAN</code></h2>
<p>O número de colunas precisa coincidir em cada linha, ou a tabela também não será construída corretamente. Se uma linha possuir 3 colunas, e outra linha possuir 4, a tabela ficará deformada.
</p>

<p>A propriedade <code>colspan</code> é utilizada para unir células/colunas em uma mesma linha. O resultado desta união continua precisando respeitar a consistência de colunas totais das demais linhas da tabela.</p>

<p>Já <code>rowspan</code> é utilizada para unir células/colunas em linhas abaixo. Da mesma forma, o resultado desta união precisa respeitar toda a consistência lógica estabelecida entre linhas e colunas da tabela. A aplicação de <code>colspan</code> e <code>rowspan</code> podem ser observadas no exemplo abaixo:</p>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

<div class="diagramahalf firstblock">
  <iframe id="View_editor_2"></iframe>
</div>


<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2'>
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
    &lt;td colspan=2&gt;2&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td colspan=2&gt;3&lt;/td&gt;
    &lt;td&gt;4&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td rowspan=2&gt;5&lt;/td&gt;
    &lt;td&gt;6&lt;/td&gt;
    &lt;td&gt;7&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;8&lt;/td&gt;
    &lt;td&gt;9&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td colspan=3&gt;10&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;11&lt;/td&gt;
    &lt;td colspan=2 rowspan=2&gt;12&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;13&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>


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

    