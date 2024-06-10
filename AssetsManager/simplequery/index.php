<?php
header('Access-Control-Allow-Origin: *');


// SETUP VARIABLES ---------------------------------------------------------------------------------

$dbaddress = "localhost";
$dbusername = "";
$dbpassword = "";
$sqldatabase = "ranoyaco_ams";

// SETUP VARIABLES ---------------------------------------------------------------------------------

$filtros = explode(",", $_GET['filter']);
$from = $_GET['from'];
$to = $_GET['to'];
$categoria = $_GET['cat'];
$contalinhas = $_GET['count'];

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

      // excessões
      if ($categoria == "bibliografia" || $categoria == "ProducaoDI") {
        $result[$s]['titulo'] = html_entity_decode($row["autor"]) . ". " . html_entity_decode($row["titulo"]);
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


  if ($_GET['count'] != "" | $_GET['count'] != NULL) {

    echo $result[0]["COUNT(*)"];
  } else {

    echo json_encode($result);
  }

  mysqli_close($conn);
}





// CONDIÇÕES E CONSULTAS (PRECISA MELHORAR) ---------------------------------------------------------

$myquery = "";

if ($_GET['surpriseme'] != "" || $_GET['surpriseme'] != NULL) {

  if ($_GET['quantos'] != "" || $_GET['quantos'] != NULL) {
    $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY RAND() LIMIT " . $_GET['quantos'];
  } else {
    $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY RAND()";
  }
} else if ($_GET['count'] != "" || $_GET['count'] != NULL) {

  $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
} else {

  $myquery = "SELECT * FROM " . $categoria . $querywhere;
}


if ($categoria == "bibliografia") {

  if ($_GET['count'] != "" || $_GET['count'] != NULL) {

    $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
  } else {

    $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY autor";
  }
}


if ($categoria == "quotes") {

  if ($_GET['count'] != "" || $_GET['count'] != NULL) {

    $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
  } else {

    $myquery = "SELECT * FROM " . $categoria . " LEFT JOIN bibliografia ON quotes.titulo = bibliografia.titulo" . $querywhere . " ORDER BY bibliografia.autor";
  }
}

if ($categoria == "ProducaoDI") {
  $categoria = "Producao";

  if ($_GET['count'] != "" || $_GET['count'] != NULL) {

    $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
  } else {

    $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY autor";
  }
}

if ($categoria == "ProducaoCompoetica") {
  $categoria = "ProducaoCompoetica";

  if ($_GET['count'] != "" || $_GET['count'] != NULL) {

    $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
  } else {

    $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY titulo";
  }
}



sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);



// CONSTROI JSON -----------------------------------------------------------------------------------





// RETORNA AJAX ------------------------------------------------------------------------------------
