<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: Unidades | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: Unidades | ReferenceDocs">
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
  <a name="Medidas e unidades" class="indice">Medidas e unidades</a>
<h1>Medidas e unidades</h1>

  <p>O uso de CSS permite que sejam utilizadas unidades de medida das mais variadas. Há dois tipos de sistemas de medida: as unidades absolutas como <code>cm</code> ou <code>mm</code>, e as unidades relativas como <code>em</code> ou <code>%</code>.</p>

  <a name="Unidades absolutas" class="indice">Unidades absolutas</a>
<h2>Unidades absolutas</h2>

  <p>É necessário cuidado com o dimensionamento utilizando unidades absolutas já que diferentes DPIs (densidade de tela) podem alterar o resultado, e porque a impressão de um website certamente resultará em um dimensionamento diferente. Em síntese: não é garantido que as unidades absolutas na tela reflitam as mesmas dimensões no espaço físico.</p>

  <p>As unidades absolutas que podem ser utilizadas no CSS são:</p>

  <table>

    <tr><th>Unidade</th><th>descrição</th></tr>
    <tr><td>cm</td><td>centímetros</td></tr>
    <tr><td>mm</td><td>milímetros</td></tr>
    <tr><td>in</td><td>polegadas</td></tr> 
    <tr><td>pt</td><td>pontos (1/72 de uma polegada)</td></tr>
    <tr><td>pc</td><td>picas (12 pontos)</td></tr>
    <tr><td>px</td><td>pixels</td></tr>

  </table>

  <p>A unidade mais utilizada é o pixel (<code>px</code>), porque determina um valor medido diretamente na tela, independente de seu tamanho físico. O pixel é a unidade de tela por excelência. Ao contrário do contexto de desenvolvimento de aplicativos mobile, não há pixels independentes de densidade (como o <code>dp</code> do Google ou o <code>pt</code> da Apple) no desenvolvimento web.</p>

  <p>Já as unidades relativas que podem ser utilizadas no CSS são:</p>

  <table>
    <tr><th>Unidade</th><th>descrição</th><th>uso</th></tr>
    <tr><td>em</td><td>tamanho da tipografia no elemento utilizado como base de referência</td><td>3em são 3x o tamanho de uma letra no próprio elemento. Se <code>font-size</code> for <code>20px</code>, a dimensão será <code>60px</code>.</td></tr>
    <tr><td>rem</td><td>tamanho da tipografia na raíz do HTML utilizada como base de referência</td><td>2em são 2x o tamanho de uma letra na base do documento.</td></tr>
    <tr><td>%</td><td>fração da dimensão do elemento pai</td><td>50% é metade da dimensão do elemento pai em que o elemento atual está.</td></tr>
    <tr><td>vw</td><td>1% do tamanho horizontal do navegador</td><td>50vw é metade da largura do navegador.</td></tr>
    <tr><td>vh</td><td>1% do tamanho vertical do navegador</td><td>33vh é um terço da altura do navegador</td></tr>
    <tr><td>vmin</td><td>1% da menor dimensão do navegador (horizontal ou vertical)</td><td>50vmin é metade da menor dimensão da tela do navegador</td></tr>
    <tr><td>vmax</td><td>1% da maior dimensão do navegador (horizontal ou vertical)</td><td>33vmax é um terço da maior dimensão da tela do navegador</td></tr>

  </table>

  <a name="Uso de porcentagem nas dimensões verticais" class="indice">Uso de porcentagem nas dimensões verticais</a>
<h2>Uso de porcentagem nas dimensões verticais</h2>

  <p>O uso de medidas de porcentagem nas dimensões verticais nem sempre funcionará. Os elementos HTML possuem, originalmente, seu atributo <a href="javascript:carrega('css-position.php');"><code>position</code></a> definido como <code>static</code>. Neste tipo de posicionamento, a dimensão vertical é flutuante (se altera conforme o conteúdo), e não há um registro por parte do navegador de sua dimensão. Elementos colocados dentro de tags nesta condição não conseguirão obter um valor de dimensão vertical, e consequentemente não respeitarão um dimensionamento em porcentagem. O dimensionamento vertical por porcentagem só funciona plenamente quando o atributo <a href="javascript:carrega('css-position.php');"><code>position</code></a> do nó pai é do tipo <code>fixed</code>. Mesmo nos tipos <code>relative</code> e <code>absolute</code>, há dificuldades: os vários navegadores interpretam de maneiras muito diferentes a aplicação destes atributos, e os valores podem variar muito.</p>

 
  <a name="Exemplos" class="indice">Exemplos</a>
<h2>Exemplos</h2>

  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     div { 
        border: 1px solid white;
        font-size: 12px;
     }
     html { 
        font-size: 32px;
        color: white;
     }
     .m1 {
        width: 50%;
        height: 30px;
     }
     .m2 {
        width: 1rem;
        height: 30px;
     }
     .m3 {
        width: 50vw;
        height: 30%;
     }

    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Texto&lt;br&gt;&lt;br&gt;
    &lt;div class=&quot;m1&quot;&gt;
      texto&lt;br&gt;
      &lt;div class=&quot;m1&quot;&gt;
      texto&lt;br&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;br&gt;

    &lt;div class=&quot;m2&quot;&gt;
      texto&lt;br&gt;
      &lt;div class=&quot;m2&quot;&gt;
      texto&lt;br&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;br&gt;
    &lt;div class=&quot;m3&quot;&gt;
    height 
      &lt;div class=&quot;m3&quot;&gt;
       não funciona
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
  <span style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; margin: 0; padding: 0; line-height: 14px; color: var(--conteudo-code, #acafd2);">* O quadro acima é um <code>&lt;iframe&gt;</code>. Para o código que roda dentro dele, ele é o próprio navegador. As medidas relativas considerarão o quadro como as dimensões totais da tela do navegador.</span><br><br>
  </div>


</div>
</body>
</html>

    