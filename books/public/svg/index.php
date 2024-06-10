<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require '../html/meta.php';
  ?>
  <title>O código SVG | O tecido das tecnologias criativas</title>
  <meta property="og:title" content='O código SVG | O tecido das tecnologias criativas'>
  <meta name="description" content="O código SVG. Capítulo da versão digital do livro O tecido das tecnologias criativas">
  <meta property="og:description" content="O código SVG. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
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

    <h1 id="titulocapitulo">O código SVG</h1>

    <div class="corpus">

      <p>Este capítulo, infelizmente, ainda não possui nenhum conteúdo incluído.</p>

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

      <div style="background-image:url(https://rtlln1kraz3heqyqi5ac19ce-wpengine.netdna-ssl.com/wp-content/uploads/2016/11/Ben-Fry_Headshot.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
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





  <div id="metacompensate"></div>

  <div id="posicao"></div>
  <div id="posicaocompensate"></div>

</body>

</html>