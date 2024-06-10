<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: BOX MODEL | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: BOX MODEL | ReferenceDocs">
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

    Predata_editor_3 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <a name="Box Model" class="indice">Box Model</a>
<h1>Box Model</h1>

  <p>Toda tag html, seja ela do tipo inline/conteúdo, ou do tipo block/bloco, está envolta em um grupo de camadas conhecida como <strong>Box Model</strong>. Entre seu conteúdo e os limites do espaço que ela ocupa na tela, temos o atributo <a href="javascript:carrega('css-padding.php');"><code>padding</code></a>, entre o final do <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> (espaçamento interno) e a área externa à tag, temos o atributo <a href="javascript:carrega('css-border.php');"><code>border</code></a>, e entre a tag no espaço externo e outras tags, temos o atributo <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>. O dimensionamento destes elementos é essencial um controle preciso do layout no documento web.</p>

  <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor:, white); border: 1px dashed var(--conteudo-fgcolor, white); width: 100%; text-align: center;">
    <br><code>margin</code><br><br>
    
    <div style="display: block; background-color: var(--conteudo-fgcolor, white); color: var(--conteudo-bgcolor, #8487BE); width: 80%; text-align: center; margin: auto;">
        <br><code>border</code><br><br>
      
      <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor, white); width: 80%; text-align: center; margin: auto;">
         <br><code>padding</code><br><br>
        

            <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor, white); border: 1px dashed var(--conteudo-fgcolor, white); width: 80%; text-align: center; margin: auto;">

                <p style="text-align: center;">conteúdo</p>
          
        </div>

        <br><br><br>


      </div>

      <br><br><br>


    </div>

    <br><br><br>

  </div>


  <p>Estes atributos são definidos através de <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>, <a href="javascript:carrega('css-border.php');"><code>border</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a>, ou aspecto por aspecto como através dos atributos específicos <a href="javascript:carrega('css-margin-bottom-style.php');"><code>margin-bottom-style</code></a> ou <a href="javascript:carrega('css-border-left-color.php');"><code>border-left-color</code></a>.</p>
 
  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { color: white; }
     span { 
          border: 3px dotted cyan;
          padding: 5px 10px 2px 20px; 
          margin: 30px;
      }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    um texto para completar o espa&ccedil;o ao longo do de baixo&lt;br&gt;
    texto com um &lt;span&gt;box model&lt;/span&gt; diferente no meio&lt;br&gt;
    outro texto para completar o espa&ccedil;o
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
  </div>

<a name="CSS Reset" class="indice">CSS Reset</a>
<h2>CSS Reset</h2>

<p>Como cada navegador vem com atrbiutos definidos originalmente diferentes uns dos outros para cada tag, aplica-se normalmente uma técnica conhecida como <strong>CSS Reset</strong>, zerando todos os atributos de <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>, <a href="javascript:carrega('css-border.php');"><code>border</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> (dentre outros atributos também) para que sejam redefinidos pontualmente. Esta é uma prática recomendada para todo código CSS para que o resultado visual seja consistente em qualquer navegador web.</p>

<a name="Uso" class="indice">Uso</a>
<h3>Uso</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { 
         padding: 0;
         margin: 0;
         border: 0;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    um texto para completar o espa&ccedil;o ao longo do de baixo&lt;br&gt;
    texto com um &lt;span&gt;box model&lt;/span&gt; diferente no meio&lt;br&gt;
    outro texto para completar o espa&ccedil;o
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>

<a name="Dimensões" class="indice">Dimensões</a>
<h2>Dimensões</h2>

<p>As dimensões <a href="javascript:carrega('css-width.php');"><code>width</code></a> e <a href="javascript:carrega('css-height.php');"><code>height</code></a> devem sempre considerar que <a href="javascript:carrega('css-border.php');"><code>border</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> ocupam espaço na tag. Estas definições de dimensionamento se aplicam à tag em conjunto com os atributos que lhe são internos, e podem acabar especificando dimensões maiores do que de seu nó pai ao desconsiderarem o <strong>box model</strong>.</p>

<a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
         text-align: right;
         color: white;
         width: 100%;
         padding: 30px;
         border: 5px solid cyan;
     }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;9 8 7 6 5 4 3 2 1&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
  </div>

<p>A dimensão de uma tag é a sua propriedade <a href="javascript:carrega('css-width.php');"><code>width</code></a> ou <a href="javascript:carrega('css-height.php');"><code>height</code></a> somadas às duas propriedades <a href="javascript:carrega('css-border.php');"><code>border</code></a> (<a href="javascript:carrega('css-border-left-width.php');"><code>border-left-width</code></a> + <a href="javascript:carrega('css-border-right-width.php');"><code>border-right-width</code></a> no caso de <a href="javascript:carrega('css-width.php');"><code>width</code></a>, e <a href="javascript:carrega('css-border-top-width.php');"><code>border-top-width</code></a> + <a href="javascript:carrega('css-border-bottom-width.php');"><code>border-bottom-width</code></a> no caso de <a href="javascript:carrega('css-height.php');"><code>height</code></a>), e também somada às duas propriedades <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> (<a href="javascript:carrega('css-padding-left.php');"><code>padding-left</code></a> + <a href="javascript:carrega('css-padding-right.php');"><code>padding-right</code></a> no caso de <a href="javascript:carrega('css-width.php');"><code>width</code></a>, e <a href="javascript:carrega('css-padding-top.php');"><code>padding-top</code></a> + <a href="javascript:carrega('css-padding-bottom.php');"><code>padding-bottom</code></a> no caso de <a href="javascript:carrega('css-height.php');"><code>height</code></a>).</p>

<div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor:, white); border: 1px dashed var(--conteudo-fgcolor, white); width: 100%; text-align: center; border-bottom: 0 transparent none;">
    <br>
    <div style="color: var(--conteudo-fgcolor, white); background-color: var(--conteudo-bgcolor, #8487BE); width: calc(51% - 2px); text-align: right; margin: auto;"><code style="color: var(--conteudo-highlight, #000081);">width</code></div>

    <div style="color: var(--conteudo-fgcolor, white); background-color: var(--conteudo-bgcolor, #8487BE); width: calc(51% - 2px); text-align: right; margin: auto; border-right: solid 1px var(--conteudo-highlight, #000081); border-left: solid 1px var(--conteudo-highlight, #000081); border-top: dashed 1px var(--conteudo-highlight, #000081); margin-bottom: 5px; border-bottom: 0 transparent none;"><br></div>
    

    <div style="display: block; background-color: var(--conteudo-fgcolor, white); color: var(--conteudo-bgcolor, #8487BE); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">
        <br><code>border</code><br><br>
      
      <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor, white); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">
         <br><code>padding</code><br><br>
        

            <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor, white); border: 1px dashed var(--conteudo-fgcolor, white); width: 80%; text-align: center; margin: auto; border-bottom: 0 transparent none;">

                <p style="text-align: center;">conteúdo</p>
          
        </div>




      </div>




    </div>



  </div>

</div>
</body>
</html>

    