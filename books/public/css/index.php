<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require '../tecnologiascriativas/meta.php';
  ?>
  <title>O código CSS | O tecido das tecnologias criativas</title>
  <meta property="og:title" content='O código CSS | O tecido das tecnologias criativas'>
  <meta name="description" content="O código CSS. Capítulo da versão digital do livro O tecido das tecnologias criativas">
  <meta property="og:description" content="O código CSS. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
  <script src="https://www.ranoya.com/Assets/JSLibs/AutoAce/multiAce.js"></script>
  <script src="https://datat.vercel.app/basics.js"></script>

</head>

<body>

  <div class="bigwhitesapce"></div>

  <div id="chapter">

    <h1 id="titulocapitulo">O código CSS</h1>

    <div class="corpus">

      <p><i>Cascade Style Sheets</i>, ou CSS, são um conjunto de especificações visuais que definem a forma como elementos do código <a href="../html/">HTML</a>, ou <a href="../svg/">SVG</a>, serão exibidos na tela.</p>

      <p>Sua função é, portanto, configurar a forma que uma estrutura de dados deverá assumir. Sabemos, contudo, que esta relação é ambígua, já que muito do que é definido na estrutura de dados de um código <a href="../html/">HTML</a> já impõe uma hierarquia e posicionamento aos elementos que serão exibidos, e se falarmos de <a href="../svg/">SVG</a>, suas próprias instruções já definem uma forma, legando ao CSS apenas a definição de suas características, como cor, posição e etc.</p>

      <p>É mais justo, nesse sentido, afirmar que o CSS é a contraparte responsável por especificar, de forma mais organizada e detalhada, os atributos dos diversos elementos criados pelos demais códigos. Trata-se de uma linguagem de marcação que descreve características dos diversos elementos, e, como as outras duas, não pode ser considerada efetivamente uma linguagem de programação (pois não envolve a construção de algoritmos), mas uma linguagem de marcação.</p>

    </div>

    <div class="symbol"></div>



    <div class="corpus">

      <p>A especificação CSS é muito ampla e aberta. Há muitos elementos, propriedades, características e atributos que podem ser modelados através dela, desde a cor de fundo em um bloco de texto até as transformações animadas que ele pode sofrer ao longo do tempo. Isto significa dizer que, provavelmente, este material não conseguirá detalhar toda a vastidão de instruções possíveis que compõe o código CSS em sua totalidade.</p>

      <p>Também é importante considerar que as atribuições e aplicação do código CSS podem crescer e serem usadas para outras finalidades não previstas iniciamente, o que fará, naturalmente, que suas instruções também se ampliem ainda mais.</p>

      <p>A natureza deste material técnico permite que o código CSS e suas instruções sejam progressivamente detahadas e incluídas, e este processo é realizado de forma contínua, mas, logicamente, sem uma previsão de quando todo este processo chegará ao fim e que, finalmente, possamos dizer que esta obra abrange e explica todo o código CSS.</p>


    </div>


    <div id="quadriculum" class="ill-generative">

    </div>

    <script type="module">
      import quadricula from "../quadra.js";

      let playquadra = quadricula({
        p5,
        'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
        'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--text-link'),
        'el': 'quadriculum'
      });
    </script>

    <h2>Organização do material técnico</h2>

    <div class="corpus">

      <p>Este texto amplia o <a href="javascript:changesumarionstate();" class="citacao"><b>conteúdo do "livro"</b></a> com todo o material técnico já produzido, relativo ao código CSS. Este conteúdo está organizado de acordo com o papel previsto para cada instrução:</p>

      <p>Em <a href="javascript:changesumarionstate();" class="citacao"><b>Aspectos básicos</b></a> você encontrará os textos que explicam como o código CSS é escrito, sua sintaxe, métricas, mecanismos, características e seus elementos comuns; no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>Posicionamento</b></a> se concentram as instruções responsáveis por definir onde e como cada elemento modelado pelo CSS será apresentado na tela; em <a href="javascript:changesumarionstate();" class="citacao"><b>Dimensionamento</b></a> estão as instruções que modificam o tamanho e forma dos elementos operados pelo código CSS; em <a href="javascript:changesumarionstate();" class="citacao"><b>Aspectos avançados</b></a> as instruções de diretrizes que ampliam o próprio código CSS e permitem sua parametrização em função de aspectos específicos encontrados no contexto onde ele funciona (geralmente o navegador).</p>

      <p>Na sequência, você encontrará as demais linguagens de programação incluídas nesta obra no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>+Linguagens</b></a>, incluíndo o material relativo ao <a href="../html">código HTML</a>, responsável pela estrutura de dados de um documento web; e, finalmente, em <a href="javascript:changesumarionstate();" class="citacao"><b>Solicitações</b></a>, os documentos através dos quais é possível solicitar que outros elementos ou procedimentos sejam incluídos futuramente neste material.</p>

      <p>Todos os exemplos contidos no material são interativos e permitem que experimentações/modificações sejam realizadas sobre eles no próprio documento.</p>

    </div>

    <a name="tools" class="exclude" style="position: relative; top: -30px;"></a>

    <h2>Ferramentas necessárias</h2>

    <div class="corpus">

      <p>O código CSS pode ser construído e executado sem a necessidade de ferramentas específicas para seu desenvolvimento. O código em sí é um arquivo de texto puro (UTF-8) que pode ser elaborado usando um editor como o Notepad (do Windows), o Text Editor (do MacOS ou Linux), ou mesmo através de um terminal (no Linux, MacOs, Windows, MS-Dos, ou qualquer outro sistema operacional). Há, contudo, ferramentas de produtividade destinadas a agilizar/facilitar seu desenvolvimento que incluem verificação de erros no código (Linting), marcação de sintaxe (Highlight), e outros recursos bastante úteis para o programador. Aqui está uma relação das ferramentas mais populares para edição de código:</p>

      <p id="codeeditorsblock"></p>

      <p>Outras opções, atualmente, são a edição do código CSS através de ferramentas disponíveis dentro do próprio navegador. Para isto, contamos com ambientes integrados de desenvolvimento (IDEs) inteiramente online, e ferramentas de experimentação - chamadas de <i>Live Code</i> - que interpretam e executam o código em tempo-real, conforme ele vai sendo digitado. Oferecemos aqui, também, uma relação destas opções:</p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>LIVECODE</code></div>
      <p id="livecodeblock"></p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>IDE ONLINE</code></div>
      <p id="idesonlineblock"></p>


      <p>Experimentações com o código podem ser realizadas em qualquer página do material técnico desta obra, no próprio <a href="#livecoding" class="citacao">editor <i>live code</i> incluído</a>, como o que se encontra logo abaixo. Nenhuma modificação feita nos documentos é permanente, e o editor está inserido nas próprias páginas do "livro" para torná-lo interativo, e permitir ao leitor que modifique e experimente com os códigos, sem a necessidade de instalar ou configurar nenhum software previamente.</p>

      <p>O editor, infelizmente, não funciona na plataforma iOS.</p>

      <a name="livecoding" class="exclude" style="overflow: hidden; width: 0; height: 0;"></a>

    </div>

    <div class="diagramahalf firstblock">
      <iframe id="View_editor_1"></iframe>
    </div>

    <div class="diagramahalf">
      <pre class='editor codefull' data-name='editor_1' id='editor_1'>

&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
   &lt;style&gt;
     body {
        color: violet;
     }
   &lt;/style&gt;
  &lt;/head&gt;

  &lt;body&gt;
    Hello World!
  &lt;/body&gt;
&lt;/html&gt;
</pre>
    </div>



    <h2 style="width: 100%; clear: both; height: 15px;"></h2>

    <div id="bookendnav"></div>

    <div id="meta">

    </div>


    <script>
      let lista = function(arr) {
        let code = "";

        for (let i = 0; i < arr.length; i++) {

          code += `<a href="${arr[i].Link}" target="_blank">${arr[i].Name}</a><br>`;
        }

        return code;
      }

      let publicaeditores = function(d) {
        let idesonline = select(d, multipatterncheck_exclude, "IDE Online recomendado javascript");
        let livecode = select(d, multipatterncheck_exclude, "Livecode javascript");
        let editors = select(d, multipatterncheck_exclude, "IDE Desktop recomendado javascript");

        document.getElementById("livecodeblock").innerHTML = lista(livecode);
        document.getElementById("idesonlineblock").innerHTML = lista(idesonline);
        document.getElementById("codeeditorsblock").innerHTML = lista(editors);
      }

      getdata(googlesheet("https://docs.google.com/spreadsheets/d/10wpfmMWn3igQF4rJBYCo8OR90igO1tfKwcmrot0ult0/edit#gid=0", "CodeEditors"), publicaeditores);
    </script>

    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</body>

</html>