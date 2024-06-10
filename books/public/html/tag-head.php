<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: head | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: head | Tecnologias Criativas">
    <meta property="og:description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    
</head>
<body>

    <script>
        sumarionsize = 220;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>
  <a name="head" class="indice"><code>head</code></a>
<h1 id='titulocapitulo'><code>&lt; head &gt;</code></h1>

  <p>A tag <code>&lt;head&gt;</code> estabelece o cabeçalho do código html onde ficam definidas a encodificação do documento, propriedades importantes do protocolo HTTP, identificação de autores, palavras-chave, descrições e plataformas utilizadas, carregamento de códigos externos ou declaração no próprio código HTML, ou registrando informações úteis para que os mecanismos de busca e redes sociais façam uma correta interpretação do conteúdo do documento.</p>

  <p>Na tag <code>&lt;head&gt;</code> fica registrado todo tipo de meta-informação do documento. Nada que se declare dentro dela é visível no navegador.</p>

  <p>Por convenção, as únicas tags que devem ser abrigadas dentro de <code>&lt;head&gt;</code> são: <a href="tag-link.php"><code>&lt;link&gt;</code></a>, <a href="tag-meta.php"><code>&lt;meta&gt;</code></a>, <a href="tag-script.php"><code>&lt;script&gt;</code></a>, <a href="tag-style.php"><code>&lt;style&gt;</code></a> e <a href="tag-title.php"><code>&lt;title&gt;</code></a>. As atribuições e propriedades de cada uma destas tags podem ser encontradas nas suas referidas páginas deste guia.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;title&gt;minha p&aacute;gina&lt;/title&gt;
&lt;/head&gt;
</pre>

  <a name="Referência de cabeçalho para documento HTML" class="indice">Referência de cabeçalho para documento HTML</a>
<h3>Referência de cabeçalho para documento HTML</h3>

<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;head&gt;
 &lt;meta charset=&quot;utf-8&quot;&gt;
 &lt;title&gt;Minha p&aacute;gina&lt;/title&gt;
 &lt;meta name=&quot;viewport&quot; 
     content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
 &lt;meta name=&quot;keywords&quot; content=&quot;html, teste, hello world!&quot;&gt;
 &lt;meta name=&quot;description&quot; content=&quot;documento de experimenta&ccedil;&atilde;o sobre html&quot;&gt;
 &lt;meta name=&quot;author&quot; content=&quot;Guilherme Ranoya&quot;&gt;
 &lt;link rel=&quot;icon&quot; href=&quot;icon.png&quot;&gt;    
 &lt;link rel=&quot;image_src&quot; type=&quot;image/jpg&quot; href=&quot;imagemdecapa.jpg&quot;&gt;
 &lt;meta property=&quot;og:image&quot; content=&quot;imagemdecapa.jpg&quot;&gt;
 &lt;meta property=&quot;og:image:width&quot; content=&quot;1145&quot;&gt;
 &lt;meta property=&quot;og:image:height&quot; content=&quot;601&quot;&gt;
 &lt;meta name=&quot;theme-color&quot; content=&quot;#8487BE&quot;&gt;
 &lt;meta name=&quot;msapplication-navbutton-color&quot; content=&quot;#8487BE&quot;&gt;
 &lt;meta name=&quot;apple-mobile-web-app-status-bar-style&quot; content=&quot;#8487BE&quot;&gt;
 &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
 &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;estilo.css&quot;&gt;
&lt;/head&gt;
</pre>

<h2 class="separabloco"></h2>

<p>Neste exemplo de referência, arquivos como "imagemdecapa.jpg", "icon.png" ou "estilo.css" precisam ser criados no mesmo diretório do arquivo HTML. O arquivo "icon.png" precisa ter as dimensões 16px X 16px (dimensão padrão dos ícones exibidos pelo navegador nas janelas/abas), o arquivo "imagemdecapa.jpg" precisa ter as dimensões 1145px X 601px, como definido nas tags <a href="tag-meta.php"><code>&lt;meta&gt;</code></a> logo abaixo da declaração do próprio arquivo, e o arquivo "estilo.css" precisa ser criado com as definições/regras de CSS que serão utilizadas no documento utilizando este cabeçalho. Ele também carrega a biblioteca javascript <a href="https://jquery.com/" target="_blank">JQuery</a>, amplamente utilizada como framework de programação javascript.</p>


<hr class="limpa"></hr>

    </div>

    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</div>
</body>

</html>

    