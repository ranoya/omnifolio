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

    Predata_editor_1 = "<styl" + "e>body, html, div, a { color: white; }</sty" + "le>";
    Predata_editor_2 = Predata_editor_1;
    Predata_editor_3 = Predata_editor_1;
    Predata_editor_4 = Predata_editor_1;
    Predata_editor_5 = Predata_editor_1;
    Predata_editor_6 = Predata_editor_1;
    Predata_editor_7 = Predata_editor_1;
    Predata_editor_8 = Predata_editor_1;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>

 <a name="Exerícios" class="indice">Exerícios</a>
<h1 id='titulocapitulo'>Exerícios</h1>


  <p>Exercícios de identificação de erros na estrutura do código HTML</p>

  <p>Os exercícios à seguir apresentam erros no seu código. O intuito destes documentos é treiná-lo para a identificação destes problemas, de forma que você possa identificar e corrigir seu próprio código ao se deparar com algo que não funciona como o esperado. Nesta versão dos documentos, o editor não apontará erros, e não auxiliará com marcações coloridas sobre a sintaxe (syntax highlighting).</p>



<hr></hr>
<p>O código deveria exibir um link com o texto "meu link":</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_1' id='editor_1' data-linguagem="text">


&lt;div&gt;
&lt;a href=&quot;https://www.ranoya.com&quot;
meu link
/a&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
</div>



<hr></hr>
<p>Um bloco de texto deveria ficar à esquerda, e outro à direita:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_2' id='editor_2' data-linguagem="text">


&lt;div style=&quot;float: right&quot;&gt;bloco &agrave; direita
&lt;div style=&quot;float: left&quot;&gt;bloco &agrave; esquerda
&lt;/div&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
</div>





<hr></hr>
<p>O link deveria ser apenas na palavra "link", mas está ocupando um espaço enorme:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_3' id='editor_3' data-linguagem="text">


&lt;style&gt;
div {
width: 150px;
height: 150px;
}
&lt;/style&gt;

&lt;a href=&quot;https://www.ranoya.com&quot;&gt;&lt;div&gt;
link
&lt;/div&gt;&lt;/a&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
</div>



<hr></hr>
<p>O texto deveria ficar à esquerda:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_4' id='editor_4' data-linguagem="text">


&lt;form&gt;
&lt;div style=&quot;float: right;&quot;&gt;
&lt;p style=&quot;float: left&quot;&gt;
teste
&lt;/div&gt;
&lt;/p&gt;
&lt;/form&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
</div>

<hr></hr>
<a name="reflexao" class="indice">Conhecimento envolvido</a>
<p><b>Conhecimento envolvido</b></p>
<p>Os problemas apresentados aqui dizem respeito exclusivamente a questões de <a href="sintaxe.php">sintaxe</a> do código HTML. Não são problemas que envolvam atributos, dados ou especificações equivocadas; eles tratam apenas da escrita correta do código, como tags sendo fechadas da maneira certa, a posição de cada tag dentro da estrutura, dentre outras questões. Se você não conseguiu resolvê-los, procure ler com atenção a documentação relativa à estrutura do código, sobretudo o documento de <a href="sintaxe.php">sintaxe</a>.</p>





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

    