<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: a | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: a | ReferenceDocs">
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
  <a name="a" class="indice">a</a>
<h1><code>&lt;a&gt;</code></h1>

  <p>A tag <code>&lt;a&gt;</code> cria âncoras no documento HTML. Estas âncoras podem marcar uma posição no documento HTML, podem direcionar para uma âncora já existente no próprio documento, ou pode direcionar o navegador para um documento externo, referenciado de forma absoluta (ex: "https://wwww.ranoya.com/index.html"), ou de forma relativa ("../quemsomos/index.html"). As vantagens e desvantagens de se usar referências absolutas ou relativas dependem da forma como o código é reaproveitado no processo de construção, se podem haver mudanças nos endereços, ou se o desenvolvimento está sendo feito sem a presença de um webserver, por exemplo. Há muitos fatores a serem considerados na hora de adotar um padrão de referência, e o projetista deve decidir pelo que lhe parece mais adequado.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;meu link&lt;/a&gt;
</pre>
  
  <a name="Criar uma âncora" class="indice">Criar uma âncora</a>
<h2>Criar uma âncora</h2>

  <p>Para criar uma âncora interna no documento, você deve utilizar a propriedade <code>name</code> na tag <code>&lt;a&gt;</code>, e para apontar para esta âncora no documento você deverá usar o operador <code>#</code> da url na propriedade <code>href</code> da tag <code>&lt;a&gt;</code>.</p>


  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      * { color: white }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;#ancora&quot;&gt;Clique aqui!&lt;/a&gt;
    &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;
    &lt;a name=&quot;ancora&quot;&gt;&lt;/a&gt;
    Este conte&uacute;do fica bem em baixo.
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

  <a name="Criar um link" class="indice">Criar um link</a>
<h2>Criar um link</h2>

  <p>Para criar um link você deverá indicar um arquivo na estrutura de diretórios ou um endereço web na propriedade <code>href</code> da tag <code>&lt;a&gt;</code>. Pode ser útil incluir a propriedade <code>target</code> para indicar se o navegador deve abrir este novo link na própria aba/janela, ou se deve abrí-lo em outra aba/janela. Isto é indicado pelos valores <code>_self</code> ou <code>_blank</code>.</p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

<div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      * { color: white }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;https://www.ranoya.com&quot; target=&quot;_blank&quot;&gt;Meu Site&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;../ementa/index.html&quot; target=&quot;_blank&quot;&gt;Ementa&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
  </div>
 
<a name="Tabela de propriedades importantes" class="indice">Tabela de propriedades importantes</a>
<h2>Tabela de propriedades importantes</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 2>Valores</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>href</code></td>
    <td colspan = 2>URL</td>
    <td>Direciona o navegador para o endereço especificado</td>
  </tr>
  <tr>
    <td><code>target</code></td>
    <td>_self</td>
    <td>_blank</td>
    <td>Especifica como o navegador abrirá o link, se é utilizando a janela/aba atual, ou se ele abrirá uma nova janela/aba com ele</td>
  </tr>
  <tr>
    <td><code>name</code></td>
    <td colspan = 2>Palavra escolhida pelo programador</td>
    <td>Atribui um nome de referência para uma âncora que pode ser acessada com o operador <code>#</code> da URL</td>
  </tr>

</table>

</div>
</body>
</html>

    