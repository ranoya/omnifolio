<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="pointclickstyle.css" rel="stylesheet">
    <script src="pointclickparser.js"></script>
    <?php

        if ($_GET['theme']) {

            echo "<link href='".$_GET['theme']."theme.css' rel='stylesheet'>";

        }

    ?>

</head>

<body>

    <style>
        html,
        body {
            margin: 10px;
            padding: 0;
            margin-top: 10px;
            margin-left: 15px;
            background-color: transparent !important;
        }

        html {
            background-color: var(--bg-color, white);
        }

        .specific {
            width: calc(100vw - 50px);
            margin-left: 0;
        }

        .backgroundThumbs {
            width: 100%;
            height: 600px;
            background-position: center center;
            background-size: cover;
        }
        #tintcolor {
            background-color: var(--bg-color, white);
        }
    </style>

    <div id="diagramapointandclickBackground" style="position: fixed; top: 0; left: 0; width: 100%; z-index: -2;"></div>
    <div id="tintcolor" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; opacity: .95;"></div>
    

    <div class="pncintro specific" style="position: relative; z-index: 3;">

        <h1>Point & Click Adventures</h1>

        <p>Os Point & Click Adventures são artefatos narrativos que nasceram nas mídias digitais. Geralmente
            confundidos ou tratados como jogos, estes artefatos não são exatamente jogos: eles se aproximam mais da
            lógica do brinquedo ou do livro infantil, mesmo que uma razoável parcela deles contem, geralmente, com
            pequenos quebra-cabeças que precisam ser resolvidos para a progressão da história. O Point & Click
            Adventure é uma transposição das aventuras interativas em texto, como o <a class='textolink' target='_blank' href='https://rickadams.org/adventure/advent/'>Colossal Cave Adventure</a> (um dos primeiros <i>Text Oriented Adventures</i>), se apropriando da linguagem gráfica dos quadrinhos ou das animações infantis para a mídia digital, oferencendo ao
            leitor/receptor/usuário a liberdade de transitar pelos cenários e ambientes, e agir neles para que a
            narrativa se desenvolva.</p>

        <div class='documentarios'>
            <iframe src="https://www.youtube.com/embed/l_1TZoNiW6U" title="SIERRA On-Line Documentary (feat LGR)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe src="https://www.youtube.com/embed/iBhvd1970Zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe src="https://www.youtube.com/embed/-AS2Mk5kJto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>

        <p>O Point & Click Adventure é um dos primeiros esforços criativos na tentativa de transformar o computador (e
            a computação) em mídia, como suporte construtor de sentidos e significações; um dos primeiros esforços em
            utilizar o código computacional para uma finalidade lúdica, e não produtiva. A tipologia inaugural da
            narrativa no contexto digital.</p>

        
        <br><br>
        <h2>Gênero narrativo</h2>
        <p>Seleciona artefatos de acordo com a temática (gênero) da narrativa.</p>
        <p style="margin: 0; padding: 0; width: 100%;">
            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgenaventura" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Aventura</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgencomedia" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Comédia</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgencavalaria" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Cavalaria</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgenfantasia" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Fantasia</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgencientifica" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Ficção Científica</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgenterror" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Terror</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgenpolicial" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Policial</span>
            </span>

            <span style="display: inline-block">        
            <input type="checkbox" class="tipologiagenero" id="pncgencyberpunk" onchange="pncParametricGen(this.id,this.checked)"> <span style="margin-right: 30px;">Cyber Punk</span>
            </span>



        </p>


        <br><br>
        <h2>Tipologia de linguagem</h2>

        <p>Seleciona artefatos de acordo com o tipo de expressão gráfica, traço ou estilo, com os quais foram produzidos (ou se basearam).</p> 
        <p style="margin: 0; padding: 0; width: 100%;">
            <span style="display: inline-block">        
            <input type="checkbox" class="tipologialinguagem" id="hqlang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Quadrinhos</span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="animationlang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Filme de animação</span>
            </span>
             
            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="literaturainfantillang
            " onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Ilustração de livros infantis </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="pixelartlang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Pixel Art </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="computergraphicslang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Computação Gráfica / Jogos 3D </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="estilizadolang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Estilizado </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="retrolang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Retrô </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="outralinguagemlang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">2.5D (3D sem livre movimento) </span>
            </span>

            <span style="display: inline-block">
            <input type="checkbox" class="tipologialinguagem" id="exceptionallang" onchange="pncParametricLang(this.id,this.checked)"> <span style="margin-right: 30px;">Outros </span>   
            </span>   
        </p>

        <br><br>
        <h2>Parte de uma série</h2>

        <p style="margin: 0; padding: 0; width: 100%;">
            <span style="display: inline-block">        
            <input type="checkbox" class="seriadosounao" id="produto" onchange="pncParametricSerie(this.id,this.checked)"> <span style="margin-right: 30px;">Seleciona apenas artefatos que fazem parte de uma série.</span><br>
            <input type="checkbox" class="seriadosounao" id="singular" onchange="pncParametricSerie(this.id,this.checked)"> <span style="margin-right: 30px;">Seleciona apenas artefatos singulares.</span>
            </span>
        </p>

        <br><br>

        <h2>Ano</h2>
        <p style="margin: 0; padding: 0; width: 100%;">
            <input type="checkbox" id="ordena" onchange="pncParametricOrdenacao(this.checked)"> Ordena a visualização
            dos artefatos: dos mais recentes para os mais antigos
        </p>
        <p style="margin-bottom: 0; padding-bottom: 0;">Defina um período (ano inicial e ano final) para localização dos
            artefatos:</p>

        <p style="margin-bottom: 0; padding-bottom: 0;">
            <input type="range" id="anoinit" value=0 onchange="pncParametricYStart(this.value)">
            <input type="range" id="anofim" value=100 onchange="pncParametricYEnd(this.value)">
            <div id="anoinitnumber">1977</div>
            <div id="anofimnumber">
                <script>
                    var esseano = new Date();
                    document.write(esseano.getFullYear());
                </script>
            </div>
        </p>

        <a class="pncsimplelink" target="_blank" href="https://narrativas.ranoya.com/pointnclick/lista.php">Dados</a> &nbsp; <a target="_blank" class="pncsimplelink" href="https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv">Dados (JSON)</a>


    </div>
    <div class="pncdiagramaheader specific" id="cabecalho">
        <div style='grid-row-start: 1; grid-row-end: 2; border: 0;' class="pnctimeline pncupcleancut">&nbsp;</div>
        <div class="thirdlineheader">&nbsp;</div>

        <div style='grid-column-start: 2; grid-column-end: end; grid-row-start: 1; grid-row-end: trackheadend;'
            class="pncupcleancut">&nbsp;</div>


        <div style='grid-how-start: 2; grid-row-end: trackheadend; border: 0;' class="pnctimeline headercolor">&nbsp;
        </div>
        <div style='grid-how-start: 2; grid-row-end: trackheadend; grid-column-start: 3; grid-column-end: 4;'
            class="headercolor">&nbsp;</div>
        <div style='grid-how-start: 2; grid-row-end: trackheadend;' class="pncintermediario2 headercolor">&nbsp;</div>
        <div style='grid-how-start: 2; grid-row-end: trackheadend;' class="pncintermediario headercolor">&nbsp;</div>

        <div style='grid-row-start: 2; grid-row-end: trackheadend;' class="pnctextoriented pncheader headercolor">
            <br class="corrigeposicao">Text
            Oriented<br>Adventure
        </div>
        <div style='grid-row-start: 2; grid-row-end: trackheadend' class="pncgraphicadventure pncheader headercolor">
            <br>Graphic<br>
            Adventure</div>
        <div style='grid-row-start: 2; grid-row-end: trackheadend' class="pnclinearadventure pncheader headercolor">
            <br>Linear<br>
            Adventure</div>
        <div style='grid-row-start: 2; grid-row-end: trackheadend' class="pncanimation pncheader headercolor">
            <br>Interactive<br>Animation
        </div>

        <div class="thirdlinesierraagi">Sierra AGI</div>
        <div class="thirdlinesierrasci">Sierra SCI</div>
        <div class="thirdlinescumm">SCUMM</div>
    </div>

    <div id="emptydummy">&nbsp;</div>

    <div class="pncdiagramacontainer" id="diagramapointandclick">
    </div>

    <script>
        url = "https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv";
        filtrogeral = "filter=pncadv&";
        pointnclickpanel(url, "diagramapointandclick");
    </script>

</body>

</html>