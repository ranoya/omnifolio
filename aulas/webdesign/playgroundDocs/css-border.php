<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: BORDER | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: BORDER | ReferenceDocs">
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
  <a name="border" class="indice">border</a>
 <h1>border</h1>

  <p>O atributo <code>border</code> é um shortcut para definir diversas propriedades de borda ao mesmo tempo; ele define a espessura, cor e tipo da borda nas quatro direções (left, top, right e bottom) ao mesmo tempo. Não é possível especificar as características de uma, ou de algumas direções apenas; o shortcut valerá para todas elas.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
 <h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
border: 2px dashed cyan;
</pre>

  <p>O atributo recebe até 3 informações diferentes, referentes à espessura, ao tipo de borda, e à sua cor. A espessura é informada em qualquer <a href="javascript:carrega('unidadescss.php');">tipo de medida</a> aceita pelo CSS, e as cores podem ser informadas com qualquer tipo de <a href="javascript:carrega('corescss.php');">registro de cor</a> aceito pelo CSS (cores nomeadas, RGB ou <a href="javascript:carrega('funcoescss.php');"><code>funções</code></a>).</p>

  <a name="Tipos de borda" class="indice">Tipos de borda</a>
 <h3>Tipos de borda</h3>

<table>
  <tr>
    <th>Tipo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>none</td>
    <td>nenhuma borda</td>
  </tr>
  <tr>
    <td>dotted</td>
    <td>borda pontilhada</td>
  </tr>
  <tr>
    <td>dashed</td>
    <td>borda tracejada</td>
  </tr>
  <tr>
    <td>solid</td>
    <td>borda de linha simples</td>
  </tr>
  <tr>
    <td>double</td>
    <td>borda de linha dupla</td>
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
     div { 
         border: 5px double cyan;
         color: white;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;borda dupla&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

<a name="Atributos associados" class="indice">Atributos associados</a>
 <h2>Atributos associados</h2>
<p>Para controlar cada aspecto da borda individualmente deve-se utilizar os atributos
  <a href="javascript:carrega('css-border-bottom-color.php');"><code>border-bottom-color</code></a>,
  <a href="javascript:carrega('css-border-bottom-style.php');"><code>border-bottom-style</code></a>,
  <a href="javascript:carrega('css-border-bottom-width.php');"><code>border-bottom-width</code></a>,
  <a href="javascript:carrega('css-border-left-color.php');"><code>border-left-color</code></a>,
  <a href="javascript:carrega('css-border-left-style.php');"><code>border-left-style</code></a>,
  <a href="javascript:carrega('css-border-left-width.php');"><code>border-left-width</code></a>,
  <a href="javascript:carrega('css-border-right-color.php');"><code>border-right-color</code></a>,
  <a href="javascript:carrega('css-border-right-style.php');"><code>border-style-style</code></a>,
  <a href="javascript:carrega('css-border-right-width.php');"><code>border-right-width</code></a>,
  <a href="javascript:carrega('css-border-top-color.php');"><code>border-top-color</code></a>,
  <a href="javascript:carrega('css-border-top-style.php');"><code>border-top-style</code></a>,
  <a href="javascript:carrega('css-border-top-width.php');"><code>border-top-width</code></a>, os shortcuts 
  <a href="javascript:carrega('css-border-bottom.php');"><code>border-bottom</code></a>,
  <a href="javascript:carrega('css-border-left.php');"><code>border-left</code></a>,
  <a href="javascript:carrega('css-border-right.php');"><code>border-right</code></a>,
  <a href="javascript:carrega('css-border-top.php');"><code>border-top</code></a>,
  ou mesmo determinar especificamente cada uma das características para cada uma das bordas pelos atributos
  <a href="javascript:carrega('css-border-color.php');"><code>border-color</code></a>,
  <a href="javascript:carrega('css-border-style.php');"><code>border-style</code></a>,
  <a href="javascript:carrega('css-border-width.php');"><code>border-width</code></a>.</p>

</div>
</body>
</html>

    