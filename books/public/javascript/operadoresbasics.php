<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    <title>Operadores | O tecido das tecnologias criativas</title>
    <meta name="description" content="Operadores | O código Javascript, capítulo do livro O tecido das tecnologias criativas">
    <meta property="og:title" content="Operadores | O tecido das tecnologias criativas">
    <meta property="og:description" content="Operadores | O código Javascript, capítulo do livro O tecido das tecnologias criativas">    

</head>
<body>

  <script>
  TodosEditoresPre = "<sty" + "le>body, html { margin: 0; padding: 0; } body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</s" + "tyle><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";

  TodosEditoresPost = "</scri" + "pt>";


  Predata_editor_1 = TodosEditoresPre;
  Postdata_editor_1 = "println('a = ' + a); println('b = ' + b);" + TodosEditoresPost;

  Predata_editor_2 = TodosEditoresPre;
  Postdata_editor_2 = "println('a = ' + a); println('r = ' + r); println('v = ' + v); println('b = ' + b); println('c = ' + c);  println('k = ' + k); println('w = ' + w); println('s = ' + s);" + TodosEditoresPost;

  Predata_editor_3 = TodosEditoresPre;
  Postdata_editor_3 = "println('a = ' + a); println('b = ' + b);" + TodosEditoresPost;
 
  Predata_editor_4 = TodosEditoresPre;
  Postdata_editor_4 = "println('interruptor = ' + interruptor);" + TodosEditoresPost;
 
  Predata_editor_5 = TodosEditoresPre;
  Postdata_editor_5 = "println('interruptor = ' + interruptor);" + TodosEditoresPost;






  

  </script>

   <div class="bigwhitesapce"></div>

    <div id="chapter">
  
  <div id="texto">
  <a name="Operadores" class="indice">Operadores</a>
<h1 id='titulocapitulo'>Operadores aritméticos e lógicos</h1>

  <a name="aritmeticos" class="indice">Aritméticos</a>
  <h2>Operadores aritméticos</h2>
  <p>Operadores aritiméticos são os caracteres ou sintaxe de como devemos instruír a máquina computacional para que ela possa realizar as quatro operações matemáticas básicas, e outros tipos de operações de cálculo.</p>
  <div class="diagramahalf firstblock noborder">
  <p>Soma: <code>+</code><br>Subtração: <code>-</code><br>Multiplicação: <code>*</code><br>Divisão: <code>/</code>
  </div>
  <div class="diagramahalf noborder"><p>Resto da divisão: <code>%</code><br>Acrescimo de 1: <code>++</code><br>Subtração de 1: <code>--</code></p>
  </div>

  <h2 style="width: 100%; clear: both; border: 0; height: 15px;"></h2>


  <p>Operações como potênciação e raízes (quadrada, cúbica, etc.) são feitas com a função <code>pow(base, potencia)</code>. Uma raíz quadrada é um número elevado à potência <code>1/2</code>; uma raíz cúbica à <code>1/3</code>, portanto, para se obter raízes, se utiliza a função <code>pow(base, potencia)</code> elevando-se a base à frações. Para cálculos com logarítmos, utiliza-se a função <code>log(valor)</code>. Para os cálculos trigonométricos, são utilizadas as funções <code>sin(rad)</code>, <code>cos(rad)</code>, <code>tan(rad)</code>, e outras que podem ser consultadas na referência de <a href="geometry.php">geometria</a>.</p>


  <div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


a = 10 * 5;
a++; 
b = Math.pow(2,3);
</pre>
</div>

<div class="diagramahalf" style="height: 80px;">
<iframe id="View_editor_1" style="height: 190px; border: 0 transparent none;"></iframe>
</div>
  
    <h2 style="width: 100%; clear: both; border: 0; height: 10px;"></h2>

  <a name="logicos" class="indice">Lógicos</a>
  <h2>Operadores lógicos</h2>
    <p>Além dos operadores aritméticos, temos também os operadores lógicos, que são a sintaxe para que se possa atribuir valores à variáveis, comparar estes valores e concatenar ou encadear estas operações. Os operadores lógicos são fundamentais para conduzir o comportamento de um programa.</p>

  <div class="third"><span class="marca">Comparação</span><br>Maior que: <code>></code><br>Menor que: <code><</code><br>Igual a: <code>==</code><br>Maior ou igual a: <code>>=</code><br>Menor ou igual a: <code><=</code><br>Diferente de: <code>!=</code></div>
  <div class="third"><span class="marca">Operações booleanas</span><br>Ou: <code>||</code><br>E: <code>&&</code><br>Não: <code>!</code></div>
  <div class="third"><span class="marca">Atribuição</span><br>Igual a: <code>=</code><br>Valor acrescido de: <code>+=</code><br>Valor subtraído de: <code>-=</code><br>Valor multiplicado por: <code>*=</code><br>Valor dividido por: <code>/=</code></div>

  <h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>


  <p>Exceto pelas operações de atribuição, toda operação lógica produz como resultado um valor <code>boolean</code>.</p>


<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">

a = 10;
a++;
r = (a == 10);
v = (a < Math.random(5));
b = a * 3;
c = b / 4;
k = (a > 5 && a < 15);
w = (b > 15 || c > 15);
s = (c != 15);
</pre>
</div>

<div class="diagramahalf" style="height: 180px;">
<iframe id="View_editor_2" style="height: 190px; border: 0 transparent none;"></iframe>
</div>


<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>
  <a name="condicionais" class="indice">Condicionais</a>
  <h2>Operações condicionais</h2>

<p>O uso de operadores lógicos vêm, normalmente, acompanhados de instruções condicionais. A condicional mais comum é a do tipo <code>if()</code>. Ela determina que códigos devem ser processados caso a operação lógica dada seja verdadeira (<code>true</code>). No caso abaixo, a instrução que pertence à segunda condicional (<code>a><span class="marca">20</span></code>) é completamente ignorada, já que o valor de a continua menor que <code><span class="marca">20</span></code>.</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
  
a = 10;
b = 0;

if (a<20) {
  b = a + 1;                    
}

if (a>20) {
  b = b + 10;                        
}
</pre>
</div>

<div class="diagramahalf" style="height: 80px;">
<iframe id="View_editor_3" style="height: 190px; border: 0 transparent none;"></iframe>
</div>


<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>
 <a name="lcond" class="indice">Lógica condicional</a>
  <h2>Lógica condicional</h2>

<p>Considere agora o caso da lógica de um botão de interruptor: se ele estiver ligado e alguém apertar nele, ele deverá se tornar desligado, mas se ele estiver desligado e alguém apertar nele, ele deverá se tornar ligado. Tentaremos traduzir isso para a lógica de programação com o código abaixo. Experimente mudar a condição original de desligado (<code>false</code>) para ligado (<code>true</code>), e veja o resultado:</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
  
interruptor = false;  

// Se estiver ligado, desligue
if (interruptor == true) {
  interruptor = false;                   
}

// Se estiver desligado, ligue
if (interruptor == false) {
  interruptor = true;                       
}
</pre>
</div>

<div class="diagramahalf" style="height: 80px;">
<iframe id="View_editor_4" style="height: 190px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>Não há mudança, na condição do interruptor, mesmo que o código esteja sem erros. A tentativa nele foi de criar uma condição para que, simulando o acionamento do interruptor, se ele estivesse ligado, passaria a ser desligado; caso o interruptor estivesse desligado, ele passaria a ser ligado.</p>

<p><span class="marca">Condição inicial 1: o interruptor se inicia desligado (false)</span><br>Nesta situação, ao passar pela primeira instrução condicional (Se estiver ligado, desligue), é detectado que a variável "interruptor" é <code>false</code>, e a instrução condicional é ignorada. Ao chegar na segunda instrução condicional (Se estiver desligado, ligue), ela é verdadeira, e o interruptor passa para o estado ligado (<code>true</code>).</p>

<p><span class="marca">Condição inicial 2: o interruptor se inicia ligado (false)</span><br>Nesta situação, ao passar pela primeira instrução condicional (Se estiver ligado, desligue), é detectado que a variável "interruptor" é <code>true</code>, portanto a instrução contida no bloco é processada, e a variável passa a ser <code>false</code>. Ao chegar na segunda instrução condicional (Se estiver desligado, ligue), ela também é verdadeira já que a variável "interruptor" que chega até ela é <code>false</code>, sendo então também processada, e o interruptor passa para o estado ligado (<code>true</code>).</p>

<p>Para evitar este tipo de contradição lógica, a instrução condicional <code>if()</code> possui o complemento <code>else</code>, que determina à máquina computacional o que fazer caso a comparação operada produza um resultado <code>false</code> e não <code>true</code>. Através do <code>else</code>, um segundo bloco de instruções é inserido para ser processado no resultado negativo da condicional. Experimente mudar a condição original de desligado (false) para ligado (true), e veja o resultado quando substituímos duas condicionais <code>if()</code> por uma <code>if() + else</code>:</p>

<div class="diagramahalf firstblock">
<pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">
  
interruptor = false; 

// Se estiver ligado, desligue... caso contrário, ligue
if (interruptor == true) {
  interruptor = false;                   
} else {
  interruptor = true;                       
}
</pre>
</div>

<div class="diagramahalf" style="height: 80px;">
<iframe id="View_editor_5" style="height: 190px; border: 0 transparent none;"></iframe>
</div>

<h2 style="width: 100%; clear: both; border: 0; height: 25px;"></h2>

<p>A sintaxe destes elementos pode variar dentre as diversas linguagens de programação diferentes, mas todas elas são estruturadas a partir destes mesmos elementos que, ainda que sejam representados de forma diferente, funcionarão exatamente da mesma maneira na lógica de programação para qualquer uma delas.</p> 






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

