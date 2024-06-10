<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: script | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: script | Tecnologias Criativas">
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
  <a name="script" class="indice">script</a>
<h1 id='titulocapitulo'><code>&lt; script &gt;</code></h1>

  <p>A tag <code>&lt;script&gt;</code> cria um espaço para que um código de programação javascript seja incorporado dentro do próprio documento HTML, ou carrega um código javascript externamente. Todos os navegadores são capazes de interpretar código javascript, e com ele é possível criar diferentes interações e dinâmicas nos documentos web.</p>

  <a name="Usos correntes" class="indice">Usos correntes</a>
<h2>Usos correntes</h2>

  <p>Carregamento externo de código javascript:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;script src=&quot;https://www.ranoya.com/public/dev/processing.min.js&quot;&gt;&lt;/script&gt;
</pre>

<h2 class="separabloco"></h2>
<p class="separabloco">Código javascript no próprio documento:</p>

<pre class='editor codefull' data-name='editor_2' id='editor_2'>


&lt;script&gt;

  [C&Oacute;DIGO JAVASCRIPT]
  
&lt;/script&gt;
</pre>

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
    &lt;style&gt; * { color: violet; }&lt;/style&gt;
    &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
    &lt;script&gt;
      function bomdia() {
        node = document.createElement("P");
        textnode = document.createTextNode("Bom Dia!");
        node.appendChild(textnode);
        document.body.appendChild(node); 
      }
    &lt;/script&gt;
  &lt;/head&gt;

  &lt;body&gt;
    &lt;a href=&quot;javascript:bomdia()&quot;&gt;clique aqui&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<h2 class="separabloco" style="display: inline-block;"></h2>

  <a name="Arquivo externo x código no documento" class="indice">Arquivo externo x código no documento</a>
<h2>Arquivo externo x código no documento</h2>

  <p>Carregar um javascript de um arquivo externo, ou definir o código no próprio documento é uma questão estratégica de projeto. Além da preferência pessoal do programador, também estão em jogo a reutilização do código por outras páginas, o trabalho de manutenção e alteração deste código quando suas características são utilizadas em vários documentos, e o intrincamento resultante de alterações quando vários documentos compartilham de um mesmo recurso.</p>

  <a name="Utilizando as duas abordagens ao mesmo tempo" class="indice">Utilizando as duas abordagens ao mesmo tempo</a>
<h2>Utilizando as duas abordagens ao mesmo tempo</h2>

  <p>Nada impede que um código seja carregado externamente e outro seja definido dentro do próprio código HTML. Na verdade, é possível carregar inúmeros códigos diferentes e definir diversos códigos javascript no próprio documento, na medida da necessidade.</p>

  <a name="Overload" class="indice">Overload</a>
<h2>Overload</h2>

  <p>Javascript não é uma linguagem dotada de overload de classes e funções; isto significa que quando uma função ou classe é definida novamente por um segundo ou terceiro código (externo ou definido no próprio documento), a última versão definida sobreescreve totalmente aquilo que já foi estabelecido antes. É bastante comum que, em função disso, ao carregar diversas bibliotecas e recursos em javascript, eles possam entrar em conflito uns com os outros por sobreescreverem variáveis, funções ou classes.</p>
  
</div>
<hr class="limpa"></hr>



    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</div>
</body>

</html>

    