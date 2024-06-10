<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>HTML: Sintaxe | Tecnologias Criativas</title>
    
    <meta name="description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="HTML: Sintaxe | Tecnologias Criativas">
    <meta property="og:description" content="| O código HTML, capítulo do livro O tecido das tecnologias criativas">
    
</head>
<body>

    <div class="bigwhitesapce"></div>

    <div id="chapter">


  <div id="texto">
  <div id="langtype"><code>&lt; &gt; HTML</code></div>
  <a name="sintaxe" class="indice">Sintaxe</a>
  <h1 id='titulocapitulo'>Sintaxe</h1>

  <p>Antes de se aprender como programar alguma coisa específica, aprender o que faz cada parâmetro no código, ou mesmo o que são estes elementos, é necessário saber como redigí-lo, de forma que o computador entenda o que estamos lhe solicitando através do programa que escrevemos. Ao contrário das linguas e linguagens verbais, onde um erro de concordância, ou uma palavra falada errada, não impede outra pessoa de compreender a mensagem que tentamos transmitir, o código computacional precisa ser absolutamente impecável, sem nenhum erro sequer, pois sua interpretação é literal, e feita por uma máquina incapaz de assumir o que queremos dizer.</p>

  <p>A primeira etapa do aprendizado de qualquer linguagem de programação é entender sua sintaxe, isto é, as regras de como o código precisa ser escrito, mesmo quando ainda não sabemos exatamente está escrito por desconhecermos o que fazem as instruções ali presentes.</p>

  <a name="codigo">Tags HTML</a>
  <p>O código HTML é construído através de tags. Uma tag html é definida da seguinte forma:

  <div class="slidecut300">
  <iframe src="https://slides.com/ranoya/sintaxehtml/embed" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  </p>

  <p class="separabloco">Toda tag é identificada pela presença dos <code>< ></code>. Quase todas as tags são finalizadas por uma marcação <code>&lt;/ &gt;</code>, logo, a tag <code>&lt;a&gt;</code> é finalizada pela marcação <code>&lt;/a&gt;</code>. Quase todas as tags aceitam atributos, que modificam de alguma forma seu comportamento ou atuação. Nos exemplos acima, os parâmetros <code>href="./arquivo.html"</code>, <code>href="doc.html"</code>, <code>id="palavra1"</code>, <code>id="bloco2"</code>, <code>class="forte"</code> e <code>class="link"</code> definem valores para os atributos href, class e id das diversas tags em que são colocados como propriedades. O conteúdo, isto é, aquilo que está entre a declaração da tag, e sua finalização (nos exemplo acima, "texto", "Primeiro parágrafo", "Segundo parágrafo", etc.), é o valor que pertence à tag, isto é, o valor/dado que este nó guarda no ponto final de sua estrutura; Qualquer tipo de conteúdo pode ser colocado "dentro" de uma tag, inclusive outras tags.</p>

  <p>As tags HTML possuem <a href="propriedadesgerais.php">propriedades gerais</a>, que modificam suas atribuições de forma igual para toda e qualquer tag, e propriedades/atributos específicos, que precisam ser conhecidos e entendidos caso-a-caso, tag por tag.</p>

  <a name="espacos">Espaços e &crarr;</a>
  <p>Uma característica importante na sintaxe do código HTML é que espaços em branco ou linhas sendo puladas (&crarr;) ao longo dele não interferem em nada sobre sua interpretação. O navegador, ambiente onde o código é interpretado, ignora espaços e linhas puladas, e junta todo seu conteúdo como se ele estivesse escrito linearmente; letras minúsculas ou maiúsculas nas tags e propriedades também não são diferenciadas. Os dois exemplos abaixo produzem exatamente o mesmo resultado:</p>

  <div class="diagramahalf firstblock" style="margin-bottom: 15px;">

    <div class="codefull">
  <pre class='editor' data-name='editor_1' id='editor_1'>


&lt;p&gt;Conteúdo
do
Parágrafo&lt;/p&gt;

</pre>
  </div>

  <iframe id="View_editor_1" style="margin-top: 15px;"></iframe>
  

  </div>

  <div class="diagramahalf" style="margin-bottom: 15px;">


    <div class="codefull">
  <pre class='editor' data-name='editor_2' id='editor_2'>

&lt;p&gt;


Conteúdo do Parágrafo

&lt;/p&gt;</pre>
  </div>

  <iframe id="View_editor_2" style="margin-top: 15px;"></iframe>

  </div>

  <hr style="width: 100%; border: 0; clear: both;"></hr>
  <p>A estrutura do código HTML é entendida pelo navegador como um conjunto de nós; uma árvore formada por diversas ramificações, do tronco à cada pequena folha. Este formato é chamado de <b>Document Object Model</b> (modelo dos elementos que formam o documento), onde cada ramificação possui seus próprios nós filhos, e cada nó filho torna-se pai de outros nós filhos.</p>
  
  <p>O que não pode acontecer neste código em forma de árvore de dados, que quebra toda a lógica de como o HTML se estrutura, é o que está no exemplo (errado) abaixo:</p>

  <div class="codefull">
  <pre class='editor' data-name='editor_3' id='editor_3'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;
  &lt;div&gt;
&lt;/a&gt;
  &lt;/div&gt; 
</pre>
  </div>

 <h2></h2>

  <p class="separabloco" style="width: 100%; clear: both;">Todo nó precisa terminar dentro dos limites de seu nó pai. No exemplo acima, a tag <a href="tag-div.php"><code>&lt;div&gt;</code></a> permanece aberta dentro do seu nó pai, a tag <a href="tag-a.php"><code>&lt;a&gt;</code></a>, e seu fechamento acontece depois que sua própria tag-pai já esta fechada. Isto configura uma estrutura sintática que o navegador dificilmente conseguirá interpretar e resolver, e consequentemente, não conseguirá apresentar nada corretamente na tela do usuário.</p>

  <p>Já os dois códigos abaixo estão sintaticamente corretos. Eles produzem resultados diferentes, mas não há quaisquer falhas na sintaxe de suas estruturas:</p>
  
  <div class="diagramahalf firstblock">
  <pre class='editor' data-name='editor_4' id='editor_4'>


&lt;a href=&quot;https://www.ranoya.com&quot;&gt;
   &lt;div&gt;
     teste
   &lt;/div&gt;
&lt;/a&gt;
</pre>
  </div>

  <div class="diagramahalf">
<pre class='editor' data-name='editor_5' id='editor_5'>


&lt;div&gt;
  &lt;a href=&quot;https://www.ranoya.com&quot;&gt;  
     teste
  &lt;/a&gt;
&lt;/div&gt;
</pre>
  </div>
  
   <p class="separabloco" style="width: 100%; clear: both;"></p>

  <p class="separabloco">Este mecanismo de como o código HTML é estruturado é um formato bastante simples e, devido a isso e a sua flexibilidade, o código final de um documento tende a ficar bastante complexo, intrincado e possivelmente confuso. É recomendável que se utilize identação (este espaçamento para cada nível hierárquico do código que você vê nos exemplos) para torná-lo um pouco mais fácil de ser lido.</p>

<a name="comentarios" class="indice">Comentários</a>
  <h2>Comentários</h2>

  <p>Toda linguagem de programação possui uma forma do programador registrar comentários e anotações ao longo de seu código. No HTML, os comentários são colocados dentro da marcação <code>&lt;!--</code> e <code>--&gt;</code>. Quaisquer informações colocadas entro destas marcações, código ou texto, serão sumariamente ignoradas pelo navegador.</p>

<a name="exemplo" class="indice">Exemplo</a>
  <h3>Exemplo</h3>


  <div class="diagramahalf firstblock">
    <iframe id="View_editor_6"></iframe>
  </div>

  <div class="diagramahalf">
    <pre class='editor' data-name='editor_6' id='editor_6'>


Este texto aparecerá no navegador&lt;br&gt;
&lt;!-- Este texto n&atilde;o aparecer&aacute;&lt;br&gt; --&gt;
Este texto também aparecerá&lt;br&gt;
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

    