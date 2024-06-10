/*

	ROTINAS PARA ABRIR E FECHAR BLOCOS COM 
	META-INFORMAÇÕES E MODIFICAÇÕES DE INTERFACE
	EM DECORRÊNCIA DESSES TRANSFORMADORES

 */


ismobile = "false";
w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
if (w<650) {
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
    	document.getElementById('posicao').innerHTML = positname + " | Guilherme Ranoya";
    }

	if (tamanho>700) {

	document.getElementById('posicao').style.bottom = 0;
    document.getElementById('meta').style.bottom = "60px";
    document.getElementById('posicaocompensate').style.height = "60px";

	} else {

	document.getElementById('posicao').style.bottom = "-60px";
    document.getElementById('meta').style.bottom = 0;
    document.getElementById('posicaocompensate').style.height = 0;

	}




}

window.addEventListener("scroll", function (event) {
    
    scroll = this.scrollY;
    docScroll(scroll);


});


document.addEventListener("DOMContentLoaded", function(event) {

	  
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
		
		for (i=0; i<metadivs.length; i++) {
			if (metadivs[i].nodeType == 1) {
				metadivs[i].style.display = "none";
			}
		}

		document.getElementById(conteudo).style.display="block";

		metastate = true;
		document.getElementById('meta').style.height = "80px";
		document.getElementById('meta').style.paddingTop = "40px";
		document.getElementById('meta').style.paddingBottom = "30px";
		document.getElementById('metacompensate').style.height = "150px";

	} else if(metastate == true && conteudo == lastconteudo) {

		metastate = false;
		document.getElementById('meta').style.height = 0;
		document.getElementById('meta').style.paddingTop = 0;
		document.getElementById('meta').style.paddingBottom = 0;
		document.getElementById('metacompensate').style.height = 0;
		console.log(lastconteudo + " / " + conteudo);

	} else if(metastate == true && conteudo != lastconteudo) {

		lastconteudo = conteudo;
		for (i=0; i<metadivs.length; i++) {
			if (metadivs[i].nodeType == 1) {
				metadivs[i].style.display = "none";
			}
		}

		document.getElementById(conteudo).style.display="block";

		metastate = true;
		console.log(lastconteudo + " / " + conteudo);

	}


}