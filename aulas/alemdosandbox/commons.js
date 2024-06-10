queryfilter = "";

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

var queryfilter;
var filterselection = new Array();
filterselection['ontaffective'] = false;
filterselection['ontbiohacking'] = false;
filterselection['ontcoding'] = false;
filterselection['ontnarrative'] = false;
filterselection['ontgames'] = false;
filterselection['onthaptic'] = false;
filterselection['aescriativo'] = false;
filterselection['ontimagerec'] = false;
filterselection['ontvideomap'] = false;
filterselection['ontinstallation'] = false;
filterselection['ontperformance'] = false;
filterselection['ontrobotics'] = false;
filterselection['ontphysical'] = false;
filterselection['ontwearables'] = false;
filterselection['ontiot'] = false;
filterselection['ontquantified'] = false;
filterselection['ontvr'] = false;
filterselection['ontai'] = false;
filterselection['ontar'] = false;
filterselection['aesinovador'] = false;
filterselection['aesemocional'] = false;
filterselection['aesludico'] = false;
filterselection['aesimersivo'] = false;
filterselection['aessublime'] = false;
filterselection['aesprazeroso'] = false;
filterselection['aesvisceral'] = false;
filterselection['aescomportamental'] = false;
filterselection['aesreflexivo'] = false;

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
  
  queryfilter = "";

  for (var filtro in filterselection) {
      
      if (filterselection[filtro]) {
        
        queryfilter = queryfilter + filtro + ",";
           
      }
      
  }
  
    if (queryfilter == "") {

    AMS_ReQuery({cat: 'artefatos', render: 'videogrid', filter: 'originalsandbox,best', load: 'total', divtarget: '#paineldeprojetos'});

    } else {

    AMS_ReQuery({cat: 'artefatos', render: 'videogrid', filter: 'originalsandbox,'+queryfilter, load: 'total', divtarget: '#paineldeprojetos'});

    }
  ajaxexchange();
    
   
}
  



// Funções para quando o documento estiver pronto

$( document ).ready(function() {

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
  $('#separainit').css("display", "none");
    
  }
	
	if ($.parametros('filter')) {

  originalfilters = $.parametros('filter').split(",");  

  //alert(originalfilters.length);

  for (r=0; r< originalfilters.length; r++) {

    /*
    //alert(originalfilters[r]);

    $("#" + originalfilters[r]).addClass('filtroativo');
    $("#" + originalfilters[r]).removeClass('filtroinativo');
    $("#m" + originalfilters[r]).addClass('filtroativo');
    $("#m" + originalfilters[r]).removeClass('filtroinativo');
    filterselection[originalfilters[r]] = true;
    */
   
   filter(originalfilters[r]);
    
  }
       
	} else {

    AMS_ReQuery({cat: 'artefatos', render: 'videogrid', filter: 'originalsandbox,best', load: 'total', divtarget: '#paineldeprojetos'});
    ajaxexchange();

  }



  

  $(window).scroll(function() {
    
    
    if($(window).scrollTop() >= ($("#paineldeprojetos").offset().top - 110)) {
                  
               $('#gototop').css("display", "");
               $('#gotobottom').css("display", "none");
         
       } else {
         
               $('#gototop').css("display", "none");
               $('#gotobottom').css("display", "");
         
       }

    if($(window).scrollTop() >= ($("#paineldeprojetos").offset().top + 1200)) {
                  
               $("nav").css("position", "absolute");
               $("nav").css("top", (($("#paineldeprojetos").offset().top + 1200) + "px"));
         
       } else {
         
               $("nav").css("position", "fixed");
               $("nav").css("top", 0);  
         
       }
            
  });
  
});