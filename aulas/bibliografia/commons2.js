

// Preloader de imagens

function imagepreload(file) {
  
  var myImage = new Image(100, 100);
  myImage.src = file;
  
}



// pega parâmetros da URL

$.parametros = function(name){
	          var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results==null){
              return null;
            } else{
	            return results[1] || 0;
            }
        }

/*
if ($.parametros('filter')) { 

AMS_ReQuery({cat: 'bibliografia', render: 'lista', filter: $.parametros('filter'), divtarget: '#paineldeprojetos'});
  
  ajaxexchange();


}
*/


// Vai para marcador de topo, onde quer que ele esteja

function gotoLink(place) {
      
    if ($.parametros('contentonly') && place=='#catalogo') {
     
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

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61225449-1', 'auto');
  ga('send', 'pageview');



// Seleção de filtros
json = "";
todososdados = "";
var filtratudo = "";
var queryfilter;
var filterselection = new Array();
filterselection['cultura'] = false;
filterselection['design'] = false;
filterselection['estetica'] = false;
filterselection['experiencia'] = false;
filterselection['interface'] = false;
filterselection['interacao'] = false;
filterselection['jogos'] = false;
filterselection['linguagem'] = false;
filterselection['metodologia'] = false;
filterselection['midia'] = false;
filterselection['web'] = false;

function filter(who) {
    
  if (!filterselection[who]) {
    
    $("#" + who).addClass('filtroativo');
    $("#" + who).removeClass('filtroinativo');
    filterselection[who] = true;
    
  } else {

    $("#" + who).addClass('filtroinativo');
    $("#" + who).removeClass('filtroativo');
    filterselection[who] = false;    
    
  }
    
  if ($.parametros('filter')) { queryfilter = $.parametros('filter')+","; } else { queryfilter = ""; } 
    
  for (var filtro in filterselection) {
      
      if (filterselection[filtro]) {
        
        queryfilter = queryfilter + filtro + ",";
           
      }
      
  }
  
  queryfilter = queryfilter.slice(0, -1);
  
  if (queryfilter === "") {
    
    queryfilter = "";
    querysearch[0]['filter'] = "";
  }
  
  console.log(queryfilter);
  document.getElementById('carregando').style.display = "block";
  simpleq("AMS", {cat: "bibliografia", filter: queryfilter}, conteudochange);


}



function conteudochange(json) {

    todososdados = json;

    popula = "";

    if($.parametros('render') == "listalinha") {

    for (k=0; k<json.length; k++) {
      if (json[k].titulo.toUpperCase().indexOf(filtratudo) >= 0) {
      popula = popula + "<div class='listalinha'>";
      popula = popula + '<p class=\'listatitulopublico\'>' + json[k].titulo;
      popula = popula + "</p></div>";
      }
    }

    } else {

    for (k=0; k<json.length; k++) {
      if (json[k].titulo.toUpperCase().indexOf(filtratudo) >= 0) {
      popula = popula + "<div class='listalinha'>";     
      popula = popula + '<a class=\'listatitulo\' href=\'' + json[k].link + '\'>' + json[k].titulo;
      popula = popula + "</a></div>";
      }
    }

    }

    document.getElementById('paineldeprojetos').innerHTML = popula;
    document.getElementById('carregando').style.display = "none";


  }
  


// Funções para quando o documento estiver pronto

$( document ).ready(function() {
   json = "";
   document.getElementById("lupaicon").style.display = "none";
   document.getElementById("entradis").focus();

   $('body').keypress(function( event ) {

    document.getElementById("entradis").focus();
    var a = document.getElementById("entradis").value;
    a = document.getElementById("entradis").value;

    if (a == "") {

      document.getElementById("lupaicon").style.display = "none";

    } else {

      document.getElementById("lupaicon").style.display = "block";

    }
    document.getElementById('filtrotexto').innerHTML = a;

    });

    $('body').keyup(function( event ) {

    document.getElementById("entradis").focus();
    var a = document.getElementById("entradis").value;
    a = document.getElementById("entradis").value;

    if (a == "") {

      document.getElementById("lupaicon").style.display = "none";

    } else {

      document.getElementById("lupaicon").style.display = "block";

    }

    document.getElementById('filtrotexto').innerHTML = a;

    filtratudo = a.toUpperCase();
    conteudochange(todososdados);

      
    });

    /*
    if (event.keyCode >= 32) {
    teclado = teclado + event.key;
    }

    if (event.keyCode == 8) {
    teclado = teclado.substring(0,teclado.length - 1);

    }

    document.getElementById('filtrotexto').innerHTML = teclado;
    //console.log(teclado);
    console.log(event.keyCode);
    */



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

  for (r=0; r< originalfilters.length; r++) {

    //alert(originalfilters[r]);

    $("#" + originalfilters[r]).addClass('filtroativo');
    $("#" + originalfilters[r]).removeClass('filtroinativo');
    $("#m" + originalfilters[r]).addClass('filtroativo');
    $("#m" + originalfilters[r]).removeClass('filtroinativo');
    filterselection[originalfilters[r]] = true;
    
  }

  queryfilter = $.parametros('filter');

  }

 
 document.getElementById('carregando').style.display = "block";
 simpleq("AMS", {cat: "bibliografia", filter: queryfilter}, conteudochange );

  
  $(window).scroll(function() {


    if($(window).scrollTop() >= ($("#paineldeprojetos").offset().top - 110)) {
                  
               $('#gototop').css("display", "");
               $('#gotobottom').css("display", "none");
         
       } else {
         
               $('#gototop').css("display", "none");
               $('#gotobottom').css("display", "");
         
       }

    if($(window).scrollTop() >= ($("#paineldeprojetos").offset().top + 600)) {
                  
               $("nav").css("position", "absolute");
               $("nav").css("top", (($("#paineldeprojetos").offset().top + 600) + "px"));
         
       } else {
         
               $("nav").css("position", "fixed");
               $("nav").css("top", 0);  
         
       }
            
  });
  
});