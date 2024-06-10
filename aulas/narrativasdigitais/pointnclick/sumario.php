 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="pointclickstyle.css" rel="stylesheet">
    <?php

        if ($_GET['theme']) {

            echo "<link href='".$_GET['theme']."theme.css' rel='stylesheet'>";

        }

    ?>


    <style>

        #viz {
            width: 100%;
            display: grid;
            grid-row-gap: 10px;
            grid-column-gap: 10px;
            grid-template-columns: 1fr 1fr;
        }

        .bigano {
            padding: 0;
            margin: 0;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bolder;
            font-size: 72px;
            width: 180px;
            height: 72px;
            /* border: 1px solid black; */
            float: left;
            clear: left;
            display: inline-block;
            color: var(--linemark, #cccccc);
        }

        .listaprodutos {
            padding: 0;
            margin: 0;
            height: 72px;
            float: left;
            clear: right;
            width: calc(100% - 222px);
            padding-left: 40px;
            /* border: 1px solid red; */
            display: inline-block;
            overflow: hidden;
        }

        .sumpnclink {
            border: 5px solid var(--card-link, #cccccc);
            width: 62px;
            height: 62px;
            display: inline-block;
            margin-left: -40px;
            transition: all .3s ease-in;
            background-color: transparent;
            overflow: hidden;


        }

        .sumpnclink:hover {
            transition: all .2s ease-in;
            border: 5px solid var(--card-link-hover, black);
            position: relative;
            z-index: 1000;
            width: calc(62px + 130px);
        }

        .sumpncthumbitself {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 62px;
            height: 62px;
            display: inline-block;

        }
        
        .sumpnctitle {
            font-family: Helvetica, Arial, sans-serif;
            padding: 0;
            margin: 0;
            float: left;
            display: inline-block;
            width: 125px;
            font-size: 11px;
            text-align: left;
            background-color: var(--card-link-hover, black);
            color: white;
            height: 57px;
            margin-left: 62px;
            padding-left: 5px;
            padding-top: 5px;
            overflow: hidden;
        }

        .sumpnclink:hover .sumpnctitle {
            display: inline-block;
        }

        .microtipologia {
            font-size: 9px
            line-height: 10px;;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {

            #viz {
                grid-column-gap: 0;
                grid-template-columns: 1fr;
            }
        }
        
    </style>


    <script>

    function VideoGridParseURL(url) {
    // - Supported YouTube URL formats:
    // - http://www.youtube.com/watch?v=My2FRPA3Gf8
    // - http://youtu.be/My2FRPA3Gf8
    // - https://youtube.googleapis.com/v/My2FRPA3Gf8
    // - https://m.youtube.com/watch?v=My2FRPA3Gf8
    // - Supported Vimeo URL formats:
    // - http://vimeo.com/25451551
    // - http://player.vimeo.com/video/25451551
    // - Also supports relative URLs:
    // - //player.vimeo.com/video/25451551

    var tipovideo = 'none';

    if (url.indexOf('youtu') <= -1 && url.indexOf('vimeo') <= -1) {
        return {
            type: 'none',
            id: 'none'
        };
    } else {
        url.match(
            /(http:|https:|)\/\/(player.|www.|m.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/
        );
        if (RegExp.$3.indexOf('youtu') > -1) {
            tipovideo = 'youtube';
        }

        if (RegExp.$3.indexOf('vimeo') > -1) {
            tipovideo = 'vimeo';
        }

        return {
            type: tipovideo,
            id: RegExp.$6
        };
    }

}

function youtubeImage(url) {


    var thumbSplit = "";
    var retorno = "";
    var thumbSRC;
    var videoDetails = VideoGridParseURL(url);
    var videoType = videoDetails.type;
    var videoID = videoDetails.id;

    return 'https://img.youtube.com/vi/' + videoID + '/0.jpg';


}


function sumarizapandc(url, el) {

    fetch(url).then(response => response.json()).then((dados) => {
        console.table(dados);

        var actualano = "";
        var lastano = "";
        var popula = "";
        var tipo = "";
        
        for (var linha = 0; linha < dados.length; linha++) {

            actualano = dados[linha].ano;

            if (actualano != lastano) {

                popula += "<div>";
                popula += "<span class='bigano'>"+actualano+"</span>";
                popula += "<div class='listaprodutos'>";
                lastano = actualano;

            }

            tipo = "";

            if (dados[linha].textadv == "X") {
                tipo = "Text Adventure";
            }

            if (dados[linha].animation == "X") {
                tipo = "Interactive Animation";
            }

            if (dados[linha].linearadventure == "X") {
                tipo = "Linear Graphic Adventure";
            }

            if (dados[linha].textoriented == "X") {
                tipo = "Dialog Graphic Adventure";
            }

            if (dados[linha].graphicadventure == "X") {
                tipo = "Graphic Adventure";
            }

            popula = popula + '<a target=\'_blank\' class=\'sumpnclink\' href=\'' + dados[linha].link + '\'><div style=\"background-image: url(\'' + youtubeImage(dados[linha].link) + '\' );\" class=\'sumpncthumbitself\'><div class=\'sumpnctitle\'><b>'+dados[linha].titulo+'</b><br>'+dados[linha].publisher+'<br><span class=\'microtipologia\'>'+tipo+'</span></div></div></a>';

            
            if (linha  >= dados.length - 1 || (linha < dados.length -1 && actualano != dados[linha+1].ano)) {
                popula += "</div></div>";
            }
            
            


        }
        

        document.getElementById(el).innerHTML = popula;

    });
}


    </script>

</head>

<body>

<div id='viz'></div>

<script>
sumarizapandc('https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv', 'viz');
</script>

</body>

</html>
