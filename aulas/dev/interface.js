let isopen = false;
let oldwhat = "";
let samleft = "30px";
let sambottom = "30px";
let w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
let h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
let indicew = 10;
let work = 0;
let workmax = 45;
let calend = 320;
let content = 90;


// FUNÇÃO URL GET
// urlGet('xpto'); www.site.com/?xpto=teste
// let data = $_GET['xpto']; www.site.com/?xpto=teste
urlGet = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    } else {
        return results[1] || 0;
    }
};

$_GET = [];
(function () {
    corte = window.location.href.toString().indexOf('?');
    if (corte > 0) {
        argumento = window.location.href.toString().substring(corte + 1);
        argumentos = argumento.split('&');
        for (arg in argumentos) {
            let argCorte = argumentos[arg].indexOf('=');
            $_GET[argumentos[arg].substring(0, argCorte)] = argumentos[arg].substring(argCorte + 1);
        }
    }
})();


// Pega dados de cookies
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
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





function BrowserResize() {

    if (document.body.scrollTop > 3000) {
        samleft = "-60px";
        if (document.getElementById("samBlock").style.left == "30px") {
            document.getElementById("samBlock").style.left = samleft;
        }
    } else {
        samleft = "30px";
        if (document.getElementById("samBlock").style.left == "-60px") {
            document.getElementById("samBlock").style.left = samleft;
        }
    }

    trocamarcadores();
    w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;




    if (w < 850) {
        calend = 0;
        document.getElementById('coluna4').style.right = "-350px";
    } else {
        calend = 320;
        document.getElementById('coluna4').style.right = 0;
    }

    if (w < 1250) {

        indicew = 0;

        if (work > 0) {
            work = workmax;
            contentleft = work;
            document.getElementById('coluna2').style.left = 0;
            document.getElementById('coluna4').style.right = "-350px";
            calend = 0;
        } else {
            contentleft = indicew;
            document.getElementById('coluna2').style.left = "-100%";
        }

        content = (100 - contentleft);
        document.getElementById('coluna1').style.left = "-200px";

    }

    if (w >= 1250) {

        if (work > 0) {
            indicew = 0;
            contentleft = work;
            document.getElementById('coluna1').style.left = "-200px";
            document.getElementById('coluna2').style.left = 0;
            document.getElementById('coluna4').style.right = "-350px";
            calend = 0;
        } else {
            indicew = 10;
            contentleft = indicew;
            document.getElementById('coluna1').style.left = 0;
            document.getElementById('coluna2').style.left = "-50%";
        }

        content = (100 - contentleft);


    }


    if (w < 650) {
        workmax = 95;
        document.getElementById('coluna2').style.width = w + "px";
        document.getElementById('coluna3').style.width = "calc(100vw - 40px)";
        document.getElementById('coluna3').style.left = "20px";
    } else {
        workmax = 45;
        document.getElementById('coluna2').style.width = "calc(45vw + 10px)";
        document.getElementById('coluna3').style.width = "calc(" + content + "vw - " + (calend + 40) + "px)";
        document.getElementById('coluna3').style.left = "calc(" + contentleft + "% + 20px)";
    }



    if (!isopen) {
        document.getElementById("samBlock").style.bottom = sambottom;
        document.getElementById("samBlock").style.left = samleft;
    } else {
        //document.getElementById("samBlock").style.bottom = "calc(100vh - 145px)";
        document.getElementById("samBlock").style.left = "calc(" + (workmax / 2) + "% - 20px)";
    }


}



function openwork(what) {




    if (!isopen) {
        //document.getElementById("samBlock").style.bottom = "calc(100vh - 145px)";
        //document.getElementById("samBlock").style.left = "calc(" + (workmax - 3) + "% - 20px)";
        if (what != "sam") {
            document.getElementById('espacowork').src = what;
            document.getElementById('espacowork').style.display = "inline-block";
            document.getElementById("samthings").style.display = "none";
            document.getElementById("coluna2").style.backgroundColor = "var(--invert-color, white)";
        } else {
            document.getElementById('espacowork').style.display = "none";
            document.getElementById("samthings").style.display = "inline-block";
            document.getElementById("coluna2").style.backgroundColor = " var(--darker-color, #42008a)";
        }
        work = workmax;

        isopen = true;


        BrowserResize();


        oldwhat = what;

    } else {

        if (what != oldwhat) {
            //document.getElementById("samBlock").style.bottom = "calc(100vh - 145px)";
            //document.getElementById("samBlock").style.left = "calc(" + (workmax - 3) + "% - 20px)";
            if (what != "sam") {
                document.getElementById('espacowork').src = what;
                document.getElementById('espacowork').style.display = "inline-block";
                document.getElementById("samthings").style.display = "none";
                document.getElementById("coluna2").style.backgroundColor = "var(--invert-color, white)";
            } else {
                document.getElementById('espacowork').style.display = "none";
                document.getElementById("samthings").style.display = "inline-block";
                document.getElementById("coluna2").style.backgroundColor = "var(--darker-color, #42008a)";
            }
            contentleft = indicew;
            document.getElementById('coluna3').style.width = "calc(" + content + "vw - " + (calend + 40) + "px)";
            document.getElementById('coluna3').style.left = "calc(" + contentleft + "% + 20px)";
            oldwhat = what;
            BrowserResize();


        } else {
            //document.getElementById("samBlock").style.bottom = sambottom;
            //document.getElementById("samBlock").style.left = samleft;
            work = 0;
            isopen = false;
            BrowserResize();

        }
    }


}


function trocamarcadores() {

    if (typeof marcadores !== 'undefined') {

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


// FUNÇÕES NECESSÁRIAS PARA CONTROLE DA INTERFACE
// COM MUDANÇAS NO NAVEGADOR

document.addEventListener("DOMContentLoaded", function (event) {
    if ($_GET['nosam']) {
        document.getElementById('samBlock').style.display = "none";
    }
    document.getElementById("samBlock").style.left = samleft;
    document.addEventListener("DOMSubtreeModified", BrowserResize);
    window.addEventListener("resize", BrowserResize);
    document.addEventListener("scroll", BrowserResize);
});