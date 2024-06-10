<?php


// SETUP VARIABLES ---------------------------------------------------------------------------------

// \S15 SERVICOS\SpreadsheetSQLMirror
$googleScriptServiceURL = "https://script.google.com/macros/s/AKfycby2450GZLd3cMHbD23ABzM3uLHMdD0WTDPpQfXox7JPR9OcZhk/exec";
$dbaddress = "localhost";
$dbusername = "";
$dbpassword = "";

// SETUP VARIABLES ---------------------------------------------------------------------------------



// COMUNICATION FUNCTION
function ajax($url)
{
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
function sendQuery($q, $dbaddress, $dbusername, $dbpassword, $sqldatabase)
{

  // Create connection
  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

  // Check connection
  if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
  }
  echo "<br>Connected successfully<br>";

  if (mysqli_multi_query($conn, $q)) {
    echo "<br>Query successfully executed<br>";
  } else {
    echo "<br>Error in query: " . mysqli_error($conn) . "<br>" . $q . "<br>";
  }

  mysqli_close($conn);
}

// DEPRECATED
/* 
function calendario(){

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

}
*/


function executa()
{

  global $googleScriptServiceURL, $googleSpreadsheetURL, $googleSpreadsheetTableName, $sqldatabase, $cellStartingColNames, $cellStartingDataTypes, $cellStartingDataItself, $dbaddress, $dbusername, $dbpassword;

  // STATEMENT CONSTRUCTOR
  $serviceurl = $googleScriptServiceURL . '?';

  $serviceurl = $serviceurl . "sheetname=" . $googleSpreadsheetTableName;
  $serviceurl = $serviceurl . "&colnamesstart=" . $cellStartingColNames;
  $serviceurl = $serviceurl . "&datatypesstart=" . $cellStartingDataTypes;
  $serviceurl = $serviceurl . "&datastart=" . $cellStartingDataItself;
  $serviceurl = $serviceurl . "&sheeturl=" . $googleSpreadsheetURL;

  $xpto = ajax($serviceurl);
  $noventrada = json_decode($xpto, true);

  $myquery = "DROP TABLE IF EXISTS " . $googleSpreadsheetTableName . ";";

  if ($_GET['debug'] == '$googleSpreadsheetTableName') {
    echo "<br><br>";
    echo $myquery;
    echo "<br><br>";
  }


  sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);

  $myquery = "CREATE TABLE " . $googleSpreadsheetTableName . " (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, ";

  for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {

    $myquery = $myquery . $noventrada['headers'][0][$colunas] . " " . $noventrada['types'][0][$colunas] . ", ";
  }

  $myquery = $myquery . $noventrada['headers'][0][$noventrada['ncolunas']] . " " . $noventrada['types'][0][$noventrada['ncolunas']] . ");";


  echo "<br><br>";
  echo $googleSpreadsheetTableName;
  echo "<br><br>";


  if ($_GET['debug'] == '$googleSpreadsheetTableName') {

    echo "<br><br>";
    echo $myquery;
    echo "<br><br>";
  }

  sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);

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

      if ($noventrada['types'][0][$colunas] == "INT" and ($noventrada['data'][$linhas][$colunas] == "" or $noventrada['data'][$linhas][$colunas] == NULL)) {

        $noventrada['data'][$linhas][$colunas] = 0;
      }


      if ($noventrada['types'][0][$colunas] == "DATE") {

        if ($noventrada['data'][$linhas][$colunas] == "" or $noventrada['data'][$linhas][$colunas] == NULL) {

          $noventrada['data'][$linhas][$colunas] = "2000-01-01";
        }

        $myquery = $myquery . "'" . substr($noventrada['data'][$linhas][$colunas], 0, 10) . "', ";
      } else {

        $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$colunas], ENT_QUOTES) . "', ";
      }
    }

    if ($noventrada['types'][0][$colunas] == "INT" and ($noventrada['data'][$linhas][$noventrada['ncolunas']] == "" or $noventrada['data'][$linhas][$noventrada['ncolunas']] == NULL)) {

      $noventrada['data'][$linhas][$noventrada['ncolunas']] == 0;
    }


    if ($noventrada['types'][0][$colunas] == "DATE") {

      if ($noventrada['data'][$linhas][$noventrada['ncolunas']] == "" or $noventrada['data'][$linhas][$noventrada['ncolunas']] == NULL) {

        $noventrada['data'][$linhas][$noventrada['ncolunas']] = "2000-01-01";
      }


      $myquery = $myquery . "'" .  substr($noventrada['data'][$linhas][$noventrada['ncolunas']], 0, 10) . "');";
    } else {

      $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$noventrada['ncolunas']], ENT_QUOTES) . "');";
    }

    if ($_GET['debug'] == '$googleSpreadsheetTableName') {

      echo "<br><br>";
      echo $myquery;
      echo "<br><br>";
    }

    sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);

    $linhas++;
  }
}





// EDU

$googleSpreadsheetURL = "https://docs.google.com/spreadsheets/d/1Gya-umpS7Zh3v8qA8OUCFsb0yXG9DjnnYEmyiwF4a3Y/edit#gid=550894228";
$sqldatabase = "ranoyaco_edu";
$cellStartingColNames = "A3";
$cellStartingDataTypes = "A4";
$cellStartingDataItself = "A7";

$googleSpreadsheetTableName = "Diagnosticos";
executa();

$googleSpreadsheetTableName = "Atividades";
executa();

$googleSpreadsheetTableName = "Projetos";
executa();

$googleSpreadsheetTableName = "TrabalhosAlunos";
executa();

/*
$googleSpreadsheetTableName = "Calendario";
executa();
*/

$cellStartingColNames = "A2";
$cellStartingDataTypes = "A3";
$cellStartingDataItself = "A6";
$googleSpreadsheetTableName = "Ensino";
executa();
