<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: link | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: link | ReferenceDocs">
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
  <a name="link" class="indice"><code>link</code></a>
<h1><code>&lt;link&gt;</code></h1>

  <p>A tag <code>&lt;link&gt;</code> carrega recursos externos, geralmente código CSS, para dentro do documento.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;estilo.css&quot;&gt;
</pre>

  <p class="separabloco">A tag <code>&lt;link&gt;</code> faz parte de um pequeno conjunto de tags que constitui um nó terminal na estrutura de árvore do documento (DOM), não existindo um fechamento do tipo <code>&lt;/link&gt;</code></p>

  <h2></h2>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">

  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://www.ranoya.com/aulas/webdesign/playgroundDocs/html.css&quot;&gt;

  &lt;/head&gt;
  
  <body>
    &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Passe o mouse nesse link&lt;/a&gt;&lt;/p&gt;
  </body>

&lt;/html&gt;
</pre>

</div>

<div class="diagramahalf">

  <iframe id="View_editor_2"></iframe>

</div>

<a name="Tabelas de propriedades" class="indice">Tabelas de propriedades</a>
<h2>Tabelas de propriedades</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 4>Valor</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>rel</code></td>
    <td>stylesheet</td>
    <td>icon</td>
    <td>shortcut icon</td>
    <td>image_src</td>
    <td>Identifica que tipo de recurso a tag link deverá carregar</td>
  </tr>
  <tr>
    <td><code>href</code></td>
    <td colspan = 4>URL</td>
    <td>Indica um arquivo o o endereço do recurso a ser carregado</td>
  </tr>
  <tr>
    <td><code>type</code></td>
    <td>especificação</td>
    <td colspan = 3><a href="https://www.iana.org/assignments/media-types/media-types.xhtml" target="_blank">tabela de tipos</a></td>
    <td>Especifica o tipo de recurso que será carregado</td>
  </tr>

</table>

<br>

<table>
  
  <tr>
    <th colspan = 2>rel</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td colspan = 2>stylesheet</td>
    <td>rel="stylesheet" href="estilo.css"</td>
    <td>Carrega um código CSS para o documento</td>
  </tr>
  <tr>
    <td>icon</td>
    <td>shortcut icon</td>
    <td>rel="shortcut icon" href="icone.png"</td>
    <td>Carrega uma imagem para servir de ícone para o documento na janela/aba do navegador</td>
  </tr>
    <tr>
    <td colspan = 2>image_src</td>
    <td>rel="imag_src" href="referencia.jpg"</td>
    <td>Aplica uma "imagem de capa" para compartilhamentos em algumas das redes sociais (não todas, algumas utilizam <code>&lt;meta property=&quot;og:image&quot; content=&quot;referencia.jpg&quot;&gt;</code>). O uso das duas instruções ao mesmo tempo é recomendável.</td>
  </tr>
</table>

</div>
</body>
</html>

    