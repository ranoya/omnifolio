<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: POSITION | ReferenceDocs</title>
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
  <a name="position" class="indice">position</a>
<h1>position</h1>

  <p>Através do atributo <code>position</code> é possível estabelecer de que maneira o elemento HTML será posicionado na tela.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
position: absolute;
</pre>

  <a name="Valores para position" class="indice">Valores para position</a>
<h2>Valores para position</h2>

  <table>
  <tr>
    <th>Tipo</th>
    <th>Funcionamento</th>
  </tr>
  <tr>
    <td><code>static</code></td>
    <td>Condição <code>default</code>. Os elementos são posicionados um ao lado do outro conforme vão aparecendo no código.</td>
  </tr>
   <tr>
    <td><code>relative</code></td>
    <td>Os elementos são posicionados em referência a sua própria posição no código, e sobrepõe uns aos outros. O tipo <code>relative</code> é igual ao <code>static</code>, mas pode ser modificado pelas propriedades <a href="javascript:carrega('css-bottom.php');"><code>bottom</code></a>,
  <a href="javascript:carrega('css-left.php');"><code>left</code></a>,
  <a href="javascript:carrega('css-right.php');"><code>right</code></a>,
  <a href="javascript:carrega('css-top.php');"><code>top</code></a> e/ou 
  <a href="javascript:carrega('css-z-index.php');"><code>z-index</code></a></td>
  </tr>
  <tr>
    <td><code>absolute</code></td>
    <td>Os elementos são posicionados usando como referência a posição do seu primeiro elemento pai não-static na estrutura do código, e sobrepõe uns aos outros. No tipo <code>absolute</code> é possível alterar a posição dos elementos dentro de um elemento de "contenção".</td>
  </tr>
  <tr>
    <td><code>fixed</code></td>
    <td>Os elementos são posicionados em referência ao canto superior esquerdo da tela, e sobrepõe uns aos outros.</td>
  </tr>
 
</table>

<p style="clear: both"><br></p>

<a name="Exemplos" class="indice">Exemplos</a>
<h3>Exemplos</h3>

<a name="static" class="indice">static</a>
<h3><code>static</code></h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: static;
         background-color: white;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;bloco 1&lt;/span&gt;
    &lt;span&gt;bloco 2&lt;/span&gt;
    &lt;span&gt;bloco 3&lt;/span&gt;
    &lt;span&gt;bloco 4&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>




<p style="clear: both"><br></p>

<a name="absolute" class="indice">absolute</a>
<h3><code>absolute</code></h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: absolute;
         background-color: white;
         top: 10px;
         left: 10px
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;01
      &lt;span&gt;02
        &lt;span&gt;03&lt;/span&gt;
      &lt;/span&gt;
    &lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
  </div>




<p style="clear: both"><br></p>

<a name="fixed" class="indice">fixed</a>
<h3><code>fixed</code></h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: fixed;
         background-color: white;
     }
     .b1 {
         left: 20px;
         top: 80px;
     }
     .b2 {
         left: 100px;
         top: 10px;
     }
     .b3 {
         right: 10px;
         bottom: 10px;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span class=&quot;b1&quot;&gt;B1&lt;/span&gt;
    &lt;span class=&quot;b2&quot;&gt;B2&lt;/span&gt;
    &lt;span class=&quot;b3&quot;&gt;B3&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
  </div>



<p style="clear: both"><br></p>

<a name="relative" class="indice">relative</a>
<h3><code>relative</code></h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_5' id='editor_5'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     span { 
         position: relative;
         background-color: white;
     }
     .b2 {
         left: 100px;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;span&gt;B1&lt;/span&gt;
    &lt;span class=&quot;b2&quot;&gt;B2&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_5"></iframe>
  </div>

<p style="clear: both"><br></p>

<p style="clear: both">Ao posicionar elementos ao longo da tela, é necessário considerar tanto que outras características, como o próprio <a href="javascript:carrega('boxmodel.php');">box model</a>, também interferem sobre o layout.</p>

<a name="Atributos associados" class="indice">Atributos associados</a>
<h2>Atributos associados</h2>
<p>Para controlar o posicionamento dos elementos HTML, utilizar também os atributos:
  
  <a href="javascript:carrega('css-clear.php');"><code>clear</code></a>,
  <a href="javascript:carrega('css-float.php');"><code>float</code></a>,
  <a href="javascript:carrega('css-display.php');"><code>display</code></a>,
  <a href="javascript:carrega('css-bottom.php');"><code>bottom</code></a>,
  <a href="javascript:carrega('css-left.php');"><code>left</code></a>,
  <a href="javascript:carrega('css-right.php');"><code>right</code></a>,
  <a href="javascript:carrega('css-top.php');"><code>top</code></a>,
  <a href="javascript:carrega('css-z-index.php');"><code>z-index</code></a>.
</p>



</div>
</body>
</html>

    