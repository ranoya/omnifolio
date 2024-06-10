<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>println | O tecido das tecnologias criativas</title>
    <meta name="description" content="println | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="println | O tecido das tecnologias criativas">
    <meta property="og:description" content="println | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWidth(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="println()" class="indice">println()</a>
<h1 id='titulocapitulo'>println()</h1>

  <p>A função <code>println()</code> dá saída de texto no console do Processing. Ela é útil para que o programador visualize valores de variáveis ou de dados de seu programa, e entenda o que está acontecendo nele. Ela se difere da função <a href="javascript:carrega('fun-print.php');"><code>print()</code></a> por pular a linha após lançar a saída no console.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
  
  println("mensagem para o console");
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>print(<span class="marca">mensagem</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">mensagem</span></td><td>String</td><td>Mensagem para ser exibida na console</td>
    </tr>
    
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>println()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>


  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-print.php');"><code>print()</code></a></td><td>Escreve uma mensagem no console</td>
    </tr>
  </table>




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

