<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>AVALIAÇÕES</title>
  <meta name="generator" content="artesanal" />
  <meta name="description" content="Avaliações de Projetão">
  <meta name="keywords" content="inovação, métricas, notas, avaliação, sistema de avaliação">
  <meta name="author" content="Guilherme Ranoya">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link REL="SHORTCUT ICON" HREF="https://www.ranoya.com/aulas/projetao/favicon.ico">     
  <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/projetao/cover.jpg" />
  <meta property="og:image" content="https://www.ranoya.com/aulas/projetao/cover.jpg" />
  <meta property="og:image:width" content="1145" />
  <meta property="og:image:height" content="601" />
  <meta name = "pinterest" content = "nopin" />
  <meta name="pinterest" content="nohover">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#47192d;">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#47192d;">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#47192d;">
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php 
                if ($_GET['theme']) { echo $_GET['theme'].".css"; } else { echo "themedefault.css"; }
                ?>">

</head>

<body>

    <div id="panodefundo"></div>

    <nav>

        <div id="projetaologo"></div>

    </nav>

    <br><br><br><br><br><br>


    <div id="timeline">
        <a href="javascript:proximaQuest();" class="timeline" style="clear: both; width: 20%;"><img src="https://assets.ranoya.com/projetao/up-grey.svg" style="width: 100%; clear: both;"></a><br><br><br><br>

        <div id="timelinequests">
            HOJE
        </div>
        
        <br>
        <a href="javascript:questAnterior();" class="timeline" style="clear: both; width: 20%;"><img src="https://assets.ranoya.com/projetao/down-grey.svg" style="width: 100%; clear: both;"></a>
    </div>

    <div id='allcards'>

<?php


// $DADOS[SEMANA][GRUPO][INFORMACAO]
$DADOS = array();
$DADOS[1] = array();

$dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_projetao";

        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT TURMA, AVALIACAO, GRUPOID, id, grupo, disciplina, AVE, AVI, AVC, AVQ, AVS, AVA, msgparagrupo FROM GRUPOS WHERE grupo <> '' ORDER BY AVALIACAO, GRUPOID";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {


                echo "<script>console.log('avaliacao: '+". $row['AVALIACAO'].");</script>";

                
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])] = array();
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]['nome'] = html_entity_decode($row['grupo']);
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]['disciplina'] = html_entity_decode($row['disciplina']);
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]['msgparagrupo'] = html_entity_decode($row['msgparagrupo']);
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tE"] = $row['AVE'];
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tI"] = $row['AVI'];
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tC"] = $row['AVC'];
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tQ"] = $row['AVQ'];
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tS"] = $row['AVS'];
                $DADOS[intval($row['AVALIACAO'])][intval($row['GRUPOID'])]["tA"] = $row['AVA'];

                          
            }
          } else {
            
            //
          }


          
          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }

/*
$DADOS[2][1] = array();
$DADOS[2][1]['nome'] = "MUSEUM MYSTERY / ATRATIVIDADE DE MUSEUS";
$DADOS[2][1]['disciplina'] = "PROJETÃO TECH";
$DADOS[2][1]['feedback'] = "Este feedback foi dado para o grupo Museum Mystery... é apenas um teste de feedback";
$DADOS[2][1]["tE"] = 3.01;
$DADOS[2][1]["tI"] = 3.01;
$DADOS[2][1]["tC"] = 3.01;
$DADOS[2][1]["tQ"] = 0.01;
$DADOS[2][1]["tS"] = 3.01;
$DADOS[2][1]["tA"] = 3.01;

$DADOS[2][2] = array();
$DADOS[2][2]['nome'] = "DOGEARS / PETS";
$DADOS[2][2]['disciplina'] = "PROJETÃO TECH";
$DADOS[2][2]['feedback'] = "Este outro feedback é do grupo DogEars... o projeto está bom, e andando muito bem";
$DADOS[2][2]["tE"] = 3.01;
$DADOS[2][2]["tI"] = 3.01;
$DADOS[2][2]["tC"] = 3.01;
$DADOS[2][2]["tQ"] = 3.01;
$DADOS[2][2]["tS"] = 3.01;
$DADOS[2][2]["tA"] = 0;

$DADOS[2][3] = array();
$DADOS[2][3]['nome'] = "GUARDAQUI / LOCKERS DE PRAIA";
$DADOS[2][3]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][3]['feedback'] = "Este outro feedback é para o grupo GuardAQUI... o projeto é interessante, e melhor de tudo, é na praia...";
$DADOS[2][3]["tE"] = 3.01;
$DADOS[2][3]["tI"] = 3.01;
$DADOS[2][3]["tC"] = 3.01;
$DADOS[2][3]["tQ"] = 3.01;
$DADOS[2][3]["tS"] = 3.01;
$DADOS[2][3]["tA"] = 3.01;

$DADOS[2][4] = array();
$DADOS[2][4]['nome'] = "LEITURA EM MOVIMENTO";
$DADOS[2][4]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][4]['feedback'] = "O grupo de Leitura em Movimento fez um feito realmente impressionante";
$DADOS[2][4]["tE"] = 3.01;
$DADOS[2][4]["tI"] = 3;
$DADOS[2][4]["tC"] = 3;
$DADOS[2][4]["tQ"] = 3.01;
$DADOS[2][4]["tS"] = 0;
$DADOS[2][4]["tA"] = 3.01;

$DADOS[2][5] = array();
$DADOS[2][5]['nome'] = "ENTRAI / SEGURANÇA";
$DADOS[2][5]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][5]['feedback'] = "O EntrAi virou um Meme dentro de projetão... agora todos os grupos precisam ter um nome desse tipo";
$DADOS[2][5]["tE"] = 3.01;
$DADOS[2][5]["tI"] = 3.01;
$DADOS[2][5]["tC"] = 0;
$DADOS[2][5]["tQ"] = 3.01;
$DADOS[2][5]["tS"] = 3.01;
$DADOS[2][5]["tA"] = 3.01;

$DADOS[2][6] = array();
$DADOS[2][6]['nome'] = "NAREAL / AI + LEITURA";
$DADOS[2][6]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][6]['feedback'] = "NaReal é um trabalho interessante, e precisa ser continuado. A experiência com AI é muito bacana";
$DADOS[2][6]["tE"] = 3.01;
$DADOS[2][6]["tI"] = 3;
$DADOS[2][6]["tC"] = 3.01;
$DADOS[2][6]["tQ"] = 3.01;
$DADOS[2][6]["tS"] = 2;
$DADOS[2][6]["tA"] = 3.01;

$DADOS[2][7] = array();
$DADOS[2][7]['nome'] = "FIND MY SPACE / WE DANCE";
$DADOS[2][7]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][7]['feedback'] = "FindMySpace é o nome novo do grupo WeDance... ele mudou, e dá para mudar de uma semana para outra também no Painel de Controle";
$DADOS[2][7]["tE"] = 3.01;
$DADOS[2][7]["tI"] = 2;
$DADOS[2][7]["tC"] = 2;
$DADOS[2][7]["tQ"] = 3.01;
$DADOS[2][7]["tS"] = 3.01;
$DADOS[2][7]["tA"] = 3.01;


$DADOS[3][1] = array();
$DADOS[3][1]['nome'] = "MUSEUM MYSTERY";
$DADOS[3][1]['disciplina'] = "PROJETÃO TECH";
$DADOS[3][1]['feedback'] = "Este feedback foi dado para o grupo Museum Mystery... é apenas um teste de feedback";
$DADOS[3][1]["tE"] = 2;
$DADOS[3][1]["tI"] = 2;
$DADOS[3][1]["tC"] = 3;
$DADOS[3][1]["tQ"] = 2;
$DADOS[3][1]["tS"] = 1;
$DADOS[3][1]["tA"] = 2;

$DADOS[3][2] = array();
$DADOS[3][2]['nome'] = "DOGEARS";
$DADOS[3][2]['disciplina'] = "PROJETÃO TECH";
$DADOS[3][2]['feedback'] = "Este outro feedback é do grupo DogEars... o projeto está bom, e andando muito bem";
$DADOS[3][2]["tE"] = 2;
$DADOS[3][2]["tI"] = 3;
$DADOS[3][2]["tC"] = 3;
$DADOS[3][2]["tQ"] = 3;
$DADOS[3][2]["tS"] = 3.01;
$DADOS[3][2]["tA"] = 1;

$DADOS[3][3] = array();
$DADOS[3][3]['nome'] = "GUARDAQUI";
$DADOS[3][3]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[3][3]['feedback'] = "Este outro feedback é para o grupo GuardAQUI... o projeto é interessante, e melhor de tudo, é na praia...";
$DADOS[3][3]["tE"] = 3;
$DADOS[3][3]["tI"] = 3;
$DADOS[3][3]["tC"] = 3;
$DADOS[3][3]["tQ"] = 2;
$DADOS[3][3]["tS"] = 3;
$DADOS[3][3]["tA"] = 3;

$DADOS[3][4] = array();
$DADOS[3][4]['nome'] = "LEITURA EM MOVIMENTO";
$DADOS[3][4]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[3][4]['feedback'] = "O grupo de Leitura em Movimento fez um feito realmente impressionante";
$DADOS[3][4]["tE"] = 2;
$DADOS[3][4]["tI"] = 0;
$DADOS[3][4]["tC"] = 2;
$DADOS[3][4]["tQ"] = 3;
$DADOS[3][4]["tS"] = 1;
$DADOS[3][4]["tA"] = 2;

$DADOS[3][5] = array();
$DADOS[3][5]['nome'] = "ENTRAI";
$DADOS[3][5]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[3][5]['feedback'] = "O EntrAi virou um Meme dentro de projetão... agora todos os grupos precisam ter um nome desse tipo";
$DADOS[3][5]["tE"] = 3;
$DADOS[3][5]["tI"] = 3;
$DADOS[3][5]["tC"] = 3;
$DADOS[3][5]["tQ"] = 3.01;
$DADOS[3][5]["tS"] = 3.01;
$DADOS[3][5]["tA"] = 3.01;

$DADOS[3][6] = array();
$DADOS[3][6]['nome'] = "NAREAL";
$DADOS[3][6]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[3][6]['feedback'] = "NaReal é um trabalho interessante, e precisa ser continuado. A experiência com AI é muito bacana";
$DADOS[3][6]["tE"] = 2;
$DADOS[3][6]["tI"] = 2;
$DADOS[3][6]["tC"] = 2;
$DADOS[3][6]["tQ"] = 3;
$DADOS[3][6]["tS"] = 0;
$DADOS[3][6]["tA"] = 0;

$DADOS[3][7] = array();
$DADOS[3][7]['nome'] = "FIND MY SPACE";
$DADOS[3][7]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[3][7]['feedback'] = "FindMySpace é o nome novo do grupo WeDance... ele mudou, e dá para mudar de uma semana para outra também no Painel de Controle";
$DADOS[3][7]["tE"] = 0;
$DADOS[3][7]["tI"] = 0;
$DADOS[3][7]["tC"] = 0;
$DADOS[3][7]["tQ"] = 0;
$DADOS[3][7]["tS"] = 0;
$DADOS[3][7]["tA"] = 0;
*/



for ($k=1; $k <= count($DADOS[1]); $k++ ) {

echo "<div id='grupo".$k."' class='card'>";

echo "<svg class='grafico' viewBox='0 0 402 402' xmlns='http://www.w3.org/2000/svg'>";

echo "<polygon id='T".$k."tE' points='0,200 100,0 200,200 0,200' class='na' />";
echo "<polygon id='T".$k."tI' points='100,0 200,200 300,0 100,0' class='na' /> ";
echo "<polygon id='T".$k."tC' points='200,200 300,0 400,200 200,200' class='na' /> ";
echo "<polygon id='T".$k."tQ' points='0,200 100,400 200,200 0,200' class='na' /> ";
echo "<polygon id='T".$k."tS' points='100,400 200,200 300,400 100,400' class='na' /> ";
echo "<polygon id='T".$k."tA' points='200,200 300,400 400,200 200,200' class='na' /> ";

echo "<polygon id='G".$k."tE' points='50,200 125,50 200,200 50,200' class='na' /> ";
echo "<polygon id='G".$k."tI' points='125,50 200,200 275,50 125,50' class='na' /> ";
echo "<polygon id='G".$k."tC' points='200,200 275,50 350,200 200,200' class='na' /> ";
echo "<polygon id='G".$k."tQ' points='50,200 125,350 200,200 50,200' class='na' /> ";
echo "<polygon id='G".$k."tS' points='275,350 200,200 125,350 275,350' class='na' /> ";
echo "<polygon id='G".$k."tA' points='200,200 275,350 350,200 200,200' class='na' /> ";

echo "<text x='75' y='140' class='criterio'>ESCUTA</text> ";
echo "<text x='165' y='70' class='criterio'>INOVAÇÃO</text> ";
echo "<text x='250' y='140' class='criterio'>COMUNICAÇÃO</text> ";
echo "<text x='65' y='260' class='criterio'>QUALIDADE</text> ";
echo "<text x='150' y='335' class='criterio'>APRENDIZADO</text> ";
echo "<text x='270' y='260' class='criterio'>SINERGIA</text> ";
echo "<text x='200' y='210' text-anchor='middle' class='semana' id='G".$k."semanalistada'></text> ";

echo "</svg>";

echo "<p class='projetaotype' id='G".$k."nomedisciplina'>PROJETÃO TECH</p>";

echo "<div class='cardinfotop'> <p class='nometrabalho' id='G".$k."nometrabalho'></p>";

echo "<p class='feedback' id='G".$k."feedb'>Apenas um feedback registrado para os grupos para que eles saibam o que fazer nesta avaliação.</p> </div>";

echo "<p class='conceito' id='G".$k."conceito'>C</p>";

echo "</div>";

}

?>

</div>














<script>

    colors = { bom: 'green', medio: '#cc6600', ruim: '#cc0000', na: 'grey'};

    questviewing = <?php echo count($DADOS); ?>;

    function proximaQuest() {

        questviewing++;
        if (questviewing > <?php echo count($DADOS); ?>) {

            questviewing = <?php echo count($DADOS); ?>;

        }

        graph(false, questviewing);

    }

    function questAnterior() {

        questviewing--;
        if (questviewing <= 1) {

            questviewing = 1;

        }

        graph(false, questviewing);


    }

    console.log(<?php count($DADOS); ?>);


    json = { 

        <?php

            

            for ($cs = 1; $cs < count($DADOS); $cs++) {

                echo " semana".$cs.": {";

                    for ($grp = 1; $grp <= count($DADOS[1]); $grp++) {

                        echo " G".$grp.": {";

                        echo " nome: '".$DADOS[$cs][$grp]['nome']."',";
                        echo " disciplina: '".$DADOS[$cs][$grp]['disciplina']."',";
                        echo " feedback: '".$DADOS[$cs][$grp]['msgparagrupo']."',";
                        
                        echo " tE: ".$DADOS[$cs][$grp]['tE'].",";
                        echo " tI: ".$DADOS[$cs][$grp]['tI'].",";
                        echo " tC: ".$DADOS[$cs][$grp]['tC'].",";
                        echo " tQ: ".$DADOS[$cs][$grp]['tQ'].",";
                        echo " tS: ".$DADOS[$cs][$grp]['tS'].",";
                        echo " tA: ".$DADOS[$cs][$grp]['tA'];
                        echo "}";

                        if ($grp < count($DADOS[1]) ) { echo ","; }

                    }


                echo "}";

                if ($cs < count($DADOS)) { echo ","; }

            }




        ?>
        
    

};



    somatE = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    somatI = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    somatC = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    somatQ = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    somatS = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    somatA = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    quantSemanas = 0;



function timeline(sa) {

    $("#timelinequests").html("HOJE<br><br>");

    questviewing = sa;

    for (s = <?php echo count($DADOS) - 1; ?>; s>0; s--) {

        if (s != sa) {
        $("#timelinequests").append("<a href='javascript:graph(false,"+(s)+");' class='timeline'>QUEST #" + (s+1) + "</a><br>");
        } else {
        $("#timelinequests").append("<p class='timelineselect'>QUEST #" + (s+1) + "</p><br>");
        }

    }


    $("#timelinequests").append("<p style='clear: both;'>INÍCIO</p>");



}





function graph(todos, smax) {

    if (!smax) {

        smax = <?php echo count($DADOS) - 1; ?>;

    }

    if (smax < 1) {

        smax = 1;

    }

    if (smax > <?php echo count($DADOS) - 1; ?>) {

        smax = <?php echo count($DADOS) - 1; ?>;

    }

    console.log ("smax: " + smax + " $DADOS: " + <?php echo count($DADOS); ?>);

    timeline(smax);

for (g = 1; g<= <?php echo count($DADOS[1]); ?> ; g++) {
    
        quantSemanas = 0;
        quantSemanasE = 0;
        quantSemanasI = 0;
        quantSemanasC = 0;
        quantSemanasQ = 0;
        quantSemanasS = 0;
        quantSemanasA = 0;  

            for( s = 1; s <= smax; s++) {



                $("#G" + g + "nometrabalho").html(json['semana'+s]['G'+g]['nome']);
                $("#G" + g + "semanalistada").html("QUEST #" + (s+1));
                $("#G" + g + "nomedisciplina").html(json['semana'+s]['G'+g]['disciplina']);
                $("#G" + g + "feedb").html(json['semana'+s]['G'+g]['feedback']);

            quantSemanas++;
            quantSemanasE++;
            quantSemanasI++; 
            quantSemanasC++; 
            quantSemanasQ++; 
            quantSemanasS++; 
            quantSemanasA++; 

            // tE
            somatE[g] = somatE[g] + json['semana'+s]['G'+g]['tE'];

            if (json['semana'+s]['G'+g]['tE'] <= 1 ) {
                $("#G" + g + "tE").css("fill", colors['ruim']);
            }

            if (json['semana'+s]['G'+g]['tE'] > 1 && json['semana'+s]['G'+g]['tE'] <= 2 ) {
                $("#G" + g + "tE").css("fill", colors['medio']);
            }


            if (json['semana'+s]['G'+g]['tE'] > 2 && json['semana'+s]['G'+g]['tE'] <= 3 ) {
                $("#G" + g + "tE").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tE'] > 3 ) {
                $("#G" + g + "tE").css("fill", colors['na']);
                quantSemanasE--;
                somatE[g] = somatE[g] - json['semana'+s]['G'+g]['tE'];
            }


            // tI
            somatI[g] = somatI[g] + json['semana'+s]['G'+g]['tI'];
            if (json['semana'+s]['G'+g]['tI'] <= 1 ) {
                $("#G" + g + "tI").css("fill", colors['ruim']);
            }
            if (json['semana'+s]['G'+g]['tI'] > 1 && json['semana'+s]['G'+g]['tI'] <= 2 ) {
                $("#G" + g + "tI").css("fill", colors['medio']);
            }
            if (json['semana'+s]['G'+g]['tI'] > 2 && json['semana'+s]['G'+g]['tI'] <= 3 ) {
                $("#G" + g + "tI").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tI'] > 3 ) {
                $("#G" + g + "tI").css("fill", colors['na']);
                quantSemanasI--;
                somatI[g] = somatI[g] - json['semana'+s]['G'+g]['tI']; 
            }


            // tC
            somatC[g] = somatC[g] + json['semana'+s]['G'+g]['tC'];
            if (json['semana'+s]['G'+g]['tC'] <= 1 ) {
                $("#G" + g + "tC").css("fill", colors['ruim']);
            }
            if (json['semana'+s]['G'+g]['tC'] > 1 && json['semana'+s]['G'+g]['tC'] <= 2 ) {
                $("#G" + g + "tC").css("fill", colors['medio']);
            }
            if (json['semana'+s]['G'+g]['tC'] > 2 && json['semana'+s]['G'+g]['tC'] <= 3 ) {
                $("#G" + g + "tC").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tC'] > 3 ) {
                $("#G" + g + "tC").css("fill", colors['na']);
                quantSemanasC--;
                somatC[g] = somatC[g] - json['semana'+s]['G'+g]['tC'];
            }

            // tQ
            somatQ[g] = somatQ[g] + json['semana'+s]['G'+g]['tQ'];
            if (json['semana'+s]['G'+g]['tQ'] <= 1 ) {
                $("#G" + g + "tQ").css("fill", colors['ruim']);
            }
            if (json['semana'+s]['G'+g]['tQ'] > 1 && json['semana'+s]['G'+g]['tQ'] <= 2 ) {
                $("#G" + g + "tQ").css("fill", colors['medio']);
            }
            if (json['semana'+s]['G'+g]['tQ'] > 2 && json['semana'+s]['G'+g]['tQ'] <= 3 ) {
                $("#G" + g + "tQ").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tQ'] > 3 ) {
                $("#G" + g + "tQ").css("fill", colors['na']);
                quantSemanasQ--;
                somatQ[g] = somatQ[g] - json['semana'+s]['G'+g]['tQ'];
            }

            // tS
            somatS[g] = somatS[g] + json['semana'+s]['G'+g]['tS'];
            if (json['semana'+s]['G'+g]['tS'] <= 1 ) {
                $("#G" + g + "tS").css("fill", colors['ruim']);
            }
            if (json['semana'+s]['G'+g]['tS'] > 1 && json['semana'+s]['G'+g]['tS'] <= 2 ) {
                $("#G" + g + "tS").css("fill", colors['medio']);
            }
            if (json['semana'+s]['G'+g]['tS'] > 2 && json['semana'+s]['G'+g]['tS'] <= 3 ) {
                $("#G" + g + "tS").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tS'] > 3 ) {
                $("#G" + g + "tS").css("fill", colors['na']);
                quantSemanasS--;
                somatS[g] = somatS[g] - json['semana'+s]['G'+g]['tS'];
            }


            // tA
            somatA[g] = somatA[g] + json['semana'+s]['G'+g]['tA'];
            if (json['semana'+s]['G'+g]['tA'] <= 1 ) {
                $("#G" + g + "tA").css("fill", colors['ruim']);
            }
            if (json['semana'+s]['G'+g]['tA'] > 1 && json['semana'+s]['G'+g]['tA'] <= 2 ) {
                $("#G" + g + "tA").css("fill", colors['medio']);
            }
            if (json['semana'+s]['G'+g]['tA'] > 2 && json['semana'+s]['G'+g]['tA'] <= 3 ) {
                $("#G" + g + "tA").css("fill", colors['bom']);
            }
            if (json['semana'+s]['G'+g]['tA'] > 3 ) {
                $("#G" + g + "tA").css("fill", colors['na']);
                quantSemanasA--;
                somatA[g] = somatA[g] - json['semana'+s]['G'+g]['tA'];
            }


            console.log("Semana:" + s + " Grupo: " + g + " tA: " + json['semana'+s]['G'+g]['tA'] + " tA acumulado: " + somatA[g]);
            console.log("Semana:" + s + " Grupo: " + g + " tS: " + json['semana'+s]['G'+g]['tS'] + " tA acumulado: " + somatS[g]);


        }


        
        
        if (todos == true) {    
            

            // tE
            
            if ((somatE[g]/quantSemanasE) <= 1 ) {
                $("#T" + g + "tE").css("fill", colors['ruim']);
                valorE = (somatE[g]/quantSemanasE);
            }
            if ((somatE[g]/quantSemanasE) > 1 && (somatE[g]/quantSemanasE) <= 2 ) {
                $("#T" + g + "tE").css("fill", colors['medio']);
                valorE = (somatE[g]/quantSemanasE);
            }
            if ((somatE[g]/quantSemanasE) > 2) {
                $("#T" + g + "tE").css("fill", colors['bom']);
                valorE = (somatE[g]/quantSemanasE);
            }
            if (quantSemanasE == 0 || (somatE[g]/quantSemanasE) <= 0 ) {
                $("#T" + g + "tE").css("fill", colors['na']);
                valorE = 0;
            }




            // tI
            
            if ((somatI[g]/quantSemanasI) <= 1 ) {
                $("#T" + g + "tI").css("fill", colors['ruim']);
                valorI = (somatI[g]/quantSemanasI);
            }
            if ((somatI[g]/quantSemanasI) > 1 && (somatI[g]/quantSemanasI) <= 2 ) {
                $("#T" + g + "tI").css("fill", colors['medio']);
                valorI = (somatI[g]/quantSemanasI);
            }
            if ((somatI[g]/quantSemanasI) > 2) {
                $("#T" + g + "tI").css("fill", colors['bom']);
                valorI = (somatI[g]/quantSemanasI);
            }
            if (quantSemanasI == 0 || (somatI[g]/quantSemanasI) <= 0 ) {
                $("#T" + g + "tI").css("fill", colors['na']);
                valorI = 0;
            }

            // tC
            
            if ((somatC[g]/quantSemanasC) <= 1 ) {
                $("#T" + g + "tC").css("fill", colors['ruim']);
                valorC = (somatC[g]/quantSemanasC);
            }
            if ((somatC[g]/quantSemanasC) > 1 && (somatC[g]/quantSemanasC) <= 2 ) {
                $("#T" + g + "tC").css("fill", colors['medio']);
                valorC = (somatC[g]/quantSemanasC);
            }
            if ((somatC[g]/quantSemanasC) > 2) {
                $("#T" + g + "tC").css("fill", colors['bom']);
                valorC = (somatC[g]/quantSemanasC);
            }
            if (quantSemanasC == 0 || (somatC[g]/quantSemanasC) <= 0 ) {
                $("#T" + g + "tC").css("fill", colors['na']);
                valorC = 0;
            }

            // tQ
            
            if ((somatQ[g]/quantSemanasQ) <= 1 ) {
                $("#T" + g + "tQ").css("fill", colors['ruim']);
                valorQ = (somatQ[g]/quantSemanasQ);
            }
            if ((somatQ[g]/quantSemanasQ) > 1 && (somatQ[g]/quantSemanasQ) <= 2 ) {
                $("#T" + g + "tQ").css("fill", colors['medio']);
                valorQ = (somatQ[g]/quantSemanasQ);
            }
            if ((somatQ[g]/quantSemanasQ) > 2) {
                $("#T" + g + "tQ").css("fill", colors['bom']);
                valorQ = (somatQ[g]/quantSemanasQ);
            }
            if (quantSemanasQ == 0 || (somatQ[g]/quantSemanasQ) <= 0 ) {
                $("#T" + g + "tQ").css("fill", colors['na']);
                valorQ = 0;
            }

            // tS
            
            if ((somatS[g]/quantSemanasS) <= 1 ) {
                $("#T" + g + "tS").css("fill", colors['ruim']);
                valorS = (somatS[g]/quantSemanasS);
            }
            if ((somatS[g]/quantSemanasS) > 1 && (somatS[g]/quantSemanasS) <= 2 ) {
                $("#T" + g + "tS").css("fill", colors['medio']);
                valorS = (somatS[g]/quantSemanasS);
            }
            if ((somatS[g]/quantSemanasS) > 2) {
                $("#T" + g + "tS").css("fill", colors['bom']);
                valorS = (somatS[g]/quantSemanasS);
            }
            if (quantSemanasS == 0 || (somatS[g]/quantSemanasS) <= 0 ) {
                $("#T" + g + "tS").css("fill", colors['na']);
                valorS = 0;
            }


            // tA
            
            if ((somatA[g]/quantSemanasA) <= 1 ) {
                $("#T" + g + "tA").css("fill", colors['ruim']);
                valorA = (somatA[g]/quantSemanasA);
            }
            if ((somatA[g]/quantSemanasA) > 1 && (somatA[g]/quantSemanasA) <= 2 ) {
                $("#T" + g + "tA").css("fill", colors['medio']);
                valorA = (somatA[g]/quantSemanasA);
            }
            if ((somatA[g]/quantSemanasA) > 2) {
                $("#T" + g + "tA").css("fill", colors['bom']);
                valorA = (somatA[g]/quantSemanasA);
            }
            if (quantSemanasA == 0 || (somatA[g]/quantSemanasA) <= 0 ) {
                $("#T" + g + "tA").css("fill", colors['na']);
                valorA = 0;
            }

             

            notaconceito = (valorA + valorS + valorQ + valorC + valorI + valorE)/6;

            if (notaconceito > 2) {

                $("#G" + g + "conceito").html("A");
            }

            if (notaconceito <= 2 && notaconceito > 1) {

                $("#G" + g + "conceito").html("B");
            }

            if (notaconceito <= 1) {

                $("#G" + g + "conceito").html("C");

            }

        }


    }


}








$( document ).ready(function() {
  

  graph(true);

    

});

</script>

</body>

</html>