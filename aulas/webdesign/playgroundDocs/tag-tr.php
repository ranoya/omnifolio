<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: tr | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: tr | ReferenceDocs">
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
  <a name="tr" class="indice">tr</a>
<h1><code>&lt;tr&gt;</code></h1>

  <p>A tag <code>&lt;tr&gt;</code> cria uma linha dentro de uma tag  <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a> e acomoda diversas tags <a href="javascript:carrega('tag-th.php');"><code>&lt;th&gt;</code></a> ou <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a> que criam colunas dentro das linhas, formando uma tabela no documento.</p>

  <p>As únicas tags que devem existir diretamente dentro de <code>&lt;tr&gt;</code> são <a href="javascript:carrega('tag-th.php');"><code>&lt;th&gt;</code></a> ou <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a>, responsáveis pela criação das colunas da tabela. Qualquer outra tag inserida dentro de <code>&lt;tr&gt;</code> resultará em uma deformação da tabela.</p>

  <a name="Estrutura das tabelas" class="indice">Estrutura das tabelas</a>
<h2>Estrutura das tabelas</h2>

  <p>A ordem hierarquica de toda tabela é a definição do bloco com a tag <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a>, a definição de cada linha da tabela, dentro de <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a> pelas tags <code>&lt;tr&gt;</code>, e a definição das colunas pelas tags <a href="javascript:carrega('tag-th.php');"><code>&lt;th&gt;</code></a> ou <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a>, dentro de cada <code>&lt;tr&gt;</code>, conforme o código abaixo:

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_1' id='editor_1'>
&lt;html&gt;
&lt;head&gt;
  &lt;style&gt;
     table { border: 1px dashed cyan; padding: 5px; }
     th { background-color: grey; color: white; padding: 5; }
     tr { border: 1px solid red; padding: 5px; }
     td { border: 1px solid white; padding: 5px; color: white; }
  &lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;  
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;A&lt;/th&gt;
    &lt;th&gt;B&lt;/th&gt;
    &lt;th&gt;C&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;2&lt;/td&gt;
    &lt;td&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;4&lt;/td&gt;
    &lt;td&gt;5&lt;/td&gt;
    &lt;td&gt;6&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;7&lt;/td&gt;
    &lt;td&gt;8&lt;/td&gt;
    &lt;td&gt;9&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;10&lt;/td&gt;
    &lt;td&gt;11&lt;/td&gt;
    &lt;td&gt;12&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>

<div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
</div>

<h2></h2>
<p>O número de colunas precisa coincidir em cada linha, ou a tabela também não será construída corretamente. Se uma linha possuir 3 colunas, e outra linha possuir 4, a tabela ficará deformada.
</p>

<p>A tag <code>&lt;tr&gt;</code> fica invisível no código, como pode se observar no exemplo acima, mas ela estrutura a formatação da tabela, definindo as dimensões de cada linha exibida.</p>


</div>
</body>
</html>

    