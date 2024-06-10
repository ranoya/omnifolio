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

    </script>

<body>

  <div id="texto">
  <a name="Exerícios" class="indice">Exerícios</a>
<h1>Exerícios</h1>

  <p>Exercícios de identificação de erros na estrutura do código HTML</p>

  <p>Os exercícios à seguir apresentam erros no seu código. O intuito destes documentos é treiná-lo para a identificação destes problemas, de forma que você possa identifica e corrigir seu próprio código ao se deparar com algo que não funciona como o esperado. Nesta versão dos documentos, o editor mostrará erros, e fará a marcação da sintaxe com cores (highlight), o que nem sempre levará a identificação do problema.</p>




<hr></hr>
<p>O código deveria exibir um link com o texto "meu link":</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_1' id='editor_1'>


&lt;div&gt;
&lt;a href=&quot;https://www.ranoya.com&quot;
meu link
/a&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
</div>



<hr></hr>
<p>Um bloco de texto deveria ficar à esquerda, e outro à direita:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_2' id='editor_2'>


&lt;div style=&quot;float: right&quot;&gt;bloco &agrave; direita
&lt;div style=&quot;float: left&quot;&gt;bloco &agrave; esquerda
&lt;/div&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
</div>





<hr></hr>
<p>O link deveria ser apenas na palavra "link", mas está ocupando um espaço enorme:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_3' id='editor_3'>


&lt;style&gt;
div {
width: 150px;
height: 150px;
}
&lt;/style&gt;

&lt;a href=&quot;https://www.ranoya.com&quot;&gt;&lt;div&gt;
link
&lt;/div&gt;&lt;/a&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
</div>



<hr></hr>
<p>O texto deveria ficar à esquerda:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_4' id='editor_4'>


&lt;form&gt;
&lt;div style=&quot;float: right;&quot;&gt;
&lt;p style=&quot;float: left&quot;&gt;
teste
&lt;/div&gt;
&lt;/p&gt;
&lt;/form&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
</div>


<hr></hr>
<a name="reflexao" class="indice">Conhecimento envolvido</a>
<p><b>Conhecimento envolvido</b></p>
<p>Os problemas apresentados aqui dizem respeito exclusivamente a questões de <a href="javascript:carrega('sintaxe.php');">sintaxe</a> do código HTML. Não são problemas que envolvam atributos, dados ou especificações equivocadas; eles tratam apenas da escrita correta do código, como tags sendo fechadas da maneira certa, a posição de cada tag dentro da estrutura, dentre outras questões. Se você não conseguiu resolvê-los, procure ler com atenção a documentação relativa à estrutura do código, sobretudo o documento de <a href="javascript:carrega('sintaxe.php');">sintaxe</a>.</p>




</div>
</body>
</html>

    