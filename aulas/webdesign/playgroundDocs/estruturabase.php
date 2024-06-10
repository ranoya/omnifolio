<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: Estrutura | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: Estrutura | ReferenceDocs">
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

  <div id="texto">
  <a name="Organização do código HTML" class="indice">Organização do código HTML</a>
<h1>Organização do código HTML</h1>

  <p>Por convenção, há uma estrutura básica que deveria ser obedecida em todo código HTML. Esta estrutura divide o código entre uma primeira parte onde são feitas definições e registradas meta-informações sobre o documento, chamada <a href="javascript:carrega('tag-head.php');"><code>&lt;head&gt;</code></a>, e uma segunda parte onde se localiza aquilo que efetivamente será visto no navegador, chamada <a href="javascript:carrega('tag-body.php');"><code>&lt;body&gt;</code></a>. A estrutura básica de um código HTML deve ser a seguinte:</p>

    <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
        
    &lt;/head&gt;

    &lt;body&gt;
        
    &lt;/body&gt;
  &lt;/html&gt;
  </pre>


  <p>O documento se inicia com uma declaração de versão 5 do código HTML <code>&lt;!DOCTYPE html&gt;</code>, que para outras versões do código, como o HTML 4.01, ou o XHTML, são bem diferentes. A tag <a href="javascript:carrega('tag-html.php');"><code>&lt;html&gt;</code></a> engloba todo o código HTML efetivamente: ela é o início e o fim do que o navegador deverá realizar, depois que ele já sabe se tratar de um código HTML5 como declarado pela tag <code>&lt;!DOCTYPE html&gt;</code>.</p>

  <p>Dentro da tag <a href="javascript:carrega('tag-head.php');"><code>&lt;head&gt;</code></a> não devem constar quaisquer conteúdos que devam ser apresentados na tela do navegador; se algum tipo de conteúdo for colocado ali, ele será exibido de alguma forma (talvez não seja a forma desejada), mas isto não deveria ser construído desta maneira. Dentro dela devem existir tags como <a href="javascript:carrega('tag-title.php');"><code>&lt;title&gt;</code></a>, <a href="javascript:carrega('tag-meta.php');"><code>&lt;meta&gt;</code></a> ou <a href="javascript:carrega('tag-style.php');"><code>&lt;style&gt;</code></a>, que estabelecem definições importantes sobre o que é o documento sendo exibido pelo navegador (meta-informação, resumidamente), dentre outras tags que podem ser vistas na própria tag <a href="javascript:carrega('tag-link.php');"><code>&lt;head&gt;</code></a> deste guia de referência.</p>

  <p>A seção seguinte, <a href="javascript:carrega('tag-body.php');"><code>&lt;body&gt;</code></a>, registra todo o roteiro do que deve ser montado no navegador do usuário. Todos os conteúdos, blocos, links, etc. devem estar contidos dentro desta tag.</p>

  <p>Por convenção, a tag <a href="javascript:carrega('tag-html.php');"><code>&lt;html&gt;</code></a> não deveria conter diretamente nenhuma outra tag além de <a href="javascript:carrega('tag-head.php');"><code>&lt;head&gt;</code></a> e <a href="javascript:carrega('tag-body.php');"><code>&lt;body&gt;</code></a>, assim como não deveriam existir mais de uma <a href="javascript:carrega('tag-head.php');"><code>&lt;head&gt;</code></a> ou <a href="javascript:carrega('tag-body.php');"><code>&lt;body&gt;</code></a> em um código HTML. Este tipo de erro não fará com que o código deixe de funcionar, mas ele pode eventualmente não funcionar do jeito esperado, e, conceitualmente, trata-se de um código errado. O exemplo abaixo, consequentemente, pode até funcionar, mas contém um erro de estrutura:</p>

    <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
        
    &lt;/head&gt;

    &lt;body&gt;
        conteúdo 1
    &lt;/body&gt;

    &lt;body&gt;
        conteúdo 2
    &lt;/body&gt;
  &lt;/html&gt;
  </pre>

<p>Abaixo um exemplo de código html estruturalmente correto, e o produto visível deste código:</p>

  <pre class='editor codefull' data-name='editor_3' id='editor_3'>


    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
      &lt;head&gt;
          &lt;meta name=&quot;author&quot; content=&quot;Guilherme Ranoya&quot;&gt;
          &lt;style&gt;
            a {
              color: white;
            }
          &lt;/style&gt;
      &lt;/head&gt;

      &lt;body&gt;
          &lt;a href=&quot;https://www.ranoya.com&quot;&gt;
            Meu Site
          &lt;/a&gt;
      &lt;/body&gt;
    &lt;/html&gt;
  </pre>

  <iframe id="View_editor_3" style="height: 100px;"></iframe>

<p>As informações contidas dentro da tag <a href="javascript:carrega('tag-style.php');"><code>&lt;style&gt;</code></a> são outro tipo de código, como se pode perceber pela sintaxe. Dentro da tag <a href="javascript:carrega('tag-style.php');"><code>&lt;style&gt;</code></a> ficam definidas as propriedades de <a href="javascript:carrega('introCSS.php');">Cascade Style Sheets / CSS</a>, que definem características visuais dos conteúdos exibidos pelo código HTML. De forma simples, o código HTML cuida dos dados/conteúdos e sua hierarquia/estrutura, e o código CSS cuida da aparência destes dados/conteúdos. Trocando em miúdos, não é no código HTML que se define o layout de um website, e sim no CSS; mas não é possível trocar a ordem dos conteúdos apresentados na tela pelo CSS, já que a estrutura/esqueleto do documento fica por conta do HTML.</p>

<p>Nos exemplos abaixo, esta diferença e o papel de cada código pode ficar mais evidente:</p>

<div class="diagramahalf firstblock">

  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;style&gt;
        * { border: solid 1px blue; }



      &lt;/style&gt;
    &lt;/head&gt;

    &lt;body&gt;
      &lt;div class=&#039;topo&#039;&gt;
      &lt;/div&gt;
      &lt;div class=&#039;conteudo&#039;&gt;
        Texto da p&aacute;gina vai aqui
      &lt;/div&gt;
      &lt;ul class=&quot;menu&quot;&gt;
        &lt;li&gt;Menu 1&lt;/li&gt;
        &lt;li&gt;Menu 2&lt;/li&gt;
        &lt;li&gt;Menu 3&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/body&gt;
  &lt;/html&gt;
</pre>

<iframe id="View_editor_4"></iframe>

</div>


<div class="diagramahalf">

  <pre class='editor codefull' data-name='editor_5' id='editor_5'>


&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;style&gt;
        .topo { background-color: white; display: bloc; width: 100%; height: 40px ;}
        .conteudo { color: white; border: 1px solid white; float: right; margin: 0; padding: 0; margin-top: 2px; margin-left: 1px; padding-left: 3px; padding-top: 3px; padding-bottom: 53px; width: calc(100% - 107px); }
        ul { float: left; width: 100px; margin: 0; padding: 0; margin-top: 2px;}
        li { margin: 0; padding: 5px 0 5px 0; display: block; margin-bottom: 2px; width: 100px; clear: both; float: left; background-color: white; color: blue; list-style-type: none; text-align: center; }
      &lt;/style&gt;
    &lt;/head&gt;

    &lt;body&gt;
      &lt;div class=&#039;topo&#039;&gt;
      &lt;/div&gt;
      &lt;div class=&#039;conteudo&#039;&gt;
        Texto da p&aacute;gina vai aqui
      &lt;/div&gt;
      &lt;ul&gt;
        &lt;li&gt;Menu 1&lt;/li&gt;
        &lt;li&gt;Menu 2&lt;/li&gt;
        &lt;li&gt;Menu 3&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/body&gt;
  &lt;/html&gt;
</pre>

<iframe id="View_editor_5"></iframe>
</div>

<p class="separabloco">A diferença entre os dois códigos é apenas o CSS.</p>

</div>
</body>
</html>

    