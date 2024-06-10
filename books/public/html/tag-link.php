<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: link | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: link | Tecnologias Criativas">
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
  <a name="link" class="indice"><code>link</code></a>
<h1 id='titulocapitulo'><code>&lt; link &gt;</code></h1>

  <p>A tag <code>&lt;link&gt;</code> carrega recursos externos, geralmente código CSS, para dentro do documento.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;estilo.css&quot;&gt;
</pre>

<h2 class="separabloco"></h2>

  <p class="separabloco">A tag <code>&lt;link&gt;</code> faz parte de um pequeno conjunto de tags que constitui um nó terminal na estrutura de árvore do documento (DOM), não existindo um fechamento do tipo <code>&lt;/link&gt;</code></p>

  <h2></h2>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

<div class="diagramahalf firstblock">

  <iframe id="View_editor_2"></iframe>

</div>

  <div class="diagramahalf">

  <pre class='editor codefull' data-name='editor_2' id='editor_2'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;https://www.ranoya.com/aulas/webdesign/playgroundDocs/html.css&quot;&gt;

  &lt;/head&gt;
  
  &lt;body&gt;

    &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Passe o mouse nesse link&lt;/a&gt;&lt;/p&gt;
  &lt;/body&gt;

&lt;/html&gt;
</pre>

</div>

<hr style="border: 0; width: 100%; clear: both;"></hr>

<a name="Tabelas de propriedades" class="indice">Tabelas de propriedades</a>
<h2>Tabelas de propriedades</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 4>Valor</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>rel</code></td>
    <td>stylesheet</td>
    <td>icon</td>
    <td>shortcut icon</td>
    <td>image_src</td>
    <td>Identifica que tipo de recurso a tag link deverá carregar</td>
  </tr>
  <tr>
    <td><code>href</code></td>
    <td colspan = 4>URL</td>
    <td>Indica um arquivo o o endereço do recurso a ser carregado</td>
  </tr>
  <tr>
    <td><code>type</code></td>
    <td>especificação</td>
    <td colspan = 3><a href="https://www.iana.org/assignments/media-types/media-types.xhtml" target="_blank">tabela de tipos</a></td>
    <td>Especifica o tipo de recurso que será carregado</td>
  </tr>

</table>

<br>

<table>
  
  <tr>
    <th colspan = 2>rel</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td colspan = 2>stylesheet</td>
    <td>rel="stylesheet" href="estilo.css"</td>
    <td>Carrega um código CSS para o documento</td>
  </tr>
  <tr>
    <td>icon</td>
    <td>shortcut icon</td>
    <td>rel="shortcut icon" href="icone.png"</td>
    <td>Carrega uma imagem para servir de ícone para o documento na janela/aba do navegador</td>
  </tr>
    <tr>
    <td colspan = 2>image_src</td>
    <td>rel="imag_src" href="referencia.jpg"</td>
    <td>Aplica uma "imagem de capa" para compartilhamentos em algumas das redes sociais (não todas, algumas utilizam <code>&lt;meta property=&quot;og:image&quot; content=&quot;referencia.jpg&quot;&gt;</code>). O uso das duas instruções ao mesmo tempo é recomendável.</td>
  </tr>
</table>


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

    