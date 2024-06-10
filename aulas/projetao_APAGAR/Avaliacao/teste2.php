<!DOCTYPE html>
<head>
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<style>

.card {

    float: left;
    padding: 0.7vw;
    width: 29vw;
    margin-right: 2vw;
    margin-bottom: 2vw;
    height: 22vw;
    border: solid 1px black;

}

.grafico {

    position: relative;
    z-index: 5;
    width: 75%;
    margin-left: 31%;
    margin-top: 2vw;"

}

.projetaotype {

    text-align: right;
    position: relative;
    z-index: 3;
    right: -17.3vw;
    width: 40%;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 0.9vw;
    font-weight: bolder;
    padding: 0; 
    margin: 0;
    margin-top: -24vw;

}

.nometrabalho {

    position: relative;
    z-index: 6;
    width: 50%;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 1.7vw;
    font-weight: bolder;
    line-height: 1.5vw;
    padding: 0;
    margin: 0;
    margin-top: -1.0vw;

}

.feedback {

    position: relative;
    z-index: 4;
    width: 35%;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 0.9vw;
    font-weight: bolder;
    padding: 0;
    margin: 0;
    margin-top: 1vw;
}

.criterio {
    
    font: normal 13px sans-serif;
    fill: white;
    
}

.semana {
    
    font: normal 22px Helvetica, Arial, sans-serif;
    fill: white;
    
}

.verde {
    stroke: none;
    fill: transparent;

}

.amarelo {
    stroke: none;
    fill: transparent;

}

.vermelho {
    stroke: none;
    fill: transparent;

}

.na {
    stroke: none;
    fill: transparent;

}

@media (max-width: 600px) {

.card {

    margin-left: 1vw;
    margin-right: 0;
    clear: both;
    width: 90vw;
    height: 68vw;
    margin-bottom: 10vw;

}

.grafico {

    top: 14px;

}

.projetaotype {

    right: -53vw;
    font-size: 3vw;
    margin-top: -69.8vw;
    width: 40%;

}

.nometrabalho {

    font-size: 5vw;
    line-height: 5vw;
    margin-top: -3.5vw;
    margin-left: 0.5vw;

}

.feedback {

    font-size: 2.7vw;
    font-weight: bolder;
    margin-top: 1vw;
    margin-left: 0.5vw;
}



}

</style>
</head>

<body>

<?php


// $DADOS[SEMANA][GRUPO][INFORMACAO]
$DADOS = array();
$DADOS[1] = array();

$DADOS[1][1] = array();
$DADOS[1][1]['nome'] = "MUSEUM MYSTERY / ATRATIVIDADE DE MUSEUS";
$DADOS[1][1]['disciplina'] = "PROJETÃO TECH";
$DADOS[1][1]['feedback'] = "Feedback para o grupo de Museus na semana 1";
$DADOS[1][1]['quest'] = 1;
$DADOS[1][1]["tE"] = 2;
$DADOS[1][1]["tI"] = 1;
$DADOS[1][1]["tC"] = 3.01;
$DADOS[1][1]["tQ"] = 2;
$DADOS[1][1]["tS"] = 1;
$DADOS[1][1]["tA"] = 2;

$DADOS[1][2] = array();
$DADOS[1][2]['nome'] = "DOG EARS";
$DADOS[1][2]['disciplina'] = "PROJETÃO TECH";
$DADOS[1][2]['feedback'] = "Este é para o grupo de Animais, na semana 1";
$DADOS[1][1]['quest'] = 1;
$DADOS[1][2]["tE"] = 3;
$DADOS[1][2]["tI"] = 3;
$DADOS[1][2]["tC"] = 3.01;
$DADOS[1][2]["tQ"] = 1;
$DADOS[1][2]["tS"] = 1;
$DADOS[1][2]["tA"] = 3.01;

$DADOS[1][3] = array();
$DADOS[1][3]['nome'] = "LOCKERS";
$DADOS[1][3]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[1][3]['feedback'] = "Feedback de lockers na praia, semana 1 também";
$DADOS[1][1]['quest'] = 1;
$DADOS[1][3]["tE"] = 0.5;
$DADOS[1][3]["tI"] = 0.5;
$DADOS[1][3]["tC"] = 2;
$DADOS[1][3]["tQ"] = 2;
$DADOS[1][3]["tS"] = 2;
$DADOS[1][3]["tA"] = 3;



$DADOS[2] = array();

$DADOS[2][1] = array();
$DADOS[2][1]['nome'] = "MUSEUM MYSTERY / ATRATIVIDADE DE MUSEUS";
$DADOS[2][1]['disciplina'] = "PROJETÃO TECH";
$DADOS[2][1]['feedback'] = "Esse pessoal de Museu tá fazendo um troço bacana, semana 2";
$DADOS[2][1]['quest'] = 2;
$DADOS[2][1]["tE"] = 0;
$DADOS[2][1]["tI"] = 0;
$DADOS[2][1]["tC"] = 0;
$DADOS[2][1]["tQ"] = 0;
$DADOS[2][1]["tS"] = 0;
$DADOS[2][1]["tA"] = 0;

$DADOS[2][2] = array();
$DADOS[2][2]['nome'] = "DOG EARS";
$DADOS[2][2]['disciplina'] = "PROJETÃO TECH";
$DADOS[2][2]['feedback'] = "O pessoal vai criar uma touca, que loucura essa semana 2!";
$DADOS[2][3]['quest'] = 2;
$DADOS[2][2]["tE"] = 0;
$DADOS[2][2]["tI"] = 0;
$DADOS[2][2]["tC"] = 0;
$DADOS[2][2]["tQ"] = 0;
$DADOS[2][2]["tS"] = 0;
$DADOS[2][2]["tA"] = 0;

$DADOS[2][3] = array();
$DADOS[2][3]['nome'] = "LOCKERS";
$DADOS[2][3]['disciplina'] = "ECONOMIA CRIATIVA";
$DADOS[2][3]['feedback'] = "Eu sei que está aparecendo Economia Criativa na semana 2...";
$DADOS[2][3]['quest'] = 2;
$DADOS[2][3]["tE"] = 0;
$DADOS[2][3]["tI"] = 0;
$DADOS[2][3]["tC"] = 3.01;
$DADOS[2][3]["tQ"] = 1;
$DADOS[2][3]["tS"] = 2;
$DADOS[2][3]["tA"] = 3;




for ($k=1; $k <= count($DADOS[1]); $k++ ) {

echo "<div id='grupo".$k."' class='card'>";

echo "<svg class='grafico' viewBox='0 0 402 402' xmlns='http://www.w3.org/2000/svg'>";

echo "<polygon id='T".$k."tE' points='0,200 100,0 200,200 0,200' class='verde' />";
echo "<polygon id='T".$k."tI' points='100,0 200,200 300,0 100,0' class='amarelo' /> ";
echo "<polygon id='T".$k."tC' points='200,200 300,0 400,200 200,200' class='vermelho' /> ";
echo "<polygon id='T".$k."tQ' points='0,200 100,400 200,200 0,200' class='na' /> ";
echo "<polygon id='T".$k."tS' points='100,400 200,200 300,400 100,400' class='na' /> ";
echo "<polygon id='T".$k."tA' points='200,200 300,400 400,200 200,200' class='na' /> ";

echo "<polygon id='G".$k."tE' points='50,200 125,50 200,200 50,200' class='na' /> ";
echo "<polygon id='G".$k."tI' points='125,50 200,200 275,50 125,50' class='verde' /> ";
echo "<polygon id='G".$k."tC' points='200,200 275,50 350,200 200,200' class='verde' /> ";
echo "<polygon id='G".$k."tQ' points='50,200 125,350 200,200 50,200' class='vermelho' /> ";
echo "<polygon id='G".$k."tS' points='275,350 200,200 125,350 275,350' class='verde' /> ";
echo "<polygon id='G".$k."tA' points='200,200 275,350 350,200 200,200' class='verde' /> ";

echo "<text x='75' y='140' class='criterio'>ESCUTA</text> ";
echo "<text x='165' y='70' class='criterio'>INOVAÇÃO</text> ";
echo "<text x='250' y='140' class='criterio'>COMUNICAÇÃO</text> ";
echo "<text x='65' y='260' class='criterio'>QUALIDADE</text> ";
echo "<text x='170' y='335' class='criterio'>SINERGIA</text> ";
echo "<text x='250' y='260' class='criterio'>APRENDIZADO</text> ";
echo "<text x='200' y='195' text-anchor='middle' class='semana' id='G".$k."semanalistada'></text> ";
echo "<text x='200' y='225' text-anchor='middle' class='semana' id='G".$k."questlistada'>QUEST #9</text> ";
echo "</svg>";

echo "<p class='projetaotype' id='G".$k."nomedisciplina'>PROJETÃO TECH</p>";

echo "<p class='nometrabalho' id='G".$k."nometrabalho'></p>";

echo "<p class='feedback' id='G".$k."feedb'>Apenas um feedback registrado para os grupos para que eles saibam o que fazer nesta avaliação.</p>";

echo "</div>";

}

?>
















<script>

    colors = { bom: 'green', medio: '#cc6600', ruim: '#cc0000', na: 'grey'};


    json = { 

        <?php

            

            for ($cs = 1; $cs <= count($DADOS); $cs++) {

                echo " semana".$cs.": {";

                    for ($grp = 1; $grp <= count($DADOS[1]); $grp++) {

                        echo " G".$grp.": {";

                        echo " nome: '".$DADOS[$cs][$grp]['nome']."',";
                        echo " disciplina: '".$DADOS[$cs][$grp]['disciplina']."',";
                        echo " feedback: '".$DADOS[$cs][$grp]['feedback']."',";
                        echo " quest: '".$DADOS[$cs][$grp]['quest']."',";
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

                if ($cs < count($DADOS[1]) - 1) { echo ","; }

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



$( document ).ready(function() {
  

    for (g = 1; g< <?php echo count($DADOS[1])+1; ?> ; g++) {
    
        quantSemanas = 0;    

            for( s = 1; s < <?php echo count($DADOS)+1; ?>; s++) {

                $("#G" + g + "nometrabalho").html(json['semana'+s]['G'+g]['nome']);
                $("#G" + g + "semanalistada").html("SEMANA " + s);
                $("#G" + g + "questlistada").html("QUEST #" + json['semana'+s]['G'+g]['quest']);
                $("#G" + g + "nomedisciplina").html(json['semana'+s]['G'+g]['disciplina']);
                $("#G" + g + "feedb").html(json['semana'+s]['G'+g]['feedback']);

            quantSemanas++;    

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
            }


        }


        
        // tE
             
            
            if ((somatE[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tE").css("fill", colors['ruim']);
            }
            if ((somatE[g]/quantSemanas) > 1 && (somatE[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tE").css("fill", colors['medio']);
            }
            if ((somatE[g]/quantSemanas) > 2 && (somatE[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tE").css("fill", colors['bom']);
            }
            if ((somatE[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tE").css("fill", colors['na']);
            }

            // tI
            
            if ((somatI[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tI").css("fill", colors['ruim']);
            }
            if ((somatI[g]/quantSemanas) > 1 && (somatI[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tI").css("fill", colors['medio']);
            }
            if ((somatI[g]/quantSemanas) > 2 && (somatI[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tI").css("fill", colors['bom']);
            }
            if ((somatI[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tI").css("fill", colors['na']);
            }

            // tC
            
            if ((somatC[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tC").css("fill", colors['ruim']);
            }
            if ((somatC[g]/quantSemanas) > 1 && (somatC[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tC").css("fill", colors['medio']);
            }
            if ((somatC[g]/quantSemanas) > 2 && (somatC[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tC").css("fill", colors['bom']);
            }
            if ((somatC[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tC").css("fill", colors['na']);
            }

            // tQ
            
            if ((somatQ[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tQ").css("fill", colors['ruim']);
            }
            if ((somatQ[g]/quantSemanas) > 1 && (somatQ[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tQ").css("fill", colors['medio']);
            }
            if ((somatQ[g]/quantSemanas) > 2 && (somatQ[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tQ").css("fill", colors['bom']);
            }
            if ((somatQ[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tQ").css("fill", colors['na']);
            }

            // tS
            
            if ((somatS[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tS").css("fill", colors['ruim']);
            }
            if ((somatS[g]/quantSemanas) > 1 && (somatS[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tS").css("fill", colors['medio']);
            }
            if ((somatS[g]/quantSemanas) > 2 && (somatS[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tS").css("fill", colors['bom']);
            }
            if ((somatS[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tS").css("fill", colors['na']);
            }


            // tA
            
            if ((somatA[g]/quantSemanas) <= 1 ) {
                $("#T" + g + "tA").css("fill", colors['ruim']);
            }
            if ((somatA[g]/quantSemanas) > 1 && (somatA[g]/quantSemanas) <= 2 ) {
                $("#T" + g + "tA").css("fill", colors['medio']);
            }
            if ((somatA[g]/quantSemanas) > 2 && (somatA[g]/quantSemanas) <= 3 ) {
                $("#T" + g + "tA").css("fill", colors['bom']);
            }
            if ((somatA[g]/quantSemanas) > 3 ) {
                $("#T" + g + "tA").css("fill", colors['na']);
            }


    }

});

</script>

</body>