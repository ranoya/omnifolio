<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  require '../tecnologiascriativas/meta.php';
  ?>
  <title>Tecnologias Criativas | O tecido das tecnologias criativas</title>
  <meta property="og:title" content='Introdução | O tecido das tecnologias criativas'>
  <meta name="description" content="Tecnologias Criativas. Capítulo da versão digital do livro O tecido das tecnologias criativas">
  <meta property="og:description" content="Tecnologias Criativas. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>


</head>

<body>

  <div class="bigwhitesapce"></div>

  <div id="chapter">

    <h1 id="titulocapitulo">As tecnologias criativas</h1>

    <div class="corpus">

      <p>Por volta de 2010, na ausência, talvez, de um critério mais adequado, usavamos o termo "computação física" para descrever um novo campo de experimentação criado pelo projeto <a href="javascript:openMeta('arduino');">Arduino</a>, uma plataforma programável de prototipagem de hardware, de baixo custo, capaz de lidar com qualquer tipo de equipamento eletrônico nela conectado, integrada com um ambiente de programação simples e fácil, capaz de interagir com outras plataformas já existentes. Nas palavras de meu colega de pesquisa no Centro Universitário Senac, professor <a href="javascript:openMeta('fabbrini');">Fernando Fabbrini</a>, a "computação física" era todo o tipo de computação feita sem o uso de dispositivos de entrada e saída padrão, como o mouse, o teclado e/ou o monitor.</p>

      <p>A definição pode parecer esquisita, pouco técnica, ou mesmo inadequada (alguns projetos usavam sim o mouse, o teclado ou o monitor), mas ela nos forçava a pensar "fora da caixinha"; fora do lugar comum dos "artefatos digitais" (aplicativos mobile, softwares desktop e websites), ou, resumidamente, do paradigma da computação como suporte instrumental para atividades produtivas ou informacionais.</p>

      <p>Neste período, a computação já se encontrava presente em tudo que nos cercava, rumo a um estado ubiquo (distribuído, fragmentado) ou pervasivo (discreto, disfarçado), e definitivamente portátil (móvel, mobile). Mas o projeto destes artefatos que transcendiam a carcaça de um computador ou de um aparelho celular, até então, eram onerosos e inacessíveis demais, restritos exclusivamente aos grandes atores da indústria de tecnologia.</p>

      <p>O projeto <a href="javascript:openMeta('arduino');">Arduino</a>, iniciado por <a href="javascript:openMeta('barragan');">Hernando Barragán</a> como <a href="javascript:openMeta('wiring');">Wiring</a>, um <i>framework</i> de programação de micro-controladores, posteriormente aperfeiçoado por seu orientador e outros colegas no <a href="javascript:openMeta('ivrea');">Interaction Design Institute Ivrea</a>, não foi a primeira iniciativa no campo das tecnologias criativas, mas talvez tenha sido a mais disruptiva, e capaz de chamar atenção para esta área globalmente.</p>

    </div>

    <span class="legenda">Um pouco da história das artes computacionais. Uma linha do tempo mais detalhada está disponível no <a target='_blank' href='https://timeline.lerandom.art/'>Le Random</a>, e uma sobre as exposições no <a target="_blank" href="https://dam.org/museum/exhibitions_ui/timelines/events/">Digital Art Museum (DAM)</a>.<br><br></span>
    <div>
      <iframe style=' width: 100%; height: 75vh' src=" https://slidelines.vercel.app/timelineh/?timeheight=140&file=https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/HistoriaArteGenOutline&theme=https://slidelines.vercel.app/level/arte2.css" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

    <div style="margin: 1px;">&nbsp;</div>

    <div class="corpus">

      <p>O uso da computação para finalidades diferentes da produção de ferramentas de trabalho é bem mais antiga do que seu momento de disrupção. <a href="javascript:openMeta('noll');">A. Michael Noll</a>, <a href="javascript:openMeta('molnar');">Vera Molnár</a>, <a href="javascript:openMeta('mohr');">Manfred Mohr</a>, <a href="javascript:openMeta('nees');">Georg Nees</a> e <a href="javascript:openMeta('nake');">Frieder Nake</a> são considerados pioneiros no uso da computação como forma de expressão artística. No Brasil, <a href="javascript:openMeta('waldemarcordeiro');">Waldemar Cordeiro</a> organizou a exposição Arteônica exibida na Fundação Armando Alvares Penteado (FAAP) em 1971, composta por obras de arte computacional.</p>

      <p>Em sua origem, o campo era conhecido por "Estética Informacional", com referência ao primeiro livro sobre o assunto, <i>Ästhetik als Informationsverarbeitung</i> (estética como processamento de informações), de autoria de <a href="javascript:openMeta('nake');">Nake</a> em 1974. Outros termos também surgiram, como "Computer Art", "Algorithmic Art" ou, finalmente, "Arte Eletrônica", vertente que acabou se desvinculando da expressão exclusivamente computacional, e que continua bastante relevante no circuito artístico, inclusive o nacional.</p>

      <p>O pioneirismo, e mesmo o ineditismo, sobretudo no processo construtivo e no material empregado nas obras (o código computacional), não conferiram grande notoriedade à esta prática artística. A arte computacional permaneceu uma estética restrita a um pequeno grupo de pessoas.</p>

      <p>Os artefatos produzidos em um primeiro momento das expressões computacionais eram, geralmente, peças impressas através de <i>plotters</i>. Foi somente à partir da década de 1980 que as obras passaram a ser criadas para existirem dentro do próprio computador, visualizadas através de um monitor. Esta é uma mudança estética importante, pois a computação passou de um processo construtivo exclusivamente, para uma mídia também, isto é, para uma forma de expressão propriamente dita. Alguns autores se referem a este momento como o nascimento de uma arte legitimamente digital, mas prefiro evitar estes conceitos (tanto de legitimidade, quanto de digital): acho que o termo "digital", tomado de empréstimo da eletrônica, é mal empregado, pois significa relações com sinais binários (ligado/desligado, verdadeiro/falso) em oposição à relações com sinais analógicos, que não é a grande questão quando falamos da mídia computacional; é também por que o próprio conceito de legitimidade é, por si só, questionável (quem confere estas chancelas? quem detém esta autoridade?).</p>

    </div>

    <div class="symbol"></div>

    <div class="corpus">

      <p>O <i>Visible Language Workshop</i> (VLW), laboratório voltado à experimentação gráfica, foi criado em 1974 por <a href="javascript:openMeta('murielcooper');">Muriel Cooper</a> anterior à fundação do <a href="javascript:openMeta('medialab');">MIT Media Lab</a> em 1985. <a href="javascript:openMeta('murielcooper');">Cooper</a> foi uma das pioneiras no uso de novas tecnologias aplicadas ao design e uma das primerias designers a acreditar no potencial transformador da computação sobre o design gráfico, especialmente quanto ao código computacional como ferramenta de design. Talvez seja importante reforçar que o uso de computação nas atividades projetuais, como os softwares de CAD (<i>Computer Aided Design</i>), as ferramentas de desenho vetorial para ilustração, e os softwares de <i>publishing</i> e editoração gráfica, só se tornaram uma prática comum ao mercado ao fim da década de 1980 (e no Brasil, por volta da metade da década de 1990). <a href="javascript:openMeta('murielcooper');">Cooper</a> foi, claramente, uma visionária.</p>

      <p>Foi também uma figura profundamente influente em um de seus alunos, <a href="javascript:openMeta('maeda');">John Maeda</a>, que, ao se tornar professor da mesma instituição em 1990, criou o <i>Aesthetics + Computation Group</i>, seu grupo de pesquisa dedicado à investigação cerca das relações entre a computação e expressão, junto com o projeto <i>Design by Numbers</i>, onde visava ensinar artistas, designers, e outros estudantes de campos da criatividade a usarem programação como ferramenta de trabalho. Trata-se da mesma atividade que realizamos na Universidade Federal de Pernambuco desde 2017 através do projeto <a href="javascript:openMeta('futurododesign');">Futuro do Design</a>, que, curiosamente, permanece necessária e pouco aproveitada, mesmo depois de 25 anos do trabalho iniciado por <a href="javascript:openMeta('maeda');">Maeda</a>.</p>

      <p>Durante este período, e provavelmente sob influência de seu trabalho, as tecnologias criativas passaram a ser conhecidas pelo termo "código criativo". Boa parte do que produziu, e do que produziram seus alunos no <a href="javascript:openMeta('medialab');">MIT</a> - registrado em dois grandes volumes chamados <a href="javascript:openMeta('maedamedia');">Maeda @ Media</a>, e, claro, <a href="javascript:openMeta('maedacreativecode');"><i>Creative Code</i></a> (código criativo) - são softwares criados com o propósito de expressar algo; de dar vida às mais variadas formas de expressão: poesia, visualidades, sonoridades, e também alguns objetos controlados por computador.</p>

      <p>Para facilitar a construção destes artefatos, dois de seus orientandos de doutorado, <a href="javascript:openMeta('reas');">Casey Reas</a> e <a href="javascript:openMeta('fry');">Ben Fry</a>, desenvolveram a plataforma <a href="javascript:openMeta('processing');">Processing</a>, composta por uma forma simplificada da linguagem de programação <a href="javascript:openMeta('java');">Java</a>, um ambiente integrado de desenvolvimento (IDE) relativamente simples, e uma biblioteca de instruções (API) para facilitar as operações de computação gráfica necessárias nos diversos trabalhos criados dentro do projeto de <a href="javascript:openMeta('maeda');">Maeda</a>.</p>

    </div>

    <div id="desenho" class="ill-generative">

    </div>

    <script type="module">
      import quads from "../theblob.js";

      let playquads = quads({
        p5,
        'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
        'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--sumarionicon-inverse'),
        'el': 'desenho'
      });
    </script>

    <div class="corpus">

      <p>A "linguagem" <a href="javascript:openMeta('processing');">Processing</a>, descrita assim para simplificar seu entendimento, é mantida hoje pela <a href="javascript:openMeta('processingfoundation');"><i>Processing Foundation</i></a>. Os intuitos de <a href="javascript:openMeta('fry');">Fry</a> e <a href="javascript:openMeta('reas');">Reas</a> eram a criação de uma linguagem de programação voltada para artistas e designers, com qual pudessem trabalhar seus processos criativos/produtivos. Desde o início, o <a href="javascript:openMeta('processing');">Processing</a> foi construído como uma primeira linguagem de programação. Foi inspirado em linguagens como <a href="javascript:openMeta('basic');">BASIC</a> e <a href="javascript:openMeta('logo');">Logo</a>, usadas na década de 70/80 para ensinar programação à principiantes e pessoas com pouca familiaridade ou experiência no raciocínio algorítmico.</p>

      <p>O projeto teve grande sucesso tornando a programação acessível: por se tratar de uma plataforma predominantemente visual, com uma estrutura-base de código funcionando em torno de um algoritmo persistente de desenho na tela, o <a href="javascript:openMeta('processing');">Processing</a> tornava o produto da programação um artefato imediatamente mais tangível. A dificuldade natural de um artista, designer, arquiteto ou profissional de criação ao se deparar com os primeiros esforços na programação é a completa abstração envolvida; para quê confeccionar uma função? Por quê criar variáveis, matrizes de dados ou objetos? Tudo isso é muito intangível, e sem qualquer resultado imediato que possa ser vislumbrado. <a href="javascript:openMeta('processing');">Processing</a>, em oposição, produz um resultado visual, tangível, compreensivel, já na primeira linha escrita. A relação indicial de causa e consequência facilita o entendimento de programação.</p>

      <p>Como <a href="javascript:openMeta('logo');">Logo</a>, ou <a href="javascript:openMeta('basic');">BASIC</a>, <a href="javascript:openMeta('processing');">Processing</a> permitiu que programadores inexperientes se envolvessem com programação e conseguissem se expressar através do código, mesmo antes de entenderem com mais profundidade e maturidade como ele precisa ser cautelosamente articulado; antes mesmo de adquirirem toda a habilidade com o raciocínio lógico, abstrato e altamente especializado, empregado na construção dos diversos elementos da programação.</p>

      <p>O projeto deste ambiente/linguagem foi concluído já em <a href="javascript:openMeta('ivrea');">Ivrea</a>, onde tanto <a href="javascript:openMeta('murielcooper');">Reas</a> quando <a href="javascript:openMeta('maeda');">Maeda</a>, atuaram. Lá, seu criador também supervisionou <a href="javascript:openMeta('barragan');">Barragán</a> no desenvolvimento do projeto <a href="javascript:openMeta('wiring');">Wiring</a>/<a href="javascript:openMeta('arduino');">Arduino</a>. O programa de pós-graduação italiano, que funcionou de 2001 a 2006 no antigo prédio de P&D da <a href="javascript:openMeta('olivetti');">Olivetti</a>, foi, definitivamente, um epicentro que fez as tecnologias criativas e diversos conceitos presentes na intersecção entre tecnologia e design reverberarem por todo o mundo. Os reflexos desta onda deram origem à diversos cursos de design dedicados ao contexto computacional, inclusive no Brasil. <a href="javascript:openMeta('ivrea');">Ivrea</a> acabou se "transformando" no <a href="javascript:openMeta('ciid');">Copenhagen Institute of Interaction Design</a> (CIID), outro centro importante na pesquisa e desenvolvimento do design computacional, fundado pelos ex-alunos da escola italiana. Em termos, <a href="javascript:openMeta('ivrea');">Ivrea</a> foi a <a href="javascript:openMeta('bauhaus');">Bauhaus</a> das mídias computacionais (como intencionalmente evidenciado em seu logotipo).</p>

    </div>

    <div class="slidecut500">
      <iframe src="https://www.youtube.com/embed/R-klO4nholE" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

    </div>
    <span class="legenda">Entrevista com Casey Reas sobre o ensino das tecnologias criativas em Ivrea</span>

    <div style="margin: 20px;">&nbsp;</div>

    <div class="corpus">

      <p>Das "artes computacionais" migramos para o conceito de "código criativo" em conjunto aos artefatos de "computação física". Em pouco tempo, outras terminologias como "internet das coisas", "<i>wearable computing</i>", "<i>quantified self</i>", dentre tantos jargões e <i>buzzwords</i>, entornariam o caldo ainda mais.</p>

      <p>Outra confusão conceitual também se estabeleceu: o uso dos termos "design generativo" e "design paramétrico" como equivalentes semânticos. São, contudo, coisas bem diferentes: enquanto o "design generativo" aponta para uma forma de design elaborada através do uso de algorítmos autômatos (algorítmos independentes que operam com total autonomia, gerando resultados sem a interferência ou interação com usuários), o "design paramétrico" é a construção de artefatos capazes de se adaptar/ajustar mediante a entrada de novos dados ou parâmetros: uma roupa que pode ser redesenhada (em tempo-real) em função das medidas de um consumidor; uma peça mecânica que possa ter seu projeto reconfigurado automaticamente, de acordo com a carga que deverá suportar; um conjunto tipográfico que pode assumir inclinações diferentes, conforme o desejo do designer que lhe dará uso.</p>

      <p>As deonominações continuaram crescendo como variações de um mesmo tema. Em 2003, trabalhei junto aos professores Lúcio Agra e Thiago Rodrigues na elaboração da <a href="javascript:openMeta('cortex');">Cortex #1</a>, uma revista de poesia digital, onde criamos reincarnações interativas e multimidiáticas de diversos trabalhos de poetas renomados (sobretudo daqueles que já trabalhavam uma poética fortemente visual, como os concretistas). Algumas peças ganhavam vida apenas pela inclusão de som e movimento; outras pela interação com usuário; algumas tornaram-se generativas, enquanto outras seguiam roteiros. Posso afirmar por experiência em primeira mão que trabalhavamos a essência da expressão artística, de onde adotei o conceito de "poéticas computacionais". Já em 2019, reconheci o conceito de "computação expressiva" por conta dos colegas do grupo de pesquisa <a href="javascript:openMeta('mustic');">MusTIC</a> (grupo que trabalhava originalmente a relação da computação com a música, e ampliou seu escopo para abarcar toda forma artística e criativa), conceituação que faz todo sentido para quem trabalha na manipulação do som, ou na construção da síntese sonora através da computação.</p>

    </div>

    <div class="symbol"></div>

    <div class="corpus">

      <p>Em vista a todos os meandros e especificidades, não me sinto capaz de determinar um critério ou definição que incorpore todas estas expressões em um único, e grande, guarda-chuva ontológico. Ao mesmo tempo, é impossível negar que estão todas elas intimamente conectadas. E esta é a mesma dificuldade que sinto para delinear com precisão científica o que é meu próprio objeto de pesquisa.</p>

      <p>Uma tentativa de establecer o que são as tecnologias criativas é pela definição do que elas não são: o termo adotado para definir o tipo de programação empregada na construção de ferramentas de trabalho e/ou artefatos voltados ao mundo produtivo, com ênfase em sua eficiência e pragmatismo, é "programação funcional". Por este viés, as tecnologias criativas são seu oposto, ou seja, uma "programação não-funcional", que não visa a eficiência nem a objetividade, e que se alimenta, inclusive, das falhas de digitação no código computacional como meio capaz de criar diferentes resultados (imprevistos) e abrir novas possibilidades de experimentação.</p>

      <p>Outro caminho que explorei por alguns anos foi o da lógica abdutiva, naturalmente adotada por designers, arquitetos, e outros profissionais que operam o pensamento projetual: uma forma de raciocínio mais icônico, que opera por proximidades e semelhanças entre os objetos, de uma forma quase analógica. Criei um mapeamento de artefatos "exóticos" que compõem esse grupo que chamamos de tecnologias criativas. O painel de projetos, batizado de <a href="javascript:openMeta('alemdosandbox');">Além do sandbox</a> (em referência aos projetos que nos forçavam a pensar "fora da caixinha" da computação convencional) foi ativamente alimentado durante 5 anos de pesquisa para prover referências materiais sobre o conceito. Não se tratava de elaborar uma definição explícita e verbal sobre ele, mas de uma qualificação não-verbal, que nos fornecesse uma perspectiva, ou uma imagem (no sentido imaginativo). Resumidamente: uma definição por referência, não por inferência.</p>

      <p>Assim como o termo "economia criativa", utilizado para designar de maneira muito imprecisa um conjunto de atividades profissionais que possuem a criatividade como elemento central, o termo "tecnologias criativas" também é uma forma muito pouco acurada de definir o objeto desta obra. Mesmo com sua clara fragilidade, talvez seja um título melhor do que todos os outros que já apresentamos, por não tentar expor, infrutiferamente, a natureza dos artefatos, evidenciando apenas suas intersecções comuns entre tecnologias diversas (nem sempre computacionais) e criatividade. Entendo como desnecessária qualquer tentativa de sofisticar um pouco mais esta definição, sobretudo se já estiver claro do que estamos tratando, exatamente como o trompetista Louis Armstrong fazia em relacão à definição de Jazz: "Se você precisa perguntar, então nunca saberá", afinal, o Jazz está por aí, e quem o toca, ou quem o ouve, não carece de definições explícitas.</p>

    </div>

    <div class="symbol"></div>

    <div class="corpus">

      <p>Provavelmente, a descrição do livro "<a href="javascript:openMeta('10print');">10 PRINT CHR$(205.5+RND(1)); : GOTO 10</a>" tenha a melhor colocação do que são as tecnologias criativas: <a href="javascript:openMeta('10print');" class="citacao">Este livro toma uma única linha de código - um programa em BASIC extremamente conciso para o computador Commodore 64, incluído de forma integral no título do livro - e o adota como uma lente para para considerar o fenômeno da computação criativa e as maneiras como programas de computador são concebidos nesta cultura. [...] Os autores [...] consideram a aleatoriedade e regularidade da arte computacional, os labirintos de sua cultura, a popularidade da linguagem BASIC, e a profunda influência do computador Commodore 64.</a></p>

      <p>Trata-se, como seus autores claramente equacionam, de uma cultura: maneiras e usos dados aos dispositivos computacionais, em uma prática exploratória que nasce da experimentação com o código computacional, desenvolvida não por profissionais da industria de software mas pela massa de usuários de computadores pessoais apaixonados por seus equipamentos e interessados em criar algo com eles, que, como uma subcultura centrada nos próprios dispositivos, se transformou em um fenômeno.</p>

      <p>Lidamos aqui com algo está mais para o Rock'n'Roll ou a música Pop - um fenômeno cultural - do que a formulação de princípios de harmonia e da composição tonal pela música clássica (definições formais e teóricas de composição).</p>

      <p>Então, na tentativa de responder à questão: "O que são tecnologias criativas?", eu diria que se trata de uma prática centrada no uso do código computacional como material para criar artefatos de função predominantemente poética, em diversos formatos midiáticos e expressivos, que nasceu de forma espontânea com os próprios entusiastas da computação pessoal por conta da curiosidade e/ou vontade de empregarem estes equipamentos (computadores ou controladores) na criação de algo que não fosse auto-referente (destinado a própria computação), prática esta que se difundiu globalmente como uma espécie de subcultura por conta de sua capacidade de dar sentido à atividade de programar junto a quem começa seu aprendizado na programação, ou por sua capacidade de encantar aqueles que vêm seus resultados e possibilidades expressivas para além da convencional construção de ferramentas e instrumentos de trabalho onde é normalmente empregada.</p>

      <p>Não adotaria isso como uma definição... apenas como uma explicação.</p>

      <!--

  This book takes a single line of code—the extremely concise BASIC program for the Commodore 64 inscribed in the title—and uses it as a lens through which to consider the phenomenon of creative computing and the way computer programs exist in culture. The authors of this collaboratively written book treat code not as merely functional but as a text—in the case of 10 PRINT, a text that appeared in many different printed sources—that yields a story about its making, its purpose, its assumptions, and more. They consider randomness and regularity in computing and art, the maze in culture, the popular BASIC programming language, and the highly influential Commodore 64 computer.
  -->

      </p>
    </div>



    <div id="bookendnav"></div>

    <div id="meta">
      <div id="arduino">
        <div style="background-image:url(https://cdn.arduino.cc/homepage/static/media/arduino-UNO.bcc69bde.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Arduino é um circuito aberto de prototipação, criado por Massimo Banzi, David Mellis, e David Cuartielles como aperfeiçoamento do projeto Wiring de Hernando Barragán, orientando de Banzi no Interaction Design Institute Ivrea, Itália.<br>
        <a href="https://www.arduino.cc" target="_blank">arduino.cc</a>
      </div>

      <div id="wiring">
        <div style="background-image:url(https://miro.medium.com/max/500/1*ZMuF1LLZ8xXTYkEvWYrnIQ.jpeg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Wiring foi o Arduino, antes do Arduino. É um circuito aberto de prototipação, criado por Hernando Barragán no Interaction Design Institute Ivrea, Itália.<br>
        <a href="https://wiring.org.co/" target="_blank">wiring.org.co</a>
      </div>

      <div id="barragan">
        <div style="background-image:url(https://uniandes.edu.co/sites/default/files/decano-hernando-barragan-m.jpg); background-size: cover; background-position: center right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Hernando Barragán<br>
        Professor Associado da faculdade de Arquitetura e Design da Universidade de los Andes, Colombia.<br>
        Criador do projeto Wiring, um circuito aberto de prototipagem integrado a uma plataforma de programação no Interaction Design Institute Ivrea, em 2003.
      </div>

      <div id="ivrea">
        <div style="background-image:url(https://www.ranoya.com/Assets/Logotipos/ivrea-logo.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Interaction Design Institute Ivrea (IDII)<br>
        Programa de pós-graduação estabelecido entre 2001 e 2006 nos antigos escritórios de pesquisa e desenvolvimento da Olivetti, na cidade de Ivrea na Itália, foi um dos centros mais importantes para o desenvolvimento recente do design computacional.<br>
        Um <a href="https://interactiondesigninstituteivrea.org/" target="_blank">arquivo não oficial</a> é mantido como memória do programa, terminado por corte de verbas.
      </div>

      <div id="ciid">
        <div style="background-image:url(https://ciid.dk/root_ciidwww/wp-content/uploads/2014/02/6563089219_cbf27df55b_b.jpg); background-position: right bottom; background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Copenhagen Institute of Interaction Design (CIID)<br>
        Programa de pós-graduação em design de serviços, design estratégico e design de experiência, fundado em 2006 em Copenhagen (Dinamarca) por ex-alunos do programa do Interaction Design Institute Ivrea (IDII).<br>
        <a href="https://ciid.dk/" target="_blank">ciid.dk</a>.
      </div>

      <div id="olivetti">
        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Olivetti_Lettera_22_by_LjL.jpeg/220px-Olivetti_Lettera_22_by_LjL.jpeg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Indústria italiana fundada pelo fabrincante de máquinas de escrever Camillo Olivetti, em 1908. A empresa se tornou um dos maiores fabricantes de máquinas de escrever e equipamentos de escritório no século XX, e teve papel de importância sobre o design italiano neste período, não só no de produto, como também no gráfico.<br>
      </div>

      <div id="fabbrini">

        <div style="background-image:url(https://www.ranoya.com/Assets/pessoas/fabbrini.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Fernando Fabbrini<br>
        Brasil, 1971-2020<br>
        Professor de cursos pioneiros em design digital no Brasil, Produção Multimídia e Design de Intefaces, e pesquisador do Laboratório de Pesquisa em Ambientes Interativos (LPAI) no Centro Universitário Senac.<br>

      </div>

      <div id="molnar">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQGxlydtzoDPRwGNMri_1JXeke08e3b7oPGIw&usqp=CAU); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Vera Molnár<br>
        Hungria, 1924<br>
        Pioneira nas artes computacionais, desenvolveu também trabalhos com arte cinética e mecânica.

      </div>

      <div id="noll">

        <div style="background-image:url(https://quello.msu.edu/wp-content/uploads/2019/06/a-michael-noll-square-1.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        A. Michael Noll<br>
        EUA, 1939<br>
        Professor emérito da Annenberg School for Communication na University of Southern California e pioneiro nas artes computacionais.
      </div>

      <div id="mohr">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Manfred_Mohr_Portrait_2019.jpg/220px-Manfred_Mohr_Portrait_2019.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Manfred Mohr<br>
        Alemanha, 1938<br>
        Artista alemão, pioneiro nas artes computacionais.
      </div>

      <div id="nees">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Georg_Nees-1-_BID_1986.jpg/220px-Georg_Nees-1-_BID_1986.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Georg Nees<br>
        Alemanha, 1926 - 2016<br>
        Professor honorario na Universidade de Erlangen, é um dos pioneiros nas artes computacionais. Autor da primeira tese sobre computação gráfica generativa.
      </div>

      <div id="nake">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/d/de/Frieder_Nake_2012.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Frieder Nake<br>
        Alemanha, 1938<br>
        Pioneiro nas artes computacionais, foi professor visitante na em diversas universidades, dos Estados Unidos à China.
      </div>

      <div id="waldemarcordeiro">

        <div style="background-image:url(https://s3.ca-central-1.amazonaws.com/artists.handcrafting.codes/artists/art-17001/imagens/sMpdxsQW.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Waldemar Cordeiro<br>
        Italia, 1925 - 1973<br>
        Líder do grupo concretista Ruptura, realizou as primeiras experimentações com arte computacional no Brasil e organizou a exposição Arteônica, a primeira com este tema em território nacional.
      </div>

      <div id="murielcooper">

        <div style="background-image:url(https://miro.medium.com/max/1000/1*l7tvAIldnRLboTGHDi-rEw.jpeg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Muriel Cooper<br>
        EUA, 1925 - 1994<br>
        Diretora de design da editora do Massachussets Institute of Technology (MIT Press), fundadora do Visible Language Workshop (VLW) no MIT, e co-fundadora do MIT Media Lab.
      </div>

      <div id="medialab">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1DHsckNNPSnoeYpahFFV1f7VJmxPvt_QiLg&usqp=CAU); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        MIT Media Lab, 1985<br>
        Laboratório de pesquisa do Massachussets Institute of Technology (MIT), abriga inúmeros grupos de pesquisa no campo de design, artes, arquitetura e tecnologia.<br>
        <a href="https://www.media.mit.edu/" target="_blank">Website</a>, <a href="https://www.media.mit.edu/research/?filter=groups" target="_blank">Grupos de pesquisa</a>

      </div>

      <div id="maeda">

        <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7hHGAIBfUtP6hPK-U9d1kn_hBu5v68Z535gbfRcf6_4yeTM4&s); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        John Maeda<br>
        EUA, 1966<br>
        Foi professor no Massachussets Institute of Technology (MIT) e posteriormente presidente da Rhode Island School of Design (RISD).<br>

      </div>

      <div id="maedamedia">

        <div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/517D63ZWD1L.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Maeda @ Media<br>
        John Maeda, 2000, Editora Thames & Hudson<br>
        <a href="https://www.amazon.com.br/Maeda-Media-Nicholas-Negroponte/dp/0847822958/ref=sr_1_2?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=maeda%40media&qid=1594168536&sr=8-2" target="_blank">AMAZON.COM.BR</a>

      </div>

      <div id="maedacreativecode">

        <div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/7105kfaiIxL._SX457_BO1,204,203,200_.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Creative Code<br>
        John Maeda, 2004, Editora Thames & Hudson<br>
        <a href="https://www.amazon.com.br/Creative-Code-Computation-Red-Burns/dp/0500285179/ref=sr_1_3?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=creative+code&qid=1594168914&sr=8-3" target="_blank">AMAZON.COM.BR</a>

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

      <div id="processing">

        <div style="background-image:url(https://miro.medium.com/fit/c/128/128/1*dyXtX3Lh61-zjtYRzDXihQ.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Linguagem e ambiente de programação criada por Casey Rease e Ben Fry, orientados por John Maeda durante seus doutorados no MIT Media Lab, originalmente constituída como uma simplificação da linguagem <a href="javascript:openMeta('java');">Java</a> e destinada para criação de arte, design e computação cirativa.<br>
        <a href="https://www.processing.org" target="_blank">Processing.org</a>

      </div>

      <div id="processingfoundation">

        <div style="background-image:url(https://miro.medium.com/fit/c/128/128/1*dyXtX3Lh61-zjtYRzDXihQ.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Fundação criada por Casey Reas e Ben Fry, e hoje dirigida por eles junto com Daniel Shiffman e Lauren McCarthy, é responsável por manter a plataforma Processing e todos os projetos correlatos de forma aberta e livre, manter a comunidade que se formou ao redor dela, e financiar projetos de arte e tecnologia.<br>
        <a href="https://processingfoundation.org/" target="_blank">Processing Foundation</a>

      </div>

      <div id="futurododesign">
        <div style="background-image:url(https://www.ranoya.com/Assets/coverimages/futuro114.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Iniciativa Futuro do Design<br>
        dDesign, UFPE, 2017<br>
        Projeto desenvolvido pelo Prof. Guilherme Ranoya no bacharelado de design da Universidade Federal de Pernambuco<br>
        <a target="_blank" href="https://www.ranoya.com/public/futuro/index.php<?php if ($_SESSION['theme']) {
                                                                                  echo '?theme=' . $_SESSION['theme'];
                                                                                } ?>#designgenerativo">Detalhes</a><br>
      </div>

      <div id="bauhaus">

        <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Bauhaus-Signet.svg/220px-Bauhaus-Signet.svg.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Staatliches Bauhaus (casa da construção), escola fundada por Walter Gropius em 1919 e fechada em 1933 por conta da perseguição Nazista, teve papel fundamental nas artes modernas e é considerada o marco zero do design. Foi herdada pela Hochschule für Gestaltung Ulm (escola de design de Ulm, Suiça), e pela New Bauhaus em Chicago (EUA), posteriormente incorporada ao Illinois Institute of Technology (IIT)

      </div>

      <div id="basic">

        <div style="background-image:url(https://bumbershootsoft.files.wordpress.com/2019/02/atari_hello_5.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        BASIC (Beginner's All-purpose Symbolic Instruction Code) é uma linguagem de programação criada para ensinar principiantes a progamar. Foi criada com finalidade didática em 1964 por John George Kemeny, Thomas Eugene Kurtz e Mary Kenneth Keller.

      </div>

      <div id="logo">

        <div style="background-image:url(https://i.pinimg.com/564x/20/ce/f5/20cef5eab58f4643fad730d7a872c6e0.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        LOGO é uma linguagem de programação visual criada em 1967 por Cynthia Solomon, Wally Feurzeig e Seymour Papert (um dos fundadores do MIT Media Lab). A linguagem era destinada ao ensino de programação para crianças, e possuia uma orientação construtivista (Papert trabalhou diretamente com Jean Piaget).

      </div>

      <div id="java">

        <div style="background-image:url(https://img.ibxk.com.br/2016/01/28/28091154377222.jpg?w=1120&h=420&mode=crop&scale=both); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Java é uma linguagem de programação inovadora, criada pela Sun Microsystems na década de 1990, que permitia a execução de um mesmo código para qualquer tipo de computador e/ou sistema operacional através de uma máquina virtual instalada nos computadores. É também uma linguagem orientada à objetos de uso geral, considerada mais simples que o C++.

      </div>

      <div id="cortex">

        <div style="background-image:url(https://live.staticflickr.com/4115/4860570151_5e6edd6c03_k.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Cortex #1 foi uma revista em formato multimídia (CR-ROM) de poesia digital, criada pelos professores Lúcio Agra, Thiago Rodrigues e Guilherme Ranoya, em São Paulo, 2003.<br>
        <a href="https://www1.folha.uol.com.br/fsp/ilustrad/fq2611200314.htm" target="_blank">Nota da Folha de São Paulo sobre o lançamento da revista</a>

      </div>

      <div id="mustic">

        <div style="background-image:url(https://mustic.cin.ufpe.br/img/pandiva.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Grupo de pesquisa em Música, Tecnologia, Interatividade e Criatividade, fundado pelos professores Geber Ramalho e Giordano Cabral no Centro de Informática da Universidade Federal de Pernambuco.<br>
        <a href="https://mustic.cin.ufpe.br/" target="_blank">MusTIC</a>

      </div>

      <div id="alemdosandbox">

        <div style="background-image:url(https://www.ranoya.com/Assets/coverimages/pesquisa.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        Painel de referências construído através do mapeamento de projetos de tecnologia criativa desde 2013 pela pesquisa de Estética da Interação realizada pelo prof. Guilherme Ranoya.<br>
        <a href="https://www.ranoya.com/aulas/alemdosandbox/" target="_blank">Além do Sandbox</a>, <a href="https://www.ranoya.com/public/pesquisa" target="_blank">Pesquisa em Estética da Interação</a>

      </div>

      <div id="10print">

        <div style="background-image:url(https://10print.org/10print.gif); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
        10 PRINT CHR$(205.5+RND(1)); : GOTO 10<br>
        Nick Montfort, Patsy Baudoin, John Bell, Ian Bogost, Jeremy Douglass, Mark C. Marino, Michael Mateas, Casey Reas, Mark Sample & Noah Vawter, 2012, MIT Press<br>
        <a href="https://10print.org/" target="_blank">10print.org</a>

      </div>



    </div>

    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>
  </div>

</body>

</html>