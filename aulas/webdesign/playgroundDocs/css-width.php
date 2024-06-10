<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: WIDTH | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: WIDTH | ReferenceDocs">
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

    Predata_editor_1 = "<sty"+"le> body { padding: 0; margin: 0; }</sty" + "le>";

  </script>

  <div id="texto">

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <a name="width" class="indice">width</a>
 <h1>width</h1>

  <p>O atribuito <code>width</code> define o tamanho horizontal ocupado por uma tag na tela do navegador. Esta dimensão incorpora todos os elementos internos do <a href="javascript:carrega('boxmodel.php');">box model</a>, incluíndo o atribuito <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> e o atributo <a href="javascript:carrega('css-border.php');"><code>border</code></a>. Para que o atributo <code>width</code> possa ser aplicado, o atributo <a href="javascript:carrega('css-display.php');"><code>display</code></a> precisa ser diferente de <code>inline</code>, caso contrário, a dimensão horizontal será sempre a menor possível.</a></p>

  <div style="display: block; background-color: var(--conteudo-bgcolor, #8487BE); color: var(--conteudo-fgcolor:, white); border: 1px dashed var(--conteudo-fgcolor, white); width: 100%; text-align: center; border-bottom: 0 transparent none;">
    <br>
    <div style="width: calc(100% - 2px);"><code>margin</code></div>

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





  


  <p>Estes atributos são definidos através de <a href="javascript:carrega('css-margin.php');"><code>margin</code></a>, <a href="javascript:carrega('css-border.php');"><code>border</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a>, ou aspecto por aspecto como através dos atributos <a href="javascript:carrega('css-margin-right-style.php');"><code>margin-tight-style</code></a> ou <a href="javascript:carrega('css-border-left-color.php');"><code>border-left-color</code></a>, por exemplo.</p>
 

<p>A dimensão <code>width</code> deve sempre considerar que <a href="javascript:carrega('css-border.php');"><code>border</code></a> e <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> ocupam espaço na tag. <code>width</code> se aplica à tag em conjunto com os atributos que lhe são internos, e pode acabar especificando dimensões maiores do que de seu nó pai ao desconsiderar o <a href="javascript:carrega('boxmodel.php');">box model</a></p>

<a name="Exemplo1" class="indice">Exemplo</a>
 <h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
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
  <iframe id="View_editor_1"></iframe>
  </div>

<p>A dimensão de uma tag é o seu atributo <code>width</code> somado às duas propriedades <a href="javascript:carrega('css-border.php');"><code>border</code></a> (<a href="javascript:carrega('css-border-left-width.php');"><code>border-left-width</code></a> + <a href="javascript:carrega('css-border-right-width.php');"><code>border-right-width</code></a>), e também somada às duas propriedades <a href="javascript:carrega('css-padding.php');"><code>padding</code></a> (<a href="javascript:carrega('css-padding-left.php');"><code>padding-left</code></a> + <a href="javascript:carrega('css-padding-right.php');"><code>padding-right</code></a>).</p>

<a name="O conteúdo tem prioridade sobre o dimensionamento" class="indice">O conteúdo tem prioridade sobre o dimensionamento</a>
 <h2>O conteúdo tem prioridade sobre o dimensionamento</h2>

<p>Se o atributo <a href="javascript:carrega('css-overflow.php');"><code>overflow</code></a>, ou mais especificamente o <a href="javascript:carrega('css-overflow-x.php');"><code>overflow-x</code></a>, não forem definidos para <code>hidden</code> ou <code>scroll</code>, o conteúdo de uma tag forcará o seu redimensionamento para acomodá-lo. O conteúdo sempre tem prioridade sobre a dimensão da tag.</a>

<a name="Exemplo" class="indice">Exemplo</a>
 <h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
    p {
         border-top: 1px dashed white;
         border-left: 1px solid white;
         border-right: 1px solid white;
         width: 93px;
         padding: 0;
         padding-top: 5px;
         padding-bottom: 5px;
         padding-right: 5px;
         text-align: right;
         color: white;
    }
    div { 
         width: 88px;
         padding-left: 5px;
         padding-right: 5px;
         border: 1px solid white;
         color: white;
    }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;p&gt;100px&lt;/p&gt;
    &lt;div&gt;normal&lt;/div&gt;
    &lt;div&gt;ConteúdoForçandoOTamanhoDaTagPorSerMaiorQueAEspecificação&lt;/div&gt;
    &lt;div&gt;Conteúdo que pode ser quebrado não força o tamanho&lt;/div&gt;
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

    