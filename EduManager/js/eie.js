/*
        EIE VERSÃO 0.1 - 15/05/2018
				
				Parâmetros de URL:
				* cat - categoria: "bibliografia", "bookmarks", "alemdosandbox", "posts", etc.
				filter - filtros separados por virgula ou espaço: "design, jogos"
				from - paginação: item inicial da página, ex. 25
				to - paginação: item final da página, ex 60
				debug - modo de debug: true ou false
				* render - tipo de população de dados: lista,
				* load - que tipo de carregamento: total, multiple
				manual - ativação manual das funções: true ou false
				
				
				Variáveis internas:
				EIEquerysearch[EIEqueue][critério] - json enviado para a base de dados
				EIErendertype[EIEqueue] - tipo de população de dados: videogrid, lista, listapublica
				EIEloadtype[EIEqueue] - que tipo de carregamento: total, byscroll, multiple
				EIEcomponente[EIEqueue] - em que div será populado
				EIEautopop[EIEqueue] - população de dados automática após o carregamento
				EIEmanual - ativação manual das funções: true ou false (importante principalmente para publicação multipla)
				
				
				
				
				Implementação em sites
				Ex.
				AddQuery({cat: 'bibliografia', render: 'lista', filter: 'meusartigos,pesquisa,estetica', divtarget: '#minhaspublicacoes'});
				AddQuery({cat: 'bibliografia', render: 'listapublica', filter: 'pesquisa', divtarget: '#minhabibliografia'});
				AddQuery({cat: 'posts', render: 'lista', filter: 'pesquisa,estetica', divtarget: '#meusposts'});
				AddQuery({cat: 'artefatos', render: 'videogrid', filter: 'creative', divtarget: '#meusvideos', load: "byscroll"});
				ajaxexchange();
				
        */


console.log("*** EIE Versao 0.1 Carregado");

// MATRIZ DE CRITÉRIOS E ATRIBUTOS
EIEquerysearch = new Array();
EIEquerysearch[0] = new Object();

// GRABER DE PARÂMETROS DE URL
$.EIEparametros = function (name) {
	var EIEresults = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	if (EIEresults == null) {
		return null;
	} else {
		return EIEresults[1] || 0;
	}
}



// LINK PARA O SERVIÇO DO GOOGLE DOCS
//EIEserviceURL = 'https://script.google.com/macros/s/AKfycbyGNpGNd_rEO79y2a_I62AvCp5jcFCLyb7h4fGCvzDr9BLf1rk/exec';

EIEserviceURL = 'https://www.ranoya.com/EduManager/sqlquery/index.php';

// VARIÁVEIS INTERNAS
var EIEscrollav = true;
var EIEqueue = 0;
var EIEaddqueuecount = 0;
var EIEautopop = new Array();
EIEautopop[0] = true;
var EIEcomponente = new Array();
EIEcomponente[0] = "#minharesposta";
var EIEactualposition = 0;
var EIEpopula = "";
var EIEmanual;
var EIErendertype = new Array();
var EIEloadtype = new Array();
var EIEsearchin = new Array();
var EIEsearchwhat = new Array();
var pairingcontent = new Array();
var EIEzerando = true;

if ($.EIEparametros('render')) {
	EIErendertype[EIEqueue] = $.EIEparametros('render');
} else {
	if (!EIErendertype[EIEqueue]) {
		EIErendertype[EIEqueue] = "normal";
	}
}
if ($.EIEparametros('load')) {
	EIEloadtype[EIEqueue] = $.EIEparametros('load');
} else {
	if (!EIEloadtype[EIEqueue]) {
		EIEloadtype[EIEqueue] = "total";
	}
}
if ($.EIEparametros('manual')) {
	EIEmanual = true;
} else {
	EIEmanual = false;
}
if ($.EIEparametros('cat')) {
	EIEquerysearch[EIEqueue]['cat'] = $.EIEparametros('cat');
}
if ($.EIEparametros('from')) {
	EIEquerysearch[EIEqueue]['from'] = eval($.EIEparametros('from'));
}
if ($.EIEparametros('to')) {
	EIEquerysearch[EIEqueue]['to'] = eval($.EIEparametros('to'));
}
if ($.EIEparametros('filter')) {
	EIEquerysearch[EIEqueue]['filter'] = $.EIEparametros('filter');
}
if ($.EIEparametros('tgt')) {
	EIEquerysearch[EIEqueue]['tgt'] = $.EIEparametros('tgt');
}


// RENDERS: FUNÇÃO QUE CRIA O HTML DO CONTEÚDO (INCLUIR FORMATOS DIFERENTES PARA CADA CATEGORIA E CADA OUTPUT DIFERENTE)    
function EIEpopuladados(json) {



	console.log("Função EIEpopuladados ativada");



	// MONTAGEM DOS BLOCOS DE DOCUMENTO


	if (EIEquerysearch[EIEqueue]['cat'] == "proximaoferta") {

		var linha = 0;
		EIEpopula = json['oferta0'];

	}

	if (EIEquerysearch[EIEqueue]['cat'] == "vagas") {

		var linha = 0;
		EIEpopula = json['vagas0'];

	}

	if (EIEquerysearch[EIEqueue]['cat'] == "formato") {

		var linha = 0;
		EIEpopula = json['formato0'];

	}

	if (EIEquerysearch[EIEqueue]['cat'] == "FAQ") {

		var linha = 0;
		EIEpopula = "";

		while (json['index' + linha]) {

			EIEpopula = EIEpopula + "<span class='faqpergunta'>" + json['pergunta' + linha] + "</span><br>";
			EIEpopula = EIEpopula + "<span class='faqresposta'>" + json['resposta' + linha] + "</span><br><br>";
			linha++;

		}

	}


	if (EIEquerysearch[EIEqueue]['cat'] == "changelog") {

		conteudomudanca = "";
		conteudoproblema = "";
		conteudoproblemapassa = "";
		conteudodata = "";
		var linha = 0;
		var linhaprint = 0;
		EIEpopula = "<table class='timeline'>";
		while (json['index' + linha]) {

			conteudomudanca = "";
			conteudoproblema = "";
			conteudodata = "";
			linhaprint = linha;

			while (json['semestre' + linha] == json['semestre' + linhaprint]) {
				conteudodata = json['oferta' + linha];
				conteudomudanca = conteudomudanca + json['prognostico' + linha] + "<br>";
				conteudoproblema = conteudoproblema + json['formulacao' + linha] + "<br>";
				linha++;
			}


			EIEpopula = EIEpopula + "<tr>";
			EIEpopula = EIEpopula + "<td class='tempo'>" + conteudodata + "</td>";
			EIEpopula = EIEpopula + "<td><p>";

			if (conteudoproblemapassa != "") {
				EIEpopula = EIEpopula + "<b>Questões identificadas</b><br>" + conteudoproblemapassa + "<br>";
			}

			EIEpopula = EIEpopula + "<b>Mudanças propostas</b><br>" + conteudomudanca;
			EIEpopula = EIEpopula + "<br></p></td></tr>";
			conteudoproblemapassa = conteudoproblema;
		}

		EIEpopula = EIEpopula + "<tr><td class='tempo'>" + json['semestre' + (linha - 1)] + "</td>";
		EIEpopula = EIEpopula + "<td><p><b>Questões identificadas</b><br>" + conteudoproblemapassa + "<br></p></td></tr>";
		EIEpopula = EIEpopula + "<tr><td><img src='https://www.ranoya.com/Assets/Diagramas/timelinecap.png' style='margin-left: 2px;'></td><td>&nbsp;</td></tr></table>";


	}

	if (EIEquerysearch[EIEqueue]['cat'] == "projetos") {

		conteudomudanca = "";
		conteudodata = "";
		var linha = 0;
		var linhaprint = 0;

		EIEpopula = "<table class='timeline'>";
		while (json['index' + linha]) {

			conteudomudanca = "<table>";
			conteudodata = "";
			linhaprint = linha;

			while (json['oferta' + linha] == json['oferta' + linhaprint]) {
				conteudodata = json['oferta' + linha];
				conteudomudanca += "<tr>";

				if (json['resolvido' + linha] != "") {
					conteudomudanca += "<td class='miniiconspace' style='vertical-align: top'><span class='miniicon'>&check;</span></td>";
				}

				if (json['fazendo' + linha] != "") {
					conteudomudanca += "<td class='miniiconspace' style='vertical-align: top'><span class='miniicon'>&#10226;</span></td>";
				}

				if (json['pausado' + linha] != "") {
					conteudomudanca += "<td class='miniiconspace' style='vertical-align: top'><span class='miniicon'>&#8811;</span></td>";
				}

				if (json['cancelado' + linha] != "") {
					conteudomudanca += "<td class='miniiconspace' style='vertical-align: top'><span class='miniicon'>&#9724;</span></td>";
				}

				conteudomudanca = conteudomudanca + "<td style='vertical-align: top'>" + json['atividades' + linha] + "</td>";

				conteudomudanca += "</tr>";
				linha++;
			}

			conteudomudanca += "</table>";


			EIEpopula = EIEpopula + "<tr>";
			EIEpopula = EIEpopula + "<td class='tempo'>" + conteudodata + "</td>";
			EIEpopula = EIEpopula + "<td>";
			EIEpopula = EIEpopula + conteudomudanca;
			EIEpopula = EIEpopula + "<br></td></tr>";

		}

		EIEpopula = EIEpopula + "<tr><td><img src='https://www.ranoya.com/Assets/Diagramas/timelinecap.png' style='margin-left: 2px;'></td><td>&nbsp;</td></tr></table>";



	}

	if (EIEquerysearch[EIEqueue]['cat'] == "calendario" || EIEquerysearch[EIEqueue]['cat'] == "proximaaula" || EIEquerysearch[EIEqueue]['cat'] == "ultimaaula") {

		EIEpopula = "";
		var linha = 0;

		if (EIEquerysearch[EIEqueue]['cat'] == "calendario") {
			EIEpopula += "<div class='eieblocodiasemana'><table><tr><td class='eiecalendarpintado'></td><td class='eiecalendarseparador'></td>";

			EIEpopula += "<td class='eiecalendarsemananum eiecalendarpintado'></td><td class='eiecalendartipo'></td><td class='eiecalendardia'>";

			if (json['SEGM' + linha] != "" && json['SEGM' + linha] != undefined) {
				EIEpopula += "Segunda / Manhã";
			}

			if (json['SEGT' + linha] != "" && json['SEGT' + linha] != undefined) {
				EIEpopula += "Segunda / Tarde";
			}

			if (json['TERM' + linha] != "" && json['TERM' + linha] != undefined) {
				EIEpopula += "Terça / Manhã";
			}

			if (json['TERT' + linha] != "" && json['TERT' + linha] != undefined) {
				EIEpopula += "Terça / Tarde";
			}

			if (json['QUAM' + linha] != "" && json['QUAM' + linha] != undefined) {
				EIEpopula += "Quarta / Manhã";
			}

			if (json['QUAT' + linha] != "" && json['QUAT' + linha] != undefined) {
				EIEpopula += "Quarta / Tarde";
			}

			if (json['QUIM' + linha] != "" && json['QUIM' + linha] != undefined) {
				EIEpopula += "Quinta / Manhã";
			}

			if (json['QUIT' + linha] != "" && json['QUIT' + linha] != undefined) {
				EIEpopula += "Quinta / Tarde";
			}

			if (json['SEXM' + linha] != "" && json['SEXM' + linha] != undefined) {
				EIEpopula += "Sexta / Manhã";
			}

			if (json['SEXT' + linha] != "" && json['SEXT' + linha] != undefined) {
				EIEpopula += "Sexta / Tarde";
			}

			EIEpopula += "</td></tr></table></div>";

		}


		while (json['index' + linha]) {

			semanacriada = false;
			EIEpopula += "<div class='eieblococalendar'>";
			EIEpopula += "<table>";

			quantrowspresencial = 0;
			quantrowsorientacao = 0;
			quantrows = 0;
			quantrowsmonitoria = 0;

			eiehoje = new Date();


			// row para data da semana
			if ((json['sincrono' + linha] != "" && json['sincrono' + linha] != undefined) || (json['assincrono' + linha] != "" && json['assincrono' + linha] != undefined)) {
				quantrows++;
			}

			// row para atividades presenciais
			if (json['conteudopresencial' + linha] != "" && json['conteudopresencial' + linha] != undefined) {
				quantrowspresencial = 2;
			}

			// row para orientacoes
			if (json['mentoria' + linha] != "" && json['mentoria' + linha] != undefined) {
				quantrowsorientacao = 2;
			}

			// row para conteúdo síncrono
			if (json['sincrono' + linha] != "" && json['sincrono' + linha] != undefined) {
				quantrows++;
			}

			// row para conteúdo assíncrono
			if (json['assincrono' + linha] != "" && json['assincrono' + linha] != undefined) {
				quantrows++;
			}


			// row para atividade de aplicação
			if (json['aplicacao' + linha] != "" && json['aplicacao' + linha] != undefined) {
				quantrows++;
			}

			// row para monitoria (data e atividade)
			if (json['monitoria' + linha] != "" && json['monitoria' + linha] != undefined) {
				quantrowsmonitoria = 2

			}


			// cria row das atividades do professor
			if (quantrowspresencial > 0) {
				EIEpopula += "<tr>";
				EIEpopula += "<td rowspan=" + quantrowspresencial;
				datapresencial = new Date(json['diapresencial' + linha]);
				if (eiehoje > datapresencial) {
					EIEpopula += " class='eiecalendarpintado'>&nbsp;</td>";
				} else {
					EIEpopula += " class='eiecalendarnaopintado'>&nbsp;</td>";
				}

				if (!semanacriada) {
					semanacriada = true;
					// cria row separador de semana
					if (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao > 0) {

						EIEpopula += "<td class='eiecalendarseparador' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + "></td>";

						EIEpopula += "<td class='eiecalendarsemananum' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + ">" + json['semana' + linha] + "</td>";

					}
				}

			}



			if (quantrowspresencial > 0 && json['conteudopresencial' + linha] != "" && json['conteudopresencial' + linha] != undefined) {
				dataimpressapresencial = new Date(json['readabledia' + linha]);
				dataimpressaprofdiapresencial = dataimpressapresencial.getDate() + "/" + (dataimpressapresencial.getMonth() + 1) + "/" + dataimpressapresencial.getFullYear() + " " + json['readablehorapresencial' + linha] + "h";
				EIEpopula += "<td>&nbsp;</td><td class='eiecalendardia'>" + dataimpressaprofdiapresencial + "</td></tr>";

				EIEpopula += "<tr><td class='eiecalendartipo'>" + json['saladeaula' + linha] + "</td><td class='eiecalendaratividade'>";

				EIEpopula += json['conteudopresencial' + linha] + "</td></tr>";

			}

			// cria row das atividades de orientação e mentoria
			if (quantrowsorientacao > 0 && json['mentoria' + linha] != "" && json['mentoria' + linha] != undefined) {

				EIEpopula += "<tr>";
				EIEpopula += "<td rowspan=" + quantrowsmonitoria;
				dataatividade = new Date(json['diamentoria' + linha]);
				if (eiehoje > dataatividade) {
					EIEpopula += " class='eiecalendarpintado'>&nbsp;</td>";
				} else {
					EIEpopula += " class='eiecalendarnaopintado'>&nbsp;</td>";
				}

				if (!semanacriada) {
					semanacriada = true;
					// cria row separador de semana
					if (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao > 0) {

						EIEpopula += "<td class='eiecalendarseparador' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + "></td>";

						EIEpopula += "<td class='eiecalendarsemananum' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + ">" + json['semana' + linha] + "</td>";

					}
				}

				dataimpressamentoria = new Date(json['readablediamentoria' + linha]);
				dataimpressaprofmentorial = dataimpressamentoria.getDate() + "/" + (dataimpressamentoria.getMonth() + 1) + "/" + dataimpressamentoria.getFullYear() + " " + json['readablehoramentoria' + linha] + "h";
				EIEpopula += "<td>&nbsp;</td><td class='eiecalendardia'>" + dataimpressaprofmentorial + "</td></tr>";

				EIEpopula += "<tr><td class='eiecalendartipo'>" + json['tipologiamentoria' + linha] + "</td><td class='eiecalendaratividade'>";

				if (json['linkmentorial' + linha] != "" && json['linkmentorial' + linha] != undefined) {
					EIEpopula += "<a href='" + json['linkmentoria' + linha] + "' class='eiecalendarlinkatividade'>" + json['mentoria' + linha] + "</a></td></tr>";
				} else {
					EIEpopula += json['mentoria' + linha] + "</td></tr>";
				}

			}

			// cria row das atividades remotas  do professor
			if (quantrows > 0) {
				EIEpopula += "<tr class='teste'>";
				EIEpopula += "<td rowspan=" + quantrows;
				dataatividade = new Date(json['dia' + linha]);
				if (eiehoje > dataatividade) {
					EIEpopula += " class='eiecalendarpintado'>&nbsp;</td>";
				} else {
					EIEpopula += " class='eiecalendarnaopintado'>&nbsp;</td>";
				}

				if (!semanacriada) {
					semanacriada = true;
					// cria row separador de semana
					if (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao > 0) {

						EIEpopula += "<td class='eiecalendarseparador' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + "></td>";

						EIEpopula += "<td class='eiecalendarsemananum' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + ">" + json['semana' + linha] + "</td>";

					}
				}

				dataimpressaprof = new Date(json['readabledia' + linha]);
				dataimpressaprofdia = dataimpressaprof.getDate() + "/" + (dataimpressaprof.getMonth() + 1) + "/" + dataimpressaprof.getFullYear() + " " + json['readablehora' + linha] + "h";
				EIEpopula += "<td>&nbsp;</td><td class='eiecalendardia'>" + dataimpressaprofdia + "</td></tr>";

				// cria row das atividades síncronas
				if (json['sincrono' + linha] != "" && json['sincrono' + linha] != undefined) {
					EIEpopula += "<tr><td class='eiecalendartipo'>Síncrono</td><td class='eiecalendaratividade'>";

					if (json['linksincrono' + linha] != "" && json['linksincrono' + linha] != undefined) {
						EIEpopula += "<a href='" + json['linksincrono' + linha] + "' class='eiecalendarlinkatividade'>" + json['sincrono' + linha] + "</a></td></tr>";
					} else {
						EIEpopula += json['sincrono' + linha] + "</td></tr>";
					}
				}

				// cria row das atividades assíncronas
				if (json['assincrono' + linha] != "" && json['assincrono' + linha] != undefined) {
					EIEpopula += "<tr><td class='eiecalendartipo'>Assíncrono</td><td class='eiecalendaratividade'>";

					if (json['linkassincrono' + linha] != "" && json['linkassincrono' + linha] != undefined) {
						EIEpopula += "<a href='" + json['linkassincrono' + linha] + "' class='eiecalendarlinkatividade'>" + json['assincrono' + linha] + "</a></td></tr>";
					} else {
						EIEpopula += json['assincrono' + linha] + "</td></tr>";
					}
				}
			}


			// cria row das aplicações e exercícios
			if (json['aplicacao' + linha] != "" && json['aplicacao' + linha] != undefined) {

				if (!semanacriada) {
					semanacriada = true;
					// cria row separador de semana
					if (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao > 0) {

						EIEpopula += "<td class='eiecalendarseparador' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + "></td>";

						EIEpopula += "<td class='eiecalendarsemananum' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + ">" + json['semana' + linha] + "</td>";
					}
				}

				EIEpopula += "<tr><td class='eiecalendartipo'>Atividade</td><td class='eiecalendaratividade'>";

				if (json['linkaplicacao' + linha] != "" && json['linkaplicacao' + linha] != undefined) {
					EIEpopula += "<a href='" + json['linkaplicacao' + linha] + "' class='eiecalendarlinkatividade'>" + json['aplicacao' + linha] + "</a></td></tr>";
				} else {
					EIEpopula += json['aplicacao' + linha] + "</td></tr>";
				}
			}

			// cria row das atividades do monitor
			if (quantrowsmonitoria > 0) {

				if (!semanacriada) {
					semanacriada = true;
					// cria row separador de semana
					if (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao > 0) {

						EIEpopula += "<td class='eiecalendarseparador' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + "></td>";

						EIEpopula += "<td class='eiecalendarsemananum' rowspan=" + (quantrows + quantrowsmonitoria + quantrowspresencial + quantrowsorientacao) + ">" + json['semana' + linha] + "</td>";

					}
				}

				EIEpopula += "<tr>";
				EIEpopula += "<td rowspan=" + quantrowsmonitoria;
				dataatividade = new Date(json['diamonitoria' + linha]);
				if (eiehoje > dataatividade) {
					EIEpopula += " class='eiecalendarpintado'>&nbsp;</td>";
				} else {
					EIEpopula += " class='eiecalendarnaopintado'>&nbsp;</td>";
				}


				dataimpressaprof = new Date(json['readablediamonitoria' + linha]);
				dataimpressaprofdia = dataimpressaprof.getDate() + "/" + (dataimpressaprof.getMonth() + 1) + "/" + dataimpressaprof.getFullYear() + " " + json['readablemonitoriahora' + linha] + "h";
				EIEpopula += "<td>&nbsp;</td><td class='eiecalendardia'>" + dataimpressaprofdia + "</td></tr>";

				if (json['monitoria' + linha] != "" && json['monitoria' + linha] != undefined) {
					EIEpopula += "<tr><td class='eiecalendartipo'>Monitoria</td><td class='eiecalendaratividade'>";

					if (json['linkmonitoria' + linha] != "" && json['linkmonitoria' + linha] != undefined) {
						EIEpopula += "<a href='" + json['linkamonitoria' + linha] + "' class='eiecalendarlinkatividade'>" + json['monitoria' + linha] + "</a></td></tr>";
					} else {
						EIEpopula += json['monitoria' + linha] + "</td></tr>";
					}
				}

			}


			EIEpopula += "</table>";
			EIEpopula += "</div>";

			linha++;

		}

	}



	if (EIEquerysearch[EIEqueue]['cat'] == "trabalhosreferencia") {

		EIEpopula = "";
		var linha = 0;

		while (json['index' + linha]) {

			EIEpopula += "<h5>" + json['autor' + linha] + "</h5><a href='" + json['link' + linha] + "' class='links'>" + json['titulo' + linha] + ", " + json['semestre' + linha] + "</a><br><br>";
			linha++;

		}

	}


	if (EIEquerysearch[EIEqueue]['cat'] == "atividades") {

		EIEpopula = "";
		var linha = 0;
		var atvatual = "";
		var etapaatual = 1;



		while (json['index' + linha]) {

			if (atvatual != json['avaliacao' + linha]) {
				EIEpopula += "<hr style='border: 0; width: 100%; clear: both; margin-bottom: 20px;'></hr>";

				EIEpopula += "<span class='mininumberinvert' style='float: left;'>" + json['etapa' + linha] + "</span>";
				EIEpopula += "<span class='mininumberinvert' style='width: 10%; float: left; margin-right: 15px;'>" + json['dia' + linha] + "</span>";
				EIEpopula += "<h3 style='float: left; padding-top: 2px; margin-bottom: 12px; width: 50%;'>" + json['avaliacao' + linha] + "</h3>"
				EIEpopula += "<hr style='border: 0; width: 100%; clear: both; margin-bottom: 10px;'></hr>";
				EIEpopula += "<p style='margin-bottom: 10px;'>" + json['descricao' + linha] + "</p>";
				EIEpopula += "<div class='halfblockleft'>";
				EIEpopula += "<h4>Aprendizado tácito</h4>";
				EIEpopula += "<h5>" + json['justificativa' + linha] + "</h5>";
				EIEpopula += "</div>";
				EIEpopula += "<div class='halfblockright'>";
				EIEpopula += "<h4>Competências trabalhadas</h4>";
				EIEpopula += "<h5>" + json['competencias' + linha] + "</h5>";
				EIEpopula += "</div>";

				EIEpopula += "<hr style='border: 0; width: 100%; clear: both;'></hr>";


				EIEpopula += "<br>";
				EIEpopula += "<h3>Critérios de avaliação</h3>";
				atvatual = json['avaliacao' + linha];
			}



			if (eval(json['notamaxima' + linha]) != 0) {
				EIEpopula += "<hr style='border-top: 1px solid var(--darker-color, #42008a); width: 100%; clear: both;'></hr>";
				EIEpopula += "<p style='float: right; width: 15%; text-align: right; font-weight: bold;'>" + json['notamaxima' + linha] + "</p>";
			}
			EIEpopula += "<p class='listatitulopublico' style='float: left; width: 80%;'>" + json['criterios' + linha] + "</p>";



			if (json['etapa' + (linha + 1)] != json['etapa' + (linha)]) {
				EIEpopula += "<hr style='border-top: 1px solid var(--darker-color, #42008a); width: 100%; clear: both;'></hr>";
				EIEpopula += "<br><br>";

			}






			linha++;


		}



	}


	if (EIEquerysearch[EIEqueue]['cat'] == "notas") {

		var linha = 0;
		var linhaprint = 0;
		EIEpopula = "";

		while (json['index' + linha]) {

			linhaprint = linha;

			EIEpopula += "<h1>" + json['pairing' + linha] + " / " + json['semestre' + linha] + "</h1>";

			while (json['pairing' + linha] == json['pairing' + linhaprint]) {

				EIEpopula += "<div class='alunolinha'><div class='alunonome'>" + json['aluno' + linha] + "</div><div class='alunonota'>" + json['final' + linha] + "</div></div>";

				linha++;


			}


		}



	}




	/*
	// Se estiver no modo de Pairing
	if (EIErendertype[EIEqueue] == "pairing") {

		var pairingcontent = new Array();
		var linha = 0;

		if (EIEquerysearch[EIEqueue]['cat'] == "entregas") {

			while(json['index'+linha]) {

			pairingcontent[linha] = "<a href='" + json['link'+linha] + "' class='links'>" + json['dia'+linha] + "</a>";

			linha++;

			}

		}


	}
	*/



	$("#carregando").css("display", "none");

	// CASO SEJA A PRIMEIRA VEZ QUE EIEpopula DADOS, JÁ APRESENTA OS CONTEÚDOS NO DIV
	//if (EIEautopop[EIEqueue]) {  
	//console.log("Carregamento automatico ativado");

	EIEautopop[EIEqueue] = false;
	EIE_exibedados(json);

	//}

}

// FUNÇÃO QUE EXIBE OS DADOS NO DIV (INCLUIR UM IF QUE VERIFIQUE SE SÃO DADOS PAGINADOS OU NÃO PARA NÃO RECARREGAR O LOADING)
function EIE_exibedados(json) {

	$("#carregando").css("display", "initial");


	if (EIErendertype[EIEqueue] == "pairing") {

		if (!EIEquerysearch[EIEqueue]['tgt']) {



			var linha = 0;

			while (json['index' + linha]) {

				$("#" + json['pairing' + linha]).append(pairingcontent[linha]);
				$("#" + json['pairing' + linha] + "avaliacao").append(json['avaliacao' + linha]);
				$("#" + json['pairing' + linha] + "descricao").append(json['descricao' + linha]);
				$("#" + json['pairing' + linha] + "instrucao").append(json['instrucao' + linha]);
				$("#" + json['pairing' + linha] + "coment").append(json['coment' + linha]);
				$("#" + json['pairing' + linha] + "bloco").append(json['bloco' + linha]);
				$("#" + json['pairing' + linha] + "fase").append(json['fase' + linha]);
				$("#" + json['pairing' + linha] + "siglatrabalho").append(json['siglatrabalho' + linha]);
				$("#" + json['pairing' + linha] + "extra").append(json['extra' + linha]);
				$("#" + json['pairing' + linha] + "dia").append(json['dia' + linha]);
				$("#" + json['pairing' + linha] + "link").append("<a href='" + json['link' + linha] + "' class='links'>" + json['dia' + linha] + "</a>");
				if (json['altlink' + linha]) {
					$("#" + json['pairing' + linha] + "altlink").append("<a href='" + json['altlink' + linha] + "' class='links'>" + json['dia' + linha] + "</a>");
				}

				linha++;

			}

		} else {

			var linha = 0;

			while (json['index' + linha]) {



				$("#" + json['pairing' + linha]).append(pairingcontent[linha]);
				$("#avaliacao").append(json['avaliacao' + linha]);
				$("#descricao").append(json['descricao' + linha]);
				$("#instrucao").append(json['instrucao' + linha]);
				$("#coment").append(json['coment' + linha]);
				$("#bloco").append(json['bloco' + linha]);
				$("#fase").append(json['fase' + linha]);
				$("#siglatrabalho").append(json['siglatrabalho' + linha]);
				$("#extra").append(json['extra' + linha]);
				$("#dia").append(json['dia' + linha]);
				$("#link").append("<a href='" + json['link' + linha] + "' class='links'>" + json['dia' + linha] + "</a>");
				if (json['altlink' + linha]) {
					$("#altlink").append("<a href='" + json['altlink' + linha] + "' class='links'>" + json['dia' + linha] + "</a>");
				}

				linha++;

			}

		}

		EIEpopula = "";
		$("#carregando").css("display", "none");

	} else {


		EIEonde = EIEcomponente[EIEqueue];
		console.log("Funcao exibedados ativada... onde? " + EIEonde + " loadtype: " + EIEloadtype[EIEqueue]);
		$("#carregando").css("display", "none");
		$(EIEonde).append(EIEpopula);
		EIEpopula = "";

	}

	if (EIEloadtype[EIEqueue] == 'multiple') {
		if (EIEcomponente[EIEqueue + 1]) {
			EIEqueue++;
			EIE_run();
		}
	}

}


// FUNÇÃO QUE TROCA DADOS (LOADING) COM O GOOGLE DOCS
function EIE_run() {

	console.log("Funcao EIE_run ativada");

	$("#carregando").css("display", "initial");
	console.log(EIEquerysearch[EIEqueue]);


	$.ajax({
		url: EIEserviceURL,
		type: 'get',
		dataType: 'json',
		data: EIEquerysearch[EIEqueue],
		cache: false,
		success: function (json) {


			EIEpopuladados(json);
			if (json['index0'] == "") {

				console.log("Eita?! não tem dados!");

			}
			console.log(json);
			EIEscrollav = true; // scroll disponível para mostrar dadaos

		},
		error: function (xhr, desc, err) {
			console.log(xhr + "\n" + err);
		}
	});
}

// FUNÇÃO PARA CARREGAMENTO MÚLTIPLO DE DADOS
function EIE_AddQuery(EIEarg) {

	EIEmanual = true;

	if (EIEaddqueuecount > 0) {
		EIEquerysearch[EIEaddqueuecount] = new Object();
	}
	if (!EIEarg.load) {
		EIEloadtype[EIEaddqueuecount] = "multiple";
	} else {
		EIEloadtype[EIEaddqueuecount] = EIEarg.load;
	}
	if (!EIEarg.render) {
		EIErendertype[EIEaddqueuecount] = "listapublica";
	} else {
		EIErendertype[EIEaddqueuecount] = EIEarg.render
	}
	if (!EIEarg.EIEautopop) {
		EIEautopop[EIEaddqueuecount] = true;
	} else {
		EIEautopop[EIEaddqueuecount] = EIEarg.EIEautopop;
	}
	if (!EIEarg.cat) {
		EIEquerysearch[EIEaddqueuecount]['cat'] = "notas"
	} else {
		EIEquerysearch[EIEaddqueuecount]['cat'] = EIEarg.cat;
	}
	if (EIEarg.filter) {
		EIEquerysearch[EIEaddqueuecount]['filter'] = EIEarg.filter;
	}
	if (!EIEarg.divtarget) {
		EIEcomponente[EIEaddqueuecount] = "#minharesposta"
	} else {
		EIEcomponente[EIEaddqueuecount] = EIEarg.divtarget;
	}
	if (EIEarg.to) {
		EIEquerysearch[EIEaddqueuecount]['to'] = Number(EIEarg.to);
	}
	if (EIEarg.from) {
		EIEquerysearch[EIEaddqueuecount]['from'] = Number(EIEarg.from);
	}
	if (EIEarg.searchin) {
		EIEquerysearch[EIEaddqueuecount]['searchin'] = EIEarg.searchin;
		EIEquerysearch[EIEaddqueuecount]['searchwhat'] = EIEarg.searchwhat;
	}
	if (EIEarg.tgt) {
		EIEquerysearch[EIEaddqueuecount]['tgt'] = EIEarg.tgt;
	}

	if (EIEarg.turma) {
		EIEquerysearch[EIEaddqueuecount]['turma'] = EIEarg.turma;
	}

	EIEaddqueuecount++;

}



// FUNÇÃO PARA ZERAR DADOS E CARREGAR NOVAMENTE
function EIE_ReQuery(EIEarg) {

	EIEzerando = true;
	console.log("EIE ReQuery ativada");
	EIEscrollav = true;
	EIEqueue = 0;
	EIEaddqueuecount = 0;
	EIEautopop = new Array();
	EIEautopop[0] = true;
	EIEcomponente = new Array();
	EIEcomponente[0] = "#minharesposta";
	EIEactualposition = 0;
	EIEpopula = "";
	json = {};
	EIErendertype = new Array();
	EIEloadtype = new Array();

	EIEmanual = true;
	if (EIEaddqueuecount > 0) {
		EIEquerysearch[EIEaddqueuecount] = new Object();
	}
	if (!EIEarg.load) {
		EIEloadtype[EIEaddqueuecount] = "multiple";
	} else {
		EIEloadtype[EIEaddqueuecount] = EIEarg.load;
	}
	if (!EIEarg.render) {
		EIErendertype[EIEaddqueuecount] = "listapublica";
	} else {
		EIErendertype[EIEaddqueuecount] = EIEarg.render
	}
	if (!EIEarg.EIEautopop) {
		EIEautopop[EIEaddqueuecount] = true;
	} else {
		EIEautopop[EIEaddqueuecount] = EIEarg.EIEautopop;
	}
	if (!EIEarg.cat) {
		EIEquerysearch[EIEaddqueuecount]['cat'] = "notas"
	} else {
		EIEquerysearch[EIEaddqueuecount]['cat'] = EIEarg.cat;
	}
	if (EIEarg.tgt) {
		EIEquerysearch[EIEaddqueuecount]['tgt'] = EIEarg.tgt;
	}

	if (EIEarg.turma) {
		EIEquerysearch[EIEaddqueuecount]['turma'] = EIEarg.turma;
	}

	// situação estranha ----------------------------------------------------
	if (EIEarg.filter) {
		EIEquerysearch[EIEaddqueuecount]['filter'] = EIEarg.filter;
	}
	if (!EIEarg.divtarget) {
		EIEcomponente[EIEaddqueuecount] = "#minharesposta"
	} else {
		EIEcomponente[EIEaddqueuecount] = EIEarg.divtarget;
	}
	if (EIEarg.to) {
		EIEquerysearch[EIEaddqueuecount]['to'] = Number(EIEarg.to);
	}
	if (EIEarg.from) {
		EIEquerysearch[EIEaddqueuecount]['from'] = Number(EIEarg.from);
	}


	if (EIEzerando) {
		EIEzerando = false;
		$(EIEcomponente[EIEaddqueuecount]).text("");
	}

	EIEaddqueuecount++;



}



// FUNÇÕES PARA SEREM CARREGADAS ASSIM QUE O DOCUMENTO CARREGAR

$(document).ready(function () {

	if (!EIEmanual) {
		EIE_run();
	}

});