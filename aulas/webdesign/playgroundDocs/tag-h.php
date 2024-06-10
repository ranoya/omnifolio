<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: h | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: h | ReferenceDocs">
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
  <a name="h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>,<code>&lt;h5&gt;</code> e <code>&lt;h6" class="indice">h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>,<code>&lt;h5&gt;</code> e <code>&lt;h6</a>
<h1><code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>,<code>&lt;h5&gt;</code> e <code>&lt;h6&gt;</code></h1>

  <p>As tags <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>,<code>&lt;h5&gt;</code> e <code>&lt;h6&gt;</code> criam blocos que são compreendido como títulos e subtítulos, hierarquicamente, pelos navegadores, idealmente para agrupar um pequeno texto. Ainda que este seja o propósito original da tag, as tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> podem conter qualquer tipo de nó na estrutura HTML, não apenas texto, recebendo outras tags de bloco como <a href="javascript:carrega('tag-div');"><code>&lt;div&gt;</code></a>, <a href="javascript:carrega('tag-p');"><code>&lt;p&gt;</code></a>, ou mesmo <a href="javascript:carrega('tag-table');"><code>&lt;table&gt;</code></a>; as tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> não estão limitadas a conter apenas tags inline/conteúdo como nós internos.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;h2&gt;Subt&iacute;tulo&lt;/h2&gt;
</pre>

  <p>As tags <code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code> carregam pesos semânticos, indicando que <code>&lt;h1&gt;</code> é hierarquicamente mais importante do que <code>&lt;h2&gt;</code>, e assim por diante. Os navegadores e, principalmente, os mecanismos de busca compreendem que estas tags carregam conceitos-chaves que descrevem o conteúdo, como de fato títulos e subtítulos. O ideal é mantê-las para esta finalidade.</p>

  <p>Seu comportamento visual não é diferente de nenhuma outra tag de bloco. Como todas elas, as tags <code>&lt;h1&gt;</code> -  <code>&lt;h6&gt;</code> tendem a ocupar todo o espaço disponível para elas na tela do navegador, se não houver alteração em seus atributos via CSS.</p>
  
  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt; h1,h2 { color: white; border: 1px solid white; } &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;h1&gt;T&iacute;tulo&lt;/h1&gt;
    &lt;h2&gt;Subt&iacute;tulo&lt;/h2&gt;
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

    