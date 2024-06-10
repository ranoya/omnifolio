<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
   <title>CSS: Font-face | O tecido das tecnologias criativas</title>
    <meta name="description" content="CSS: Font-face | O código CSS, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="CSS: Font-face | O tecido das tecnologias criativas">
    <meta property="og:description" content="CSS: Font-face | O código CSS, capítulo do livro O tecido das tecnologias criativas">       
    
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
  <a name="@font-face" class="indice">@font-face</a>
 <h1 id='titulocapitulo'>@font-face</h1>

  <p>A diretriz <code>@font-face</code> cria uma nova família tipográfica para ser utilizada pelo atributo <a href="css-font-family.php"><code>font-family</code></a> no CSS à partir de uma fonte tipográfica externa.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>


@font-face {
  font-family: LibreCaslon;
  src: url(https://www.ranoya.com/aulas/projetao/librecaslontext-bold.otf);
  font-weight: bold;
}
</pre>

<h2 style="width: 100%; clear: both;"></h2>

 <p>Os formatos de fonte aceitos são OTF e Webfont (WOFF). Alguns navegadores também aceitam WOFF2 e SVG como arquivos fonte, mas não são todos. É recomendável se manter nos formatos OFT e WOFF.</p>

<p>A diretriz recebe algumas propriedades de descrição da fonte, para caracterizá-la adequadamente.</p>

<a name="Propriedades da fonte" class="indice">Propriedades da fonte</a>
 <h3>Propriedades da fonte</h3>

<table style="width: 100%;">
  <tr>
    <th>Propriedade</th>
    <th>Valor</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>font-family</td>
    <td>nome</td>
    <td>nome dado à nova família para identificação no CSS</td>
  </tr>
  <tr>
    <td>font-stretch</td>
    <td>normal<br>
condensed<br>
ultra-condensed<br>
extra-condensed<br>
semi-condensed<br>
expanded<br>
semi-expanded<br>
extra-expanded<br>
ultra-expanded</td>
    <td>formato original da fonte, para quando o navegador for instruído a alterá-la.</td>
  </tr> 
  <tr>
    <td>font-style</td>
    <td>normal<br>
italic<br>
oblique</td>
    <td>definição de obliquidade da fonte</td>
  </tr>
  <tr>
    <td>font-weight</td>
    <td>normal<br>
bold<br>
100<br>
200<br>
300<br>
400<br>
500<br>
600<br>
700<br>
800<br>
900
    <td>definição de peso da fonte</td>
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
     @font-face {
        font-family: LibreCaslon;
        src: url(https://www.ranoya.com/aulas/projetao/librecaslontext-bold.otf);
        font-weight: bold;
      }
     
     * { 

       font-family: LibreCaslon;
       font-size: 30px;
       color: violet;
       font-weight: bold;

     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;Fonte exerna LibreCaslon&lt;/div&gt;
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


    