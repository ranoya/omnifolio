
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="defaulttheme.css">

	<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script type='text/javascript' src="NoSleep.min.js"></script>

	<script>

		var noSleep = new NoSleep();
		var wakeLockEnabled = false;

      
      	



		colors = { bom: 'green', medio: '#cc6600', ruim: '#cc0000', na: 'grey'};

		function mudanota(av,grupo,INIT) {

			altera = 0;


			if(av=="E") {

				if (avaliacoesE[grupo] > 3) {
					if (!INIT) { avaliacoesE[grupo] = 1; 
					$("#bE-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bE-G" + grupo).css("background-color", colors['na']);	
					} 

				} else if (avaliacoesE[grupo] > 2 && avaliacoesE[grupo] <=3) {
					if (!INIT) { avaliacoesE[grupo] = 3.01;
					$("#bE-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bE-G" + grupo).css("background-color", colors['bom']);	
					}

				} else if (avaliacoesE[grupo] > 1 && avaliacoesE[grupo] <=2) {

					if (!INIT) { avaliacoesE[grupo] = 3;
					$("#bE-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bE-G" + grupo).css("background-color", colors['medio']);	
					}

				} else if (avaliacoesE[grupo] <=1) {
					if (!INIT) { avaliacoesE[grupo] = 2;
					$("#bE-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bE-G" + grupo).css("background-color", colors['ruim']);	
					}

				}

			}


			if(av=="I") {

				
				if (avaliacoesI[grupo] > 3) {
					if (!INIT) {avaliacoesI[grupo] = 1;
					$("#bI-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bI-G" + grupo).css("background-color", colors['na']);	
					} 

				} else if (avaliacoesI[grupo] > 2 && avaliacoesI[grupo] <=3) {
					if (!INIT) {avaliacoesI[grupo] = 3.01;
					$("#bI-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bI-G" + grupo).css("background-color", colors['bom']);	
					} 

				} else if (avaliacoesI[grupo] > 1 && avaliacoesI[grupo] <=2) {
					if (!INIT) {avaliacoesI[grupo] = 3;
					$("#bI-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bI-G" + grupo).css("background-color", colors['medio']);	
					} 

				} else if (avaliacoesI[grupo] <=1) {
					if (!INIT) {avaliacoesI[grupo] = 2;
					$("#bI-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bI-G" + grupo).css("background-color", colors['ruim']);	
					} 

				}

			}


			if(av=="C") {

				
				if (avaliacoesC[grupo] > 3) {
					if (!INIT) {avaliacoesC[grupo] = 1;
					$("#bC-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bC-G" + grupo).css("background-color", colors['na']);	
					} 

				} else if (avaliacoesC[grupo] > 2 && avaliacoesC[grupo] <=3) {
					if (!INIT) {avaliacoesC[grupo] = 3.01;
					$("#bC-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bC-G" + grupo).css("background-color", colors['bom']);	
					} 

				} else if (avaliacoesC[grupo] > 1 && avaliacoesC[grupo] <=2) {
					if (!INIT) {avaliacoesC[grupo] = 3;
					$("#bC-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bC-G" + grupo).css("background-color", colors['medio']);	
					} 

				} else if (avaliacoesC[grupo] <=1) {
					if (!INIT) {avaliacoesC[grupo] = 2;
					$("#bC-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bC-G" + grupo).css("background-color", colors['ruim']);	
					} 

				}

			}


			if(av=="Q") {

				
				if (avaliacoesQ[grupo] > 3) {
					if (!INIT) {avaliacoesQ[grupo] = 1;
					$("#bQ-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bQ-G" + grupo).css("background-color", colors['na']);	
					} 

				} else if (avaliacoesQ[grupo] > 2 && avaliacoesQ[grupo] <=3) {
					if (!INIT) {avaliacoesQ[grupo] = 3.01;
					$("#bQ-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bQ-G" + grupo).css("background-color", colors['bom']);	
					} 

				} else if (avaliacoesQ[grupo] > 1 && avaliacoesQ[grupo] <=2) {
					if (!INIT) {avaliacoesQ[grupo] = 3;
					$("#bQ-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bQ-G" + grupo).css("background-color", colors['medio']);	
					} 

				} else if (avaliacoesQ[grupo] <=1) {
					if (!INIT) {avaliacoesQ[grupo] = 2;
					$("#bQ-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bQ-G" + grupo).css("background-color", colors['ruim']);	
					} 

				}

			}

			if(av=="S") {

				
				if (avaliacoesS[grupo] > 3) {
					if (!INIT) {avaliacoesS[grupo] = 1;
					$("#bS-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bS-G" + grupo).css("background-color", colors['na']);	
					} 

				} else if (avaliacoesS[grupo] > 2 && avaliacoesS[grupo] <=3) {
					if (!INIT) {avaliacoesS[grupo] = 3.01;
					$("#bS-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bS-G" + grupo).css("background-color", colors['bom']);	
					}

				} else if (avaliacoesS[grupo] > 1 && avaliacoesS[grupo] <=2) {
					if (!INIT) {avaliacoesS[grupo] = 3;
					$("#bS-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bS-G" + grupo).css("background-color", colors['medio']);	
					}

				} else if (avaliacoesS[grupo] <=1) {
					if (!INIT) {avaliacoesS[grupo] = 2;
					$("#bS-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bS-G" + grupo).css("background-color", colors['ruim']);	
					}

				}

			}

			if(av=="A") {

				
				if (avaliacoesA[grupo] > 3) {
					if (!INIT) {avaliacoesA[grupo] = 1;
					$("#bA-G" + grupo).css("background-color", colors['ruim']);
					} else {
					$("#bA-G" + grupo).css("background-color", colors['na']);	
					}

				} else if (avaliacoesA[grupo] > 2 && avaliacoesA[grupo] <=3) {
					if (!INIT) {avaliacoesA[grupo] = 3.01;
					$("#bA-G" + grupo).css("background-color", colors['na']);
					} else {
					$("#bA-G" + grupo).css("background-color", colors['bom']);	
					}

				} else if (avaliacoesA[grupo] > 1 && avaliacoesA[grupo] <=2) {
					if (!INIT) {avaliacoesA[grupo] = 3;
					$("#bA-G" + grupo).css("background-color", colors['bom']);
					} else {
					$("#bA-G" + grupo).css("background-color", colors['medio']);	
					}

				} else if (avaliacoesA[grupo] <=1) {
					if (!INIT) {avaliacoesA[grupo] = 2;
					$("#bA-G" + grupo).css("background-color", colors['medio']);
					} else {
					$("#bA-G" + grupo).css("background-color", colors['ruim']);	
					}

				}

			}

		}


	</script>

</head>

<body>

	<nav><div id="projetaologo"></div><p id="avaliador"><?php $QUEM = $_GET['who']; echo $QUEM; ?></p></nav>
	<div id="loader"></div>
	<div id="locker"><img src="https://assets.ranoya.com/projetao/cadeado.svg" style="width: 60%; height: 60%; margin-top: 20%; margin-left: 20%;"></div>

<?php

	

	echo "<p id='instrucoes'>";
	echo "<br><br><b>[E] Escuta Altruísta </b> - os alunos estão ouvindo o usuário, os entrevistados, os professores? Ou estão tentando forçar um projeto sem respaldo em nada?";
	echo "<br><br><b>[I] Inovação </b> - tem inovação aí, ou é mais do mesmo?";
	echo "<br><br><b>[C] Comunicação </b> - as idéias e propostas estão sendo apresentadas com clareza, com uma boa narrativa e com um encadeamento lógico? Ou está tudo jogado e meio perdido?";
	echo "<br><br><b>[Q] Qualidade </b> - Os alunos estão se esforçando em fazer alguma coisa bem feita? Ou estão tratando o trabalho com pouco capricho e mostrando algo feito da noite para o dia?";
	echo "<br><br><b>[S] Sinergia </b> - o grupo parece estar trabalhando em equipe, com foco, um objetivo comum, com entrosamento, ou parece que metade do grupo não participa do projeto?";
	echo "<br><br><b>[A] Aprendizado </b> - os alunos parecem ter aprendido alguma coisa no processo? parecem ter absorvido algum conceito, tentado aplicar alguma tecnologia, ferramenta ou conhecimento?";
	echo "</p>";



?>

<div id="painel">

<?php

echo "<script>NomesGrupos = new Array();";
echo "avaliacoesE = new Array();";
echo "avaliacoesI = new Array();";
echo "avaliacoesC = new Array();";
echo "avaliacoesQ = new Array();";
echo "avaliacoesS = new Array();";
echo "avaliacoesA = new Array();";
echo "</script>";


		$quantosgrupostotal = 0;

		$dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_projetao";

        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT id, GRUPOID, TURMA, AVALIACAO, Grupo, disciplina, AVE, AVI, AVC, AVQ, AVS, AVA, msgparagrupo FROM GRUPOS WHERE grupo <> '' AND AVALIACAO = 1";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {

            	$quantosgrupostotal++;

            	echo "<div class='nomegrupo'>".$row['Grupo']."</div>";
            	echo "<script>NomesGrupos[".$row['GRUPOID']."] = '".$row['Grupo']."';";
            	echo "avaliacoesE[".$row['GRUPOID']."] = ".$row['AVE'].";";

            	echo "avaliacoesI[".$row['GRUPOID']."] = ".$row['AVI'].";";
            	echo "avaliacoesC[".$row['GRUPOID']."] = ".$row['AVC'].";";
            	echo "avaliacoesQ[".$row['GRUPOID']."] = ".$row['AVQ'].";";
            	echo "avaliacoesS[".$row['GRUPOID']."] = ".$row['AVS'].";";
            	echo "avaliacoesA[".$row['GRUPOID']."] = ".$row['AVA'].";";
            	echo "</script>";

            	echo "<a href=\"javascript:mudanota('E',".$row['GRUPOID'].");\" class='botaonota' id='bE-G".$row['GRUPOID']."'>E</a>";
            	echo "<a href=\"javascript:mudanota('I',".$row['GRUPOID'].");\" class='botaonota' id='bI-G".$row['GRUPOID']."'>I</a>";
            	echo "<a href=\"javascript:mudanota('C',".$row['GRUPOID'].");\" class='botaonota' id='bC-G".$row['GRUPOID']."'>C</a>";
            	echo "<a href=\"javascript:mudanota('Q',".$row['GRUPOID'].");\" class='botaonota' id='bQ-G".$row['GRUPOID']."'>Q</a>";
            	echo "<a href=\"javascript:mudanota('S',".$row['GRUPOID'].");\" class='botaonota' id='bS-G".$row['GRUPOID']."'>S</a>";
            	echo "<a href=\"javascript:mudanota('A',".$row['GRUPOID'].");\" class='botaonota' id='bA-G".$row['GRUPOID']."'>A</a>";
            	echo "<br>";
            	
            	echo "<script>mudanota('E',".$row['GRUPOID'].",'true');";
            	echo "mudanota('I',".$row['GRUPOID'].",true);";
            	echo "mudanota('C',".$row['GRUPOID'].",true);";
            	echo "mudanota('Q',".$row['GRUPOID'].",true);";
            	echo "mudanota('S',".$row['GRUPOID'].",true);";
            	echo "mudanota('A',".$row['GRUPOID'].",true);</script>";

            	}
          } else {
            
            //
          }

          echo "<br><br><br><br><br><br>";

          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }





?>

</div>


<script>


function ajaxit(serviceurl) {
        
            $.ajax({
              url: serviceurl,
              type: 'get',
              cache: false,
              success: function(json) {
             

                console.log(json.success);
                $("#loader").css("display", "none");

       
                
                },
              error: function(xhr, desc, err) {
                console.log(xhr + "\n" + err);
                }
              }); 
          }




gprs = 1;
atualiza = function() {

	
	   if (gprs > <?php echo $quantosgrupostotal ?>) {

	   	gprs = 1;

	   }


	   referenceWork = NomesGrupos[gprs];
       sheeturl = "https://docs.google.com/spreadsheets/d/1QOwEI88l6n1qftDaVBuTkIpebkaezywKncoKKJ_bMxI/edit";
       nomedaplanilha = "AVALIADORES";
       spreadsheetservice = "https://script.google.com/macros/s/AKfycbykTeAwGIogjXzsm_8Xzcky-Nu00lonV0HAdz_6_r3Z6JjFSdY/exec?referencecolumn=1&reference="+referenceWork+"&sheetheaders=1&sheetname="+nomedaplanilha+"&sheeturl="+sheeturl;

       complemento = "";

       complemento = complemento + "&<?php echo $QUEM ?>-E=" + avaliacoesE[gprs];
       complemento = complemento + "&<?php echo $QUEM ?>-I=" + avaliacoesI[gprs];
       complemento = complemento + "&<?php echo $QUEM ?>-C=" + avaliacoesC[gprs];
       complemento = complemento + "&<?php echo $QUEM ?>-Q=" + avaliacoesQ[gprs];
       complemento = complemento + "&<?php echo $QUEM ?>-S=" + avaliacoesS[gprs];
       complemento = complemento + "&<?php echo $QUEM ?>-A=" + avaliacoesA[gprs];

       $("#loader").css("display", "block");
       ajaxit(spreadsheetservice + complemento);

       console.log("enviando grupo" + gprs);

       gprs++;
       
       

}




$( document ).ready(function() {



document.getElementById("locker").addEventListener('click', function() {
        if (!wakeLockEnabled) {
          noSleep.enable(); // keep the screen on!
          wakeLockEnabled = true;
          console.log("NoSleep Locked");
          $("#locker").css("background-color", "violet");
          
        } else {
          noSleep.disable(); // let the screen turn off.
          wakeLockEnabled = false;
          console.log("NoSleep Unlocked");
          $("#locker").css("background-color", "#860073");
        
        
        }
      }, false);



setInterval( atualiza, (1000 * 60 * (3 + (Math.random() * 2)))) ;




});



</script>

</body>


<html>