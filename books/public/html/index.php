<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<?php
	require '../tecnologiascriativas/meta.php';
	?>
	<title>O código HTML | O tecido das tecnologias criativas</title>
	<meta property="og:title" content='O código HTML | O tecido das tecnologias criativas'>
	<meta name="description" content="O código HTML. Capítulo da versão digital do livro O tecido das tecnologias criativas">
	<meta property="og:description" content="O código HTML. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
	<script src="https://www.ranoya.com/Assets/JSLibs/AutoAce/multiAce.js"></script>
	<script src="https://datat.vercel.app/basics.js"></script>

</head>

<body>

	<div class="bigwhitesapce"></div>

	<div id="chapter">

		<h1 id="titulocapitulo">O código HTML</h1>

		<div class="corpus">

			<p>HTML é uma abreviação para linguagem de marcação hipertextual (<i>HyperText Markup Language</i>), uma especificação sintática para códigos computacionais criada, como um protocolo, para a definição de um tipo de documento - sim, originalmente, apenas um documento, como um arquivo de texto ou de uma planilha eletrônica - predominantemente textual, que pudesse incorporar ligações a outros documentos feitas a partir de termos, palavras-chave, ou até mesmo parágrafos inteiros do próprio documento (o tal hipertexto).</p>

			<p>Em sua definição original, o HTML não era uma forma de hipermídia (um suporte que pudesse incorporar todos os outros suportes), mas simplesmente uma ideia, inovadora, de que marcações em um documento pudessem nos encaminhar a outros documentos relacionados, conforme a <a href="https://www.w3.org/History/1989/proposal.html" class="citacao" target="_blank">proposição original de Tim Barnes-Lee ao CERN, em 1989</a>. A ampliação como suporte multimidiático veio muito tempo depois de sua implementação nos primeiros computadores conectados em rede, como uma teia de documentos que poderiam ser "navegados" à partir deles mesmos.</p>

			<p>O <a href="javascript:openMeta('cern');">CERN</a> (<i>Conseil Européen pour la Recherche Nucléaire</i>, hoje conhecido como <i>European Organization for Nuclear Research</i>) mantém uma emulação online de seu primeiro computador (um <a href="javascript:openMeta('NeXT');">NeXT</a>, dispositivo criado por <a href="javascript:openMeta('jobs');">Steve Jobs</a> em 1985 após ter deixado a <a href="javascript:openMeta('apple');">Apple</a>) conectado à internet e rodando o primeiro naveador web, de 1990. Nele, é possível experimentar <a href="javascript:openMeta('emulador');" class="citacao">como o código HTML funcionava em sua forma original</a>.</p>

			<p>Entender suas origens como uma solução para exibir arquivos de texto (informação em formato verbal) em dispositivos diferentes, acessados remotamente e organizados/relacionados como parte de uma árvore de informações, parece ser importante para compreender porquê a especificação adquiriu a forma e os mecanismos de funcionamento que possui hoje.</p>

		</div>

		<div class="symbol"></div>

		<svg class="illRight illHalf" viewBox="0 0 1008 1433" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M256 1049L512 1177V1433L256 1305V1049Z" class="illFillIt shadeslevel-1" />
			<path d="M512 1177L1008 901V1149L512 1433V1177Z" class="illFillIt shadeslevel-3" />
			<path d="M256 1049.5L752.5 774L1008 901.5L512 1177.5L256 1049.5Z" class="illFillIt shadeslevel-2" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M622 1033V1035H621.937C619.996 1065.55 573.757 1090 517 1090C460.243 1090 414.004 1065.55 412.063 1035H412V1033V1009H421.733C438.422 989.512 474.804 976 517 976C559.196 976 595.578 989.512 612.267 1009H622V1033Z" class="illFillIt shadeslevel-3" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M745 968C802.99 968 850 942.48 850 911V885H838.465C821.055 866.593 785.737 854 745 854C704.263 854 668.945 866.593 651.535 885H640V911C640 942.48 687.01 968 745 968Z" class="illFillIt shadeslevel-3" />
			<ellipse cx="517" cy="1009" rx="105" ry="57" class="illFillIt" />
			<ellipse cx="745" cy="887" rx="105" ry="57" class="illFillIt" />
			<path d="M0 628L256 756V1012L0 884V628Z" class="illFillIt shadeslevel-1" />
			<path d="M256 756L752 480V728L256 1012V756Z" class="illFillIt shadeslevel-3" />
			<path d="M0 628.5L496.5 353L752 480.5L256 756.5L0 628.5Z" class="illFillIt shadeslevel-2" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M366 612V614H365.937C363.996 644.554 317.757 669 261 669C204.243 669 158.004 644.554 156.063 614H156V612V588H165.733C182.422 568.512 218.804 555 261 555C303.196 555 339.578 568.512 356.267 588H366V612Z" class="illFillIt shadeslevel-3" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M489 547C546.99 547 594 521.48 594 490V464H582.465C565.055 445.593 529.737 433 489 433C448.263 433 412.945 445.593 395.535 464H384V490C384 521.48 431.01 547 489 547Z" class="illFillIt shadeslevel-3" />
			<ellipse cx="261" cy="588" rx="105" ry="57" class="illFillIt" />
			<ellipse cx="489" cy="466" rx="105" ry="57" class="illFillIt" />
			<path d="M1008 659L752 787V1043L1008 915V659Z" class="illFillIt shadeslevel-1" />
			<path d="M1008 384L752 512V768L1008 640V384Z" class="illFillIt shadeslevel-1" />
			<path d="M752 787L256 511V759L752 1043V787Z" class="illFillIt shadeslevel-3" />
			<path d="M1008 659.159L511.5 384L256 511.342L752 787L1008 659.159Z" class="illFillIt shadeslevel-2" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M642 643V645H642.063C644.004 675.554 690.243 700 747 700C803.757 700 849.996 675.554 851.937 645H852V643V619H842.267C825.578 599.512 789.196 586 747 586C704.804 586 668.422 599.512 651.733 619H642V643Z" class="illFillIt shadeslevel-3" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M519 578C461.01 578 414 552.48 414 521V495H425.535C442.945 476.593 478.263 464 519 464C559.737 464 595.055 476.593 612.465 495H624V521C624 552.48 576.99 578 519 578Z" class="illFillIt shadeslevel-3" />
			<ellipse rx="105" ry="57" transform="matrix(-1 0 0 1 747 619)" class="illFillIt" />
			<ellipse rx="105" ry="57" transform="matrix(-1 0 0 1 519 497)" class="illFillIt" />
			<path d="M256 275L512 403V659L256 531V275Z" class="illFillIt shadeslevel-1" />
			<path d="M512 403L1008 127V375L512 659V403Z" class="illFillIt shadeslevel-3" />
			<path d="M256 275.5L752.5 0L1008 127.5L512 403.5L256 275.5Z" class="illFillIt shadeslevel-2" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M622 259V261H621.937C619.996 291.554 573.757 316 517 316C460.243 316 414.004 291.554 412.063 261H412V259V235H421.733C438.422 215.512 474.804 202 517 202C559.196 202 595.578 215.512 612.267 235H622V259Z" class="illFillIt shadeslevel-3" />
			<path fill-rule="evenodd" clip-rule="evenodd" d="M745 194C802.99 194 850 168.48 850 137V111H838.465C821.055 92.5935 785.737 80 745 80C704.263 80 668.945 92.5935 651.535 111H640V137C640 168.48 687.01 194 745 194Z" class="illFillIt shadeslevel-3" />
			<ellipse cx="517" cy="235" rx="105" ry="57" class="illFillIt" />
			<ellipse cx="745" cy="113" rx="105" ry="57" class="illFillIt" />
		</svg>




		<p>O código HTML é o bloco elementar de construção daquilo que se vê em um navegador web. Mas não apenas dos navegadores: os livros digitais mostrados por leitores de e-book são, também, código HTML; e muitos vezes, aquilo que se vê na tela de aplicativos (mobile ou desktop) são construídos utilizando este mesmo código.</p>

		<p>Uma "página HTML", "documento HTML", ou simplesmente website, é uma construção feita, geralmente, a partir de três linguagens combinadas: o código HTML, abordado neste volume, que define a estrutura dos dados no documento e seu conteúdo; o <a href="../css">código CSS</a>, responsável pelas especificações visuais, o layout (organização e posicionamento dos elementos), a tipografia, as cores de cada componente, suas formas, contornos, e outras definições gráficas; e o <a href="../javascript">código Javascript</a>, responsável pela interação e os comportamentos do documento.</p>

		<p>Podemos dizer, então, que o HTML se tornou um dos materiais primordiais na construção de artefatos computacionais, e, por ser um dos mais simples para se trabalhar (o que não significa que não possa se tornar confuso e intrincado para ser usado), ele é, possivelmente, a porta de entrada para o entendidmento do código computacional como material construtivo para os diversos artefatos do universo digital. Sua aplicação é muito ampla e variada, e seu entendimento é quase obrigatório para qualquer pessoa que pretenda lidar com o projeto de artefatos computacionais.</p>

		<p>Uma observação importante se faz necessária neste ponto: o conhecimento profundo sobre os materiais, e sua tecnologia, não resultam diretamente na formação de um bom projetista - leia-se: o domínio técnico não faz o bom projetista. Contudo, um bom projetista entende perfeitamente que o conhecimento profundo sobre os materiais que ele manipula e adota em seus projetos é fundamental, principalmente para que respeite suas limitações, empregue bem aquilo que o material oferece de melhor, explore intencionalmente suas possibilidades, e, sobretudo, para que o material não se torne uma força de oposição ao projeto, como uma barreira ou dificuldade aos objetivos pretendidos, ou seja, para que ele use o material à favor do projeto.</p>



		<h2>Organização do material técnico</h2>

		<div class="corpus">

			<p>Este texto amplia o <a href="javascript:changesumarionstate();" class="citacao"><b>conteúdo do "livro"</b></a> com todo o material técnico relativo ao código HTML. Este conteúdo está organizado de acordo com os próprios elementos do código HTML:</p>

			<p>Em <a href="javascript:changesumarionstate();" class="citacao"><b>Estrutura</b></a> você encontrará os textos que explicam como o código é escrito, sua sintaxe, propriedades, e os elementos do tronco comum à todo e qualquer documento HTML; no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>Head</b></a> se concentram os elementos que constroem o cabeçalho do código e definem toda meta-informação presente nele; em <a href="javascript:changesumarionstate();" class="citacao"><b>Inline/Conteúdo</b></a> estão os elementos básicos que incluem conteúdos (textuais e imagéticos) no documento HTML; em <a href="javascript:changesumarionstate();" class="citacao"><b>Block</b></a> os elementos que estruturam blocos de informação e estruturam os dados dentro do documento; <a href="javascript:changesumarionstate();" class="citacao"><b>Formulários</b></a> contém os elementos que constrõe os campos de entrada de dados e preenchimento de informações para encaminhamento à outros documentos, e, por fim, em <a href="javascript:changesumarionstate();" class="citacao"><b>Todas as Tags</b></a> estão todos estes elementos do código HTML organizados por ordem alfabética.</p>

			<p>Na sequência, você encontrará as demais linguagens de programação incluídas nesta obra no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>+Linguagens</b></a>, incluíndo o material relativo ao <a href="../css">código CSS</a>, responsável pelos aspectos visuais, layout, tipografia, etc. do documento web.</p>

			<p>Por se tratar de um material digital e interativo, que, ao contrário do papel, pode ser atualizado, é possível solicitar que procedimentos, técnicas ou especificações sejam detalhadas ou incluídas aos volumes técnicos. Isso pode ser feito pelo formulário disponível no capítulo <a href="javascript:changesumarionstate();" class="citacao"><b>Solicitações</b></a>, e são produzidos/incluídos conforme os leitores/usuários apresentam necessidades comuns, que possam ser aqui ilustradas.</p>

			<p>Todos os exemplos contidos no material são interativos e permitem que experimentações/modificações sejam realizadas sobre eles no próprio documento.</p>

		</div>

		<a name="tools" class="exclude" style="position: relative; top: -30px;"></a>

		<h2>Ferramentas necessárias</h2>

		<div class="corpus">

			<p>O código HTML pode ser construído e executado sem a necessidade de ferramentas específicas para seu desenvolvimento. O código em sí é um arquivo de texto puro (UTF-8) que pode ser elaborado usando um editor como o Notepad (do Windows), o Text Editor (do MacOS ou Linux), ou mesmo através de um terminal (no Linux, MacOs, Windows, MS-Dos, ou qualquer outro sistema operacional). Há, contudo, ferramentas de produtividade destinadas a agilizar/facilitar seu desenvolvimento que incluem verificação de erros no código (Linting), marcação de sintaxe (Highlight), e outros recursos bastante úteis para o programador. Aqui está uma relação das ferramentas mais populares para edição de código:</p>

			<p id="codeeditorsblock"></p>

			<p>Outras opções, atualmente, são a edição do código HTML através de ferramentas disponíveis dentro do próprio navegador. Para isto, contamos com ambientes integrados de desenvolvimento (IDEs) inteiramente online, e ferramentas de experimentação - chamadas de <i>Live Code</i> - que interpretam e executam o código em tempo-real, conforme ele vai sendo digitado. Oferecemos aqui, também, uma relação destas opções:</p>

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
  &lt;/head&gt;

  &lt;body&gt;
    Hello World!
  &lt;/body&gt;
&lt;/html&gt;
</pre>
		</div>

		<hr style="width: 100%; clear: both; border: 0;">
		</hr>
		<h2>Execução e publicação</h2>

		<div class="corpus">

			<p>O código HTML é executado, normalmente, dentro dos navegadores web. Para executá-lo, portanto, basta abrir seu arquivo .HTML com o navegador de sua preferência. Códigos mais complexos que envolvam integração com sistemas e bancos de dados precisarão ser acessados através de um servidor web, instalado localmente no computador do desenvolvedor, ou online, em um serviço de hospedagem web. As ferramentas de produtividade mais sofisticadas costumam contar com instâncias de servidores web locais para realização de testes nos códigos em desenvolvimento, e ferramentas de upload/deploy do código diretamente para os serviços contratados de hospedagem.</p>

			<p>A construção deste tipo de programação é normalmente utilizada para produção de websites. Para um website funcionar na rede - o que costuma ser chamado de ambiente de produção - ele precisará, obrigatoriamente, ficar disponível permanentemente através de um servidor web fornecido por uma empresa de hospedagem de websites. Há incontáveis opções, e seus preços variam drasticamente em função dos produtos e serviços adicionais inclusos na oferta de cada prestador de serviço.</p>

			<p>Um domínio (o www.meusite.com.br) também precisará ser adquirido. Esta aquisição pode ser feita, no Brasil, através do <a href="https://registro.br" target="_blank">registro.br</a>, website do <a href="https://nic.br" target="_blank">Núcleo de Informação e Coordenação do .BR</a>, e no exterior, através das agências reguladoras de cada pais ou de empresas autorizadas a intermediar seu registro. Após adquirido, a configuração ligando o domíninio ao servidor precisará ser feita nas duas pontas, seguindo instruções fornecidas por cada uma das entidades.</p>
		</div>


		<div id="bookendnav"></div>

		<div id="meta">

			<div id="jobs">
				<div style="background-image:url('https://t.ctcdn.com.br/s2JXi8cJqXFQE7SAkzV2IBz8AKw=/400x400/smart/filters:format(webp)/i490761.jpeg'); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Steve Jobs<br>
				EUA, 1955 - 2011<br>
				Um dos fundadores da Apple Computer e grande responsável pelas transformações revolucionárias na computação pessoal entre 1980 e 2010.<br>
			</div>

			<div id="NeXT">
				<div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/NeXT_logo.svg/1200px-NeXT_logo.svg.png); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				NeXT Computer<br>
				EUA, 1985<br>
				Empresa criada por Steve Jobs após seu afastamento da Apple Computer, cujo sistema operacional foi a base para a criação do MacOS X com seu retorno.<br>
			</div>

			<div id="apple">
				<div style="background-image:url(data:image/png;base64,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); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Apple Computer / Apple Inc.<br>
				EUA, 1976<br>
				Fundada por Steve Jobs e Steve Wozniak, é uma das empresas responsáveis pela revolução na computação pessoal.<br>
			</div>

			<div id="cern">
				<div style="background-image:url(https://i0.wp.com/www.hisour.com/wp-content/uploads/2019/04/ATLAS-experiment-CERN-Geneva-Switzerland.jpg?fit=960%2C640&ssl=1); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
				Organização Europeia para a Pesquisa Nuclear<br>
				Suiça<br>
				Renomado centro de pesquisa, mais conhecido por abrigar o Grande Colisor de Hádrons, usado na pesquisa da "partícula de deus" (bóson de Higgs).<br>
			</div>

			<div id="emulador">
				<div style="background-image:url(https://upload.wikimedia.org/wikipedia/en/1/1d/NeXTSTEP_desktop.png); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div><br>
				Acesse o emulador através <a href="https://worldwideweb.cern.ch/browser">deste link</a>.<br>
				Abra a página web de sua preferência através das opções do menu: "Document" > "Open from full document reference".
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