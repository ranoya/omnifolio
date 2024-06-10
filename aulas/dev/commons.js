// Pega dados de cookies
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


// Zoom de documentos

var doczoom = false;
var whoisfull = "";
var abaoffset = 0;

function openwork(source) {

  $("#frametrabalhos").attr('src',source);
  $("#fechaabawork").css("display", "inline-block");
  abretrabalho();

}

function fechawork() {

  $("#fechaabawork").css("display", "none");
  fechatrabalho();

}

function abretrabalho() {

  if (abaoffset != 400) {

   abaoffset = 400;
   
   $('#container').css("margin-left", "400px");
   $('#container').css("width", "calc(100% - 400px)");

   $('#works').css("display", "block");
   $('#works').css("width", "400px");
   $('#works').css("overflow", "auto");


    if ($("body").width() >= 1300 || ($("body").width() > 854 && $("body").width() < 1300 && abaoffset == 0)) {

    $('#columnright').css("position", "fixed").css("overflow", "visible").css("width", "315px").css("right", ( ((($("body").width() - $("#wrap").width() - abaoffset)/2)  ) + "px" )  ).css("height", "100%");
    $('#columnleft').css("padding-right", "0").css("width", "calc(100% - 330px");  

    }

    if ($("body").width() <= 854 && abaoffset == 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");

    }

    if ($("body").width() <= 854 && abaoffset > 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");
      $('#works').css("width", "100%");
 
    }


    if ($("body").width() > 854 && $("body").width() < 1300 && abaoffset > 0) {

    $('#columnright').css("overflow", "hidden").css("width", "0");
    $('#columnleft').css("padding-right", "10px").css("width", "100%");

    }

  }

    
}



function fechatrabalho() {

  if (abaoffset != 0) {

  abaoffset = 0;

   $('#container').css("margin-left", "auto");
   $('#container').css("width", "100%");
   $('#columnleft').css("width", "calc(100% - 330px)");

   $('#works').css("overflow", "hidden");
   $('#works').css("width", "0");
   $('#works').css("display", "block");
   
    if ($("body").width() >= 1300 || ($("body").width() > 854 && $("body").width() < 1300 && abaoffset == 0)) {

    $('#columnright').css("position", "fixed").css("overflow", "visible").css("width", "315px").css("right", "0" ).css("height", "100%");
    $('#columnleft').css("padding-right", "0").css("width", "calc(100% - 330px"); 

    


    }

    if ($("body").width() <= 854 && abaoffset == 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");



    }

    if ($("body").width() <= 854 && abaoffset > 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");
      $('#works').css("width", "100%");
 
    }


    if ($("body").width() > 854 && $("body").width() < 1300 && abaoffset > 0) {

    $('#columnright').css("overflow", "hidden").css("width", "0");
    $('#columnleft').css("padding-right", "10px").css("width", "100%");

    }

  }

}

function zoomdocs(divid) {
  
  if (!doczoom) {
  
  $("body").css("overflow", "hidden"); 
  $(divid).css("display", "initial");
  $(divid).css("position", "fixed");
  $(divid).css("width", "100%");
  $(divid).css("height", "100%");
  $(divid).css("z-index", "3000");
  $(divid).css("top", "0");
  $(divid).css("right", "0");
    
  whoisfull = divid;
    
  $("#botaosair").css("display", "initial");
    
  doczoom = true;
    
} else {

  $("body").css("overflow", "scroll"); 
  $(whoisfull).css("display", "none");
  $(whoisfull).css("position", "relative");
  $(whoisfull).css("width", "100%");
  $(whoisfull).css("height", "380px");
  $(whoisfull).css("z-index", "");
  $(whoisfull).css("top", "");
  $(whoisfull).css("right", "");
  
  $("#botaosair").css("display", "none");
  
  whoisfull = "";
    
  doczoom = false;
 
  
}  

}

function trocamarcadores() {

if(typeof marcadores !== 'undefined') {

      var ultimo = "";

      for (registro in marcadores) {

        $('#' + registro).removeClass('navligado');
        
        positY = document.getElementById(marcadores[registro]).getBoundingClientRect().top;
        if (positY < 50) {

          ultimo = registro;

        }
        
      }

      if (ultimo != "") {

        $('#' + ultimo).addClass('navligado');

      }

    }

}



$(document).ready(function() {

    trocamarcadores();

    if ($("body").width() >= 1300 || ($("body").width() > 854 && $("body").width() < 1300 && abaoffset == 0)) {

    $('#columnright').css("position", "fixed").css("overflow", "visible").css("width", "315px").css("right", ( ((($("body").width() - $("#wrap").width() - abaoffset)/2)  ) + "px" )  ).css("height", "100%");  
    $('#columnleft').css("padding-right", "0").css("width", "calc(100% - 330px");

    }

    if ($("body").width() > 854 && $("body").width() < 1300 && abaoffset > 0) {

    $('#columnright').css("overflow", "hidden").css("width", "0");
    $('#columnleft').css("padding-right", "10px").css("width", "100%");

    if ($("body").width() <= 854 && abaoffset == 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");

    }

    if ($("body").width() <= 854 && abaoffset > 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");
      $('#works').css("width", "100%");
 
    }

  }

  /*
  
    FUNÇÃO QUE MARCA OS ÍNDICES NO SUMÁRIO, CONFORME VÃO PASSANDO

   */
  
  $(window).scroll(function() {
    trocamarcadores();
  });




  
  
  $(window).resize(function() {

    trocamarcadores();
    
    if ($("body").width() >= 1300 || ($("body").width() > 854 && $("body").width() < 1300 && abaoffset == 0)) {

    $('#columnright').css("position", "fixed").css("overflow", "visible").css("width", "315px").css("right", ( ((($("body").width() - $("#wrap").width() - abaoffset)/2)  ) + "px" )  ).css("height", "100%");
    $('#columnleft').css("padding-right", "0").css("width", "calc(100% - 330px");  


    }

    if ($("body").width() <= 854 && abaoffset == 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");

    }

    if ($("body").width() <= 854 && abaoffset > 0) {

      $('#columnleft').css("padding-right", "0").css("width", "100%"); 
      $('#container').css("width", "85%").css("min-width", "320px").css("margin-left", "auto");
      $('#columnright').css("position", "fixed").css("overflow", "hidden").css("width", "0").css("right", "0" ).css("height", "100%");
      $('#works').css("width", "100%");
 
    }


    if ($("body").width() > 854 && $("body").width() < 1300 && abaoffset > 0) {

    $('#columnright').css("overflow", "hidden").css("width", "0");
    $('#columnleft').css("padding-right", "10px").css("width", "100%");



    }


    });
              
                   
});
  
                  
  