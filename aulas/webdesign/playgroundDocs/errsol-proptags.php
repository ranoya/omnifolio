<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: Erros | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: Erros | ReferenceDocs">
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

    <script>

    acegeneralconfig = { 
    mode: "ace/mode/html",
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true,
    showPrintMargin: false,
    highlightSelectedWord: true,
    wrap: true
    };

    Predata_editor_1 = "<styl" + "e>body, html, div, a { color: white; }</sty" + "le>";
    Predata_editor_2 = Predata_editor_1;
    Predata_editor_3 = Predata_editor_1;
    Predata_editor_4 = Predata_editor_1;
    Predata_editor_5 = Predata_editor_1;
    Predata_editor_6 = Predata_editor_1;
    Predata_editor_7 = Predata_editor_1;
    Predata_editor_8 = Predata_editor_1;

    </script>

<body>

  <div id="texto">
  <a name="Exerícios" class="indice">Exerícios</a>
<h1>Exerícios</h1>

  <p>Exercícios de identificação de erros na estrutura do código HTML</p>

  <p>Os exercícios à seguir apresentam as soluções para os códigos com erros disponíveis nos demais documentos. Se você não conseguiu resolver os problemas, estude cada código a seguir e o compare com o problema apresentado:</p>




<hr></hr>
<p>O texto deveria ficar em negrito:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_1' id='editor_1'>


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p class=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
</div>


  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_2' id='editor_2'>


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p id=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
</div>


<hr></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_3' id='editor_3'>


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p class=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
</div>

 <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_4' id='editor_4'>


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p style=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
</div>




<hr></hr>
<p>O texto deveria estar branco:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_5' id='editor_5'>


&lt;style&gt;
span { color: blue; }
.branco { color: white; }
&lt;/style&gt;

&lt;div class=&quot;branco&quot;&gt;
    &lt;span class=&quot;branco&quot;&gt;branco&lt;/span&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_5"></iframe>
</div>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_6' id='editor_6'>


&lt;style&gt;
span { color: blue; }
.branco { color: white; }
&lt;/style&gt;

&lt;div class=&quot;branco&quot;&gt;
    &lt;span&gt;branco&lt;/span&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_6"></iframe>
</div>



<hr></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_7' id='editor_7'>


&lt;p style=&quot;color: red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_7"></iframe>
</div>


  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_8' id='editor_8'>


&lt;p style=&quot;color red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_8"></iframe>
</div>



</div>
</body>
</html>

    