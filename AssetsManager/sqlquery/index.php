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
$surpriseme = false;

$querywhere = "";
$i = 0;

$result = array();
$ri = 0;

if ($_GET['filter']) {

  $querywhere = $querywhere . " WHERE ";

  while ($filtros[$i]) {

    if ($filtros[$i] != "surpriseme") {

      $querywhere = $querywhere . $filtros[$i] . "='X'";

      if ($filtros[$i + 1]) {

        $querywhere = $querywhere . " AND ";
      }
    } else {

      $surpriseme = true;
    }

    $i++;
  }

  if ($surpriseme) {

    $querywhere = $querywhere . " ORDER BY rand() LIMIT 200";
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

      $result['index' . $s] = intval(html_entity_decode($row["id"]));

      foreach ($row as $key => $value) {

        $result[$key . $s] = html_entity_decode($row[$key]);
      }

      // excessões
      if ($categoria == "bibliografia") {
        $result['titulo' . $s] = html_entity_decode($row["autor"]) . ". " . html_entity_decode($row["titulo"]);
      }

      //$result['titulo'.$s] = html_entity_decode($row["titulo"]);
      //$result['link'.$s] = html_entity_decode($row["link"]);
      //$result['resumo'.$s] = html_entity_decode($row["resumo"]);
      //$result['thumb'.$s] = html_entity_decode($row["thumb"]);

      $ri++;

      //echo "id: " . $row["id"]. " - Titulo: " . $row["titulo"]. " - Link: " . $row["link"]. "<br>";
    }
  } else {

    while ($row = mysqli_fetch_assoc($response)) {

      foreach ($row as $key => $value) {

        $result[$key . '0'] = "";
      }
    }

    $result['index0'] = "";
  }

  echo json_encode($result);

  mysqli_close($conn);
}





// CONDIÇÕES E CONSULTAS (PRECISA MELHORAR) ---------------------------------------------------------

$myquery = "";


if ($categoria == "bookmarks") {


  $myquery = "SELECT id, titulo, link, thumb, resumo FROM " . $categoria . $querywhere;
}


if ($categoria == "startmenu") {

  $myquery = "SELECT id, titulo, link FROM " . $categoria . $querywhere;
}


if ($categoria == "artefatos") {

  $myquery = "SELECT id, link FROM " . $categoria . $querywhere;
}


if ($categoria == "bibliografia") {

  $myquery = "SELECT id, autor, titulo, link, cidade, ano, editora, notes FROM " . $categoria . $querywhere . " ORDER BY autor";
}

if ($categoria == "ProducaoDI") {
  $categoria = "Producao";

  $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY autor";
}

if ($categoria == "workshops") {

  $myquery = "SELECT * FROM " . $categoria . $querywhere;
}


if ($categoria == "posts") {

  $myquery = "SELECT id, titulo, link, resumo FROM " . $categoria . $querywhere;
}

if ($categoria == "clipping") {

  $myquery = "SELECT id, link, CONCAT(fonte, ', ', ano, ' | ', titulo) AS titulo FROM " . $categoria . $querywhere;
}

if ($categoria == "alumni") {

  $myquery = "SELECT * FROM " . $categoria . $querywhere . "ORDER BY referencia";
}

if ($categoria == "alumniproj") {

  $myquery = "SELECT * FROM " . $categoria . $querywhere;
}

if ($categoria == "spaces") {

  $myquery = "SELECT id, link FROM " . $categoria . $querywhere;
}

if ($categoria == "imagebank") {

  $myquery = "SELECT id, titulo, link FROM " . $categoria . $querywhere;
}

if ($categoria == "portfolio") {

  $myquery = "SELECT id, titulo, previewimage, link, ano, aspect FROM " . $categoria . $querywhere;
}


if ($categoria == "pinboard") {

  $categoria = "artefatos";

  if (!$_GET['filter']) {

    //$myquery = "SELECT id, titulo, link, aspect FROM " . $categoria . " ORDER BY rand() LIMIT 200";

    $myquery = "SELECT id, titulo, link FROM " . $categoria . " WHERE publik='X' ORDER BY rand() LIMIT 200";
  } else {

    //$myquery = "SELECT id, titulo, link, aspect FROM " . $categoria . $querywhere;

    $myquery = "SELECT id, titulo, link FROM " . $categoria . $querywhere;
  }
}

if ($categoria == "ferramentas") {

  $myquery = "SELECT * FROM " . $categoria . $querywhere;
}


if ($contalinhas) {

  $myquery = "SELECT COUNT(*) FROM " . $categoria . $querywhere;
}


sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);



// CONSTROI JSON -----------------------------------------------------------------------------------





// RETORNA AJAX ------------------------------------------------------------------------------------
