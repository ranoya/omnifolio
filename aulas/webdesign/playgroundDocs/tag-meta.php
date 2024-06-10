<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: meta | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: meta | ReferenceDocs">
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
 <a name="meta" class="indice">meta</a>
 <h1><code>&lt;meta&gt;</code></h1>

  <p>A tag <code>&lt;meta&gt;</code> registra metadados importantes para o navegador, mecanismos de busca ou outras plataformas que precisam saber sobre o conteúdo do documento e suas características. Nenhuma informação registrada pela tag <code>&lt;meta&gt;</code> é visível na tela.</p>

 <a name="Uso corrente" class="indice">Uso corrente</a>
 <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;meta charset=&quot;utf-8&quot;&gt;
</pre>

  <p class="separabloco">A tag <code>&lt;meta&gt;</code> faz parte de um pequeno conjunto de tags que constitui um nó terminal na estrutura de árvore do documento (DOM), não existindo um fechamento do tipo <code>&lt;/meta&gt;</code></p>

 <a name="Registro de informações" class="indice">Registro de informações</a>
 <h2>Registro de informações</h2>

  <p>Para registrar uma informação, a tag <code>&lt;meta&gt;</code> geralmente utiliza um par de propriedades divididas entre <code>name</code> e <code>content</code>. Algumas plataformas lêem informações que lhes são particularmente relevantes através de um par formado por <code>property</code> e <code>content</code>, para que não ocorram sobreposições de dados destinados a mecanismos diferentes. Há também a dupla <code>http-equiv</code> e <code>content</code>, para registrar informações no protocolo HTTP, e simplesmente <code>charset</code>, que define a tabela de encodificação dos caracteres, para que o documento possa ser lido corretamente (sem problemas em acentuações ou caracteres especiais) pelo navegador.</p>

  <h3>Exemplo</h3>

  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;author&quot; content=&quot;Guilherme Ranoya&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width,initial-scale=1, maximum-scale=1&quot;&gt;
  &lt;/head&gt;

&lt;/html&gt;
</pre>

<h2>Tabelas de propriedades/variáveis importantes</h2>

<table>
  
  <tr>
    <th>charset</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>UTF-8</td>
    <td>"utf-8"</td>
    <td>Padrão unicode</td>
  </tr>
  <tr>
    <td colspan=2><a href="http://www.iana.org/assignments/character-sets/character-sets.xhtml" target="_blank">outros padrões</a></td>
    <td>Há diversas tabelas diferentes utilizadas nos sistemas computacionais no mundo, e é necessário verificar se a tabela utilizada de codificação de caracteres é adequada ao sistema para qual se está criando o código</td>
  </tr>

</table>

<br>

<table>
  
  <tr>
    <th>name</th>
    <th>content</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>author</code></td>
    <td>nome</td>
    <td>"Guilherme Ranoya"</td>
    <td>Identifica o autor do documento</td>
  </tr>
  <tr>
    <td><code>description</code></td>
    <td>texto</td>
    <td>"Página de referência sobre HTML"</td>
    <td>Descreve o conteúdo da página para os mecanismos de busca na internet</td>
  </tr>
  <tr>
    <td><code>keywords</code></td>
    <td>palavras separadas por vírgula</td>
    <td>"html, referência, guia"</td>
    <td>Informa palavras-chaves para auxiliar mecanismos de busca em catalogar o conteúdo do documento</td>
  </tr>
  <tr>
    <td><code>viewport</code></td>
    <td>width, initial-scale, maximum-scale</td>
    <td>"width=device-width, initial-scale=1, maximum-scale=1"</td>
    <td>Define regras para redimensionamento (ampliação/redução) do documento em dispositivos mobile</td>
  </tr>

</table>

<br>

<table>
  
  <tr>
    <th>http-equiv</th>
    <th>content</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>refresh</code></td>
    <td>tempo, url</td>
    <td>"5; url=http://example.com/"</td>
    <td>Redireciona o documento automaticamente para um novo endereço após o tempo especificado em segundos</td>
  </tr>
  <tr>
    <td><code>refresh</code></td>
    <td>tempo</td>
    <td>"30"</td>
    <td>Recarrega o documento depois do tempo especificado em segundos</td>
  </tr>

</table>
  
</div>
</body>
</html>

    