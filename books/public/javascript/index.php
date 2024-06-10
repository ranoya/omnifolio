<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require '../html/meta.php';
  ?>
  <title>O código Javascript | O tecido das tecnologias criativas</title>
  <meta property="og:title" content='O código Javascript | O tecido das tecnologias criativas'>
  <meta name="description" content="O código Javascript. Capítulo da versão digital do livro O tecido das tecnologias criativas">
  <meta property="og:description" content="O código Javascript. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
  <script src="https://datat.vercel.app/basics.js"></script>

</head>

<body>

  <script>
    Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri" + "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

    Postdata_editor_1 = "</scri" + "pt>";
  </script>

  <div class="bigwhitesapce"></div>

  <div id="chapter">

    <h1 id="titulocapitulo">O código Javascript</h1>

    <div class="corpus">

      <p>Javascript é uma linguagem de programação nativa nos navegadores web. É também uma das linguagens de programação mais utilizadas no mundo. Ela foi criada em 1995 por <a href="javascript:openMeta('brendan');">Brendan Eich</a>, um dos fundadores da <a href="javascript:openMeta('mozilla');">Mozilla Corporation</a>, na época, funcionário da <a href="javascript:openMeta('netscape');">Netscape</a>. Ela é mantida pela <a href="javascript:openMeta('ecma');">ECMA</a> (<i>European Computer Manufactures Association</i>), especificamente pelo grupo de trabalho <a href="javascript:openMeta('ecma262');">ECMA-262</a>, responsável por garantir sua consistência e padronização, uma vez que se trata de uma linguagem interpretada em diversos contextos diferentes. Ela é a base utilizada na programação em <a href="javascript:openMeta('node');">Node</a>, que nada mais é do que Javascript executado em servidores web (programação <i>Back-End</i> com Javascript).</p>

      <p>Javascript, assim como o código <a href="../html">HTML</a>, é parte dos blocos fundamentais do que constitui a internet como conhecemos, e dado seu crescente alcance e utilização, provavelmente se tornará uma das ferramentas mais importantes para a construção também das demais <a href="../tecnologiascriativas/tecnologiascriativas.php">tecnologias criativas</a>.</p>

    </div>

    <h2>Organização do material técnico</h2>

    <div class="corpus">

      <p>Este texto amplia o <a href="javascript:changesumarionstate();" class="citacao"><b>conteúdo do "livro"</b></a> com todo o material técnico já produzido, relativo ao código Javascript. Este conteúdo está organizado de acordo com a relação de cada instrução, ou conjunto de instruções, com o código:</p>

      <p>Em <a href="javascript:changesumarionstate();" class="citacao"><b>Fundamentos</b></a> se encontram os princípios e elementos básicos de quase todas as linguagens de programação formal, dentro do contexto de Javascript.</p>

      <p>Na sequência, você encontrará as demais linguagens de programação incluídas nesta obra no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>+Linguagens</b></a>, e, finalmente, em <a href="javascript:changesumarionstate();" class="citacao"><b>Solicitações</b></a>, os documentos através dos quais é possível solicitar que outros elementos ou procedimentos sejam incluídos futuramente neste material.</p>

    </div>


    <a name="tools" class="exclude" style="position: relative; top: -30px;"></a>

    <h2>Ferramentas necessárias</h2>

    <div class="corpus">

      <p>O código HTML pode ser construído e executado sem a necessidade de ferramentas específicas para seu desenvolvimento. O código em sí é um arquivo de texto puro (UTF-8) que pode ser elaborado usando um editor como o Notepad (do Windows), o Text Editor (do MacOS ou Linux), ou mesmo através de um terminal (no Linux, MacOs, Windows, MS-Dos, ou qualquer outro sistema operacional). Há, contudo, ferramentas de produtividade destinadas a agilizar/facilitar seu desenvolvimento que incluem verificação de erros no código (Linting), marcação de sintaxe (Highlight), e outros recursos bastante úteis para o programador. Aqui está uma relação das ferramentas mais populares para edição de código:</p>

      <p id="codeeditorsblock"></p>

      <p>Outras opções, atualmente, são a edição do código Javascript através de ferramentas disponíveis dentro do próprio navegador. Para isto, contamos com ambientes integrados de desenvolvimento (IDEs) inteiramente online, e ferramentas de experimentação - chamadas de <i>Live Code</i> - que interpretam e executam o código em tempo-real, conforme ele vai sendo digitado. Oferecemos aqui, também, uma relação destas opções:</p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>LIVECODE</code></div>
      <p id="livecodeblock"></p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>IDE ONLINE</code></div>
      <p id="idesonlineblock"></p>

    </div>

    <div class="symbol"></div>

    <div class="corpus">

      <p>Experimentações com o código podem ser realizadas em qualquer página do material técnico desta obra, no próprio <a href="#livecoding" class="citacao">editor <i>live code</i> incluído</a>, como o que se encontra logo abaixo. Nenhuma modificação feita nos documentos é permanente, e o editor está inserido nas próprias páginas do "livro" para torná-lo interativo, e permitir ao leitor que modifique e experimente com os códigos, sem a necessidade de instalar ou configurar nenhum software previamente.</p>

      <p>O editor, infelizmente, não funciona na plataforma iOS.</p>

      <a name="livecoding" class="exclude" style="overflow: hidden; width: 0; height: 0;"></a>

    </div>

    <div class="diagramahalf firstblock">
      <iframe id="View_editor_1"></iframe>
    </div>

    <div class="diagramahalf">
      <pre class='editor codefull' data-name='editor_1' id='editor_1'>

document.write("Hello World!");
</pre>
    </div>

    <hr style="width: 100%; clear: both; border: 0; height: 25px;">
    </hr>



    <div id="bookendnav"></div>

    <div id="meta">

      <div id="node">

        <div style="background-image:url(https://nodejs.org/static/images/logos/nodejs-new-pantone-black.svg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Node é uma estrutura (runtime) capaz de executar código construído com Javascript em servidores web, permitindo a utilização da linguagem para além do contexto dos navegadores web.

      </div>

      <div id="ecma">

        <div style="background-image:url(https://raw.githubusercontent.com/wingsuitist/ecmascript-logo/master/es-ecmascript-logo.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        ECMA / <i>European Computer Manufactures Association</i> é a organização responsável, entre outras coisas, por manter e padronizar a linguagem Javascript.<br>
        <a href="https://www.ecma-international.org/">ECMA International</a>

      </div>

      <div id="ecma262">

        <div style="background-image:url(https://raw.githubusercontent.com/wingsuitist/ecmascript-logo/master/es-ecmascript-logo.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        O grupo de trabalho ECMA-262 é responsável direto pela manutenção da especificação da linguagem Javascript.<br>
        <a href="https://www.ecma-international.org/publications/standards/Ecma-262.htm" target="_blank">Standard ECMA-262</a>

      </div>

      <div id="brendan">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Brendan_Eich_Mozilla_Foundation_official_photo.jpg/800px-Brendan_Eich_Mozilla_Foundation_official_photo.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Brendan Eich<br>
        EUA, 1961<br>
        Criador da linguagem de programação Javascript na Netscape Communications Corporation, e fundador da Mozilla Foundation.<br>

      </div>

      <div id="netscape">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netscape_icon.svg/600px-Netscape_icon.svg.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Netscape Communications Corporation (originalmente Mosaic Communications Corporation) é a empresa criadora do primeiro navegador web comercial, o Netscape Navigator.<br>

      </div>

      <div id="mozilla">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Mozilla_logo.svg/512px-Mozilla_logo.svg.png); background-size: contain; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        A Mozilla Foundation é uma organização fundada após a dissolução da Netscape Communications Corporation (comprada pela AOL / America On-Line), criada para dar continuidade aos projetos desenvolvidos na Netscape.<br>

      </div>


      <div id="laurenmccarthy">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRJXtejQjPB6YuLUK53nGkCKmw5eawwFsOBrw&usqp=CAU); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Lauren McCarthy<br>
        EUA<br>
        Artista e professora da Universidade da Califórnia em Los Angeles (UCLA), é diretora da Processing Foundation, e criadora da linguagem P5, uma modernização da linguagem Processing.<br>

      </div>

      <div id="maeda">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7hHGAIBfUtP6hPK-U9d1kn_hBu5v68Z535gbfRcf6_4yeTM4&s); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        John Maeda<br>
        EUA, 1966<br>
        Foi professor no Massachussets Institute of Technology (MIT) e posteriormente presidente da Rhode Island School of Design (RISD).<br>

      </div>

      <div id="java">

        <div style="background-image:url(https://img.ibxk.com.br/2016/01/28/28091154377222.jpg?w=1120&h=420&mode=crop&scale=both); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Java é uma linguagem de programação inovadora, criada pela Sun Microsystems na década de 1990, que permitia a execução de um mesmo código para qualquer tipo de computador e/ou sistema operacional através de uma máquina virtual instalada nos computadores. É também uma linguagem orientada à objetos de uso geral, considerada mais simples que o C++.

      </div>

      <div id="ivrea">
        <div style="background-image:url(https://www.ranoya.com/Assets/Logotipos/ivrea-logo.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Interaction Design Institute Ivrea (IDII)<br>
        Programa de pós-graduação estabelecido entre 2001 e 2006 nos antigos escritórios de pesquisa e desenvolvimento da Olivetti, na cidade de Ivrea na Itália, foi um dos centros mais importantes para o desenvolvimento recente do design computacional.<br>
        Um <a href="https://interactiondesigninstituteivrea.org/" target="_blank">arquivo não oficial</a> é mantido como memória do programa, terminado por corte de verbas.
      </div>

      <div id="medialab">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1DHsckNNPSnoeYpahFFV1f7VJmxPvt_QiLg&usqp=CAU); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        MIT Media Lab, 1985<br>
        Laboratório de pesquisa do Massachussets Institute of Technology (MIT), abriga inúmeros grupos de pesquisa no campo de design, artes, arquitetura e tecnologia.<br>
        <a href="https://www.media.mit.edu/" target="_blank">Website</a>, <a href="https://www.media.mit.edu/research/?filter=groups" target="_blank">Grupos de pesquisa</a>

      </div>

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