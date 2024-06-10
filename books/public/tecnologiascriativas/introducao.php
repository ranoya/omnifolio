<?php
session_start();
?>

<!DOCTYPE html>
	<html>
	<head>
<?php
require '../tecnologiascriativas/meta.php';
?>
        <title>Introdução | O tecido das tecnologias criativas</title>
        <meta property="og:title" content='Introdução | O tecido das tecnologias criativas'>
  		<meta name="description" content="Introdução. Capítulo da versão digital do livro O tecido das tecnologias criativas">
        <meta property="og:description" content="Introdução. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
		
		
	</head>

<body>

<script>
        sumarionsize = 220;
</script>

<div class="bigwhitesapce"></div>

<div id="chapter">

<h1 id="titulocapitulo">Introdução</h1>

<div class="corpus">

<p>Apesar de seu título bastante poético, este "livro", escrito entre parêntesis, como tento explicar um pouco em um capítulo subsequente, é um trabalho bastante técnico. Ele é, também, uma obra permanentemente em construção; em aberto. Não estranhe a existência de capítulos não escritos, textos pela metade, ou reformulações em seu conteúdo. Explico um pouco mais o por quê disso tudo, e o que é essa ideia de um livro elaborado através do princípio de <i>progressive enhancement</i>, em <a href="livrosecxxi.php" class="citacao">Um "livro" para o século XXI</a>.</p>

<p>Este é um "livro" dedicado às tecnologias criativas, um campo profundamente relacionado com a arte, e uma prática que recebe nomes muito diferentes dependendo de sua origem, mas que se referem exatamente à mesma coisa, sejam elas referenciadas pelos termos "código criativo", "poéticas computacionais", "expressividade computacional", "arte generativa", "design paramétrico", ou outros, que, de alguma forma, tentam implicar o uso da computação para fins diferentes que o da produção de ferramentas e instrumentos de trabalho, ou, de forma mais científica, chamadas de computação funcional: aquela desenvolvida para finalidades e propósitos muito claros e pragmáticos, ligadas às necessidades humanas imediatas. Quando são usadas para a produção de obras de arte, para a poética ou expressividade, e algumas vezes para o entretenimento, propositos ambíguos e com fronteiras e/ou delimitações um pouco nebulosas, costumamos chamá-las por estes termos aos quais este "livro" se refere, ou, cientificamente, por computação não-funcional: aquela ligada às necessidades e produção simbólica de uma sociedade.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Esta falsa dicotomia, que coloca os produtos e artefatos do cotidiano em posição diametralmente oposta aos produtos e artefatos mais abstratos de nossa experiência e cultura, como necessidades objetivas versus necessidades subjetivas, ou de forma mais simplória, como as coisas realmente necessárias em nossa vida real versus as sofisticações uma vida fútil, cercada por objetos de pouco valor de uso - uma visão de mundo já desmontada por diversos autores, mas que permanece circulando vividamente em nossa cultura e continua influenciando nossos modos de ver e/ou ler o mundo ao nosso redor - muitas vezes nos dificultam a enxergar que toda arte, expressão ou artefato de natureza poética é construído através de técnicas intrisicamente pragmáticas e objetivas. Ou seja, que a arte, instituída como "subjetiva", depende do domínio da técnica, "objetiva", o que equivale dizer que todo artista ou artesão apto a construir artefatos "subjetivos" precisa ser, antes, mestre de toda a objetividade técnica.</p>

<p>Não pretendo me alongar nesta discussão que, na verdade, não passa de um engodo. Apenas demarcar que para a construção de uma poética computacional, de uma arte generativa, ou para se produzir o que chamamos de tecnologias criativas, é necessário o domínio do seu material de construção: o código computacional.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>O título deste "livro" faz referência exatamente a isso: todo artefato computacional, de natureza poética ou funcional, é tecido através dos códigos computacionais (ou linguagens de programação, se preferirem), e esta obra se dedicará bem mais a eles, especificamente em seu contexto poético, em detrimento às discussões sobre a poética computacional em si, que - claro - não deixam de ser questões bastante instigantes de estudo.</p>

<p>Portanto, quem está tendo contato pela primeira vez com este "livro", buscando nele um aprofundamento sobre questões estéticas, a linguagem, ou os impactos sociais e culturais das tecnologias criativas, provavelmente irá se decepcionar com seu conteúdo; contudo, aqueles interessados em entender o processo construtivo e/ou como fazê-lo, encontrarão aqui - espero eu, seu autor - um farto material de referência.</p>

<p>Este trabalho é fruto da iniciativa <a href="javascript:openMeta('futurododesign');">Futuro do Design</a> desenvolvida na Universidade Federal de Pernambuco (UFPE), através da qual busco familiarizar os estudantes dos campos da criatividade (o design, a arte, a arquitetura, etc.) com as ferramentas que lhes serão necessárias no porvir. Isso se traduz, ao menos nesse momento, em ensinar-lhes como incorporar a programação computacional como ferramenta de projeto, tendo em vista a ubiquidade da computação em tudo que nos cerca atualmente.</p>

<p>Este projeto é amparado pelo trabalho de <a href="https://www.ranoya.com/public/pesquisa">pesquisa</a> desenvolvido desde 2013 que passou pelo estudo da computação vestível (<i>Wearable Computing</i>), da arte generativa, dos artefatos narrativos digitais, e que, de maneira geral, se ocupa da interação e experiência junto às mídias computacionais, e é diretamente aplicado em <a href="https://www.ranoya.com/public/aulas/#tecnicas">disciplinas técnicas</a> oferecidas na graduação em design da UFPE. Nele, produzo experimentos e instrumentos que tentam facilitar a mudança disruptiva na forma como a prática destes futuros profissionais precisará se dar. A própria plataforma onde este "livro" foi confeccionado é produto deste projeto.</p>

</div>

<div id="desenho" class="ill-generative">

</div>

<script type="module">
        import quads from "../quadrados.js";

        let playquads = quads({
        p5,
          'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
          'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--text-link'),
        'el': 'desenho'
        });

</script>

<h2>Organização</h2>

<div class="corpus">

<p>O conteúdo desta obra é uma adaptação (ou, talvez, um aprimoramento) dos guias de referência em programação (em algumas linguagens diferentes) construídos previamente na plataforma <a href="https://github.com/ranoya/ReferenceDocs">ReferenceDocs</a>, criada para catalogar instruções e documentação de programação de forma interativa, permitindo a experimentação com os códigos e exemplos contidos nela. Com o tempo, esta plataforma original se mostrou um pouco inflexível, e seus conteúdos passaram a ser incorporados neste formato, que lhes permitem melhor convivência e diálogo com outros formatos midiáticos. Estes conteúdos originais, além de transpostos, passaram a ser ampliados para a constituição deste "livro".</p>

<p>Nele estão inclusos textos dirigidos a discussão sobre as tecnologias criativas, compilados no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>"Expressão + Computação"</b></a>, como o texto base <a href="./tecnologiascriativas.php">"Tecnologias criativas"</a> , e os volumes técnicos de cada linguagem de programação, compiladas no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>"Linguagens"</b></a>, que ampliam o conteúdo do próprio "livro" ao serem acessados.</p>

<!--
<p>Por se tratar de um material digital e interativo, que, ao contrário do papel, pode ser atualizado, é possível solicitar que procedimentos, técnicas ou especificações sejam detalhadas ou incluídas aos volumes técnicos. Isso pode ser feito pelos materiais disponíveis no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>"Solicitações"</b></a>, e são produzidos/incluídos conforme os leitores/usuários apresentam necessidades comuns, que possam ser aqui ilustradas.</p>
-->

</div>

<div id="bookendnav"></div>

<div id="meta">

  <div id="futurododesign">
		<div style="background-image:url(https://www.ranoya.com/Assets/coverimages/futuro114.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Iniciativa Futuro do Design<br>
		dDesign, UFPE, 2017<br>
		Projeto desenvolvido pelo Prof. Guilherme Ranoya no bacharelado de design da Universidade Federal de Pernambuco<br>
		<a target="_blank" href="http://www.ranoya.com/public/futuro/index.php<?php if ($_SESSION['theme']) { echo '?theme=' . $_SESSION['theme']; } ?>#designgenerativo">Detalhes</a><br>
	</div>

</div>
<div id="metacompensate"></div>

<div id="posicao"></div>
<div id="posicaocompensate"></div>

</body>
</html>
