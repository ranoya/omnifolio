<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: CLEAR | ReferenceDocs</title>
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
  <a name="clear" class="indice">clear</a>
<h1>clear</h1>

  <p>O atributo <code>clear</code> define quais bordas (esquerda, direita, ambas ou nenhuma) de um elemento não aceitarão outros elementos posicionados por <a href="javascript:carrega('css-float.php');"><code>float</code></a>, isto é, <code>clear</code> define quais bordas ficarão livres na distribuição visual dos elementos.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
clear: both;
</pre>

  <p>O atributo <code>clear</code>, assim como seu atributo complementar <a href="javascript:carrega('css-float.php');"><code>float</code></a>, só funcionam em elementos cujo atributo <a href="javascript:carrega('css-position.php');"><code>position</code></a> esteja definido como <code>static</code>.</p>

  <a name="Valores para <code>clear</code>" class="indice">Valores para <code>clear</code></a>
<h2>Valores para <code>clear</code></h2>

  <table>
  <tr>
    <th>Clear</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>left</code></td>
    <td>Nenhum outro elemento poderá ser posicionado à esquerda do elemento recebendo esta propriedade.</td>
  </tr>
   <tr>
    <td><code>right</code></td>
    <td>Nenhum outro elemento poderá ser posicionado à direita do elemento recebendo esta propriedade.</td>
  </tr>
  </tr>
   <tr>
    <td><code>both</code></td>
    <td>Nenhum outro elemento poderá ser posicionado nem à direita, nem à esquerda, do elemento recebendo esta propriedade.</td>
  </tr>
  <tr>
    <td><code>none</code></td>
    <td>Condição <code>default</code>. Não haverá nenhuma proteção sobre o posicionamento dos demais elementos em relação ao elemento recebendo esta propriedade.</td>
  </tr>
</table>

<p style="clear: both">É importante lembrar que os elementos do <a href="javascript:carrega('boxmodel.php');">box model</a>, como <a href="javascript:carrega('css-margin.php');"><code>margin</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> interferem sobre layout.</p>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     .bA {
        float: right;
        background-color: cyan;
        color: blue;
      }

     .bB {
        float: left;
        background-color: white;
        color: blue;
        clear: left;
      }

      .cont {
        float: left;
        width: 50%;
        border: 1px solid cyan;
        margin-right: 30px;
        height: 100px;
        clear: both;
      }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div class=&quot;bA&quot;&gt;BA&lt;/div&gt;
    &lt;div class=&quot;bB&quot;&gt;BB&lt;/div&gt;
    &lt;div class=&quot;cont&quot;&gt;
      &lt;div class=&quot;bA&quot;&gt;BA int&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bB&quot;&gt;BB2&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>


<p style="clear: both"><br></p>

<a name="Atributos associados" class="indice">Atributos associados</a>
<h2>Atributos associados</h2>
<p>Para controlar o posicionamento dos elementos HTML, utilizar também os atributos:
  
  <a href="javascript:carrega('css-border.php');"><code>border</code></a>,
  <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>,
  <a href="javascript:carrega('css-padding.php');"><code>padding</code></a>,
  <a href="javascript:carrega('css-clear.php');"><code>clear</code></a>,
  <a href="javascript:carrega('css-float.php');"><code>float</code></a>,
  <a href="javascript:carrega('css-display.php');"><code>display</code></a>.
</p>



</div>
</body>
</html>

    