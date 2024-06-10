<?php

$trimulr = $_SERVER['REQUEST_URI'];
$complemento = "";
if (strpos($trimulr, "?") != false) {
$complemento = substr($trimulr, strpos ( $trimulr , "?"));
} 

//echo "<script>alert('".$complemento."');</script>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin">
    <meta name="pinterest" content="nohover">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <title>HTML - Guia de Referência</title>
    <meta name="generator" content="artesanal">
      <meta name="description" content="">
    <meta name="author" content="Guilherme Ranoya">
    <link REL="SHORTCUT ICON" href="https://www.ranoya.com/aulas/referenceDocs/icon.png">   
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/referenceDocs/cover.jpg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/referenceDocs/cover.jpg">
    <meta property="og:image:width" content="1145" />
    <meta property="og:image:height" content="601" />
    <meta name="theme-color" content="#8487BE">
    <meta name="msapplication-navbutton-color" content="#8487BE">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8487BE">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.ranoya.com/public/dev/processing.min.js"></script>
    <script src="https://www.ranoya.com/aulas/referenceDocs/dev.js"></script>
    <script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ace.js"></script>
    <script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ext-language_tools.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.ranoya.com/aulas/referenceDocs/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_GET['theme'] ?>.css">

    <link rel="stylesheet" type="text/css" href="https://www.ranoya.com/aulas/webdesign/referenceDocs/tipografia.css">
</head>
<body>
<a href="javascript:menu()" id="iconmenumobile"><img src="https://assets.ranoya.com/WebsiteIcons/leftgray.svg" style="width: 100%; padding-top: 50vh;"></a>
<div id="elementoDocs"></div>
<div id="conteudoDocs">

  <h1>Propriedades gerais</h1>

  <p>Todas as tags HTML podem receber propriedades que modificam seu comportamento/utilização no código. Algumas tags possuem propriedades específicas que só podem ser atribuídas a elas (ou que não têm qualquer efeito sobre outras tags), como por exemplo a propriedade <code>charset</code> da tag <a href="tag-html.php<?php echo $complemento; ?>"><code>&lt;meta&gt;</code></a>, mas todas recebem algumas propriedades gerais, úteis para o relacionamento do código HTML com outros códigos (como o CSS e o javascript), ou para plataformas como os mecanismos de busca.</p>

  <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>

&lt;html lang=&quot;pt&quot; style=&quot;margin: 30px;&quot;&gt;
</pre>

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

  <h2>CSS Override</h2>

  <p>É possível atribuir diversas classes CSS para uma mesma tag; estas classes irão se sobrepor, isto é, suas propriedades irão sobrepor umas-às-outras, na sequência em que são indicadas. A sobreposição acontece separando-se os nomes das classes por espaço na propriedade <code>class</code>. Este recurso não funciona em navegadores antigos, pois é próprio da última especificação do código CSS, o CSS3.</p>

<div class="diagramahalf">
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


<p class="separabloco"></p>

<p class="copyright" id="copyright"><svg width="719" height="719" viewBox="0 0 719 719" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="ranoya.com-regexredux-truewhite">
<path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M719 0H0V719H719V0ZM230.686 183.844H337.371L230.686 535.31H124L230.686 183.844ZM383.351 183.844H381.782L275.097 535.31H381.782L435.91 356.992L490.037 535.31H596.723L490.037 183.844H488.468H383.351Z" />
</g>
</svg> COPYRIGHT &copy; 2019, PROF. DR. GUILHERME RANOYA, dDESIGN | UFPE</p>    




</div>
</body>
</html>

    