<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: Propriedades Gerais | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: Propriedades Gerais | Tecnologias Criativas">
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
  <a name="propriedades" class="indice">Propriedades gerais</a>
  <h1 id='titulocapitulo'>Propriedades gerais</h1>

  <p>Todas as tags HTML podem receber propriedades que modificam seu comportamento/utilização no código. Algumas tags possuem propriedades específicas que só podem ser atribuídas a elas (ou que não têm qualquer efeito sobre outras tags), como por exemplo a propriedade <code>charset</code> da tag <a href="tag-meta.php"><code>&lt;meta&gt;</code></a>, mas todas recebem algumas propriedades gerais, úteis para o relacionamento do código HTML com outros códigos (como o CSS e o javascript), ou para auxiliar plataformas como os mecanismos de busca.</p>

<a name="uso" class="indice">Uso</a>
  <h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;html lang=&quot;pt&quot; style=&quot;margin: 30px;&quot;&gt;
</pre>

<a name="propriedades2" class="indice">Propriedades</a>
  <h2>Propriedades</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th>Valores</th>
    <th style="min-width: 160px;">Exemplo</th>
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

<a name="overhide" class="indice">CSS Overhide</a>
  <h2>CSS Override</h2>

  <p>É possível atribuir diversas classes CSS para uma mesma tag; estas classes irão se sobrepor, isto é, suas propriedades irão sobrepor umas-às-outras, na sequência em que são indicadas. A sobreposição acontece separando-se os nomes das classes por espaço na propriedade <code>class</code>. Este recurso não funciona em navegadores antigos, pois é próprio da última especificação do código CSS, o CSS3.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2'>

&lt;style&gt;
  .tipoA {
    color: black;
    font-size: 24px;
  }
  .tipoB {
    color: violet;
    text-decoration: underline;
  }
&lt;/style&gt;

&lt;p class=&quot;tipoA&quot;&gt;classe tipoA&lt;/p&gt;
&lt;p class=&quot;tipoB&quot;&gt;classe tipoB&lt;/p&gt;
&lt;p class=&quot;tipoA tipoB&quot;&gt;Override&lt;/p&gt;
</pre>
</div>




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

    