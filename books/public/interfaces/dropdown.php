<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require '../interfaces/meta.php';
    ?>
    <title>De onde vem o drop down menu | Ensaios sobre o design de interfaces digitais</title>
    <meta name="description" content="De onde vem o drop down menu. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
    <meta property="og:title" content="De onde vem o drop down menu | Ensaios sobre o design de interfaces digitais">
    <meta property="og:description" content="De onde vem o drop down menu. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">

</head>

<body>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

        <h1 id="titulocapitulo">De onde vem o <i>drop down</i> menu?</h1>

        <style>
            .imagemfu {
                width: 100%;
                padding-top: 100%;
                background-repeat: no-repeat;
                background-position: top left;
                background-size: cover;
            }

            .imagemfu:hover {
                width: calc(100% - 16px);
                padding-top: calc(100% - 16px);
                border: 8px solid var(--text-link, #ac229d);
            }
        </style>

        <div class="corpus">

            <p>A navegação, ou maneira como chegamos de um lugar a outro dentro de um software, talvez seja o elemento de interface mais importante na arquitetura de um produto computacional, e muito provavelmente uma das questões mais estudadas quando tratamos da arquitetura da informação ou do design de interfaces. <i>Patterns</i> como <i>Radius Buttons</i>, <i>Check Boxes</i>, <i>Text Areas</i>, Janelas Modais, são convenções que foram se estabelecendo na linguagem do modelo <a href="javascript:openMeta('wimp');">WIMP</a> de interfaces gráficas com o usuário (GUI), e assim como outros tantos elementos clássicos deste formato, temos um que é tão onipresente, que muitos o tratariam como algo que sempre existiu: os menus do tipo <i>drop down</i>.</p>

            <p>A dúvida que se estabeleceu é ainda mais estranha do que inicialmente aparenta, pois os elementos fundamentais deste modelo - e acabamos incluíndo os menus <i>drop down</i> junto deles - foram todos tomados de empréstimo dos projetos da <a href="javascript:openMeta('xerox');">Xerox</a>, primeiro através do <a href="javascript:openMeta('alto');">Alto</a> (1968) e a interface da linguagem <a href="javascript:openMeta('smalltalk');">Smalltalk</a> que rodava neles, e depois do <a href="javascript:openMeta('star');">Xerox Star Information System</a> (1981), um sistema operacional comercial e mais completo para o <a href="javascript:openMeta('alto');">Alto</a>.</p>

        </div>

        <div class="corpus">
            <div class="imagemfu" onclick="abreimge('https://i.pinimg.com/564x/6b/7d/25/6b7d25ae8a177f9cc99c6c2937b63232.jpg')" style='background-image: url(https://i.pinimg.com/564x/6b/7d/25/6b7d25ae8a177f9cc99c6c2937b63232.jpg)'></div>
            <div class="imagemfu" onclick="abreimge('http://interface-experience.org/site/wp-content/uploads/2015/01/IE-Star-3.jpg')" style='background-image: url(http://interface-experience.org/site/wp-content/uploads/2015/01/IE-Star-3.jpg)'></div>
        </div>

        <span class="legenda" style='margin-top: -60px; margin-bottom: 40px;'>Smalltalk (interface do Xerox Alto) e View Point (interface do Xerox Star Information System).</span>

        <div class="corpus">
            <p>Conforme se observa, os menus <i>drop down</i> não estavam presentes em nenhum dos dois momentos do desenvolvimento de interfaces gráficas da <a href="javascript:openMeta('xerox');">Xerox</a>, e, consequentemente, trata-se de um componente ou elemento de interface inteiramente novo, criado (por alguém) na década de 1980.</p>

            <p>Após um processo de arqueologia digital, observando a evolução das interfaces e o <a href="javascript:openMeta('lookandfeel');"><i>look and feel</i></a> de diversos softwares, conseguimos identificar onde exatamente os menus <i>drop down</i> aparecem pela primeira vez: o <a href="javascript:openMeta('lisa');">Lisa Office System</a> (1983), sistema operacional do primeiro computador desenvolvido pela <a href="javascript:openMeta('apple');">Apple Computer</a> com uma interface gráfica do usuário como parte do próprio sistema. Na sua cola, o <a href="javascript:openMeta('macos');">System 1</a> (1984) dos primeiros <a href="javascript:openMeta('macintosh');">Macintoshs</a>, e o <a href="javascript:openMeta('amiga');">AmigaOS/Workbench 1.0</a> (1985) dos computadores da <a href="javascript:openMeta('commodore');">Commodore</a>, também incluiram um menu do tipo <i>drop down</i>.
        </div>

        <div class="corpus">

            <div class="imagemfu" onclick="abreimge('https://guidebookgallery.org/pics/gui/desktop/full/lisaos10.png')" style='background-image: url(https://guidebookgallery.org/pics/gui/desktop/full/lisaos10.png)'></div>
            <div class="imagemfu" onclick="abreimge('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO8Y2cHMK499fboJJFKFdnCcDcfD3KHbLPOB7sUceaAKdVJX-W5yj0BRgVtAlG_7fO8VM&usqp=CAU')" style='background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO8Y2cHMK499fboJJFKFdnCcDcfD3KHbLPOB7sUceaAKdVJX-W5yj0BRgVtAlG_7fO8VM&usqp=CAU)'></div>
        </div>
        <span class="legenda" style='margin-top: -60px; margin-bottom: 40px;'>Lisa OS (1983) e AmigaOS/Workbench 1.0/GEM (1985).</span>

        <div class="corpus">
            <p>A história de como a <a href="javascript:openMeta('apple');">Apple Computer</a> se dividiu durante a criação e lançamento de dois computadores muito parecidos praticamente ao mesmo tempo (o <a href="javascript:openMeta('lisa');">Lisa</a> e o <a href="javascript:openMeta('macintosh');">Macintosh</a>) é bastante documentada e conhecida, sendo retratada no filme baseado na história da <a href="javascript:openMeta('apple');">Apple Computer</a>, <i>Pirates of Silicon Valley</i> (1999), além de dois outros filmes baseados na vida pessoal de seu fundador, Steve Jobs.</p>

            <p>Mas aqui é necessário reconhecer que, de fato, nem tudo que está presente no modelo <a href="javascript:openMeta('wimp');">WIMP</a>, dominante nas interfaces gráficas atuais, é tomado de empréstimo dos projetos da <a href="javascript:openMeta('xerox');">Xerox</a>, e que a própria <a href="javascript:openMeta('apple');">Apple</a> trouxe contribuições reais e inovadoras nesse campo. A criação tanto do <a href="javascript:openMeta('macos');">System 1</a> quanto do <a href="javascript:openMeta('windows');">Windows</a> são geralmente retratadas como dois roubos à propriedade intelectual da <a href="javascript:openMeta('xerox');">Xerox</a> que, ao contrário da inventora, tiveram sucesso comercial; e isto não é inteiramente verdadeiro.</p>

            <p>Erratas apresentadas, há outras questões também a serem consideradas: apesar da <a href="javascript:openMeta('apple');">Apple</a> ter sido a inventora deste <i>pattern</i>, seguida pela <a href="javascript:openMeta('commodore');">Commodore</a> em sua aplicação, estes equipamentos não foram de uso massivo, ao ponto de consolidarem a convenção dos menus <i>drop down</i>; além deste fato, quais eram as alternativas existentes para navegação nos softwares que foram abandonadas frente a escalada de adoção deste padrão?</p>

            <p>Obviamente que os dispositivos da <a href="javascript:openMeta('apple');">Apple</a> e da <a href="javascript:openMeta('commodore');">Commodore</a> eram populares e bastante conhecidos na década de 1980, mas estavam geralmente restritos ao uso doméstico, quase que em sua integralidade por crianças e adolescentes, enquanto os adultos da época mal utilizavam computadores no ambiente de trabalho, dominado (quando existiam) pelos <a href="javascript:openMeta('ibm');">IBM-PC</a>.</p>

        </div>


        <div class="symbol"></div>

        <div class="corpus">

            <p>As ferramentas de trabalho, sobretudo nas décadas de 1980 e 1990, eram consideradas o substrato "sério", e relevante, da computação. Ainda que a porta de entrada para muitos jovens dessas épocas tenham sido os jogos de computador, eram nas aplicações que estavam os interesses e atenções de uma revolução da computação pessoal, ou mais especificamente, o que um computador poderia nos habilitar a fazer, que não seria possível ou praticável sem ele - seu papel em aplicar nossas práticas e ações. Em uma <a target="_blank" href="https://www.youtube.com/embed/GRHHOI-WvVc?clip=UgkxMJCE2M4EduU7S6duPa1m6TOeRYB7bd7x&amp;clipt=ELKrJhi7rik">palestra para estudantes do MIT em 1992</a>, Steve Jobs afirmou que não previa, e não havia como prever, que os <a href="javascript:openMeta('macintosh');">Macintoshs</a> estariam no epicentro de uma indústria editorial digital.</p>

            <p>A penetração de certos <i>patterns</i> de interface dentro deste contexto é, portanto, crítica para a consolidação de uma convenção coletivamente partilhada: um lexo comum na utilização dos equipamentos para "algo que importa". Se os jogos de computador da década de 1980 não possuiam uma linguagem convencionada e amplamente partilhada, que conduzissem seus jogadores para um entendimento imediato das interações e ações que se esperavam deles pela familiaridade com a linguagem, isso não seria um problema; o aprendizado específico para cada produto de entretenimento (que não eram produtos considerados "sérios" e de uso "socialmente relevante"), ou o abandono dos usuários sobre eles, por não compreenderem como usá-los, não configurava qualquer problema; o mesmo não poderia ser dito sobre as aplicações e ferramentas.</p>

            <p>Essa assimilação do <i>pattern</i> de menu <i>drop down</i> veio através de algo diferente dos <a href="javascript:openMeta('macintosh');">Macintoshs</a> e <a href="javascript:openMeta('commodore');">Commodores</a>, mesmo que uma geração mais nova já os tenha incorporado ali, e que os artefatos que efetivamente difundiram o padrão o tenham tomado de empréstimo precisamente das interfaces da <a href="javascript:openMeta('apple');">Apple</a>. E mesmo nesse contexto dos artefatos que trouxeram o <i>pattern</i> ao mundo do trabalho, sua incorporação não foi imediata, tampouco uma cópia literal do modelo original.</p>

            <p>Um conjunto de modelos de navegação já existiam antes do <a href="javascript:openMeta('lisa');">Lisa OS</a> que, exploravam aspectos próximos (mas incipientes) da proposta da <a href="javascript:openMeta('apple');">Apple</a>; algumas das software houses tentaram, inclusive, estabelecer suas próprias visões de navegação no lugar. Vejamos, a seguir, estas navegações na seguinte ordem: os artefatos que implementaram menus com certa similaridade aos <i>drop downs</i>, e os artefatos que ajudaram a consolidar o padrão:</p>

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
                    <span style='font-size: 14px; line-height: 16px; margin-left: 10px;'>Experimente alguns dos softwares mencionados:<br><br></span>
                    <a class='selecao' href='javascript:vaiemu("w3");'>Microsoft Word</a>
                    <a class='selecao' href='javascript:vaiemu("mp");'>Microsoft Multiplan</a>
                    <a class='selecao' href='javascript:vaiemu("qc");'>Microsoft QuickC</a>
                    <a class='selecao' href='javascript:vaiemu("vb");'>Microsoft Visual Basic for DOS</a>
                    <a class='selecao' href='javascript:vaiemu("vc");'>Visicalc</a>
                    <a class='selecao' href='javascript:vaiemu("w3");'>Wordstar</a>
                    <a class='selecao' href='javascript:vaiemu("l123");'>Lotus 1-2-3</a>
                    <a class='selecao' href='javascript:vaiemu("lwks");'>Lotus Works 1.0</a>
                    <a class='selecao' href='javascript:vaiemu("atdb");'>dBASE III Plus</a>
                    <a class='selecao' href='javascript:vaiemu("atap");'>Applause II</a>
                    <a class='selecao' href='javascript:vaiemu("nc");'>Norton Commander</a>
                    <a class='selecao' href='javascript:vaiemu("ac25");'>Autodesk Autocad</a>
                    <a class='selecao' href='javascript:vaiemu("a3d");'>Autodesk 3D Studio</a>
                    <a class='selecao' href='javascript:vaiemu("wp6");'>WordPerfect 6.0</a>
                    <a class='selecao' href='javascript:vaiemu("hg2");'>Harvard Graphics 2.0</a>




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

        <h2>Alternativas iniciais de navegação</h2>

        <div class="corpus">

            <p>Entender o conceito de <i>Killer Application</i> se faz essencial para a consideração de como comportamentos e usos dos softwares se instituem, e de como convenções de interface e dos seus modelos de navegação se estabelecem: este conceito aborda ferramentas que carregam tanto valor de uso em si mesmas que sua adoção justifica qualquer mudança ou investimento necessário sobre todo o ecossistema que as cercam, incluíndo computadores ou hardwares variados. A computação pessoal nascente, sobretudo no contextos dos <a href="javascript:openMeta('ibm');">IBM-PC</a> utilizados nos ambientes de trabalho, está calcada em algumas destas <i>Killer Aplications</i>, sendo duas delas também importantes para a discussão da arquitetura e navegação dos softwares: o <a href="javascript:openMeta('lotus');">Lotus 1-2-3</a>, o <a href="javascript:openMeta('word');">Microsoft Word</a>. A primeira foi líder no segmento de planilhas eletrôncias durante toda a década de 1980 e início da década de 1990, e a segunda é quase dispensável tecer comentários, pois continua sendo, por 4 décadas, a ferramenta mais conhecida no segmento de processadores de texto.</p>

            <p>A navegação nestes softwares acontecia através de processos semelhantes, mas posicionados em locais diferentes: uma barra com ações/commandos localizadas na parte superior do <a href="javascript:openMeta('lotus');">Lotus</a>, e inferior do <a href="javascript:openMeta('word');">Word</a>, acessadas com a tecla "espaço" (<i>mouses</i> ainda não eram um dispositivo comum na década de 1980), e pelas quais o usuário poderia circular com a mesma tecla até chegar na ação desejada, acionada ao se pressionar "enter".</p>

        </div>


        <div class="corpus">

            <div class="imagemfu" onclick="abreimge('https://dosdays.co.uk/topics/Software/lotus-1-2-3_2.png')" style='background-image: url(https://dosdays.co.uk/topics/Software/lotus-1-2-3_2.png)'></div>
            <div class="imagemfu" onclick="abreimge('https://drive.google.com/uc?export=view&id=15msjidOQIACUjwkXa9vQ7JXN1LXrX7z8&authuser=guilherme.ranoya%40ufpe.br&usp=drive_fs')" style='background-position: left bottom; background-image: url(https://drive.google.com/uc?export=view&id=15msjidOQIACUjwkXa9vQ7JXN1LXrX7z8&authuser=guilherme.ranoya%40ufpe.br&usp=drive_fs)'></div>
        </div>
        <span class="legenda" style='margin-top: -60px; margin-bottom: 40px;'>Menu do <a href='javascript:vaiemu("l123"); centra();'>Lotus 1-2-3</a> (1983): Worksheet, Range, Copy, etc.; e <a href='javascript:vaiemu("w3"); centra();'>Microsoft Word</a> (1982): Alpha, Copy, Delete, etc.</span>

        <div class="corpus">

            <p>Estas navegações carregam apenas um princípio do que seriam os <i>drop downs</i>. Obviamente não possuem exatamente o que está no nome do <i>pattern</i>: o <i>drop down</i> (opções que se revelam abaixo ao clicar no <i>pattern</i>); mas são elementos estruturados horizontalmente nos limites (início ou fim) do espaço de trabalho, que concentram as ações possíveis aos usuários sobre os conteúdos em que estão trabalhando. Talvez seja necessário comparar este modelo com algo que existia ao mesmo tempo nas respectivas áreas, o <a href="javascript:openMeta('visicalc');">VisiCalc</a> e o <a href="javascript:openMeta('wordstar');">WordStar</a>, para compreender a aproximação entre o que estava presente no <a href="javascript:openMeta('lotus');">Lotus</a> e no <a href="javascript:openMeta('word');">Word</a> e os <i>drop downs</i>.</p>

            <p>O <a href="javascript:openMeta('visicalc');">VisiCalc</a> (1979) é outra <i>Killer Application</i> da computação pessoal, e a primeira planilha eletrônica a surgir. Ela não possuia menus ou navegação nesse sentido: todas as operações eram feitas utilizando atalhos de teclado.</p>

            <p>Da mesma forma, o <a href="javascript:openMeta('wordstar');">WordStar</a>, que concorria com o <a href="javascript:openMeta('word');">Word</a> e o <a href="javascript:openMeta('wordperfect');">WordPerfect</a> no segmento de processadores de texto, também não possuia menus, e era inteiramente operado por atalhos de teclado que permaneciam dispostos na tela para o usuário.</p>
        </div>

        <div class="corpus">

            <div class="imagemfu" onclick="abreimge('https://drive.google.com/uc?export=view&id=1EbD0eNAWT1VAUodB8UeKzzo7NOcAfLSD&usp=drive_fs')" style='background-image: url(https://drive.google.com/uc?export=view&id=1EbD0eNAWT1VAUodB8UeKzzo7NOcAfLSD&usp=drive_fs)'></div>
            <div class="imagemfu" onclick="abreimge('https://winworldpc.com/res/img/screenshots/WordStar%204.00%20-%20Edit.png')" style='background-image: url(https://winworldpc.com/res/img/screenshots/WordStar%204.00%20-%20Edit.png)'></div>
        </div>
        <span class="legenda" style='margin-top: -60px; margin-bottom: 70px;'>Manual do <a href='javascript:vaiemu("vc"); centra();'>VisiCalc</a> (1979) e atalhos do <a href='javascript:vaiemu("ws"); centra();'>WordStar</a> (1978).</span>

        <div class="symbol"></div>

        <div class="corpus">

            <p>O modelo de menus inferiores parecia mais óbvio, principalmente por que era a posição onde as ações das teclas de função eram tradicionalmente informadas (novamente, por que isso se configurou assim? - outra boa pergunta). Diversos softwares optaram por esta configuração para sua navegação, seja pela mesma forma como o
                <a href="javascript:openMeta('word');">Word</a> a configurava, ou mais próxima à forma como teclas de função eram indicadas.
            </p>

            <p>O modelo adotado pela <a href="javascript:openMeta('microsoft');">Microsoft</a> era produto de um projeto interno chamado <i>Interface Manager</i> anterior ao próprio Microsoft <a href="javascript:openMeta('word');">Word</a>, e que acabaria se tornando o Microsof Windows. A idéia de Bill Gates era facilitar o desenvolvimento de software através de uma plataforma intermediária que resolveria tanto o interfaceamento com dispositivos de entrada e saída como o <i>mouse</i> e as impressoras, quanto traria uma linguagem unificada para a interação dos usuários com eles. O modelo de navegação do <i>Interface Manager</i> era aquele já presente no Microsoft <a href="javascript:openMeta('word');">Word</a>, Chart e no Multiplan.</p>

            <p><iframe frameborder=0 style='width: 100%; height: 59vh;' src='https://www.youtube.com/embed/vqt94b8bNVc?si=nSIa2aetOPo2u2uz&amp;start=508'></iframe></p>


        </div>

        <div class="symbol"></div>

        <style>
            .divideem5 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
                gap: 0 4px;
                border: 0;
            }

            .divideem4 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                gap: 0 4px;
            }

            .divideem4 div,
            .divideem5 div {
                width: 100%;
                padding-top: 100%;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                border: 0;
                cursor: pointer;
            }

            .divideem4 div:hover,
            .divideem5 div:hover {
                width: calc(100% - 16px);
                padding-top: calc(100% - 16px);
                border: 8px solid var(--text-link, #ac229d);
            }

            @media screen and (max-width: 800px) {

                .divideem4,
                .divideem5 {
                    grid-template-columns: 1fr 1fr 1fr;
                }

            }

            @media screen and (max-width: 600px) {

                .divideem4,
                .divideem5 {
                    grid-template-columns: 1fr 1fr;
                }

            }
        </style>

        <div class='divideem4'>
            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/ea41411193612768fbe7cf1a3151b6ed6964d7be553fac031d9fb55c81687f9d.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/ea41411193612768fbe7cf1a3151b6ed6964d7be553fac031d9fb55c81687f9d.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/106-33b1ecfd1972b1e9afdcdf53080df0d1-Multiplan%201.06%20-%202.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/106-33b1ecfd1972b1e9afdcdf53080df0d1-Multiplan%201.06%20-%202.png)'></div>

            <div onclick="abreimge('https://eduinf.waw.pl/inf/hist/002_gui/images/vision12.gif')" style='background-position: left bottom; background-image: url(https://eduinf.waw.pl/inf/hist/002_gui/images/vision12.gif)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/1x-6e0aba060e52386690b5521a0a6f386b-Norton%20Commander%201.00%20-%20About.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/1x-6e0aba060e52386690b5521a0a6f386b-Norton%20Commander%201.00%20-%20About.png)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>Microsoft Chart, <a href='javascript:vaiemu("mp"); centra();'>Microsoft Multiplan 1.0</a>, VisiCorp VisiOn, <a href='javascript:vaiemu("nc"); centra();'>Norton Commander</a>.</span>


        <div class="corpus">

            <p>Muitas destas ferramentas acabaram abandonando o modelo de menu inferior por um menu <i>drop down</i> posteriormente, e, algumas delas, acabaram adotando as duas formas, mantendo ações associadas a teclas de função como atalhos àquilo que já estaria presente no menu superior.
            </p>

            <p>O modelo da <a href="javascript:openMeta('lotus');">Lotus</a> foi copiado por outras empresas, e rendeu um processo contra a <a href="javascript:openMeta('borland');">Borland</a> pela forma tão literal como o menu foi copiado (usando, inclusive, os mesmos termos). A empresa <a href="javascript:openMeta('wordperfect');">WordPerfect</a> o adotou em algumas aplicações (mas não seu principal produto, o processador de texto de mesmo nome), e a <a href="javascript:openMeta('spc');">Software Publishing Company</a> o implementou em sua ferramenta <a href="javascript:openMeta('spc');">Harvard Graphics</a>.</p>

            <p>Um aspecto curioso das interfaces da <a href="javascript:openMeta('lotus');">Lotus</a> foi com o Lotus Works, onde utilizaram duas linhas paralelas de menus <i>drop down</i>, uma superior, e outra inferior.</p>

            <p>A <a href="javascript:openMeta('spc');">Software Publishing Company</a> acabou desenvolvendo um modelo próprio de menu <i>drop down</i>, incialmente na parte inferior da tela, mas que depois foi alterado para a parte superior. Sua nova interface de <i>drop down</i> era acionada pelas teclas de função, e foi tão elogiada pelos usuários que a empresa acabou criando uma ferramenta chamada Preface, para que seu sistema de menus fosse utilizado como um aplicativo inicial padrão para acessar outros softwares instalados nos computadores.</p>

        </div>

        <div class='divideem4'>
            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1LisRPkh0xbkxVX8g3dsg6RmiAsdyou4m&usp=drive_fs')" style='background-position: right bottom; background-image: url(https://drive.google.com/uc?export=view&id=1LisRPkh0xbkxVX8g3dsg6RmiAsdyou4m&usp=drive_fs)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/Harvard%20Graphics%202.10%20-%20Menu.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/Harvard%20Graphics%202.10%20-%20Menu.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/0d5987718e9cf10e28317347fdfcd29a73f2ed1a03b59f96f4351b520a877e1e.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/0d5987718e9cf10e28317347fdfcd29a73f2ed1a03b59f96f4351b520a877e1e.png)'></div>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1O21yFI57bYZpkhgC9rZUK9M-yKBQQPKb&usp=drive_fs')" style='background-position: right top; background-image: url(https://drive.google.com/uc?export=view&id=1O21yFI57bYZpkhgC9rZUK9M-yKBQQPKb&usp=drive_fs)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br><a href='javascript:vaiemu("lwks"); centra();'>Lotus Works 1.0</a>, e seus menus duplos; &nbps; <a href='javascript:vaiemu("hg2"); centra();'>Menu inicial do Harvard Graphics 2.0</a>, &nbsp; Menus do Harvard Graphics 3.0, Menus do Preface.</span>

        <div class="corpus">

            <p>Outro aspecto a ser considerado aqui é que não tratamos de uma interface configurada através de elementos pictóricos desenhados na tela, mas de algo funcionando através de um campo de texto (terminal) com caracteres de dimensões fixas e monoespaçados. O modelo <i>drop down</i> talvez não fosse evidente neste contexto, pois o funcionamento da tela não abarcava o desenho de superfícies e planos sobrepostos, ou, ao menos, isso ainda não era uma perspectiva nos modos de texto (mas que posteriormente acabaram surgindo). Os computadores da época trabalhavam em um modo gráfico para desenhos (linhas, superfícies, pontos, etc.), e um modo texto (terminal) onde eram renderizados apenas caracteres do alfabeto latino (e sem ascentos) com uma única família tipográfica e uma única dimensão para os caracteres. Era neste último modo que os softwares citados operavam.</p>

            <p>Além destas configurações de menus e modos de tela, alternativas gráficas já existiam. Algumas, como do WordPerfect 6.0, o Microsoft Works 2.0, ou o Microsoft Visual Basic for DOS, mimetizavam o modo texto (terminal) em um contexto gráfico, incluíndo apenas pequenos detalhes como um ponteiro de <i>mouse</i>, por exemplo. Mas uma configuração de menus inteiramnete nova estava presente nos software da <a href="javascript:openMeta('autodesk');">Autodesk</a>, empresa focada no setor de engenharia, arquitetura e desenho industrial: seus softwares <a href="javascript:openMeta('autocad');">AutoCAD</a> e <a href="javascript:openMeta('3ds');">3D Studio</a> utilizavam um menu lateral com listas de instruções possuíndo subníveis, em alguns casos recursivos, encapsulando vários níveis hierárquicos. Por se tratarem de softwares entendidos como de computação gráfica, faziam exigências consideradas "exóticas" ou "exageradas", necessitando um <i>mouse</i> para serem operados, e um co-processador matemático para serem capazes de rodar nos computadores. Os menus, logicamente, podiam ser acionados pelo clicar do <i>mouse</i>, ou pelo teclado.</p>


        </div>

        <div class='divideem4'>
            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1O60n9uipQg7xuP3383LaWq8jUWw3cDWr&usp=drive_fs')" style='background-position: left bottom; background-image: url(https://drive.google.com/uc?export=view&id=1O60n9uipQg7xuP3383LaWq8jUWw3cDWr&usp=drive_fs)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/04d92a91283dee65cba934cfc8aacb7d18bcbfdfde143d758f909bbda426ecae.png')" style='background-position: left bottom; background-image: url(https://winworldpc.com/res/img/screenshots/04d92a91283dee65cba934cfc8aacb7d18bcbfdfde143d758f909bbda426ecae.png)'></div>

            <div onclick="abreimge('https://jinmorhee.net/jinmorhee_3-multimedia/imgs/emulation_01.png')" style='background-position: right bottom; background-image: url(https://jinmorhee.net/jinmorhee_3-multimedia/imgs/emulation_01.png)'></div>

            <div onclick="abreimge('http://4.bp.blogspot.com/_cScjZKJ3u3g/SwRkqW-IOOI/AAAAAAAAAKg/Ws1K1XBZqZE/s1600/3DS_DOS-Screen-05.bmp')" style='background-position: right top; background-image: url(http://4.bp.blogspot.com/_cScjZKJ3u3g/SwRkqW-IOOI/AAAAAAAAAKg/Ws1K1XBZqZE/s1600/3DS_DOS-Screen-05.bmp)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>Menu gráfico do <a href='javascript:vaiemu("mw2"); centra();'>Microsoft Works 2.0</a>, e do Harvard Graphics 3.0 (1991); Menu lateral do Autodesk <a href='javascript:vaiemu("ac25"); centra();'>AutoCAD</a> (1982), e do <a href='javascript:vaiemu("a3d"); centra();'>3D Studio</a> (1989).</span>


        <div class="corpus">
            <p>Ambas as soluções da <a href="javascript:openMeta('autodesk');">Autodesk</a> acabaram incorporando menus <i>drop down</i> em algum momento. No caso do <a href="javascript:openMeta('3ds');">3D Studio</a>, até mais rápido, pois já se tratava de uma ferramenta elaborada praticamente na década de 1990, onde este <i>pattern</i> já se encontrava clarametne consolidado.</p>

            <p>As navegações laterais introduzidas pela <a href="javascript:openMeta('autodesk');">Autodesk</a> são um <i>pattern</i> mais incomum, mas continuaram presentes em algumas ferramentas. É possível que os componentes de inspeção (<i>inspect</i>) em diversos softwares gráficos tenham se apropriado deste modelo para sua configuração, mas isso já seria assunto para outra investigação.</p>

        </div>

        <div class='divideem5'>

            <div onclick="abreimge('https://drive.google.com/uc?export=view&id=1EwhMbHx85VA9zlLuwpEsKsbhJ7et0C_j&usp=drive_fs')" style='background-position: top right; background-image: url(https://drive.google.com/uc?export=view&id=1EwhMbHx85VA9zlLuwpEsKsbhJ7et0C_j&usp=drive_fs)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/8611aecbd87f787b7dd9b856b0664c86344658f4ad8fa858aedd9cc76a408761.png')" style='background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/8611aecbd87f787b7dd9b856b0664c86344658f4ad8fa858aedd9cc76a408761.png)'></div>
            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/a9b955d3e9e8975a8833e97bf9c72aaf5edfba3fa13377818845609e9042ceb9.png')" style='background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/a9b955d3e9e8975a8833e97bf9c72aaf5edfba3fa13377818845609e9042ceb9.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/4f90a748bdedd9085b8606c978c7f600033aaae36248649d023725dab1ef1cae.png')" style='background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/4f90a748bdedd9085b8606c978c7f600033aaae36248649d023725dab1ef1cae.png)'></div>
            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/bda0f24fe7dad0444d72e5448aff0e7b66e03334b6c133f1888f3f59e24e0731.png')" style='background-position: top right; background-image: url(https://winworldpc.com/res/img/screenshots/bda0f24fe7dad0444d72e5448aff0e7b66e03334b6c133f1888f3f59e24e0731.png)'></div>


        </div>

        <span class="legenda" style='margin-bottom: 70px;'><br>Power Menu DiskMan, <a href='javascript:vaiemu("atap"); centra();'>Ashton-Tate Applause</a> e GCI/Lotus/IBM Freelance Graphics.</span>


        <div class="symbol"></div>

        <h2>As ferramentas que ajudaram a consolidar a convenção</h2>

        <div class="corpus">
            <p>Através de uma análise das interfaces em diversos softwares da década de 1980 (importante ressaltar que não eram tantos quanto imaginamos, já que a indústria de software neste período era bem reduzida), é possível constatar que a incorporação massiva do menu <i>drop down</i> nas interfaces aconteceu entre 1987 e 1988. É neste período que vemos os softwares da <a href="javascript:openMeta('borland');">Borland</a>, e na sequência os de sua concorrente direta, a <a href="javascript:openMeta('microsoft');">Microsoft</a>, incorporarem este <i>pattern</i> mesmo em telas de modo texto.</p>

            <p>Tratam-se de produtos influentes, pois ambas desenvolviam ferramentas para os próprios desenvolvedores de software, e, consequentemente, se estabeleciam como um modelo de interface. Outro aspecto relevante a se considerar é que, neste período, seria raríssimo a presença de um designer gráfico ou designer de interface na configuração dos softwares, ficando seu design integralmente à cargo de programadores e cientístas da computação.</p>

        </div>

        <div class='divideem4'>

            <div onclick="abreimge('https://psychocod3r.files.wordpress.com/2021/05/borland-turbo-pascal-debug-7.png?w=1100')" style='background-position: top left; background-image: url(https://psychocod3r.files.wordpress.com/2021/05/borland-turbo-pascal-debug-7.png?w=1100)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/c958b3c39454b91eb48ea281d175ba5301d4f9e68771a8ba6c34dfa3e5c4d0fa.png')" style=' background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/c958b3c39454b91eb48ea281d175ba5301d4f9e68771a8ba6c34dfa3e5c4d0fa.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/Norton%20Commander%202.01.png')" style=' background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/Norton%20Commander%202.01.png)'></div>

            <div onclick="abreimge('https://winworldpc.com/res/img/screenshots/0f92525a9fa09de32694a83bcbbd1031a144f5f09c42794e064d7d2eded6bbd6.png')" style=' background-position: top left; background-image: url(https://winworldpc.com/res/img/screenshots/0f92525a9fa09de32694a83bcbbd1031a144f5f09c42794e064d7d2eded6bbd6.png)'></div>

        </div>
        <span class="legenda" style=' margin-bottom: 70px;'><br>Borland Turbo Pascal (1986), <a href='javascript:vaiemu("qc"); centra();'>Microsoft QuickC</a> (1987), <a href='javascript:vaiemu("nc"); centra();'>Norton Commander</a> (1988), <a href='javascript:vaiemu("wp6"); centra();'>WordPerfect</a> (1992)</span>

        <div class="corpus">

            <p>Porém, e mais uma vez, o grande responsável por estabelecer o <i>pattern</i> de <i>drop down</i> em modos de texto nas ferramentas de trabalho é uma das mais importantes <i>Killer Application</i> da década de 1980, o banco de dados <a href="javascript:openMeta('dbase');">dBASE III</a> (1984). O principal produto da <a href="javascript:openMeta('dbase');">Ashton-Tate</a>, vendido poucos anos depois para a <a href="javascript:openMeta('borland');">Borland</a>, o <a href="javascript:openMeta('dbase');">dBASE III</a> foi o primeiro software a implementar um menu <i>drop down</i> em modo texto, que colonizava a mente da fonte primária na configuração de interfaces de sotwares da década de 1980: os próprios programadores.</p>

            <p>O dBase foi o primeiro sistema de banco de dados relacional existente. Seu impacto na computação talvez seja até maior do que o surgimento das planilhas eletrônicas ou dos processadores de texto, e ele é a fonte direta das linguagens SQL (<i>Simple Query Language</i>) utilizadas nos bancos de dados atuais.</p>

            <p>Junto a ferramentas de terceiros (a mais famosa delas, o <a href="javascript:openMeta('clipper');">Clipper</a>), era possível gerar um novo software para realizar consultas, inclusões e edições com bases de dados criadas no dBase. Isso possibilitou que a ferramenta de banco de dados fosse o coração do desenvolvimento de soluções informatizadas para pequenos e médios negócios.</p>

            <p>Os menus <i>drop down</i> do <a href="javascript:openMeta('dbase');">dBASE III Plus</a> eram graficamente bem mais simples que os das soluções posteriores desenvolvidas a partir de 1987. Com razoável segurança, podemos conjecturar que a sua implementação foi construída do zero, enquanto as demais soluções já contavam com bibliotecas de programação capazes de incorporar este tipo de recurso com bem menos esforço por parte dos programadores envolvidos.</p>

        </div>

        <div class="corpus">

            <div class="imagemfu" onclick="abreimge('https://winworldpc.com/res/img/screenshots/iii-plus-v11-9aa86b79d53c74ba2593657665655419-dBase%20III%20Plus%201.1%20-%20Menu.png')" style='background-image: url(https://winworldpc.com/res/img/screenshots/iii-plus-v11-9aa86b79d53c74ba2593657665655419-dBase%20III%20Plus%201.1%20-%20Menu.png)'></div>
            <div class="imagemfu" onclick="abreimge('https://pbs.twimg.com/media/FMSwNbLXoA40ZsF.png')" style='background-image: url(https://pbs.twimg.com/media/FMSwNbLXoA40ZsF.png)'></div>
        </div>

        <span class='legenda' style='margin-top: -60px; margin-bottom: 40px;'>Menus <i>drop down</i> do <a href='javascript:vaiemu("atdb"); centra();'>dBASE III Plus</a>.</span>


        <div class="corpus">
            <p>O <i>pattern</i> não se encontra mais restrito aos menus de softwares. Hoje, muitas coisas são feitas através de componentes que se comportam exatamente igual aos menus <i>drop down</i>, abrindo um campo de opções para a escolha do usuário. O próprio <i>pattern</i> de <a href='./commandpalette.php'><i>Command Palette</i></a> é, em parte, um legado dos <i>drop downs</i>.

            <p>Excluíndo a indústria editorial e os estúdios de design, poucos eram os ambientes de trabalho que adotavam a plataforma da <a href="javascript:openMeta('apple');">Apple</a> como base da sua informatização. Mas ao final da década de 1990, mesmo os PCs já estavam operando integralmente através do sistema operacional <a href="javascript:openMeta('windows');">Windows</a>, que possuia o <i>pattern</i> como forma imperativa para navegação nas aplicações. Deste momento em diante, a convenção passa a ser tratada como a forma "natural" de navegação em qualquer situação.</p>

            <p>O <i>pattern</i> passou a ser questionado a partir de 2000 quando utilizado em outras expressões computacionais além das ferramentas de trabalho. Especialistas em usabilidade, campo proeminente depois que a internet se tornou ubíqua em todos os aspectos da vida, indicavam que se tratava de um padrão obstrusivo, atrapalhando mais do que ajudando; seu uso em websites e aplicações web regrediu. Com a proliferação dos dispositivos móveis conectados na internet, esta redução se intensificou, já que ele foi originalmente criado pensando na manipulação de aplicações através do <i>mouse</i> e/ou teclado, e não pelo toque ou gestos.</p>
            <p>Restrito ao contexto desktop, o <i>pattern</i> permanece onipresente.</p>
        </div>




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