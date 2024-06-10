<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: head | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: head | ReferenceDocs">
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
  <a name="head" class="indice"><code>head</code></a>
<h1><code>&lt;head&gt;</code></h1>

  <p>A tag <code>&lt;head&gt;</code> estabelece o cabeçalho do código html onde ficam definidas a encodificação do documento, propriedades importantes do protocolo HTTP, identificação de autores, palavras-chave, descrições e plataformas utilizadas, carregamento de códigos externos ou declaração no próprio código HTML, ou registrando informações úteis para que os mecanismos de busca e redes sociais façam uma correta interpretação do conteúdo do documento.</p>

  <p>Na tag <code>&lt;head&gt;</code> fica registrado todo tipo de meta-informação do documento. Nada que se declare dentro dela é visível no navegador.</p>

  <p>Por convenção, as únicas tags que devem ser abrigadas dentro de <code>&lt;head&gt;</code> são: <a href="javascript:carrega('tag-link.php');"><code>&lt;link&gt;</code></a>, <a href="javascript:carrega('tag-meta.php');"><code>&lt;meta&gt;</code></a>, <a href="javascript:carrega('tag-script.php');"><code>&lt;script&gt;</code></a>, <a href="javascript:carrega('tag-style.php');"><code>&lt;style&gt;</code></a> e <a href="javascript:carrega('tag-title.php');"><code>&lt;title&gt;</code></a>. As atribuições e propriedades de cada uma destas tags podem ser encontradas nas suas referidas páginas deste guia.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;title&gt;minha p&aacute;gina&lt;/title&gt;
&lt;/head&gt;
</pre>

  <a name="Referência de cabeçalho para documento HTML" class="indice">Referência de cabeçalho para documento HTML</a>
<h3>Referência de cabeçalho para documento HTML</h3>

<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;head&gt;
 &lt;meta charset=&quot;utf-8&quot;&gt;
 &lt;title&gt;Minha p&aacute;gina&lt;/title&gt;
 &lt;meta name=&quot;viewport&quot; 
     content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
 &lt;meta name=&quot;keywords&quot; content=&quot;html, teste, hello world!&quot;&gt;
 &lt;meta name=&quot;description&quot; content=&quot;documento de experimenta&ccedil;&atilde;o sobre html&quot;&gt;
 &lt;meta name=&quot;author&quot; content=&quot;Guilherme Ranoya&quot;&gt;
 &lt;link rel=&quot;icon&quot; href=&quot;icon.png&quot;&gt;    
 &lt;link rel=&quot;image_src&quot; type=&quot;image/jpg&quot; href=&quot;imagemdecapa.jpg&quot;&gt;
 &lt;meta property=&quot;og:image&quot; content=&quot;imagemdecapa.jpg&quot;&gt;
 &lt;meta property=&quot;og:image:width&quot; content=&quot;1145&quot;&gt;
 &lt;meta property=&quot;og:image:height&quot; content=&quot;601&quot;&gt;
 &lt;meta name=&quot;theme-color&quot; content=&quot;#8487BE&quot;&gt;
 &lt;meta name=&quot;msapplication-navbutton-color&quot; content=&quot;#8487BE&quot;&gt;
 &lt;meta name=&quot;apple-mobile-web-app-status-bar-style&quot; content=&quot;#8487BE&quot;&gt;
 &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
 &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;estilo.css&quot;&gt;
&lt;/head&gt;
</pre>

<p>Neste exemplo de referência, arquivos como "imagemdecapa.jpg", "icon.png" ou "estilo.css" precisam ser criados no mesmo diretório do arquivo HTML. O arquivo "icon.png" precisa ter as dimensões 16px X 16px (dimensão padrão dos ícones exibidos pelo navegador nas janelas/abas), o arquivo "imagemdecapa.jpg" precisa ter as dimensões 1145px X 601px, como definido nas tags <a href="javascript:carrega('tag-meta.php');"><code>&lt;meta&gt;</code></a> logo abaixo da declaração do próprio arquivo, e o arquivo "estilo.css" precisa ser criado com as definições/regras de CSS que serão utilizadas no documento utilizando este cabeçalho. Ele também carrega a biblioteca javascript <a href="https://jquery.com/" target="_blank">JQuery</a>, amplamente utilizada como framework de programação javascript.</p>

<p>A definição</p>

<pre class='editor codefull' data-name='editor_3' id='editor_3'>


 &lt;meta name=&quot;viewport&quot; 
     content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
</pre>

<p>é importante para a correta renderização do documento em dispositivos mobile, impedindo que os navegadores de celular redimensionem arbitrariamente aquilo que está sendo exibido na página. Este tipo de informação é fundamental, principalmente, quando utilizamos técnicas de design responsivo que fazem o trabalho de adequar o conteúdo para o dispositivo no qual ele será exibido.</p>

</div>
</body>
</html>

    