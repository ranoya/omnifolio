<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: Estrutura | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">    
    <meta property="og:title" content="HTML: Estrutura | Tecnologias Criativas">
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
  <a name="Organização do código HTML" class="indice">Organização do código HTML</a>
<h1 id='titulocapitulo'>Organização do código HTML</h1>

  <p>Por convenção, há uma estrutura básica que deveria ser obedecida em todo código HTML. Esta estrutura divide o código entre uma primeira parte onde são feitas definições e registradas meta-informações sobre o documento, chamada <a href="tag-head.php"><code>&lt;head&gt;</code></a>, e uma segunda parte onde se localiza aquilo que efetivamente será visto no navegador, chamada <a href="tag-body.php"><code>&lt;body&gt;</code></a>. A estrutura básica de um código HTML deve ser a seguinte:</p>

    <pre class='editor codefull' data-name='editor_1' id='editor_1'>
  
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
        
    &lt;/head&gt;

    &lt;body&gt;
        
    &lt;/body&gt;
  &lt;/html&gt;
  </pre>
  <p class="separabloco"></p>

  <p>O documento se inicia com uma declaração de versão 5 do código HTML <code>&lt;!DOCTYPE html&gt;</code>, que para outras versões do código, como o HTML 4.01, ou o XHTML, são bem diferentes. A tag <a href="tag-html.php"><code>&lt;html&gt;</code></a> engloba todo o código HTML efetivamente: ela é o início e o fim do que o navegador deverá realizar, depois que ele já sabe se tratar de um código HTML5 como declarado pela tag <code>&lt;!DOCTYPE html&gt;</code>.</p>

  <p>Dentro da tag <a href="tag-head.php"><code>&lt;head&gt;</code></a> não devem constar quaisquer conteúdos que devam ser apresentados na tela do navegador; se algum tipo de conteúdo for colocado ali, ele será exibido de alguma forma (talvez não seja a forma desejada), mas isto não deveria ser construído desta maneira. Dentro dela devem existir tags como <a href="tag-title.php"><code>&lt;title&gt;</code></a>, <a href="tag-meta.php"><code>&lt;meta&gt;</code></a> ou <a href="tag-style.php"><code>&lt;style&gt;</code></a>, que estabelecem definições importantes sobre o que é o documento sendo exibido pelo navegador (meta-informação, resumidamente), dentre outras tags que podem ser vistas na própria tag <a href="tag-link.php"><code>&lt;head&gt;</code></a> deste guia de referência.</p>

  <p>A seção seguinte, <a href="tag-body.php"><code>&lt;body&gt;</code></a>, registra todo o roteiro do que deve ser montado no navegador do usuário. Todos os conteúdos, blocos, links, etc. devem estar contidos dentro desta tag.</p>

  <p>Por convenção, a tag <a href="tag-html.php"><code>&lt;html&gt;</code></a> não deveria conter diretamente nenhuma outra tag além de <a href="tag-head.php"><code>&lt;head&gt;</code></a> e <a href="tag-body.php"><code>&lt;body&gt;</code></a>, assim como não deveriam existir mais de uma <a href="tag-head.php"><code>&lt;head&gt;</code></a> ou <a href="tag-body.php"><code>&lt;body&gt;</code></a> em um código HTML. Este tipo de erro não fará com que o código deixe de funcionar, mas ele pode eventualmente não funcionar do jeito esperado, e, conceitualmente, trata-se de um código errado. O exemplo abaixo, consequentemente, pode até funcionar, mas contém um erro de estrutura:</p>

    <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
        
    &lt;/head&gt;

    &lt;body&gt;
        conteúdo 1
    &lt;/body&gt;

    &lt;body&gt;
        conteúdo 2
    &lt;/body&gt;
  &lt;/html&gt;
  </pre>



<h2></h2>
<p>Abaixo um exemplo de código html estruturalmente correto, e o produto visível deste código:</p>

<div class="diagramahalf firstblock">
  <iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>


    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
      &lt;head&gt;
          &lt;meta name=&quot;author&quot; content=&quot;Guilherme Ranoya&quot;&gt;
          &lt;style&gt;
            a {
              color: violet;
            }
          &lt;/style&gt;
      &lt;/head&gt;

      &lt;body&gt;
          &lt;a href=&quot;https://www.ranoya.com&quot;&gt;
            Meu Site
          &lt;/a&gt;
      &lt;/body&gt;
    &lt;/html&gt;
  </pre>
</div>

  <hr style="width: 100%; border: 0; clear: both;"></hr>

<p>As informações contidas dentro da tag <a href="tag-style.php"><code>&lt;style&gt;</code></a> são outro tipo de código, como se pode perceber pela sintaxe. Dentro da tag <a href="tag-style.php"><code>&lt;style&gt;</code></a> ficam definidas as propriedades de <a href="../css/">Cascade Style Sheets / CSS</a>, que definem características visuais dos conteúdos exibidos pelo código HTML. De forma simples, o código HTML cuida dos dados/conteúdos e sua hierarquia/estrutura, e o código CSS cuida da aparência destes dados/conteúdos. Trocando em miúdos, não é no código HTML que se define o layout de um website, e sim no CSS; mas não é possível trocar a ordem dos conteúdos apresentados na tela pelo CSS, já que a estrutura/esqueleto do documento fica por conta do HTML.</p>

<p>Nos exemplos abaixo, esta diferença e o papel de cada código pode ficar mais evidente:</p>

<div class="diagramahalf firstblock">

  <pre class='editor codefull' data-name='editor_4' id='editor_4'>
  
&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;style&gt;
        * { border: solid 1px blue; }



      &lt;/style&gt;
    &lt;/head&gt;

    &lt;body&gt;
      &lt;div class=&#039;topo&#039;&gt;
      &lt;/div&gt;
      &lt;div class=&#039;conteudo&#039;&gt;
        Texto da p&aacute;gina vai aqui
      &lt;/div&gt;
      &lt;ul class=&quot;menu&quot;&gt;
        &lt;li&gt;Menu 1&lt;/li&gt;
        &lt;li&gt;Menu 2&lt;/li&gt;
        &lt;li&gt;Menu 3&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/body&gt;
  &lt;/html&gt;
</pre>

<br><br>

<iframe id="View_editor_4"></iframe>

</div>


<div class="diagramahalf">

  <pre class='editor codefull' data-name='editor_5' id='editor_5'>


&lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;style&gt;
        .topo { background-color: white; display: block; width: 100%; height: 40px ;}
        .conteudo { color: white; border: 1px solid white; float: right; margin: 0; padding: 0; margin-top: 2px; margin-left: 1px; padding-left: 3px; padding-top: 3px; padding-bottom: 53px; width: calc(100% - 107px); }
        ul { float: left; width: 100px; margin: 0; padding: 0; margin-top: 2px;}
        li { margin: 0; padding: 5px 0 5px 0; display: block; margin-bottom: 2px; width: 100px; clear: both; float: left; background-color: white; color: blue; list-style-type: none; text-align: center; }
      &lt;/style&gt;
    &lt;/head&gt;

    &lt;body&gt;
      &lt;div class=&#039;topo&#039;&gt;
      &lt;/div&gt;
      &lt;div class=&#039;conteudo&#039;&gt;
        Texto da p&aacute;gina vai aqui
      &lt;/div&gt;
      &lt;ul&gt;
        &lt;li&gt;Menu 1&lt;/li&gt;
        &lt;li&gt;Menu 2&lt;/li&gt;
        &lt;li&gt;Menu 3&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/body&gt;
  &lt;/html&gt;
</pre>

<br><br>
<iframe id="View_editor_5"></iframe>
</div>

<p class="separabloco">A diferença entre os dois códigos é apenas o CSS.</p>


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

    