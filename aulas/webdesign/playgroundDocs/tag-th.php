<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: th | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: th | ReferenceDocs">
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
  <a name="th" class="indice">th</a>
<h1><code>&lt;th&gt;</code></h1>

  <p>A tag <code>&lt;th&gt;</code> cria uma coluna para inserção de conteúdos entendidos como "cabeçalhos" de uma tabela, junto a diversas outras colunas nesta mesma condição, em uma mesma linha (definida pela tag <a href="javascript:carrega('tag-tr.php');"><code>&lt;tr&gt;</code></a>), dentro do bloco de uma tabela (definida pela tag <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a>). As tags <code>&lt;th&gt;</code> precisam sempre estar dentro de tags <a href="javascript:carrega('tag-tr.php');"><code>&lt;tr&gt;</code></a>, que por sua vez precisam estar sempre dentro de uma tag <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a>.</p> 

  <p>Não há nenhuma diferença formal entre a tag <code>&lt;th&gt;</code> e a tag <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a>, usada para definir células/colunas comuns na tabela. As diferenças são apenas semnânticas (a tag <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a> descreve uma célula que será entendida como um conteúdo comum, enquanto a tag <code>&lt;th&gt;</code> descreve um "cabeçalho" para a tabela), e a possibilidade de se definir atributos diferentes a elas via CSS.
  </p>

  <a name="Estrutura das tabelas" class="indice">Estrutura das tabelas</a>
<h2>Estrutura das tabelas</h2>

  <p>A ordem hierarquica de toda tabela é a definição do bloco com a tag <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a>, a definição de cada linha da tabela, dentro de <a href="javascript:carrega('tag-table.php');"><code>&lt;table&gt;</code></a> pelas tags <a href="javascript:carrega('tag-tr.php');"><code>&lt;tr&gt;</code></a>, e a definição das colunas pelas tags <a href="javascript:carrega('tag-td.php');"><code>&lt;td&gt;</code></a> ou <code>&lt;th&gt;</code>, dentro de cada <a href="javascript:carrega('tag-tr.php');"><code>&lt;tr&gt;</code></a>, conforme o código abaixo:

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

<a name="<br><code>COLSPAN</code> e <code>ROWSPAN</code>" class="indice"><br><code>COLSPAN</code> e <code>ROWSPAN</code></a>
<h2><br><code>COLSPAN</code> e <code>ROWSPAN</code></h2>
<p>O número de colunas precisa coincidir em cada linha, ou a tabela também não será construída corretamente. Se uma linha possuir 3 colunas, e outra linha possuir 4, a tabela ficará deformada.
</p>

<p>A propriedade <code>colspan</code> é utilizada para unir células/colunas em uma mesma linha. O resultado desta união continua precisando respeitar a consistência de colunas totais das demais linhas da tabela.</p>

<p>Já <code>rowspan</code> é utilizada para unir células/colunas em linhas abaixo. Da mesma forma, o resultado desta união precisa respeitar toda a consistência lógica estabelecida entre linhas e colunas da tabela. A aplicação de <code>colspan</code> e <code>rowspan</code> podem ser observadas no exemplo abaixo:</p>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2'>
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
    &lt;td colspan=2&gt;2&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td colspan=2&gt;3&lt;/td&gt;
    &lt;td&gt;4&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td rowspan=2&gt;5&lt;/td&gt;
    &lt;td&gt;6&lt;/td&gt;
    &lt;td&gt;7&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;8&lt;/td&gt;
    &lt;td&gt;9&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td colspan=3&gt;10&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;11&lt;/td&gt;
    &lt;td colspan=2 rowspan=2&gt;12&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;13&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>

<div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
</div>

</div>
</body>
</html>

    