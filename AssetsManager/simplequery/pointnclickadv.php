<?php
header('Access-Control-Allow-Origin: *');


// SETUP VARIABLES ---------------------------------------------------------------------------------

$dbaddress = "localhost";
$dbusername = "";
$dbpassword = "";
$sqldatabase = "ranoyaco_ams";

// SETUP VARIABLES ---------------------------------------------------------------------------------

$filtros = explode(",", $_GET['filter']);
$inclusoes = explode(",", $_GET['incluir']);
$inclusoesgenero = explode(",", $_GET['genero']);
$from = $_GET['from'];
$to = $_GET['to'];
$categoria = $_GET['cat'];
$contalinhas = $_GET['count'];
$publisher = $_GET['publisher'];
$produto = $_GET['produto'];
$anoinit = $_GET['anoinicial'];
$anoend = $_GET['anofinal'];
$ordem = "ASC";
if ($_GET['ordenacao'] != NULL && $_GET['ordenacao'] != "") {
  $ordem = "DESC";
}

$queryadd = "";
$queryaddgen = "";
$querywhere = "";
$i = 0;

$result = array();
$ri = 0;

if ($_GET['filter']) {

  $querywhere = $querywhere . " WHERE ";

  while ($filtros[$i]) {

    $querywhere = $querywhere . $filtros[$i] . "='X'";

    if ($filtros[$i + 1]) {

      $querywhere = $querywhere . " AND ";
    }

    $i++;
  }
}

if ($_GET['serial'] == "produto") {

  $querywhere = $querywhere . " AND produto<>'' ";
}

if ($_GET['serial'] == "singular") {

  $querywhere = $querywhere . " AND produto='' ";
}



if ($_GET['incluir'] != "" && $_GET['incluir'] != NULL) {

  $r = 0;

  while ($inclusoes[$r]) {

    $queryadd = $queryadd . $inclusoes[$r] . "<>''";

    if ($inclusoes[$r + 1]) {

      $queryadd = $queryadd . " OR ";
    }

    $r++;
  }








  $pos = strrpos($querywhere, "WHERE");
  if ($pos === false) {
    $querywhere = $querywhere . " WHERE ( " . $queryadd . " ) ";
  } else {
    $querywhere = $querywhere . " AND ( " . $queryadd . " ) ";
  }
}





if ($_GET['genero'] != "" && $_GET['genero'] != NULL) {

  $gr = 0;

  while ($inclusoesgenero[$gr]) {

    $queryaddgen = $queryaddgen . $inclusoesgenero[$gr] . "='X'";

    if ($inclusoesgenero[$gr + 1]) {

      $queryaddgen = $queryaddgen . " OR ";
    }

    $gr++;
  }



  $pos = strrpos($querywhere, "WHERE");
  if ($pos === false) {
    $querywhere = $querywhere . " WHERE ( " . $queryaddgen . " ) ";
  } else {
    $querywhere = $querywhere . " AND ( " . $queryaddgen . " ) ";
  }
}







if ($anoinit != NULL && $anoinit != "" && $anoend != NULL && $anoend != "") {

  $pos = strrpos($querywhere, "WHERE");
  if ($pos === false) {
    $querywhere = $querywhere . " WHERE ano >= " . $anoinit . " AND ano <= " . $anoend;
  } else {
    $querywhere = $querywhere . " AND ano >= " . $anoinit . " AND ano <= " . $anoend;
  }
}

if ($publisher != NULL && $publisher != "") {

  $pos = strrpos($querywhere, "WHERE");
  if ($pos === false) {
    $querywhere = $querywhere . " WHERE publisher = '" . $publisher . "'";
  } else {
    $querywhere = $querywhere . " AND publisher = '" . $publisher . "'";
  }
}

if ($produto != NULL && $produto != "") {

  $pos2 = strrpos($querywhere, "WHERE");
  if ($pos2 === false) {
    $querywhere = $querywhere . " WHERE produto = '" . $produto . "'";
  } else {
    $querywhere = $querywhere . " AND produto = '" . $produto . "'";
  }
}


if ($_GET['to']) {

  $querywhere = $querywhere . " LIMIT " . ($_GET['to'] - $_GET['from']);
}


if ($_GET['from']) {

  if ($_GET['to']) {

    $querywhere = $querywhere . " OFFSET " . $_GET['from'];
  } else {

    $querywhere = $querywhere . " LIMIT 999999 OFFSET " . $_GET['from'];
  }
}





// $noventrada = json_decode($xpto,true);


// SEND QUERY
function sendQuery($q, $dbaddress, $dbusername, $dbpassword, $sqldatabase)
{

  global $categoria, $contalinhas;

  //echo $q . "<br><br>";

  // Create connection
  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

  // Check connection
  if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
  }
  //echo "<br>Connected successfully<br>";

  $response = mysqli_query($conn, $q);

  if ($response) {
    //echo "<br>Query successfully executed<br>";
  } else {
    echo "<br>Error in query: " . mysqli_error($conn) . "<br>";
  }


  if (mysqli_num_rows($response) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($response)) {

      if ($ri == 0) {
        $s = "0";
      } else {
        $s = $ri;
      }


      // CONDIÇÕES DE RESPOSTA (PRECISA MELHORAR) ---------------------------------------------------

      $result[$s] = array();

      foreach ($row as $key => $value) {

        $result[$s][$key] = html_entity_decode($row[$key]);
      }

      $ri++;
    }
  } else {

    while ($row = mysqli_fetch_assoc($response)) {

      foreach ($row as $key => $value) {

        $result[0] = "";
      }
    }
  }

  echo json_encode($result);

  mysqli_close($conn);
}





// CONDIÇÕES E CONSULTAS (PRECISA MELHORAR) ---------------------------------------------------------

$myquery = "";

$myquery = "SELECT * FROM pointnclickadv " . $querywhere . " ORDER BY ano " . $ordem . ", animation DESC, linearadventure DESC, textoriented DESC, graphicadventure DESC";

sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);
//echo $myquery;


// CONSTROI JSON -----------------------------------------------------------------------------------





// RETORNA AJAX ------------------------------------------------------------------------------------
