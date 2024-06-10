<style> * { color: transparent; background-color: transparent; }</style>
<?php

$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_studentworks";

$nomealuno = $_COOKIE['raufpenomealuno'];
$emailaluno = $_COOKIE['raufpeemailaluno'];
$disciplina = 'aulawd';



// função para adicionar trabalho no protocolo

function crianoprotocolo($data) {

// Prepare new cURL resource
$ch = curl_init('https://script.google.com/macros/s/AKfycbyn3E-Dy9qpZbeC62NwSH00b1lIQRtx-OHbl0zZqtUoJnvcjwE/exec?disciplina=' . urlencode($data['disciplina']) . '&aluno=' . urlencode($data['aluno']) . '&email='. urlencode($data['email']) .'&sigla='. urlencode($data['sigla']) .'&link=' . urlencode($data['link']));
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);

}



// função para inicializar conteúdo no BD

function inicializa($atividade, $nomeatividade, $sigla, $linkcallback, $nomedisciplina) {

global $dbaddress, $dbusername, $dbpassword, $sqldatabase, $nomealuno, $emailaluno, $disciplina;

$conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


$q = "SELECT * FROM " . $disciplina . " WHERE NOMEALUNO = '" . $nomealuno . "' AND EMAILALUNO = '" . $emailaluno . "' AND ATIVIDADE = '" . $atividade . "'"; 

$response = mysqli_query($conn, $q);

if ($response) {

	if (mysqli_num_rows($response) > 0) {

	} else {

		if ($sigla != "" && isset($sigla)) {
			
		$mylink = "https://www.ranoya.com/aulas/webdesign/openpuzzles.html?n=" . str_replace(' ', '%20', $nomealuno) ."&e=" . $emailaluno;
      
    	$params = array('disciplina'=>$nomedisciplina, 'sigla'=>$sigla, 'link'=>$mylink, 'aluno'=>$nomealuno, 'email'=>$emailaluno);

    	crianoprotocolo($params);
		}

		$conteudoinicial = "<!--\r\rAtividade: " . $nomeatividade . "\r" . "Autor: " . $nomealuno . "\r" . "Email: " . $emailaluno . "\r\r-->\r\r";
		
    	$r = "INSERT INTO " . $disciplina . " (NOMEALUNO, EMAILALUNO, ATIVIDADE, ACTUALWORK)
VALUES ('".$nomealuno."','".$emailaluno."','".$atividade."','".$conteudoinicial."')";

		$newdata = mysqli_query($conn, $r);
		if ($newdata) { echo "OK"; } else { echo "Error in save new work: " . mysqli_error($conn); }

	}
    



} else {

	echo "Erro na query de pesquisa" . mysqli_error($conn);

}

}

inicializa("generalnotes", "Experimentações");
inicializa("exercicio1", "Puzzle #1", "PZ16", "https://www.ranoya.com/aulas/tryit", "Webdesign");
inicializa("exercicio2", "Puzzle #2");
inicializa("exercicio3", "Puzzle #3");
inicializa("exercicio4", "Puzzle #4");
inicializa("exercicio5", "Puzzle #5");
inicializa("exercicio6", "Puzzle #6");


?>

