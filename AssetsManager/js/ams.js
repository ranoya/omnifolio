/*
AMS VERSÃO 0.9 - 15/5/2021

Parâmetros de URL:
* cat - categoria: "bibliografia", "bookmarks", "alemdosandbox", "posts", etc.
filter - filtros separados por virgula ou espaço: "design, jogos"
from - paginação: item inicial da página, ex. 25
to - paginação: item final da página, ex 60
debug - modo de debug: true ou false
* render - tipo de população de dados: videogrid, lista, listapublica, thumbnail, listaduo, number
elementos - ornamentação: full, nonav, puredata
detalhes - inclui descrições e resumos: true ou false
* load - que tipo de carregamento: total, byscroll, multiple
manual - ativação manual das funções: true ou false
count - ativação da solicitação de contagem de dados (invés dos dados): true ou false


Variáveis internas:
querysearch[queue][critério] - json enviado para a base de dados
rendertype[queue] - tipo de população de dados: videogrid, lista, listapublica, paralax
loadtype[queue] - que tipo de carregamento: total, byscroll, multiple
componente[queue] - em que div será populado
autopop[queue] - população de dados automática após o carregamento
detail[queue] - inclui resumos ou descrições
manual - ativação manual das funções: true ou false (importante principalmente para publicação multipla)




Implementação em sites
Ex.
AddQuery({cat: 'bibliografia', render: 'lista', filter: 'meusartigos,pesquisa,estetica', divtarget: '#minhaspublicacoes'});
AddQuery({cat: 'bibliografia', render: 'listapublica', filter: 'pesquisa', divtarget: '#minhabibliografia'});
AddQuery({cat: 'posts', render: 'lista', filter: 'pesquisa,estetica', divtarget: '#meusposts'});
AddQuery({cat: 'artefatos', render: 'videogrid', filter: 'creative', divtarget: '#meusvideos', load: "byscroll"});
AddQuery({cat: 'bibliografia', render: 'number', filter: 'pesquisa,estetica,ophd', divtarget: '#quantostextos', count: 'true'});
ajaxexchange();

AMS_ReQuery({cat: 'bibliografia', render: 'number', filter: 'pesquisa,estetica,ophd', divtarget: '#quantostextos', count: 'true'})
ajaxexchange();

AMS_RequestData({cat: 'bibliografia', filter: 'design'}, function(json) {

      console.log("isso é um teste : " + json['autor0']);

});


*/


console.log("*** AMS Versao 0.9 Carregado");

// MATRIZ DE CRITÉRIOS E ATRIBUTOS
querysearch = new Array();
querysearch[0] = new Object();

// GRABER DE PARÂMETROS DE URL
$.parametros = function (name) {
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  if (results == null) {
    return null;
  } else {
    return results[1] || 0;
  }
}



var vimeovideo = 0;
var vimeochange = 0;

function VideoGridParseURL(url) {
  // - Supported YouTube URL formats:
  //   - http://www.youtube.com/watch?v=My2FRPA3Gf8
  //   - http://youtu.be/My2FRPA3Gf8
  //   - https://youtube.googleapis.com/v/My2FRPA3Gf8
  //   - https://m.youtube.com/watch?v=My2FRPA3Gf8
  // - Supported Vimeo URL formats:
  //   - http://vimeo.com/25451551
  //   - http://player.vimeo.com/video/25451551
  // - Also supports relative URLs:
  //   - //player.vimeo.com/video/25451551

  var tipovideo = 'none';

  if (url.indexOf('youtu') <= -1 && url.indexOf('vimeo') <= -1) {

    return {
      type: 'none',
      id: 'none'
    };

  } else {

    url.match(/(http:|https:|)\/\/(player.|www.|m.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

    if (RegExp.$3.indexOf('youtu') > -1) {
      tipovideo = 'youtube';
    }

    if (RegExp.$3.indexOf('vimeo') > -1) {
      tipovideo = 'vimeo';
    }

    return {
      type: tipovideo,
      id: RegExp.$6
    };
  }

}

function youtubeImage(url) {


  var thumbSplit = "";
  var retorno = "";
  var thumbSRC;
  var videoDetails = VideoGridParseURL(url);
  var videoType = videoDetails.type;
  var videoID = videoDetails.id;



  return 'https://img.youtube.com/vi/' + videoID + '/0.jpg';

}


function VideoGridImage(url) {

  var thumbSplit = "";
  var retorno = "";
  var thumbSRC;
  var videoDetails = VideoGridParseURL(url);
  var videoType = videoDetails.type;
  var videoID = videoDetails.id;

  if (videoType == 'youtube') {
    thumbSRC = 'https://img.youtube.com/vi/' + videoID + '/0.jpg';
    //thumbSRC = 'https://img.youtube.com/vi/' + videoID + '/maxresdefault.jpg';
    retorno = "<a href='" + url + "' class='vidogridthumblink' style='background-image: url(" + thumbSRC + "); background-position: center center; background-size: cover; background-repeat: no-repeat;'>&nbsp;</a>";

  }



  if (videoType == 'vimeo') {


    retorno = "<a href='" + url + "' class='vidogridthumblink' id='vdi-" + videoID + "'>&nbsp;</a>";


    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://vimeo.com/api/v2/video/" + videoID + ".json", true);
    xhr.onload = function (e) {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          var data = xhr.responseText;
          //console.log(data);
          var parsedData = JSON.parse(data);
          thumbSRClarge = parsedData[0].thumbnail_large;
          // split url of large thumbnail at 640
          thumbSplit = thumbSRClarge.split(/\d{3}(?=.jpg)/);
          // add 1280x720 to parts and get bigger thumbnail
          thumbSRC = thumbSplit[0] + '1280x720' + thumbSplit[1];
          //thumbIMG.src = thumbSRC;
          //thumbLINK.href = thumbSRC;

          //retorno = "<a href='"+url+"' class='vidogridthumblink'><img id='"+thumbSplit[0]+"' src='"+thumbSplit[0]+"1280x720.jpg' class='videogrid'></a>";

          $('#vdi-' + videoID).css('background-image', 'url(' + thumbSplit[0] + '1280x720' + thumbSplit[1] + ')');
          $('#vdi-' + videoID).css('background-position', 'center center');
          $('#vdi-' + videoID).css('background-size', 'cover');
          $('#vdi-' + videoID).css('background-repeat', 'no-repeat');


        } else {
          console.error(xhr.statusText);
        }
      }
    };
    xhr.onerror = function (e) {
      console.error(xhr.statusText);
    };
    xhr.send(null);
  }


  if (videoType == "none") {
    retorno = "<iframe frameborder=0 class='vidogridthumblink' src='" + url + "'></iframe>";

  }

  $("#" + thumbSplit[0]).attr('src', thumbSplit[0] + "1280x720.jpg");
  return retorno;


}



// LINK PARA O SERVIÇO DO GOOGLE DOCS
//serviceurl = 'https://script.google.com/macros/s/AKfycbyGNpGNd_rEO79y2a_I62AvCp5jcFCLyb7h4fGCvzDr9BLf1rk/exec';

serviceurl = 'https://www.ranoya.com/AssetsManager/sqlquery/index.php';

// VARIÁVEIS INTERNAS
var scrollavaliable = true;
var queue = 0;
var addqueuecount = 0;
var autopop = new Array();
var detail = new Array();
autopop[0] = true;
var componente = new Array();
componente[0] = "#minharesposta";
var actualposition = 0;
var popula = "";
var populaBackground = "";
var manual;
var rendertype = new Array();
var loadtype = new Array();
var zerando = true;

if ($.parametros('render')) {
  rendertype[queue] = $.parametros('render');
} else {
  if (!rendertype[queue]) {
    rendertype[queue] = "listapublica";
  }
}
if ($.parametros('load')) {
  loadtype[queue] = $.parametros('load');
} else {
  if (!loadtype[queue]) {
    loadtype[queue] = "total";
  }
}
if ($.parametros('detalhes')) {
  detail[queue] = $.parametros('detalhes');
} else {
  if (!detail[queue]) {
    detail[queue] = "false";
  }
}
if ($.parametros('manual')) {
  manual = true;
} else {
  manual = false;
}
if ($.parametros('cat')) {
  querysearch[queue]['cat'] = $.parametros('cat');
}
if ($.parametros('from')) {
  querysearch[queue]['from'] = eval($.parametros('from'));
}
if ($.parametros('to')) {
  querysearch[queue]['to'] = eval($.parametros('to'));
}
if ($.parametros('filter')) {
  querysearch[queue]['filter'] = $.parametros('filter');
}
if ($.parametros('count')) {
  querysearch[queue]['count'] = $.parametros('count');
}

// RENDERS: FUNÇÃO QUE CRIA O HTML DO CONTEÚDO (INCLUIR FORMATOS DIFERENTES PARA CADA CATEGORIA E CADA OUTPUT DIFERENTE)    
function populadados(json) {




  console.log("Função populadados ativada");
  console.log("Render: " + rendertype[queue]);


  if (rendertype[queue] == 'number') {

    popula = json['COUNT(*)0'];

  }

  if (rendertype[queue] == 'simplepeople') {
    var linha = 0;
    var lastpeople = "";
    while (json['index' + linha]) {

      if (lastpeople != json['aluno' + linha]) {
        popula = popula + "<div class='simplepeoplebloco'><div class='simplepeoplethumb' style='background-image: url(" + json['foto' + linha] + ");'></div><span class='simplepeoplename'>" + json['aluno' + linha];
        if (json['centro' + linha]) {
          popula = popula + "<br>" + json['centro' + linha];
        }
        popula = popula + "</span>";
      }


      if (lastpeople != json['aluno' + (linha + 1)]) {
        popula = popula + "</div>";
      }

      linha++;
    }
  }

  if (rendertype[queue] == 'smallpeople') {
    var linha = 0;
    var lastpeople = "";
    while (json['index' + linha]) {

      if (lastpeople != json['aluno' + linha]) {
        popula = popula + "<div class='smallpeoplebloco'><div class='smallpeoplethumb' style='background-image: url(" + json['foto' + linha] + ");'></div><span class='smallpeoplename'>" + json['aluno' + linha];
        popula = popula + "</span>";
      }


      if (lastpeople != json['aluno' + (linha + 1)]) {
        popula = popula + "</div>";
      }

      linha++;
    }
  }


  if (rendertype[queue] == 'people') {
    var linha = 0;
    var lastpeople = "";
    while (json['index' + linha]) {

      if (lastpeople != json['aluno' + linha]) {
        popula = popula + "<div class='peoplebloco'><img src='" + json['foto' + linha] + "' class='peoplethumb'><span class='peoplename'>" + json['aluno' + linha];
        if (json['centro' + linha]) {
          popula = popula + " | " + json['centro' + linha];
        }

        if (json['referencia' + linha]) {
          popula = popula + "<br><span class='peopleproj'>" + json['referencia' + linha] + "</span>";
        }
        popula = popula + "</span>";

        popula = popula + "<span class='peopleaction'>";
      }

      popula = popula + "<a href='" + json['link' + linha] + "' class='peoplelink'><span class='peopleano'>" + json['ano' + linha] + "</span><span class='peopleoutcome'>" + json['resumo' + linha] + "</span></a>";

      lastpeople = json['aluno' + linha];

      if (lastpeople != json['aluno' + (linha + 1)]) {
        popula = popula + "</span></div>";
      }

      linha++;
    }
  }


  if (rendertype[queue] == 'projetos') {

    var linha = 0;
    var lastprojeto = "";
    while (json['index' + linha]) {

      if (lastprojeto != json['referencia' + linha]) {
        lastprojeto = json['referencia' + linha];
        popula = popula + "<div class='projetosepessoas'><div class='projetosdados'><div class='projetologo' style='background-image: url(" + json['arquivologo' + linha] + ");'></div>";
        popula = popula + "<div class='projetonome'>" + json['referencia' + linha] + "</div><div class='projetomensoes'>" + json['resumo' + linha] + "</div></div>";
        popula = popula + "<div class='projetoenvolvidos'>";
      }

      popula = popula + "<div class='smallpeoplethumb' style='background-image: url(" + json['foto' + linha] + ");'></div><span class='smallpeoplename'>" + json['aluno' + linha];
      popula = popula + "</span>";

      if (lastprojeto != json['referencia' + (linha + 1)]) {
        popula = popula + "</div></div>";
      }

      linha++;
    }


  }


  if (rendertype[queue] == 'thirds') {
    var linha = 0;

    popula = `<div class="gridthirds">`;

    while (json['index' + linha]) {

      popula += `
        <div class = "thirds">
        <iframe src="` + json['link' + linha] + `"style = "width: 100%; height: 320px;" frameborder=0></iframe><br><br>`;

      if (json['linktitulo' + linha] != "") {

        popula += `<p style="text-align: left;"><a href="` + json['linktitulo' + linha] + `">` + json['titulo' + linha] + `</a></p>`;

      } else {

        popula += `<p style="text-align: left;">` + json['titulo' + linha] + `</p>`;

      }

      popula += `<h5 style="text-align: left;"><b>` + json['local' + linha] + `</b><br><br>` + json['envolvidos' + linha] + `</h5></div>`;

      linha++;

    }

    popula += `</div>`;

  }


  if (rendertype[queue] == 'simplethirds') {
    var linha = 0;

    popula = `<div class="gridthirds">`;

    while (json['index' + linha]) {

      popula += `
        <div class = "thirds">
        <iframe src="` + json['link' + linha] + `"style = "width: 100%; height: 320px;" frameborder=0></iframe>`;

      popula += `</div>`;
      linha++;

    }
    popula += `</div>`;

  }


  if (rendertype[queue] == 'videogrid') {
    var linha = 0;
    while (json['index' + linha]) {

      if ($.parametros('debug')) {
        popula = popula + "<div style='clear: both;'>" + json['index' + linha];
      }
      //popula = popula + '<iframe frameborder=0 class=\'videogrid\' src=\'' + json['link'+linha] + '\'></iframe>';

      popula = popula + VideoGridImage(json['link' + linha]);

      if ($.parametros('debug')) {
        popula = popula + "</div>";
      }
      linha++;

    }

  }

  if (rendertype[queue] == 'lista') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      popula = popula + '<a class=\'listatitulo\' href=\'' + json['link' + linha] + '\'>' + json['titulo' + linha];
      if (detail[queue] == "true") {
        popula = popula + "<br><span class=\'listadetalhe\'>" + json['resumo' + linha] + "</span>";
      }
      popula = popula + "</a></div>"
      linha++;

    }

  }

  if (rendertype[queue] == 'paralax') {
    var linha = 0;
    while (json['index' + linha]) {

      populaBackground = populaBackground + "<div class='AMS_Background'>";
      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      populaBackground = populaBackground + "<div class='AMS_Thumbs' style='background-image: url(" + json['thumb' + linha] + ");'></div>";
      popula = popula + '<a class=\'listatitulo\' href=\'' + json['link' + linha] + '\'>' + json['titulo' + linha];
      if (detail[queue] == "true") {
        popula = popula + "<br><span class=\'listadetalhe\'>" + json['resumo' + linha] + "</span>";
      }
      popula = popula + "</a></div>";
      populaBackground = populaBackground + "</div>";
      linha++;

    }

  }



  if (rendertype[queue] == 'sequencia') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + '<a class=\'listatitulo\' href=\'' + json['link' + linha] + '\'>' + json['titulo' + linha] + "</a>&nbsp;&nbsp;&nbsp;";

      linha++;
    }
  }


  if (rendertype[queue] == 'listaduo') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      popula = popula + '<a class=\'listatitulo\' href=\'https://www.ranoya.com/AssetsManager/duoreader/?text=' + json['link' + linha] + '/preview&note=' + json['notes' + linha] + '\'>' + json['titulo' + linha];
      if (detail[queue] == "true") {
        popula = popula + "<br><span class=\'listadetalhe\'>" + json['resumo' + linha] + "</span>";
      }
      popula = popula + "</a></div>"
      linha++;

    }

  }


  if (rendertype[queue] == 'listapublica') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      popula = popula + '<p class=\'listatitulopublico\'>' + json['titulo' + linha];
      if (detail[queue] == "true") {
        popula = popula + "<br><span class=\'listadetalhe\'>" + json['resumo' + linha] + "</span>";
      }
      popula = popula + "</p></div>";
      linha++;

    }

  }


  if (rendertype[queue] == 'bibliografiapublica') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      popula = popula + '<p class=\'listatitulopublico\'>' + json['titulo' + linha] + '. ' + json['cidade' + linha] + ": " + json['editora' + linha] + ", " + json['ano' + linha] + ".";

      popula = popula + "</p></div>";
      linha++;

    }

  }



  if (rendertype[queue] == 'thumbnail') {
    var linha = 0;
    while (json['index' + linha]) {

      popula = popula + "<div class='listalinha'>";
      if ($.parametros('debug')) {
        popula = popula + json['index' + linha];
      }
      popula = popula + '<a class=\'listatitulo\' href=\'' + json['link' + linha] + '\'><div style=\"background-image: url(' + json['thumb' + linha] + ');\" class=\'listathumb\'>&nbsp;</div>' + json['titulo' + linha];
      if (detail[queue] == "true") {
        popula = popula + "<br><span class=\'listadetalhe\'>" + json['resumo' + linha] + "</span>";
      }
      popula = popula + "</a></div>";
      linha++;

    }

  }

  if (rendertype[queue] == 'images') {

    var linha = 0;


    while (json['index' + linha]) {

      if (json['link' + linha].indexOf('alemdosandbox') <= 0 && json['link' + linha].indexOf('vimeo') <= 0) {

        popula = popula + "<div class='imagegrid";

        if (json['aspect' + linha] != "") {
          popula = popula + " " + json['aspect' + linha];
        }

        popula = popula + "'>";


        if ($.parametros('debug')) {
          popula = popula + json['index' + linha];
        }


        if (json['link' + linha].indexOf('youtu') > 0) {

          popula = popula + '<a class=\'imagebk\' href=\'' + json['link' + linha] + '\'><div style=\"background-image: url(\'' + youtubeImage(json['link' + linha]) + '\');\" class=\'thumbitself\'>&nbsp;</div>';

        } else {

          var otimizaimagem = "";
          if (json['previewimage' + linha] != undefined && json['previewimage' + linha] != "" && json['previewimage' + linha] != null) {
            otimizaimagem = json['previewimage' + linha];
          } else {
            otimizaimagem = json['link' + linha];
          }
          popula = popula + '<a class=\'imagebk\' href=\'' + json['link' + linha] + '\'><div style=\"background-image: url(' + otimizaimagem + ');\" class=\'thumbitself\'>&nbsp;</div>';

        }

        if (detail[queue] == "true") {
          popula = popula + "<span class=\'listadetalhe\'>" + json['titulo' + linha] + "</span>";
        }

        popula = popula + "</a></div>";

      }

      linha++;
    }


  }



  if (rendertype[queue] == 'docs') {
    var linha = 0;

    popula = "";

    while (json['index' + linha]) {

      console.log(linha + " " + json['index' + linha] + " " + json['palavrachave' + linha]);

      popula += "<p class='infodocskeyword'>" + json['palavrachave' + linha] + "</p>";
      popula += "<p class='infodocsdescrit'>" + json['descricao' + linha] + "</p>";

      linha++;

    }



  }


  if (rendertype[queue] == 'open') {
    var linha = 0;

    popula = "<script>";
    while (json['index' + linha]) {

      window.open(json['link' + linha], '_blank');

      console.log(json['link' + linha])

      linha++;

    }
    popula += "</script>";

  }

  $("#carregando").css("display", "none");

  // CASO SEJA A PRIMEIRA VEZ QUE POPULA DADOS, JÁ APRESENTA OS CONTEÚDOS NO DIV
  //if (autopop[queue]) {

  console.log("Carregamento automatico ativado");
  autopop[queue] = false;
  exibedados();


  //}


}

// FUNÇÃO QUE EXIBE OS DADOS NO DIV (INCLUIR UM IF QUE VERIFIQUE SE SÃO DADOS PAGINADOS OU NÃO PARA NÃO RECARREGAR O LOADING)
function exibedados() {

  $("#carregando").css("display", "initial");

  onde = componente[queue];
  console.log("Funcao exibedados ativada... onde? " + onde + " loadtype: " + loadtype[queue]);

  if (loadtype[queue] == 'byscroll') {
    var intervalo = Number(querysearch[queue]['to']) - Number(querysearch[queue]['from']);
    querysearch[queue]['from'] = Number(querysearch[queue]['to']) + 1;
    querysearch[queue]['to'] = Number(querysearch[queue]['from']) + intervalo;
  }

  $("#carregando").css("display", "none");
  $(onde).append(popula);
  if (populaBackground != "") {
    $(onde + "Background").append(populaBackground);
  }
  popula = "";

  // ATIVA O LOADING AUTOMÁTICO DE NOVOS DADOS (ÚTIL PARA SCROLL INFINITO... VERIFICAR OUTROS CASOS)

  if (loadtype[queue] == 'byscroll') {
    $(window).scroll(function () {

      if ($(window).scrollTop() + $(window).height() >= $(document).height()) {

        if (scrollavaliable) {

          console.log('exibedados ativado por scroll');
          scrollavaliable = false;
          ajaxexchange();
        }

      }
    });

  }

  if (loadtype[queue] == 'multiple') {
    if (componente[queue + 1]) {
      queue++;
      ajaxexchange();
    }
  }


}


// FUNÇÃO QUE TROCA DADOS (LOADING) COM O GOOGLE DOCS
function ajaxexchange() {



  console.log("Funcao ajaxexchange ativada");

  $("#carregando").css("display", "initial");
  console.log(querysearch[queue]);


  $.ajax({
    url: serviceurl,
    type: 'get',
    dataType: 'json',
    data: querysearch[queue],
    cache: false,
    success: function (json) {

      populadados(json);
      if (json['index0'] == "") {

        console.log("Eita?! não tem dados!");

      }
      console.log(json);
      scrollavaliable = true; // scroll disponível para mostrar dadaos

    },
    error: function (xhr, desc, err) {
      console.log(xhr + "\n" + err);
    }
  });
}

// FUNÇÃO PARA CARREGAMENTO MÚLTIPLO DE DADOS
function AddQuery(arg) {

  manual = true;
  if (addqueuecount > 0) {
    querysearch[addqueuecount] = new Object();
  }
  if (!arg.detalhes) {
    detail[addqueuecount] = "false";
  } else {
    detail[addqueuecount] = arg.detalhes;
  }
  if (!arg.load) {
    loadtype[addqueuecount] = "multiple";
  } else {
    loadtype[addqueuecount] = arg.load;
  }
  if (!arg.render) {
    rendertype[addqueuecount] = "listapublica";
  } else {
    rendertype[addqueuecount] = arg.render
  }
  if (!arg.autopop) {
    autopop[addqueuecount] = true;
  } else {
    autopop[addqueuecount] = arg.autopop;
  }
  if (!arg.cat) {
    querysearch[addqueuecount]['cat'] = "bibliografia"
  } else {
    querysearch[addqueuecount]['cat'] = arg.cat;
  }
  if (arg.filter) {
    querysearch[addqueuecount]['filter'] = arg.filter;
  }
  if (!arg.divtarget) {
    componente[addqueuecount] = "#minharesposta"
  } else {
    componente[addqueuecount] = arg.divtarget;
  }
  if (arg.to) {
    querysearch[addqueuecount]['to'] = Number(arg.to);
  }
  if (arg.from) {
    querysearch[addqueuecount]['from'] = Number(arg.from);
  }
  if (arg.count) {
    querysearch[addqueuecount]['count'] = Number(arg.count);
  }
  addqueuecount++;

}



// FUNÇÃO PARA ZERAR DADOS E CARREGAR NOVAMENTE
function AMS_ReQuery(arg) {

  zerando = true;
  console.log("ReQuery ativada");
  scrollavaliable = true;
  queue = 0;
  addqueuecount = 0;
  autopop = new Array();
  detail = new Array();
  autopop[0] = true;
  componente = new Array();
  componente[0] = "#minharesposta";
  actualposition = 0;
  popula = "";
  json = {};
  rendertype = new Array();
  loadtype = new Array();

  manual = true;
  if (addqueuecount > 0) {
    querysearch[addqueuecount] = new Object();
  }
  if (!arg.detalhes) {
    detail[addqueuecount] = "false";
  } else {
    detail[addqueuecount] = arg.detalhes;
  }
  if (!arg.load) {
    loadtype[addqueuecount] = "multiple";
  } else {
    loadtype[addqueuecount] = arg.load;
  }
  if (!arg.render) {
    rendertype[addqueuecount] = "listapublica";
  } else {
    rendertype[addqueuecount] = arg.render
  }
  if (!arg.autopop) {
    autopop[addqueuecount] = true;
  } else {
    autopop[addqueuecount] = arg.autopop;
  }
  if (!arg.cat) {
    querysearch[addqueuecount]['cat'] = "bibliografia"
  } else {
    querysearch[addqueuecount]['cat'] = arg.cat;
  }

  // situação estranha ----------------------------------------------------
  if (arg.filter) {
    querysearch[addqueuecount]['filter'] = arg.filter;
  }
  if (!arg.divtarget) {
    componente[addqueuecount] = "#minharesposta"
  } else {
    componente[addqueuecount] = arg.divtarget;
  }
  if (arg.to) {
    querysearch[addqueuecount]['to'] = Number(arg.to);
  }
  if (arg.from) {
    querysearch[addqueuecount]['from'] = Number(arg.from);
  }
  if (arg.count) {
    querysearch[addqueuecount]['count'] = Number(arg.count);
  }


  if (zerando) {
    zerando = false;
    $(componente[addqueuecount]).text("");
  }

  addqueuecount++;



}


// FUNÇÕES PARA SEREM CARREGADAS ASSIM QUE O DOCUMENTO CARREGAR

$(document).ready(function () {

  if (!manual) {
    ajaxexchange();
  }

});