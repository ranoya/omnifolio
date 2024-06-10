/*

	ROTINAS PARA ABRIR E FECHAR BLOCOS COM 
	META-INFORMAÇÕES E MODIFICAÇÕES DE INTERFACE
	EM DECORRÊNCIA DESSES TRANSFORMADORES

 */


ismobile = "false";
w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
if (w < 650) {
    ismobile = "true";
}

positname = "";
newpositname = "";
scrollpoint = 0;

function docScroll(tamanho) {

    closeMeta(tamanho);

    positname = document.getElementById('titulocapitulo').textContent;
    if (newpositname != positname) {
        newpositname = positname;
        document.getElementById('posicao').innerHTML = positname + " | <svg id='copyright-logo' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'><rect width='16' height='16' /><rect width='16' height='16' /><line x1='3' y1='3.5' x2='7' y2='3.5' /><line x1='3' y1='6.5' x2='8' y2='6.5' /><line x1='5' y1='9.5' x2='7' y2='9.5' /><line x1='8' y1='9.5' x2='10' y2='9.5' /><line x1='3' y1='12.5' x2='9' y2='12.5' /><line x1='11' y1='9.5' x2='14' y2='9.5' /><line x1='8' y1='3.5' x2='9' y2='3.5' /><line x1='10' y1='3.5' x2='13' y2='3.5' /><line x1='9' y1='6.5' x2='12' y2='6.5' /></svg> Copyright © 2019, Prof. Dr. Guilherme Ranoya";
    }

    if (tamanho > 700) {

        document.getElementById('posicao').style.bottom = 0;
        document.getElementById('meta').style.bottom = "60px";
        document.getElementById('posicaocompensate').style.height = "60px";

    } else {

        document.getElementById('posicao').style.bottom = "-60px";
        document.getElementById('meta').style.bottom = 0;
        document.getElementById('posicaocompensate').style.height = 0;

    }

    if (w <= 900) {
        document.getElementById("AutoIndex").style.display = "none";
        document.getElementById("texto").style.width = "100%";
        document.getElementById("texto").style.marginLeft = 0;
    } else {
        document.getElementById("AutoIndex").style.display = "block";
        document.getElementById("texto").style.width = "calc(100% - 200px)";
        document.getElementById("texto").style.marginLeft = "130px";
    }

    let ultimo = 0;

    for (let marcadores = 0; marcadores < makeindice.length; marcadores++) {
        document.getElementById('anc' + marcadores).className = "anchorOff";
        spY = document.getElementById('pointer' + marcadores).getBoundingClientRect().top;
        if (spY < 100) {
            ultimo = marcadores;
        }
    }

    document.getElementById('anc' + ultimo).className = "anchorOn";
    document.getElementById("AutoIndex").style.top = "calc(50vh - " + document.getElementById('AutoIndex').getBoundingClientRect().height + "px)";




}

function docResize(w, h) {
    if (w <= 900) {
        document.getElementById("AutoIndex").style.display = "none";
        document.getElementById("texto").style.width = "100%";
        document.getElementById("texto").style.marginLeft = 0;
    } else {
        document.getElementById("AutoIndex").style.display = "block";
        document.getElementById("AutoIndex").style.top = "calc(50vh - " + document.getElementById('AutoIndex').getBoundingClientRect().height + "px)";
        document.getElementById("texto").style.width = "calc(100% - 200px)";
        document.getElementById("texto").style.marginLeft = "130px";

    }
}

window.addEventListener("scroll", function (event) {

    scroll = this.scrollY;
    docScroll(scroll);


});


document.addEventListener("DOMContentLoaded", function (event) {


});


function closeMeta(pontoderef) {

    if (metastate == true && (pontoderef < (scrollpoint - 700) || pontoderef > (scrollpoint + 700))) {

        metastate = false;
        document.getElementById('meta').style.height = 0;
        document.getElementById('meta').style.paddingTop = 0;
        document.getElementById('meta').style.paddingBottom = 0;
        document.getElementById('metacompensate').style.height = 0;

    }

}


metastate = false;
lastconteudo = "";

function openMeta(conteudo) {

    if (!metastate) {

        scrollpoint = scroll;

        lastconteudo = conteudo;
        console.log(lastconteudo + " / " + conteudo);
        metadivs = document.getElementById("meta").childNodes;

        for (i = 0; i < metadivs.length; i++) {
            if (metadivs[i].nodeType == 1) {
                metadivs[i].style.display = "none";
            }
        }

        document.getElementById(conteudo).style.display = "block";

        metastate = true;
        document.getElementById('meta').style.height = "80px";
        document.getElementById('meta').style.paddingTop = "40px";
        document.getElementById('meta').style.paddingBottom = "30px";
        document.getElementById('metacompensate').style.height = "150px";

    } else if (metastate == true && conteudo == lastconteudo) {

        metastate = false;
        document.getElementById('meta').style.height = 0;
        document.getElementById('meta').style.paddingTop = 0;
        document.getElementById('meta').style.paddingBottom = 0;
        document.getElementById('metacompensate').style.height = 0;
        console.log(lastconteudo + " / " + conteudo);

    } else if (metastate == true && conteudo != lastconteudo) {

        lastconteudo = conteudo;
        for (i = 0; i < metadivs.length; i++) {
            if (metadivs[i].nodeType == 1) {
                metadivs[i].style.display = "none";
            }
        }

        document.getElementById(conteudo).style.display = "block";

        metastate = true;
        console.log(lastconteudo + " / " + conteudo);

    }


}

verificamenu = setInterval(function () {

    if (document.getElementById('AutoIndex')) {
        if (menuisopen) {
            document.getElementById('AutoIndex').style.left = "-" + tamanhoSumarion;
        } else {
            document.getElementById('AutoIndex').style.left = 0;
        }
    }


}, 100);