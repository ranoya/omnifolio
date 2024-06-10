<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require '../tecnologiascriativas/meta.php';
    ?>
    <title>Visualização paramétrica | O tecido das tecnologias criativas</title>
    <meta property="og:title" content='Visualização paramétrica | O tecido das tecnologias criativas'>
    <meta name="description" content="Visualização paramétrica. Capítulo da versão digital do livro O tecido das tecnologias criativas">
    <meta property="og:description" content="Visualização paramétrica. Capítulo da versão digital do livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
    <script type='text/javascript' src="https://www.ranoya.com/Assets/JSLibs/AMS/imagepanel.js"></script>
    <link href="https://narrativas.ranoya.com/pointnclick/pointclickstyle.css" rel="stylesheet">
    <script src="https://www.ranoya.com/Assets/JSLibs/AMS/maketable.js"></script>
    <script src="https://narrativas.ranoya.com/pointnclick/pointclickparser.js"></script>


</head>

<body>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

        <h1 id="titulocapitulo">Visualização paramétrica</h1>

        <div class="corpus">

            <p>Este texto estabelece um contraponto - pela perspectiva das tecnologias criativas e do processo técnico-construtivo - a outro texto intitulado <a class="citacao" href='https://www.ranoya.com/books/public/interfaces/informacao.php'>Pormenores do design de informação nos meios interativos</a>, que discute originalmente um projeto de design de informação, ou mais especificamente, o projeto de um diagrama interativo com a visualização de um mapeamento de produtos narrativos digitais conhecidos como <i>Point & Click Adventures</i>.</p>

            <p>Enquanto no primeiro texto a questão enfrentada é a dificuldade projetual de se configurar um artefato para uma mídia naturalmente metamórfica e comportamental atraves de conceitos e ferramentas pensadas para a mídia estática e para resultados definitivos (o material impresso), o olhar dado aqui ao mesmo artefato é do ponto de vista do esforço para a construção de uma visualização de dados, e sobretudo uma que possa ter seus dados atualizados de forma simples e constante.</p>

            <p>Os diversos produtos apresentados nesta visualização, os <i>Point & Click Adventures</i> são softwares desenvolvidos desde 1979 - primórdios da computação pessoal - com o intuito de transformar o computador em um suporte narrativo para histórias contadas de forma interativa pela participação ativa e ação do usuário, ou, em outros termos: para fazer da computação uma mídia, e não apenas uma ferramenta. A linguagem e tipologia destes artefatos tem início em formatos textuais (em decorrência dos próprios limites da computação pessoal na década de 1970) que evoluem com o tempo para artefatos visuais com a expressão dos <i>cartoons</i> e desenhos animados (para estabelecer familiaridade com o público infantil para o qual eram destinados), e hoje pouco se diferenciam em sua expressão de outras tipologias como os jogos de ação (<i>first person shooters/FPS</i>, <i>third person shooters/TPS</i>, por exemplo).</p>




        </div>

        <div class="symbol"></div>

        <div class="halfblock eblock">

            <div style="width: 100%; height: 400px; overflow: hidden; margin: 0; margin-bottom: 30px; padding: 0;">
                <iframe src="https://www.slides.com/ranoya/componenetesnarrativoswhite/embed" style="width: 100%; height: 438px; background-color: transparent;" scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
            <span class="legenda" style="margin-top: -15px;">Diagrama original construído na pesquisa</span><br>

        </div>

        <div class="halfblock dblock">

            <p>O levantamento desta evolução e dos produtos criados nesta categoria narrativa é resultado do trabalho da <a href="https://www.ranoya.com/public/pesquisa/jornadacompleta/#bienio3" target='_blank'>pesquisa em Estética da Interação, no biênio 2018-2020</a>, que culminou na construção do diagrama acima, pautado pelos princípios basais do design da informação, que se mostrou absolutamente limitado para uso nas mídias digitais, justamente por ter sido pensado com critérios adequados a um suporte estático.</p>

            <p>A solução adotada para resolver a questão passou a uma visualização de dados apta a apresentar as informações de forma mais adequada, e também capaz de filtrar os dados e reconstruir o diagrama da maneira com que o usuário precisasse para fazer senso das informações. Este é, por assim dizer, o princípio central de toda infografia ou <i>dataviz</i>: fornecer maneiras diversificadas e lúdicas para que as pessoas possam construir (por si mesmas) significação e sentido de um conjunto grande de informações disponíveis, em muitos casos - especialmente no caso de <i>dataviz</i> - onde são necessárias operações cognitivas de associação, cruzamento, ou intersecção de dados entre duas ou mais variáveis ao mesmo tempo.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>Há dois pontos importantes de discussão à partir das tecnologias criativas. O primeiro é o aparato tecnológico que viabiliza a construção de uma visualização dos dados levantados de forma que seja possível sua manutenção e atualização permanente com simplicidade. A programação e os mecanismos computacionais que facilitam este processo estão em parte descritos e demonstrados em um texto técnico com programação em tempo-real disponível na plataforma Observable, intitulado <a href='https://observablehq.com/@ranoya/googlesheets-dataviz' target='_blank'>Dataviz em Javascript utilizando dados em tempo real de uma planilha no Google Docs</a>. O segundo ponto é esta relação intrínseca entre as expressões artistico-computacionais - a chamada arte generativa - e outras frentes da computação expressiva, como a infografia, visualização de dados ou <i>dataviz</i>. Quando entendemos o campo das tecnologias criativas exclusivamente pela perspectiva da arte generativa, estas outras expressões acabam se distanciando; mas quando abordamos a questão em um espectro mais amplo, seja como código criativo, computação expressiva, ou apenas como tecnologias criativas, elas se aproximam como se fizessem todas parte da mesma questão - o que particularmente faz sentido para mim, mas talvez não para todos.</p>

            <p>No presente caso, tratamos de um artefato que poderíamos qualificar como um diagrama ou painel paramétrico, algo que pode ser enquadrado como uma visualização de dados, mas que também foge um pouco das expressões mais convencionais da área que buscam apresentar graficamente quantidades bem maiores de dados. Esta é uma das aplicações mais diretas das tecnologias criativas sobre o design de informação, área que há anos atrás costumávamos chamar apenas de design gráfico; este conjunção costuma ser referenciada como <strong>design paramétrico</strong>, justamente por aproveitar a expressão dinâmica do código computacional para prover modificações sobre o produtos do design (sejam os próprios artefatos de design da informação, ou as representações projetuais dos artefatos materiais).</p>

            <p>De forma resumida, operamos no projeto em pauta uma visualização parametrizada, e não uma típica visualização de dados. Mas toda a discusão aqui se aplica igualmente à <i>dataviz</i>.</p>

        </div>

        <svg style="width: 100%; margin-top: -20px; margin-bottom: 60px;" viewBox="0 0 2220 636" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M998.871 14.6304V44.5454H999.871V16.039L1005.53 21.6959C1005.92 22.0864 1006.55 22.0864 1006.94 21.6959C1007.33 21.3054 1007.33 20.6722 1006.94 20.2817L1002.29 15.6248L1391.45 15.6248L1386.79 20.2817C1386.4 20.6722 1386.4 21.3054 1386.79 21.6959C1387.18 22.0864 1387.81 22.0864 1388.2 21.6959L1394.57 15.332C1394.76 15.1367 1394.86 14.8808 1394.86 14.6248V46.7702H1395.86V0H1417.11V14.617V14.6327V44.5454H1418.11V16.0391L1423.76 21.6959C1424.15 22.0864 1424.79 22.0864 1425.18 21.6959C1425.57 21.3054 1425.57 20.6722 1425.18 20.2817L1420.52 15.6248H1462.63L1457.98 20.2817C1457.59 20.6722 1457.59 21.3054 1457.98 21.6959C1458.37 22.0864 1459 22.0864 1459.39 21.6959L1465.76 15.332C1466.15 14.9414 1466.15 14.3083 1465.76 13.9177L1459.39 7.55378C1459 7.16326 1458.37 7.16326 1457.98 7.55378C1457.59 7.9443 1457.59 8.57747 1457.98 8.96799L1462.63 13.6248L1420.52 13.6248L1425.18 8.96799C1425.57 8.57747 1425.57 7.9443 1425.18 7.55378C1424.79 7.16326 1424.15 7.16326 1423.76 7.55378L1418.11 13.2106V0H1466.05V46.7702L1467.05 46.7702V0H1724V37H1757V0H2073V37H2107V0H2238V134.704H2237.97V164.83C2237.97 164.581 2237.87 164.333 2237.68 164.142L2231.32 157.778C2230.93 157.388 2230.29 157.388 2229.9 157.778C2229.51 158.169 2229.51 158.802 2229.9 159.193L2234.56 163.849H2116.65V134.704H2115.65V163.849H2115.06L2108.99 157.778C2108.6 157.388 2107.97 157.388 2107.58 157.778C2107.19 158.169 2107.19 158.802 2107.58 159.193L2112.23 163.849H2070.12L2074.78 159.193C2075.17 158.802 2075.17 158.169 2074.78 157.778C2074.39 157.388 2073.75 157.388 2073.36 157.778L2067.71 163.435V132.479H2066.71V163.849H1785.33L1789.99 159.193C1790.38 158.802 1790.38 158.169 1789.99 157.778C1789.6 157.388 1788.97 157.388 1788.58 157.778L1782.92 163.435V132.479H1781.92V164.842V164.857V194.77H1782.92V166.264L1788.58 171.921C1788.97 172.311 1789.6 172.311 1789.99 171.921C1790.38 171.53 1790.38 170.897 1789.99 170.506L1785.33 165.849H2066.71V194.77H2067.71V166.264L2073.36 171.921C2073.75 172.311 2074.39 172.311 2074.78 171.921C2075.17 171.53 2075.17 170.897 2074.78 170.506L2070.12 165.849H2112.23L2107.58 170.506C2107.19 170.897 2107.19 171.53 2107.58 171.921C2107.97 172.311 2108.6 172.311 2108.99 171.921L2115.06 165.849H2115.65V196.995H2116.65V165.849H2234.56L2229.9 170.506C2229.51 170.897 2229.51 171.53 2229.9 171.921C2230.29 172.311 2230.93 172.311 2231.32 171.921L2237.68 165.557C2237.87 165.366 2237.97 165.118 2237.97 164.868L2237.97 196.995H2238V250.36H2237.98V312.65H2238V377.165H1999.94V636H1655.75L1660.96 630.793C1661.35 630.403 1661.35 629.77 1660.96 629.379C1660.57 628.989 1659.94 628.989 1659.55 629.379L1654.89 634.036V380.579L1659.55 385.236C1659.94 385.627 1660.57 385.627 1660.96 385.236C1661.35 384.846 1661.35 384.212 1660.96 383.822L1655.3 378.165H1686.26V377.165H1623.97V378.165H1652.48L1646.82 383.822C1646.43 384.212 1646.43 384.846 1646.82 385.236C1647.21 385.627 1647.84 385.627 1648.23 385.236L1652.89 380.579V634.036L1648.23 629.379C1647.84 628.989 1647.21 628.989 1646.82 629.379C1646.43 629.77 1646.43 630.403 1646.82 630.793L1652.03 636H692V81C692 72.7157 685.284 66 677 66H220C211.716 66 205 72.7157 205 81V636H149V71.4142L153.657 76.0711C154.048 76.4616 154.681 76.4616 155.071 76.0711C155.462 75.6805 155.462 75.0474 155.071 74.6569L148.707 68.2929C148.317 67.9024 147.684 67.9024 147.293 68.2929L140.929 74.6569C140.539 75.0474 140.539 75.6805 140.929 76.0711C141.32 76.4616 141.953 76.4616 142.343 76.0711L147 71.4142V636H0V411H67V377H0V0H204.669V52.3208H205.669V23.8144L211.326 29.4713C211.716 29.8618 212.349 29.8618 212.74 29.4713C213.13 29.0808 213.13 28.4476 212.74 28.0571L208.083 23.4002L688.454 23.4002L683.797 28.0571C683.407 28.4476 683.407 29.0808 683.797 29.4713C684.188 29.8618 684.821 29.8618 685.212 29.4713L691.576 23.1073C691.966 22.7168 691.966 22.0836 691.576 21.6931L685.212 15.3292C684.821 14.9386 684.188 14.9386 683.797 15.3292C683.407 15.7197 683.407 16.3528 683.797 16.7434L688.454 21.4002L208.083 21.4002L212.74 16.7434C213.13 16.3529 213.13 15.7197 212.74 15.3292C212.349 14.9386 211.716 14.9386 211.326 15.3292L205.669 20.986V0H691.869V54.5456H692.869V0H932.132V14.6193V14.6304V44.5454H933.132V16.039L938.788 21.6959C939.179 22.0864 939.812 22.0864 940.203 21.6959C940.593 21.3054 940.593 20.6722 940.203 20.2817L935.546 15.6248H977.66L973.003 20.2817C972.612 20.6722 972.612 21.3054 973.003 21.6959C973.393 22.0864 974.027 22.0864 974.417 21.6959L980.781 15.332C981.172 14.9414 981.172 14.3083 980.781 13.9177L974.417 7.55378C974.027 7.16326 973.393 7.16326 973.003 7.55378C972.612 7.9443 972.612 8.57747 973.003 8.96799L977.66 13.6248L935.546 13.6248L940.203 8.96799C940.593 8.57747 940.593 7.9443 940.203 7.55378C939.812 7.16326 939.179 7.16326 938.788 7.55378L933.132 13.2106V0H981.074V46.7702L982.074 46.7702V0H998.871V14.6193V14.6304ZM682 636H645V588H249V636H215V81C215 78.2386 217.239 76 220 76H677C679.761 76 682 78.2386 682 81V636ZM1394.86 14.6248C1394.86 14.3689 1394.76 14.113 1394.57 13.9177L1388.2 7.55378C1387.81 7.16325 1387.18 7.16325 1386.79 7.55378C1386.4 7.9443 1386.4 8.57747 1386.79 8.96799L1391.45 13.6248L1002.28 13.6248L1006.94 8.96799C1007.33 8.57747 1007.33 7.9443 1006.94 7.55378C1006.55 7.16326 1005.92 7.16326 1005.53 7.55378L999.871 13.2106V0H1394.86V14.6248ZM1782.92 279.09V248.135H1781.92V280.497V280.513V310.425H1782.92V281.919L1788.58 287.576C1788.97 287.966 1789.6 287.966 1789.99 287.576C1790.38 287.185 1790.38 286.552 1789.99 286.162L1785.33 281.505H1916.43L1911.78 286.162C1911.39 286.552 1911.39 287.185 1911.78 287.576C1912.17 287.966 1912.8 287.966 1913.19 287.576L1919.56 281.212C1919.75 281.021 1919.84 280.772 1919.85 280.522V312.65H1920.85V250.36H1919.85V280.487C1919.84 280.237 1919.75 279.988 1919.56 279.798L1913.19 273.434C1912.8 273.043 1912.17 273.043 1911.78 273.434C1911.39 273.824 1911.39 274.457 1911.78 274.848L1916.43 279.505H1785.33L1789.99 274.848C1790.38 274.457 1790.38 273.824 1789.99 273.434C1789.6 273.043 1788.97 273.043 1788.58 273.434L1782.92 279.09ZM2000.94 248.135V279.09L2006.59 273.434C2006.98 273.043 2007.62 273.043 2008.01 273.434C2008.4 273.824 2008.4 274.457 2008.01 274.848L2003.35 279.505H2234.56L2229.9 274.848C2229.51 274.457 2229.51 273.824 2229.9 273.434C2230.29 273.043 2230.93 273.043 2231.32 273.434L2237.68 279.798C2238.07 280.188 2238.07 280.821 2237.68 281.212L2231.32 287.576C2230.93 287.966 2230.29 287.966 2229.9 287.576C2229.51 287.185 2229.51 286.552 2229.9 286.162L2234.56 281.505H2003.35L2008.01 286.162C2008.4 286.552 2008.4 287.185 2008.01 287.576C2007.62 287.966 2006.98 287.966 2006.59 287.576L2000.94 281.919V310.425H1999.94V280.513V280.497V248.135H2000.94ZM1942.08 287.576L1936.42 281.919V310.425H1935.42V280.513V280.497V248.135H1936.42V279.09L1942.08 273.434C1942.47 273.043 1943.1 273.043 1943.49 273.434C1943.88 273.824 1943.88 274.457 1943.49 274.848L1938.84 279.505H1980.95L1976.29 274.848C1975.9 274.457 1975.9 273.824 1976.29 273.434C1976.68 273.043 1977.32 273.043 1977.71 273.434L1984.07 279.798C1984.46 280.188 1984.46 280.821 1984.07 281.212L1977.71 287.576C1977.32 287.966 1976.68 287.966 1976.29 287.576C1975.9 287.185 1975.9 286.552 1976.29 286.162L1980.95 281.505H1938.84L1943.49 286.162C1943.88 286.552 1943.88 287.185 1943.49 287.576C1943.1 287.966 1942.47 287.966 1942.08 287.576ZM1984.36 250.36V312.65H1985.36V250.36H1984.36ZM1716.18 163.435V132.479H1715.18V164.842V164.857V194.77H1716.18V166.264L1721.84 171.921C1722.23 172.311 1722.86 172.311 1723.25 171.921C1723.64 171.53 1723.64 170.897 1723.25 170.506L1718.6 165.849H1760.71L1756.05 170.506C1755.66 170.897 1755.66 171.53 1756.05 171.921C1756.44 172.311 1757.08 172.311 1757.47 171.921L1763.83 165.557C1764.22 165.166 1764.22 164.533 1763.83 164.142L1757.47 157.778C1757.08 157.388 1756.44 157.388 1756.05 157.778C1755.66 158.169 1755.66 158.802 1756.05 159.193L1760.71 163.849H1718.6L1723.25 159.193C1723.64 158.802 1723.64 158.169 1723.25 157.778C1722.86 157.388 1722.23 157.388 1721.84 157.778L1716.18 163.435ZM1764.12 196.995V134.704H1765.12V196.995H1764.12ZM981.073 55.5894H950.118L955.775 61.2462C956.165 61.6367 956.165 62.2699 955.775 62.6604C955.384 63.0509 954.751 63.0509 954.36 62.6604L949.703 58.0036V95.6684L954.36 91.0115C954.751 90.621 955.384 90.621 955.775 91.0115C956.165 91.402 956.165 92.0352 955.775 92.4257L949.411 98.7897C949.02 99.1802 948.387 99.1802 947.996 98.7897L941.632 92.4257C941.242 92.0352 941.242 91.402 941.632 91.0115C942.023 90.621 942.656 90.621 943.047 91.0115L947.703 95.6684V58.0036L943.047 62.6604C942.656 63.0509 942.023 63.0509 941.632 62.6604C941.242 62.2699 941.242 61.6367 941.632 61.2462L947.289 55.5894H918.783V54.5894H981.073V55.5894ZM978.849 99.0826H916.558V100.083H978.849V99.0826ZM952.343 115.655H983.299V114.655H921.008V115.655H949.514L943.857 121.312C943.467 121.703 943.467 122.336 943.857 122.726C944.248 123.117 944.881 123.117 945.272 122.726L949.929 118.069V291.439L945.272 286.782C944.881 286.391 944.248 286.391 943.857 286.782C943.467 287.172 943.467 287.805 943.857 288.196L950.221 294.56C950.612 294.95 951.245 294.95 951.636 294.56L958 288.196C958.39 287.805 958.39 287.172 958 286.782C957.609 286.391 956.976 286.391 956.585 286.782L951.929 291.439V118.069L956.585 122.726C956.976 123.117 957.609 123.117 958 122.726C958.39 122.336 958.39 121.703 958 121.312L952.343 115.655ZM918.783 294.853H981.074V295.853H918.783V294.853ZM958 319.307L952.343 313.65H983.299V312.65H921.008V313.65H949.514L943.857 319.307C943.467 319.697 943.467 320.33 943.857 320.721C944.248 321.112 944.881 321.112 945.272 320.721L949.929 316.064V358.178L945.272 353.521C944.881 353.131 944.248 353.131 943.857 353.521C943.467 353.912 943.467 354.545 943.857 354.936L950.221 361.3C950.612 361.69 951.245 361.69 951.636 361.3L958 354.936C958.39 354.545 958.39 353.912 958 353.521C957.609 353.131 956.976 353.131 956.585 353.521L951.929 358.178V316.064L956.585 320.721C956.976 321.112 957.609 321.112 958 320.721C958.39 320.33 958.39 319.697 958 319.307ZM981.074 361.592H918.783V362.592H981.074V361.592ZM1735.39 318.099H1766.35V317.099H1704.06V318.099H1732.56L1726.91 323.756C1726.52 324.147 1726.52 324.78 1726.91 325.17C1727.3 325.561 1727.93 325.561 1728.32 325.17L1732.98 320.513V358.178L1728.32 353.521C1727.93 353.131 1727.3 353.131 1726.91 353.521C1726.52 353.912 1726.52 354.545 1726.91 354.935L1733.27 361.299C1733.66 361.69 1734.29 361.69 1734.69 361.299L1741.05 354.935C1741.44 354.545 1741.44 353.912 1741.05 353.521C1740.66 353.131 1740.03 353.131 1739.63 353.521L1734.98 358.178V320.513L1739.63 325.17C1740.03 325.561 1740.66 325.561 1741.05 325.17C1741.44 324.78 1741.44 324.147 1741.05 323.756L1735.39 318.099ZM1764.12 361.592V362.592H1701.83V361.592H1764.12ZM1741.05 383.822L1735.39 378.165H1766.35V377.165H1704.06V378.165H1732.56L1726.91 383.822C1726.52 384.212 1726.52 384.846 1726.91 385.236C1727.3 385.627 1727.93 385.627 1728.32 385.236L1732.98 380.579V489.433L1728.32 484.776C1727.93 484.386 1727.3 484.386 1726.91 484.776C1726.52 485.167 1726.52 485.8 1726.91 486.191L1733.27 492.555C1733.66 492.945 1734.29 492.945 1734.69 492.555L1741.05 486.191C1741.44 485.8 1741.44 485.167 1741.05 484.776C1740.66 484.386 1740.03 484.386 1739.63 484.776L1734.98 489.433V380.579L1739.63 385.236C1740.03 385.627 1740.66 385.627 1741.05 385.236C1741.44 384.846 1741.44 384.212 1741.05 383.822ZM1764.12 493.847V492.847H1701.83V493.847H1764.12ZM1741.05 515.077L1735.39 509.42H1766.35V508.42H1733.98H1733.97H1704.06V509.42H1732.56L1726.91 515.077C1726.52 515.467 1726.52 516.1 1726.91 516.491C1727.3 516.882 1727.93 516.882 1728.32 516.491L1732.98 511.834V553.948L1728.32 549.291C1727.93 548.901 1727.3 548.901 1726.91 549.291C1726.52 549.682 1726.52 550.315 1726.91 550.706L1733.27 557.07C1733.46 557.261 1733.71 557.359 1733.96 557.362H1701.83V558.362H1764.12V557.362H1733.99C1734.24 557.359 1734.49 557.261 1734.69 557.07L1741.05 550.706C1741.44 550.315 1741.44 549.682 1741.05 549.291C1740.66 548.901 1740.03 548.901 1739.63 549.291L1734.98 553.948V511.834L1739.63 516.491C1740.03 516.882 1740.66 516.882 1741.05 516.491C1741.44 516.1 1741.44 515.467 1741.05 515.077ZM950.118 377.041L955.775 382.698C956.165 383.088 956.165 383.722 955.775 384.112C955.384 384.503 954.751 384.503 954.36 384.112L949.703 379.455V417.12L954.36 412.463C954.751 412.073 955.384 412.073 955.775 412.463C956.165 412.854 956.165 413.487 955.775 413.877L949.411 420.241C949.02 420.632 948.387 420.632 947.996 420.241L941.632 413.877C941.242 413.487 941.242 412.854 941.632 412.463C942.023 412.073 942.656 412.073 943.047 412.463L947.703 417.12V379.455L943.047 384.112C942.656 384.503 942.023 384.503 941.632 384.112C941.242 383.722 941.242 383.088 941.632 382.698L947.289 377.041H918.783V376.041H981.073V377.041H950.118ZM916.558 420.534H978.849V421.534H916.558V420.534ZM983.299 437.107H952.343L958 442.764C958.39 443.154 958.39 443.787 958 444.178C957.609 444.569 956.976 444.569 956.585 444.178L951.929 439.521V539.476L956.585 534.82C956.976 534.429 957.609 534.429 958 534.82C958.39 535.21 958.39 535.843 958 536.234L951.636 542.598C951.445 542.789 951.196 542.886 950.945 542.89H981.074V543.89H918.783V542.89H950.912C950.662 542.886 950.412 542.789 950.221 542.598L943.857 536.234C943.467 535.843 943.467 535.21 943.857 534.82C944.248 534.429 944.881 534.429 945.272 534.82L949.929 539.476V439.521L945.272 444.178C944.881 444.569 944.248 444.569 943.857 444.178C943.467 443.787 943.467 443.154 943.857 442.764L949.514 437.107H921.008V436.107H983.299V437.107ZM952.343 561.688L958 567.345C958.39 567.736 958.39 568.369 958 568.76C957.609 569.15 956.976 569.15 956.585 568.76L951.929 564.103V606.217L956.585 601.56C956.976 601.169 957.609 601.169 958 601.56C958.39 601.95 958.39 602.584 958 602.974L951.636 609.338C951.442 609.531 951.19 609.629 950.936 609.631H981.074V610.631H918.783V609.631H950.921C950.667 609.629 950.415 609.531 950.221 609.338L943.857 602.974C943.467 602.584 943.467 601.95 943.857 601.56C944.248 601.169 944.881 601.169 945.272 601.56L949.929 606.217V564.103L945.272 568.76C944.881 569.15 944.248 569.15 943.857 568.76C943.467 568.369 943.467 567.736 943.857 567.345L949.514 561.688H921.008V560.688H950.923H950.934H983.299V561.688H952.343ZM1323 33H1256V66H1323V33ZM80 377H118V411H80V377ZM1336 33H1374V66H1336V33ZM2022 99H1956V132H2022V99ZM2035 99H2073V50H2107V117H2073V132H2035V99ZM1065 59H999V92H1065V59ZM1079 59H1116V92H1079V59ZM1075 383H1008V417H1075V383ZM1088 383H1126V417H1088V383ZM1068 568H1001V601H1068V568ZM1081 568H1119V601H1081V568ZM855 186H787V219H855V186ZM868 186H906V219H868V186ZM1068 319H1001V352H1068V319ZM1081 319H1119V352H1081V319ZM1568 488H1501V521H1568V488ZM1582 488H1619V521H1582V488ZM1856 515H1789V549H1856V515ZM1869 515H1907V549H1869V515ZM1568 418H1501V451H1568V418ZM1582 418H1619V451H1582V418ZM1864 204H1797V237H1864V204ZM1877 204H1915V237H1877V204ZM2129 204H2062V237H2129V204ZM2142 204H2180V237H2142V204ZM1424 112V179H1457V112H1424ZM1424 99V61H1457V99H1424ZM1724 50V117H1757V50H1724ZM1945 393V459H1978V393H1945ZM1945 380V342H1978V380H1945ZM645 115H249V295H645V115ZM251 312H390V428H251V312ZM645 312H406V572H645V312ZM2108.94 392.738H2131.19V394.738H2108.94V392.738ZM2122.29 397.187V417.209H2120.29V397.187H2122.29ZM2095.6 426.108H2144.54V475.05H2095.6V426.108ZM2175.68 452.803H2155.66V450.803H2175.68L2175.68 439.456H2177.68V461.702H2175.68L2175.68 452.803ZM2066.68 452.803H2086.7V450.803H2066.68V452.803ZM2120.29 506.195H2108.94V508.195H2131.19V506.195H2122.29V486.173H2120.29V506.195ZM2062.23 461.702V439.456H2064.23V461.702H2062.23ZM1920.33 377.165H1781.92V493.194H1920.33V377.165ZM1868.68 392.738H1846.44V394.738H1868.68V392.738ZM1859.78 397.187V417.209H1857.78V397.187H1859.78ZM1882.03 426.108H1833.09V475.05H1882.03V426.108ZM1804.17 452.803H1824.19V450.803H1804.17V452.803ZM1799.72 461.702V439.456H1801.72V461.702H1799.72ZM998.871 438.332H1394.72V543.31H998.871V438.332ZM1172.39 449.455H1221.34V498.398H1172.39V449.455ZM1252.48 476.151H1232.46V474.151H1252.48V462.804H1254.48V485.05H1252.48V476.151ZM1143.47 476.151H1163.49V474.151H1143.47V476.151ZM1199.09 529.543H1207.99V531.543H1185.74V529.543H1197.09V509.521H1199.09V529.543ZM1139.02 485.05V462.804H1141.02V485.05H1139.02ZM1394.72 114.655H998.871V294.224H1394.72V114.655ZM1185.74 154.699H1207.99V156.699H1185.74V154.699ZM1199.09 179.17V159.148H1197.09V179.17H1199.09ZM1221.34 188.069H1172.39V237.011H1221.34V188.069ZM1252.48 212.765V201.417H1254.48V223.663H1252.48V214.765H1232.46V212.765H1252.48ZM1163.49 214.765H1143.47V212.765H1163.49V214.765ZM1139.02 223.663V201.417H1141.02V223.663H1139.02Z" class="illFillIt" />
        </svg>


        <h2>Mecanismos</h2>

        <div class="corpus">

            <p>Os dados reunidos ao longo da pesquisa foram estruturados em um modelo que já adoto há alguns anos, chamado <a href='https://www.ranoya.com/pt/garagem/#Desuso'>AMS</a>, em que diversas características são marcadas em cada entrada de uma planilha, de forma que possam ser filtrados e localizados através destes descritores. Cada caracteristica recebe uma marcação binária (sim ou não), que possibilita criar uma infinidade de conjuntos e cruzamentos de títulos que compartilham das mesmas características.</p>

            <p>Na base dos <i>Point & Click Adventures</i> estão presentes descritores sobre o gênero narrativo, a linguagem gráfica adotada na expressão, a forma como o produto foi publicado (por um <i>publisher</i> ou de forma independente), se ele adotou alguma <i>engine</i> específica para ser construído, o formato predominante da interação (textual, gráfica, linear, etc.), além do nome da produtora, o ano de lançamento, a existência de relançamentos especiais ou de comemoração, e um índice específico para associar multiplos produtos em uma mesma série.</p>

            <p>Através destes registros feitos para cada nova entrada é possível parametrizar aquilo que será visualizado no painel em tempo-real. Da limitação de um período temporal à escolha do gênero narrativo e linguagem específicos, as marcações feitas neste modelo estrutural permitem identificar conjuntos reduzido de títulos em que as caracteristicas estão presentes. Também é um aspecto intencional desta metodologia não restringir um conjunto de características a uma única opção ou categoria; algo como restringir o registro, digamos de gênero narrativo, a uma única opção, já que um produto pode ao mesmo tempo estar bem caracterizado como sendo do gênero de "ficção científica", mas também estar bem enquadrado como uma narrativa "policial". Esta ambiguidade sobre a qualificação dos artefatos foi um dos grandes motivadores para a elaboração do modelo <a href='https://www.ranoya.com/pt/garagem/#Desuso'>AMS</a>, já que a grande maioria das ferramentas de mapeamento só possibilitavam a categorização dos objetos em um único registro.</p>

            <p>Com estas marcações estruturadas na tabela de objetos, foi possível elaborar todo o conjunto de opções que parametrizam a visualização. Abaixo temos a parte do artefato onde todas as opções são oferecidas ao usuário para modificação dos resultados:
            </p>

        </div>


        <div>

            <style>
                .specific {
                    width: 90vw;
                    margin: 0;
                    padding: 0;
                }
            </style>

            <div class="pncintro specific" style="padding-top: 20px !important; margin-top: -40px;
    margin-bottom: 40px;">

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

                <h2>Ano</h2>
                <p style="margin: 0; padding: 0; width: 100%;">
                    <input type="checkbox" id="ordena" onchange="pncParametricOrdenacao(this.checked)"> Ordena a visualização
                    dos artefatos: dos mais recentes para os mais antigos
                </p>
                <p style="margin-top: 10px; margin-bottom: 0; padding-bottom: 0;">Defina um período (ano inicial e ano final) para localização dos
                    artefatos:</p>

                <p style="margin-bottom: 0; padding-bottom: 0;">
                    <input type="range" id="anoinit" value=0 onchange="pncParametricYStart(this.value)">
                    <input type="range" id="anofim" value=100 onchange="pncParametricYEnd(this.value)">
                <div id="anoinitnumber">1979</div>
                <div id="anofimnumber">
                    <script>
                        var esseano = new Date();
                        document.write(esseano.getFullYear());
                    </script>
                </div>
                </p>

            </div>
            <span class="legenda" style="margin-top: -30px; margin-bottom: 20px;">Alterações neste quadro produzirão mudanças nos dados tabulados, no sumário e no painel final.</span><br>
        </div>


        <div class="corpus">

            <p>Os dados, por sua vez, são transparentes e podem ser acessados do próprio artefato na sua versão tabulada (abaixo), ou no formato <i>JSON</i> retirado diretamente da própria planilha <a target="_blank" href='https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv'>neste link</a>.</p>

            <p>Há três formatos usuais para intercambio de dados entre os sistemas: o <i>CSV</i>, o <i>XML</i> e o <i>JSON</i>, sendo o primeiro o mais antigo e mais otimizado; o segundo com a maior possibilidade nas formas de descrição dos elementos; e o terceiro uma relação mais equilibrada entre os outros dois em termos de otimização e estruturação dos dados, sendo também o mais conveniente quando se usa a linguagem de programação <a href='../javascript'>Javascript</a>, já que <i>JSON</i> é, na verdade, um objeto <a href='../javascript'>Javascript</a>.</p>

            <p>Os dados retirados diretamente da planilha (e que podem, portanto, serem alterados de fora simples em qualquer momento) alimentam o código que gera a visualização, transformando os registros audiovisuais dos produtos em imagens com links para seus vídeos online, e organizando um painel destas imagens em ordem cronológica, distribuídas pela tipologia da interação de cada produto, conforme é discutido no <a class="citacao" href='https://www.ranoya.com/books/public/interfaces/informacao.php'>texto sobre a configuração (projeto) do artefato</a>. Os filtros aplicados no quadro acima restringem os dados que alimentarão a construção do painel.</p>

            <p>Muito da expressividade do artefato se dá em função da variação nos dados apresentados, e na conformação destes dados ao contexto e condições de uso da visualização (responsividade). Os dados são fixados em um campo do tipo <i>Grid</i> no código <a href='../html'>HTML</a>/<a href='../css/'>CSS</a>. O <i>Grid</i> é uma estrutura muito flexível e que pode ter sua organização completamente remanejada em função do contexto (ou mais especificamente a diretriz Media do código <a href='../css/'>CSS</a>).</p>

            <p>Esta flexibilidade do <i>Grid</i> permite que o conteúdo de duas colunas diferentes sejam fundidos em uma única quando o espaço de tela se reduz (casos dos aparelhos celulares ou tablets), fazendo com que campos (telas) maiores modifiquem a configuração do painel exibindo uma categorização mais detalhada dos dados.</p>


        </div>

        <style>
            .whitespace {
                height: 100px;

            }

            .pnclistatitulo {
                display: block;
                width: 400px;
                margin-bottom: -80px;
                margin-top: 60px;
            }

            .maketableheader {
                display: none;
                text-transform: uppercase;
                font-size: 14px;
                font-weight: bolder;
            }

            .maketablecel {
                display: none;
                font-size: 12px;

            }

            a.maketablelink {
                color: var(--sumarionicon-hover, #ac229d);
                background-color: transparent;
                text-decoration: none;
                padding: 5px 10px 5px 10px;
                margin-left: -5px;
                transition: all .4s ease-in;
            }

            a.maketablelink:hover {
                background-color: var(--text-color, black);
                color: var(--bg-color, #FFFFFF);
                padding: 5px 10px 5px 10px;
                margin-left: -5px;
                text-decoration: none;
                transition: all .4s ease-in;
            }

            .graphicadventure .maketableconteudo,
            .textoriented .maketableconteudo,
            .linearadventure .maketableconteudo,
            .animation .maketableconteudo,
            .animationlang .maketableconteudo,
            .hqlang .maketableconteudo,
            .literaturainfantillang .maketableconteudo,
            .estilizadolang .maketableconteudo,
            .pixelartlang .maketableconteudo,
            .computergraphicslang .maketableconteudo,
            .retrolang .maketableconteudo,
            .outralinguagemlang .maketableconteudo,
            .pncgenaventura .maketableconteudo,
            .pncgencomedia .maketableconteudo,
            .pncgencavalaria .maketableconteudo,
            .pncgenfantasia .maketableconteudo,
            .pncgencientifica .maketableconteudo,
            .pncgenterror .maketableconteudo,
            .pncgenpolicial .maketableconteudo,
            .pncgencyberpunk .maketableconteudo {

                background-color: var(--text-color, black);

            }

            #listapointandclick {
                display: inline-grid;
                width: 100%;
                grid-template-columns: [start] 15% 40px 1fr 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px 25px [end];
                grid-template-rows: auto;
                border-bottom-style: solid;
                border-bottom-color: var(--yearlinemark, #00000033);
                border-bottom-width: thin;
                margin-bottom: 30px;
                font-family: Helvetica,
                    Arial,
                    sans-serif;
            }



            .maketableheader.graphicadventure,
            .maketableheader.textoriented,
            .maketableheader.linearadventure,
            .maketableheader.animation,
            .maketableheader.animationlang,
            .maketableheader.hqlang,
            .maketableheader.literaturainfantillang,
            .maketableheader.estilizadolang,
            .maketableheader.pixelartlang,
            .maketableheader.computergraphicslang,
            .maketableheader.retrolang,
            .maketableheader.outralinguagemlang,
            .maketableheader.pncgenaventura,
            .maketableheader.pncgencomedia,
            .maketableheader.pncgencavalaria,
            .maketableheader.pncgenfantasia,
            .maketableheader.pncgencientifica,
            .maketableheader.pncgenterror,
            .maketableheader.pncgenpolicial,
            .maketableheader.pncgencyberpunk {


                transform-origin: 5px 12px;
                transform: rotate(-90deg);
                display: inline-block;
                padding-right: 10px;
                width: 210px;

            }


            .ano {
                display: inline-block;
                grid-column-start: 2;
                grid-column-end: 3;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 0px;
            }

            .titulo {
                display: inline-block;
                grid-column-start: 1;
                grid-column-end: 2;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 20px 8px 0;
            }

            .link {
                display: inline-block;
                grid-column-start: 3;
                grid-column-end: 4;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 10px;
                overflow-x: hidden;
            }

            .animationlang {
                display: inline-block;
                grid-column-start: 4;
                grid-column-end: 5;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .hqlang {
                display: inline-block;
                grid-column-start: 5;
                grid-column-end: 6;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .literaturainfantillang {
                display: inline-block;
                grid-column-start: 6;
                grid-column-end: 7;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .estilizadolang {
                display: inline-block;
                grid-column-start: 7;
                grid-column-end: 8;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pixelartlang {
                display: inline-block;
                grid-column-start: 8;
                grid-column-end: 9;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .computergraphicslang {
                display: inline-block;
                grid-column-start: 9;
                grid-column-end: 10;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .retrolang {
                display: inline-block;
                grid-column-start: 10;
                grid-column-end: 11;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .outralinguagemlang {
                display: inline-block;
                grid-column-start: 11;
                grid-column-end: 12;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgenaventura {
                display: inline-block;
                grid-column-start: 12;
                grid-column-end: 13;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgencomedia {
                display: inline-block;
                grid-column-start: 13;
                grid-column-end: 14;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgencavalaria {
                display: inline-block;
                grid-column-start: 14;
                grid-column-end: 15;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgenfantasia {
                display: inline-block;
                grid-column-start: 15;
                grid-column-end: 16;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgencientifica {
                display: inline-block;
                grid-column-start: 16;
                grid-column-end: 17;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgenterror {
                display: inline-block;
                grid-column-start: 17;
                grid-column-end: 18;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgenpolicial {
                display: inline-block;
                grid-column-start: 18;
                grid-column-end: 19;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .pncgencyberpunk {
                display: inline-block;
                grid-column-start: 19;
                grid-column-end: 20;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .textoriented {
                display: inline-block;
                grid-column-start: 20;
                grid-column-end: 21;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .graphicadventure {
                display: inline-block;
                grid-column-start: 21;
                grid-column-end: 22;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;

            }

            .linearadventure {
                display: inline-block;
                grid-column-start: 22;
                grid-column-end: 23;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .animation {
                display: inline-block;
                grid-column-start: 23;
                grid-column-end: 24;
                border-top-style: solid;
                border-top-color: var(--yearlinemark, #00000033);
                border-top-width: thin;
                padding: 8px 5px 8px 5px;
            }

            .capasdedisco {
                margin: 0;
                padding: 0;
                width: 100%;
                clear: both;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-column-gap: 60px;
                grid-row-gap: 5px;
                margin-top: -40px;
            }

            @media screen and (max-width: 850px) {
                .capasdedisco {
                    grid-template-columns: 1fr;
                }
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
                transition: all .6s ease-in;
                background-color: transparent;
                overflow: hidden;


            }

            .sumpnclink:hover {
                transition: all .4s ease-in;
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
                font-size: 9px;
                line-height: 10px;
                text-transform: uppercase;
            }

            @media screen and (min-width: 940px) {

                .pncimagelink {
                    width: calc(100% - 10px) !important;
                }

            }

            @media screen and (max-width: 940px) {

                .pncimagelink {
                    width: calc(100% - 10px) !important;
                }

                .whitespace {
                    height: 30px;
                }

                .pnclistatitulo {
                    display: block;
                    width: 300px;
                    margin-bottom: -20px;
                    margin-top: -20px;
                    font-size: 26px;
                }

                #listapointandclick {
                    display: inline-grid;
                    width: 100%;
                    grid-template-columns: [start] 1fr 40px 0 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px 15px [end];
                }

                .maketableheader.graphicadventure,
                .maketableheader.textoriented,
                .maketableheader.linearadventure,
                .maketableheader.animation,
                .maketableheader.animationlang,
                .maketableheader.hqlang,
                .maketableheader.literaturainfantillang,
                .maketableheader.estilizadolang,
                .maketableheader.pixelartlang,
                .maketableheader.computergraphicslang,
                .maketableheader.retrolang,
                .maketableheader.outralinguagemlang,
                .maketableheader.pncgenaventura,
                .maketableheader.pncgencomedia,
                .maketableheader.pncgencavalaria,
                .maketableheader.pncgenfantasia,
                .maketableheader.pncgencientifica,
                .maketableheader.pncgenterror,
                .maketableheader.pncgenpolicial,
                .maketableheader.pncgencyberpunk {

                    padding: 0 !important;
                    padding-top: 3px !important;
                    transform-origin: 5px 12px;
                    width: 150px;

                }

                .link {
                    display: none;
                }

                .animationlang,
                .hqlang,
                .literaturainfantillang,
                .estilizadolang,
                .pixelartlang,
                .computergraphicslang,
                .retrolang,
                .outralinguagemlang,
                .pncgenaventura,
                .pncgencomedia,
                .pncgencavalaria,
                .pncgenfantasia,
                .pncgencientifica,
                .pncgenterror,
                .pncgenpolicial,
                .pncgencyberpunk,
                .textoriented,
                .graphicadventure,
                .linearadventure,
                .animation {

                    padding: 8px 0px 0px 0px;
                    font-size: 10px;
                }

            }

            @media screen and (max-width: 550px) {

                #listapointandclick {
                    display: inline-grid;
                    width: 100%;
                    grid-template-columns: [start] 1fr 40px 0 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px 10px [end];
                }

                .link {
                    display: none;
                }

                .animationlang,
                .hqlang,
                .literaturainfantillang,
                .estilizadolang,
                .pixelartlang,
                .computergraphicslang,
                .retrolang,
                .outralinguagemlang,
                .pncgenaventura,
                .pncgencomedia,
                .pncgencavalaria,
                .pncgenfantasia,
                .pncgencientifica,
                .pncgenterror,
                .pncgenpolicial,
                .pncgencyberpunk,
                .textoriented,
                .graphicadventure,
                .linearadventure,
                .animation {

                    padding: 8px 0px 0px 0px;
                    font-size: 10px;
                }

                .maketableheader.graphicadventure,
                .maketableheader.textoriented,
                .maketableheader.linearadventure,
                .maketableheader.animation,
                .maketableheader.animationlang,
                .maketableheader.hqlang,
                .maketableheader.literaturainfantillang,
                .maketableheader.estilizadolang,
                .maketableheader.pixelartlang,
                .maketableheader.computergraphicslang,
                .maketableheader.retrolang,
                .maketableheader.outralinguagemlang,
                .maketableheader.pncgenaventura,
                .maketableheader.pncgencomedia,
                .maketableheader.pncgencavalaria,
                .maketableheader.pncgenfantasia,
                .maketableheader.pncgencientifica,
                .maketableheader.pncgenterror,
                .maketableheader.pncgenpolicial,
                .maketableheader.pncgencyberpunk {


                    transform-origin: 0px 12px;
                    padding-right: 0;

                }

            }
        </style>
        <div id="listapointandclick" style="margin-top: 130px; margin-bottom: 20px;"></div>
        <div style='width:  100%; clear: both; margin-bottom: 50px;'>
            <span class="legenda">Dados tabulados. As informações selecionadas no quadro de opções afetam os resultados em tempo-real.</span>
        </div>

        <script>
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
                            popula += "<span class='bigano'>" + actualano + "</span>";
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

                        popula = popula + '<a target=\'_blank\' class=\'sumpnclink\' href=\'' + dados[linha].link + '\'><div style=\"background-image: url(\'' + youtubeImage(dados[linha].link) + '\' );\" class=\'sumpncthumbitself\'><div class=\'sumpnctitle\'><b>' + dados[linha].titulo + '</b><br>' + dados[linha].publisher + '<br><span class=\'microtipologia\'>' + tipo + '</span></div></div></a>';


                        if (linha >= dados.length - 1 || (linha < dados.length - 1 && actualano != dados[linha + 1].ano)) {
                            popula += "</div></div>";
                        }




                    }


                    document.getElementById(el).innerHTML = popula;

                });
            }

            url = "https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv";
            maketable(url, "listapointandclick");
            sumarizapandc(url, 'sumariopointandclick');

            urloriginal = url;
            checaurl = function() {
                if (url != urloriginal) {
                    console.log("mudou para " + url);
                    urloriginal = url;
                    maketable(url, "listapointandclick");
                    sumarizapandc(url, 'sumariopointandclick');
                }
            }

            setInterval(checaurl, 1000);
        </script>

        <div class="corpus">

            <p>No limite, quando o campo é realmente estreito, apenas duas das ramificações tipológicas mais importantes são exibidas, omitindo os demais artefatos cujo papel é mais complementar, no painel.</p>

            <p>A quantidade de dados totais que compõe o painel pode não ser comparável ao que se vê normalmente em <i>dataviz</i>, mas também não é uma quantidade considerada pequena (que tende a crescer), como se vê pelos dados tabulados. A variabilidade desta quantidade também é alta: dependendo dos parâmetros selecionados no quadro, os resultados podem ser pouquíssimos produtos apresentados. O princípio da <b>indeterminação</b> é um dos fundamentos discutidos no contraponto feito em <a class="citacao" href='https://www.ranoya.com/books/public/interfaces/informacao.php'>Pormenores do design de informação nos meios interativos</a>.</p>

            <p>A necessidade de se visualizar uma imagem de referência sobre cada produto com seu nome e produtora, dentro de uma genealogia, impede que a visualização seja constituída de forma concentrada, como um gráfico que apresente em um espaço reduzido toda uma síntese do que existe mapeado. Para sumarizar estas informações foi criada uma outra visualização apresentando os títulos em cada ano que se enquadrasse aos critérios escolhidos. Esta visualização, contudo, não supre as necessidades/demandas/requisitos estabelecidos pela pesquisa para um painel de visualização onde o usuário pudesse entender as origens e ramos dos <i>Point & Click Adventures</i>.

            <p>Abaixo apresentamos tanto a visualização sumarizada, quanto o painel final com as informações completas:
            </p>
        </div>

        <div id='sumariopointandclick' class='capasdedisco'></div>
        <div style='width:  100%; clear: both; margin-top: 20px; margin-bottom: 40px;'>
            <span class="legenda">Sumário. As informações selecionadas no quadro de opções afetam os resultados em tempo-real.</span>
        </div>



        <div class="corpus">
            <p>O painel de fato implementado como subproduto da pesquisa foi construído com uma ornamentação visual contendo imagens de fundo para criar um efeito de profundidade (conhecido como <i>parallax</i>). Ele também pode ser exibido em cores/temas diferentes, tendo uma versão <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/paralax.php'>preto e branco</a> , uma <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/paralax.php?theme=invertpaleblue'>versão azul</a>, uma <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/paralax.php?theme=violetpink'>versão roxa</a>, uma <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/paralax.php?theme=yellow70'>versão amarela</a>, e uma <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/paralax.php?theme=cyancin'>versão ciano</a> cujas cores remetem à paleta de 16 cores dos primeiros produtos da década de 1980.</p>

            <p>Novamente, é importante entender que a ênfase ou requisito da visualização não estava centrada na quantidade de produtos lançados em cada ano (para qual, definitivamente, o sumário seria uma expressão mais adequada), e sim a genealogia da estrutura narrativa de cada um deles, para que suas origens e diferentes matrizes pudessem ser compreendidas. Selecionando características como <i>pixel art</i> no quadro, é possível ver todo o conjunto de <i>Point & Click Adventures</i> originais limitados a este tipo de linguagem, junto com produtos bem mais recentes que adotam a mesma linguagem como uma forma de reverência aos pioneiros do formato narrativo; selecionando a opção <i>retrô</i>, praticamente isolamos os produtos recentes, sem os originais que estruturaram o "gênero". Através destes recortes, é possível compreender que os títulos que homenageam as narrativas pioneiras também se mantém dentro da genealogia de <i>Text Oriented Adventure</i> e <i>Graphic Adventure</i>, reforçando sua reverência produtos que criaram este tipo narrativo.</p>
        </div>


        <a name="diagramafinal"></a>
        <div>

            <div class="pncdiagramaheader specific" id="cabecalho">

                <div style='grid-row-start: 1; grid-row-end: 2; border: 0;' class="pnctimeline pncupcleancut">&nbsp;</div>

                <div class="thirdlineheader">&nbsp;</div>

                <div style='grid-column-start: 2; grid-column-end: end; grid-row-start: 1; grid-row-end: trackheadend;' class="pncupcleancut">&nbsp;</div>

                <div style='grid-how-start: 2; grid-row-end: trackheadend; border: 0' class="pnctimeline headercolor">&nbsp;</div>
                <div style='grid-how-start: 2; grid-row-end: trackheadend; grid-column-start: 3; grid-column-end: 4;' class="headercolor">&nbsp;</div>
                <div style='grid-how-start: 2; grid-row-end: trackheadend;' class="pncintermediario2 headercolor">&nbsp;</div>
                <div style='grid-how-start: 2; grid-row-end: trackheadend;' class="pncintermediario headercolor">&nbsp;</div>


                <div style='grid-row-start: 2; grid-row-end: 3;' class="pnctextoriented pncheader"><br class="corrigeposicao">Text Oriented<br>Adventure</div>
                <div style='grid-row-start: 2; grid-row-end: 3' class="pncgraphicadventure pncheader"><br>Graphic<br>
                    Adventure</div>
                <div style='grid-row-start: 2; grid-row-end: 3' class="pnclinearadventure pncheader"><br>Linear<br>
                    Adventure</div>
                <div style='grid-row-start: 2; grid-row-end: 3' class="pncanimation pncheader"><br>Interactive<br>Animation
                </div>

                <div class="thirdlinesierraagi">Sierra AGI</div>
                <div class="thirdlinesierrasci">Sierra SCI</div>
                <div class="thirdlinescumm">SCUMM</div>

            </div>

            <div id="emptydummy">&nbsp;</div>

            <div class="pncdiagramacontainer" id="diagramapointandclick">
            </div>

            <div style='width:  100%; clear: both; margin-top: 10px; margin-bottom: 40px;'>
                <span class="legenda">Painel completo. As informações selecionadas no quadro de opções afetam os resultados em tempo-real.</span>
            </div>

            <script>
                url = "https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv";

                filtrogeral = "filter=pncadv&";
                pointnclickpanel(url, "diagramapointandclick");
            </script>

        </div>

        <h2>Um novo experimento</h2>

        <div class="corpus">

            <p>Em 2022, um novo experimento para visualização destes mesmos registros foi criado. Desta vez, uma peça editorial apresentando a questão das narrativas em suporte computacional, e sua gênese nos artefatos de <i>Point & Click Adventures</i>. Além do texto, o editorial contava com um componente de visualização em forma de uma <i>timeline</i> horizontal, uma das propostas aventadas para configuração do artefato original, mas abandonada em função da inviabilidade de uso em dispositivos mobile.</p>

            <p>De fato, este editorial não é amigável aos dispositivos móveis, e seu resultado é interessante, desde que experienciado em um <i>desktop</i>. O componente de visualização, apesar desta condição complicada de existência, conta com inúmeros recursos que a solução anterior não possui: os mecanismos de recorte e filtro na base de dados já são bem mais sofisticados que um formulário duro com <i>checkboxes</i> e barras de dimensionamento, fazendo a devida seleção do conjunto de dados a partir das informações escritas no campo de entrada. A inclusão, por exemplo, de dois anos diferentes já indica à ferramenta que há um recorte temporal a ser considerado na seleção; informações de gênero ou tipologia, em inglês ou português, escritas integral ou parcialmente, são identificados nesta entrada de informação e automaticamente incluem a categoria certa no recorte; indicar parte do nome de um artefato, de uma série de artefatos, ou do nome de uma produtora/estúdio, também produz um recorte na base de dados. Tudo isso é feito de forma muito rápida e imediata ao longo da escrita, contribuíndo para uma performance sensível no comportamento da visualização.</p>

            <p>A identificação de padrões, como artefatos de uma mesma série, de uma mesma produtora, de uma mesma tipologia, gênero ou linguagem, abrem um painel lateral contendo explicações complementares que podem ser úteis, e, em alguns casos, vídeos ou documentários relativos a estas questões para enriquecer e oferecer maior contexto ao leitor-usuário.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>A nova visualização também permite que as informações sejam agrupadas de maneiras diferentes, exibindo relações entre os artefatos que não eram previstas na primeira configuração. Além de organizá-los pela tipologia, útil para traçar a sua genealogia - o objetivo da visualização para a pesquisa -, esta nova ferramenta permite que os artefatos sejam agrupados pela linguagem adotada, pelos gêneros narrativos, pelas produtoras/estúdios que os criaram, ou mesmo pelas séries dos quais pertencem. Como parte dos registros é não-binário (um artefato pode participar de mais de um gênero narrativo ao mesmo tempo, por exemplo), é possível vê-los em vários locais e grupos paralelos.</p>

            <p>A questão da linguagem, sobretudo, passa a ser uma frente a ser explorada, possível apenas através desta nova visualização; inumeros registros novos começaram a ser incluídos na base de dados, como referências aos aspectos da linguagem gráfica presente nos artefatos, considerando que a questão da linguagem é algo bem importante para a pesquisa em design da informação.</p>

            <p>Ainda que problemático sob um aspecto de interface e uso (projeto) pensados para que outras pessoas possam usufruir da informação, este novo artefato é, em si mesmo, bastante útil para traçar relações e avaliar proximidades entre as narrativas estudadas. Se tratada como uma ferramenta para uso de especialistas, ela tem grande valor como artefato de visualização de dados.</p>
        </div>

        <div style='margin-bottom: 4.5vw;'>
            <img src='https://www.ranoya.com/Assets/portfolio/pointandclick-timeline.png' style='width: 100%;'>

            <span class='legenda'><br>Componente de visualização da peça editorial <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/timeline.php'>As raízes narrativas da mídia computacional</a></span>

        </div>

        <a name='prodfinal'></a>


        <h2>Produto final</h2>

        <div class="corpus">
            <p>A versão final do editorial acabou aperfeiçoando o modelo legado de 2022. Pequenos ajustes gráficos foram feitos à visualização (timeline) original, como o uso de avatares quadrados no lugar dos circulares, respeitando a linguagem gráfica do novo editorial; as cores, obviamente, também foram ajustadas para que o componente fosse bem integrado ao novo produto editorial.</p>

            <p>Mas não foram operadas apenas mundanças "cosméticas" no artefato. Links que poderiam parametrizar a visualização estavam finalmente independentes do próprio componente, e poderiam acionar mudanças na linha do tempo de qualquer ponto do documento. Não seriam apenas capazes de aplicar filtros sobre ela, como também exibiam paineis sobrepostos com informações sobre o produto de Point & Click mencionado, que poderia ser enviado ao "monitor" disponível no editorial para que o respectivo vídeo (ou emulação do produto) pudesse ser experimentado.</p>

            <p>Este novo elemento, o "monitor", representou por si só um grande desafio geométrico para o documento, já que suas dimensões e posições precisam ser alteradas ao longo do documento para que ele não atrapalhe a leitura. Garantir que estas posições e dimensões funcionassem qualquer que fosse a proporção que o navegador se encontrasse ou fosse ajustado, não foi um processo simples de ser resolvido.</p>

            <p>Pequenas recomendações de links, imagens das narrativas de Point & Click, ícones indicando qual o tipo de interação dos links, imagens sobrepostas ao texto como se fossem anexos, e um painel capaz de exibir outros vídeos ou apresentações, são algumas das novas interações incluídas no projeto editorial, além de todo o movimento de seus elementos e a capacidade de ir e vir entre uma secção e outra do documento. Muitos recursos de gestão de interfaces foram implementados para criar toda esta fluidez nas interações.</p>

        </div>

        <div style="margin-bottom: 4.5vw">
            <img src='https://lh3.googleusercontent.com/d/1Rt7K97VpCyL_lEYOuyfoiZ4jFEFhbNpn' style='width: 100%;'>

            <span class='legenda'><br>Componente de visualização na produto final do editorial <a target='_blank' href='https://narrativas.ranoya.com/pointnclick2'>As raízes narrativas da mídia computacional</a></span>

        </div>

        <div class="corpus">
            <p>Mas o coração do editorial continua sendo seu componente de visualização em forma de linha do tempo. Nele também foram feitas algumas mudanças: o painel lateral que continha os vídeos exibidos quando um produto era selecionado deu lugar ao "monitor" sempre presente na tela; O componente passou a figurar no final do documento, fazendo com que seu <i>scroll</i> nos dois eixos não atrapalhasse a navegação no resto do documento, como acontecia na versão anterior do editorial; os produtos selecionados não modificavam mais o campo de pesquisa, permitindo uma independência entre o que era visualizado como resultado da ação do usuário (imagens da narrativa, o vídeo e/ou a emulação do artefato), e a navegação/filtragem da linha do tempo; e por fim, as maneiras de organizar os dados disponíveis (por linguagem, por gênero narrativo, ou pelo mecanismo adotado) foram implementados como botões, e não mais como um campo de seleção</p>

            <p>Todos estes ajustes finos deixaram o componente melhor integrado e consistente com o resto do editorial. Se um dos problemas iniciais da visualização destes artefatos era a sensação claustrofóbica causada por um conjunto de botões expremidos em uma apresentação de slide interativa, a configuração final da visualização respira de forma bem mais leve e fluída bem acomodada e distribuída ao longo do espaço de tela disponível.</p>
        </div>



        <div class="symbol"></div>

        <h2>Relações entre arte generativa e <i>dataviz</i></h2>

        <div class="corpus">

            <p>Aparentemente, apenas o que há em comum entre estes dois campos são o uso ostensivo de formas geométricas, construções abstratas e as cores vibrantes. Mas esta é uma percepção superficial do que realmente são. Podemos dizer que ontologicamente (na sua natureza ou essência) são exatamente a mesma coisa: peças essencialmente visuais configuradas por algorítmos, possíveis quase que exclusivamente sob um suporte computacional, que utilizam a repetição e o rítmo como elementos centrais da sua estética, e que seus efeitos plásticos perceptíveis são meramente incidentais, resultantes de regras definidas em sua programação que - estas sim - definem seu comportamento e desenvolvimento.</p>

            <p>Dito com outras palavras, as duas compartilham de um mesmo processo construtivo, e também de um mesmo olhar sobre a expressão, sempre calcado em dados, sejam as longas bases de dados que alimentam as visualizações, ou os dados internos de um algorítmo (variáveis, posições, matrizes, etc.) que geram suas formas.</p>

            <p>E a dificuldade em criar estes artefatos é também a mesma: a presença de um raciocínio computacional orientando a configuração do artefato (ao menos para entender <i>o que</i> é possível, e <i>como</i> é possível ser feito) e de uma prática na confecção do cógido capaz de dar materialidade a eles - <i>expertises</i> incomuns aos artistas e designers, presentes de forma geral apenas em cientistas e engenheiros de computação com as mesmas deficiências formativas no que tange à habilidades com a expressão, comunicação e composição plástica dos artefatos que criam.</p>

            <p>Compensar estas questões é inegavelmente um grande desafio formativo. Atualmente há um esforço em muitas universidades norte-americas para incluir uma formação artística nos campos de ciências exatas chamados de STEM <i>Education</i> (ciência, tecnologia, engenharia e matemática), e transformá-los em STEAM <i>Education</i> (ciência, tecnologia, engenharia, artes e matemática). E esforços desde a década de 90, como o de <a href="javascript:openMeta('murielcooper');">Muriel Cooper</a> e <a href="javascript:openMeta('maeda');">John Maeda</a> no <a href="javascript:openMeta('medialab');">MIT Media Lab</a>, para incluir o pensamento computacional nos campos artísticos e criativos, que culminaram na criação da linguagem <a href="javascript:openMeta('processing');">Processing</a>, por exemplo.</p>

        </div>

        <style>
            #exemplo1 .imagepanel,
            #exemplo2 .imagepanel,
            #exemplo2 .imagepanel .thumbitself,
            #exemplo1 .imagepanel .thumbitself {
                width: 100%;
                height: 40vw;
            }
        </style>

        <div class="halfblock eblock" id='exemplo1'>
        </div>

        <div class="halfblock dblock" id='exemplo2'>
        </div>

        <div style='width:  100%; clear: both;'>
            <span class="legenda">Diferenças na expressão da <a href="https://omniboards.vercel.app/?filtra=PO%C3%89TICACOMPUTACIONAL_QUADRO&menu=https://opensheet.elk.sh/1MUr_AiAYBa184e5ZOUO9jQGD-HvU3rQlOvu0oMAj7fw/Menu_Arte" target="_blank">Arte Generativa</a> e do <a href="https://visse.vercel.app/mapeamentoartefatos/" target="_blank">Dataviz</a>.</span>
        </div>

        <script>
            imagepanel("https://www.ranoya.com/AssetsManager/simplequery/index.php?cat=artefatos&filter=pinboardcompatible,publik,pinpoetica&surpriseme=true&quantos=1", "exemplo1");
            imagepanel("https://www.ranoya.com/AssetsManager/simplequery/index.php?cat=artefatos&filter=pinboardcompatible,publik,pindataviz&surpriseme=true&quantos=1", "exemplo2");
        </script>

        <div class="corpus">
        </div>

        <div class="corpus">
            <p>Por aqui, trabalho desde 2017 neste projeto chamado <a href="javascript:openMeta('futurododesign');">Futuro do Design</a>, com o mesmo intuito do <i>Visible Language Workshop</i> de <a href="javascript:openMeta('murielcooper');">Cooper</a>, ou o <i>Design by Numbers</i> de <a href="javascript:openMeta('maeda');">Maeda</a>, assim como diversos outros colegas espalhados pelo país também o fazem. Especialmente no design, encontramos também a dificuldade em reconectá-lo ao campo da arte em função de um rompimento secular entre as duas práticas.</p>

            <p>A interdisciplinaridade formativa, ou quando isso é demasiadamente complexo, ao menos a colaboração entre os campos, parecem ser critérios-chave para que tanto arte generativa quanto o <i>dataviz</i> se tornem práticas mais naturais aos profissionais de design, arte ou computação. Por diversas vezes já me questionei se a produção deste tipo de artefato não seria uma exigência para uma formação contínua ampliando as habilidades e competências dos estudantes, isto é, acrescimos às formações que já possuímos atualmente nas três (ou mais) áreas. Isto também poderia ajudar, mas literacia computacional, na verdade, é uma competência que poderia ser desenvolvida mesmo antes da formação superior, e aproveitada como força criativa, nela. É um traço também dos estudantes brasileiros se sentirem inábeis, desde o ensino básico, com a matemática, geometria e as demais ciências exatas. Nesse sentido, o <i>STEAM</i> me parece a iniciativa mais acertada para que seja possível acabar com o medo instituído em artistas e designers de usar a programação como processo criativo, e a dificuldade que computólogos possuem de usá-la para fins expressivos.</p>
        </div>



        <div id="bookendnav"></div>

        <div id="meta">

            <div id="processing">

                <div style="background-image:url(https://miro.medium.com/fit/c/128/128/1*dyXtX3Lh61-zjtYRzDXihQ.png); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Linguagem e ambiente de programação criada por Casey Rease e Ben Fry, orientados por John Maeda durante seus doutorados no MIT Media Lab, originalmente constituída como uma simplificação da linguagem <a href="javascript:openMeta('java');">Java</a> e destinada para criação de arte, design e computação cirativa.<br>
                <a href="https://www.processing.org" target="_blank">Processing.org</a>

            </div>

            <div id="murielcooper">

                <div style="background-image:url(https://miro.medium.com/max/1000/1*l7tvAIldnRLboTGHDi-rEw.jpeg); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Muriel Cooper<br>
                EUA, 1925 - 1994<br>
                Diretora de design da editora do Massachussets Institute of Technology (MIT Press), fundadora do Visible Language Workshop (VLW) no MIT, e co-fundadora do MIT Media Lab.
            </div>

            <div id="medialab">

                <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1DHsckNNPSnoeYpahFFV1f7VJmxPvt_QiLg&usqp=CAU); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                MIT Media Lab, 1985<br>
                Laboratório de pesquisa do Massachussets Institute of Technology (MIT), abriga inúmeros grupos de pesquisa no campo de design, artes, arquitetura e tecnologia.<br>
                <a href="https://www.media.mit.edu/" target="_blank">Website</a>, <a href="https://www.media.mit.edu/research/?filter=groups" target="_blank">Grupos de pesquisa</a>

            </div>

            <div id="maeda">

                <div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7hHGAIBfUtP6hPK-U9d1kn_hBu5v68Z535gbfRcf6_4yeTM4&s); background-size: cover; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                John Maeda<br>
                EUA, 1966<br>
                Foi professor no Massachussets Institute of Technology (MIT) e posteriormente presidente da Rhode Island School of Design (RISD).<br>

            </div>

            <div id="java">

                <div style="background-image:url(https://img.ibxk.com.br/2016/01/28/28091154377222.jpg?w=1120&h=420&mode=crop&scale=both); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Java é uma linguagem de programação inovadora, criada pela Sun Microsystems na década de 1990, que permitia a execução de um mesmo código para qualquer tipo de computador e/ou sistema operacional através de uma máquina virtual instalada nos computadores. É também uma linguagem orientada à objetos de uso geral, considerada mais simples que o C++.

            </div>

            <div id="futurododesign">
                <div style="background-image:url(https://www.ranoya.com/Assets/coverimages/futuro114.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Iniciativa Futuro do Design<br>
                dDesign, UFPE, 2017<br>
                Projeto desenvolvido pelo Prof. Guilherme Ranoya no bacharelado de design da Universidade Federal de Pernambuco<br>
                <a target="_blank" href="https://www.ranoya.com/public/futuro/index.php<?php if ($_SESSION['theme']) {
                                                                                            echo '?theme=' . $_SESSION['theme'];
                                                                                        } ?>#designgenerativo">Detalhes</a><br>
            </div>



        </div>
        <div id="metacompensate"></div>

        <div id="posicao"></div>
        <div id="posicaocompensate"></div>

</body>

</html>