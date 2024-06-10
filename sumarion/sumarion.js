/**
 * 
 * SUMARION
 * Guilherme Ranoya
 *
 */
let sumarionsize = 360;

if (typeof menusize !== 'undefined') {
  sumarionsize = menusize;
}

// document.write('<link rel="stylesheet" type="text/css" href="https://www.ranoya.com/sumarion/default.css">');

var includeSumarion = document.createElement("link");
includeSumarion.type = "text/css";
includeSumarion.rel = "stylesheet";
includeSumarion.href = "https://www.ranoya.com/sumarion/default.css";
document.head.appendChild(includeSumarion);

/*
 * Variáveis e contexto
 */

var sumariojson = "index.json";
var menuisopen = false;
var menutype = "default";
var scroll = 0;
var quantostopicos = 0;
var topicoatual = 0;
var nextlink = "";
var prevlink = "";
var nextlinkname = "";
var prevlinkname = "";
var fulljson = {};


var ismobile = "false";
w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
if (w < 650) {
  ismobile = "true";
}


// captura variáveis da URL
function getparam(p, fallback, anyurl) {

  if (anyurl == "" || anyurl == null) {
    turl = String(window.location);
  } else {
    turl = String(anyurl);
  }

  grupo = "";

  if (turl.indexOf(p + "=") >= 0) {
    iniciogrupo = turl.substring(turl.indexOf(p + "="));
    if (iniciogrupo.indexOf('&') >= 0) {
      grupo = iniciogrupo.substring(p.length + 1, iniciogrupo.indexOf('&'));
    } else {
      grupo = iniciogrupo.substring(p.length + 1);
    }
  } else {
    grupo = fallback;
  }
  return grupo;

}

// inclui o sumário e separa o conteudo em uma div no DOM
function fazenchertoinicial() {


  original = document.body.innerHTML;
  prehtml = '<div id="sumarionblock"><input type="text" id ="sumarionfilter" placeholder ="&#9906;" /><br><div id="sumarionconteudo"></div></div><a href="javascript:changesumarionstate();" id="sumarionlink"><svg id="sumarionicon" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg"><line x1="5" y1="40" x2="75" y2="40" class="smallline" /><polygon points="0,-40 40,0 0,40 -40,0"  stroke-width="10" /></svg></a><div id="conteudodocumento">';
  poshtml = "</div>";
  encherto = prehtml + original + poshtml;
  document.body.innerHTML = encherto;

  navrodape = document.getElementById('bookendnav');

  navrodape.innerHTML = "<a id='npage' onclick='nextpage()'><svg class='npsumarionicon' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'><line x1='5' y1='40' x2='75' y2='40' class='mediumline' /><polygon points='0,-40 40,0 0,40 -40,0' transform='translate(40 40)' stroke-width='10' /></svg></a><a id='ppage' onclick='prevpage()'><svg class='npsumarionicon' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'><line x1='5' y1='40' x2='75' y2='40' class='mediumline' /><polygon points='0,-40 40,0 0,40 -40,0' transform='translate(40 40)' stroke-width='10' /></svg></a>";

}

// abre ou fecha o sumário
function changesumarionstate() {

  document.getElementById("sumarionicon").style.transformOrigin = "35% 40%";

  console.log("abrindo/fechando sumário");
  w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  tamanhoSumarion = sumarionsize + "px";

  if (w < 550) {
    tamanhoSumarion = "100vw";
  }

  if (menuisopen) {
    menuisopen = false;
    document.getElementById("sumarionicon").style.transform = "rotate(0deg)";

    if (menutype == "default") {
      document.getElementById('sumarionblock').style.right = "-" + tamanhoSumarion;
      document.getElementById('sumarionblock').style.width = tamanhoSumarion;
      document.getElementById('conteudodocumento').style.marginLeft = 0;
      document.getElementById('conteudodocumento').style.paddingRight = 0;
    }

  } else {
    menuisopen = true;
    document.getElementById("sumarionicon").style.transform = "rotate(180deg)";

    if (menutype == "default") {
      document.getElementById('sumarionblock').style.right = 0;
      document.getElementById('sumarionblock').style.width = tamanhoSumarion;
      document.getElementById('conteudodocumento').style.marginLeft = "-" + tamanhoSumarion;
      document.getElementById('conteudodocumento').style.paddingRight = "8px";
    }

  }

}


// carrega json e popula dados
function carregadados() {

  fetch(sumariojson).then(response => response.json()).then((data) => {

    document.getElementById('sumarionconteudo').innerHTML = apresentaElementos(data);
    quantostopicos = data.length;
    fulljson = data;
    ativasearch();

  });

}


// select in array
filtraarray = function (arr, termo) {

  let patt = new RegExp(termo, "i");
  let newarr = [];
  let testa = false;

  for (let k = 0; k < arr.length; k++) {
    testa = false;

    for (let z = 0; z < Object.keys(arr[k]).length; z++) {
      if (patt.test(arr[k][Object.keys(arr[k])[z]])) {
        testa = true;
      }
    }

    if (testa) {
      newarr.push(arr[k]);
    }
  }

  return newarr;
}


// ativa o search
function ativasearch() {
  document.getElementById('sumarionfilter').addEventListener('input', function (evt) {
    rodasearch(document.getElementById('sumarionfilter').value);
  });
}

// roda o search
let newomniarray = "";
let menu = "";

function rodasearch(novodado) {

  newomniarray = filtraarray(fulljson, novodado);
  menu = apresentaElementos(newomniarray);
  document.getElementById('sumarionconteudo').innerHTML = menu;

}


// constroi código html do sumário
function apresentaElementos(json) {

  codigohtml = "";
  captold = "";
  capatual = "";
  jsonurlL = "";
  jsonurlR = "";
  brwurlL = "";
  brwurlR = "";



  for (i = 0; i < json.length; i++) {

    capatual = json[i].capitulo;

    if (captold != capatual && (json[i].preview == undefined || (getparam('preview') != undefined && json[i].preview != undefined))) {

      codigohtml = codigohtml + "<h2 class='capitulo'>" + json[i].capitulo + "</h2>";
      captold = capatual;

    }

    jsonurlL = json[i].url;

    if (json[i].url.indexOf("http://") > 0) {

      jsonurlL = json[i].url.substring(7);

    }

    if (json[i].url.indexOf("https://") > 0) {

      jsonurlL = json[i].url.substring(8);

    }

    if (jsonurlL.indexOf("?") > 0) {

      jsonurlR = jsonurlL.substring(0, jsonurlL.indexOf("?"));

    } else {

      jsonurlR = jsonurlL;

    }

    brwurlL = String(window.location);

    if (String(window.location).indexOf("http://") > 0) {

      brwurlL = String(window.location).substring(7);

    }

    if (String(window.location).indexOf("https://") > 0) {

      brwurlL = String(window.location).substring(8);

    }

    if (brwurlL.indexOf("?") > 0) {

      brwurlR = brwurlL.substring(0, brwurlL.indexOf("?"));

    } else {

      brwurlR = brwurlL;

    }

    if (jsonurlR == brwurlR) {


      codigohtml = codigohtml + "<p class='topico estapagina'>" + json[i].topico + "</p>";
      topicoatual = i;

      if (json[i + 1]) {
        nextlink = json[i + 1].url;
        nextlinkname = json[i + 1].topico;
      } else {
        document.getElementById('npage').style.display = "none";
      }

      if (i >= 1 && (json[i - 1].url != "" && json[i - 1].url != undefined)) {
        prevlink = json[i - 1].url;
        prevlinkname = json[i - 1].topico;
      } else {
        document.getElementById('ppage').style.display = "none";
      }


    } else {

      if ((json[i].url != "" && json[i].url != undefined) && (json[i].preview == undefined || (getparam('preview') != undefined && json[i].preview != undefined))) {
        codigohtml = codigohtml + "<a href='" + json[i].url + "' class='topico'>" + json[i].topico + "</a>";
      } else {
        if (json[i].preview == undefined || (getparam('preview') != undefined && json[i].preview != undefined)) {
          codigohtml = codigohtml + "<br>";
        }
      }

    }


  }

  return codigohtml;

}


function nextpage() {

  if (fulljson[topicoatual + 1]) {
    window.location = fulljson[topicoatual + 1].url;
  }

}

function prevpage() {

  if (topicoatual >= 1) {
    window.location = fulljson[topicoatual - 1].url;
  }

}




/*
 * Ao carregar o documento
 */

document.addEventListener("DOMContentLoaded", function (event) {

  if (window.navigator.platform.toString().indexOf("Mac") < 0) {
    document.body.id = "nomac";
  }

  if (getparam('embed') == "plain") {

    document.getElementById('bookendnav').style.display = "none";

  }

  if (getparam('embed') != "plain" && getparam('embed') != "none") {
    fazenchertoinicial();
    carregadados();
    document.getElementById("conteudodocumento").addEventListener("scroll", function () {
      scroll = this.scrollTop;

      // Se uma função docScroll(int) for definida, ela será chamada quando houver scroll
      if (typeof (docScroll) != "undefined") {
        docScroll(scroll);
      }

    });

  }


});


/*
 * Ao fazer resize
 */

window.addEventListener("resize", function () {

  w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  // Se uma função docResize(int,int) for definida, ela será chamada quando houver resize
  if (typeof (docResize) != "undefined") {
    docResize(w, h);
  }


  // Redimensiona o sumarion caso ele esteja aberto
  if (menuisopen && getparam('embed') != "plain" && getparam('embed') != "none") {

    tamanhoSumarion = sumarionsize + "px";

    if (w < 550) {
      tamanhoSumarion = "100vw";
    }

    if (menutype == "default") {
      document.getElementById('sumarionblock').style.right = 0;
      document.getElementById('sumarionblock').style.width = tamanhoSumarion;
      document.getElementById('conteudodocumento').style.marginLeft = "-" + tamanhoSumarion;

    }

  }

});