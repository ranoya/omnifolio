<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: form | Tecnologias Criativas</title>
    
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
  <a name="<code>&lt;form&gt;</code>" class="indice">form</a>
<h1 id='titulocapitulo'><code>&lt; form &gt;</code></h1>

  <p>A tag <code>&lt;form&gt;</code> cria um bloco para que tags de formulário e seus dados sejam agrupados e encaminhados para outro documento, em conjunto. Há muitas formas de se construir formulários em documentos HTML, e não é mais necessário que as tags de formulário como <a href="tag-input"><code>&lt;input&gt;</code></a> ou <a href="tag-select"><code>&lt;select&gt;</code></a> estejam contidas dentro de uma tag <code>&lt;form&gt;</code>. Mas ela continua sendo útil para reúnir de forma simples um conjunto de informações que possam ser passadas como variáveis para outro documento através de um <a href="tag-input"><code>&lt;input type='submit'&gt;</code></a>.</p>

  <a name="Uso corrente" class="indice">Uso corrente</a>
<h2>Uso corrente</h2>

<pre class='editor codefull' data-name='editor_1' id='editor_1'>


&lt;form method=GET action=&#039;https://www.google.com/search&#039;&gt;

  [HTML]

&lt;/form&gt;
</pre>
  
  <a name="Submit" class="indice">Submit</a>
<h2>Submit</h2>

  <p>A instrução nativa (sem javascript) para que os dados sejam enviados para outro documento é o <a href="tag-input"><code>&lt;input type='submit'&gt;</code></a>. Cada tag <a href="tag-input"><code>&lt;input type='submit'&gt;</code></a> ativa a ação definida na propriedade <code>action</code> da tag <code>&lt;form&gt;</code> de qual ela faz parte. Uma tag <a href="tag-input"><code>&lt;input type='submit'&gt;</code></a> fora de uma tag <code>&lt;form&gt;</code> não realiza nenhuma ação.</p>

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
      &lt;input type=&#039;text&#039; name=&#039;q&#039;&gt;
      &lt;input type=&#039;submit&#039; value=&#039;googlar&#039; &gt;
    &lt;/form&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<hr style="width: 100%; border: 0; clear: both;"></hr>

  <a name="AJAX, e envio de dados por programação" class="indice">AJAX, e envio de dados por programação</a>
<h2>AJAX, e envio de dados por programação</h2>

  <p>A tag <code>&lt;form&gt;</code> tem deixado de ser utilizada nos formulários frente a mecanismos mais inteligente de troca de dados com progração javascript, principalmente os mecanismos assíncronos que trocam dados no plano de fundo sem sair do próprio documento, conhecidos como AJAX (Assincronous Javascript and XML). Além das técnicas de AJAX, também é possível capturar os dados de cada <a href="tag-input"><code>&lt;input&gt;</code></a> no código via javascript, e construir uma URL para encaminhar estes dados sem a necessidade da tag <code>&lt;form&gt;</code> ou do botão <a href="tag-input"><code>&lt;input type='submit'&gt;</code></a>. Estes procedimentos, contudo, exigem conhecimentos razoáveis tanto em programação javascript, como programação back-end para receber e tratar os dados no servidor web.</p>
  
<a name="Tabela de propriedades importantes" class="indice">Tabela de propriedades importantes</a>
<h2>Tabela de propriedades importantes</h2>

<table>
  
  <tr>
    <th>Propriedade</th>
    <th colspan = 2>Valores</th>
    <th>Descrição</th>
  </tr>
  <tr>
    <td><code>method</code></td>
    <td>GET</td>
    <td>POST</td>
    <td>Forma como as variáveis são passadas ao próximo documento: via URL (GET), ou dentro do cabeçalho do protocolo HTTP (POST)<br>GET permite que todos os valores fiquem visíveis na URL e possam ser alterados (não se deve passar variáveis secretas, como senhas, por GET)<br>POST permite que o usuário não saiba das variáveis, mas também não permite que sejam modificadas na URL</td>
  </tr>
  <tr>
    <td><code>action</code></td>
    <td colspan=2>URL</td>
    <td>Endereço ou arquivo para onde as variáveis devem ser encaminhadas</td>
  </tr>
  <tr>
    <td><code>target</code></td>
    <td>_self</td>
    <td>_blank</td>
    <td>Especifica como o navegador abrirá o link, se é utilizando a janela/aba atual, ou se ele abrirá uma nova janela/aba com ele</td>
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

    