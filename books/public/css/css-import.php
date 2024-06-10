<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
   <title>CSS: Import | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Import | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Import | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Import | O código CSS, capítulo do livro O tecido das tecnologias criativas">       
    
    
</head>
<body>

  <script>

    Predata_editor_1 = "";
    Predata_editor_2 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

     <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">

  <div id="langtype"><code>{ } CSS</code></div>
  <a name="@import" class="indice">@import</a>
 <h1 id='titulocapitulo'>@import</h1>

  <p>A diretriz <code>@import</code> carrega um arquivo externo para dentro do CSS, e pode definir condições específicas quanto às dimensões e o substrato onde o documento HTML está sendo exibido para que isso aconteça, exatamente igual à diretriz <a href="css-media.php"><code>@media</code></a>.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
@import "outrocss.css" screen and (max-width: 768px);
</pre>

<h2 style="width: 100%; clear: both;"></h2>

  <p>A diretriz recebe até 3 valores: o primeiro é o endereço do arquivo externo com código CSS; o segundo é o tipo de mídia para qual a condição será aplicada, que pode ser acompanhado dos operadores <code>not</code> para excluí-la da condição, ou <code>only</code> para torná-la exclusiva. O terceiro tipo de informação são as características da mídia para que o código externo seja carregado, que podem ser acompanhados e concatenados através dos operadores <code>and</code>, para concatená-los, <code>or</code> para substituí-los, ou <code>not</code> para excluí-los na condição.</p>

<a name="Tipos de mídia" class="indice">Tipos de mídia</a>
 <h3>Tipos de mídia</h3>

<table style="width: 100%;">
  <tr>
    <th>Mídia</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>all</td>
    <td>todos os tipos de mídia</td>
  </tr>
  <tr>
    <td>print</td>
    <td>versão da página para impressão</td>
  </tr>
  <tr>
    <td>screen</td>
    <td>telas (computadores, tablets, celulares, etc)</td>
  </tr>
  <tr>
    <td>speech</td>
    <td>leitores de tela para acessibilidade</td>
  </tr>
</table>

<a name="Carcterísticas" class="indice">Carcterísticas</a>
 <h3>Carcterísticas</h3>

<table style="width: 100%;">
  <tr>
    <th>Variável</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>color</td>
    <td>quantidade específicade bits por cor</td>
  </tr>
  <tr>
    <td>color-index</td>
    <td>quantidade específica de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>height</td>
    <td>altura específica do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>inverted-colors</td>
    <td>o sistema operacional está com as cores invertidas?</td>
  </tr>
  <tr>
    <td>max-aspect-ratio</td>
    <td>valor máximo na relação entre largura e altura no viewport do dispositivo</td>
  </tr>
  <tr>
    <td>max-color</td>
    <td>valor máximo na quantidade de bits por cor</td>
  </tr>
  <tr>
    <td>max-color-index</td>
    <td>valor máximo na quantidade de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>max-height</td>
    <td>valor máximo na altura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>max-width</td>
    <td>valor máximo na largura do viewport no dispositivo</td>
  </tr> 
  <tr>
    <td>min-aspect-ratio</td>
    <td>valor mínimo na relação entre largura e altura no viewport do dispositivo</td>
  </tr> 
  <tr>
    <td>min-color</td>
    <td>valor mínimo na quantidade de bits por cor</td>
  </tr>
  <tr>
    <td>min-color-index</td>
    <td>valor mínimo na quantidade de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>min-height</td>
    <td>valor mínimo na altura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>min-width</td>
    <td>valor mínimo na largura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>orientation</td>
    <td>orientação do dispositivo (landscape | portrait)</td>
  </tr> 
  <tr>
    <td>width</td>
    <td>largura específica do viewport no dispositivo</td>
  </tr>      
</table>


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
   &lt;style&gt;
     @import url('https://fonts.googleapis.com/css?family=Butterfly+Kids&display=swap');
     
     * { 

       font-family: 'Butterfly Kids', cursive;
       font-size: 30px;
       color: white;

     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;texto decorativo com o Google Fonts&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>



<h2 style="width: 100%; clear: both;"></h2>

<p>Ferramentas como o <a href="https://fonts.google.com">Google Fonts</a> utilizam a diretriz <code>@import</code> para carregar fontes não-nativas ao navegador, e oferecer uma gama maior de possibilidades tipográficas ao documento.</p>


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


    