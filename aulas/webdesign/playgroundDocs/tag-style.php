<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: style | ReferenceDocs</title>
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
  <a name="style" class="indice">style</a>
<h1><code>&lt;style&gt;</code></h1>

  <p>A tag <code>&lt;style&gt;</code> abre espaço para inclusão de código CSS dentro do próprio código HTML. A sintaxe e propriedades do código CSS são apresentadas no <a href="javascript:carrega('introCSS.php');" target="_self">Guia de referência de CSS</a></p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;style&gt;

   [C&Oacute;DIGO CSS]
   
&lt;/style&gt;
</pre>

  <a name="<code>&lt;style&gt;</code> ou <a href="javascript:carrega('tag-link.php');"><code>&lt;link&gt;</code></a>" class="indice"><code>&lt;style&gt;</code> ou <a href="javascript:carrega('tag-link.php');"><code>&lt;link&gt;</code></a></a>
<h2><code>&lt;style&gt;</code> ou <a href="javascript:carrega('tag-link.php');"><code>&lt;link&gt;</code></a></h2>

  <p>Carregar um CSS de um arquivo externo, ou definir o CSS no próprio documento é uma questão estratégica de projeto. Além da preferência pessoal do programador, também estão em jogo a reutilização do código por outras páginas, o trabalho de manutenção e alteração deste código quando suas características são utilizadas em vários documentos, e o intrincamento resultante de alterações quando vários documentos compartilham de um mesmo recurso.</p>

  <p>Considere a seguinte situação: um website conterá 18 páginas. Todas estas páginas possuem as mesmas características em seu layout, como cores, posições, dimensionamentos, etc; a única mudança entre cada uma delas é o conteúdo em si, que é atribuição do código HTML, e não do código CSS. Neste caso, parece interessante que todos os documentos HTML carreguem um único documento CSS contendo as especificações visuais de que todos compartilham. Uma cor alterada neste documento, e todas as 18 páginas do websites receberão automaticamente a mesma modificação. Neste sentido, parece mais inteligente adotar uma abordagem de separação dos códigos.</p>

  <p>Contudo, se há alguma coisa muito específica, que apenas uma única página utilizará/precisa, não parece prático nem útil criar mais um arquivo e carregá-lo, se isso pode ser incluído no próprio código HTML.</p>

  <a name="Utilizando as duas abordagens ao mesmo tempo" class="indice">Utilizando as duas abordagens ao mesmo tempo</a>
<h2>Utilizando as duas abordagens ao mesmo tempo</h2>

  <p>Nada impede que um código seja carregado externamente pela tag <a href="javascript:carrega('tag-link.php');"><code>&lt;link&gt;</code></a>, e mais definições CSS sejam adicionadas pela tag <code>&lt;style&gt;</code> no próprio código HTML. No exemplo abaixo, um código CSS externo carrega um conjunto de definições, mas não há nada nele estabelecido para a tag <a href="javascript:carrega('tag-h.php');"><code>&lt;h6&gt;</code></a>, que tem suas características definidas na tag <code>&lt;style&gt;</code></p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
    <pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://www.ranoya.com/aulas/webdesign/playgroundDocs/html.css&quot;&gt;
    &lt;style&gt;
      h6 {
        color: red;
      }
    &lt;/style&gt;

  &lt;/head&gt;
  &lt;body&gt;
  
    &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Passe o mouse nesse link&lt;/a&gt;&lt;/p&gt;
    &lt;h6&gt;este bloco foi definido por style&lt;/h6&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

  </div>

  <div class="diagramahalf">

<iframe id="View_editor_2"></iframe>

  </div>
  
<a name="Override" class="indice">Override</a>
<h2>Override</h2>

<p>Override é uma técnica onde se sobrepõem atributos CSS definidos originalmente com novos atributos, seja por um código carregado externamente, por um CSS atribuído a uma tag pela propriedade <code>style</code> das tags, ou até por javascript. É possível, portanto, fazer override de um código externo por um código definido no próprio documento, mas a ordem/prioridade de aplicação é sempre complexa no CSS, residindo a regra mais específica com base na quantidade de filtros de especificidade definidos. Em última instância, quando não há diferenças entre as especificidades, a última regra CSS carregada, é a que será utilizada, e no geral, as regras estabelecidas no próprio documento são sempre as primeiras.</p>
  
</div>
</body>
</html>

    