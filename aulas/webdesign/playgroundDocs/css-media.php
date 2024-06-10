<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: MEDIA | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: MEDIA | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de CSS">
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

    Predata_editor_1 = "";
    Predata_editor_2 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <a name="@media" class="indice">@media</a>
<h1>@media</h1>

  <p>A diretriz <code>@media</code> estabelece condições específicas quanto às dimensões e o substrato onde o documento HTML está sendo exibido, e permite que um <a href="javascript:carrega('sintaxecss.php');">override dos atributos</a> seja realizado automaticamente quando estas condições são encontradas.</p>

  <a name="Sintaxe" class="indice">Sintaxe</a>
<h2>Sintaxe</h2>

  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
@media only screen and (min-width: 400px and max-width: 800px) {

  a {

    text-decoration: none;

  }
  
}
</pre>

  <p>A diretriz recebe dois tipos de informação para cada condição: o primeiro é o tipo de mídia para qual a condição será aplicada, que pode ser acompanhado dos operadores <code>not</code> para excluí-la da condição, ou <code>only</code> para torná-la exclusiva. O segundo tipo de informação são as características da mídia para que os <a href="javascript:carrega('sintaxecss.php');">overrides</a> sejam realizados, que podem ser acompanhados e concatenados através dos operadores <code>and</code>, para concatená-los, <code>or</code> para substituí-los, ou <code>not</code> para excluí-los na condição.</p>

<a name="Tipos de mídia" class="indice">Tipos de mídia</a>
<h3>Tipos de mídia</h3>

<table>
  <tr>
    <th>Mídia</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>all</td>
    <td>todos os tipos de mídia</td>
  </tr>
  <tr>
    <td>print</td>
    <td>versão da página para impressão</td>
  </tr>
  <tr>
    <td>screen</td>
    <td>telas (computadores, tablets, celulares, etc)</td>
  </tr>
  <tr>
    <td>speech</td>
    <td>leitores de tela para acessibilidade</td>
  </tr>
</table>

<a name="Carcterísticas" class="indice">Carcterísticas</a>
<h3>Carcterísticas</h3>

<table>
  <tr>
    <th>Variável</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>color</td>
    <td>quantidade específicade bits por cor</td>
  </tr>
  <tr>
    <td>color-index</td>
    <td>quantidade específica de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>height</td>
    <td>altura específica do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>inverted-colors</td>
    <td>o sistema operacional está com as cores invertidas?</td>
  </tr>
  <tr>
    <td>max-aspect-ratio</td>
    <td>valor máximo na relação entre largura e altura no viewport do dispositivo</td>
  </tr>
  <tr>
    <td>max-color</td>
    <td>valor máximo na quantidade de bits por cor</td>
  </tr>
  <tr>
    <td>max-color-index</td>
    <td>valor máximo na quantidade de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>max-height</td>
    <td>valor máximo na altura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>max-width</td>
    <td>valor máximo na largura do viewport no dispositivo</td>
  </tr> 
  <tr>
    <td>min-aspect-ratio</td>
    <td>valor mínimo na relação entre largura e altura no viewport do dispositivo</td>
  </tr> 
  <tr>
    <td>min-color</td>
    <td>valor mínimo na quantidade de bits por cor</td>
  </tr>
  <tr>
    <td>min-color-index</td>
    <td>valor mínimo na quantidade de cores que o dispositivo pode exibir</td>
  </tr>
  <tr>
    <td>min-height</td>
    <td>valor mínimo na altura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>min-width</td>
    <td>valor mínimo na largura do viewport no dispositivo</td>
  </tr>
  <tr>
    <td>orientation</td>
    <td>orientação do dispositivo (landscape | portrait)</td>
  </tr> 
  <tr>
    <td>width</td>
    <td>largura específica do viewport no dispositivo</td>
  </tr>      
</table>


<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
         background-color: blue;
         color: white;
     }

     @media (max-width: 700px) {

     div {
         background-color: red;
     }
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;vermelho se o frame for menor que 700px&lt;/div&gt;
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

    