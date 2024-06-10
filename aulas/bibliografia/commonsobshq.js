// Preloader de imagens

function imagepreload(file) {

  var myImage = new Image(100, 100);
  myImage.src = file;

}


let $ = {};

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