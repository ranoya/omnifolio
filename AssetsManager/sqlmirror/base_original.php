<?php


// SETUP VARIABLES ---------------------------------------------------------------------------------

$googleScriptServiceURL = "https://script.google.com/macros/s/AKfycby2450GZLd3cMHbD23ABzM3uLHMdD0WTDPpQfXox7JPR9OcZhk/exec";
$googleSpreadsheetURL = "https://docs.google.com/spreadsheets/d/1grsfcsxXCgugfscF3aMzAyWZX_ekFwzsGF8xjbthqXU/edit#gid=416721867";
$googleSpreadsheetTableName = "bookmarks";
$sqldatabase = "lacombr_ams";
$cellStartingColNames = "A2";
$cellStartingDataTypes = "A3";
$cellStartingDataItself = "A6";
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
    echo "<br>Error in query: " . mysqli_error($conn) . "<br>";
  }

  mysqli_close($conn);
}

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

echo "<br><br>";
echo $myquery;
echo "<br><br>";
sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);

$myquery = "CREATE TABLE " . $googleSpreadsheetTableName . " (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, ";

for ($colunas = 0; $colunas < $noventrada['ncolunas']; $colunas++) {

  $myquery = $myquery . $noventrada['headers'][0][$colunas] . " " . $noventrada['types'][0][$colunas] . ", ";
}

$myquery = $myquery . $noventrada['headers'][0][$noventrada['ncolunas']] . " " . $noventrada['types'][0][$noventrada['ncolunas']] . ");";

echo "<br><br>";
echo $myquery;
echo "<br><br>";
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

    $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$colunas], ENT_QUOTES) . "', ";
  }

  $myquery = $myquery . "'" . htmlentities($noventrada['data'][$linhas][$noventrada['ncolunas']], ENT_QUOTES) . "');";

  echo "<br><br>";
  echo $myquery;

  sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);

  $linhas++;
}
