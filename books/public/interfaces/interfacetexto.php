<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require '../interfaces/meta.php';
    ?>
    <title>Interfaces em modo texto | Ensaios sobre o design de interfaces digitais</title>
    <meta name="description" content="Interfaces em modo texto. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
    <meta property="og:title" content="Interfaces em modo texto | Ensaios sobre o design de interfaces digitais">
    <meta property="og:description" content="Interfaces em modo texto. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">

</head>

<body>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

        <h1 id="titulocapitulo">Interfaces em modo texto</h1>



        <div class="corpus">

            <p>Talvez seja uma certa nostalgia de minha parte, mas ando revisitando as interfaces de softwares e sistemas antigos que usei na minha juventude. Sempre tive prazer em emular os computadores e produtos digitais do passado (sobretudo os jogos que joguei na infância), mas o atual interesse é um pouco diferente: talvez um olhar mais historiográfico, de quem sente que alguma coisa na forma como estas interfaces eram elaboradas possa vir a nos dar indícios de formas melhores para fazê-las hoje.</p>

            <p>Tenho plena consciência de que esta sensação de que boas respostas possam estar no passado é o mecanismo melancôlico que transforma muitas pessoas em colecionadores compulsivos. É uma sensação muito forte - mas equivocada - de que as coisas do passado funcionavam melhor. Dentro dos dispositivos computacionais, trata-se desta ilusão de que planilhas no Lotus 1-2-3 de 1980 eram mais rápidas que um Excel em 2022, que ferramentas gráficas como o Xerox Ventura Publisher de 1984 resolvia problemas editoriais de forma menos dolorosa que um Adobe InDesign em 2020. Essa impressão tem a ver com lembranças positivas, principalmente as recordações do assombro em quão inovadoras e revolucionarias estas ferramentas eram quando surgiram: ver o primeiro mouse funcionando; a primeira interface gráfica; o primeiro preview de como algo ficaria quando impresso...</p>

            <p>Nenhuma destas ferramentas eram realmente melhores ou mais rápidas. Na verdade, eram muito mais travadas e limitadas. Tentar usá-las hoje é um verdadeiro sofrimento, e um verdadeiro banho de água fria ao reconhecer que elas realizam muito mal suas tarefas, perto daquilo que precisamos delas, hoje. Não só a quantidade de dados processados é brutalmente maior, mas a maneira como as utilizamos, em conjunto com tantas outras coisas ao mesmo tempo, é completamente incompatível com as tecnologias do passado.</p>


        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>Mas outra questão também tem instigado meu interesse, que pouco tem à ver com o problema da agilidade e eficiência de uso destas ferramentas: a questão estética em sua configuração, e as escolhas adotadas para resolver interfaceamentos e mecanismos nestes softwares, principalmente aqueles que operavam em condições bastante limitadas de expressão visual: o contexto gráfico do modo texto.</p>

            <p>Computadores pessoais e seus sistemas operacionais, até a metade da década década de 1990, funcionavam através de dois contextos de tela muito distintos: o modo gráfico, em que as ferramentas mais visuais ou os ambientes de interface gráfica com o usuário (GUI) operavam; e o modo texto, usado pela a maioria das ferramentas de escritório e os programas de manutenção do próprio computador. O segundo caso fará com que a maioria das pessoas que viveu e usou computadores no período se lembrem do MS-DOS, a interface de linha de comando (CLI) dos IBM-PCs, utilizado para acionar as demais ferramentas, gráficas ou não.</p>

            <p>O modo texto era um contexto que demandava por poucos recursos do computador, viabilizando que as ferramentas aproveitassem o máximo poder de processamento possível. Considerando que o paradigma computacional da época priorizava a performance sobre a facilidade de uso, este seria então o contexto mais popular entre os softwares. Computadores e suas interfaces levaram muito tempo para se tornarem amigáveis aos não especialistas (<i>user-friendly</i>), e durante este período estamos tratando dos últimos anos antes que a esfera do trabalho estivesse completamente operacionalizada pelos dispositivos computacionais, isto é, até a metade da década de 1990, ainda existiam trabalhos feitos sem a presença de nenhum computador em nenhum momento.</p>




        </div>

        <style>
            .imagemfu {
                width: 100%;
                padding-top: 100%;
                background-repeat: no-repeat;
                background-position: top left;
                background-size: cover;
                border: 0;
                cursor: pointer;
            }

            .imagemfu:hover {
                width: calc(100% - 16px);
                padding-top: calc(100% - 16px);
                border: 8px solid var(--text-link, #ac229d);
            }
        </style>

        <div class="corpus">
            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/dac280e7b2f24de95f4fab0cd7bc65c139feda59ca5029dd62c3856336cc47d9.png')" class="imagemfu" style='background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/dac280e7b2f24de95f4fab0cd7bc65c139feda59ca5029dd62c3856336cc47d9.png)'></div>
            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/WordStar%204.00%20-%20Edit.png')" class="imagemfu" style='background-image: url(https://winworldpc.com/res/img/screenshots/WordStar%204.00%20-%20Edit.png)'></div>
        </div>

        <span class="legenda" style='margin-top: -60px; margin-bottom: 40px;'>Interface em modo gráfico x modo texto.</span>

        <div class="corpus">
            <p>Os primeiros computadores pessoais tais como os Apple II, Commodore, Atari e MSX, dentre toda uma gama de dispositivos que foram populares do final da década de 1970 ao final da década seguinte, operavam com uma tela de texto de 40 colunas por 25 linhas, às vezes com pequenas variações cerca do número de linhas (em alguns casos 24, outros 21, mas sempre nesta dimensão), apresentando esta interface através de televisores de tubo catódico (CRT). Os IBM-PCs, equipados com monitores e não televisores, operavam com 80 colunas e as mesmas quantidades de linhas dos demais computadores, também com eventuais pequenas variações.</p>

            <p>Esta regularidade de campo é um elemento fundamental no que diz respeito a configuração das interfaces com o usuário: saber o seu tamanho, e em que ponto dele estariam seus limites, cantos, blocos superiores ou inferiores, ou poder estabelecer com precisão qual seria a coluna que se encontraria na sua metade, a linha que o divididia exatamente em duas partes, tudo isso sem esforços de design ou cálculo de geometria para compensar inúmeras possibilidades diferentes dependendo do equipamento ou sistema operacional, já representava uma enorme facilitação aos desenvolvedores de software que eram também os designers de suas interfaces.</p>

            <p>Este período vivenciou a enorme vantagem da existência de padrões e convenções sendo mantidas. Os esforços dedicados à produção das ferramentas não precisavam se ocupar com questões particulares a cada sistema ou equipamento; todos obedeciam ao mesmo padrão, e consequentemente, o uso seria exatamente o mesmo, diferenciado apenas pela potência e velocidade de cada produto computacional.</p>
        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>O primeiro nível de iterfaceamento entre o equipamento e o usuário, tratando-se dos computadores adotados na esfera corporativa, eram as interfaces de linha de comando (CLI), reconhecidas como o MS-DOS nos IBM-PCs e seus clones, mas eventualmente através dos terminais e <i>shells</i> presentes nos sistemas Unix como o Multics, o Thompson Shell, o Bourne Shell, e posteriormente o Bash no Linux e no MacOS X.</p>

            <p>Apesar de serem muito mal vistas por quem não gosta de lidar com as entranhas da computação, as CLIs são formas de interfaceamento verbal, isto é, através de instruções escritas como em uma frase ou argumentação. São de fato uma maneira muito inteligente, sofisticada, e prática, de comunicar aos dispositivos o que se deseja que eles façam. Obviamente que sua grande desvantagem é a necessidade de serem aprendidas com o mesmo esforço exigido para aprendermos a escrever em uma língua estrangeira, coisa que a grande maioria das pessoas não está mais disposta a fazer para poder utilizar um computador.</p>

            <p>Além das diversas ferramentas em modo texto, o período também contava com interfaces a sistemas remotos, acessados por ligações telefônicas através de equipamentos conhecidos como modems. Os <i>Bulletin Board Systems</i> (BBS) apresentavam interfaces através do padrão de texto ASCII ou ANSI (colorido), transferidas linha a linha de um computador para o outro. Estas interfaces permitiam o acesso a diversos serviços remotos como foruns, mensagens, download de softwares, etc. Boa parte delas se utilizava de desenhos e artes criadas com caracteres, como uma forma de expressão visual que posteriormente se transformou um movimento artístico conhecido como <a target='_blank' href='https://www.youtube.com/embed/2t74FlFL_M0'>Artscene</a>.</p>

        </div>

        <div class=' divideem4'>

            <div onclick="abreimge('https://www.howtogeek.com/wp-content/uploads/2020/08/cave_bbs_main_menu.png?trim=1,1&bg-color=000&pad=1,1')" style='background-position: top left; background-image: url(https://www.howtogeek.com/wp-content/uploads/2020/08/cave_bbs_main_menu.png?trim=1,1&bg-color=000&pad=1,1)'></div>

            <div onclick="abreimge('https://www.telnetbbsguide.com/wdprs/wp-content/uploads/2019/02/INTRO1.png')" style=' background-position: top left; background-image: url(https://www.telnetbbsguide.com/wdprs/wp-content/uploads/2019/02/INTRO1.png)'></div>

            <div onclick="abreimge('https://www.earchiv.cz/b05/gifs/b0701001.gif')" style=' background-position: top left; background-image: url(https://www.earchiv.cz/b05/gifs/b0701001.gif)'></div>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=19fp_Stq8xb5g2MsWHOfW1AKj-57OXQCy&usp=drive_fs')" style=' background-position: top left; background-image: url("https://drive.google.com/uc?export=view&id=19fp_Stq8xb5g2MsWHOfW1AKj-57OXQCy&usp=drive_fs")'></div>

        </div>

        <span class="legenda" style=' margin-bottom: 70px;'><br>Screenshots de algumas BBSs. <a target="_blank" href="https://omniboards.vercel.app/?titulo=bbs&limita=0&contentonly=true&filtra=ANSI_ASCII%20PINBOARD">Painel completo</a>. Monografia de conclusão de curso sobre <a target="_blank" href="https://blog.glyphdrawing.club/amiga-ascii-art/#233-what-is-amiga-ascii-art">arte ASCII</a>.</span>

        <div class="corpus">
            <p>As primeiras ferramentas surgem em um "mundo selvagem". Cada uma delas estabelece formas de interfaceamento diferentes. A VisiCorp e a WordStar elaboraram os primeiros softwares comerciais bom base em um conjunto de atalhos de teclado que precisariam ser memorizados pelos usuários; a Lotus elaborou um sistema de menu deslizante localizado no topo da tela, e a Microsoft fez o mesmo mas o posicionou na parte inferior, e posteriormente complementando suas ferramentas com atalhos nas teclas de função do teclado, apresentados na última linha da tela.</p>

            <p>É ainda na década de 1980 que surgem <i>patterns</i> de interface como os <a href='../dropdown.php'>menus <i>drop down</i></a>, as barras de <i>scroll</i>, os <i>check</i> e <i>radio buttons</i>, e as janelas modais sobrepostas à interface dos programas para confirmação de ações ou interações específicas.</p>

            <p>A ideia de espaços de trabalho para o usuário organizado em pequenas "janelas" ou <i>viewports</i>, copiadas dos contextos gráficos para as interfaces de texto, já estavam presentes no final da década de 1980 em muitas ferramentas. Mas estes dispositivos computacionais e suas interfaces permaneciam centrados no teclado, e não no mouse, que começa a se tornar um elemento mais comum aos computadores com a popularização das intefaces gráficas com o usuário (GUI). Redimensionar, movimentar, ou manipular janelas através de um teclado é uma tarefa ingrata, e realmente só começa a fazer sentido nos contextos gráficos. As janelas destas ferramentas continham arquivos abertos paralelamente, e podiam ser chaveadas, mas não chegavam a ser operadas simultaneamente, como se faz hoje com diversos programas ou seus arquivos, espalhados por uma tela.</p>


        </div>

        <div class='divideem4'>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1EnUkjc9nUP8NuAv9-uEtrgBTNZoqPLrP&usp=drive_fs')" style='background-position: top left; background-image: url(https://drive.google.com/uc?export=view&id=1EnUkjc9nUP8NuAv9-uEtrgBTNZoqPLrP&usp=drive_fs);'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/c958b3c39454b91eb48ea281d175ba5301d4f9e68771a8ba6c34dfa3e5c4d0fa.png')" style=' background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/c958b3c39454b91eb48ea281d175ba5301d4f9e68771a8ba6c34dfa3e5c4d0fa.png)'></div>

            <div onclick="abreimge('https://ilyabirman.net/meanwhile/pictures/nc-configuration-6.png')" style=' background-position: top left; background-image: url(https://ilyabirman.net/meanwhile/pictures/nc-configuration-6.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/5x-dos-a6fc02703092db12caf0e6094768f276-Microsoft%20Word%205.5%20for%20DOS%20-%20Dialogs.png')" style=' background-position: top right; background-image: url("https://winworldpc.com/res/img/screenshots/5x-dos-a6fc02703092db12caf0e6094768f276-Microsoft%20Word%205.5%20for%20DOS%20-%20Dialogs.png");'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br><a href='javascript:vaiemu("vb"); centra();'>Visual Basic</a> (1992), <a href='javascript:vaiemu("qc"); centra();'>Microsoft QuickC</a> (1987), <a href='javascript:vaiemu("nc"); centra();'>Norton Commander</a> (1990), Microsoft Word (1990). <a target='_blank' href='https://omniboards.vercel.app/?titulo=text%20mode&limita=0&contentonly=true&filtra=TEXT_MODE_INTERFACE'>Painel completo</a>.</span>

        <div class="corpus">

            <p>Outro aspecto relevante é que a computação da década de 1980 não possuia <i>multitasking</i> nativo, isto é, os sistemas operacionais não rodavam vários programas em paralelo; apenas um único programa era executado de cada vez, e outro só poderia ser iniciado após seu antecessor ser finalizado. Isto é obviamente uma limitação brutal frente à forma como lidamos trivialmente com os softwares 40 anos depois.</p>

            <p>A ferramenta DESQview era uma das soluções comumente utilizadas para viabilizar algo próximo a um <i>multitasking</i> nos ambientes de texto, criando diferentes <i>viewports</i> ao CLI, e assim permitindo que os programas da época pudessem operar em paralelo. O DESQview também permitia que estes <i>viewports</i> se comportassem como janelas e pudessem ser redimensionados na tela, transformando o modo texto em algo mais próximo à experiência dos recém lançados sistemas operacionais gráficos, ou <i>shells</i> gráficos que sobrepunham o MS-DOS: MS-DOS Shell, ou o Microsoft Windows antes de se tornar um sistema operacional propriamente dito.</p>

            <p>O ápice dos recursos mais sofisticados para as interfaces de modo texto ocorre de forma concomitante ao seu declínio e abandono. O mouse começava a se tornar um dispositivo comum e acessível, e as memórias RAM, a verdadeira barreira imposta ao avanço tecnológico da época, tanto em termos do que era possível processar, quanto para o hardware capaz de gerar interfaces gráficas sem onerar o processador central, começaram a baratear. Em pouco tempo, o modo texto não seria mais necessário, e o uso do computador se tornariam mais simples e democrático.</p>

        </div>

        <div class="corpus">
            <div><iframe style=' width: 100%; height: 45vh' src="https://www.youtube.com/embed/1dSmGaoUClU" frameborder="0" allowfullscreen></iframe></div>
            <div><iframe style=' width: 100%; height: 45vh' src="https://www.youtube.com/embed/xaTelXsXNRU?si=pchIB44bTJfNUvhZ" frameborder="0" allowfullscreen></iframe></div>
        </div>

        <span class="legenda" style='margin-top: -60px; margin-bottom: 40px;'>Quaterdeck DESQview e OS/5</span>

        <!--
        <iframe style=' width: 100%; height: 75vh' src="https://www.youtube.com/embed/1dSmGaoUClU" frameborder="0" allowfullscreen></iframe>

        <span class="legenda" style=' margin-bottom: 70px;'><br>Quaterdeck DESQview</span>
        -->

        <div>


            <p>Nesta etapa final, outras estranhezas também surgiram: interfaces gráficas que mimetizavam o modo texto. Eram interfaces intercambiáveis que poderiam ser facilmente transformadas em uma interface de texto na inexistência de um hardware capaz de desenhá-las sem onerar consideravelmente o processador. Trata-se de um primeiro vislumbre na possibilidade de uma técnica de <i>graceful degradation</i> para as interfaces, tornando os softwares operáveis mesmo em dispositivos ultrapassados.</p>

        </div>

        <a name='emulador'></a>
        <div>
            <hr style='border-top: 1px solid var(--sumarionicon-hover, #ac229d); margin-bottom: 60px;'>
            </hr>
        </div>

        <div class="corpus" style='margin-bottom: 60px;'>

            <div id='emu' style='width: 100%; height: 60vh; display: block;'>
                <div style="background-color: var(--text-color, #40124D); display: block; width: 100%; height: 100%;"></div>
            </div>

            <div style='height: 60vh; display: block;'>
                <div class='listadupla'>
                    <span style='font-size: 14px; line-height: 16px; margin-left: 10px;'>Experimente alguns dos softwares mencionados aqui:</span>
                    <a class='selecao' href='javascript:vaiemu("vb");'>Visual Basic</a>
                    <a class='selecao' href='javascript:vaiemu("nc");'>Norton Commander</a>
                    <a class='selecao' href='javascript:vaiemu("ws");'>Wordstar</a>
                    <a class='selecao' href='javascript:vaiemu("qc");'>Microsoft QuickC</a>
                    <a class='selecao' href='javascript:vaiemu("w3");'>Microsoft Word 3.0</a>
                    <a class='selecao' href='javascript:vaiemu("mp");'>Multiplan</a>
                    <a class='selecao' href='javascript:vaiemu("vc");'>VisiCalc</a>
                    <a class='selecao' href='javascript:vaiemu("l123");'>Lotus 1-2-3</a>
                    <a class='selecao' href='javascript:vaiemu("atdb");'>dBase III+</a>
                    <a class='selecao' href='javascript:vaiemu("mw2");'>Microsoft Works 2.0</a>
                    <a class='selecao' href='javascript:vaiemu("qp1");'>Quattro 1.0</a>
                    <a class='selecao' href='javascript:vaiemu("wp6");'>WordPerfect 6.0</a>
                    <a class='selecao' href='javascript:vaiemu("dshell");'>MS-DOS Shell</a>
                </div>
            </div>

        </div>

        <div>
            <hr style='border: 0; border-bottom: 1px solid var(--sumarionicon-hover, #ac229d); margin-top: 10px; margin-bottom: 60px;'>
            </hr>
        </div>

        <style>
            .listadupla {
                display: grid;
                grid-template-columns: 1fr;
                gap: 2px 10px;
            }

            .selecao {
                background-color: transparent;
                padding: 4px 10px 4px 10px;
                text-decoration: none;
                color: var(--text-link, #ac229d);
            }

            .selecao:hover {
                color: var(--bg-color, #FFFFFF);
                background-color: var(--text-link, #ac229d);
            }

            #jsdos {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                border: none;
                overflow: hidden;
            }

            @media screen and (max-width: 1040px) {
                .prop {
                    margin-top: 40px;
                }
            }
        </style>

        <script>
            const abreimge = function(i) {
                window.open(i, '_blank');
            }

            const vaiemu = function(f) {
                document.getElementById("emu").innerHTML = `<iframe id="jsdos" frameborder="0" allowfullscreen src='https://dos.zone/player/?bundleUrl=https%3A%2F%2Fnamco.vercel.app%2Finterfaces%2F${f}.jsdos&anonymous=1'></iframe>`;
            }

            const centra = function() {
                window.location = "#emulador";
            }

            window.onload = () => {
                //document.getElementById("jsdos").focus();

                window.addEventListener("message", (e) => {
                    if (e.data.message === "dz-player-exit") {
                        document.getElementById("jsdos").style.display = "none";
                        alert("js-dos exited");
                    }
                });
            };
        </script>


        <div>
            <p>Esforços deste tipo se tornaram raros em um mundo voltado à obsolecência programada que transforma computadores razoavelmente novos em sucata através do próprio software. A técnica utilizada para transformar interfaces pseudo-gráficas em interfaces de texto pode ser observada na comparação das duas imagens do MS-DOS 6.0 Shell (1991) abaixo:</p>
        </div>

        <div class="corpus">
            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1Ep2ovrJMdeZuKrXI8DgB-dRZm3Ul3A8J&usp=drive_fs')" class="imagemfu" style=' background-position: top left; background-image: url(https://drive.google.com/uc?export=view&id=1Ep2ovrJMdeZuKrXI8DgB-dRZm3Ul3A8J&usp=drive_fs)'>
            </div>
            <div onclick="abreimge('https://archive.org/download/msdos_dosshell/screenshot_02.jpg')" class="imagemfu" style='background-image: url(https://archive.org/download/msdos_dosshell/screenshot_02.jpg)'></div>
        </div>

        <span class="legenda" style='margin-top: -60px; margin-bottom: 70px;'><br>Versão de texto x gráfica do <a class=' selecao' href='javascript:vaiemu("dshell"); centra();'>MS-DOS 6.0 Shell</a></span>


        <div class=" corpus">

            <p>Prática semelhante pode ser também identificada nos produtos de grandes empresas da época como a Microsoft, a Central Point Software, e a Norton Symantech. É também possível considerar que esse resultado era obtido através de uma biblioteca de programação específica, adotada por algumas destas empresas, tendo em vista a semelhaça visual das interfaces, indicando se tratar de um <i>framework</i> padronizado. Os softwares da Microsoft já possuíam seu próprio padrão de interfaces, comum a quase todos, tanto em relação às cores quanto às convenções, recursos, atalhos e interações.</p>

            <p>Com a entrada do Microsoft Windows, mesmo na sua versão 2 e 3, como um <i>shell</i> rodando por cima do MS-DOS, todos estes recursos e inventividades se tornaram anacrônicos, e foram perdendo o sentido. Mesmo na produção de interfaces que se manteve após a transição para as interfaces gráficas, como os sistemas desenvolvidos para comércios e pequenos negócios, as interfaces em modo texto operavam de forma idêntica às ferramentas desenvolvidas no início dos anos 1980.</p>

        </div>

        <div class='divideem4' style='gap: 8px 8px !important;'>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/PC-Tools%209%20-%20Desktop.png')" style='background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/PC-Tools%209%20-%20Desktop.png)'></div>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1EnmjGkwurob95JjtkDkxW45uuihsXMK3&usp=drive_fs')" style=' background-position: top left; background-image: url(https://drive.google.com/uc?export=view&id=1EnmjGkwurob95JjtkDkxW45uuihsXMK3&usp=drive_fs)'></div>


            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/7282f2dbeef43ef5a5cf240d3b9ebd195ad0ebf59d4496fe32623b7c19b2d762.png')" style=' background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/7282f2dbeef43ef5a5cf240d3b9ebd195ad0ebf59d4496fe32623b7c19b2d762.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/6x-d4c6e1af874be8c12366e19323cdae73-Microsoft%20Word%206%20for%20DOS%20-%20Preview.png')" style=' background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/6x-d4c6e1af874be8c12366e19323cdae73-Microsoft%20Word%206%20for%20DOS%20-%20Preview.png)'></div>



            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1O60n9uipQg7xuP3383LaWq8jUWw3cDWr&usp=drive_fs')" style='background-position: top left; background-image: url(https://drive.google.com/uc?export=view&id=1O60n9uipQg7xuP3383LaWq8jUWw3cDWr&usp=drive_fs)'></div>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1OJrm9nujWvwWZXAbxZb6FnxYfsFhINH4&usp=drive_fs')" style=' background-position: top left; background-image: url(https://drive.google.com/uc?export=view&id=1OJrm9nujWvwWZXAbxZb6FnxYfsFhINH4&usp=drive_fs)'></div>


            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/b733f5834cdc1f299ab3a1c22d7c7d8c4a86ac98af044904db19915e69c7b5dc.png')" style=' background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/b733f5834cdc1f299ab3a1c22d7c7d8c4a86ac98af044904db19915e69c7b5dc.png)'></div>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1LS7coHeXKojxDYtxg-eFchu8mbR078Zb&usp=drive_fs')" style=' background-position: top right; background-image: url(https://drive.google.com/uc?export=view&id=1LS7coHeXKojxDYtxg-eFchu8mbR078Zb&usp=drive_fs)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>PC Tools 9.0 (1993), Norton Desktop (1991), Norton Utilities 6.0 (1991), Microsoft Word 6.0 (1991), Microsoft Works 2.0 (1990), WordPerfect 6.0 (1993), Sierra HomeWord II (1990), Tandy Personal Deskmate (1986)</span>

        <div class="corpus">
            <p>Além destas, há outra categoria de ferramentas que permanece utilizando o modo texto como interface: as ferramentas que continuam sendo desenvolvidas para linha de comando (CLI). A grande maioria das ferramentas nesta categoria não possui realmente uma interface com o usuário, funcionando apenas como executoras de tarefas, com uma interação eventual junto ao usuário, para uma confirmação ou direcionamento sobre como proceder em casos específicos.</p>

            <p>Mas uma pequena parcela está lá. Muito provavelmente a ferramenta mais nostálgica de todas é o Midnight Commander, um clone literal do antigo Norton Commander para MS-DOS. Para além da nostalgia, a ferramenta demonstra a utilidade e praticidade da proposta original de Peter Norton em 1980, que funciona bem para as necessidades do gerenciamento de arquivos por mais de 40 anos.</p>

            <p>Muitos programadores continuam preferindo os ambientes de linha de comando para desenvolver software. Vim, e NeoVim, são duas das ferramentas com mais de 3 décadas de idade que continuam sendo usadas para isso. E no campo de dados, o Visidata é uma solução completa que se apresenta como uma multiferramenta para dados tabulares. Estas são apenas algumas referências bem conhecidas de aplicações CLI com interfaces em modo texto.</p>
        </div>


        <div class='divideem4'>

            <div onclick="abreimge('https://www.redhat.com/sysadmin/sites/default/files/styles/embed_large/public/2022-10/mc.png?itok=xofuCKYc')" style='background-position: top left; background-image: url(https://www.redhat.com/sysadmin/sites/default/files/styles/embed_large/public/2022-10/mc.png?itok=xofuCKYc)'></div>

            <div onclick="abreimge('https://blog.atusy.net/2022/08/05/fuzzyfern/images/fuzzyfern.gif')" style=' background-position: top left; background-image: url(https://blog.atusy.net/2022/08/05/fuzzyfern/images/fuzzyfern.gif)'></div>


            <div onclick="abreimge('https://d33wubrfki0l68.cloudfront.net/3d5072c125e33830bb9b415abc526636da4dba2b/a0f78/blog/assets/2021-menu.png')" style=' background-position: top left; background-image: url(https://d33wubrfki0l68.cloudfront.net/3d5072c125e33830bb9b415abc526636da4dba2b/a0f78/blog/assets/2021-menu.png)'></div>

            <div onclick="abreimge('https://mathdatasimplified.com/wp-content/uploads/2022/09/687474703a2f2f76697369646174612e6f72672f667265712d6d6f76652d726f772e676966.gif')" style=' background-position: top right; background-image: url(https://mathdatasimplified.com/wp-content/uploads/2022/09/687474703a2f2f76697369646174612e6f72672f667265712d6d6f76652d726f772e676966.gif)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>Midnight Commander, Neovim, Visidata</span>

        <div class="corpus">
            <p>A pergunta que possa estar passando pela cabeça de quem chegou até aqui neste texto provavelmente será: mas o que isso tudo importa? Por que esta preocupação com interfaces e interfaceamentos tão antigos e ultrapassados?</p>

            <p>Em primeiro lugar, há um ressurgimento de ferramentas do tipo CLI em alguns contextos especializados. Programadores se utilizam delas em uma base diária, e muitas soluções para outros campos de atividades (da conversão de formatos de vídeo à tratamento de dados estatísticos) também têm se beneficiado da praticidade e objetividade deste tipo de interface.</p>

            <p>Contudo, e de um ponto de vista bastante particular, boa parte do meu próprio trabalho nos últimos 2 anos tem sido direcionado a uma intersecção entre a visualização de dados com produtos textuais, e interfaces textuais para acionamento destes dados ou seus recursos. Percebi o quanto a construção destas ferramentas e suas interfaces estão próximas da forma como as interfaces em modo texto eram construídas, e o quanto entendê-las pode me auxiliar na elaboração das minhas próprias.</p>

            <p>Seja na forma de <i>patterns</i> como o <a href='../commandpalette.php'>Command Palette</a>, ou na construção de componentes de apresentação de dados no formato HTML para serem inseridos dentro de um documento web, a centralidade dos elementos em que tenho trabalhado é majoritariamente textual, e agradeço por ter conhecido de forma direta estas tantas soluções de interface para que possa elaborar as minhas próprias com base em toda essa bagagem de referências.</p>


        </div>


        <div class='divideem4'>

            <div onclick="abreimge('https://www.ranoya.com/Assets/portfolio/todo.gif')" style='background-position: top left; background-image: url(https://www.ranoya.com/Assets/portfolio/todo.gif)'></div>




            <div onclick="abreimge('https://www.ranoya.com/Assets/portfolio/Colab%20VISSE%20calendario%20professores.png')" style=' background-position: top left; background-image: url(https://www.ranoya.com/Assets/portfolio/Colab%20VISSE%20calendario%20professores.png)'></div>

            <div onclick="abreimge('https://www.ranoya.com/Assets/portfolio/Colab%20VISSE%20Todo2.png')" style=' background-position: top left; background-image: url(https://www.ranoya.com/Assets/portfolio/Colab%20VISSE%20Todo2.png)'></div>

            <div onclick="abreimge('https://www.ranoya.com/Assets/portfolio/arqueologiadigital.png')" style=' background-position: top left; background-image: url(https://www.ranoya.com/Assets/portfolio/arqueologiadigital.png)'></div>
        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>POE Command Palette e Materiais de Arqueologia Digital</span>

        <div class="corpus">
            <p>Para finalizar, deixo aqui o link para dois projetos muito curiosos: <a target='_blank' href='https://asciicker.com/x13/'>ASCIICKER</a> é um jogo multiplayer "gráfico" cuja interface é feita com texto; e <a target='_blank' href='https://play.ertdfgcvb.xyz/'>ASCII Playground</a> é um ambiente livecode para programação de arte generativa em modo texto.</p>

        </div>

        <div class="corpus">

            <div onclick="abreimge('https://theawesomer.com/photos/2020/01/asciicker_1.jpg')" class="imagemfu" style='background-position: top left; background-image: url(https://theawesomer.com/photos/2020/01/asciicker_1.jpg)'></div>

            <div onclick="abreimge('https://www.holo.mg/wp-content/uploads/2023/03/HOLO-STREAM-20210106-Andreas-Gysin-ASCII-Playground-1200.gif')" class="imagemfu" style='background-position: top left; background-image: url(https://www.holo.mg/wp-content/uploads/2023/03/HOLO-STREAM-20210106-Andreas-Gysin-ASCII-Playground-1200.gif)'></div>

        </div>

        <!-- <div class="imagemfu" style='background-position: top left; background-image: url(https://asciicker.wdfiles.com/local--files/start/homescreen.gif)'></div> -->


        <style>
            .divideem4 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                gap: 0 4px;
            }

            .divideem4 div {
                width: 100%;
                padding-top: 100%;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                border: 0;
                cursor: pointer;
            }

            .divideem4 div:hover {
                width: calc(100% - 16px);
                padding-top: calc(100% - 16px);
                border: 8px solid var(--text-link, #ac229d);
            }

            @media screen and (max-width: 800px) {

                .divideem4 {
                    grid-template-columns: 1fr 1fr 1fr;
                }

            }

            @media screen and (max-width: 600px) {

                .divideem4 {
                    grid-template-columns: 1fr 1fr;
                }

            }
        </style>







        <div id="bookendnav"></div>
        <div id="meta">

            <div id="wimp">
                <div style="background-image: url(https://xd.adobe.com/ideas/wp-content/uploads/2020/10/what-is-graphical_user_interface.png); background-repeat: no-repeat; background-position: center center; background-size: cover; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                WIMP<br>
                Windows, Icons, Menu & Pointing Device. Modelo de interface gráfica com o usuário inventado durante a década de 1970.<br>
                <a href="https://slidelines.vercel.app/timelineh/?s=WIMP1&startmiddle=true&pattern=true&allowverticalscroll=true&timeheight=110&followbg=true&file=https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/HistoriaInterfacesOutline&theme=https://slidelines.vercel.app/level/small.css" target="_blank">WIMP User Interfaces</a>
            </div>

            <div id="xerox">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Xerox_logo_%281968-2008%29.svg/800px-Xerox_logo_%281968-2008%29.svg.png); background-position: center center; background-size: contain; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Xerox Corporation<br>
                A Xerox é responsável por grande parte das inovações no campo da computação, através de seu laboratório Xerox Palo Alto Research Center.<br>
                <a href="https://www.parc.com/" target="_blank">PARC</a>
            </div>

            <div id="alto">
                <div style="background-image: url(https://lh3.googleusercontent.com/ci/AEwo86cOMKXMgSzXhhQbV3I5zHA5af-cCZzQ8EWGDu84-oZodxkvbSipp8Vt_bahlLyQjkG34ux3isM=s1200); background-position: center center; background-repeat: no-repeat; background-size: cover; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Xerox Alto<br>
                O Alto foi o primeiro computador a contar com uma interface gráfica com o usuário, e o uso do mouse como dispositivo de entrada.<br>
                <a href="https://slidelines.vercel.app/timelineh/?s=GUI1&startmiddle=true&pattern=true&allowverticalscroll=true&timeheight=110&followbg=true&file=https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/HistoriaInterfacesOutline&theme=https://slidelines.vercel.app/level/small.css" target="_blank">Alto</a>
            </div>

            <div id="smalltalk">
                <div style="background-image: url(https://camo.githubusercontent.com/cb66541186f4c1dd7426411cbef48d3f6567a44338831673132c6ed89b0159a2/687474703a2f2f736f6674776172652e726f636875732d6b656c6c65722e63682f736d616c6c74616c6b38305f766d5f302e332e332e706e67); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Smalltalk<br>
                Linguagem de programação orientada a objetos, criada no Xerox PARC como parte da programação dos computadores Alto.<br>
                <a href="https://archives.loomcom.com/contraltojs/" target="_blank">Emulador do Alto com Smalltalk</a>
            </div>

            <div id="star">
                <div style="background-image: url(https://pbs.twimg.com/media/FZ77XZaX0AA3BHQ.jpg:large); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Xerox Star Information System<br>
                Sistema operacional gráfico elaborado pela Xerox já na década de 1980 para seus computadores Alto<br>
                <a href="https://slidelines.vercel.app/timelineh/?s=WIMP1&startmiddle=true&pattern=true&allowverticalscroll=true&timeheight=110&followbg=true&file=https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/HistoriaInterfacesOutline&theme=https://slidelines.vercel.app/level/small.css" target="_blank">Star Information System</a>
            </div>

            <div id="lookandfeel">
                <div style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc6ACIEXrLZERdgYPnYZhhbC2HAi8L5Lso4F0E5LFIiRn8nEhzgP3ggxiuPP_bSx1eWGY&usqp=CAU); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Look and Feel<br>
                Um dos primeiros princípios norteadores para o design de interfaces, se apoiava em conceitos superficiais sobre a aparência e o comportamento dos softwares.
            </div>

            <div id="lisa">
                <div style="background-image: url(https://tm.ibxk.com.br/2017/12/27/27160545840020.jpg); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Apple Lisa<br>
                Primeiro computador desenvolvido pela Apple com sistema operacional inteiramente gráfico.<br>
                <a href="https://slidelines.vercel.app/timelineh/?s=LISA1&startmiddle=true&pattern=true&allowverticalscroll=true&timeheight=110&followbg=true&file=https://opensheet.elk.sh/1Hja-7ozKTpcfhVX9sc3FkDH-NLj_RXllFIDTO8EIFV0/HistoriaInterfacesOutline&theme=https://slidelines.vercel.app/level/small.css" target="_blank">Lisa OS</a>
            </div>

            <div id="commodore">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Commodore_C%3D_logo.svg/2182px-Commodore_C%3D_logo.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Commodore<br>
                Assim como a Apple e a Atari, a Commodore era um dos grandes fabricantes de micro-computadores pessoas da década de 1980. Seus computadores C64 e C128 foram tão influentes quanto os Apple II na revolução da computação pessoal.

            </div>

            <div id="amiga">
                <div style="background-image: url(https://seeklogo.com/images/C/Commodore_Amiga__and__Amiga_Inc-logo-6438F4B608-seeklogo.com.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                AmigaOS / Workbench<br>
                Os computadores Amiga eram conhecidos como superiores aos IBM-PC nos quesitos de produção gráfica e audiovisual.<br>
                <a href="https://www.taws.ch/WB.html" target="_blank">Emulador do AmigaOS</a>


            </div>

            <div id="apple">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1667px-Apple_logo_black.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Apple Computer<br>
                Uma das primeiras empresas no mercado de micro-computadores pessoais, e atualmente uma das empresas mais importantes do setor, fazendo parte do GAFAM, as 5 big techs que dominam o setor de tecnologia.<br>
                <a href="https://www.apple.com" target="_blank">Apple</a>
            </div>

            <div id="macintosh">
                <div style="background-image: url(https://i.pinimg.com/originals/4f/8c/25/4f8c253aebead890b0fd2fe20ef2e587.jpg); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Macintosh<br>
                Computador pessoal desenvolvido pela Apple após o sucesso do Apple II. Se tratava de um dos primeiros computadores com sistema operacional gráfico e amigável, comercialmente viável.<br>
                <a href="https://system7.app/" target="_blank">Emulador do Macintosh System 7</a>
            </div>

            <div id="macos">
                <div style="background-image: url(https://99percentinvisible.org/app/uploads/2018/06/mac-face-copy-728x410.jpg); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                MacOS<br>
                Sistema operacional dos computadores Macintosh da Apple. A primeira geração utilizava os sistemas System 1 à System 8. Na sua versão 9, passou a se chamar MacOS 9, e, com o retorno de Steve Jobs à empresa junto à incorporação do sistema operacional NeXT, passou a se chamar MacOS X.<br>
                <a href="https://system7.app/" target="_blank">Emulador do Macintosh System 7</a>
            </div>

            <div id="windows">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Windows_logo_-_1992.svg/800px-Windows_logo_-_1992.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Windows<br>
                Inicialmente criado apenas como uma camada gráfica para o MS-DOS, o Windows se tornou posteriormente um sistema operacional integral e gráfico para PCs, igualmente aos sistemas operacionais dos Macintoshs.<br>
                <a href="https://www.pcjs.org/software/pcx86/sys/windows/3.10/" target="_blank">Emulador do Windows 3.1</a>
            </div>

            <div id="ibm">
                <div style="background-image: url(https://img2.gratispng.com/20180330/tjq/kisspng-ibm-logo-ibm-5abe0de7cd1844.3209746515224048398401.jpg); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                IBM<br>
                A IBM é uma das empresas mais antigas em atividade no campo da computação. Além da produção de softwares, como o PC-DOS, PC-BASIC e Storyboard, também foi a criadora do IBM-PC, base para todos os computadores chamados de PCs.<br>
            </div>

            <div id="word">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Logo_Microsoft_Word.svg/2039px-Logo_Microsoft_Word.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Microsoft Word<br>
                O processador de texto mais utilizado até hoje, já possui 40 anos de história e liderança de mercado. Foi desenvolvido para os primeiros IBM-PC, no tempo em que a Microsoft era contratada da IBM para desenvolver os softwares que abasteceriam essa plataforma.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=Word1" target="_blank">Microsoft Word</a>
            </div>

            <div id="lotus">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/e/e1/Lotus_Development_Corporation_logo.svg); background-position: center center; background-color: black; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Lotus Corporation<br>
                Criadora do Lotus 1-2-3, uma das primeiras planilhas eletrônicas, e um dos softwares mais importantes na história da computação. Foi posteriormente incorporada à IBM.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=Lotus123" target="_blank">Lotus 1-2-3</a>

            </div>

            <div id="visicalc">
                <div style="background-image: url(https://mmc.tirto.id/image/otf/880x495/2021/11/04/visicalc.jpg); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                VisiCalc<br>
                Primeira planilha eletrônica a existir, auto-intitulada "planilha de cálculo", foi históricamente importante para a computação, com versão para quase todos os computadores existentes na época.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=visic" target="_blank">VisiCalc</a>

            </div>

            <div id="wordstar">
                <div style="background-image: url(https://www.sfwriter.com/wordstar.gif); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                WordStar<br>
                Primeiro processador de texto em existência, possui importância histórica na computação.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=wordstar" target="_blank">WordStar</a>

            </div>

            <div id="borland">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Borland_logo.svg/1024px-Borland_logo.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Borland Corporation<br>
                A Borland tinha como foco central o desenvolvimento de ferramentas de programação, como editores e compiladores das mais diversas linguagens disponíveis. Por se tratarem de ferramentas baseadas no DOS, acabou não resistindo durante a mudança para os sistemas operacionais gráficos.<br>
            </div>

            <div id="wordperfect">
                <div style="background-image: url(https://guidebookgallery.org/pics/splashes/wordperfect/6-dos-graphical.png); background-position: center center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                WordPerfect<br>
                A WordPerfect foi responsável pela criação de um dos três primeiros processadores de texto, ainda muito utilizado até a década de 1990.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=wordperfect" target="_blank">WordPerfect</a>
            </div>

            <div id="spc">
                <div style="background-image: url(https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/v1457199553/kdrqpycfes8izfv4vvjq.gif); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Software Publishing Company (SPC)<br>
                Criadora do Harvard Graphics, um dos primeiros softwares corporativos para elaboração e apresentação de slides.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=harvardgraph" target="_blank">Harvard Graphics</a>
            </div>

            <div id="autodesk">
                <div style="background-image: url(https://adsknews.autodesk.com/app/uploads/2018/12/autodesk-logo-symbol-only-small.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Autodesk<br>
                A Autodesk é uma das primerias empresas a desenvolver softwares de desenho técnico e modelagem 3D, voltados ao setor da construção civil e desenho industrial.<br>
                <a href="https://www.autodesk.com.br/" target="_blank">Autodesk</a>
            </div>

            <div id="autocad">
                <div style="background-image: url(https://logos-world.net/wp-content/uploads/2020/12/Autocad-Logo-2014-2018.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                AutoCAD<br>
                O primeiro CAD, software desenvolvido para desenho técnico-construtivo.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=autocad" target="_blank">AutoCAD</a>
            </div>

            <div id="3ds">
                <div style="background-image: url(https://www.pngfind.com/pngs/m/607-6078165_autodesk-3ds-max-3d-computer-graphics-computer-icons.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                3D Studio<br>
                O primeiro software de modelagem e animação tridimensional.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=autodesk3DS" target="_blank">3D Studio (DOS)</a>
            </div>

            <div id="microsoft">
                <div style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/2048px-Microsoft_logo.svg.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Microsoft<br>
                Integra a GAFAM junto à Apple, Google, Facebook e Amazon: as 5 big-techs que dominam o mercado de tecnologia.<br>
            </div>

            <div id="dbase">
                <div style="background-image: url(https://www.graphis.com/media/uploads/cache/77/4c/774ce2eb960a006b5aaff0bc95677b30.jpg); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                dBase<br>
                Família do primeiro sistema de bancos de dados relacionais existente, criados pela Ashton-Tate na década de 1980.<br>
                <a href="https://omnidocs.vercel.app/materiais/arqueologiadesign?slide=dbas" target="_blank">dBase III</a>
            </div>

            <div id="clipper">
                <div style="background-image: url(https://www.gladir.com/SOFTWARE/CLIPPER/presentation.png); background-position: center center; background-size: contain; background-repeat: no-repeat; width: 80px; height: 80px; margin-right: 30px; float: left;"></div>
                Clipper<br>
                Linguagem de programação e compilador capaz de utilizar as bases de dados xBase (dentre elas o dBase) para construir aplicações para DOS.<br>
            </div>

        </div>
        <div id=" metacompensate"></div>

        <div id="posicao"></div>
        <div id="posicaocompensate"></div>

</body>

</html>