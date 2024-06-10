<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: form | ReferenceDocs</title>
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
  <a name="<code>&lt;form&gt;</code>" class="indice"><code>&lt;form&gt;</code></a>
<h1><code>&lt;form&gt;</code></h1>

  <p>A tag <code>&lt;form&gt;</code> cria um bloco para que tags de formulário e seus dados sejam agrupados e encaminhados para outro documento, em conjunto. Há muitas formas de se construir formulários em documentos HTML, e não é mais necessário que as tags de formulário como <a href="javascript:carrega('tag-input');"><code>&lt;input&gt;</code></a> ou <a href="javascript:carrega('tag-select');"><code>&lt;select&gt;</code></a> estejam contidas dentro de uma tag <code>&lt;form&gt;</code>. Mas ela continua sendo útil para reúnir de forma simples um conjunto de informações que possam ser passadas como variáveis para outro documento através de um <a href="javascript:carrega('tag-input');"><code>&lt;input type='submit'&gt;</code></a>.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;form method=GET action=&#039;https://www.google.com/search&#039;&gt;

  [HTML]

&lt;/form&gt;
</pre>
  
  <a name="Submit" class="indice">Submit</a>
<h2>Submit</h2>

  <p>A instrução nativa (sem javascript) para que os dados sejam enviados para outro documento é o <a href="javascript:carrega('tag-input');"><code>&lt;input type='submit'&gt;</code></a>. Cada tag <a href="javascript:carrega('tag-input');"><code>&lt;input type='submit'&gt;</code></a> ativa a ação definida na propriedade <code>action</code> da tag <code>&lt;form&gt;</code> de qual ela faz parte. Uma tag <a href="javascript:carrega('tag-input');"><code>&lt;input type='submit'&gt;</code></a> fora de uma tag <code>&lt;form&gt;</code> não realiza nenhuma ação.</p>

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
      &lt;input type=&#039;text&#039; name=&#039;q&#039;&gt;
      &lt;input type=&#039;submit&#039; value=&#039;googlar&#039; &gt;
    &lt;/form&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

  <a name="AJAX, e envio de dados por programação" class="indice">AJAX, e envio de dados por programação</a>
<h2>AJAX, e envio de dados por programação</h2>

  <p>A tag <code>&lt;form&gt;</code> tem deixado de ser utilizada nos formulários frente a mecanismos mais inteligente de troca de dados com progração javascript, principalmente os mecanismos assíncronos que trocam dados no plano de fundo sem sair do próprio documento, conhecidos como AJAX (Assincronous Javascript and XML). Além das técnicas de AJAX, também é possível capturar os dados de cada <a href="javascript:carrega('tag-input');"><code>&lt;input&gt;</code></a> no código via javascript, e construir uma URL para encaminhar estes dados sem a necessidade da tag <code>&lt;form&gt;</code> ou do botão <a href="javascript:carrega('tag-input');"><code>&lt;input type='submit'&gt;</code></a>. Estes procedimentos, contudo, exigem conhecimentos razoáveis tanto em programação javascript, como programação back-end para receber e tratar os dados no servidor web.</p>
  
<a name="Tabela de propriedades importantes" class="indice">Tabela de propriedades importantes</a>
<h2>Tabela de propriedades importantes</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 2>Valores</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>method</code></td>
    <td>GET</td>
    <td>POST</td>
    <td>Forma como as variáveis são passadas ao próximo documento: via URL (GET), ou dentro do cabeçalho do protocolo HTTP (POST)<br>GET permite que todos os valores fiquem visíveis na URL e possam ser alterados (não se deve passar variáveis secretas, como senhas, por GET)<br>POST permite que o usuário não saiba das variáveis, mas também não permite que sejam modificadas na URL</td>
  </tr>
  <tr>
    <td><code>action</code></td>
    <td colspan=2>URL</td>
    <td>Endereço ou arquivo para onde as variáveis devem ser encaminhadas</td>
  </tr>
  <tr>
    <td><code>target</code></td>
    <td>_self</td>
    <td>_blank</td>
    <td>Especifica como o navegador abrirá o link, se é utilizando a janela/aba atual, ou se ele abrirá uma nova janela/aba com ele</td>
  </tr>

</table>

</div>
</body>
</html>

    