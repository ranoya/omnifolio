<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: FONT-FACE | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: FONT-FACE | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de CSS">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <link rel="icon" type="image/png" href="https://www.ranoya.com/aulas/playgroundDocs/icon.png">
<link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon144.png" />

    <meta name="theme-color" content="#8487BE">
    <meta name="msapplication-navbutton-color" content="#8487BE">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8487BE">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.ranoya.com/aulas/playgroundDocs/dev2.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.ranoya.com/aulas/webdesign/playgroundDocs/tipografia2.css">
</head>
<body>

  <script>

    acegeneralconfig = { 
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    showPrintMargin: false,
    highlightSelectedWord: true,
    wrap: true
    
  };

    Predata_editor_1 = "";
    Predata_editor_2 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <a name="@font-face" class="indice">@font-face</a>
 <h1>@font-face</h1>

  <p>A diretriz <code>@font-face</code> cria uma nova família tipográfica para ser utilizada pelo atributo <a href="javascript:carrega('css-font-family.php');"><code>font-family</code></a>no CSS à partir de uma fonte tipográfica externa.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>


@font-face {
  font-family: LibreCaslon;
  src: url(https://www.ranoya.com/aulas/projetao/librecaslontext-bold.otf);
  font-weight: bold;
}
</pre>

 <p>Os formatos de fonte aceitos são OTF e Webfont (WOFF). Alguns navegadores também aceitam WOFF2 e SVG como arquivos fonte, mas não são todos. É recomendável se manter nos formatos OFT e WOFF.</p>

<p>A diretriz recebe algumas propriedades de descrição da fonte, para caracterizá-la adequadamente.</p>

<a name="Propriedades da fonte" class="indice">Propriedades da fonte</a>
 <h3>Propriedades da fonte</h3>

<table>
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
       color: white;
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

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

</div>
</body>
</html>

    