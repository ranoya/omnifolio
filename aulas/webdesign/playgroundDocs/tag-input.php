<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: input | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: form | ReferenceDocs">
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
  <a name="input" class="indice">input</a>
<h1><code>&lt;input&gt;</code></h1>

  <p>A tag <code>&lt;input&gt;</code> cria diferentes campos de entrada de dados no documento HTML. No geral, <code>&lt;input&gt;</code> deve ser usada dentro da tag <a href="javascript:carrega('tag-form');"><code>&lt;form&gt;</code></a>, para que possa passar os dados coletados para algum outro documento através dos processos nativos de <a href="javascript:carrega('tag-form');"><code>&lt;form&gt;</code></a>. Contudo, nada impede que os dados das tags <code>&lt;input&gt;</code>sejam coletados por programação javascript, tratados e encaminhados para outro documento através de rotinas preparadas para fazer isso; neste caso, não há qualquer obrigatoriedade dos <code>&lt;input&gt;</code> serem alocados dentro de uma tag <a href="javascript:carrega('tag-form');"><code>&lt;form&gt;</code></a>.</p>

  <p>A tag <code>&lt;input&gt;</code> é uma das poucas tags que não possui fechamento <code>&lt;/input&gt;</code>.</p> 

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;input type=&#039;text&#039; name=&#039;minhavar&#039; id=&#039;xpto&#039;&gt;
</pre>

  <a name="Tipologias de entrada de dados" class="indice">Tipologias de entrada de dados</a>
<h2>Tipologias de entrada de dados</h2>

  <p><code>&lt;input&gt;</code> possui uma quantidade muito grande de propriedades disponíveis, que na sua maioria são controladas, hoje, através do código CSS. Abaixo apresentamos apenas alguns valores (mais usuáis) para a propriedade <code>type</code>, que define o tipo de entrada de dados em <code>&lt;input&gt;</code>.</p>

<table>
  
  <tr>
    <th>type</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>button</td>
    <td><code>&lt;input type=&quot;button&quot; value=&quot;meu bot&atilde;o&quot;&gt;</code></td>
    <td>Cria um botão genérico, como <input type='button' value='este' style="display: inline; width: 80px; margin: 0;"> para ser utilizado por programação javascript</td>
  </tr>
  <tr>
    <td>checkbox</td>
    <td><code>&lt;input type=&quot;checkbox&quot;&gt; name=&quot;chk1&quot; checked&gt; Opção 1</code></td>
    <td>Cria uma entrada binária como <input type='checkbox' checked style="display: inline; margin: 0; width: 25px;">esta</td>
  </tr>
   <tr>
    <td>color</td>
    <td><code>&lt;input type=&quot;color&quot;&gt; name=&quot;cor&quot;&gt;</code></td>
    <td>Cria uma entrada para registros de cor como <input type="color" style="display: inline; width: 80px; margin: 0;"> esta</td>
  </tr>
  <tr>
    <td>date</td>
    <td><code>&lt;input type=&quot;date&quot;&gt; name=&quot;dia&quot;&gt;</code></td>
    <td>Cria uma entrada de data de calendário, como esta <input type="date" style="display: inline; width: 160px; margin: 0;"></td>
  </tr>
  <tr>
    <td>file</td>
    <td><code>&lt;input type=&quot;file&quot;&gt; name=&quot;arquivo&quot;&gt;</code></td>
    <td>Cria uma entrada para envio de arquivos, como esta: <input type="file" style="margin: 0;"></td>
  </tr>
  <tr>
    <td>hidden</td>
    <td><code>&lt;input type=&quot;hidden&quot;&gt; name=&quot;arquivo&quot;&gt;</code></td>
    <td>O tipo <code>hidden</code> não aparece na tela, e serve para guardar variáveis para serem enviadas à outras páginas, ou arquivar dados temporários</td>
  </tr>
  <tr>
    <td>password</td>
    <td><code>&lt;input type=&quot;password&quot;&gt; name=&quot;senha&quot;&gt;</code></td>
    <td>Cria uma entrada de texto onde os valores inseridos aparecem na tela protegidos por caracteres <code>*</code>, como esta: <input type="password" style="width: 120px; margin: 0;"></td>
  </tr>
  <tr>
    <td>radio</td>
    <td><code>&lt;input type=&quot;radio&quot;&gt; name=&quot;optA&quot; checked&gt; Opção A</code></td>
    <td>Cria uma entrada de seleção com opções feitas por seletores como <input type="radio" style="display: inline; margin: 0; width: 25px;" checked> este</td>
  </tr>
  <tr>
    <td>reset</td>
    <td><code>&lt;input type=&quot;reset&quot;&gt;</code></td>
    <td>Cria um botão de reset como <input type="reset" value="este" style="display: inline; width: 80px; margin: 0;">, que apaga dos os dados do formulário</td>
  </tr>
   <tr>
    <td>text</td>
    <td><code>&lt;input type=&quot;reset&quot;&gt;</code></td>
    <td>Cria um campo de texto como <input type="text" value="este" style="width: 120px; margin: 0;"></td>
  </tr>

</table>
  
<p>Muitos dos campos de <code>&lt;input&gt;</code> podem ter um valor <i>default</i> estabelecido pela propriedade <code>value</code>. Campos como <code>checkbox</code> ou <code>radio</code> podem ser definidos previamente como marcados através da <i>keyword</i> <code>checked</code> dentro da tag.</p>


<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;form method=GET action=&#039;https://www.google.com/search&#039; target=&#039;_blank&#039; &gt;
      &lt;input type=&#039;text&#039; value=&#039;código html&#039; name=&#039;q&#039;&gt;
      &lt;input type=&#039;submit&#039; value=&#039;googlar&#039; &gt;
    &lt;/form&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

</div>
</body>
</html>

    