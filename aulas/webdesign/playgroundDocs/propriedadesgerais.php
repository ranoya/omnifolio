<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: Propriedades Gerais | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: Propriedades Gerais | ReferenceDocs">
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
  <a name="propriedades" class="indice">Propriedades gerais</a>
  <h1>Propriedades gerais</h1>

  <p>Todas as tags HTML podem receber propriedades que modificam seu comportamento/utilização no código. Algumas tags possuem propriedades específicas que só podem ser atribuídas a elas (ou que não têm qualquer efeito sobre outras tags), como por exemplo a propriedade <code>charset</code> da tag <a href="javascript:carrega('tag-html.php');"><code>&lt;meta&gt;</code></a>, mas todas recebem algumas propriedades gerais, úteis para o relacionamento do código HTML com outros códigos (como o CSS e o javascript), ou para auxiliar plataformas como os mecanismos de busca.</p>

<a name="uso" class="indice">Uso</a>
  <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;html lang=&quot;pt&quot; style=&quot;margin: 30px;&quot;&gt;
</pre>

<a name="propriedades2" class="indice">Propriedades</a>
  <h2>Propriedades</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th>Valores</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>class</code></td>
    <td>nome de uma classe CSS definida pelo programador</td>
    <td><code>&lt;p class=&quot;pequeno&quot;&gt;</code></p>
    <td>Atribui propriedades CSS ao elemento html e registra o nó no conjunto de elementos marcados com a classe para localização por programação</td>
  </tr>
  <tr>
    <td><code>id</code></td>
    <td>nome definido pelo programador</td>
    <td><code>&lt;div id=&quot;logotipo&quot;&gt;</code></td>
    <td>Especifica um identificador único ao elemento para localização por programação, e atribui propriedades CSS definidas para este id</td>
  </tr>
  <tr>
    <td><code>lang</code></td>
    <td>cigla da lingua, no padrão <a href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1</a></td>
    <td><code>&lt;html lang=&quot;pt&quot;&gt;</code></td>
    <td>Especifica em que lingua está o conteúdo da tag em questão</td>
  </tr>
  <tr>
    <td><code>style</code></td>
    <td>código CSS</td>
    <td><code>&lt;p style=&quot;color: blue&quot;&gt;</code></td>
    <td>Atribui propriedades CSS à tag diretamente, sem a necessidade de classes ou id</td>
  </tr>

</table>

<a name="overhide" class="indice">CSS Overhide</a>
  <h2>CSS Override</h2>

  <p>É possível atribuir diversas classes CSS para uma mesma tag; estas classes irão se sobrepor, isto é, suas propriedades irão sobrepor umas-às-outras, na sequência em que são indicadas. A sobreposição acontece separando-se os nomes das classes por espaço na propriedade <code>class</code>. Este recurso não funciona em navegadores antigos, pois é próprio da última especificação do código CSS, o CSS3.</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2'>

&lt;style&gt;
  .tipoA {
    color: black;
    font-size: 24px;
  }
  .tipoB {
    color: white;
    text-decoration: underline;
  }
&lt;/style&gt;

&lt;p class=&quot;tipoA&quot;&gt;classe tipoA&lt;/p&gt;
&lt;p class=&quot;tipoB&quot;&gt;classe tipoB&lt;/p&gt;
&lt;p class=&quot;tipoA tipoB&quot;&gt;Override&lt;/p&gt;
</pre>
</div>

<div class="diagramahalf">
<iframe id="View_editor_2"></iframe>
</div>

</div>
</body>
</html>

    