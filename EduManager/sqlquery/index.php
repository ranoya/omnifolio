<?php
header('Access-Control-Allow-Origin: *');


// SETUP VARIABLES ---------------------------------------------------------------------------------

$dbaddress = "localhost";
$dbusername = "";
$dbpassword = "";
$sqldatabase = "ranoyaco_edu";

// SETUP VARIABLES ---------------------------------------------------------------------------------

$filtros = explode(",", $_GET['filter']);
$from = $_GET['from'];
$to = $_GET['to'];
$categoria = $_GET['cat'];
$contalinhas = $_GET['count'];
$findin = $_GET['tgt'];

$querywhere = "";
$i = 0;

$result = array();
$ri = 0;

if ($_GET['filter']) {

  $querywhere = $querywhere . " WHERE ";

  while ($filtros[$i]) {

    $querywhere = $querywhere . $filtros[$i] . "!=''";

    if ($filtros[$i + 1]) {

      $querywhere = $querywhere . " AND ";
    }

    $i++;
  }
}

if ($_GET['turma']) {

  if ($querywhere != "" && $querywhere != NULL) {

    $querywhere = $querywhere . " AND turma='" . $_GET['turma'] . "'";
  } else {

    $querywhere = $querywhere . " WHERE turma='" . $_GET['turma'] . "'";
  }
}

if ($findin) {

  $querywhere = $querywhere . " AND pairing='" . $findin . "'";
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

      $ri++;
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





// CONDIÇÕES E CONSULTAS ---------------------------------------------------------

$myquery = "";

$completa = "";
if ($querywhere == "" || $querywhere == NULL) {
  $completa = " WHERE ";
} else {
  $completa = " AND ";
}


// proxima oferta da disciplina

if ($categoria == "proximaoferta" or $categoria == "PROXIMAOFERTA") {

  $categoria = "Diagnosticos";
  $myquery = "SELECT MAX(oferta) AS oferta FROM " . $categoria . $querywhere;
}

// vagas

if ($categoria == "vagas" or $categoria == "VAGAS") {

  $categoria = "Diagnosticos";
  $myquery = "SELECT MAX(oferta) AS oferta, vagas FROM " . $categoria . $querywhere . "GROUP BY vagas";
}

// Formato

if ($categoria == "formato" or $categoria == "formato") {

  $categoria = "Diagnosticos";
  $myquery = "SELECT MAX(oferta) AS oferta, formato FROM " . $categoria . $querywhere;
}

// diagnósticos

if ($categoria == "changelog" or $categoria == "CHANGELOG") {

  $categoria = "Diagnosticos";
  $myquery = "SELECT id, semestre, formulacao, oferta, prognostico FROM " . $categoria . $querywhere;
}

// calendario

if ($categoria == "calendario" or $categoria == "CALENDARIO") {


  $categoria = "Calendario";
  $myquery = "SELECT * FROM " . $categoria . $querywhere . " ORDER BY dia ASC";
}

if ($categoria == "proximaaula" or $categoria == "PROXIMAAULA") {

  $categoria = "Calendario";
  $myquery = "SELECT * FROM " . $categoria . $querywhere . $completa . " dia > CURDATE() ORDER BY dia ASC LIMIT 1";
}

if ($categoria == "ultimaaula" or $categoria == "ULTIMAAULA") {

  $categoria = "Calendario";
  $myquery = "SELECT * FROM " . $categoria . $querywhere . $completa . " dia < CURDATE() ORDER BY dia DESC LIMIT 1";
}


// datas e documentos de entrega

if ($categoria == "ATIVIDADES" or $categoria == "atividades") {

  $categoria = "Atividades";
  $myquery = "SELECT id, avaliacao, DATE_FORMAT(dia, '%d/%m') AS dia, etapa, descricao, justificativa, competencias, pairing, criterios, notamaxima FROM " . $categoria . $querywhere;
}


// datas e documentos de entrega

if ($categoria == "ENTREGAS" or $categoria == "entregas") {

  $categoria = "Entregas";
  $myquery = "SELECT id, avaliacao, descricao, instrucao, bloco, fase, siglatrabalho, coment, extra, pairing, DATE_FORMAT(dia, '%d/%m') AS dia, link, altlink FROM " . $categoria . $querywhere;
}

// trabalhos de alunos

if ($categoria == "TRABALHOSREFERENCIA" or $categoria == "trabalhosreferencia") {
  $categoria = "Referencias";
  $myquery = "SELECT id, semestre, autor, titulo, link FROM " . $categoria . $querywhere;
}


// FAQ

if ($categoria == "FAQ" or $categoria == "faq") {
  $categoria = "FAQ";
  $myquery = "SELECT id, pergunta, resposta FROM " . $categoria . $querywhere;
}


// notas

if ($categoria == "NOTAS" or $categoria == "notas") {

  $categoria = "Notas";
  $myquery = "SELECT id, semestre, pairing, aluno, final FROM " . $categoria . $querywhere;
}


// Projetos

if ($categoria == "PROJETOS" or $categoria == "projetos") {

  $categoria = "Projetos";
  $myquery = "SELECT id, oferta, atividades, resolvido, fazendo, pausado, cancelado FROM " . $categoria . $querywhere;
}


// Projetos

if ($categoria == "ATIVIDADES" or $categoria == "atividades") {


  $oquebater = explode(",", $_GET['filter']);
  $condicao = " WHERE nome = '" . $oquebater[0] . "' AND email = '" . $oquebater[1] . "' AND trabalho = '" . $oquebater[2] . "' LIMIT 1";

  $categoria = "Avaliacao";
  $myquery = "SELECT id, nome, nota, feedb FROM " . $categoria . $condicao;
}



// relatório de TCC

if ($categoria == "RELATORIO" or $categoria == "relatorio") {

  $categoria = "Orientacoes";
  $myquery = "SELECT id, orientando, email, linha, dataorienta, datadocs, resumoproblema, resumoobjeto, resumoteorico, resumometodo, link, tcc1, tcc2, mestrado, doutorado, mono, project, proposta, objeto, problema, context, fundament, metodo, develop, conclusao, artefato FROM " . $categoria . $querywhere;
}


// Estágio



sendQuery($myquery, $dbaddress, $dbusername, $dbpassword, $sqldatabase);
