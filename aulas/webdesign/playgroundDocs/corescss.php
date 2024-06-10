<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CSS: CORES | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de CSS">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="css, atributos, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="CSS: CORES | ReferenceDocs">
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
  <a name="Registro de cores" class="indice">Registro de cores</a>
<h1>Registro de cores</h1>

  <p>As cores na tecnologia web são registradas através de um índice com sua composição RGB (vermelho, verde e azul) indicadas através de valores hexadecimais de 0 a 255. Este índice é representado pelo caractere "#" e os valores RBG em sequência, resultando em um dado do tipo <code>#25A9F0</code>.</p>

  <a name="Valores hexadecimais" class="indice">Valores hexadecimais</a>
<h2>Valores hexadecimais</h2>

  <div style="float: left; margin: 0; padding: 0; margin-right: 20px; margin-top: 20px;">
  <table style="width: 100px;">
    <tr><td></td><th></th><th>R</th><th>G</th><th>B</th>
    </tr>
    <tr><td rowspan=2>#</td><th>min</th><td>00</td><td>00</td><td>00</td>
    </tr>
    <tr><th>max</th><td>FF</td><td>FF</td><td>FF</td>
    </tr>
  </table>
  </div>
  <div style="float: left; width: 120px; margin: 0; padding: 0;">
    <p><div style="width: 20px; height: 20px; background-color: #000000; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#000000</code><br><div style="width: 20px; height: 20px; background-color: #888888; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#888888</code><br><div style="width: 20px; height: 20px; background-color: #FFFFFF; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#FFFFFF</code><br><div style="width: 20px; height: 20px; background-color: #FF0000; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#FF0000</code><br><div style="width: 20px; height: 20px; background-color: #00FF00; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#00FF00</code><br><div style="width: 20px; height: 20px; background-color: #0000FF; float: left; border: 1px solid var(--conteudo-code, #acafd2);"></div><code>&nbsp;#0000FF</code></p>
  </div>

  <p>Usamos a base decimal para representar nossos números, com caracteres que vão de 0 a 9 e são acrescidos de novas casas quando chegam em seus limites. Assim sendo, os algarimsos <code>15</code> em base decimal representam o décimo quinto valor da sequência numérica. A base hexadecimal utiliza 16 caracteres para representar números, com caracteres que vão de 0 a F (0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F), e dessa forma, o algarismo <code>10</code>, na base hexadecimal, representa o décimo sexto valor numérico (<code>16</code> decimal = <code>10</code> hexadecimal). Neste sistema, o algarismo <code>F</code> representa o décimo quinto valor numérico, e o algarismo <code>FF</code> representa o ducentésimo quinquagésimo quinto valor (o 255 decimal).</p>

  

  <p>Consequentemente, os registros de cores hexadecimais vão do valor <code>00</code> a <code>FF</code> para cada canal, e sua composição é formada conforme apresenta o diagrama acima.</p>



  <a name="Cores com nomes" class="indice">Cores com nomes</a>
<h2>Cores com nomes</h2>

  <p>Outra forma de especificar cores no CSS é utilizando nomes pré-definidos e convencionados para algumas cores. A tabela abaixo apresenta diversas cores que possuem um nome e podem ser utilizadas no lugar dos valores, como <code>color: black;</code>.</p>

  



<table style="border: none transparent 0;"> 
  <tr> 
  <th>Nome</th> 
  <th>Hexadecimal</th>
  <th>RGB</th> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Vermelhos</td> 
  </tr> 
  <tr style="background:indianred;color:white"> 
  <td style="color:white">IndianRed</td> 
  <td>CD5C5C</td> 
  <td>205,92,92</td> 
  </tr> 
  <tr style="background:lightcoral;color:black"> 
  <td style="color:black">LightCoral</td> 
  <td>F08080</td> 
  <td>240,128,128</td> 
  </tr> 
  <tr style="background:salmon;color:black"> 
  <td style="color:black">Salmon</td> 
  <td>FA8072</td> 
  <td>250,128,114</td> 
  </tr> 
  <tr style="background:darksalmon;color:black"> 
  <td style="color:black">DarkSalmon</td> 
  <td>E9967A</td> 
  <td>233,150,122</td> 
  </tr> 
  <tr style="background:lightsalmon;color:black"> 
  <td style="color:black">LightSalmon</td> 
  <td>FFA07A</td> 
  <td>255,160,122</td> 
  </tr>
  <tr style="background:crimson;color:white;"> 
  <td style="color:white">Crimson</td> 
  <td>DC143C</td> 
  <td>220,20,60</td> 
  </tr> 
  <tr style="background:red;color:white"> 
  <td style="color:white">Red</td> 
  <td>FF0000</td> 
  <td>255,0,0</td> 
  </tr> 
  <tr style="background:fireBrick;color:white"> 
  <td style="color:white">FireBrick</td> 
  <td>B22222</td> 
  <td>178,34,34</td> 
  </tr>
  <tr style="background:darkred;color:white"> 
  <td style="color:white">DarkRed</td> 
  <td>8B0000</td> 
  <td>139,0,0</td> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Rosas</td> 
  </tr> 
  <tr style="background:pink;color:black">
  <td>Pink</td> 
  <td>FFC0CB</td> 
  <td>255,192,203</td> 
  </tr> 
  <tr style="background:lightpink;color:black"> 
  <td style="color:black">LightPink</td> 
  <td>FFB6C1</td> 
  <td>255,182,193</td> 
  </tr> 
  <tr style="background:hotpink;color:white"> 
  <td style="color:white">HotPink</td> 
  <td>FF69B4</td> 
  <td>255,105,180</td> 
  </tr>
  <tr style="background:deeppink;color:white"> 
  <td style="color:white">DeepPink</td> 
  <td>FF1493</td> 
  <td>255,20,147</td> 
  </tr> 
  <tr style="background:mediumvioletred;color:white"> 
  <td style="color:white">MediumVioletRed</td> 
  <td>C71585</td>
  <td>199,21,133</td> 
  </tr> 
  <tr style="background:palevioletred;color:white"> 
  <td style="color:white">PaleVioletRed</td> 
  <td>DB7093</td> 
  <td>219,112,147</td> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Laranjas</td> 
  </tr> 
  <tr style="background:coral;color:white"> 
  <td style="color:white">Coral</td> 
  <td>FF7F50</td> 
  <td>255,127,80</td> 
  </tr> 
  <tr style="background:tomato;color:white"> 
  <td style="color:white">Tomato</td> 
  <td>FF6347</td> 
  <td>255,99,71</td> 
  </tr> 
  <tr style="background:orangered;color:white"> 
  <td style="color:white">OrangeRed</td> 
  <td>FF4500</td> 
  <td>255,69,0</td> 
  </tr>
  <tr style="background:darkorange;color:white"> 
  <td style="color:white">DarkOrange</td> 
  <td>FF8C00</td> 
  <td>255,140,0</td> 
  </tr> 
  <tr style="background:orange;color:white"> 
  <td style="color:white">Orange</td> 
  <td>FFA500</td> 
  <td>255,165,0</td> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Amarelos</td> 
  </tr> 
  <tr style="background:gold;color:black"> 
  <td style="color:black">Gold</td> 
  <td>FFD700</td> 
  <td>255,215,0</td> 
  </tr>
  <tr style="background:yellow;color:black"> 
  <td style="color:black">Yellow</td> 
  <td>FFFF00</td> 
  <td>255,255,0</td> 
  </tr> 
  <tr style="background:lightyellow;color:black"> 
  <td style="color:black">LightYellow</td> 
  <td>FFFFE0</td> 
  <td>255,255,224</td> 
  </tr> 
  <tr style="background:lemonchiffon;color:black"> 
  <td style="color:black">LemonChiffon</td> 
  <td>FFFACD</td> 
  <td>255,250,205</td> 
  </tr>
  <tr style="background:lightgoldenrodyellow;color:black"> 
  <td style="color:black">LightGoldenrodYellow</td> 
  <td>FAFAD2</td> 
  <td>250,250,210</td> 
  </tr> 
  <tr style="background:papayawhip;color:black"> 
  <td style="color:black">PapayaWhip</td> 
  <td>FFEFD5</td> 
  <td>255,239,213</td> 
  </tr> 
  <tr style="background:moccasin;color:black"> 
  <td style="color:black">Moccasin</td> 
  <td>FFE4B5</td> 
  <td>255,228,181</td> 
  </tr>
  <tr style="background:peachpuff;color:black"> 
  <td style="color:black">PeachPuff</td> 
  <td>FFDAB9</td> 
  <td>255,218,185</td> 
  </tr> 
  <tr style="background:palegoldenrod;color:black"> 
  <td style="color:black">PaleGoldenrod</td> 
  <td>EEE8AA</td>
  <td>238,232,170</td> 
  </tr> 
  <tr style="background:khaki;color:black"> 
  <td style="color:black">Khaki</td> 
  <td>F0E68C</td> 
  <td>240,230,140</td> 
  </tr>
  <tr style="background:darkkhaki;color:white"> 
  <td style="color:white">DarkKhaki</td> 
  <td>BDB76B</td> 
  <td>189,183,107</td> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Púrpuras</td> 
  </tr> 
  <tr style="background:lavender;color:black">
  <td>Lavender</td> 
  <td>E6E6FA</td> 
  <td>230,230,250</td> 
  </tr> 
  <tr style="background:thistle;color:white"> 
  <td style="color:white">Thistle</td> 
  <td>D8BFD8</td> 
  <td>216,191,216</td> 
  </tr> 
  <tr style="background:plum;color:white"> 
  <td style="color:white">Plum</td> 
  <td>DDA0DD</td> 
  <td>221,160,221</td> 
  </tr>
  <tr style="background:violet;color:white"> 
  <td style="color:white">Violet</td> 
  <td>EE82EE</td> 
  <td>238,130,238</td> 
  </tr> 
  <tr style="background:orchid;color:white"> 
  <td style="color:white">Orchid</td> 
  <td>DA70D6</td>
  <td>218,112,214</td> 
  </tr> 
  <tr style="background:fuchsia;color:white"> 
  <td style="color:white">Fuchsia</td> 
  <td>FF00FF</td> 
  <td>255,0,255</td> 
  </tr>
  <tr style="background:Magenta;color:white"> 
  <td style="color:white">Magenta</td> 
  <td>FF00FF</td> 
  <td>255,0,255</td> 
  </tr> 
  <tr style="background:mediumorchid;color:white"> 
  <td style="color:white">MediumOrchid</td> 
  <td>BA55D3</td> 
  <td>186,85,211</td> 
  </tr> 
  <tr style="background:mediumpurple;color:white"> 
  <td style="color:white">MediumPurple</td> 
  <td>9370DB</td> 
  <td>147,112,219</td> 
  </tr>
  <tr style="background:blueviolet;color:white"> 
  <td style="color:white">BlueViolet</td> 
  <td>8A2BE2</td>
  <td>138,43,226</td> 
  </tr> 
  <tr style="background:darkviolet;color:white"> 
  <td style="color:white">DarkViolet</td> 
  <td>9400D3</td> 
  <td>148,0,211</td> 
  </tr>
  <tr style="background:darkorchid;color:white"> 
  <td style="color:white">DarkOrchid</td> 
  <td>9932CC</td> 
  <td>153,50,204</td> 
  </tr> 
  <tr style="background:darkmagenta;color:white"> 
  <td style="color:white">DarkMagenta</td> 
  <td>8B008B</td>
  <td>139,0,139</td> 
  </tr> 
  <tr style="background:purple;color:white"> 
  <td style="color:white">Purple</td> 
  <td>800080</td> 
  <td>128,0,128</td> 
  </tr>
  <tr style="background:rebeccapurple;color:white"> 
  <td style="color:white">RebeccaPurple</td> 
  <td>663399</td> 
  <td>102,51,153</td> 
  </tr>
  <tr style="background:indigo;color:white"> 
  <td style="color:white">Indigo</td> 
  <td>4B0082</td> 
  <td>75,0,130</td> 
  </tr> 
  <tr style="background:mediumslateblue;color:white"> 
  <td style="color:white">MediumSlateBlue</td> 
  <td>7B68EE</td> 
  <td>123,104,238</td> 
  </tr> 
  <tr style="background:slateblue;color:white"> 
  <td style="color:white">SlateBlue</td> 
  <td>6A5ACD</td>
  <td>106,90,205</td> 
  </tr> 
  <tr style="background:darkslateblue;color:white"> 
  <td style="color:white">DarkSlateBlue</td> 
  <td>483D8B</td> 
  <td>72,61,139</td> 
  </tr>
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Verdes</td> 
  </tr> 
  <tr style="background:greenyellow;color:black"> 
  <td style="color:black">GreenYellow</td> 
  <td>ADFF2F</td> 

  <td>173,255,47</td> 
  </tr> 
  <tr style="background:chartreuse;color:black"> 
  <td style="color:black">Chartreuse</td> 
  <td>7FFF00</td> 
  <td>127,255,0</td> 
  </tr> 

  <tr style="background:lawngreen;color:black"> 
  <td style="color:black">LawnGreen</td> 
  <td>7CFC00</td> 
  <td>124,252,0</td> 
  </tr> 
  <tr style="background:lime;color:black"> 
  <td style="color:black">Lime</td> 
  <td>00FF00</td> 

  <td>0,255,0</td> 
  </tr> 
  <tr style="background:limegreen;color:black"> 
  <td style="color:black">LimeGreen</td> 
  <td>32CD32</td> 
  <td>50,205,50</td> 
  </tr> 

  <tr style="background:palegreen;color:black"> 
  <td style="color:black">PaleGreen</td> 
  <td>98FB98</td> 
  <td>152,251,152</td> 
  </tr> 
  <tr style="background:lightgreen;color:black"> 
  <td style="color:black">LightGreen</td> 
  <td>90EE90</td> 

  <td>144,238,144</td> 
  </tr> 
  <tr style="background:mediumspringgreen;color:black"> 
  <td style="color:black">MediumSpringGreen</td> 
  <td>00FA9A</td> 
  <td>0,250,154</td> 
  </tr> 

  <tr style="background:springgreen;color:black"> 
  <td style="color:black">SpringGreen</td> 
  <td>00FF7F</td> 
  <td>0,255,127</td> 
  </tr> 
  <tr style="background:mediumseagreen;color:white"> 
  <td style="color:white">MediumSeaGreen</td> 
  <td>3CB371</td> 

  <td>60,179,113</td> 
  </tr> 
  <tr style="background:seagreen;color:white"> 
  <td style="color:white">SeaGreen</td> 
  <td>2E8B57</td> 
  <td>46,139,87</td> 
  </tr> 

  <tr style="background:forestgreen;color:white"> 
  <td style="color:white">ForestGreen</td> 
  <td>228B22</td> 
  <td>34,139,34</td> 
  </tr> 
  <tr style="background:green;color:white"> 
  <td style="color:white">Green</td> 
  <td>008000</td> 

  <td>0,128,0</td> 
  </tr> 
  <tr style="background:darkgreen;color:white"> 
  <td style="color:white">DarkGreen</td> 
  <td>006400</td> 
  <td>0,100,0</td> 
  </tr> 

  <tr style="background:yellowgreen;color:white"> 
  <td style="color:white">YellowGreen</td> 
  <td>9ACD32</td> 
  <td>154,205,50</td> 
  </tr> 
  <tr style="background:olivedrab;color:white"> 
  <td style="color:white">OliveDrab</td> 
  <td>6B8E23</td> 

  <td>107,142,35</td> 
  </tr> 
  <tr style="background:olive;color:white"> 
  <td style="color:white">Olive</td> 
  <td>808000</td> 
  <td>128,128,0</td> 
  </tr> 

  <tr style="background:darkolivegreen;color:white"> 
  <td style="color:white">DarkOliveGreen</td> 
  <td>556B2F</td> 
  <td>85,107,47</td> 
  </tr> 
  <tr style="background:mediumaquamarine;color:black"> 
  <td style="color:black">MediumAquamarine</td> 
  <td>66CDAA</td> 

  <td>102,205,170</td> 
  </tr> 
  <tr style="background:darkseagreen;color:white"> 
  <td style="color:white">DarkSeaGreen</td> 
  <td>8FBC8F</td> 
  <td>143,188,143</td> 
  </tr> 

  <tr style="background:lightseagreen;color:white"> 
  <td style="color:white">LightSeaGreen</td> 
  <td>20B2AA</td> 
  <td>32,178,170</td> 
  </tr> 
  <tr style="background:darkcyan;color:white"> 
  <td style="color:white">DarkCyan</td> 
  <td>008B8B</td> 

  <td>0,139,139</td> 
  </tr> 
  <tr style="background:teal;color:white"> 
  <td style="color:white">Teal</td> 
  <td>008080</td> 
  <td>0,128,128</td> 
  </tr> 

  <tr> 
  <td colspan="3" style="border: none transparent 0;">Azuis / Cianos</td> 
  </tr> 
  <tr style="background:aqua;color:black"> 
  <td style="color:black">Aqua</td> 
  <td>00FFFF</td> 
  <td>0,255,255</td> 
  </tr> 
  <tr style="background:cyan;color:black"> 

  <td>Cyan</td> 
  <td>00FFFF</td> 
  <td>0,255,255</td> 
  </tr> 
  <tr style="background:lightcyan;color:black"> 
  <td style="color:black">LightCyan</td> 
  <td>E0FFFF</td> 

  <td>224,255,255</td> 
  </tr> 
  <tr style="background:paleturquoise;color:black"> 
  <td style="color:black">PaleTurquoise</td> 
  <td>AFEEEE</td> 
  <td>175,238,238</td> 
  </tr> 

  <tr style="background:aquamarine;color:black"> 
  <td style="color:black">Aquamarine</td> 
  <td>7FFFD4</td> 
  <td>127,255,212</td> 
  </tr> 
  <tr style="background:turquoise;color:black"> 
  <td style="color:black">Turquoise</td> 
  <td>40E0D0</td> 

  <td>64,224,208</td> 
  </tr> 
  <tr style="background:mediumturquoise;color:white"> 
  <td style="color:white">MediumTurquoise</td> 
  <td>48D1CC</td> 
  <td>72,209,204</td> 
  </tr> 

  <tr style="background:darkturquoise;color:white"> 
  <td style="color:white">DarkTurquoise</td> 
  <td>00CED1</td> 
  <td>0,206,209</td> 
  </tr> 
  <tr style="background:cadetblue;color:white"> 
  <td style="color:white">CadetBlue</td> 
  <td>5F9EA0</td> 

  <td>95,158,160</td> 
  </tr> 
  <tr style="background:steelblue;color:white"> 
  <td style="color:white">SteelBlue</td> 
  <td>4682B4</td> 
  <td>70,130,180</td> 
  </tr> 

  <tr style="background:lightsteelblue;color:black"> 
  <td style="color:black">LightSteelBlue</td> 
  <td>B0C4DE</td> 
  <td>176,196,222</td> 
  </tr> 
  <tr style="background:powderblue;color:black"> 
  <td style="color:black">PowderBlue</td> 
  <td>B0E0E6</td> 

  <td>176,224,230</td> 
  </tr> 
  <tr style="background:lightblue;color:black"> 
  <td style="color:black">LightBlue</td> 
  <td>ADD8E6</td> 
  <td>173,216,230</td> 
  </tr> 

  <tr style="background:skyblue;color:black"> 
  <td style="color:black">SkyBlue</td> 
  <td>87CEEB</td> 
  <td>135,206,235</td> 
  </tr> 
  <tr style="background:lightskyblue;color:black"> 
  <td style="color:black">LightSkyBlue</td> 
  <td>87CEFA</td> 

  <td>135,206,250</td> 
  </tr> 
  <tr style="background:deepskyblue;color:white"> 
  <td style="color:white">DeepSkyBlue</td> 
  <td>00BFFF</td> 
  <td>0,191,255</td> 
  </tr> 

  <tr style="background:dodgerblue;color:white"> 
  <td style="color:white">DodgerBlue</td> 
  <td>1E90FF</td> 
  <td>30,144,255</td> 
  </tr> 
  <tr style="background:cornflowerblue;color:white"> 
  <td style="color:white">CornflowerBlue</td> 
  <td>6495ED</td> 

  <td>100,149,237</td> 
  </tr> 
  <tr style="background:royalblue;color:white"> 
  <td style="color:white">RoyalBlue</td> 
  <td>4169E1</td> 
  <td>65,105,225</td> 
  </tr> 
  <tr style="background:blue;color:white"> 
  <td style="color:white">Blue</td> 
  <td>0000FF</td> 

  <td>0,0,255</td> 
  </tr> 
  <tr style="background:mediumblue;color:white"> 
  <td style="color:white">MediumBlue</td> 
  <td>0000CD</td> 
  <td>0,0,205</td> 
  </tr> 

  <tr style="background:darkblue;color:white"> 
  <td style="color:white">DarkBlue</td> 
  <td>00008B</td> 
  <td>0,0,139</td> 
  </tr> 
  <tr style="background:navy;color:white"> 
  <td style="color:white">Navy</td> 
  <td>000080</td> 

  <td>0,0,128</td> 
  </tr> 
  <tr style="background:midnightblue;color:white"> 
  <td style="color:white">MidnightBlue</td> 
  <td>191970</td> 
  <td>25,25,112</td> 
  </tr> 

  <tr> 
  <td colspan="3" style="border: none transparent 0;">Marrons</td> 
  </tr> 
  <tr style="background:cornsilk;color:black"> 
  <td style="color:black">Cornsilk</td> 
  <td>FFF8DC</td> 
  <td>255,248,220</td> 
  </tr> 
  <tr style="background:blanchedalmond;color:black"> 
  <td style="color:black">BlanchedAlmond</td> 
  <td>FFEBCD</td> 
  <td>255,235,205</td> 

  </tr> 
  <tr style="background:bisque;color:black"> 
  <td style="color:black">Bisque</td> 
  <td>FFE4C4</td> 
  <td>255,228,196</td> 
  </tr> 
  <tr style="background:navajowhite;color:black"> 
  <td style="color:black">NavajoWhite</td> 
  <td>FFDEAD</td> 

  <td>255,222,173</td> 
  </tr> 
  <tr style="background:wheat;color:black"> 
  <td style="color:black">Wheat</td> 
  <td>F5DEB3</td> 
  <td>245,222,179</td> 
  </tr> 

  <tr style="background:burlywood;color:white"> 
  <td style="color:white">BurlyWood</td> 
  <td>DEB887</td> 
  <td>222,184,135</td> 
  </tr> 
  <tr style="background:tan;color:white"> 
  <td style="color:white">Tan</td> 
  <td>D2B48C</td> 

  <td>210,180,140</td> 
  </tr> 
  <tr style="background:rosybrown;color:white"> 
  <td style="color:white">RosyBrown</td> 
  <td>BC8F8F</td> 
  <td>188,143,143</td> 
  </tr> 

  <tr style="background:sandybrown;color:white"> 
  <td style="color:white">SandyBrown</td> 
  <td>F4A460</td> 
  <td>244,164,96</td> 
  </tr> 
  <tr style="background:goldenrod;color:white"> 
  <td style="color:white">Goldenrod</td> 
  <td>DAA520</td> 

  <td>218,165,32</td> 
  </tr> 
  <tr style="background:darkgoldenrod;color:white"> 
  <td style="color:white">DarkGoldenrod</td> 
  <td>B8860B</td> 
  <td>184,134,11</td> 
  </tr> 

  <tr style="background:Peru;color:white"> 
  <td style="color:white">Peru</td> 
  <td>CD853F</td> 
  <td>205,133,63</td> 
  </tr> 
  <tr style="background:chocolate;color:white"> 
  <td style="color:white">Chocolate</td> 
  <td>D2691E</td> 

  <td>210,105,30</td> 
  </tr> 
  <tr style="background:saddlebrown;color:white"> 
  <td style="color:white">SaddleBrown</td> 
  <td>8B4513</td> 
  <td>139,69,19</td> 
  </tr> 

  <tr style="background:sienna;color:white"> 
  <td style="color:white">Sienna</td> 
  <td>A0522D</td> 
  <td>160,82,45</td> 
  </tr> 
  <tr style="background:brown;color:white"> 
  <td style="color:white">Brown</td> 
  <td>A52A2A</td> 

  <td>165,42,42</td> 
  </tr> 
  <tr style="background:maroon;color:white"> 
  <td style="color:white">Maroon</td> 
  <td>800000</td> 
  <td>128,0,0</td> 
  </tr> 

  <tr> 
  <td colspan="3" style="border: none transparent 0;">Brancos</td> 
  </tr> 
  <tr style="background:white;color:black"> 
  <td style="color:black">White</td> 
  <td>FFFFFF</td> 
  <td>255,255,255</td> 
  </tr> 
  <tr style="background:snow;color:black"> 
  <td style="color: black">Snow</td> 
  <td>FFFAFA</td> 
  <td>255,250,250</td> 
  </tr> 
  <tr style="background:honeydew;color:black"> 
  <td style="color:black">Honeydew</td> 
  <td>F0FFF0</td> 
  <td>240,255,240</td> 
  </tr> 
  <tr style="background:mintcream;color:black"> 
  <td style="color:black">MintCream</td> 
  <td>F5FFFA</td> 
  <td>245,255,250</td> 
  </tr> 
  <tr style="background:azure;color:black"> 
  <td style="color:black">Azure</td> 
  <td>F0FFFF</td> 
  <td>240,255,255</td> 
  </tr> 
  <tr style="background:aliceblue;color:black"> 
  <td style="color:black">AliceBlue</td> 
  <td>F0F8FF</td> 
  <td>240,248,255</td> 
  </tr> 
  <tr style="background:ghostwhite;color:black"> 
  <td style="color:black">GhostWhite</td> 
  <td>F8F8FF</td> 
  <td>248,248,255</td> 
  </tr> 
  <tr style="background:whitesmoke;color:black"> 
  <td style="color:black">WhiteSmoke</td> 
  <td>F5F5F5</td> 
  <td>245,245,245</td> 
  </tr> 
  <tr style="background:seashell;color:black"> 
  <td style="color:black">Seashell</td> 
  <td>FFF5EE</td> 

  <td>255,245,238</td> 
  </tr> 
  <tr style="background:beige;color:black"> 
  <td style="color:black">Beige</td> 
  <td>F5F5DC</td> 
  <td>245,245,220</td> 
  </tr> 

  <tr style="background:oldlace;color:black"> 
  <td style="color:black">OldLace</td> 
  <td>FDF5E6</td> 
  <td>253,245,230</td> 
  </tr> 
  <tr style="background:floralwhite;color:black"> 
  <td style="color:black">FloralWhite</td> 
  <td>FFFAF0</td> 

  <td>255,250,240</td> 
  </tr> 
  <tr style="background:ivory;color:black"> 
  <td style="color:black">Ivory</td> 
  <td>FFFFF0</td> 
  <td>255,255,240</td> 
  </tr> 

  <tr style="background:antiquewhite;color:black"> 
  <td style="color:black">AntiqueWhite</td> 
  <td>FAEBD7</td> 
  <td>250,235,215</td> 
  </tr> 
  <tr style="background:linen;color:black"> 
  <td style="color:black">Linen</td> 
  <td>FAF0E6</td> 

  <td>250,240,230</td> 
  </tr> 
  <tr style="background:lavenderblush;color:black"> 
  <td style="color:black">LavenderBlush</td> 
  <td>FFF0F5</td> 
  <td>255,240,245</td> 
  </tr> 

  <tr style="background:mistyrose;color:black"> 
  <td style="color:black">MistyRose</td> 
  <td>FFE4E1</td> 
  <td>255,228,225</td> 
  </tr> 
  <tr> 
  <td colspan="3" style="border: none transparent 0;">Cinzas</td> 
  </tr> 
  <tr style="background:gainsboro;color:black"> 

  <td>Gainsboro</td> 
  <td>DCDCDC</td> 
  <td>220,220,220</td> 
  </tr> 
  <tr style="background:LightGrey;color:black"> 
  <td style="color:black">LightGray</td> 
  <td>D3D3D3</td>
  <td>211,211,211</td> 
  </tr> 
  <tr style="background:LightGrey;color:black"> 
  <td style="color:black">LightGrey</td> 
  <td>D3D3D3</td>
  <td>211,211,211</td> 
  </tr>         
  <tr style="background:silver;color:black"> 
  <td style="color:black">Silver</td> 
  <td>C0C0C0</td> 
  <td>192,192,192</td> 
  </tr> 
  <tr style="background:darkgray;color:black"> 
  <td style="color:black">DarkGray</td> 
  <td>A9A9A9</td> 
  <td>169,169,169</td> 
  </tr> 
  <tr style="background:darkgrey;color:black"> 
  <td style="color:black">DarkGrey</td> 
  <td>A9A9A9</td> 
  <td>169,169,169</td> 
  </tr> 
  <tr style="background:gray;color:black"> 
  <td style="color:black">Gray</td> 
  <td>808080</td> 
  <td>128,128,128</td> 
  </tr> 
  <tr style="background:grey;color:black"> 
  <td style="color:black">Grey</td> 
  <td>808080</td> 
  <td>128,128,128</td> 
  </tr> 
  <tr style="background:dimgray;color:white"> 
  <td style="color:white">DimGray</td> 
  <td>696969</td> 
  <td>105,105,105</td> 
  </tr> 
  <tr style="background:dimgrey;color:white"> 
  <td style="color:white">DimGrey</td> 
  <td>696969</td> 
  <td>105,105,105</td> 
  </tr> 
  <tr style="background:lightslategray;color:white"> 
  <td style="color:white">LightSlateGray</td> 
  <td>778899</td> 
  <td>119,136,153</td> 
  </tr> 
  <tr style="background:lightslategrey;color:white"> 
  <td style="color:white">LightSlateGrey</td> 
  <td>778899</td> 
  <td>119,136,153</td> 
  </tr> 
  <tr style="background:slategray;color:white"> 
  <td style="color:white">SlateGray</td> 
  <td>708090</td> 
  <td>112,128,144</td> 
  </tr> 
  <tr style="background:slategrey;color:white"> 
  <td style="color:white">SlateGrey</td> 
  <td>708090</td>
  <td>112,128,144</td> 
  </tr> 
  <tr style="background:darkslategray;color:white"> 
  <td style="color:white">DarkSlateGray</td> 
  <td>2F4F4F</td> 
  <td>47,79,79</td> 
  </tr> 
  <tr style="background:darkslategrey;color:white"> 
  <td style="color:white">DarkSlateGrey</td> 
  <td>2F4F4F</td> 
  <td>47,79,79</td> 
  </tr> 

  <tr style="background:black;color:white"> 
  <td style="color:white">Black</td> 
  <td>000000</td> 
  <td>0,0,0</td> 
  </tr> 
  </table>


  <a name="Funções CSS e transparências" class="indice">Funções CSS e transparências</a>
<h2>Funções CSS e transparências</h2>

  <p>A terceira maneira de se especificar uma cor no CSS é através das <a href="javascript:carrega('funcoescss.php');"><code>funções</code></a> <code>rgb()</code>, <code>rgba()</code>, <code>hsl()</code> e <code>hsla()</code>. As <a href="javascript:carrega('funcoescss.php');"><code>funções</code></a> de CSS realizam operações simples de programação no CSS, e estas funções convertem registros RGB ou HSL para a codificação hexadecimal.</p>

 
<table style="border: none transparent 0;">
  <tr style="border: none transparent 0;"><td colspan=2 style="border: none transparent 0;">
<a name="<code>rgb(vermelho, verde, azul)</code>" class="indice"><code>rgb(vermelho, verde, azul)</code></a>
<h3><code>rgb(vermelho, verde, azul)</code></h3></td></tr>

  <tr><th>variável</th><th>valor</th></tr>
  <tr><td>vermelho</td><td>0 a 255, ou de 0% a 100%</td></tr>
  <tr><td>verde</td><td>0 a 255, ou de 0% a 100%</td></tr>
  <tr><td>azul</td><td>0 a 255, ou de 0% a 100%</td></tr>

<tr style="border: none transparent 0;"><td colspan=2 style="border: none transparent 0;">
<a name="<code>rgba(vermelho, verde, azul, alfa)</code>" class="indice"><code>rgba(vermelho, verde, azul, alfa)</code></a>
<h3><code>rgba(vermelho, verde, azul, alfa)</code></h3>
</td></tr>
  <tr><th>variável</th><th>valor</th></tr>
  <tr><td>vermelho</td><td>0 a 255, ou de 0% a 100%</td></tr>
  <tr><td>verde</td><td>0 a 255, ou de 0% a 100%</td></tr>
  <tr><td>azul</td><td>0 a 255, ou de 0% a 100%</td></tr>
  <tr><td>alfa</td><td>0 a 1, sendo 0 transparente e 1 opaco</td></tr>

<tr style="border: none transparent 0;"><td colspan=2 style="border: none transparent 0;">
<a name="<code>hsl(espectro, saturação, iluminação)</code>" class="indice"><code>hsl(espectro, saturação, iluminação)</code></a>
<h3><code>hsl(espectro, saturação, iluminação)</code></h3>
</td></tr>
  <tr><th>variável</th><th>valor</th></tr>
  <tr><td>espectro</td><td>0 a 360, sendo 0 vermelho, 120 verde, e 240 azul</td></tr>
  <tr><td>saturação</td><td>0% a 100%, sendo 0% esmaecido e 100% intenso</td></tr>
  <tr><td>iluminação</td><td>0% a 100%, sendo 0% preto e 100% branco</td></tr>

<tr style="border: none transparent 0;"><td colspan=2 style="border: none transparent 0;">
<a name="<code>hsla(espectro, saturação, iluminação, alfa)</code>" class="indice"><code>hsla(espectro, saturação, iluminação, alfa)</code></a>
<h3><code>hsla(espectro, saturação, iluminação, alfa)</code></h3>
</td></tr>
  <tr><th>variável</th><th>valor</th></tr>
  <tr><td>espectro</td><td>0 a 360, sendo 0 vermelho, 120 verde, e 240 azul</td></tr>
  <tr><td>saturação</td><td>0% a 100%, sendo 0% esmaecido e 100% intenso</td></tr>
  <tr><td>iluminação</td><td>0% a 100%, sendo 0% preto e 100% branco</td></tr>
  <tr><td>alfa</td><td>0 a 1, sendo 0 transparente e 1 opaco</td></tr>
</table>

 <a name="Uso" class="indice">Uso</a>
<h3>Uso</h3>


  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     * { color: rgba(255,0,0,0.5); }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    conteudo de cor vermelha com 50% de opacidade
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

  <div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
  </div>



<a name="Paleta e variáveis" class="indice">Paleta e variáveis</a>
<h2>Paleta e variáveis</h2>

<p>Como o uso das cores é recorrente em um código, e utilizamos sempre um conjunto pequeno de cores selecionadas para compor uma interface/layout, é recomendável estabelecer uma paleta de cores e atribuí-la a um conjunto de variáveis acessadas através da <a href="javascript:carrega('funcoescss.php');"><code>função</code></a> <code>var()</code>. Esta é uma boa prática para um código CSS de fácil manutenção e mais inteligível.</p>

<p>Para declarar variáveis no CSS, criamos um atributo na raíz dos elementos <code>:root</code>. Para acessá-las, usamos a <a href="javascript:carrega('funcoescss.php');"><code>função</code></a> <code>var()</code>:</p>

<table style="border: none transparent 0;">
  <tr style="border: none transparent 0;"><td colspan=2 style="border: none transparent 0;">
<a name="<code>var(nome, [valor na ausência da variável])</code>" class="indice"><code>var(nome, [valor na ausência da variável])</code></a>
<h3><code>var(nome, [valor na ausência da variável])</code></h3></td></tr>

  <tr><th>variável</th><th>descrição</th></tr>
  <tr><td>nome</td><td>nome da variável a ser procurada</td></tr>
  <tr><td>valor na ausência</td><td>qual valor deve ser atribuído se a variável não existir<br>esta variável não é obrigatória</td></tr>

</table>

 <a name="Uso" class="indice">Uso</a>
<h3>Uso</h3>


  <div class="diagramahalf firstblock">
  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     :root {
        --minha-cor: cyan;
     }

     p {
        color: var(--minha-cor);
     }

     div {
        color: var(--nao-existe, white);
      }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;p&gt;vari&aacute;vel --minha-cor&lt;/p&gt;
    &lt;div&gt;vari&aacute;vel --nao-existe, que n&atilde;o existe&lt;/div&gt;
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

    