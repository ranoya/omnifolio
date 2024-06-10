<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require '../interfaces/meta.php';
    ?>
    <title>Pormenores do design de informação nos meios interativos | Ensaios sobre o design de interfaces digitais</title>
    <meta property="og:title" content="Pormenores do design de informação nos meios interativos | Ensaios sobre o design de interfaces digitais">
    <meta name="description" content="Pormenores do design de informação nos meios interativos. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
    <meta property="og:description" content="Pormenores do design de informação nos meios interativos. Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
    <script type='text/javascript' src="https://www.ranoya.com/Assets/JSLibs/AMS/imagepanel.js"></script>
    <link href="https://narrativas.ranoya.com/pointnclick/pointclickstyle.css" rel="stylesheet">
    <script src="https://narrativas.ranoya.com/pointnclick/pointclickparser.js"></script>
</head>

<body>

    <div class="bigwhitesapce"></div>

    <div id="chapter">

        <h1 id="titulocapitulo">Pormenores do design de informação nos meios interativos</h1>

        <div class="corpus">

            <p>Organizar informações em um artefato de forma legível, compreensível, e de maneira que facilite aos receptores a construção de singificação é o campo de estudo do design de informação. Tradicionalmente, ou ao menos originalmente, o design de informação esteve focado nas mídias impressas, como herdeiro daquilo que, antigamente, se denominava apenas como design gráfico ou programação visual.</p>

            <p>Mas nos tempos recentes, não só o suporte audiovisual, como também o multimidiático, passaram a ser objetos do design de informação, seja porque estes artefatos são, de fato, suportes de informação (e precisam ser projetados com uso desse <i>expertise</i>), ou porque estes suportes têm se tornado ubíquos, isto é, onipresentes na vida das pessoas, o que os torna até mais relevantes que a própria mídia impressa como suporte da informação.</p>

            <p>Seja como for, o fato inevitável é que a prática dos designers de informação não pode (e nunca deveria) ter permanecido restrita à mídia impressa. Isso se tornou evidente na atualidade.</p>

            <p>Mas as técnicas tradicionais do design gráfico, sobretudo de planejamento gráfico e visual, herdados de processos de confecção de materiais impressos (que ainda são usados no design de informação), não têm mais completa aderência nestes novos contextos. E ainda não há clareza se os novos processos oriúndos das multimídias se adequam à todas as mídias, ou se cada mídia precisará de técnicas e formas de planejamento específicos.</p>

            <p>Exploraremos aqui, com o intuito de ilustrar as especificidades e os pormenores do contexto digital, um caso real de design de informação sendo repensado para o novo suporte de forma que possa se comportar de forma mais adequada: durante o <a href="https://www.ranoya.com/pt/pesquisa/jornadacompleta.php/#narrativa" target="_blank">biênio 2018-2020, a pesquisa de Estética da Interação</a> se concentrou em estudar artefatos narrativos. Um de seus produtos foi um diagrama com a evolução de um formato específico de artefato interativo, o Point & Click Adventure, constituído por histórias que se desenrolam à partir da interação do usuário. Os aspectos técnico-construtivos deste <a href="#diagramafinal" class="citacao">artefato (diagrama final)</a> são abordados em um <a class="citacao" href="https://www.ranoya.com/books/public/tecnologiascriativas/visualizacaoparametrica.php">texto em contraponto, no livro sobre código criativo</a>.</p>

        </div>

        <svg style="width: 100%; margin-top: -20px; margin-bottom: 60px;" viewBox="0 0 2220 636" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M998.871 14.6304V44.5454H999.871V16.039L1005.53 21.6959C1005.92 22.0864 1006.55 22.0864 1006.94 21.6959C1007.33 21.3054 1007.33 20.6722 1006.94 20.2817L1002.29 15.6248L1391.45 15.6248L1386.79 20.2817C1386.4 20.6722 1386.4 21.3054 1386.79 21.6959C1387.18 22.0864 1387.81 22.0864 1388.2 21.6959L1394.57 15.332C1394.76 15.1367 1394.86 14.8808 1394.86 14.6248V46.7702H1395.86V0H1417.11V14.617V14.6327V44.5454H1418.11V16.0391L1423.76 21.6959C1424.15 22.0864 1424.79 22.0864 1425.18 21.6959C1425.57 21.3054 1425.57 20.6722 1425.18 20.2817L1420.52 15.6248H1462.63L1457.98 20.2817C1457.59 20.6722 1457.59 21.3054 1457.98 21.6959C1458.37 22.0864 1459 22.0864 1459.39 21.6959L1465.76 15.332C1466.15 14.9414 1466.15 14.3083 1465.76 13.9177L1459.39 7.55378C1459 7.16326 1458.37 7.16326 1457.98 7.55378C1457.59 7.9443 1457.59 8.57747 1457.98 8.96799L1462.63 13.6248L1420.52 13.6248L1425.18 8.96799C1425.57 8.57747 1425.57 7.9443 1425.18 7.55378C1424.79 7.16326 1424.15 7.16326 1423.76 7.55378L1418.11 13.2106V0H1466.05V46.7702L1467.05 46.7702V0H1724V37H1757V0H2073V37H2107V0H2238V134.704H2237.97V164.83C2237.97 164.581 2237.87 164.333 2237.68 164.142L2231.32 157.778C2230.93 157.388 2230.29 157.388 2229.9 157.778C2229.51 158.169 2229.51 158.802 2229.9 159.193L2234.56 163.849H2116.65V134.704H2115.65V163.849H2115.06L2108.99 157.778C2108.6 157.388 2107.97 157.388 2107.58 157.778C2107.19 158.169 2107.19 158.802 2107.58 159.193L2112.23 163.849H2070.12L2074.78 159.193C2075.17 158.802 2075.17 158.169 2074.78 157.778C2074.39 157.388 2073.75 157.388 2073.36 157.778L2067.71 163.435V132.479H2066.71V163.849H1785.33L1789.99 159.193C1790.38 158.802 1790.38 158.169 1789.99 157.778C1789.6 157.388 1788.97 157.388 1788.58 157.778L1782.92 163.435V132.479H1781.92V164.842V164.857V194.77H1782.92V166.264L1788.58 171.921C1788.97 172.311 1789.6 172.311 1789.99 171.921C1790.38 171.53 1790.38 170.897 1789.99 170.506L1785.33 165.849H2066.71V194.77H2067.71V166.264L2073.36 171.921C2073.75 172.311 2074.39 172.311 2074.78 171.921C2075.17 171.53 2075.17 170.897 2074.78 170.506L2070.12 165.849H2112.23L2107.58 170.506C2107.19 170.897 2107.19 171.53 2107.58 171.921C2107.97 172.311 2108.6 172.311 2108.99 171.921L2115.06 165.849H2115.65V196.995H2116.65V165.849H2234.56L2229.9 170.506C2229.51 170.897 2229.51 171.53 2229.9 171.921C2230.29 172.311 2230.93 172.311 2231.32 171.921L2237.68 165.557C2237.87 165.366 2237.97 165.118 2237.97 164.868L2237.97 196.995H2238V250.36H2237.98V312.65H2238V377.165H1999.94V636H1655.75L1660.96 630.793C1661.35 630.403 1661.35 629.77 1660.96 629.379C1660.57 628.989 1659.94 628.989 1659.55 629.379L1654.89 634.036V380.579L1659.55 385.236C1659.94 385.627 1660.57 385.627 1660.96 385.236C1661.35 384.846 1661.35 384.212 1660.96 383.822L1655.3 378.165H1686.26V377.165H1623.97V378.165H1652.48L1646.82 383.822C1646.43 384.212 1646.43 384.846 1646.82 385.236C1647.21 385.627 1647.84 385.627 1648.23 385.236L1652.89 380.579V634.036L1648.23 629.379C1647.84 628.989 1647.21 628.989 1646.82 629.379C1646.43 629.77 1646.43 630.403 1646.82 630.793L1652.03 636H692V81C692 72.7157 685.284 66 677 66H220C211.716 66 205 72.7157 205 81V636H149V71.4142L153.657 76.0711C154.048 76.4616 154.681 76.4616 155.071 76.0711C155.462 75.6805 155.462 75.0474 155.071 74.6569L148.707 68.2929C148.317 67.9024 147.684 67.9024 147.293 68.2929L140.929 74.6569C140.539 75.0474 140.539 75.6805 140.929 76.0711C141.32 76.4616 141.953 76.4616 142.343 76.0711L147 71.4142V636H0V411H67V377H0V0H204.669V52.3208H205.669V23.8144L211.326 29.4713C211.716 29.8618 212.349 29.8618 212.74 29.4713C213.13 29.0808 213.13 28.4476 212.74 28.0571L208.083 23.4002L688.454 23.4002L683.797 28.0571C683.407 28.4476 683.407 29.0808 683.797 29.4713C684.188 29.8618 684.821 29.8618 685.212 29.4713L691.576 23.1073C691.966 22.7168 691.966 22.0836 691.576 21.6931L685.212 15.3292C684.821 14.9386 684.188 14.9386 683.797 15.3292C683.407 15.7197 683.407 16.3528 683.797 16.7434L688.454 21.4002L208.083 21.4002L212.74 16.7434C213.13 16.3529 213.13 15.7197 212.74 15.3292C212.349 14.9386 211.716 14.9386 211.326 15.3292L205.669 20.986V0H691.869V54.5456H692.869V0H932.132V14.6193V14.6304V44.5454H933.132V16.039L938.788 21.6959C939.179 22.0864 939.812 22.0864 940.203 21.6959C940.593 21.3054 940.593 20.6722 940.203 20.2817L935.546 15.6248H977.66L973.003 20.2817C972.612 20.6722 972.612 21.3054 973.003 21.6959C973.393 22.0864 974.027 22.0864 974.417 21.6959L980.781 15.332C981.172 14.9414 981.172 14.3083 980.781 13.9177L974.417 7.55378C974.027 7.16326 973.393 7.16326 973.003 7.55378C972.612 7.9443 972.612 8.57747 973.003 8.96799L977.66 13.6248L935.546 13.6248L940.203 8.96799C940.593 8.57747 940.593 7.9443 940.203 7.55378C939.812 7.16326 939.179 7.16326 938.788 7.55378L933.132 13.2106V0H981.074V46.7702L982.074 46.7702V0H998.871V14.6193V14.6304ZM682 636H645V588H249V636H215V81C215 78.2386 217.239 76 220 76H677C679.761 76 682 78.2386 682 81V636ZM1394.86 14.6248C1394.86 14.3689 1394.76 14.113 1394.57 13.9177L1388.2 7.55378C1387.81 7.16325 1387.18 7.16325 1386.79 7.55378C1386.4 7.9443 1386.4 8.57747 1386.79 8.96799L1391.45 13.6248L1002.28 13.6248L1006.94 8.96799C1007.33 8.57747 1007.33 7.9443 1006.94 7.55378C1006.55 7.16326 1005.92 7.16326 1005.53 7.55378L999.871 13.2106V0H1394.86V14.6248ZM1782.92 279.09V248.135H1781.92V280.497V280.513V310.425H1782.92V281.919L1788.58 287.576C1788.97 287.966 1789.6 287.966 1789.99 287.576C1790.38 287.185 1790.38 286.552 1789.99 286.162L1785.33 281.505H1916.43L1911.78 286.162C1911.39 286.552 1911.39 287.185 1911.78 287.576C1912.17 287.966 1912.8 287.966 1913.19 287.576L1919.56 281.212C1919.75 281.021 1919.84 280.772 1919.85 280.522V312.65H1920.85V250.36H1919.85V280.487C1919.84 280.237 1919.75 279.988 1919.56 279.798L1913.19 273.434C1912.8 273.043 1912.17 273.043 1911.78 273.434C1911.39 273.824 1911.39 274.457 1911.78 274.848L1916.43 279.505H1785.33L1789.99 274.848C1790.38 274.457 1790.38 273.824 1789.99 273.434C1789.6 273.043 1788.97 273.043 1788.58 273.434L1782.92 279.09ZM2000.94 248.135V279.09L2006.59 273.434C2006.98 273.043 2007.62 273.043 2008.01 273.434C2008.4 273.824 2008.4 274.457 2008.01 274.848L2003.35 279.505H2234.56L2229.9 274.848C2229.51 274.457 2229.51 273.824 2229.9 273.434C2230.29 273.043 2230.93 273.043 2231.32 273.434L2237.68 279.798C2238.07 280.188 2238.07 280.821 2237.68 281.212L2231.32 287.576C2230.93 287.966 2230.29 287.966 2229.9 287.576C2229.51 287.185 2229.51 286.552 2229.9 286.162L2234.56 281.505H2003.35L2008.01 286.162C2008.4 286.552 2008.4 287.185 2008.01 287.576C2007.62 287.966 2006.98 287.966 2006.59 287.576L2000.94 281.919V310.425H1999.94V280.513V280.497V248.135H2000.94ZM1942.08 287.576L1936.42 281.919V310.425H1935.42V280.513V280.497V248.135H1936.42V279.09L1942.08 273.434C1942.47 273.043 1943.1 273.043 1943.49 273.434C1943.88 273.824 1943.88 274.457 1943.49 274.848L1938.84 279.505H1980.95L1976.29 274.848C1975.9 274.457 1975.9 273.824 1976.29 273.434C1976.68 273.043 1977.32 273.043 1977.71 273.434L1984.07 279.798C1984.46 280.188 1984.46 280.821 1984.07 281.212L1977.71 287.576C1977.32 287.966 1976.68 287.966 1976.29 287.576C1975.9 287.185 1975.9 286.552 1976.29 286.162L1980.95 281.505H1938.84L1943.49 286.162C1943.88 286.552 1943.88 287.185 1943.49 287.576C1943.1 287.966 1942.47 287.966 1942.08 287.576ZM1984.36 250.36V312.65H1985.36V250.36H1984.36ZM1716.18 163.435V132.479H1715.18V164.842V164.857V194.77H1716.18V166.264L1721.84 171.921C1722.23 172.311 1722.86 172.311 1723.25 171.921C1723.64 171.53 1723.64 170.897 1723.25 170.506L1718.6 165.849H1760.71L1756.05 170.506C1755.66 170.897 1755.66 171.53 1756.05 171.921C1756.44 172.311 1757.08 172.311 1757.47 171.921L1763.83 165.557C1764.22 165.166 1764.22 164.533 1763.83 164.142L1757.47 157.778C1757.08 157.388 1756.44 157.388 1756.05 157.778C1755.66 158.169 1755.66 158.802 1756.05 159.193L1760.71 163.849H1718.6L1723.25 159.193C1723.64 158.802 1723.64 158.169 1723.25 157.778C1722.86 157.388 1722.23 157.388 1721.84 157.778L1716.18 163.435ZM1764.12 196.995V134.704H1765.12V196.995H1764.12ZM981.073 55.5894H950.118L955.775 61.2462C956.165 61.6367 956.165 62.2699 955.775 62.6604C955.384 63.0509 954.751 63.0509 954.36 62.6604L949.703 58.0036V95.6684L954.36 91.0115C954.751 90.621 955.384 90.621 955.775 91.0115C956.165 91.402 956.165 92.0352 955.775 92.4257L949.411 98.7897C949.02 99.1802 948.387 99.1802 947.996 98.7897L941.632 92.4257C941.242 92.0352 941.242 91.402 941.632 91.0115C942.023 90.621 942.656 90.621 943.047 91.0115L947.703 95.6684V58.0036L943.047 62.6604C942.656 63.0509 942.023 63.0509 941.632 62.6604C941.242 62.2699 941.242 61.6367 941.632 61.2462L947.289 55.5894H918.783V54.5894H981.073V55.5894ZM978.849 99.0826H916.558V100.083H978.849V99.0826ZM952.343 115.655H983.299V114.655H921.008V115.655H949.514L943.857 121.312C943.467 121.703 943.467 122.336 943.857 122.726C944.248 123.117 944.881 123.117 945.272 122.726L949.929 118.069V291.439L945.272 286.782C944.881 286.391 944.248 286.391 943.857 286.782C943.467 287.172 943.467 287.805 943.857 288.196L950.221 294.56C950.612 294.95 951.245 294.95 951.636 294.56L958 288.196C958.39 287.805 958.39 287.172 958 286.782C957.609 286.391 956.976 286.391 956.585 286.782L951.929 291.439V118.069L956.585 122.726C956.976 123.117 957.609 123.117 958 122.726C958.39 122.336 958.39 121.703 958 121.312L952.343 115.655ZM918.783 294.853H981.074V295.853H918.783V294.853ZM958 319.307L952.343 313.65H983.299V312.65H921.008V313.65H949.514L943.857 319.307C943.467 319.697 943.467 320.33 943.857 320.721C944.248 321.112 944.881 321.112 945.272 320.721L949.929 316.064V358.178L945.272 353.521C944.881 353.131 944.248 353.131 943.857 353.521C943.467 353.912 943.467 354.545 943.857 354.936L950.221 361.3C950.612 361.69 951.245 361.69 951.636 361.3L958 354.936C958.39 354.545 958.39 353.912 958 353.521C957.609 353.131 956.976 353.131 956.585 353.521L951.929 358.178V316.064L956.585 320.721C956.976 321.112 957.609 321.112 958 320.721C958.39 320.33 958.39 319.697 958 319.307ZM981.074 361.592H918.783V362.592H981.074V361.592ZM1735.39 318.099H1766.35V317.099H1704.06V318.099H1732.56L1726.91 323.756C1726.52 324.147 1726.52 324.78 1726.91 325.17C1727.3 325.561 1727.93 325.561 1728.32 325.17L1732.98 320.513V358.178L1728.32 353.521C1727.93 353.131 1727.3 353.131 1726.91 353.521C1726.52 353.912 1726.52 354.545 1726.91 354.935L1733.27 361.299C1733.66 361.69 1734.29 361.69 1734.69 361.299L1741.05 354.935C1741.44 354.545 1741.44 353.912 1741.05 353.521C1740.66 353.131 1740.03 353.131 1739.63 353.521L1734.98 358.178V320.513L1739.63 325.17C1740.03 325.561 1740.66 325.561 1741.05 325.17C1741.44 324.78 1741.44 324.147 1741.05 323.756L1735.39 318.099ZM1764.12 361.592V362.592H1701.83V361.592H1764.12ZM1741.05 383.822L1735.39 378.165H1766.35V377.165H1704.06V378.165H1732.56L1726.91 383.822C1726.52 384.212 1726.52 384.846 1726.91 385.236C1727.3 385.627 1727.93 385.627 1728.32 385.236L1732.98 380.579V489.433L1728.32 484.776C1727.93 484.386 1727.3 484.386 1726.91 484.776C1726.52 485.167 1726.52 485.8 1726.91 486.191L1733.27 492.555C1733.66 492.945 1734.29 492.945 1734.69 492.555L1741.05 486.191C1741.44 485.8 1741.44 485.167 1741.05 484.776C1740.66 484.386 1740.03 484.386 1739.63 484.776L1734.98 489.433V380.579L1739.63 385.236C1740.03 385.627 1740.66 385.627 1741.05 385.236C1741.44 384.846 1741.44 384.212 1741.05 383.822ZM1764.12 493.847V492.847H1701.83V493.847H1764.12ZM1741.05 515.077L1735.39 509.42H1766.35V508.42H1733.98H1733.97H1704.06V509.42H1732.56L1726.91 515.077C1726.52 515.467 1726.52 516.1 1726.91 516.491C1727.3 516.882 1727.93 516.882 1728.32 516.491L1732.98 511.834V553.948L1728.32 549.291C1727.93 548.901 1727.3 548.901 1726.91 549.291C1726.52 549.682 1726.52 550.315 1726.91 550.706L1733.27 557.07C1733.46 557.261 1733.71 557.359 1733.96 557.362H1701.83V558.362H1764.12V557.362H1733.99C1734.24 557.359 1734.49 557.261 1734.69 557.07L1741.05 550.706C1741.44 550.315 1741.44 549.682 1741.05 549.291C1740.66 548.901 1740.03 548.901 1739.63 549.291L1734.98 553.948V511.834L1739.63 516.491C1740.03 516.882 1740.66 516.882 1741.05 516.491C1741.44 516.1 1741.44 515.467 1741.05 515.077ZM950.118 377.041L955.775 382.698C956.165 383.088 956.165 383.722 955.775 384.112C955.384 384.503 954.751 384.503 954.36 384.112L949.703 379.455V417.12L954.36 412.463C954.751 412.073 955.384 412.073 955.775 412.463C956.165 412.854 956.165 413.487 955.775 413.877L949.411 420.241C949.02 420.632 948.387 420.632 947.996 420.241L941.632 413.877C941.242 413.487 941.242 412.854 941.632 412.463C942.023 412.073 942.656 412.073 943.047 412.463L947.703 417.12V379.455L943.047 384.112C942.656 384.503 942.023 384.503 941.632 384.112C941.242 383.722 941.242 383.088 941.632 382.698L947.289 377.041H918.783V376.041H981.073V377.041H950.118ZM916.558 420.534H978.849V421.534H916.558V420.534ZM983.299 437.107H952.343L958 442.764C958.39 443.154 958.39 443.787 958 444.178C957.609 444.569 956.976 444.569 956.585 444.178L951.929 439.521V539.476L956.585 534.82C956.976 534.429 957.609 534.429 958 534.82C958.39 535.21 958.39 535.843 958 536.234L951.636 542.598C951.445 542.789 951.196 542.886 950.945 542.89H981.074V543.89H918.783V542.89H950.912C950.662 542.886 950.412 542.789 950.221 542.598L943.857 536.234C943.467 535.843 943.467 535.21 943.857 534.82C944.248 534.429 944.881 534.429 945.272 534.82L949.929 539.476V439.521L945.272 444.178C944.881 444.569 944.248 444.569 943.857 444.178C943.467 443.787 943.467 443.154 943.857 442.764L949.514 437.107H921.008V436.107H983.299V437.107ZM952.343 561.688L958 567.345C958.39 567.736 958.39 568.369 958 568.76C957.609 569.15 956.976 569.15 956.585 568.76L951.929 564.103V606.217L956.585 601.56C956.976 601.169 957.609 601.169 958 601.56C958.39 601.95 958.39 602.584 958 602.974L951.636 609.338C951.442 609.531 951.19 609.629 950.936 609.631H981.074V610.631H918.783V609.631H950.921C950.667 609.629 950.415 609.531 950.221 609.338L943.857 602.974C943.467 602.584 943.467 601.95 943.857 601.56C944.248 601.169 944.881 601.169 945.272 601.56L949.929 606.217V564.103L945.272 568.76C944.881 569.15 944.248 569.15 943.857 568.76C943.467 568.369 943.467 567.736 943.857 567.345L949.514 561.688H921.008V560.688H950.923H950.934H983.299V561.688H952.343ZM1323 33H1256V66H1323V33ZM80 377H118V411H80V377ZM1336 33H1374V66H1336V33ZM2022 99H1956V132H2022V99ZM2035 99H2073V50H2107V117H2073V132H2035V99ZM1065 59H999V92H1065V59ZM1079 59H1116V92H1079V59ZM1075 383H1008V417H1075V383ZM1088 383H1126V417H1088V383ZM1068 568H1001V601H1068V568ZM1081 568H1119V601H1081V568ZM855 186H787V219H855V186ZM868 186H906V219H868V186ZM1068 319H1001V352H1068V319ZM1081 319H1119V352H1081V319ZM1568 488H1501V521H1568V488ZM1582 488H1619V521H1582V488ZM1856 515H1789V549H1856V515ZM1869 515H1907V549H1869V515ZM1568 418H1501V451H1568V418ZM1582 418H1619V451H1582V418ZM1864 204H1797V237H1864V204ZM1877 204H1915V237H1877V204ZM2129 204H2062V237H2129V204ZM2142 204H2180V237H2142V204ZM1424 112V179H1457V112H1424ZM1424 99V61H1457V99H1424ZM1724 50V117H1757V50H1724ZM1945 393V459H1978V393H1945ZM1945 380V342H1978V380H1945ZM645 115H249V295H645V115ZM251 312H390V428H251V312ZM645 312H406V572H645V312ZM2108.94 392.738H2131.19V394.738H2108.94V392.738ZM2122.29 397.187V417.209H2120.29V397.187H2122.29ZM2095.6 426.108H2144.54V475.05H2095.6V426.108ZM2175.68 452.803H2155.66V450.803H2175.68L2175.68 439.456H2177.68V461.702H2175.68L2175.68 452.803ZM2066.68 452.803H2086.7V450.803H2066.68V452.803ZM2120.29 506.195H2108.94V508.195H2131.19V506.195H2122.29V486.173H2120.29V506.195ZM2062.23 461.702V439.456H2064.23V461.702H2062.23ZM1920.33 377.165H1781.92V493.194H1920.33V377.165ZM1868.68 392.738H1846.44V394.738H1868.68V392.738ZM1859.78 397.187V417.209H1857.78V397.187H1859.78ZM1882.03 426.108H1833.09V475.05H1882.03V426.108ZM1804.17 452.803H1824.19V450.803H1804.17V452.803ZM1799.72 461.702V439.456H1801.72V461.702H1799.72ZM998.871 438.332H1394.72V543.31H998.871V438.332ZM1172.39 449.455H1221.34V498.398H1172.39V449.455ZM1252.48 476.151H1232.46V474.151H1252.48V462.804H1254.48V485.05H1252.48V476.151ZM1143.47 476.151H1163.49V474.151H1143.47V476.151ZM1199.09 529.543H1207.99V531.543H1185.74V529.543H1197.09V509.521H1199.09V529.543ZM1139.02 485.05V462.804H1141.02V485.05H1139.02ZM1394.72 114.655H998.871V294.224H1394.72V114.655ZM1185.74 154.699H1207.99V156.699H1185.74V154.699ZM1199.09 179.17V159.148H1197.09V179.17H1199.09ZM1221.34 188.069H1172.39V237.011H1221.34V188.069ZM1252.48 212.765V201.417H1254.48V223.663H1252.48V214.765H1232.46V212.765H1252.48ZM1163.49 214.765H1143.47V212.765H1163.49V214.765ZM1139.02 223.663V201.417H1141.02V223.663H1139.02Z" class="illFillIt" />
        </svg>

        <div class="halfblock eblock">

            <div style="width: 100%; height: 400px; overflow: hidden; margin: 0; margin-bottom: 30px; padding: 0;">
                <iframe src="https://www.slides.com/ranoya/componenetesnarrativoswhite/embed" style="width: 100%; height: 438px; background-color: transparent;" scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
            </div>
            <span class="legenda" style="margin-top: -15px;">Diagrama original construído na pesquisa</span><br>

            <p>O trabalho de pesquisa produziu o diagrama acima, uma linha do tempo com uma série de artefatos e suas ramificações taxonômicas.</p>

        </div>

        <div class="halfblock dblock">

            <p>A construção de diagramas é uma das atividades clássicas do design de informação, e este em específico, apesar de já se encontrar em um formato digital/interativo, foi elaborado exatamente como qualquer outro diagrama através de técnicas de planejamento visual formuladas para os meios impressos, que consideram os problemas e circunstâncias próprias deste meio, não os do contexto digital.</p>

            <p>A impressão imedata que qualquer pessoa naturalmente terá, ao observá-lo aqui, é sua ilegibilidade: elementos textuais com corpos muito pequenos, elementos gráficos muito finos em cores com pouco contraste que dificultam a leitura das informações, e, claro, um aproveitamento muito ruim da tela, claustrofóbico e apertado (sem respiro ou espaço negativo), com as informações dividida em dois "slides" que dificultam uma visão ampla da informação e exigem a interação com os elementos para que ela possa ser integralmente obtida.</p>

            <p>Mas estes critérios, ainda que observações verdadeiras, são inadequados. Eles tentam enquadrar a leitura de um artefato digital nos parâmetros que (ainda) usamos para artefatos impressos.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>O diagrama em questão continua abarrotado de problemas e inadequações para os meios interativos, mas enquanto interpretarmos e enquadrarmos seus problemas nos critérios pertinentes à outro suporte, continuaremos errando no exercício de sua configuração.</p>

            <p>O principal problema deste artefato é seu <b>comportamento</b> / <b>performance</b>, critério que não pertence a natureza estática das mídias impressas. Ele foi projetado, como qualquer impresso, com a concepção de um campo (espaço) fixo, onde não existe a necessidade de que responda dinamicamente às mudanças do suporte que, obrigatoriamente, ocorrem no contexto digital.</p>

            <p>O segundo problema é a inabilidade em lidar com a <b>impermanência</b>. Ao contrário de objetos impressos, que são definitivos e imutáveis após serem confeccionados, os artefatos digitais se alteram com o tempo; são atualizáveis. Este, especificamente, precisará incorporar novos produtos que permanecem sendo criados, e poderiam estar ali classificados. Mas a técnica construtiva que permite aos objetos digitais serem atualizados de maneira simples e conveniente, modifica completamente a forma como sua expressão gráfica pode ser configurada, já que não sabemos quantos, quais, ou mesmo as características dos objetos que serão ali exibidos.</p>

            <p>O contexto digital opera com a <b>indeterminação</b> de forma ostensiva. O projeto não é gráfico, mas algorítmico: projetamos regras, e não formas. Todo projetista opera sistematizações ao projetar, mas as ferramentas e instrumentos visuais, principalmente os computacionais, que nos permitem uma representação muito próxima e realista do produto final à ser confeccionado, nos habituaram a pensá-las de forma concreta (visualmente tangível), e menos abstrata. Nesse novo contexto, não só a sistematização abstrata precisa ser recuperada, como densamente detalhada. As formas (concretas/materiais) são incidentais e decorrentes de boas regras. Robin Hunickle, Marc LeBlanc e Robert Zubek elaboraram um princípio em seu artigo <i><a href="https://users.cs.northwestern.edu/~hunicke/MDA.pdf" class="citacao">MDA: A Formal Approach to Game Design and Game Research</a></i> que permanece válido para qualquer mídia digital: projetamos regras (mecânicas), que criam uma amplitude expressiva dinâmica, da qual resultam a materialidade midiática tangível (forma/estética). O projetista cria o artefato nesta ordem, enquanto o usuário lhe experimenta no sentido inverso.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>Considerem como seria impraticável a construção de uma infografia aqui, em decorrência do princípio da <b>indeterminação</b>: poderiamos apresentar o contexto da evolução tecnológica em paralelo à transformação dos artefatos, com referências aos equipamentos e limitações tecnológicas de cada época (videogames, controles, computação gráfica) como uma construção narrativa da evolução destes artefatos; isto poderia ser feito com uma imagem de fundo elaborada pela bricolagem orgânica destes objetos, como apoio na construção de significação para os artefatos apresentados em primeiro plano. Contudo, no momento que o usuário filtrasse a lista de artefatos (selecionando apenas um tipo de artefato ou uma características específica), todo o acoplamento entre a imagem de fundo e o conteúdo em primeiro plano iria se desfazer. A inabilidade de se saber previamente o que aparecerá como conteúdo impossibilita a construção de uma narrativa. Uma narrativa formulada com elementos construídos em tempo real, ou uma narrativa com conteúdo indeterminado, não são impossíveis. Mas são extremamente complexas de serem feitas.</p>

            <p>É natural que os questionamentos de um designer gráfico treinado sejam: e a hierarquia de informação? E o trajeto da leitura percorrida pelho olhar (<i>scanning</i>)? E a legibilidade e dimensionamento do texto? E a narrativa? E as relações implícitas pela proximidade/afastamento dos elementos?</p>

            <p>Enfim... questões muito pertinentes ao design de informação no meio impresso, mas que ignoram completamente a dimensão metamórfica da informação nos meios interativos; novamente, aplicamos critérios apropriados a um artefato estático, final e definitivo, para pensar um artefato que não se comporta desta forma. As informações presentes em um artefato interativo podem ser reconfiguradas conforme a necessidade. A informação pode ser convenientemente filtrada ou re-estruturada; informações podem ser dinamicamente suprimidas ou apresentadas; o elemento estruturante (no exemplo deste diagrama, o tempo), pode ser substituído (por, por exemplo, a tipologia), criando uma visualização completamente diferente da mesma informação; a hipermediação (links e navegação interna do documento) podem substituir a marcação pelo peso visual...</p>

            <p>O esforço aqui é demonstrar que existem outros critérios, assim como outras leituras e outras interações com o conteúdo no digital. Claro, ainda é possível adotar os mesmos critérios e tentar mimetizar o comportamento da mídia impressa no digital: os documentos PDF são um exemplo disso. Mas esta é uma condição limitante, assim como seria tratar um computador meramente como uma calculadora, ou usar um <i>smartphone</i> exclusivamente para ligações de voz.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>O corpo editorial da publicação científica <a href="javascript:openMeta('distill');">Distill</a>, dedicada à dar visibilidade aos resultados de pesquisa sobre <i>Machine Learning</i>, cujos artigos são ricos em visualizações de dados interativas, publicou em 2018 a seguinte reflexão: <a href="https://distill.pub/2018/editorial-update/#successes" target="_blank" class="citacao">É tentador pensar nas explicações como uma camada de polimento sobre as ideias. Acreditamos que as melhores explicações muitas vezes são algo muito mais profundo: são interfaces para ideias, uma forma de pensar e interagir com um conceito. Com base nisso, vimos vários artigos do Distill criarem visualizações que reificam essas formas de pensar e interagir com elas.</a>
            </p>

            <p>Os editores exemplificam sua reflexão com <a target="_blank" href="https://distill.pub/2017/momentum/">um dos artigos publicados na revista, de autoria de Gabriel Goh</a>, discutindo inércia e momentum, recheado de fórmulas matemáticas e diagramas interativos, estimulando a simulação e a experimentação como uma forma de construção da significação; ou em termos mais familiares ao design, o uso e o <i>affordance</i> como produtores de sentido.</p>

            <p>Este esforço na construção de experimentos e simulação como forma de explicar conceitos e ideias é comum em qualquer campo científico, mas raro nos periódicos e nos repositórios de informação científica, ainda presos à uma argumentação verbal e aos suportes impressos. No vídeo abaixo, um experimento torna tangível um conceito tão abstrato quanto a natureza da gravidade e de como a massa de um objeto astronômico distorce o espaço e a cria:</p>

            <p><iframe src="https://www.youtube.com/embed/MTY1Kje0yLg" frameborder=0 style="width: 100%; height: 380px;"></iframe>
                <span class="legenda">O professor Dan Burns explica o que é a gravidade com uma visualização física para alunos de uma escola de segundo grau em Los Gatos, nos EUA.</span>
            </p>

            <p>A construção de uma visualização interativa tem um propósito semelhante, mas sobre artefatos de informação.</p>

            <!--
	It’s tempting to think of explanations as a layer of polish on top of ideas. We believe that the best explanations are often something much deeper: they are interfaces to ideas, a way of thinking and interacting with a concept. Building on this, we’ve seen several Distill articles create visualizations that reify those ways of thinking and interacting with ideas.
-->

        </div>

        <div class="symbol"></div>

        <h2>Processo projetual</h2>

        <div class="corpus">

            <p>A primeira etapa no design de informação para os meios comptuacionais é taxonômica: a construção de critérios e classificações, e o detalhamento criterioso de cada caracteristica presente na informação. Isso permitirá flexibilidade no relacionamento de dados, criando, inclusive, formas de enxergar a informação que o projetista sequer imagina.</p>

            <p>É de fundamental importância, ao se projetar com as mídias interativas, entender o princípio de que os dados/informação, e sua forma de exibição, são coisas separadas. Ao se usar uma ferramenta gráfica para construção de um documento impresso, fundimos a informação e sua forma em uma única coisa - <a href="documentos.php">um documento</a> - do qual não podem ser dissociadas ou acessadas independentemente. Acontece, contudo, que a computação só é utilizada em todo o seu potencial quando evitamos esse engessamento e provemos liberdade ao conteúdo. Este princípio é baseado em um conceito que repito inúmeras vezes nessa obra: <a href="javascript:openMeta('ranoya2004');" class="citacao">"A desmaterialização é uma operação na qual uma coisa é destituída de seu meio, sendo considerada apenas a sua essência como sendo a coisa, e tomado seu invólucro descartável. O jornal por exemplo, com a internet sofreu a desmaterialização; Ver o jornal hoje significa ler suas notícias em qualquer meio que seja (no próprio jornal, na tela de um computador, no celular, ou impressas em uma folha a parte). O jornal foi reduzido a sua essência, e seu meio tornou-se descartável. [...] O meio foi substituído pela noção de interface. Ela é responsável apenas por materializar a coisa de uma maneira conveniente em um determinado momento - é portanto perecível, sujeita a sua própria obsolescência, e desmembrada da coisa em si. A interface pode ser modificada conforme a conveniência para que não mate a coisa em seu próprio envelhecimento: é a maneira que produzimos para tornar a essência eterna - descolando-a da casca perecível. O livro envelhece, mas não seu texto"</a>.</p>

            <p>Peço desculpas se pareço repetitivo, mas este é um aspecto crítico das mídias computacionais que continua sendo ignorado, mesmo havendo um intervalo de (no mínimo) 16 anos entre o momento que publiquei o referido artigo e este texto presente. Também, é necessário considerar, esta obra não foi construída para ser lida de forma linear, não havendo garantias que seu leitor já tenha se deparado com o trecho supracitado anteriormente (mas se continuar sua leitura, certamente irá...).</p>

        </div>

        <div class="symbol"></div>

        <div style="display:inline-block">

            <p><!--<img src="https://www.ranoya.com/Assets/pointclickgames/AMS-PointnClickAdv.png" style="width: 100%;">-->
                <!--<iframe style="width: 100%; height: 400px;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRr6hkLHuuRvyDxtrbvyyJpPX8Mp_5KgzzoeIMgJOc5nkzHxdB5Y-w_zCbaX7Kn8lT-r7Cfpyv_V93O/pubhtml?gid=1827833136&single=true&chrome=false" frameborder=0></iframe>-->

                <script src="https://www.ranoya.com/Assets/JSLibs/AMS/maketable.js"></script>
            <h1 class="pnclistatitulo">Point & Click<br>Adventures</h1>

            <div class="whitespace"></div>

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

            <div id="listapointandclick"></div>

            <script>
                url = "https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv";
                maketable(url, "listapointandclick");
            </script>



            <div id="todososartefatos" style="width: 100%; clear: both; display: inline-block;"></div>

            <span class="legenda">Base de dados dos artefatos na ferramenta <a href="https://www.ranoya.com/pt/garagem/#Desuso">AMS</a></span>
            </p>


        </div>

        <script>
            imagepanel("https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv", "todososartefatos");
        </script>


        <div class="halfblock eblock">
            <p>Ao contrário de se empregar um esforço para se delinear um projeto gráfico definitivo, o caminho mais inteligente em relação às mídias computacionais é a construção de pequenos experimentos rápidos buscando encontrar um comportamento mais adequado às necessidades do projeto. Isto é feito, normalmente, através de <i>wireframes</i>, protótipos, e projetos versionados que vão sendo aperfeiçoados progressivamente.</p>
        </div>

        <div class="halfblock dblock">
            <p>Os <i>wireframes</i> acabaram tecnicamente engolidos por ferramentas sofisticadas, capazes de construir protótipos. Protótipos garantem muita fidelidade ao resultado final, mas é importante observar uma questão: estes experimentos não são construidos para definir ou refinar a forma da informação! Eles são objetos descartáveis, construídos apenas para testar ideias. E, como objetos descartáveis, não é recomendável que se gaste muito tempo neles. <i>Wireframes</i>, ao contrário de protótipos sofisticados, podem ser feitos rapidamente.</p>
        </div>

        <div style="display: inline-block;">
            <div class="halfblock eblock">
                <p>O primeiro esboço reproduziu um pouco da organização original do material, como uma árvore genealógica. É um formato interessante pela <a href="./familiaridade.php">familiaridade</a> que proporciona, mas com problemas consideráveis de <b>comportamento</b>: cada ramificação, sua quantidade é <b>indeterminada</b>, amplia o espaço horizontal necessário, produzindo um diagrama maior do que o espaço de tela que é desconfortável para o uso (mais especificamente o <i>scroll</i> em ambas as direções do plano).</p>

                <p>O <a target="_blank" href="https://narrativas.ranoya.com/pointnclick2/#tree">produto final</a> acabou incorporando uma estrutura de árvore contendo apenas uma síntese dos principais nós e ramificações das tipologias, aproveitando este conceito como um pequeno componente na narrativa editorial.</p>
            </div>

            <div class=" halfblock dblock">
                <svg style="width: 100%;" viewBox="0 0 822 428" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="7.5" y="7.5" width="807" height="413" class="illMultiLinetype" stroke-width="15" />
                    <line x1="12" y1="107.36" x2="810" y2="107.36" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="201.44" x2="810" y2="201.44" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="295.52" x2="810" y2="295.52" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="389.6" x2="810" y2="389.6" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <rect x="482" y="23.04" width="72" height="69.12" class="illFillIt" />
                    <rect x="329" y="120" width="72" height="69.12" class="illFillIt" />
                    <rect x="601" y="120" width="72" height="69.12" class="illFillIt" />
                    <rect x="717" y="120" width="72" height="69.12" class="illFillIt" />
                    <rect x="217" y="215.04" width="72" height="69.12" class="illFillIt" />
                    <rect x="411" y="215.04" width="72" height="69.12" class="illFillIt" />
                    <rect x="411" y="309.12" width="72" height="69.12" class="illFillIt" />
                    <rect x="289" y="309.12" width="72" height="69.12" class="illFillIt" />
                    <rect x="145" y="309.12" width="72" height="69.12" class="illFillIt" />
                    <rect x="291" y="403" width="72" height="15" class="illFillIt" />
                    <rect x="411" y="403" width="72" height="25" class="illFillIt" />
                    <rect x="601" y="215.04" width="72" height="69.12" class="illFillIt" />
                    <rect x="601" y="309.12" width="72" height="69.12" class="illFillIt" />
                    <rect x="12" y="53.76" width="56" height="15.36" class="illFillIt" />
                    <rect x="205" y="120" width="110" height="15.36" class="illFillIt" />
                    <rect x="356" y="23.04" width="110" height="15.36" class="illFillIt" />
                    <rect x="477" y="120" width="110" height="15.36" class="illFillIt" />
                    <rect x="12" y="146.88" width="56" height="15.36" class="illFillIt" />
                    <rect x="12" y="240" width="56" height="15.36" class="illFillIt" />
                    <rect x="12" y="336" width="56" height="15.36" class="illFillIt" />
                </svg>
                <span class="legenda"><i>Wireframe em árvore.</i></span>
            </div>
        </div>


        <div style="display: inline-block;">
            <div class="halfblock eblock">
                <a name='segundoexperimento'></a>
                <p><a href='#timeline2022' class="citacao">O segundo experimento foi em formato de trilhas ao longo de uma linha do tempo</a>, incorporando que seria inevitável que a dimensão do diagrama extrapolasse o tamanho da tela, e usando isso como um <b>comportamento</b> da interação com ele. Esta ideia só funcionaria adequadamente se a dimensão do outro eixo (vertical) fosse limitada ao tamanho da tela (obrigando os elementos do diagrama serem redimensionados em função da dimensão vertical do <i>viewport</i>). Esta seria uma regra fundamental, caso fosse esse o modelo adotado.</p>

                <p>Mas há outro problema, ainda mais impeditivo, neste formato: a visualização à partir de dispositivos mobile ficaria muito desconfortável e esquisita nestas condições, uma vez que as dimensões horizontais no mobile são muito reduzidas.</p>

                <p>Tanto na primeira versão editorial (<a href="#timeline2022">contra-prova</a>), quanto na segunda versão (<a target="_blank" href="https://narrativas.ranoya.com/pointnclick2/#tree">produto final</a>) este modelo acabou sendo adotado. A hipótese de que esta forma de visualização só funcionaria se limitada ao tamanho da tela não se provou totalmente verdadeira: o componente acabou sendo modulado para apresentar as informações organizadas a partir de diversas categorias (gênero narrativo, mecanismo, linguagem, etc.), podendo extrapolar a dimensão da tela nos dois eixos, ou ser confinado a um espaço menor, sendo deslocado através de <i>scroll</i> nos dois eixos. A questão da visualização em dispositivos mobile, de fato, foi comprovado: visualizações do tipo "linha do tempo" são realmente difíceis para estes dispositivos, primeiro por que funcionam semanticamente melhores quando dispostas horizontalmente, e depois por que mesmo a disposição vertical também não funciona bem para os dispositivos mobile.</p>
            </div>

            <div class="halfblock dblock">
                <svg style="width: 100%;" viewBox="0 0 822 428" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="208" y="115" width="53" height="51" class="illFillIt" />
                    <rect x="301" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="301" y="271" width="53" height="51" class="illFillIt" />
                    <rect x="374" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="447" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="374" y="271" width="53" height="51" class="illFillIt" />
                    <rect x="447" y="271" width="53" height="51" class="illFillIt" />
                    <rect x="447" y="353" width="53" height="51" class="illFillIt" />
                    <rect x="516" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="516" y="353" width="53" height="51" class="illFillIt" />
                    <rect x="582" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="651" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="582" y="353" width="53" height="51" class="illFillIt" />
                    <rect x="651" y="353" width="53" height="51" class="illFillIt" />
                    <rect x="720" y="193" width="53" height="51" class="illFillIt" />
                    <rect x="720" y="353" width="53" height="51" class="illFillIt" />
                    <rect x="790" y="193" width="32" height="51" class="illFillIt" />
                    <rect x="790" y="353" width="32" height="51" class="illFillIt" />
                    <line x1="12" y1="101" x2="810" y2="101" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="179" x2="810" y2="179" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="339" x2="810" y2="339" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="12" y1="258" x2="810" y2="258" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <rect x="58" y="132" width="110" height="15.36" class="illFillIt" />
                    <rect x="58" y="211" width="110" height="15.36" class="illFillIt" />
                    <rect x="58" y="293" width="110" height="15.36" class="illFillIt" />
                    <rect x="58" y="371" width="110" height="15.36" class="illFillIt" />
                    <rect x="58" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="180" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="302" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="424" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="546" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="668" y="50" width="56" height="15.36" class="illFillIt" />
                    <rect x="790" y="50" width="32" height="15" class="illFillIt" />
                    <path d="M7.5 7.5H814.5V420.5H7.5V7.5Z" class="illMultiLinetype" stroke-width="15" />
                    <line x1="60.5" y1="8" x2="60.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="182.5" y1="8" x2="182.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="304.5" y1="8" x2="304.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="426.5" y1="8" x2="426.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="548.5" y1="8" x2="548.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="670.5" y1="8" x2="670.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="122.5" y1="8" x2="122.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="244.5" y1="8" x2="244.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="366.5" y1="8" x2="366.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="488.5" y1="8" x2="488.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="610.5" y1="8" x2="610.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="732.5" y1="8" x2="732.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                    <line x1="152.5" y1="8" x2="152.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="274.5" y1="8" x2="274.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="396.5" y1="8" x2="396.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="518.5" y1="8" x2="518.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="640.5" y1="8" x2="640.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="762.5" y1="8" x2="762.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="91.5" y1="8" x2="91.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="213.5" y1="8" x2="213.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="335.5" y1="8" x2="335.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="457.5" y1="8" x2="457.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="579.5" y1="8" x2="579.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="701.5" y1="8" x2="701.5" y2="30" class="illMultiLinetype" stroke-width="5" />
                    <line x1="792.5" y1="8" x2="792.5" y2="40" class="illMultiLinetype" stroke-width="5" />
                </svg>
                <span class="legenda"><i>Wireframe em trilha.</i></span>
            </div>
        </div>


        <div style="display: inline-block">

            <div class="halfblock eblock">
                <p>O terceiro <i>wireframe</i> explorou a possibilidade de um formato de trilhas verticais, como os usuais <i>scrollytellings</i>, onde uma narrativa é construída com animações conforme o usuário vai descendo na leitura do documento. Este formato talvez não tenha a mesma leitura natural para a cultura ocidental (como o anterior), mas também não lhe será estranha, já que o <i>scroll</i> vertical é uma condição normal em qualquer mídia digital hoje (eram ambos, horizontal e vertical, considerados indesejáveis na década de 1990). </p>

                <p>Ele também funcionará melhor para os dispositivos mobile, ainda que alguns ajustes precisem ser realizados em decorrência do espaço diminuto. Evidentemente, o detalhamento da visualização precisará começar por este conexto mais restritivo.</p>

                <p>Este modelo foi escolhido para realização dos primeiros experimentos concretos, pois pareceu capaz de oferecer resultados mais promissores.</p>
            </div>


            <div class="halfblock dblock">
                <svg style="width: 100%" viewBox="0 0 822 428" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="645" y="35" width="39" height="38" class="illFillIt" />
                    <rect x="645" y="84" width="39" height="38" class="illFillIt" />
                    <rect x="703" y="84" width="39" height="38" class="illFillIt" />
                    <rect x="703" y="134" width="39" height="38" class="illFillIt" />
                    <rect x="644" y="134" width="39" height="38" class="illFillIt" />
                    <rect x="762" y="183" width="39" height="38" class="illFillIt" />
                    <rect x="168" y="33" width="92" height="68" class="illFillIt" />
                    <rect x="168" y="115" width="92" height="68" class="illFillIt" />
                    <rect x="286" y="115" width="92" height="68" class="illFillIt" />
                    <rect x="168" y="196" width="92" height="68" class="illFillIt" />
                    <rect x="286" y="196" width="92" height="68" class="illFillIt" />
                    <rect x="168" y="278" width="92" height="68" class="illFillIt" />
                    <rect x="168" y="359" width="92" height="62" class="illFillIt" />
                    <rect x="404" y="359" width="92" height="62" class="illFillIt" />
                    <rect x="286" y="278" width="92" height="68" class="illFillIt" />
                    <rect x="703" y="183" width="39" height="38" class="illFillIt" />
                    <rect x="645" y="183" width="39" height="38" class="illFillIt" />
                    <rect x="762" y="233" width="39" height="38" class="illFillIt" />
                    <rect x="645" y="233" width="39" height="38" class="illFillIt" />
                    <rect x="762" y="283" width="39" height="38" class="illFillIt" />
                    <rect x="645" y="283" width="39" height="38" class="illFillIt" />
                    <rect x="762" y="333" width="39" height="38" class="illFillIt" />
                    <rect x="762" y="383" width="39" height="38" class="illFillIt" />
                    <line x1="155" y1="4.99015" x2="156" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="273" y1="4.99015" x2="274" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="391" y1="4.99015" x2="392" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="635" y1="4.99015" x2="636" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="693" y1="4.99015" x2="694" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <line x1="752" y1="4.99015" x2="753" y2="410.99" class="illMultiLinetype" stroke-width="8" stroke-dasharray="30 10" />
                    <rect x="58" y="35" width="56" height="15.36" class="illFillIt" />
                    <rect x="58" y="154" width="56" height="15.36" class="illFillIt" />
                    <rect x="58" y="277" width="56" height="15.36" class="illFillIt" />
                    <rect x="58" y="396" width="56" height="15.36" class="illFillIt" />
                    <rect x="584" y="35" width="34" height="15" class="illFillIt" />
                    <rect x="584" y="154" width="34" height="15" class="illFillIt" />
                    <rect x="584" y="277" width="34" height="15" class="illFillIt" />
                    <rect x="584" y="396" width="34" height="15" class="illFillIt" />
                    <path d="M7.5 7.5H508.5V420.5H7.5V7.5Z" class="illMultiLinetype" stroke-width="15" />
                    <line x1="14" y1="162.5" x2="46" y2="162.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="40.5" x2="46" y2="40.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="100.5" x2="46" y2="100.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="70.5" x2="36" y2="70.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="131.5" x2="36" y2="131.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="285.5" x2="46" y2="285.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="223.5" x2="46" y2="223.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="193.5" x2="36" y2="193.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="254.5" x2="36" y2="254.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="346.5" x2="46" y2="346.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="404.5" x2="46" y2="404.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="316.5" x2="36" y2="316.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="14" y1="376.5" x2="36" y2="376.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="162.5" x2="578" y2="162.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="40.5" x2="578" y2="40.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="100.5" x2="578" y2="100.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="70.5" x2="568" y2="70.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="131.5" x2="568" y2="131.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="285.5" x2="578" y2="285.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="223.5" x2="578" y2="223.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="193.5" x2="568" y2="193.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="254.5" x2="568" y2="254.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="346.5" x2="578" y2="346.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="404.5" x2="578" y2="404.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="316.5" x2="568" y2="316.5" class="illMultiLinetype" stroke-width="5" />
                    <line x1="546" y1="376.5" x2="568" y2="376.5" class="illMultiLinetype" stroke-width="5" />
                    <path d="M553.5 7.5H814.5V420.5H553.5V7.5Z" class="illMultiLinetype" stroke-width="15" />
                </svg>
                <span class="legenda"><i>Wireframe em trilha vertical.</i></span>
            </div>
        </div>


        <div class="corpus">

            <p>A elaboração destes diagramas não tomou tempo realmente relevante para ser realizada. Talvez, se o primeiro ou o segundo experimento tivessem sido cuidadosamente detalhados, e tivessem exigido algumas horas de trabalho cada, teria sido mais difícil descartá-los para o desenvolvimento de um primeiro experimento. Abrir mão de algo que nos obriga algum investimento (emocional, de tempo, de pesquisa, de recursos, etc.) sempre acarreta em considerável resistência. Mas estudos como estes não podem ser feitos para serem duráveis.</p>

            <p>Mesmo descartados inicialmente, eles produziram um conhecimento importante sobre a forma que esta visualização precisará ter, as dificuldades a serem enfrentadas, e as precauções necessárias em seu projeto.</p>

            <p>Se este fosse um projeto mais complexo, como a interface de um aplicativo, talvez se fizesse necessária a construção de um protótipo/<i>wireframe</i> com maior nível de fidelidade para entender melhor (ao menos) o dimensionamento dos elementos, e antever com maior precisão a distribuição de textos, títulos, espaçamentos, e outros elementos do layout. Isso ajudaria a testar, principalmente, as interações com sua interface (usabilidade). Mas a visualização de informações possui um interfaceamento mais simples, que pode ser resolvido em um modelo/protótipo com programação, que pode ser inteiramente reaproveitado para o desenvolvimento do artefato final.</p>
        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>Muitos conhecem a expressão <i>mobile first</i>, bastante usual no campo de projetos digitais, que orienta os designers a trabalharem primeiro no contexto mais limitado, para depois pensarem em casos onde há mais espaço e recursos para o layout. Este é um conselho muito bom e conveniente, mas ainda está amparado em uma lógica que pensa sobre as formas concretas, e não sobre o design como abstração, mecânicas e regras. Este projeto não foi desenvolvido pensando do mobile ao desktop, tampouco do desktop para o mobile. Ele foi pensado em torno de componentes que possuem comportamentos e, necessariamente, respondem aos contextos em que estão inseridos. De forma objetiva, em nenhum momento se desenhou um layout que se conformasse a qualquer uma das duas situações.</p>

            <p>Do <i>wireframe</i> passamos diretamente a construção de código computacional, entendido como uma ferramenta de design, assim como são os softwares de planejamento e produção gráfica. Neste código construiu-se um modelo, que não poderia sequer ser chamado de protótipo: apenas uma reprodução do <i>wireframe</i> com o qual era possível interagir, mudando dimensões do navegador, fazendo <i>scroll</i> na tela, ou experimentando estas mesmas coisas em um dispositivo onde a interação acontecia por toque, e não através do mouse.</p>

            <p>Este modelo começou a evoluir sistematicamente. Esta é a lógica de <i>progressive enhancement</i>, onde a solução começa respondendo minimamente aos propósitos para qual é criada, e, aos poucos, vai sendo aprimorada e ganhando contornos mais sofisticados. A segunda iteração já apresentava dados reais no <i>wireframe</i>, possibilitando diversos ajustes em função da variância nos dados apresentados (alguns títulos grandes demais, alguns artefatos com edições especiais e outros não, etc.). O uso de dados reais no projeto é um recurso precioso, pois elimina a suposição de que a informação sempre se conforma bem ao espaço planejado.</p>

            <p>Uma terceira iteração já possuia ajustes visuais como cores, tipografia, margens e espaçamentos entre os componentes e na tipografia, e animação/transformação visual nos links e elementos interativos, mas ainda não era capaz de se ajustar/responder adequadamente a todos os contextos (ela apena se reduzia ou ampliava proporcionalmente em relação ao tamanho da tela).</p>
        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p>Nas versões subsequentes foram criados ajustes/respostas aprimoradas para contextos extremos (muito pequenos e muito grandes). Para espaços reduzidos foram suprimidos os links para versões especiais dos artefatos (remakes e edições comemorativas), e as tipologias menos relevantes (artefatos de narrativa interativa linear e animações interativas) foram eliminadas da exibição, permitindo que as demais (narrativas de predominância textual, e narrativas gráficas) ocupassem todo o espaço de tela.</p>

            <p>Para os espaços de tela muito grandes, as ampliação das imagens foi limitada (para que não assumissem dimensões gigantes) e as informações complementares dos artefatos (detalhamento) passaram a ser exibidos, subdivididos em trilhas dedicadas às plataformas sob as quais operam.</p>

            <p>Por fim, as últimas inclusões ao diagrama foram um cabeçalho capaz de se fixar ao topo da tela para identificação das trilhas, e os elementos paramétricos capazes de modificar o conteúdo exibido em função de especificações determinadas pelo usuário, que, talvez, seja o elemento mais importante à todo o projeto, do contrário teria sido preferível a elaboração de um diagrama estático ou uma infografia.</p>

            <p>O diagrama resolvido se encontra incoporado <a href="#diagramafinal" class="citacao">abaixo</a>, e ao seu término, a <a href="#discussaoresultados" class="citacao">discussão sobre seus resultados</a>.</p>
        </div>

        <a name="diagramafinal"></a>
        <div>

            <style>
                .specific {
                    width: 90vw;
                    margin: 0;
                    padding: 0;
                }
            </style>

            <div class="pncintro specific">

                <h1>Point & Click Adventures</h1>

                <p>Os Point & Click Adventures são artefatos narrativos que nasceram nas mídias digitais. Geralmente confundidos ou tratados como jogos, estes artefatos não são exatamente jogos: eles se aproximam mais da lógica do brinquedo ou do livro infantil, mesmo que uma razoável parcela deles contem, geralmente, com pequenos quebra-cabeças que precisam ser resolvidos para a progressão da história. O Point & Click Adventure é uma transposição dos quadrinhos ou das animações infantis para a mídia digital, oferencendo ao leitor/receptor/usuário a liberdade de transitar pelos cenários e ambientes, e agir neles para que a narrativa se desenvolva.</p>

                <p>O Point & Click Adventure é um dos primeiros esforços criativos na tentativa de transformar o computador (e a computação) em mídia, como suporte construtor de sentidos e significações; um dos primeiros esforços em utilizar o código computacional para uma finalidade lúdica, e não produtiva. A tipologia inaugural da narrativa no contexto digital.</p>

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

                <a class="pncsimplelink" target="_blank" href="https://narrativas.ranoya.com/pointnclick/lista.php">Dados</a> &nbsp; <a target="_blank" class="pncsimplelink" href="https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv">Dados (JSON)</a>


            </div>

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

            <script>
                url = "https://www.ranoya.com/AssetsManager/simplequery/pointnclickadv.php?filter=pncadv";

                filtrogeral = "filter=pncadv&";
                pointnclickpanel(url, "diagramapointandclick");
            </script>

        </div>

        <a name="discussaoresultados"></a>
        <div class="symbol"></div>

        <h2>Discussão sobre os resultados</h2>

        <div class="corpus">

            <p><b>Ausência do usuário</b>: o primeiro ponto sensível sobre o próprio processo projetual é a ausência de escuta: em nenhum momento pessoas e/ou possíveis usuários foram consultados, participaram da elaboração ou forneceram qualquer <i>feedback</i> sobre o artefato. Isto não deveria ser usual, nem mesmo em um projeto de design de informação, e é uma falha metodológica considerável, que não possui qualquer relação com o processo pelo qual ele foi tangibilizado.</p>

            <p>Esta situação, excepcional e não recomendável, se instituiu por que o projeto em sí tem como objeto um diagrama de uso muito específico e para uma finalidade também muito específica e bem caracterizada (ele é produto de um trabalho de pesquisa e foi aperfeiçoado apenas para ter uma performance melhor do que a sua versão anterior).</p>

            <p><b>Infografia x dataviz</b>: é notório que o resultado final é uma solução sem muito charme, um tanto quanto simplória; e isto não é uma questão de opção estética. Seria uma resposta fácil dizer que isso demonstra a superioridade das soluções de infografia, capazes de contar uma história à partir das informações, sobre as soluções de simples visualização de dados, como é o artefato proposto. Mas esta não é uma resposta justa, pois este é um artefato paramétrico que pode ser reconfigurado para exibir informações diferentes em uma mesma estrutura.</p>

            <p>Não devemos comparar um artefato dinâmico capaz de realizar operações em tempo real, com uma representação estática; é o mesmo que comparar bananas e maçãs... tratam-se de coisas diferentes, que operam e oferecem usos diferentes à informação. Se seu papel pode ser considerado o mesmo (informar), assim como são frutas as bananas e maçãs, seu uso e os sentidos que produzem não podem, principalmente porque a propria interação/uso produz significação e sentido (aquilo que <a href="javascript:openMeta('bogost');">Ian Bogost</a> chama de <a href="javascript:openMeta('retoricaprocessual');">retórica processual</a>).</p>

            <p>É igualmente equivocado acreditar que as visualizações de dados, por serem interativas, possuem qualquer superioridade sobre infografias ou a informações em suportes estáticos. Novamente, é uma comparação entre artefatos de informação de naturezas e usos diferentes.</p>

        </div>

        <div class="symbol"></div>

        <div class="corpus">

            <p><b>Performance</b>: um dos quesitos mais importantes aos quais o novo artefato corresponde plenamente é a performance:</p>
            <p>O tempo de resposta à cada solicitação/modificação nos parâmetros que dão forma à visualização é rápido;</p>
            <p>A visualização consegue se distribuir por todo o espaço disponível sem cusar a sensação claustrofóbica proveniente de muita informação compactada em pouco espaço, contando com bastante espaço negativo para respiro; </p>
            <p>As informações e os componentes criados conseguem se ajustar ao contexto, às suas dimensões, e ao seu mecanismo de entrada (gesto ou mouse) de forma amplamente responsiva.</p>

            <p><b>Indeterminação</b>: Ainda há um enorme conjunto de títulos de Point & Click Adventure à serem catalogados, tanto antigos (e menos conhecidos), quanto novos (sobretudo de desenvolvedores independentes). Os mecanismos elaborados para incorporar o conjunto já mapeado acomodarão na visualização quantos títulos mais forem inseridos na base de dados. O resultado desta visualização poderá ficar extenso, mas isso pode ser recortado com filtros que exibam títulos em de um período determinado, ou títulos marcados na base de dados como mais relevantes. De qualquer maneira, se o usuário quiser ver toda lista, ainda que extensa, ele poderá e conseguirá fazê-lo de forma confortável.</p>

            <p>De fato, no tempo em que este modelo foi elaborado, e o <a target="_blank" href="https://narrativas.ranoya.com/pointnclick2/#tree">produto final</a> desenvolvido, a base de dados cresceu consideravelmente. Ainda após a conclusão do projeto, ainda existem artefatos novos a serem mapeados.</p>

        </div>

        <a name='timeline2022'></a>
        <div class="symbol"></div>

        <h2>Contra-prova</h2>

        <div class="corpus">

            <p>Em 2022, uma nova visualização para os mesmos registros foi elaborada, explorando a <a class="citacao" href="#segundoexperimento">segunda alternativa de estrutura para apresentação dos dados, previamente indicada aqui</a>. O resultado é tecnologicamente superior, contando com formas diferentes de agrupamento de dados, reconhecimento de padrões no conjunto de dados, inteligência capaz de entender o recorte que se deseja ver aplicado aos dados, dentre diversos recursos incorporados, mas, como previsto, a visualização em sí é impraticável em contextos mobile.</p>

            <p>Enquanto um experimento de interface, seu produto é muito interessante, desde que seja experimentado em um <i>desktop</i>. Como aventado, a linha do tempo horizontal é uma representação que supre melhor nossas expectativas de comportamento em relação a como este tipo de informação é exibida. Seria a configuração ideal, se a questão do uso mobile não estivesse em jogo ou pudesse ser ignorada.</p>

            <p>Este componente de visualização também oferece inúmeras possibilidades de customização, das cores utilizadas, ao tamanho e forma (circular, quadrada, arredondada nos cantos, etc.) de exibição dos artefatos. Gêneros, tipologias, nomes de produtoras ou séries, ou mesmo um recorte temporal, podem ser escritos no campo de pesquisa para que a nova ferramenta separe um grupo específico de artefatos de uma maneira mais orgânica, que antes era feita grosseiramente por opções, botões, e interfaces de um formulário. E as diferentes formas de agrupar os artefatos permite que sejam observados/analisados de formas bem diferentes, mostrando qualidades e relações entre eles, que a antiga visualização não era capaz de fazer.</p>

        </div>

        <div style='margin-bottom: 4.5vw;'>
            <img src='https://www.ranoya.com/Assets/portfolio/pointandclick-timeline.png' style='width: 100%;'>

            <span class='legenda'><br>Componente de visualização da peça editorial <a target='_blank' href='https://narrativas.ranoya.com/pointnclick/timeline.php'>As raízes narrativas da mídia computacional</a></span>

        </div>

        <div class="corpus">

            <p>Esta é uma encruzilhada clássica na questão das interfaces projetadas para as mídias computacionais: a perspectiva tecnológica e a possibilidade de inclusão de novos recursos e ferramentas ao artefato sobreporem a simplicidade de uso, ou mesmo a sua adequação aos contextos de uso. Muitos dos <i>softwares</i> que estamos habituados a utilizar se tornaram mais complexos e mais intrincados - afastando seus próprios usuários - em decorrência desse efeito. Nesse sentido, a nova visualização pode ter seu charme, mas não é uma solução melhor de projeto de informação, mesmo apresentando correlações variadas e até muito interessantes.</p>

            <p>A simplicidade geralmente é o melhor caminho para a configuração das interfaces, como afirma <a href="javascript:openMeta('maeda');">John Maeda</a>. Isso pode não ser verdadeiro para todos os casos, mas se aplica à grande maioria deles, e funciona bem como uma regra geral, considerando que para toda regra há excessões. Não só a simplicidade e objetividade da primeira solução o torna mais conveniente, mas também é comum que artefatos computacionais que ampliam seu escopo de funcionalidades e objetivos, incorporando uma diversidade de usos e funções, acabem sendo menos compreensíveis, quando não acabem se tornando menos eficientes no que fazem: é sempre preferível algo simples que cumpra bem seu papel, do que algo amplo e cheio de funcionalidades, mas que não realize nada plenamente.</p>

            <p>Uma vez que se trata de um artefato de pouco impacto e importância na vida das pessoas, não há mal que esta segunda proposta coexista com a primeira; de fato, não há qualquer mal e prejuízo neste artefato ser até mal projetado. Mas se estivessemos elaborando um produto de informação que afetasse diretamente a vida de muitas pessoas, como algo de interesse público, a impraticabilidade de uso em contexto mobile seria condição de rejeição imediata para seu desenvolvimento, como já era previsível durante a elaboração dos primeiros <i>wireframes</i>. Novamente, o método projetual de construção de experimentos rápidos e descartáveis para avaliação das alternativas se comprova como um bom caminho como processo de configuração dos artefatos computacionais.</p>

        </div>


        <a name='prodfinal'></a>
        <div class="symbol"></div>

        <h2>Produto final</h2>

        <div class="corpus">
            <p>A versão final do editorial acabou aperfeiçoando o modelo já existente de 2022. Além de incorporar o componente de visualização horizontal desenvolvido na versão anterior, ela também conta com diversos outros componentes, como uma estrutura de árvore com as ramificações tipológicas destes artefatos, um emulador que efetivamente roda alguns artefatos dentro do próprio editorial, uma listagem com versões diferentes dos mesmos produtos narrativos, um painel com referências sobre a linguagem <i>pixel art</i>, além de integrar o mecanismo de filtragem da visualização com todos os links disponíveis no documento.</p>

            <p>Alguns ajustes foram realizados para tornar este editorial minimamente viável em contextos <i>mobile</i>, mas a realidade é que - sobretudo quanto ao componente de visualização em forma de linha do tempo - não se trata de um artefato que conseguiu encontrar uma boa solução nestes dispositivos.</p>

            <p>O editorial em si é bem melhor diagramado, e muito mais legível que seu antecessor. Os recursos tecnológicos adotados tiveram muito mais tempo para serem trabalhados, e logicamente resultaram em um produto melhor acabado.</p>

            <p>Mas o ponto de inflexão do artefato continua o mesmo, e continua válido: o projeto da visualização a tomou como um componente, que necessitava de flexibilidade e portabilidade para ser implementada em múltiplos contextos e suportes. Suas diversas e diferentes manifestações gráficas sempre partiram da <b>indeterminação</b> dos dados apresentados, e cada configuração possui suas próprias vantagens e desvantagens. A escolha por uma delas na configuração final do produto se deu em relação a multiplas questões em jogo (questões de legibilidade, questões estéticas, questões narrativas, etc.), que superaram a necessidade de um bom funcionamento nos <i>mobiles</i> para o componente como parte do editorial.</p>

        </div>

        <div style='margin-bottom: 4.5vw;'>
            <img src='https://lh3.googleusercontent.com/d/1Rt7K97VpCyL_lEYOuyfoiZ4jFEFhbNpn' style='width: 100%;'>

            <span class='legenda'><br>Componente de visualização na produto final do editorial <a target='_blank' href='https://narrativas.ranoya.com/pointnclick2'>As raízes narrativas da mídia computacional</a></span>

        </div>








        <div id="bookendnav"></div>

        <div id="meta">

            <div id="distill">

                <div style="background-image:url(https://avatars2.githubusercontent.com/u/22019253?s=200&v=4); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Distill<br>
                Periódico científico nativo à web como suporte/mídia no campo de pesquisa sobre <i>Machine Learning</i>.<br>
                <a href="https://distill.pub/">Website do periódico</a><br>
                <a href="https://github.com/distillpub">Repositório Github da plataforma</a>

            </div>

            <div id="bogost">
                <div style="background-image:url(https://cdn.theatlantic.com/thumbor/0Psw0x02aJfF1j4G2KbMThQa8VA=/38x38:1890x1890/144x144/media/None/ibogost_atlantic_new/original.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>

                Ian Bogost<br>
                EUA, 1976<br>
                Professor da Universidade da California em Los Angeles (UCLA) e autor de referência na área de jogos.<br>

            </div>

            <div id="retoricaprocessual">
                <div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/415OXlqf9ML._SX380_BO1,204,203,200_.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>

                Retórica processual (ou as vezes traduzido como retórica procedural, do original <i>procedural rhetoric</i>) é um conceito criado pelo professor e pesquisador Ian Bogost, onde estabelece que o mecanismo de um jogo (não apenas seu conteúdo) é uma forma de argumentação ou da construção de um discurso.<br>

            </div>



            <div id="ranoya2004">
                <div style="background-image:url(https://www.revistas.usp.br/public/journals/119/cover_issue_4279_pt_BR.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Tecnologias da desmaterialização<br>
                Guilherme Ranoya, Revista Novos Olhares, USP, 2004.<br>
                Citação da página 31.<br>
                <a href="https://www.revistas.usp.br/novosolhares/article/view/51392" target="_blank">Revista</a> | <a href="https://drive.google.com/file/d/0B8OiJVdB8D6wR2N4Zmdfb3RibTg/preview" target="_blank">Artigo</a><br>
            </div>

            <div id="ranoya2013">
                A intuitividade nas mídias interativas<br>
                Guilherme Ranoya, Biblioteca da Escola de Comunicação e Artes, USP, 2013.<br>
                Citação da página 59.<br>
                <a href="https://teses.usp.br/teses/disponiveis/27/27161/tde-22082013-083632/pt-br.php" target="_blank">Acervo digital de teses</a><br>
            </div>

            <div id="barthes">
                <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/e/e1/Roland_Barthes_Youth.png); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Roland Barthes<br>
                França, 1915 - 1980<br>
                Semioticista francês, Barthes é conhecido por ser um caminho alternativo para os dois ramos princípais nas ciências da linguagem.<br>
            </div>

            <div id="ludwig">
                <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/6/60/35._Portrait_of_Wittgenstein.jpg); background-size: cover; background-position: center top; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Ludwig Wittgenstein<br>
                Áustria, 1889 - 1951<br>
                Professor da Universidade de Cambridge e autor de duas obras essenciais na filosofia da linguagem: o Tractatus Logico-Philosophicus e as Investigações Filosóficas.<br>
            </div>

            <div id="mihaly">
                <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/c/c3/Mihaly_Csikszentmihalyi.jpg); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                Mihaly Csikszentmihalyi<br>
                Croácia, 1934<br>
                Professor da Universidade de Chicago, e criador da Teoria do Flow<br>
            </div>



            <div id="maeda">
                <div style="background-image:url(https://asiasociety.org/files/images/130702_john_maeda2.jpg); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                John Maeda<br>
                EUA, 1966<br>
                Professor do Media Lab do Massachussets Institute of Technology (MIT), e lider de pesquisa do Aesthetics + Computation Group<br>
            </div>

            <div id="laws">
                <div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/613jW9m4j4L.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
                As leis da simplicidade<br>
                John Maeda, 2006, Editora Novo Conceito.<br>
                <a href="https://amzn.to/2wItkW8" target="_blank">Amazon.com.br</a>
            </div>


        </div>
        <div id="metacompensate"></div>

        <div id="posicao"></div>
        <div id="posicaocompensate"></div>

</body>

</html>