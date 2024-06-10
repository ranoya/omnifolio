<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<?php
	require '../interfaces/meta.php';
	?>
	<title>Documentos são interfaces | Ensaios sobre o design de interfaces digitais</title>
	<meta name="description" content="Documentos são interfaces. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
	<meta property="og:title" content="Documentos são interfaces | Ensaios sobre o design de interfaces digitais">
	<meta property="og:description" content="Documentos são interfaces. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
</head>

<body>

	<div class="bigwhitesapce"></div>

	<div id="chapter">

		<h1 id="titulocapitulo">Documentos são interfaces</h1>

		<div class="corpus">

			<p>A noção do que é um documento mudou bastante, desde que seus primeiros formatos surgiram na computação pessoal. A ideia de que um documento é apenas um conjunto de dados armazenados em um dispositivo, que possa ser carregado ou gravado por um software especifico, já talvez não seja mais válida. Funcionava bem para explicar o que era um arquivo de planilha do Lotus 1-2-3, um documento do processador de texto WordPerfect, ou um arquivo de imagem proprietário como o PSD do Adobe Photoshop, mas já não funciona mais quando os próprios documentos contém algum tipo de <i>script</i>, <i>macro</i>, incorporam algum tipo de <i>algoritmo</i>, ou, são, eles próprios, um programa.</p>

			<p>No caso dos navegadores web, a situação é ainda mais flagrante, já que os documentos que recebem são diversos tipos de códigos computacionais (<i>scripts</i> HTML, CSS e documentos com códigos de programação em linguagem javascript) e aquilo que eles apresentam para os usuários são informações integralmente interativas, no formato de websites, ferramentas de trabalho, portais, blogs, etc. Por mais distantes que nos pareçam dos velhos documentos que se comportavam como simples dados estáticos, aquilo que vemos na tela de um navegador nada mais é do que um mero documento.</p>

			<p>Faz-se necessário uma regressão para artefatos disprovidos de qualquer computação, como, por exemplo, uma folha de papel, para re-formular um entendimento, e observá-los por uma abordagem comunicacional. O <i>expertise</i> conceitual do design trata seus produtos como artefatos, isto é, objetos planejados e fabricados por seres humanos, resultado da intervenção humana (artificial)
				sobre a natureza. A comunicação não aborda estes objetos como artefatos, mas como mídia, ou seja, suportes de significação e meios para as trocas de sentido, que em termos mais acadêmicos pode ser traduzido como a materialidade de uma economia simbólica.</p>

			<p>A abordagem comunicacional dá muito mais abrangência ao entendimento destes objetos (artefatos ou mídias, como quiserem) pois não os observa à partir de seu processo produtivo (o produto da interferência artificial sobre a natureza), mas à partir de seus efeitos (comunicacionais). Pelo ponto de vista dos efeitos, um website e um documento impresso (como um cartaz) produzem o mesmo resultado: eles informam, e consequentemente, produzem significação e sentido. No que tange a questão comunicacional, mesmo um documento impresso é interativo (no âmbito simbólico).</p>
		</div>

		<svg style="width: 100%; margin-top: -20px; margin-bottom: 40px;" viewBox="0 0 1872 568" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M1019 272H884V427.423C956.731 433.035 1014 493.83 1014 568H1210V422H1019V272Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M1661 252H1872V0H1450V126H1661V252Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M873 568H994C994 501.174 939.827 447 873 447V568Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M316 146.407C312.702 146.138 309.367 146 306 146C239.173 146 185 200.173 185 267C185 268.675 185.034 270.342 185.102 272H316V387.593V472V568H732C732 493.151 790.322 431.924 864 427.283V272H482H426.898H316V146.407Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M1872 420V272H1230V568H1661V420H1872Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M453.198 252C466.881 188.853 522.867 141.47 590 141.003V140.997C667.412 140.459 730 77.5386 730 0H1430V126H1019V252H453.198Z" class="illFillIt" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M235 0H0V420C77.8721 420 141 483.128 141 561C141 563.347 140.942 565.681 140.829 568H296V407.651C222.794 402.521 165 341.51 165 267C165 215.017 193.131 169.604 235 145.154V0Z" class="illFillIt" />
			<circle cx="590" cy="62" r="25" class="illFillIt" />
			<circle cx="1124" cy="206" r="25" class="illFillIt" />
			<circle cx="1775" cy="495" r="25" class="illFillIt" />
			<circle cx="1551" cy="206" r="25" class="illFillIt" />
			<circle cx="1124" cy="337" r="25" class="illFillIt" />
			<circle cx="499" cy="62" r="25" class="illFillIt" />
			<circle cx="320" cy="62" r="25" class="illFillIt" />
			<circle cx="408" cy="62" r="25" class="illFillIt" />
		</svg>



		<div class="corpus">

			<p>Tratando estas questões com alguma profundidade teórica, estamos falando estritamente sobre a função destes objetos. Sejam eles interativos simbolicamente, ou interativos materialmente, sua função permanece a mesma; e se há alguma interação, seja ela de qualquer natureza, há, certamente uma interface que permite aos usuários deste objeto operarem a interação. A mídia estática (por exemplo, o suporte impresso) não é capaz de se modificar formalmente como faz a mídia computacional, e sua interface está inexorávelmente ligada ao formato midiático adotado, e ao próprio suporte. Um cartaz; um panfleto; um jornal; uma propaganda; um artigo; estes são exemplos de formatos que podem estar imbuídos em um mesmo suporte material (como uma folha A4) e impressos com tinta preta (produzidos da mesma forma). Nossa interação - simbólica - com uma propaganda impressa será diferente da que teríamos com um texto jornalístico, o que significa que a maneira como lidamos/operamos/manipulamos o conteúdo do material impresso (em termos cognitivos, simbólicos) é aquela que a interface-formato nos facilita/oferece/permite. Mas é claro, o suporte também é parte interface, já que um texto impresso em um corpo minúsculo, praticamente ilegível, em uma folha de papel no tamanho A1, enorme e difícil de manipular, também interferem sobre a construção simbólica tal como um monitor velho com uma resolução baixa dificultaria que uma interface de software muito carregada com janelas e botões conseguisse ser exibida, e como consequência, manipulada adequadamente.</p>

			<p>
				<iframe src="https://www.youtube.com/embed/s6DuMNB5ILA" style="width: 100%; height: 380px;"></iframe>
				<span class="legenda">A mesma discussão foi apresentada por Eric A. Bier e Ken Pier em 1991 no Conference on Human Factors in Computing Systems (CHI'91)</span>
			</p>
		</div>

		<div style="margin: 20px;">&nbsp;</div>
		<div class="symbol"></div>

		<div class="corpus">
			<p>A organização da informação sobre o campo, seja feita no suporte computacional ou impresso, é, na prática, a construção de um interfaceamento com o usuário, cujo próprosito (função) é lhe permitir acessar, manipular e usar o conteúdo daquela mídia. Criar hierarquias, aproximar aquilo que está correlacionado, criar elementos para promover pontos focais e traçar trajetos visuais para conduzir a leitura, enfim, estas e muitas outras artimanhas do design de informação são os mesmos artifícios utilizadas na construção de uma interface. A diferença entre o impresso e o computacional se restringe ao fato desta última ser metamórfica, permitindo que os elementos nela grafados possam se transformar ao longo do tempo continguamente com o que se processa nos outros suportes que lhe são parte, como o sonoro, ou mesmo o háptico.</p>

			<p>Mas esta discussão está muito abstrata, e dessa forma corre o risco de ficar incompreendida. Tratemos a questão por uma abordagem mais concreta:
			</p>

		</div>

		<div class="symbol"></div>



		<div class="halfblock eblock">

			<p>O curso de desgin na Universidade Federal de Pernambuco (dDesign/UFPE) tem uma configuração excepcional e inovadora. É um bacharelado com uma estrutura completamente aberta. Não há uma grade fechada organizada por semestre ou ano, e em cada período de aulas é oferecido aos estudantes um conjunto inteiramente novo de cerca de 40 a 50 disciplinas diferentes, nas quais cada um poderá se matricular (se conseguirem uma vaga, e se o horário não estiver ocupado com outra disciplina na qual já estejam matriculados). Esta configuração, aparentemente, traria mais simplicidade à estrutura curricular de um bacharelado, mas, infelizmente, o resultado é totalmente adverso. Como há um limite de vagas (pelo próprio espaço físico de uma sala de aula) para cada disciplina, graus de dificuldade diferentes, pressupostos de aprendizagem já adquiridos, e sobretudo, um sistema onde cada disciplina pertence a uma das 4 categorias (chamadas de eixos) disponíveis, cuja exigência que se faz ao aluno é que curse ao menos 6 disciplinas diferentes em cada eixo, conseguir se matricular casando tantas variáveis e compondo uma grade de disciplinas interessantes a serem cursadas no semestre é um exercício de quebra-cabeça dificílimo.</p>

			<p>Para ajudar nesse complexo exercício de decisão, produziu-se, com a ajuda dos próprios estudantes, um material gráfico (impresso) apresentando todas as opções disponíveis no semestre, de maneira que as variávies envolvidas possam ser melhor visualizadas, e consequentemente, a equação a ser resolvida possa ser melhor compreendida (o que se vê na "imagem 1").</p>

			<p>Neste verdadeiro mapa, as cores indicam a qual eixo cada disciplina pertence, e a marcação com pequenas bolinhas indica o grau de dificuldade ou quantidade de pressupostos de aprendizagem, tentando deixar claro aos estudantes que aquele componente pode ser feito no início do curso, no meio, ou deve ser deixado para o final.</p>

		</div>

		<div class="halfblock dblock"><img style="width: 100%;" src="https://www.ranoya.com/Assets/Diagramas/GradeOriginal.png">
			<span class="legenda">Imagem 1: grade de disciplinas ofertadas no departamento de design (dDesign) da Universidade Federal de Pernambuco em 2020. Projeto gráfico elaborado pelos alunos do próprio curso.</span>
		</div>

		<div style="margin: 20px;">&nbsp;</div>
		<div class="symbol"></div>

		<div class="corpus">

			<p>Por melhor que seja o seu projeto gráfico, e por maiores que sejam as contribuições oferecidas por este material, permanecia sendo muito difícil para os estudantes otimizar sua solução de matrícula. E foi nesta condição que a coordenação do curso de design me pediu que criasse uma documento web para visualizar as disciplinas oferecidas, não apenas pela conveniência de acessarem estas informações de qualquer lugar (afinal, o documento impresso poderia ser enviado à todos os alunos por email), mas porque uma página HTML permitiria um tipo de interação com as informações que um documento impresso não oferece.</p>

			<p>Tentei, ao elaborar este artefato, incorporar ao máximo a mesma linguagem e os mesmos elementos do material impresso, afinal, ele continuaria sendo produzido e disponibilizado para os estudantes no mural do departamento (ou enviado por email). Construir uma linguagem ou usar signos diferentes produziria dissonância e desinformação, e não colaboraria para a função da qual ambos os documentos compartilhavam.</p>

			<p>Este novo artefato, como pode ser observado na "imagem 2" abaixo, trazia duas novidades importantes: primeiro, cada componente curricular apresentado nesta grade passava a ser um link para a ementa (conteúdo programático) da disciplina, permitindo que os alunos pudessem consultar o que seria ensinado, e de que forma a aula seria trabalhada. O segundo recurso importante era a possibilidade de se filtrar o que era visualizado, permitindo aos estudantes que enxergassem apenas as disciplinas de um eixo específico, apenas as disciplinas de um grau de dificuldade específica, ou combinassem a exibição de disciplinas pertencentes a um eixo e a um grau de dificuldade específicos. Esse recurso era essencial para ajudá-los a encontrar algo que se enquadrasse no que estavam querendo/precisando no momento, e, em termos teóricos, configura aquilo que no campo da arquitetura de informação costumamos chamar de <i>findability</i>, elemento fundamental de um bom sistema de informação.</p>

		</div>

		<div style="width: 100%; margin-top: -30px">
			<img style="width: 100%" src="https://www.ranoya.com/Assets/Diagramas/GradeWeb.png">
			<span class="legenda">Imagem 2: a visualização web que criei para o departamento em 2018 para o mapa de disciplinas. O documento pode ser acessado <a target="_blank" href="https://www.ranoya.com/GradeDdesignViz/webrender">neste link</a>.</span>
		</div>

		<div style="margin: 20px;">&nbsp;</div>
		<div class="symbol"></div>

		<div class="corpus">
			<p>Mas a jornada de configuração desta interface de visualização não se encerrou quando o a versão web do mapa ficou pronta: o processo de elaboração do documento impresso envolve muito trabalho mecânico, fundamentalmente porque a elaboração da oferta de disciplinas é um processo volátil, que muda radicalmente em questão de minutos, e exige do coordenador de curso que reinvente a solução de disponibilidade inúmeras vezes. Para cada momento em que se acredita ter chegado a uma solução final (coisa que, invariavelmente, nunca é verdadeira), um novo mapa é construído artesanalmente em uma ferramenta de editoração gráfica. Esse processo, além de frustrante para quem o executa, é também desnecessariamente trabalhoso.</p>

			<p>Sua versão web é controlada à partir de uma planilha. Modifica-se um registro na planilha e uma disciplina sai da segunda-feira e passa para a quinta-feira, enquanto todas as demais disciplinas são automaticamente readequadas na grade; e o resultado visual disso pode ser observado imediatamente, permitindo saber no ato se a solução ficou a contento, ou não. É claro que o artefato que produzi não se resumia a uma representação de informação em um suporte com alguns recursos interativos a mais; ele incorporava toda uma forma de lidar com a informação - um sistema - afinal, designers pensam de maneira industrial e sistemática, e nestes termos, suas soluções vão além da aparência dos artefatos; elas precisam circunscrever seu funcionamento, a forma como serão produzidos, como são mantidos e, eventualmente, como serão descartados (e nesse sentido, todos os dados que geram a visualização poderão ser reaproveitados em outro mecanismo que venha a ser desenvolvido um dia).
			</p>

			<p>Uma das disciplinas que leciono no curso de design da Universidade Federal de Pernambuco é a disciplina de <a href="javascript:openMeta('designgenerativo');">Design Generativo</a>, que faz parte de uma iniciativa que chamo de <a href="javascript:openMeta('futurododesign');">Futuro do Design</a>, cujo intuito é preparar os estudantes para usar a programação computacional como ferramenta de configuração dos artefatos projetados, no lugar de softwares de tratamento de imagem, editoração gráfica, ou modelagem. Criei a disciplina justamente para habilitar os estudantes na construção de visualização de informações e infografias dinâmicas, e tenho tentado mostrar a eles que estes produtos não se restringem à softwares ou websites; mesmo um material impresso pode usufruir de uma representação gráfica construída através de um <i>algoritmo</i>.</p>

		</div>

		<div class="symbol"></div>

		<div class="halfblock eblock"><img style="width: 100%;" src="https://www.ranoya.com/Assets/Diagramas/GradeGenerativa.png">
			<span class="legenda">Imagem 3: grade impressa gerada à partir da prória visualização web disponível <a target="_blank" href="https://www.ranoya.com/GradeDdesignViz/webrender">neste link</a>.</span>
			<div style="margin: 20px;">&nbsp;</div>
		</div>


		<div class="halfblock dblock">

			<p>O sistema de visualização web passou a gerar um mapa para mídia impressa. Infelizmente ele não é capaz de reproduzir o material confeccionado artesanalmente de maneira idêntica. Tenho certeza que seria possível fazê-lo, mas isto demandaria um esforço exagerado por conta de aspectos pouco críticos na função do documento. Não me refiro às pequenas diferenças gráficas, como, por exemplo, a cor indicativa do eixo estar entre a cigla e o nome da disciplina no material original diferentemente da solução que criei ("imagem 3"); a maior diferença se encontra no fato de que no material original cada uma das disciplinas pertencentes a um único eixo ficavam agrupadas no mesmo bloco horizontal, enquanto na versão nova elas são diretamente encaixadas abaixo das anteriores. A dificuldade em resolver a representação de forma idêntica está no fato de que a versão original (impressa) não conta com uma forma de filtrar disciplinas e exibir apenas parte delas, e isso modifica profundamente o mecanismo de distribuição das informações, ou, colocando em termos mais técnicos: a lógica que orienta a construção dos dois mapas é diferente, apesar de parte substancial do resultado parecer o mesmo.</p>

			<p>Ambos são ligeiramente diferentes, mas sua nova versão continua operando adequadamente para desempenhar a mesma função da anterior, ainda que contenha pequenas perdas. Sua maior vantagem é diminuir drasticamente o trabalho/retrabalho envolvido. Mas, no fundo, o que ela revela é algo completamente diferente: demonstra, na prática, que, mesmo o material gráfico, é uma forma de interface, já que o conteúdo que está impresso na "imagem 3" nada mais é do que a própria interface de visualização de dados que criei para web. E, novamente, parece essencial lembrar que tanto ela, quanto o mapa original, foram produzidos para criar maior <i>findability</i> e para dar sentido a um mar de informações desencontradas disponíveis sobre o curso. Estes mapas foram criados para ajudar alunos a navegar seu curso. O território representado são as diversas disciplinas disponíveis, e a interface que nos permite usá-lo foi criada verdadeiramente pelo projeto gráfico dos alunos, separando eixos por cores, graus por signos gráficos, organizando os horários em dois grupos distintos (manhã e tarde) e distribuindo as disciplinas nesta estrutura.</p>


		</div>

		<div class="symbol"></div>

		<div class="corpus">
			<p>Esse trabalho que realizei para o departamento de design da UFPE é uma demonstração empírica de que um documento é uma interface, independente de sua natureza estática ou dinâmica, impressa ou computacional. Entendê-los desta forma muda radicalmente o jeito como os projetamos. No design de um livro, por exemplo, como podemos criar interfaces para que o usuário-leitor possa localizar uma discussão específica? Um assunto específico? Ou um argumento específico? Os capítulos e seus títulos não me parecem ser suficientes para delimitar o que está escrito ao longo de centenas páginas, principalmente em textos muito longos, ou em discussões muito profundas.</p>

			<p>Todo conteúdo possui certos tipos de elementos que lhe são estruturantes: um argumento é estruturante para a construção textual; o contraste é estruturante para a construção imagética, e o silêncio para a construção sonora. Em toda música há um tema que é apresentado em algum momento, e repetido noutros, e assim constrói uma retórica. Por que estes elementos não são mapeados e utilizados como parte da configuração do próprio artefato? Por que construímos interfaces dissociadas da tessitura do conteúdo que elas deveriam conformar e facilitar ao usuário? Por que construímos projetos gráficos para livros sem que neles estejam delineados, de algum jeito, um esquema para que o usuário-leitor possa localizar rapidamente o que deseja usufruir?
			</p>

			<p>Isto já foi feito em alguns casos, gostemos das soluções, ou não. Índices remissivos são uma maneira de mapear termos ou tópicos em um documento estático. Podemos não gostar muito da forma que assumem; podemos odiar fazer sua construção (afinal, são realmente trabalhosos para serem feitos); podemos até reconhecer que será necessária mais uma outra interface para navegar nos próprios índices quando descobrimos que eles também serão infindáveis! Mas é necessário reconhecer que essa é uma alternativa.</p>

			<p><a href="javascript:openMeta('nietzsche');">Friedrich Nietzsche</a>, renomado filósofo alemão, escrevia seus textos em aforismos e os numerava. Sua forma de construir um texto, de certo modo, já previa uma sistematização dos elementos textuais e a recuperação de cada discussão, argumento, definição ou comentário feito de uma obra extensa que lhe tomava anos para ser redigida.</p>
			</p>
		</div>

		<div class="symbol"></div>

		<div class="corpus">

			<img src="https://www.ranoya.com/Assets/screenshots/screenshotgoogledocs.png" style="width: 100%; margin-bottom: 20px;">

			<p>O processador de textos online do Google começou, desde 2019, a delinear a estrutura de um documento para facilitar a navegação nele, o que é extremamente útil quanto redigimos um documento com várias dezenas de páginas. O indíce é feito automaticamente, mas pode ser modificado manualmente quando o usuário define uma marcação semântica, feita através da aplicação de um dos estilos disponíveis, como um título ou subtítulo. Infelizmente, nem todos sabem utilizar este tipo de recurso, e a indexação acaba sempre ficando bastante estranha.</p>

			<p>A solução dada pela gigante de Montain View também exemplifica como documentos passaram a ser entendidos como uma forma de interface para os dados utilizados por uma ferramenta. Neste caso, a questão é ainda mais profunda, porque interfere na forma como os dados são arquivados, isto é, na estrutura utilizada para organizar os dados e arquivá-los. Muitos desenvolvedores têm utilizado padrões como o XML (eXtensible Markup Language) como modelo/mecanismo para organizar os dados armazenados pelos softwares que criam, de forma que estes dados se tornem portáveis (possam ser lidos e utilizados por outros softwares e aplicações por adotarem uma convenção sintática na forma de armazená-los).</p>

			<p>Em 2004 escrevi um artigo discutindo estas propriedades das interfaces: <a href="javascript:openMeta('ranoya2004');" class="citacao">"As interfaces possuem propriedade não muito familiares ao campo da filosofia: portabilidade e compatibilidade. Além das possibilidades de associação e sobreposição [...] Estas propriedades de compatibilidade e portabilidade funcionam até o nível simbólico e conceitual da coisa."</a>. Apesar de muito da discussão ter ficado datada, sobretudo os exemplos, acredito que o seu cerne continue válido, e nele, já esboçava este entendimento de um documento como uma forma de encapsular dados mas preservá-los utilizando uma interface substituível.</p>


		</div>

		<div class="symbol"></div>

		<div class="corpus">

			<p>Pois muito bem, chegamos ao ponto: quando projetamos documentos, sejamos nós engenheiros do Google que têm que pensar em como serão apresentados e arquivados os documentos de uma nova ferramenta da empresa, sejamos nós apenas os construtores do código HTML de um website que apresentará um grande conjunto de informações, ou, enfim, de forma mais geral, aqueles que precisarão projetar informação sobre um documento qualquer, nosso trabalho é o do design de uma interface. Particularemente não vejo grande distinção entre o que chamamos de design de informação, e o que chamamos de design de interface. Também não acredito que o design de interfaces seja uma atividade tão profundamente especializada que um bom designer de informação não consiga trabalhá-la. Sem dúvida há especificidades relativas à mídia computacional, mas, convenhamos, qualquer mídia possui as suas, e não se pode trabalhar em nenhuma delas sem uma pesquisa e um conhecimento que depure suas características; nem mesmo o papel.</p>

			<p>Mas o design de interfaces pode ser considerado, isso sim, um acrescimo às questões presentes no problema de informação, e não somente para as mídias computacionais. Ele traz à tona problemas e questões que só se tornaram perceptíveis nos últimos 20 ou 30 anos (que é um prazo curtíssimo para a ciência e a produção de conhecimento) devido às demandas, usos e toda uma cultura resultante de um novo conjunto de mídias (ou artefatos).</p>

			<p>O mesmo pode ser dito sobre tantas outras ramificações e atividades especializadas do design que vêm ganhando destaque na contemporaneidade. O que, na década de 2000, ganhou força como "design de conteúdo" se referindo ao denso trabalho de criar elementos, alegorias, ilustrações, infografias, e inúmeros detalhes visuais para enriquecer e compor com um texto, apresentação, artigo de revista, jornal, ou mesmo um livro, hoje tem sido colocado como "User Experience Writing" (UX Writing), que, novamente, não é em nada diferente do design de informação realizado com a devida consideração e profundidade, mas que traz acrescimos valiosos oriundos de demandas e problemas vivenciados na atualidade, como a divisão do conteúdo em <i>chunks</i> para permitir que sejam melhor interfaceados, e a utilização de pesquisa com o usuário para identificar as melhores formas de conformar a informação.</p>

		</div>

		<div class="symbol"></div>

		<div class="corpus">

			<p>Gostaria também de relembrar, fazendo uma referência ao próprio início deste texto, que o estudo do receptor no processo de comunicação, como parte importante para se conformar um conteúdo elaborado para uma mídia com o intuito de tornar sua função mais eficaz, data da década de 1940. <a href="javascript:openMeta('lazarsfeld');">Paul Lazarsfeld</a> e <a href="javascript:openMeta('merton');">Robert Merton</a> foram pioneiros no campo, desenvolvendo pesquisa de opinião pública com receptores do rádio, sondando seus interesses e visões de mundo, para que fosse possível elaborar produtos midiáticos capazes de exercer maior convencimento, mudança de comportamento, estímulo de consumo, dentre outros efeitos psicológicos sobre as massas. E durante a década de 1990, parte dos Estudos Culturais foram batizados de Estudos de Recepção Midiática, influenciados pelo trabalho de sociólogos e antropólogos como <a href="javascript:openMeta('martin-barbero');">Jesús Martín-Barbero</a>, que aprofundaram a ênfase da pesquisa em comunicação sobre o receptor, e sobre todos os aspectos que o inscrevem em uma teia de relações de significação com as mídias, pessoas e artefatos que o cercam, e que precisariam ser melhor compreendidos para que um esforço comunicacional intencional produzisse qualquer efeito.</p>

			<p>Parece conveniente apontar que muito do que parece uma grande novidade hoje apenas coloca em prática questões já levantadas e profundamente discutidas no passado. Mesmo antes que o conceito de inferace pudesse ingressar nas discussões.</p>


		</div>

		<div id="bookendnav"></div>



		<div id="meta">

			<div id="ranoya2004">
				<div style="background-image:url(https://www.revistas.usp.br/public/journals/119/cover_issue_4279_pt_BR.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Tecnologias da desmaterialização<br>
				Guilherme Ranoya, Revista Novos Olhares, USP, 2004.<br>
				Citação da página 32.<br>
				<a href="https://www.revistas.usp.br/novosolhares/article/view/51392" target="_blank">Revista</a> | <a href="https://drive.google.com/file/d/0B8OiJVdB8D6wR2N4Zmdfb3RibTg/preview" target="_blank">Artigo</a><br>
			</div>

			<div id="nietzsche">
				<div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Nietzsche187a.jpg/250px-Nietzsche187a.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Friedrich Wilhelm Nietzsche<br>
				Alemanha, 1844 - 1900<br>
				Filósofo alemão, crítico da cultura, conhecido como pai do pensamento pós-estruturalista<br>
			</div>

			<div id="lazarsfeld">
				<div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Lazarsfeld1941_Lge.jpg/200px-Lazarsfeld1941_Lge.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Paul Lazarsfeld<br>
				Áustria, 1901 - 1976<br>
				Sociólogo, psicólogo, matemático e físico, foi diretor do Gabinete de Pesquisa Radiofónica na Universidade de Princeton, e posteriormente, professor da Columbia University<br>
			</div>

			<div id="merton">
				<div style="background-image:url(https://upload.wikimedia.org/wikipedia/en/thumb/0/08/Robert_K_Merton.jpg/220px-Robert_K_Merton.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Robert K. Merton<br>
				EUA, 1910 - 2003<br>
				Sociólogo, professor da Columbia University, responsável com Paul Lazarsfeld pelo departamento de pesquisa social aplicada e pelas primeiras teorias de comunicação de massa.<br>
			</div>

			<div id="martin-barbero">
				<div style="background-image:url(https://nomespesquisacomunicacao.com.br/wp-content/uploads/2018/05/jesus-martin-barbero_felipe.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Jesús Martín-Barbero<br>
				Espanha, 1937<br>
				Antropólogo, foi professor e diretor do departamento de comunicação da Universidad del Valle (Colômbia), e professor visitante em diversas universidade pelo mundo.<br>
			</div>

			<div id="designgenerativo">
				<div style="background-image:url(https://www.ranoya.com/Assets/coverimages/dgen114.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Design Generativo<br>
				dDesign, UFPE, 2018<br>
				Disciplina criada pelo Prof. Guilherme Ranoya no bacharelado de design da Universidade Federal de Pernambuco<br>
				<a target="_blank" href="http://www.ranoya.com/public/aulas/index.php<?php if ($_SESSION['theme']) {
																							echo '?theme=' . $_SESSION['theme'];
																						} ?>#designgenerativo">Detalhes</a><br>
			</div>

			<div id="futurododesign">
				<div style="background-image:url(https://www.ranoya.com/Assets/coverimages/futuro114.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Iniciativa Futuro do Design<br>
				dDesign, UFPE, 2017<br>
				Projeto desenvolvido pelo Prof. Guilherme Ranoya no bacharelado de design da Universidade Federal de Pernambuco<br>
				<a target="_blank" href="http://www.ranoya.com/public/futuro/index.php<?php if ($_SESSION['theme']) {
																							echo '?theme=' . $_SESSION['theme'];
																						} ?>#designgenerativo">Detalhes</a><br>
			</div>

		</div>
		<div id="metacompensate"></div>

		<div id="posicao"></div>
		<div id="posicaocompensate"></div>

</body>

</html>