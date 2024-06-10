<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>size | O tecido das tecnologias criativas</title>
    <meta name="description" content="size | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="size | O tecido das tecnologias criativas">
    <meta property="og:description" content="size | O código Processing, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(<?php if($_GET['theme'] == 'dgen-darkmode') { echo "#40144D"; } else { echo "#FFFFFF"; } ?>); frameRate(20); stroke(#78008A); fill(#78008A); strokeWeight(1); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="size()" class="indice">size()</a>
<h1 id='titulocapitulo'>size()</h1>

  <p>A função <code>size()</code> define o tamanho (em pixels) do sketch e qual o sistema de renderização utilizado. Ela é utilizada, geralmente, dentro da função auto-invocada <a href="javascript:carrega('fun-setup.php');"><code>setup()</code></a>.</p>

  <a name="Uso" class="indice">Uso</a>
<h2>Uso</h2>

<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void setup() {

  size(500,400);
  
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <p><code>size(<span class="marca">w</span><span class="marca">,h</span><span class="optionalattr">,render</span><span class="optionalattr">,arquivo</span>);</code></p>

  <a name="Entradas" class="indice">Entradas</a>
<h2>Entradas</h2>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>valor</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">w</span></td><td>int</td><td>mínimo: <span class="marca">100</span> pixels</td><td>Dimensão horizontal em pixels</td>
    </tr>
     <tr>
      <td><span class="marca">h</span></td><td>int</td><td>mínimo: <span class="marca">100</span> pixels</td><td>Dimensão vertical em pixels</td>
    </tr>
    <tr>
      <td><span class="marca">render</span></td><td>sigla</td><td><span class="marca">P2D</span><br><span class="marca">P3D</span><br><span class="marca">PDF</span><br><span class="marca">SVG</span></td><td>Tipo de Render Engine. Se não declarado, utilizará o proprio sistema do <span class="marca">Processing</span>.</td>
    </tr>
    <tr>
      <td><span class="marca">arquivo</span></td><td>nome de arquivo</td><td>meuarquivo.pdf<br>meuarquivo.svg<br>meuarquivo.jpg</td><td>Arquivo de saída, dependendo do tipo de <span class="marca">render</span></td>
    </tr>
    
    
  </table>

  <a name="Retorno" class="indice">Retorno</a>
<h2>Retorno</h2>

  <p><code>size()</code> é uma função do tipo <code>void</code>, e portanto não retorna nenhum valor.</p>

  <a name="Observações" class="indice">Observações</a>
<h2>Observações</h2>

  <p><code>size()</code> não aceita variáveis como dados de entrada. Os valores precisam ser explícitos, pois o tamanho do sketch é definido antes de qualquer informação ser processada.</p>

  <p>O uso do render <span class="marca">P2D</span> fará com que o processamento gráfico seja jogado para a placa de vídeo do computador. O <span class="marca">P2D</span> é geralmente mais rápido do que o engine padrão do <span class="marca">Processing</span>. Na grande maioria dos casos, a diferença de performance é irrelevante, mas dependendo do que é processado, talvez seja conveniente utilizá-lo.</p>

  <p>Para utilização de renders como <span class="marca">PDF</span> e <span class="marca">SVG</span>, é necessário carregar bibliotecas externas, e há diversos métodos para gerar os arquivos, além da própria função <code>size()</code>.</p>




  <a name="SVG" class="indice">SVG</a>
<h2>SVG</h2>

  <p>O exemplo abaixo gera um arquivo <span class="marca">SVG</span> a partir de uma função <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> que se encerra após o desenho. A função <a href="javascript:carrega('fun-exit.php');"><code>exit()</code></a> é essencial para que o arquivo seja fechado.</p>

<div class="codefull">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


import processing.svg.*;

void setup() {
  size(400, 400, SVG, "arquivo.svg");
}

void draw() {
  line(0, 0, width/2, height);
  exit();
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


<a name="PDF" class="indice">PDF</a>
<h2>PDF</h2>

<p>O exemplo abaixo gera um arquivo <span class="marca">PDF</span> a partir de uma função <a href="javascript:carrega('fun-draw.php');"><code>draw()</code></a> que se encerra após o desenho. A função <a href="javascript:carrega('fun-exit.php');"><code>exit()</code></a> é essencial para que o arquivo seja fechado.</p>

<div class="codefull">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">


import processing.pdf.*;

void setup() {
  size(400, 400, PDF, "arquivo.pdf");
}

void draw() {
  line(0, 0, width/2, height);
  exit();
}
</pre>
</div>

<h2 style="width: 100%; clear: both; height: 15px;"></h2>


  <a name="Funções associadas" class="indice">Funções associadas</a>
<h2>Funções associadas</h2>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-exit.php');"><code>exit()</code></a></td><td>Finaliza o programa</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fullScreen.php');"><code>fullScreen()</code></a></td><td>Atribui a tela inteira como tamanho do sketch</td>
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

