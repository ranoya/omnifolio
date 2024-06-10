<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: input | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: form | Tecnologias Criativas">
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
  <a name="input" class="indice">input</a>
<h1 id='titulocapitulo'><code>&lt; input &gt;</code></h1>

  <p>A tag <code>&lt;input&gt;</code> cria diferentes campos de entrada de dados no documento HTML. No geral, <code>&lt;input&gt;</code> deve ser usada dentro da tag <a href="tag-form"><code>&lt;form&gt;</code></a>, para que possa passar os dados coletados para algum outro documento através dos processos nativos de <a href="tag-form"><code>&lt;form&gt;</code></a>. Contudo, nada impede que os dados das tags <code>&lt;input&gt;</code>sejam coletados por programação javascript, tratados e encaminhados para outro documento através de rotinas preparadas para fazer isso; neste caso, não há qualquer obrigatoriedade dos <code>&lt;input&gt;</code> serem alocados dentro de uma tag <a href="tag-form"><code>&lt;form&gt;</code></a>.</p>

  <p>A tag <code>&lt;input&gt;</code> é uma das poucas tags que não possui fechamento <code>&lt;/input&gt;</code>.</p> 

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;input type=&#039;text&#039; name=&#039;minhavar&#039; id=&#039;xpto&#039;&gt;
</pre>

  <a name="Tipologias de entrada de dados" class="indice">Tipologias de entrada de dados</a>
<h2>Tipologias de entrada de dados</h2>

  <p><code>&lt;input&gt;</code> possui uma quantidade muito grande de propriedades disponíveis, que na sua maioria são controladas, hoje, através do código CSS. Abaixo apresentamos apenas alguns valores (mais usuáis) para a propriedade <code>type</code>, que define o tipo de entrada de dados em <code>&lt;input&gt;</code>.</p>

<table>
  
  <tr>
    <th>type</th>
    <th>Exemplo</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td>button</td>
    <td><code>&lt;input type=&quot;button&quot; value=&quot;meu bot&atilde;o&quot;&gt;</code></td>
    <td>Cria um botão genérico, como <input type='button' value='este' style="display: inline; width: 80px; margin: 0;"> para ser utilizado por programação javascript</td>
  </tr>
  <tr>
    <td>checkbox</td>
    <td><code>&lt;input type=&quot;checkbox&quot;&gt; name=&quot;chk1&quot; checked&gt; Opção 1</code></td>
    <td>Cria uma entrada binária como <input type='checkbox' checked style="display: inline; margin: 0; width: 25px;">esta</td>
  </tr>
   <tr>
    <td>color</td>
    <td><code>&lt;input type=&quot;color&quot;&gt; name=&quot;cor&quot;&gt;</code></td>
    <td>Cria uma entrada para registros de cor como <input type="color" style="display: inline; width: 80px; margin: 0;"> esta</td>
  </tr>
  <tr>
    <td>date</td>
    <td><code>&lt;input type=&quot;date&quot;&gt; name=&quot;dia&quot;&gt;</code></td>
    <td>Cria uma entrada de data de calendário, como esta <input type="date" style="display: inline; width: 160px; margin: 0;"></td>
  </tr>
  <tr>
    <td>file</td>
    <td><code>&lt;input type=&quot;file&quot;&gt; name=&quot;arquivo&quot;&gt;</code></td>
    <td>Cria uma entrada para envio de arquivos, como esta: <input type="file" style="margin: 0;"></td>
  </tr>
  <tr>
    <td>hidden</td>
    <td><code>&lt;input type=&quot;hidden&quot;&gt; name=&quot;arquivo&quot;&gt;</code></td>
    <td>O tipo <code>hidden</code> não aparece na tela, e serve para guardar variáveis para serem enviadas à outras páginas, ou arquivar dados temporários</td>
  </tr>
  <tr>
    <td>password</td>
    <td><code>&lt;input type=&quot;password&quot;&gt; name=&quot;senha&quot;&gt;</code></td>
    <td>Cria uma entrada de texto onde os valores inseridos aparecem na tela protegidos por caracteres <code>*</code>, como esta: <input type="password" style="width: 120px; margin: 0;"></td>
  </tr>
  <tr>
    <td>radio</td>
    <td><code>&lt;input type=&quot;radio&quot;&gt; name=&quot;optA&quot; checked&gt; Opção A</code></td>
    <td>Cria uma entrada de seleção com opções feitas por seletores como <input type="radio" style="display: inline; margin: 0; width: 25px;"checked> este</td>
  </tr>
  <tr>
    <td>range</td>
    <td><code>&lt;input type=&quot;range&quot; name=&quot;slide&quot;&gt; Meu Slider</code></td>
    <td>Cria uma entrada com um slider, como <input type="range" style="display: inline; margin: 0; width: 200px;"> este</td>
  </tr>
  <tr>
    <td>reset</td>
    <td><code>&lt;input type=&quot;reset&quot;&gt;</code></td>
    <td>Cria um botão de reset como <input type="reset" value="este" style="display: inline; width: 80px; margin: 0;">, que apaga dos os dados do formulário</td>
  </tr>
   <tr>
    <td>text</td>
    <td><code>&lt;input type=&quot;reset&quot;&gt;</code></td>
    <td>Cria um campo de texto como <input type="text" value="este" style="width: 120px; margin: 0;"></td>
  </tr>

</table>
  
<p>Muitos dos campos de <code>&lt;input&gt;</code> podem ter um valor <i>default</i> estabelecido pela propriedade <code>value</code>. Campos como <code>checkbox</code> ou <code>radio</code> podem ser definidos previamente como marcados através da <i>keyword</i> <code>checked</code> dentro da tag.</p>


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
  &lt;/head&gt;

  &lt;body&gt;
    &lt;form method=GET action=&#039;https://www.google.com/search&#039; target=&#039;_blank&#039; &gt;
      &lt;input type=&#039;text&#039; value=&#039;código html&#039; name=&#039;q&#039;&gt;
      &lt;input type=&#039;submit&#039; value=&#039;googlar&#039; &gt;
    &lt;/form&gt;
  &lt;/body&gt;
&lt;/html&gt;
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

    