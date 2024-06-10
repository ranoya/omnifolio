<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>mouseWheel | O tecido das tecnologias criativas</title>
    <meta name="description" content="mouseWheel | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="mouseWheel | O tecido das tecnologias criativas">
    <meta property="og:description" content="mouseWheel | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="mouseWheel()" class="indice">mouseWheel()</a>
<h1 id='titulocapitulo'>mouseWheel()</h1>

  <p>A função <code>mouseWheel()</code> é uma função invocada pelo contexto do <span class="marca">Processing</span> toda vez que o scroll do mouse é acionado, atribuíndo a uma variável de entrada, do tipo <span class="marca">MouseEvent</span> as propriedades desta ação. Os valores podem ser positivos ou negativos em função da direção do scroll.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void draw() {

} 

void mouseWheel(MouseEvent event) {
  float e = event.getCount();
  println(e);
}
</pre>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <p><code>mouseWheel()</code> recebe uma variável do tipo <span class="marca">MouseEvent</span>, ao qual serão atribuídas valores para as ações do mouse. Esta variável não precisa conter nenhum dado de entrada para <code>mouseWheel()</code>.</p>

<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


void mouseWheel(MouseEvent event) {
  </pre><a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>mouseWheel()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>



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

