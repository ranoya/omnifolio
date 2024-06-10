<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: a | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: a | Tecnologias Criativas">
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
  <a name="a" class="indice">a</a>
<h1 id='titulocapitulo'><code>&lt; a &gt;</code></h1>

  <p>A tag <code>&lt;a&gt;</code> cria âncoras no documento HTML. Estas âncoras podem marcar uma posição no documento HTML, podem direcionar para uma âncora já existente no próprio documento, ou pode direcionar o navegador para um documento externo, referenciado de forma absoluta (ex: "https://www.ranoya.com/index.html"), ou de forma relativa ("../quemsomos/index.html"). As vantagens e desvantagens de se usar referências absolutas ou relativas dependem da forma como o código é reaproveitado no processo de construção, se podem haver mudanças nos endereços, ou se o desenvolvimento está sendo feito sem a presença de um webserver, por exemplo. Há muitos fatores a serem considerados na hora de adotar um padrão de referência, e o projetista deve decidir pelo que lhe parece mais adequado.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;meu link&lt;/a&gt;
</pre>
  

  <a name="Criar uma âncora" class="indice">Criar uma âncora</a>
<h2>Criar uma âncora</h2>

  <p>Para criar uma âncora interna no documento, você deve utilizar a propriedade <code>name</code> na tag <code>&lt;a&gt;</code>, e para apontar para esta âncora no documento você deverá usar o operador <code>#</code> da url na propriedade <code>href</code> da tag <code>&lt;a&gt;</code>.</p>


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
    &lt;style&gt;
      * { color: violet; }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;#ancora&quot;&gt;Clique aqui!&lt;/a&gt;
    &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;
    &lt;a name=&quot;ancora&quot;&gt;&lt;/a&gt;
    Este conte&uacute;do fica bem em baixo.
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


  <a name="Criar um link" class="indice">Criar um link</a>
<hr style="border: 0; width: 100%; clear: both"></hr>
<h2>Criar um link</h2>

  <p>Para criar um link você deverá indicar um arquivo na estrutura de diretórios ou um endereço web na propriedade <code>href</code> da tag <code>&lt;a&gt;</code>. Pode ser útil incluir a propriedade <code>target</code> para indicar se o navegador deve abrir este novo link na própria aba/janela, ou se deve abrí-lo em outra aba/janela. Isto é indicado pelos valores <code>_self</code> ou <code>_blank</code>.</p>

  <a name="Exemplo" class="indice">Exemplo</a>
<h3>Exemplo</h3>

  <div class="diagramahalf firstblock">
  <iframe id="View_editor_3"></iframe>
  </div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3'>
  
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      * { color: violet; }
    &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;https://www.ranoya.com&quot; target=&quot;_blank&quot;&gt;Meu Site&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;../ementa/index.html&quot; target=&quot;_blank&quot;&gt;Ementa&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>


 
<a name="Tabela de propriedades importantes" class="indice">Tabela de propriedades importantes</a>
<hr style="border: 0; width: 100%; clear: both"></hr>
<h2>Tabela de propriedades importantes</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 2>Valores</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>href</code></td>
    <td colspan = 2>URL</td>
    <td>Direciona o navegador para o endereço especificado</td>
  </tr>
  <tr>
    <td><code>target</code></td>
    <td>_self</td>
    <td>_blank</td>
    <td>Especifica como o navegador abrirá o link, se é utilizando a janela/aba atual, ou se ele abrirá uma nova janela/aba com ele</td>
  </tr>
  <tr>
    <td><code>name</code></td>
    <td colspan = 2>Palavra escolhida pelo programador</td>
    <td>Atribui um nome de referência para uma âncora que pode ser acessada com o operador <code>#</code> da URL</td>
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

    