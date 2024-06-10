<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: FUNÇÕES | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: FUNÇÕES | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de CSS">
    <meta property="og:type" content="article"><link rel="icon" type="image/png" href="https://www.ranoya.com/aulas/playgroundDocs/icon.png">
<link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/referencedocsFavicon144.png" />
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

  <img src="https://www.ranoya.com/Assets/WebsiteIcons/TaxoCSS.svg" class="codetype">
  <h1>Funções CSS</h1>

  <p>Através das <code>funções</code> incluídas no código CSS é possível trabalhar com algumas variáveis e operações lógicas que podem facilitar muito a maneira como o construímos.</p>

  <h2>Relação de funções CSS</h2>


<table>
  <tr>
    <th>Função</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>attr()</code></td>
    <td>Retorna o valor de um atributo de um elemento selecionado</td>
  </tr>
  <tr>
    <td><code>calc()</code></td>
    <td>Opera cálculos sobre medidas e valores do CSS</td>
  </tr>
  <tr>
    <td><code>hsl()</code></td>
    <td>Permite definir cores através do sistema HSL</td>
  </tr>
  <tr>
    <td><code>hsla()</code></td>
    <td>Permite definir cores através do sistema HSL usando opacidade/transparência</td>
  </tr>
  <tr>
    <td><code>linear-gradient()</code></td>
    <td>Permite definir um gradiente linear de background</td>
  </tr>
 <tr>
    <td><code>radial-gradient()</code></td>
    <td>Permite definir um gradiente radial de background</td>
  </tr>
 <tr>
    <td><code>rgb()</code></td>
    <td>Permite definir cores através do sistema RGB com valores entre 0 e 255</td>
  </tr>
 <tr>
    <td><code>rgba()</code></td>
    <td>Permite definir cores através do sistema RGB com valores entre 0 e 255 e utilizando opacidade/transparência</td>
  </tr>
 <tr>
    <td><code>url()</code></td>
    <td>estabelece o link com um arquivo externo como uma fonte, uma imagem ou qualquer outro tipo de arquivo externo necessário</td>
  </tr>
 <tr>
    <td><code>var()</code></td>
    <td>acessa uma variável contendo um valor</td>
  </tr>
</table>


<h2><code>attr()</code></h2>

<p>A <code>função attr()</code> é capaz de capturar algum atributo/parâmetro do elemento ao qual ela está sendo utilizada.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     a {
     color: white;
   }
     a:after {
      content: &quot; [&quot; attr(href) &quot;]&quot;;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;https://www.ranoya.com&quot;&gt;LINK&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
  </div>


<h2><code>calc()</code></h2>

<p>A <code>função calc()</code> é capaz de fazer cálculos sobre os valores e medidas do CSS.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        width: calc(100% - 20px);
        border: 1px solid white;
        color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
  </div>




<h2><code>hsl()</code></h2>

<p>A <code>função hsl()</code> define uma cor utilizando o sistema HSL. ela recebe 3 variáveis: espectro, saturação e iluminação.</p>

<table>
<tr><th>variável</th><th>valor</th></tr>
  <tr><td>espectro</td><td>0 a 360, sendo 0 vermelho, 120 verde, e 240 azul</td></tr>
  <tr><td>saturação</td><td>0% a 100%, sendo 0% esmaecido e 100% intenso</td></tr>
  <tr><td>iluminação</td><td>0% a 100%, sendo 0% preto e 100% branco</td></tr>
</table>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        background-color: hsl(120,60%,70%);
        color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
  </div>



<h2><code>hsla()</code></h2>

<p>A <code>função hsla()</code> define uma cor utilizando o sistema HSL e um valor para transparência/opacidade. ela recebe 4 variáveis: espectro, saturação, iluminação e alfa.</p>

<table>
<tr><th>variável</th><th>valor</th></tr>
  <tr><td>espectro</td><td>0 a 360, sendo 0 vermelho, 120 verde, e 240 azul</td></tr>
  <tr><td>saturação</td><td>0% a 100%, sendo 0% esmaecido e 100% intenso</td></tr>
  <tr><td>iluminação</td><td>0% a 100%, sendo 0% preto e 100% branco</td></tr>
  <tr><td>alfa</td><td>0 a 1, sendo 0 transparente e 1 opaco</td></tr>
</table>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        background-color: hsla(120,60%,70%,0.5);
        color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
  </div>



<h2><code>linear-gradient()</code></h2>

<p>A <code>função linear-gradient()</code> define granidente de cor em uma direção para ser usado como background. A <code>função</code> recebe um parâmetro como direção/ângulo, e pelo menos 2 parâmetros de cor.</p>

<table>
<tr><th>direção exemplo</th><th>descrição</th></tr>
  <tr><td>180deg</td><td>180 graus</td></tr>
  <tr><td>to right</td><td>para direita</td></tr>
  <tr><td>to bottom right</td><td>para baixo e para direita</td></tr>
  <tr><td>to top</td><td>para cima</td></tr>
</table>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_5' id='editor_5'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
   div {
    height: 200px;
    background-image: linear-gradient(to top right, red,orange,yellow,green,#000000);
    color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_5"></iframe>
  </div>




<h2><code>rgb()</code></h2>

<p>A <code>função rgb()</code> define uma cor utilizando o sistema RGB com valores de 0 à 255 ou de 0% a 100% para cada canal. ela recebe 3 variáveis: red, green e blue.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_6' id='editor_6'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        background-color: rgb(128,128,128);
        color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_6"></iframe>
  </div>



<h2><code>rgba()</code></h2>

<p>A <code>função rgba()</code> define uma cor utilizando o sistema RGB com valores de 0 à 255 ou de 0% a 100% para cada canal, e um valor de 0 a 1 para a opacidade. Ela recebe 4 variáveis: red, green, blue e alfa.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_7' id='editor_7'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        background-color: rgba(10%,10%,20%,0.7);
        color: white;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;conte&uacute;do&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_7"></iframe>
  </div>



<h2><code>url()</code></h2>

<p>A <code>função url()</code> define um link para um arquivo externo no CSS.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_8' id='editor_8'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div {
        background-image: url(https://www.ranoya.com/Assets/Logotipos/UFPESmall.png);
        width: 200px;
        height: 200px;
   }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div&gt;&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_8"></iframe>
  </div>



<h2><code>var()</code></h2>

<p>A <code>função var()</code> recupera o valor de uma variável estabelecida no código CSS. A <code>função</code> recebe 2 parametros: o nome da variável a ser recuperada, e um valor definido caso o navegador não encontre a varável.</p>

<h3>Exemplo</h3> 

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_9' id='editor_9'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
    :root {
      --minhavar1: #000000;
    }

    .blocoA {
      background-color: var(--minhavar1,white);
      color: white;
    }
    .blocoB {
      background-color: var(--mimnhavar2,white);
      color: blue;
    }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;div class=&quot;blocoA&quot;&gt;blocoA&lt;/div&gt;
    &lt;div class=&quot;blocoB&quot;&gt;blocoB&lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_9"></iframe>
  </div>


</div>
</body>
</html>

    