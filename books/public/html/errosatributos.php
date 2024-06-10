<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>Exercícios | Tecnologias Criativas</title>
    
    <meta name="description" content="Exercícios | O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="Exercícios | Tecnologias Criativas">
    <meta property="og:description" content="Exercícios | O código HTML, capítulo do livro O tecido das tecnologias criativas">
    
</head>
<body>

    <script>

    Predata_editor_1 = "<styl" + "e>body, html, div, a { color: violet; }</sty" + "le>";
    Predata_editor_2 = Predata_editor_1;
    Predata_editor_3 = Predata_editor_1;
    Predata_editor_4 = Predata_editor_1;
    Predata_editor_5 = Predata_editor_1;
    Predata_editor_6 = Predata_editor_1;
    Predata_editor_7 = Predata_editor_1;
    Predata_editor_8 = Predata_editor_1;
    Predata_editor_9 = Predata_editor_1;
    Predata_editor_10 = Predata_editor_1;
    Predata_editor_11 = Predata_editor_1;
    Predata_editor_12 = Predata_editor_1;
    Predata_editor_13 = Predata_editor_1;
    Predata_editor_14 = Predata_editor_1;
    Predata_editor_15 = Predata_editor_1;
    Predata_editor_16 = Predata_editor_1;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

  <div id="texto">

  <div id="langtype"><code>&lt; &gt; HTML</code></div>

 <a name="Exerícios" class="indice">Exerícios</a>
<h1 id='titulocapitulo'>Exerícios</h1>


  <p>Exercícios de identificação de erros na estrutura do código HTML</p>

  <p>Os exercícios à seguir apresentam erros no seu código. O intuito destes documentos é treiná-lo para a identificação destes problemas, de forma que você possa identificar e corrigir seu próprio código ao se deparar com algo que não funciona como o esperado. Nesta versão dos documentos, o editor não apontará erros, e não auxiliará com marcações coloridas sobre a sintaxe (syntax highlighting).</p>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar em negrito:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_1' id='editor_1' data-linguagem="text">


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p id=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;

</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_1"></iframe>
</div>


<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_2' id='editor_2' data-linguagem="text">


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p style=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_2"></iframe>
</div>





<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria estar rosa:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_3' id='editor_3' data-linguagem="text">


&lt;style&gt;
span { color: blue; }
.rosa { color: violet; }
&lt;/style&gt;

&lt;div class=&quot;rosa&quot;&gt;
    &lt;span&gt;rosa&lt;/span&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_3"></iframe>
</div>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_4' id='editor_4' data-linguagem="text">


&lt;p style=&quot;color red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_4"></iframe>
</div>




<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<a name="reflexao" class="indice">Conhecimento envolvido</a>
<h3>Conhecimento envolvido</h3>
<p>Os problemas apresentados envolvem um pouco de conhecimento em <a href="../css">CSS</a>, mas estão mais relacionados ao problema da escrita do código. São problemas comuns, que recaem mais sobre a falta de atenção ao se escrevê-lo, do que ao seu desconhecimento. De qualquer maneira, é importante saber identificá-los e corrigí-los. Se você não consegue solucionar estas questões, leia com atenção os documentos de <a href="sintaxecss.php">sintaxe do CSS</a> e sua <a href="seletorescss.php">aplicação</a>.</p>





<a name="codehighlight" class="indice">Code Highlight</a>
<h2>Exercícios com Code Highlight</h2>

<p>Aqui estão os mesmos exercícios, mas com <i>highlight</i> no código, para facilitar a identificação dos erros.</p>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar em negrito:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_5' id='editor_5' data-linguagem="html">


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p id=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;

</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_5"></iframe>
</div>


<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_6' id='editor_6' data-linguagem="html">


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p style=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_6"></iframe>
</div>





<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria estar rosa:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_7' id='editor_7' data-linguagem="html">


&lt;style&gt;
span { color: blue; }
.rosa { color: violet; }
&lt;/style&gt;

&lt;div class=&quot;rosa&quot;&gt;
    &lt;span&gt;rosa&lt;/span&gt;
&lt;/div&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_7"></iframe>
</div>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_8' id='editor_8' data-linguagem="html">


&lt;p style=&quot;color red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_8"></iframe>
</div>

<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>



<a name="solucao" class="indice">Soluções</a>
<h2>Soluções dos exercícios</h2>



<p>Aqui estão as soluções.</p>


<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar em negrito:</p>

  <div class="diagramahalf firstblock">
 <pre class='editor' data-name='editor_9' id='editor_9' data-linguagem="html">


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p class=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;

</pre>

<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>

<pre class='editor' data-name='editor_10' id='editor_10' data-linguagem="html">


&lt;style&gt;
  .negrito {
    font-weight: bold;
  }
&lt;/style&gt;

&lt;p id=&quot;negrito&quot;&gt;texto com refor&ccedil;o&lt;/p&gt;

</pre>


  </div>

<div class="diagramahalf">
  <iframe id="View_editor_9"></iframe>
</div>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_11' id='editor_11' data-linguagem="html">


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p class=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
  <pre class='editor' data-name='editor_12' id='editor_12' data-linguagem="html">


&lt;style&gt;
  .vermelho {
    color: red;
  }
&lt;/style&gt;

&lt;p style=&quot;vermelho&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_11"></iframe>
</div>





<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria estar rosa:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_13' id='editor_13' data-linguagem="html">


&lt;style&gt;
span { color: blue; }
.rosa { color: violet; }
&lt;/style&gt;

&lt;div class=&quot;rosa&quot;&gt;
    &lt;span class=&quot;rosa&quot;&gt;rosa&lt;/span&gt;
&lt;/div&gt;
</pre>
<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
  <pre class='editor' data-name='editor_14' id='editor_14' data-linguagem="html">


&lt;style&gt;
span { color: blue; }
.rosa { color: violet; }
&lt;/style&gt;

&lt;div class=&quot;rosa&quot;&gt;
    &lt;span&gt;rosa&lt;/span&gt;
&lt;/div&gt;
</pre>

  </div>

<div class="diagramahalf">
  <iframe id="View_editor_13"></iframe>
</div>



<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
<p>O texto deveria ficar vermelho:</p>

  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_15' id='editor_15' data-linguagem="html">


&lt;p style=&quot;color: red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>
  <pre class='editor' data-name='editor_16' id='editor_16' data-linguagem="html">


&lt;p style=&quot;color red&quot;&gt;texto vermelho&lt;/p&gt;
</pre>
  </div>

<div class="diagramahalf">
  <iframe id="View_editor_15"></iframe>
</div>

<hr style='width: 100%; clear: both; border: 0; height: 25px;'></hr>


















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

    