<?php
session_start();
?>
 
<!DOCTYPE html>
	<html>
	<head>
	
<?php
require '../interfaces/meta.php';
?>

		<title>Um "livro" para o século XXI | Ensaios sobre o design de interfaces digitais</title>
		<meta property="og:title" content='Um "livro" para o século XXI | Ensaios sobre o design de interfaces digitais'>
		  <meta name="description" content="Um livro para o século XXI. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
		  <meta property="og:description" content="Um livro para o século XXI. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
		
	</head>

<body>

<div class="bigwhitesapce"></div>

<div id="chapter">

<h1 id="titulocapitulo">Um "livro" para o século XXI</h1>

<div class="corpus">

<p>Atribuem à Leonardo da Vinci a idéia de que "a simplicidade é o último grau da sofisticação". Não tenho certeza se foi ele quem disse isso, mas tenho certeza que a frase está absolutamente correta. Ao longo de todo o tempo enquanto tenho me dedicado a tentar elaborar uma nova forma para construir um "livro" no seu formato digital, experimentando com uma multiplicidade de interfaceamentos, comportamentos, e recursos, tenho percebido o quanto a máxima é verdadeira: quanto mais aprimoro este artefato, mais caminho em direção de uma simplicidade onde, no fundo, o "livro" digital é tão somente um livro. É provavel que chegarei, no futuro, à conclusão que a interface perfeita para um "livro" digital, é o papel.</p>

<p>Paradoxos à parte, o que o grande inventor não comentou é que a simplicidade, como último grau da sofisticação, é simples em sua aparência (ou interface), mas é absolutamente complexa em termos projetuais. Para que algo seja simples de ser usado e compreendido, há um esforço monumental empregado para atingir tal nível de síntese. Este tem sido meu aprendizado aqui. A materialidade (ou virtualidade) visual deste "livro" é produto de uma longa jornada de reflexão e experimentação. Há anos tenho, de forma muitas vezes silenciosa, me dedicado a construir uma forma de design modular, constituída por elementos e peças que possam ser intercambiáveis, que possam ser reorganizados, relocados e, sobretudo, que possam ser integrados/re-utilizados em vários artefatos diferentes sem que seja necessário muito esforço.</p>

<p>Acredito que seja possível dizer que isso se deve pela grande influência que a computação teve sobre meu próprio raciocínio. Muito antes de ter me formado arquiteto, e ter escolhido as atividades de design como meu grande interesse de trabalho, eu já tinha certa proficiência na computação por ter sido criado na frente de um computador desde a infância. Pode não parecer algo excepcional hoje, mas para minha geração foi: durante a década de 1980 vivenciamos a famigerada Lei da Informática, que, não-intencionalmente, baniu todo tipo de computação pessoal da vida dos brasileiros enquanto ela adquiria raízes no cotidiano das pessoas no resto do mundo. Excepcionalmente, tive acesso a diversos computadores neste período enquanto meu pai os estudava para propor um sistema de informatização para os tribunais de São Paulo.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Eu não sabia ler, mas por volta de 1981, era capaz de copiar as linhas de código presentes nos manuais (em inglês, língua que eu também não falava) através do teclado do que provavelmente seria um <a href="javascript:openMeta('bbcmicro');">BBC Micro</a>, para ver quadrados multicoloridos explodindo sistematicamente na tela da TV, uns atrás dos outros. Curiosamente, leciono hoje uma disciplina para ensinar designers a fazerem exatamente aquilo que me encantava aos 5 anos de idade.</p>

<p>Fui alfabetizado com um <a href="javascript:openMeta('atari800');">Atari 800</a>, e provavelmente aprendi inglês no esforço de ler seus manuais, enquanto meu irmão mais velho me ensinava os rudimentos da matemática, necessários para construir meus próprios programas. Aos 6 anos construí meu primeiro programa em <i>Basic</i> com variáveis, rotinas e condicionais, uma brincadeira para reproduzir, à minha maneira, um programa criado antes por ele, chamado "Jogo Bobo". Aos 8 anos eu programava regularmente para criar artes e imagens geradas a partir de experimentação com cálculos e progressões numéricas.</p>

<p>É evidente que estas experiências em idade tão tenra (e que continuaram se desenvolvendo ao longo da adolescência e juventude) criaram veios profundos na minha forma de pensar, e que isso produziu reflexos diretos na forma como escrevo, crio e projeto coisas. Ao projetar e escrever um livro, eu não teria escapatória.</p>

<p>Lembro-me das incontáveis tentativas em encontrar uma solução, no final da década de 1990, para construir um portifólio impresso de forma que pudesse incorporar novos projetos a este artefato sem que ele precisasse ser refeito ou inteiramente reimpresso. Tentei buscar por ferragens e armações que pudessem acomodar novas páginas ou rearranjar a ordem dos trabalhos, sem obter qualquer sucesso nessa empreitada: o que havia disponível era desengonçado, deselegante ou de difícil aplicação; havia montagens como as de fichários, ou peças industriais utilizadas em arquivos de escritórios que confeririam ao artefato um acabamento precário e um resultado questionável. Nada, na época, parecia adequado àquilo que estava tentando fazer: um livro modular. Este conceito de módulos intercambiáveis em um artefato gráfico nunca saiu de meu horizonte, mas nunca foi solucionado no âmbito impresso.</p>

</div>


<div id="meusarcos" class="ill-generative">

</div>

<script type="module">
        import raios from "../arcos.js";

        let playarcos = raios({
        p5,
          'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
          'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--text-link'),
        'el': 'meusarcos'
        });

</script>


<div class="corpus">

<p>Já no digital - e adianto que não aprecio este termo -, temos outro contexto. Através do mecanismo pelo qual este "livro" é confeccionado, e pelas próprias lógicas de <i>progressive enhancement</i> e de reaproveitamento em que seu processo de construção é baseado, torna-se possível reaproveitar textos, capítulos ou trechos em outras versões; redigí-lo aos poucos e em partes, e publicar seu conteúdo parcial conforme vai sendo desenvolvido; rearranjar ou reestruturar seu conteúdo, incluíndo novos tópicos e discussões, ou alterando as questões arcaicas e ultrapassadas; aprimorar o que já está lá e corrigir o que venha a perceber equivocado; e, claro, incorporar áudio, vídeo, links, conteúdos dinâmicos ou interação, impossíveis ao substrato impresso.</p>

<p>Como forma de experimentação e imersão profunda para elaborar mecanismos adequados em acomodar conteúdos predominantemente textuais, comecei a construir manuais de programação on-line para os alunos de minhas disciplinas na Universidade Federal de Pernambuco, ao mesmo tempo em que desenvolvia uma primeira versão da plataforma onde este livro está amparado, hoje ultrapassada. Estes manuais foram construídos como um catálogo de verbetes (instruções de programação), e precisavam adquirir formas e organizações diferentes conforme o propósito que serviriam. Eles continuam disponíveis, por uma questão de memória, e pela consistência de outros suportes que os integram de alguma forma; como exemplo, criei uma manual para programação com código <a href="javascript:openMeta('refHTML');">HTML</a> e outro, muito parecido, para <a href="javascript:openMeta('refCSS');">CSS</a>, mas precisava de um terceiro, de consulta rápida, que mesclasse algumas partes dos dois para quem estivesse programando e precisasse sanar algumas dúvidas enquanto escreveria seu próprio código, que resultou neste <a href="javascript:openMeta('refWeb');">terceiro manual</a>. Tratam-se de conteúdos compartilhados, reordenados, e capazes de se confromar em contextos diferentes. Criar um quarto manual com alguns destes conteúdos e outros conteúdos oriúndos, por exemplo, de um manual de SVG, seria um trabalho de poucos minutos.</p>
<p>Todos estes contúdos estão, hoje, incorporados em um livro sobre <a href="https://www.ranoya.com/books/public/tecnologiascriativas">tecnologias criativas</a> nesta plataforma aqui.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Este suporte, e sua versão anterior, construída para abrigar os manuais, compartilham de princípios comuns, com base, principalmente, na modularidade. Descobri, somente no meio desde processo, que reproduzi, sem saber, a forma como os ebooks e a tecnologia EPUB se estruturam. Eu não tinha consciência, até então, de que EPUBs não passavam de documentos HTML para cada capítulo do livro, organizados por um sumário específico com links para cada documento. Em um primeiro momento isso foi como um banho de água fria: eu obviamente não estava criando nada novo; mas, ao refletir um pouco mais sobre a questão, tudo me pareceu uma ótima notícia, afinal, a tecnologia adotada nos ebooks foi pensada ao longo de anos por diversos profissionais de alto calibre, e eu, em minha primeira tentativa, havia chegado na mesma resposta. Era uma confirmação de que estava no caminho certo, ou que, se estamos (todos) errados, será necessária uma mente realmente brilhante para enxergar uma maneira melhor de reinventar o livro.</p>

<p>Além da confirmação, percebi também que construir um livro desta forma seria de grande serventia para transformá-lo, posteriormente, em um ebook tradicional com a tecnologia utilizada nos dispositivos de livros digitais, porque uma coisa não invalida a outra: apesar de acreditar nas vantagens que a web confere como suporte, não há nenhum problema em publicar o mesmo conteúdo em outros suportes, inclusive o impresso. Entendo que são mais limitados e que não poderão contemplar todo tipo de elemento como vídeos, áudios, ou diagramas interativos como esse exemplo abaixo, e principalmente, que precisarão estar finalizados para serem publicados, ao contrário desta versão que vai sendo incrementada aos poucos. De fato, talvez a maior dificuldade com outras versões é que tudo por aqui pode ser atualizado em tempo-real na medida que o mundo se transforma, enquanto livros (impressos ou digitais), precisam de novas edições trazendo suas revisões.</p> 

</div>

<div id="sincostan" style="width: 100%; height: 420px;"></div>
<div><span class="legenda" style="margin-bottom: 60px;">Exemplo de um diagrama interativo que só é possível usando a web como suporte para o livro.</span></div>

<script type="module">
        import diaint from "../sincostan.js";

        let playdiaint = diaint({
        p5,
        'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
        'fcolorA': getComputedStyle(document.documentElement)
		  .getPropertyValue('--text-link'),
		'fcolorC': getComputedStyle(document.documentElement)
		  .getPropertyValue('--sumarionicon-inverse'),
        'el': 'sincostan'
        });

</script>

<div class="corpus">

<p>Peço ao leitor, portanto, que não estranhe se tudo por aqui lhe parecer incompleto: as tecnologias não só reconfiguram os artefatos, mas também os processos, e no que tange o livro em sua nova forma digital, permite ao autor ansioso que lhe publique em estado parcial, e que, eventualmente,  consulte os leitores realmente interessados quanto aos tópicos que lhes são mais urgentes por serem incluídos. O livro, neste sentido, deixou de ser uma narrativa fechada, com começo, meio, e fim, para se tornar um diálogo, que compensa pela precariedade aparente daquilo que está sendo entregue no momento (os autores mais rigorosos, com suas obras irretocáveis, que atirem suas pedras).</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Após algum tempo trabalhando neste material (preferirira não usar o termo "alguns anos", mas é esse o termo correto), comecei a reconhecer o fato de que não consigo mais escrever (ou raciocinar a escrita) sem que ela seja hipertextual. Dizem que o hipertexto é apenas um suporte mais próximo à maneira como a mente opera, mas eu não teria como confirmar isso. O que sei é que o hipertexto é, definitivamente, uma maneira como a minha mente opera. Não só o hipertexto, mas concretamente as redes computacionais, pois também não consigo mais trazer exemplos sem que eles estejam factualmente <i>linkados</i> no texto, permitindo aos leitores acessá-los e averiguarem por si mesmos meus argumentos e posições.</p>

<p>Também não consigo manter exemplos datados (exceto, claro, aqueles que são historicamente importantes). Nossas referencias são vivas, e fico permanentemente atualizando meus registros. Não faz sentido realizar esse trabalho e manter aquilo que está apresentado nos meus escritos fixado no passado, ou seja, ultrapassado. A mídia dinâmica que dá suporte a este material me permite trazê-los de um catálogo sendo sempre revisto, e, em algumas vezes, torná-los escolhas aleatórias em um grande conjunto de referências mapeadas, mostrando coisas diferentes cada vez que as pessoas acessam esse documento.</p>

<p>Com o trabalho que passei a desenvolver com visualização de informação/dados em 2021, comecei a incorporar ferramentas de pesquisa para filtrar meus registros em tempo real, e exibir conteúdos diretamente nos documentos à partir dos termos de busca informados pelo leitor-usuário. Estes são elementos que podem enriquecer profundamente um documento sem torná-lo demasiadamente extenso e/ou desinteressante, e ainda sim oferecer tudo que está disponível à quem tiver o interesse. Conforme nos habituamos a ter estes recursos a disposição, ou raciocinar através deles, é difícil viver em sua ausência... parece que ficamos mancos, desarticulados, ou impotentes; é como aquela sensação terrível de nos enxergarmos desabilitados ou incompententes frente a um aparato que não dominamos, mas com o agravante de que não estamos a frente de algo novo e desconhecido, mas de algo mais primitivo e rudimentar do que aquilo que nos habituamos a fazer ou usar.</p>    

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Me pego lendo artigos científicos que citam uma pesquisa ou trabalho desenvolvido por alguém, e sinto esta estranha sensação de disfuncionalidade pela ausência de um mero <i>link</i> que me permita vê-lo ou ler as considerações e reflexões do autor. Aprendi com os livros de <a href="javascript:openMeta('damasio');">António Damásio</a>, neurocientista português que é referência nesta área, que atribuímos juízo de valor às coisas apenas na presença de emoções, e, consequentemente, minha forma de entender os textos que leio (ou produzo) passam por este sentimento de limitação proveniente de lidar com registros estáticos em mídias dinâmicas, conformados em fazerem menos do que podem. A sensação ruim nessa relação me impede de produzir algo semelhante.</p>

<p>O meu texto não se conforma mais em ser somente texto, assim como designers não conseguem elaborar escritos onde algum tipo de imagem, diagrama ou visualidade não estejam presentes. Sendo eu também um, meu texto precisa de materialidade visual, elementos gráficos, mas, além disso, precisa interagir; e abraçar o oceano metamórfico em que ele reside.</p>

<p>O registro da escrita é uma tecnologia que já passou por diversas mudanças. A própria escrita em forma de texto é uma tecnologia em transformação, só que bem mais lenta do que seus suportes para registro, como as tábulas cuneiformes, a prensa de Gutenberg, e as máquinas de escrever. <a href="javascript:openMeta('nicholascarr');">Nicholas Carr</a> dedicou dois capítulos de seu <a href="javascript:openMeta('geracaosuperficial');">A geração superficial</a> para demonstar que o texto escrito mundou com a introdução de elementos de marcação, tais como a pontuação. O hipertexto, que é o sistema com o qual eu lido diariamente e que acaba modelando a maneira como eu me expresso, não é nada mais do que mais um sistema de marcação, assim como os parágrafos e pontos finais de um texto.</p>

</div>

<div class='quatroitens'>
<img src="https://www.ranoya.com/Assets/screenshots/got1.png">
<img src="https://www.ranoya.com/Assets/screenshots/got2.png">
<img src="https://www.ranoya.com/Assets/screenshots/got3.png">
<img src="https://www.ranoya.com/Assets/screenshots/got4.png">
<span class="legenda">"jogo" <i>Game of Thrones: Tales of Crows</i></span>
</div>


<div class="corpus">

<p>Experimentei recentemente o "jogo" <i>Tale of Crows</i>, derivado da série de livros de George R.R. Martin (Crônicas de Gelo e Fogo) e da série televisiva <i>Game of Thrones</i>. A categoria "jogo" é equivocada para este artefato, ainda que ele seja algo tão lúdico e interativa quanto um; trata-se de uma narrativa computacional que conta lendas e histórias do grupo de personagens conhecidos na trama como "Patrulha da Noite" (<i>Night's Watch</i>). Neste caso, as histórias não nos são contadas através de um narrador, mas vivenciadas pleos acontecimentos que vão sendo tratados pelo próprio leitor-usuário participativo, através de diálogos com os demais personagens e os relatos que chegam por cartas, enviadas e recebidas por corvos.</p>

<p>O artefato é, essencialmente, um livro interativo. Não há escolhas ou interações que produzam resultados diferentes na trama; não há uma vitória ou derrota como nos jogos digitais. Sua única diferença para um livro é que sua narrativa é tratada e articulada de forma materialmente interativa junto ao leitor-usuário (ele precisa interagir para que a história possa prosseguir). Nem mesmo a predominância visual é estranha aos livros, considerando que os artefatos infantis são muito mais pictóricos do que verbais.</p>

<p>Essa é uma forma ainda mais complexa e sofisticada de construção de um livro digital. Ela me parece interessantíssima para uma ficção, e perfeita para o gênero de fantasia do qual a obra de Martin pertence, mas provavelmente não funcionaria bem para um livro voltado à reflexão verborrágica de predominância retórica, como este. Ainda sim, é um bom exemplo de como um livro estático pode assumir outros formatos na mídia computacional: por que ler as "lendas dos corvos" na tela de um computador ou celular, como um texto estático contra um fundo branco, se é possível ler estas histórias de modos mais participativos, imersivos e interativos?</p>

<p>Talvez minhas escolhas, e a forma como optei em configurar um livro para a atualidade, sejam até tímidas e conservadoras. Eu continuo gostando de ler livros de papel, inclusive. A minha questão não é desqualificá-los, mas explicar que meu próprio raciocínio não funciona nos termos da escrita tradicional, e ter que produzí-la é, para mim, um difícil trabalho de tradução. Estes - digitais - são os formatos naturais da maneira como me expresso, e minha forma própria de escrever algo.</p>  

	</div>

<div id="bookendnav"></div>



<div id="meta">
	<div id="refHTML">
		<div style="background-image:url(https://www.ranoya.com/Assets/screenshots/refHTML.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Guia interativo de referência para programação HTML<br>
		Plataforma ReferenceDocs<br>
		<a href="https://github.com/ranoya/ReferenceDocs" target="_blank">Código fonte (Github)</a><br>
		<a href="https://www.ranoya.com/p/html" target="_blank">Acesso ao guia</a>
	</div>
	<div id="refCSS">
		<div style="background-image:url(https://www.ranoya.com/Assets/screenshots/refCSS.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Guia interativo de referência para programação CSS<br>
		Plataforma ReferenceDocs<br>
		<a href="https://github.com/ranoya/ReferenceDocs" target="_blank">Código fonte (Github)</a><br>
		<a href="https://www.ranoya.com/p/css" target="_blank">Acesso ao guia</a>
	</div>

	<div id="refWeb">
		<div style="background-image:url(https://www.ranoya.com/Assets/screenshots/refProgWeb.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Guia interativo de referência rápida para programação web<br>
		Plataforma ReferenceDocs<br>
		<a href="https://github.com/ranoya/ReferenceDocs" target="_blank">Código fonte (Github)</a><br>
		<a href="https://www.ranoya.com/p/refweb" target="_blank">Acesso ao guia</a>
	</div>

	<div id="bbcmicro">
		<div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/BBC_Micro_Front_Restored.jpg/300px-BBC_Micro_Front_Restored.jpg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		BBC Microcomputer System<br>
		Acorn Computers Ltd, 1981<br>
	</div>

	<div id="atari800">
		<div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Atari-800-Computer-FL.jpg/1280px-Atari-800-Computer-FL.jpg); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Atari 800<br>
		Família de computadores 8-bit / MOS 6502<br>
		Atari Inc, 1979<br>
	</div>

	<div id="nicholascarr">
		<div style="background-image:url(https://www.nicholascarr.com/wp-content/uploads/2014/01/Nicholas-Carr.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Nicholas Carr<br>
    	EUA, 1959<br>
    Escritor e crítico sobre a relação entre cultura e tecnologia.<br>
	</div>

	<div id="damasio">
		<div style="background-image:url(https://cdl-static.s3-sa-east-1.amazonaws.com/colaboradores/00118_gg.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		António Damásio<br>
    	Portugal, 1944<br>
        Médico neurologista e neurocientista, é Professor da Universidade do Sul da Califórnia.<br>
	</div>

	<div id="geracaosuperficial">

    <div style="background-image:url(https://lojasaraiva.vteximg.com.br/arquivos/ids/1811047/1000441615.jpg?v=637005372394570000); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
    A geração superficial: o que a internet está fazendo com nossos cérebros<br>
    Nicholas Carr, 2019, Editora Agir<br>
    <a href="https://www.amazon.com.br/Geracao-Superficial-Internet-Fazendo-Cerebros/dp/8522010056/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3RGCROFHBRURK&keywords=gera%C3%A7%C3%A3o+superficial&qid=1650829241&sprefix=gera%C3%A7%C3%A3o+superficial%2Caps%2C335&sr=8-1" target="_blank">AMAZON.COM.BR</a>
    
  </div>  


</div>
<div id="metacompensate"></div>

<div id="posicao"></div>
<div id="posicaocompensate"></div>

</body>

</html>
