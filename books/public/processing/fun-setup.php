<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Setup | O tecido das tecnologias criativas</title>
    <meta name="description" content="Setup | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Setup | O tecido das tecnologias criativas">
    <meta property="og:description" content="Setup | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="setup()" class="indice">setup()</a>
<h1 id='titulocapitulo'>setup()</h1>

  <p>A função <code>setup()</code> é parte, junto com a função <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a>, das duas funções auto-executadas do <span class="marca">Processing</span>, isto é, ambas são invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre as duas funções é que <code>setup()</code> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado, enquanto <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><code>frameRate()</code></a>.</p>

  <p>O papel da função <code>setup()</code> é configurar o contexto onde o código será computado, isto é, determinar suas dimensões com a função <a href="javascript:carrega('fun-size.php');"><code>size()</code></a>, inicializar valores para variáveis, definir registros iniciais como modalidade de definição das cores, espessura de linhas ou cores de preenchimento. Uma vez realizada esta atividade, a função <code>setup()</code> não tem qualquer outra utilidade, e nunca mais será invocada ao longo do código.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>


<div class="diagramahalf firstblock sketch borderon sketch borderon">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf sketch">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void setup() {
  size(150,150);
  background(#78008A);
  frameRate(20);
}
</pre>
</div>

 <h2 style="width: 100%; clear: both; border: 0; height: 15px;"></h2>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>setup()</code> não recebe nenhuma variável ou valor de entrada.</p>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>setup()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>




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

