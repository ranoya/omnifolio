<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: canvas | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: style | ReferenceDocs">
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
  <a name="canvas" class="indice">canvas</a>
<h1><code>&lt;canvas&gt;</code></h1>

  <p>A tag <code>&lt;canvas&gt;</code> cria um contexto gráfico <i>bitmap</i> (um espaço na tela) para construção de imagens através de programação em javascript no HTML.</p>

  <p>A sintaxe e propriedades do <code>&lt;canvas&gt;</code> são apresentadas no <a href="https://www.ranoya.com/aulas/designgenerativo/playgroundDocs/introCanvas.php?theme=html&elementos=canvas" target="_self">Guia de programação em Código Criativo</a>.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


 &lt;canvas id=&quot;meuCanvas&quot;&gt;&lt;/canvas&gt;
</pre>


  <p>Todo o código do <code>&lt;canvas&gt;</code> pode ser manipulado em tempo-real e de forma transparente através de programação Javascript.</p>

  <a name="Diferenças entre <code>&lt;svg&gt;</code> e <code>&lt;canvas&gt;</code>" class="indice">Diferenças entre <code>&lt;svg&gt;</code> e <code>&lt;canvas&gt;</code></a>
<h2>Diferenças entre <code>&lt;svg&gt;</code> e <code>&lt;canvas&gt;</code></h2>

  <p>Tanto <a href="javascript:carrega('tag-svg.php');"><code>&lt;svg&gt;</code></a> quanto <code>&lt;canvas&gt;</code> criam contextos gráficos dentro do navegador. A diferença primordial entre eles é que o contexto de <a href="javascript:carrega('tag-svg.php');"><code>&lt;svg&gt;</code></a> é <i>vetorial</i>, enquanto o de <code>&lt;canvas&gt;</code> é <i>bitmap</i>. A segunda diferença é que o contexto <a href="javascript:carrega('tag-svg.php');"><code>&lt;svg&gt;</code></a> possui um conjunto de instruções próprias, estruturadas em formato e sintaxe XML (Extensible Markup Language) para ser manipulado, enquanto <code>&lt;canvas&gt;</code> é manipulado apenas por programação Javascript.</p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;canvas id=&quot;meuCanvas&quot;&gt;&lt;/canvas&gt;

&lt;script&gt;
var canvas = document.getElementById(&quot;meuCanvas&quot;);
var ctx = canvas.getContext(&quot;2d&quot;);
ctx.fillStyle = &quot;#FF0000&quot;;
ctx.fillRect(0, 0, 80, 80);
&lt;/script&gt;
</pre>

  </div>

  <div class="diagramahalf">

<iframe id="View_editor_2"></iframe>

  </div>
    
</div>
</body>
</html>

    