<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HTML: Sintaxe | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de HTML">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="html, tags, sintaxe, propriedades">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="HTML: Sintaxe | ReferenceDocs">
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
  <a name="sintaxe" class="indice">Sintaxe</a>
  <h1>Sintaxe</h1>

  <p>O código HTML é construído através de tags. Uma tag html é definida da seguinte forma:</p>

  <img src="https://www.ranoya.com/Assets/Diagramas/htmltag.svg" class="diagramafull">

  <p class="separabloco">Toda tag é identificada pela presença dos <code>< ></code>. Quase todas as tags são finalizadas por uma marcação <code>&lt;/ &gt;</code>, logo, a tag <code>&lt;a&gt;</code> é finalizada pela marcação <code>&lt;/a&gt;</code>. Quase todas as tags aceitam atributos, que modificam de alguma forma seu comportamento ou atuação. No exemplo acima, os parâmetros <code>href="https://www.ranoya.com"</code>, <code>class="links"</code>, e <code>id="meusite"</code> definem valores para os atributos href, class e id da tag <code>&lt;a&gt;</code>. O conteúdo, isto é, aquilo que está entre a declaração da tag, e sua finalização (no exemplo acima, <code>ranoya.com</code>), é o valor que pertence à tag; Qualquer tipo de conteúdo pode ser colocado "dentro" de uma tag, inclusive outras tags. O exemplo abaixo é perfeitamente correto em termos de código HTML:</p>

  <img src="https://www.ranoya.com/Assets/Diagramas/taginsidetag.svg" class="diagramahalf" style="margin-bottom: 25px;">

  <p class="separabloco">Neste exemplo, temos a tag <a href="javascript:carrega('tag-b.php');"><code>&lt;b&gt;</code></a> dentro da tag <a href="javascript:carrega('tag-div.php');"><code>&lt;div&gt;</code></a>, que por sua vez está dentro da tag <a href="javascript:carrega('tag-head.php');"><code>&lt;a&gt;</code></a>. Espaços em branco ou linhas sendo puladas (&crarr;) ao longo do código não interferem em nada sobre sua interpretação. O navegador ignora espaços e linhas puladas, e junta todo o conteúdo como se ele estivesse escrito linearmente; letras minúsculas ou maiúsculas nas tags e propriedades também não são diferenciadas.</p>

  <p>A estrutura do código HTML é construída através de nós, como um árvore com ramificações. Cada ramificação possui seus próprios nós filhos, e cada nó filho torna-se pai de outros nós filhos. O que não pode acontecer nesta árvore, que quebra toda a lógica de como o HTML se estrutura, é o que está no exemplo (errado) abaixo:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_1' id='editor_1'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;
  &lt;div&gt;
&lt;/a&gt;
  &lt;/div&gt; 
</pre>
  </div>

  <img src="https://www.ranoya.com/Assets/Diagramas/tagserror.svg" class="diagramahalf" style="margin-top: 15px; margin-bottom: 15px;">

  <p class="separabloco">Todo nó precisa terminar dentro dos limites de seu nó pai. No exemplo acima, a tag <a href="javascript:carrega('tag-div.php');"><code>&lt;div&gt;</code></a> permanece aberta dentro do seu nó pai, a tag <a href="javascript:carrega('tag-a.php');"><code>&lt;a&gt;</code></a>, e só será fechada após a própria tag <a href="javascript:carrega('tag-a.php');"><code>&lt;a&gt;</code></a> já estar fehcada. Isto configura uma estrutura que o navegador dificilmente conseguirá resolver e apresentar na tela do usuário.</p>

  <p>Os dois códigos abaixo estão sintaticamente corretos. Eles produzem resultados diferentes, mas não há falhas na relação hierárquica de suas estruturas:</p>
  
  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_2' id='editor_2'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;
   &lt;div&gt;
     teste
   &lt;/div&gt;
&lt;/a&gt;
</pre>
  </div>

  <div class="diagramahalf">
<pre class='editor' data-name='editor_3' id='editor_3'>


&lt;div&gt;
  &lt;a href=&quot;https://www.ranoya.com&quot;&gt;  
     teste
  &lt;/a&gt;
&lt;/div&gt;
</pre>
  </div>
  
  <p class="separabloco">A maneira como o código HTML é estruturado é bastante simples e, devido a isso e a sua flexibilidade, o código final de um documento tende a ficar bastante intrincado e confuso. É recomendável que se utilize identação (este espaçamento para cada nível hierárquico do código que você vê nos exemplos) para torná-lo um pouco mais fácil de ler.</p>

<a name="comentarios" class="indice">Comentários</a>
  <h2>Comentários</h2>

  <p>Toda linguagem de programação possui uma forma do programador registrar comentários e anotações ao longo de seu código. No HTML, os comentários são colocados dentro da marcação <code>&lt;!--</code> e <code>--&gt;</code>. Quaisquer informações colocadas entro destas marcações, código ou texto, serão sumariamente ignoradas pelo navegador.</p>

<a name="exemplo" class="indice">Exemplo</a>
  <h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
    <pre class='editor' data-name='editor_4' id='editor_4'>


Este texto aparecerá no navegador&lt;br&gt;
&lt;!-- Este texto n&atilde;o aparecer&aacute;&lt;br&gt; --&gt;
Este texto também aparecerá&lt;br&gt;
</pre>

  </div>

  <div class="diagramahalf">
    <iframe id="View_editor_4"></iframe>
  </div>

</div>
</body>
</html>

    