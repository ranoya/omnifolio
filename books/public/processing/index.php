<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require '../html/meta.php';
  ?>
  <title>O código Processing | O tecido das tecnologias criativas</title>
  <meta property="og:title" content='O código Processing | O tecido das tecnologias criativas'>
  <meta name="description" content="O código Processing. Capítulo da versão digital do livro O tecido das tecnologias criativas">
  <meta property="og:description" content="O código Processing. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
  <script type='text/javascript' src="https://www.ranoya.com/Assets/JSLibs/AMS/imagepanel.js"></script>
  <script src="https://datat.vercel.app/basics.js"></script>

</head>

<body>

  <script>
    Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri" + "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

    Postdata_editor_1 = "</scri" + "pt>";
  </script>

  <div class="bigwhitesapce"></div>

  <div id="chapter">

    <h1 id="titulocapitulo">O código Processing</h1>

    <div class="corpus">

      <p>A linguagem <a href="javascript:openMeta('processing');">Processing</a> foi criada por <a href="javascript:openMeta('fry');">Ben Fry</a> e <a href="javascript:openMeta('reas');">Casey Reas</a> em 2001 enquanto ambos eram estudantes de pós-graduação no <a href="javascript:openMeta('medialab');">MIT Media Lab</a> do <i>Aesthetic + Computation Group</i> de <a href="javascript:openMeta('maeda');">John Maeda</a>.</p>

      <p><a href="javascript:openMeta('processing');">Processing</a> é, originalmente, uma modificação e simplificação da linguagem de programação <a href="javascript:openMeta('java');">Java</a>. Ele usa os mesmos princípios, sintaxe e infra-estrutura, mas retira diversos aspectos originais da linguagem que exigem um conhecimento mais profundo sobre a ciência da computação, como níveis de proteção das variáveis e classes, inicio do código já com uma orientação à objetos com herança de classes, etc. O intuito de <a href="javascript:openMeta('fry');">Fry</a> e <a href="javascript:openMeta('reas');">Reas</a> era criar uma linguagem de programação para que artistas e designers pudessem se apropriar, e que pudessem utilizar como ferramenta em seus processos produtivos. Desde o início, o <a href="javascript:openMeta('processing');">Processing</a> foi projetado como uma primeira linguagem de programação. Foi inspirado em linguagens anteriores como <a href="javascript:openMeta('basic');">BASIC</a> e <a href="javascript:openMeta('logo');">Logo</a>, criadas na década de 60/70 para ensinar programação à principiantes e que, de fato, ensinou programação à grande parte dos professores de programação da atualidade, mas que seriam muito limitadas para as possibilidades da computação de hoje.</p>

      <p>O <a href="javascript:openMeta('processing');">Processing</a> é voltado para a criação de mídia visual e interativa, portanto, os primeiros programas começam com o desenho. Iniciantes em programação se sentem mais confortáveis no aprendizado quando vêem seus programas produzindo algo na tela visualmente, e não apenas resultados abstratos. Isso se provou motivador para levar os alunos de design, arte e arquitetura à programação.</p>

      <p>A linguagem <a href="../p5">P5</a> é uma forma atualizada do <a href="javascript:openMeta('processing');">Processing</a>. Criada por <a href="javascript:openMeta('laurenmccarthy');">Lauren McCarthy</a> em 2013, ela substitui a base <a href="javascript:openMeta('java');">Java</a> do <a href="javascript:openMeta('processing');">Processing</a> por <a href="../javascript">Javascript</a>, liguagem nativa nos navegadores web, permitindo que os códigos possam ser executados em documentos web. Não se trata de uma versão melhor, ou pior, que o original, mas da mesma estrutura de programação voltada a outro contexto.</a>

    </div>

    <div id="concentraid" class="ill-generative">

    </div>

    <script type="module">
      import concentra from "../concentricon.js";

      let playc = concentra({
        p5,
        'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
        'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--text-link'),
        'el': 'concentraid'
      });
    </script>

    <div class="corpus">

      <p>Esta linguagem permanece sendo muito utilizada para a criação de arte computacional, para instalações e projeções interativas. A comunidade <a href="https://www.openprocessing.org/browse" target="_blank">OpenProcessing</a> mantém uma série de obras criadas em sua própria plataforma usando <a href="javascript:openMeta('processing');">Processing</a>. O autor mantém uma curadoria com algumas obras de expressão gráfica generativa:</p>

    </div>




    <div id="painelgenerativo" style="width: calc(100% + 15px); display: inline-block; clear: both;"></div>
    <span class="legenda">Algumas obras feitas com código criativo. Veja o <a href="https://www.ranoya.com/aulas/pinboard/?filter=pingenerativo&contentonly=true" target="_blank">painel completo</a>.</span>

    <h2 style="width: 100%; clear: both; height: 20px; display: inline-block;"></h2>


    <script>
      imagepanel("https://www.ranoya.com/AssetsManager/simplequery/index.php?cat=artefatos&filter=pingenerativo&surpriseme=true&quantos=18", "painelgenerativo");
    </script>


    <h2>Organização do material técnico</h2>

    <div class="corpus">

      <p>Este texto amplia o <a href="javascript:changesumarionstate();" class="citacao"><b>conteúdo do "livro"</b></a> com todo o material técnico já produzido, relativo ao código <a href="javascript:openMeta('processing');">Processing</a>. Este conteúdo está organizado de acordo com a relação de cada instrução, ou conjunto de instruções, com o código:</p>

      <p>Em <a href="javascript:changesumarionstate();" class="citacao"><b>Fundamentos</b></a> se encontram os princípios e elementos básicos de quase todas as linguagens de programação formal, dentro do contexto de <a href="javascript:openMeta('processing');">Processing</a>. Em <a href="javascript:changesumarionstate();" class="citacao"><b>Código Criativo</b></a> estão explicações necessárias para o uso e aplicação das principais instruções gráficas utilizadas para construir programas nesta linguagem.</p>

      <p>O capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>Funções auto-invocadas</b></a> é dedicado às funções-tronco do código <a href="javascript:openMeta('processing');">Processing</a>, responsáveis por configurar o programa e realizar o trabalho permanente de desenho na tela. As <a href="javascript:changesumarionstate();" class="citacao"><b>Funções por Eventos</b></a> tratam das instruções executadas pelo próprio <a href="javascript:openMeta('processing');">Processing</a> quando certo acontecimentos se efetivam. Em <a href="javascript:changesumarionstate();" class="citacao"><b>Funções de Desenho</b></a> estão detalhadas cada função responsável pelo efetivo desenho na tela, enquanto em <a href="javascript:changesumarionstate();" class="citacao"><b>Funções Especificadoras</b></a>, aquelas responsáveis pelas definições e características utilizadas pelas anteriores.</p>

      <p>Em <a href="javascript:changesumarionstate();" class="citacao"><b>Funções de Transformação</b></a> estão as instruções utilizadas para utilizar modificadores na matriz de transformação.</p>

      <p>Nas <a href="javascript:changesumarionstate();" class="citacao"><b>Funções de Controle</b></a> você encontrará o detalhamento das funções úteis para averiguar o que acontece com o programa, necessárias, sobretudo, quando ele não funciona.</p>

      <p>Na sequência, você encontrará as demais linguagens de programação incluídas nesta obra no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>+Linguagens</b></a>, e, finalmente, em <a href="javascript:changesumarionstate();" class="citacao"><b>Solicitações</b></a>, os documentos através dos quais é possível solicitar que outros elementos ou procedimentos sejam incluídos futuramente neste material.</p>

    </div>

    <a name="tools" class="exclude" style="position: relative; top: -30px;"></a>

    <h2>Ferramentas necessárias</h2>

    <div class="corpus">

      <p>A construção e execução deste tipo de programação depende da instação do ambiente <a href="javascript:openMeta('processing');">Processing</a> no computador. Este ambiente é mantido e distribuido gratuitamente pela <a href="javascript:openMeta('processingfoundation');">Processing Foundation</a>. O pacote inclui tanto o ambiente integrado de desenvolvimento (IDE), um editor de código que possui ferramentas integradas para ajudar na sua construção, quanto o ambiente de execução. Seu download pode ser realizando no próprio website do <a href="javascript:openMeta('processing');">Processing</a>:</p>

      <p id="codeeditorsblock"></p>

      <p>Outras opções de desenvolvimento, atualmente, são o uso de ambientes online, utilizadas integralmente dentro do próprio navegador. Para isto, contamos com ambientes integrados de desenvolvimento (IDEs), e ferramentas de experimentação - chamadas de <i>Live Code</i> - que interpretam e executam o código em tempo-real, conforme ele vai sendo digitado. Aqui estão as opções para o desenvolvimento de <a href="javascript:openMeta('processing');">Processing</a> nestes contextos:</p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>LIVECODE</code></div>
      <p id="livecodeblock"></p>

      <div id='langtype' style='float: right; margin-top: 0;'><code>IDE ONLINE</code></div>
      <p id="idesonlineblock"></p>



      <p>Experimentações com o código podem ser realizadas em qualquer página do material técnico desta obra, no próprio <a href="#livecoding" class="citacao">editor <i>live code</i> incluído</a>, como o que se encontra logo abaixo. Nenhuma modificação feita nos documentos é permanente, e o editor está inserido nas próprias páginas do "livro" para torná-lo interativo, e permitir ao leitor que modifique e experimente com os códigos, sem a necessidade de instalar ou configurar nenhum software previamente.</p>

      <p>O editor, infelizmente, não funciona na plataforma iOS.</p>

      <a name="livecoding" class="exclude" style="overflow: hidden; width: 0; height: 0;"></a>

    </div>

    <div>

      <div class="diagramahalf firstblock sketch borderon">
        <iframe id="View_editor_1"></iframe>
      </div>

      <div class="diagramahalf sketch">
        <pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">


void setup() { 
  size(150,150);
  background(<?php if ($_GET['theme'] == 'dgen-darkmode') {
                echo "#40144D";
              } else {
                echo "#FFFFFF";
              } ?>);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

colorMode(HSB, 300);
int ang, cx, cy, cor = 0, d = 20;

float radiano(int angulo) {
  float r = (angulo * PI)/180;
  return r;
}

void polarline(int x, int y, int tamanho, int angulo) {
  line(x,y,x+(cos(radiano(angulo))*tamanho),y+(sin(radiano(angulo))*tamanho));
}

void draw() {
  stroke(240,cor,250);
  d = random(20)+20;
  cx = width/2 + (cos(radiano(ang))*d);
  cy = height/2 + (sin(radiano(ang))*d);
  polarline(cx,cy,50+random(20)-15,ang);
  ang = ang + 3;
  cor++;
  if (cor>300) { 
      cor = 0;
  }
}
</pre>
      </div>

    </div>

    <div class="corpus" style="clear: both; width: 100%;"></div>

    <div id="bookendnav"></div>

    <div id="meta">

      <div id="basic">

        <div style="background-image:url(https://bumbershootsoft.files.wordpress.com/2019/02/atari_hello_5.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        BASIC (Beginner's All-purpose Symbolic Instruction Code) é uma linguagem de programação criada para ensinar principiantes a progamar. Foi criada com finalidade didática em 1964 por John George Kemeny, Thomas Eugene Kurtz e Mary Kenneth Keller.

      </div>

      <div id="logo">

        <div style="background-image:url(https://i.pinimg.com/564x/20/ce/f5/20cef5eab58f4643fad730d7a872c6e0.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        LOGO é uma linguagem de programação visual criada em 1967 por Wally Feurzeig e Seymour Papert, um dos fundadores do MIT Media Lab. A linguagem era destinada ao ensino de programação para crianças, e possuia uma orientação construtivista (Papert trabalhou diretamente com Jean Piaget).

      </div>

      <div id="processingfoundation">

        <div style="background-image:url(https://miro.medium.com/fit/c/128/128/1*dyXtX3Lh61-zjtYRzDXihQ.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Fundação criada por Casey Reas e Ben Fry, e hoje dirigida por eles junto com Daniel Shiffman e Lauren McCarthy, é responsável por manter a plataforma Processing e todos os projetos correlatos de forma aberta e livre, manter a comunidade que se formou ao redor dela, e financiar projetos de arte e tecnologia.<br>
        <a href="https://processingfoundation.org/" target="_blank">Processing Foundation</a>

      </div>

      <div id="processing">

        <div style="background-image:url(https://miro.medium.com/fit/c/128/128/1*dyXtX3Lh61-zjtYRzDXihQ.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Linguagem e ambiente de programação criada por Casey Rease e Ben Fry, orientados por John Maeda durante seus doutorados no MIT Media Lab, originalmente constituída como uma simplificação da linguagem Java e destinada para criação de arte, design e computação cirativa.<br>
        <a href="https://www.processing.org" target="_blank">Processing.org</a>

      </div>

      <div id="reas">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Casey_Reas.jpg/220px-Casey_Reas.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Casey Reas<br>
        EUA, 1972<br>
        Professor da Universidade da California em Los Angeles (UCLA), criador, junto com Ben Fry, da linguagem e ambiente de programação Processing, diretor da Processing Foundation.<br>

      </div>

      <div id="fry">

        <div style="background-image:url(https://arts.mit.edu/wp-content/uploads/2016/11/Ben-Fry_Headshot.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Benjamin Fry<br>
        EUA, 1972<br>
        Designer, fundador da Fathom Information Design, criou junto com Casey Reas a linguagem e ambiente de programação Processing, diretor da Processing Foundation.<br>

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
        let idesonline = select(d, multipatterncheck_exclude, "IDE Online recomendado processing");
        let livecode = select(d, multipatterncheck_exclude, "Livecode processing");
        let editors = select(d, multipatterncheck_exclude, "IDE Desktop recomendado processing");

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