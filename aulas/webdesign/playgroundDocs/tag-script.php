<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: script | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: script | ReferenceDocs">
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
  <a name="script" class="indice">script</a>
<h1><code>&lt;script&gt;</code></h1>

  <p>A tag <code>&lt;script&gt;</code> cria um espaço para que um código de programação javascript seja incorporado dentro do próprio documento HTML, ou carrega um código javascript externamente. Todos os navegadores são capazes de interpretar código javascript, e com ele é possível criar diferentes interações e dinâmicas nos documentos web.</p>

  <a name="Usos correntes" class="indice">Usos correntes</a>
<h2>Usos correntes</h2>

  <p>Carregamento externo de código javascript:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;script src=&quot;https://www.ranoya.com/public/dev/processing.min.js&quot;&gt;&lt;/script&gt;
</pre>

<p class="separabloco">Código javascript no próprio documento:</p>

<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;script&gt;

  [C&Oacute;DIGO JAVASCRIPT]
  
&lt;/script&gt;
</pre>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;style&gt; * { color: white; }&lt;/style&gt;
    &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
    &lt;script&gt;
      function bomdia() {
        node = document.createElement("P");
        textnode = document.createTextNode("Bom Dia!");
        node.appendChild(textnode);
        document.body.appendChild(node); 
      }
    &lt;/script&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;javascript:bomdia()&quot;&gt;clique aqui&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
  </div>

  <a name="Arquivo externo x código no documento" class="indice">Arquivo externo x código no documento</a>
<h2>Arquivo externo x código no documento</h2>

  <p>Carregar um javascript de um arquivo externo, ou definir o código no próprio documento é uma questão estratégica de projeto. Além da preferência pessoal do programador, também estão em jogo a reutilização do código por outras páginas, o trabalho de manutenção e alteração deste código quando suas características são utilizadas em vários documentos, e o intrincamento resultante de alterações quando vários documentos compartilham de um mesmo recurso.</p>

  <a name="Utilizando as duas abordagens ao mesmo tempo" class="indice">Utilizando as duas abordagens ao mesmo tempo</a>
<h2>Utilizando as duas abordagens ao mesmo tempo</h2>

  <p>Nada impede que um código seja carregado externamente e outro seja definido dentro do próprio código HTML. Na verdade, é possível carregar inúmeros códigos diferentes e definir diversos códigos javascript no próprio documento, na medida da necessidade.</p>

  <a name="Overload" class="indice">Overload</a>
<h2>Overload</h2>

  <p>Javascript não é uma linguagem dotada de overload de classes e funções; isto significa que quando uma função ou classe é definida novamente por um segundo ou terceiro código (externo ou definido no próprio documento), a última versão definida sobreescreve totalmente aquilo que já foi estabelecido antes. É bastante comum que, em função disso, ao carregar diversas bibliotecas e recursos em javascript, eles possam entrar em conflito uns com os outros por sobreescreverem variáveis, funções ou classes.</p>
  
</div>
</body>
</html>

    