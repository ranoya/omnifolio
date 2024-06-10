<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: body | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: body | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de HTML">
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
  </script>
  
  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoHTML.svg" class="codetype">
   <a name="body" class="indice"><code>body</code></a>
  <h1><code>&lt;body&gt;</code></h1>

  <p>A tag <code>&lt;body&gt;</code> contem todo o espectro de elementos visíveis do documento HTML. Tudo aquilo que deve aparecer na tela do navegador deverá estar contido dentro de <code>&lt;body&gt;</code>. Em síntese, a tela "em branco" no navegador é o próprio <code>&lt;body&gt;</code>. 

 <a name="Uso corrente" class="indice">Uso corrente</a>
  <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;body&gt;

  [C&Oacute;DIGO HTML]

&lt;/body&gt;
</pre>

  <p>Por representar a integridade (visível) do documento, a tag <code>&lt;body&gt;</code> se confunde visualmente com a própria tag <a href="javascript:carrega('tag-html.php');"><code>&lt;html&gt;</code></a>, que, ao contrário de <code>&lt;body&gt;</code>, também incorpora os elementos invisíveis/metadados definidos na tag <a href="javascript:carrega('tag-head.php');"><code>&lt;head&gt;</code></a>.</p>

  <p>Via de regra, não há distinções visuais entre <code>&lt;body&gt;</code> e <a href="javascript:carrega('tag-html.php');"><code>&lt;html&gt;</code></a>, mas, em certas circunstâncias quando as propriedades de <code>&lt;body&gt;</code> são alteradas, é possível observar sua distinção, mesmo visualmente.</p>

 <a name="Exemplo" class="indice">Exemplo</a>
  <h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;html style=&quot;background-color: black;&quot;&gt;
  
  &lt;body style=&quot;background-color: red; padding: 10px; margin: 20px;&quot;&gt;

    A tag html &eacute; preta&lt;br&gt;
    A tag body &eacute; vermelha&lt;br&gt;

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

    