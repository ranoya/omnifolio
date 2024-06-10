<?php


// SETUP VARIABLES ---------------------------------------------------------------------------------

// \S15 SERVICOS\SpreadsheetSQLMirror
$googleScriptServiceURL = "https://script.google.com/macros/s/AKfycby2450GZLd3cMHbD23ABzM3uLHMdD0WTDPpQfXox7JPR9OcZhk/exec";
$googleSpreadsheetURL = "https://docs.google.com/spreadsheets/d/1QOwEI88l6n1qftDaVBuTkIpebkaezywKncoKKJ_bMxI/edit";
$googleSpreadsheetTableName = "CALENDARIO";
$sqldatabase = "lacombr_projetao";
$cellStartingColNames = "A1";
$cellStartingDataTypes = "A2";
$cellStartingDataItself = "A4";
$dbusername = "lacombr_ranoyams";
$dbaddress = "localhost";
$dbpassword = "theHelix64";




// SETUP VARIABLES ---------------------------------------------------------------------------------



// COMUNICATION FUNCTION
function ajax($url){
 $ch = curl_init($url);
  //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($post));
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  /* curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',                
    'Content-Length: ' . strlen(json_encode($post)))      
   ); */
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}

// SEND QUERY
function sendQuery($q,$dbaddress, $dbusername, $dbpassword, $sqldatabase) {
  
  // Create connection
  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

  // Check connection
  if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
  }
  echo "<br>Connected successfully<br>";

  if (mysqli_multi_query($conn,$q)) {
    echo "<br>Query successfully executed<br>";
    } else {
    echo "<br>Error in query: " . mysqli_error($conn) . "<br>";
    }

  mysqli_close($conn);
  
  
}


function executa() {

  global $googleScriptServiceURL, $googleSpreadsheetURL, $googleSpreadsheetTableName, $sqldatabase, $cellStartingColNames, $cellStartingDataTypes, $cellStartingDataItself, $dbaddress, $dbusername, $dbpassword;

// STATEMENT CONSTRUCTOR
  $serviceurl = $googleScriptServiceURL . '?';
  
  $serviceurl = $serviceurl . "sheetname=" . $googleSpreadsheetTableName;
  $serviceurl = $serviceurl . "&colnamesstart=" . $cellStartingColNames;
  $serviceurl = $serviceurl . "&datatypesstart=" . $cellStartingDataTypes;
  $serviceurl = $serviceurl . "&datastart=" . $cellStartingDataItself;
  $serviceurl = $serviceurl . "&sheeturl=" . $googleSpreadsheetURL;
 
  $xpto = ajax($serviceurl);
  $noventrada = json_decode($xpto,true);

$myquery = "DROP TABLE IF EXISTS " . $googleSpreadsheetTableName . ";";

echo "<br><br>";
echo $myquery;
echo "<br><br>";
sendQuery($myquery,$dbaddress,$dbusername,$dbpassword,$sqldatabase);

$myquery = "CREATE TABLE " . $googleSpreadsheetTableName . " (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, ";

  for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {
    
    $myquery = $myquery . $noventrada['headers'][0][$colunas] . " " . $noventrada['types'][0][$colunas] . ", ";
    
  }

  $myquery = $myquery . $noventrada['headers'][0][$noventrada['ncolunas']] . " " . $noventrada['types'][0][$noventrada['ncolunas']] . ");";

  echo "<br><br>";
  echo $myquery;
  echo "<br><br>";
sendQuery($myquery,$dbaddress,$dbusername,$dbpassword,$sqldatabase);

$myquery = "";
$linhas = 0;
while ($noventrada['data'][$linhas]) {

  $myquery = "";

  $myquery = $myquery . "INSERT INTO " . $googleSpreadsheetTableName . " (";

  for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {
    
    $myquery = $myquery . $noventrada['headers'][0][$colunas] . ", ";

  }

  $myquery = $myquery . $noventrada['headers'][0][$noventrada['ncolunas']] . ") VALUES (";

 

  for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {


    if ($noventrada['types'][0][$colunas] == "DATE") {

                          $myquery = $myquery . "'" . substr($noventrada['data'][$linhas][$colunas], 0, 10) . "', ";


                        } else {

                          $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$colunas], ENT_QUOTES) . "', ";


                        }
    
    

  }


  if ($noventrada['types'][0][$colunas] == "DATE") {

                        $myquery = $myquery . "'" .  substr($noventrada['data'][$linhas][$noventrada['ncolunas']], 0, 10) . "');";

                      } else {

                        $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$noventrada['ncolunas']], ENT_QUOTES) . "');";


                      }


  echo "<br><br>";
  echo $myquery;

  sendQuery($myquery,$dbaddress,$dbusername,$dbpassword,$sqldatabase);
  
  $linhas++;

}


}


executa();


function snapshot() {

  $disciplina = array();

  $soma = 0.1;
  $periodo = date("n");

  if ($periodo > 7) { 

      $soma = 0.2; 

    } else {

      $soma = 0.1;

    }

  $hoje = strval(date("Y-m-j", strtotime("-1 days")));

$turma = intval(date("Y")) + $soma;


  global $googleScriptServiceURL, $googleSpreadsheetURL, $googleSpreadsheetTableName, $sqldatabase, $cellStartingColNames, $cellStartingDataTypes, $cellStartingDataItself, $dbaddress, $dbusername, $dbpassword;


  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

  if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

  $q = "SELECT * FROM CALENDARIO WHERE TURMA=". $turma;

  $qreturn = mysqli_query($conn, $q);

  $quantasdisciplinas = 0;
  $qualavaliacao = "";

  if ($qreturn) {


          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {

              $disciplina[$quantasdisciplinas] = $row['DISCIPLINA'];
              $quantasdisciplinas++;

              foreach ($row as $key => $value) {

                if($value == $hoje) {

                  $qualavaliacao = substr($key,2);
                  $grid = 1;

                  //echo $qualavaliacao;

                  $serviceurl = $googleScriptServiceURL . '?';
  
                  $serviceurl = $serviceurl . "sheetname=GRUPOS";
                  $serviceurl = $serviceurl . "&colnamesstart=" . $cellStartingColNames;
                  $serviceurl = $serviceurl . "&datatypesstart=" . $cellStartingDataTypes;
                  $serviceurl = $serviceurl . "&datastart=" . $cellStartingDataItself;
                  $serviceurl = $serviceurl . "&sheeturl=" . $googleSpreadsheetURL;
 
                  $xpto = ajax($serviceurl);
                  $noventrada = json_decode($xpto,true);

                  //echo $xpto;

                  $myquery = "";
                  $linhas = 0;

                  

                  while ($noventrada['data'][$linhas]) {

                    
                    

                    if(htmlentities($noventrada['data'][$linhas][1]) == urldecode($row['DISCIPLINA'])) {


                      $myquery = "";

                      $myquery = $myquery . "INSERT INTO GRUPOS (TURMA, AVALIACAO, GRUPOID, ";

                      for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {
    
                        $myquery = $myquery . $noventrada['headers'][0][$colunas] . ", ";

                      }

                      $myquery = $myquery . $noventrada['headers'][0][$noventrada['ncolunas']] . ") VALUES (";
                      

                      $myquery = $myquery . $turma . ", " . $qualavaliacao . ", " . $grid . ", ";

                      for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {


                        if ($noventrada['types'][0][$colunas] == "DATE") {

                          $myquery = $myquery . "'" . substr($noventrada['data'][$linhas][$colunas], 0, 10) . "', ";

                        } else {

                          $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$colunas], ENT_QUOTES) . "', ";

                        }

                      }

                      if ($noventrada['types'][0][$colunas] == "DATE") {

                        $myquery = $myquery . "'" .  substr($noventrada['data'][$linhas][$noventrada['ncolunas']], 0, 10) . "');";

                      } else {

                        $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$noventrada['ncolunas']], ENT_QUOTES) . "');";

                      }
                      
                      echo "<br><br>";
                      
                      echo $myquery."<br>";
                      sendQuery($myquery,$dbaddress,$dbusername,$dbpassword,$sqldatabase);
                    
                    }

                    $grid++;
                    
                    $linhas++;

                  }






                }


              }
              

            }
          } else {
            
          }

  }

 

}




snapshot();
  






?>