<?php


$DADOS = array();
$DADOS[1] = array();

$DADOS[1][1] = array();
$DADOS[1][1]['nome'] = "MUSEUM MYSTERY / ATRATIVIDADE DE MUSEUS";
$DADOS[1][1]["tE"] = 2;
$DADOS[1][1]["tI"] = 1;
$DADOS[1][1]["tC"] = 3.01;
$DADOS[1][1]["tQ"] = 2;
$DADOS[1][1]["tS"] = 1;
$DADOS[1][1]["tA"] = 2;

$DADOS[1][2] = array();
$DADOS[1][2]['nome'] = "DOG EARS";
$DADOS[1][2]["tE"] = 3;
$DADOS[1][2]["tI"] = 3;
$DADOS[1][2]["tC"] = 3.01;
$DADOS[1][2]["tQ"] = 1;
$DADOS[1][2]["tS"] = 1;
$DADOS[1][2]["tA"] = 3.01;

$DADOS[1][3] = array();
$DADOS[1][3]['nome'] = "LOCKERS";
$DADOS[1][3]["tE"] = 0.5;
$DADOS[1][3]["tI"] = 0.5;
$DADOS[1][3]["tC"] = 3.01;
$DADOS[1][3]["tQ"] = 2;
$DADOS[1][3]["tS"] = 2;
$DADOS[1][3]["tA"] = 3;


$DADOS[2] = array();

$DADOS[2][1] = array();
$DADOS[2][1]['nome'] = "MUSEUM MYSTERY / ATRATIVIDADE DE MUSEUS";
$DADOS[2][1]["tE"] = 0;
$DADOS[2][1]["tI"] = 0;
$DADOS[2][1]["tC"] = 0;
$DADOS[2][1]["tQ"] = 0;
$DADOS[2][1]["tS"] = 0;
$DADOS[2][1]["tA"] = 0;

$DADOS[2][2] = array();
$DADOS[2][2]['nome'] = "DOG EARS";
$DADOS[2][2]["tE"] = 0;
$DADOS[2][2]["tI"] = 0;
$DADOS[2][2]["tC"] = 0;
$DADOS[2][2]["tQ"] = 0;
$DADOS[2][2]["tS"] = 0;
$DADOS[2][2]["tA"] = 0;

$DADOS[2][3] = array();
$DADOS[2][3]['nome'] = "LOCKERS";
$DADOS[2][3]["tE"] = 0;
$DADOS[2][3]["tI"] = 0;
$DADOS[2][3]["tC"] = 0;
$DADOS[2][3]["tQ"] = 0;
$DADOS[2][3]["tS"] = 0;
$DADOS[2][3]["tA"] = 0;


echo "{";


            for ($cs = 1; $cs <= count($DADOS); $cs++) {

                echo " semana".$cs.": {";

                    for ($grp = 1; $grp <= count($DADOS[1]); $grp++) {

                        echo " G".$grp.": {";

                        echo " nome: '".$DADOS[$cs][$grp]['nome']."',";
                        echo " tE: '".$DADOS[$cs][$grp]['tE']."',";
                        echo " tI: '".$DADOS[$cs][$grp]['tI']."',";
                        echo " tC: '".$DADOS[$cs][$grp]['tC']."',";
                        echo " tQ: '".$DADOS[$cs][$grp]['tQ']."',";
                        echo " tS: '".$DADOS[$cs][$grp]['tS']."',";
                        echo " tA: '".$DADOS[$cs][$grp]['tA']."'";


                        echo "}";

                        if ($grp < count($DADOS[1]) ) { echo ","; }

                    }


                echo "}";

                if ($cs < count($DADOS[1])-1) { echo ","; }


            }


echo "};";



?>