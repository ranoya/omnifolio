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
// 

let rendertyp = "lista";

if ($.parametros('render')) {

  rendertyp = $.parametros('render');

}

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
filterselection['advertising'] = false;
filterselection['apps'] = false;
filterselection['bodyandsoul'] = false;
filterselection['creativecoding'] = false;
filterselection['creativelife'] = false;
filterselection['creativetech'] = false;
filterselection['culture'] = false;
filterselection['design'] = false;
filterselection['games'] = false;
filterselection['framework'] = false;
filterselection['interaction'] = false;
filterselection['language'] = false;
filterselection['media'] = false;
filterselection['method'] = false;
filterselection['mobile'] = false;
filterselection['music'] = false;
filterselection['physicalcomputing'] = false;
filterselection['prototype'] = false;
filterselection['readings'] = false;
filterselection['narrativ'] = false;
filterselection['technology'] = false;
filterselection['userinterface'] = false;
filterselection['userexperience'] = false;
filterselection['wearablecomputing'] = false;
filterselection['web'] = false;

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

  if ($.parametros('filter')) {
    queryfilter = $.parametros('filter') + ",";
  } else {
    queryfilter = "";
  }

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
    cat: 'bookmarks',
    render: rendertyp,
    filter: queryfilter,
    divtarget: '#paineldeprojetos'
  });

  ajaxexchange();

}




// Funções para quando o documento estiver pronto

$(document).ready(function () {

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

  if ($.parametros('filter')) {

    originalfilters = $.parametros('filter').split(",");

    //alert(originalfilters.length);

    for (r = 0; r < originalfilters.length; r++) {

      //alert(originalfilters[r]);

      $("#" + originalfilters[r]).addClass('filtroativo');
      $("#" + originalfilters[r]).removeClass('filtroinativo');
      $("#m" + originalfilters[r]).addClass('filtroativo');
      $("#m" + originalfilters[r]).removeClass('filtroinativo');
      filterselection[originalfilters[r]] = true;

    }

    AMS_ReQuery({
      cat: 'bookmarks',
      render: rendertyp,
      filter: $.parametros('filter'),
      divtarget: '#paineldeprojetos'
    });

  }

  ajaxexchange();


  $(window).scroll(function () {

    document.getElementById('paineldeprojetosBackground').style.top = (-2 * window.scrollY) + "px";

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