// Preloader de imagens

function imagepreload(file) {

  var myImage = new Image(100, 100);
  myImage.src = file;

}


// pega parâmetros da URL

$.parametros = function (name) {
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  if (results == null) {
    return null;
  } else {
    return results[1] || 0;
  }
}

// Vai para marcador de topo, onde quer que ele esteja

function gotoLink(place) {

  if ($.parametros('contentonly') && place == '#catalogo') {

    //$(window).scrollTop = 0;
    window.location = place;

  } else {

    window.location = place;

  }

}

// sobe o link do Go To Top
function embedchanges() {

  if ($.parametros('embed') == "slides") {

    document.write("<style>#botaogototop {  bottom: 40%; } #gototop { bottom: calc( 40% - 35px ); } #gotobottom { bottom: calc( 40% - 35px ); }</style>");

  }

}

// Google Analytics

(function (i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments)
  }, i[r].l = 1 * new Date();
  a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-61225449-1', 'auto');
ga('send', 'pageview');



// Seleção de filtros

var queryfilter;
var filterselection = new Array();



var arquivoexterno = "default.json";
var constroimenuHTML = "";

if ($.parametros('topicos')) {
  arquivoexterno = $.parametros('topicos') + ".json";
}


















function filter(who) {

  if (!filterselection[who]) {

    $("#" + who).addClass('filtroativo');
    $("#" + who).removeClass('filtroinativo');
    $("#m" + who).addClass('filtroativo');
    $("#m" + who).removeClass('filtroinativo');
    filterselection[who] = true;

  } else {

    $("#" + who).addClass('filtroinativo');
    $("#" + who).removeClass('filtroativo');
    $("#m" + who).addClass('filtroinativo');
    $("#m" + who).removeClass('filtroativo');
    filterselection[who] = false;

  }


  //if ($.parametros('filter')) { queryfilter = $.parametros('filter')+","; } else { queryfilter = ""; }
  queryfilter = "";

  for (var filtro in filterselection) {

    if (filterselection[filtro]) {

      queryfilter = queryfilter + filtro + ",";

    }

  }

  queryfilter = queryfilter.slice(0, -1);

  if (queryfilter === "") {

    queryfilter = "";
    //querysearch[0]['filter'] = "";

  }


  console.log(queryfilter);
  AMS_ReQuery({
    cat: 'pinboard',
    render: 'images',
    filter: queryfilter,
    divtarget: '#paineldeprojetos'
  });

  ajaxexchange();

}




// Funções para quando o documento estiver pronto

$(document).ready(function () {

  console.log("Rodou document ready?");

  // preload de imagens do rodapé
  imagepreload("https://www.ranoya.com/Assets/WebsiteIcons/tothetop_off.svg");
  imagepreload("https://www.ranoya.com/Assets/WebsiteIcons/tothetop_on.svg");
  imagepreload("https://www.ranoya.com/Assets/WebsiteIcons/tothebottom_off.svg");
  imagepreload("https://www.ranoya.com/Assets/WebsiteIcons/tothebottom_on.svg");


  if ($.parametros('contentonly')) {

    $("nav").css("display", "none");
    $("#heading").css("display", "none");
    $('#gotobottom').css("display", "none");
    $('#sumario').css("display", "none");

  }

  if ($.parametros('contentonly') == "plain") {

    $('#blocoseparador').css("height", 0);
    $('#corpo').css("width", "calc(100% - 15px)");
    $('#corpo').css("margin-left", "15px");
    $('#rodape').css("display", "none");

  }

  if ($.parametros('embed') != "small") {

    $('#corpo').css("width", "calc(100% - 15px)");
    $('#corpo').css("margin-left", "15px");

  }

  fetch(arquivoexterno).then(response => response.json()).then((data) => {

    console.log("Rodou o fetch?");

    for (topc in data) {

      if (data.label != "") {
        filterselection[data[topc].topico] = false;
        constroimenuHTML += "<a href=\"javascript:filter('" + data[topc].topico + "');\" id=\"m" + data[topc].topico + "\" class=\"filtroinativo\">" + data[topc].label + "</a>";
      }

    }

    fulljson = data;
    document.getElementById('menuopcoesA').innerHTML = constroimenuHTML;
    document.getElementById('menuopcoesB').innerHTML = constroimenuHTML;

    if ($.parametros('filter')) {

      console.log("Rodou o parametros filter?");

      originalfilters = $.parametros('filter').split(",");

      for (r = 0; r < originalfilters.length; r++) {

        $("#" + originalfilters[r]).addClass('filtroativo');
        $("#" + originalfilters[r]).removeClass('filtroinativo');
        $("#m" + originalfilters[r]).addClass('filtroativo');
        $("#m" + originalfilters[r]).removeClass('filtroinativo');
        filterselection[originalfilters[r]] = true;

      }



      AMS_ReQuery({
        cat: 'pinboard',
        render: 'images',
        filter: $.parametros('filter'),
        divtarget: '#paineldeprojetos'
      });
      ajaxexchange();

    }

  });


  console.log("Executando trocas após 1 segundo do documento pronto");
  setTimeout(ajaxexchange, 1000);


  $(window).scroll(function () {


    if ($(window).scrollTop() >= ($("#paineldeprojetos").offset().top - 110)) {

      $('#gototop').css("display", "");
      $('#gotobottom').css("display", "none");

    } else {

      $('#gototop').css("display", "none");
      $('#gotobottom').css("display", "");

    }

    if ($(window).scrollTop() >= ($("#paineldeprojetos").offset().top + 1200)) {

      $("nav").css("position", "absolute");
      $("nav").css("top", (($("#paineldeprojetos").offset().top + 1200) + "px"));

    } else {

      $("nav").css("position", "fixed");
      $("nav").css("top", 0);

    }

  });

});