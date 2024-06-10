<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>CSS: Unidades | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Unidades | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Unidades | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Unidades | O código CSS, capítulo do livro O tecido das tecnologias criativas">    
</head>
<body>

  <script>

    Predata_editor_3 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>


     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="Medidas e unidades" class="indice">Medidas e unidades</a>
<h1 id='titulocapitulo'>Medidas e unidades</h1>

  <p>O uso de CSS permite que sejam utilizadas unidades de medida das mais variadas. Há dois tipos de sistemas de medida: as unidades absolutas como <code>cm</code> ou <code>mm</code>, e as unidades relativas como <code>em</code> ou <code>%</code>.</p>

  <a name="Unidades absolutas" class="indice">Unidades absolutas</a>
<h2>Unidades absolutas</h2>

  <p>É necessário cuidado com o dimensionamento utilizando unidades absolutas já que diferentes DPIs (densidade de tela) podem alterar o resultado, e porque a impressão de um website certamente resultará em um dimensionamento diferente. Em síntese: não é garantido que as unidades absolutas na tela reflitam as mesmas dimensões no espaço físico.</p>

  <p>As unidades absolutas que podem ser utilizadas no CSS são:</p>

  <table style="width: 100%;">

    <tr><th>Unidade</th><th>descrição</th></tr>
    <tr><td>cm</td><td>centímetros</td></tr>
    <tr><td>mm</td><td>milímetros</td></tr>
    <tr><td>in</td><td>polegadas</td></tr> 
    <tr><td>pt</td><td>pontos (1/72 de uma polegada)</td></tr>
    <tr><td>pc</td><td>picas (12 pontos)</td></tr>
    <tr><td>px</td><td>pixels</td></tr>

  </table>

  <h2 style="width: 100%; clear: both"></h2>

  <p>A unidade mais utilizada é o pixel (<code>px</code>), porque determina um valor medido diretamente na tela, independente de seu tamanho físico. O pixel é a unidade de tela por excelência. Ao contrário do contexto de desenvolvimento de aplicativos mobile, não há pixels independentes de densidade (como o <code>dp</code> do Google ou o <code>pt</code> da Apple) no desenvolvimento web.</p>

  <p>Já as unidades relativas que podem ser utilizadas no CSS são:</p>

  <table>
    <tr><th>Unidade</th><th>descrição</th><th>uso</th></tr>
    <tr><td>em</td><td>tamanho da tipografia no elemento utilizado como base de referência</td><td>3em são 3x o tamanho de uma letra no próprio elemento. Se <code>font-size</code> for <code>20px</code>, a dimensão será <code>60px</code>.</td></tr>
    <tr><td>rem</td><td>tamanho da tipografia na raíz do HTML utilizada como base de referência</td><td>2em são 2x o tamanho de uma letra na base do documento.</td></tr>
    <tr><td>%</td><td>fração da dimensão do elemento pai</td><td>50% é metade da dimensão do elemento pai em que o elemento atual está.</td></tr>
    <tr><td>vw</td><td>1% do tamanho horizontal do navegador</td><td>50vw é metade da largura do navegador.</td></tr>
    <tr><td>vh</td><td>1% do tamanho vertical do navegador</td><td>33vh é um terço da altura do navegador</td></tr>
    <tr><td>vmin</td><td>1% da menor dimensão do navegador (horizontal ou vertical)</td><td>50vmin é metade da menor dimensão da tela do navegador</td></tr>
    <tr><td>vmax</td><td>1% da maior dimensão do navegador (horizontal ou vertical)</td><td>33vmax é um terço da maior dimensão da tela do navegador</td></tr>

  </table>

  <a name="Uso de porcentagem nas dimensões verticais" class="indice">Uso de porcentagem nas dimensões verticais</a>
<h2>Uso de porcentagem nas dimensões verticais</h2>

  <p>O uso de medidas de porcentagem nas dimensões verticais nem sempre funcionará. Os elementos HTML possuem, originalmente, seu atributo <a href="css-position.php"><code>position</code></a> definido como <code>static</code>. Neste tipo de posicionamento, a dimensão vertical é flutuante (se altera conforme o conteúdo), e não há um registro por parte do navegador de sua dimensão. Elementos colocados dentro de tags nesta condição não conseguirão obter um valor de dimensão vertical, e consequentemente não respeitarão um dimensionamento em porcentagem. O dimensionamento vertical por porcentagem só funciona plenamente quando o atributo <a href="css-position.php"><code>position</code></a> do nó pai é do tipo <code>fixed</code>. Mesmo nos tipos <code>relative</code> e <code>absolute</code>, há dificuldades: os vários navegadores interpretam de maneiras muito diferentes a aplicação destes atributos, e os valores podem variar muito.</p>

 
  <a name="Exemplos" class="indice">Exemplos</a>
<h2>Exemplos</h2>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_1"></iframe>
  <span style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin: 0; padding: 0; line-height: 14px; color: var(--text-color, #acafd2);">* O quadro acima é um <code>&lt;iframe&gt;</code>. Para o código que roda dentro dele, ele é o próprio navegador. As medidas relativas considerarão o quadro como as dimensões totais da tela do navegador.</span><br><br>
  </div>

  <div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
        border: 1px solid violet;
        font-size: 12px;
     }
     html { 
        font-size: 32px;
        color: violet;
     }
     .m1 {
        width: 50%;
        height: 30px;
     }
     .m2 {
        width: 1rem;
        height: 30px;
     }
     .m3 {
        width: 50vw;
        height: 30%;
     }

    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Texto&lt;br&gt;&lt;br&gt;
    &lt;div class=&quot;m1&quot;&gt;
      texto&lt;br&gt;
      &lt;div class=&quot;m1&quot;&gt;
      texto&lt;br&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;br&gt;

    &lt;div class=&quot;m2&quot;&gt;
      texto&lt;br&gt;
      &lt;div class=&quot;m2&quot;&gt;
      texto&lt;br&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;br&gt;
    &lt;div class=&quot;m3&quot;&gt;
    height 
      &lt;div class=&quot;m3&quot;&gt;
       não funciona
      &lt;/div&gt;
    &lt;/div&gt;
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


    