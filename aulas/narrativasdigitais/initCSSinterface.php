<style> * { color: transparent; background-color: transparent; }</style>

<?php

$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_studentworks";

$nomealuno = $_COOKIE['raufpenomealuno'];
$emailaluno = $_COOKIE['raufpeemailaluno'];
$atividade = 'AND1';
$disciplina = 'aulaand';



// função para adicionar trabalho no protocolo

function crianoprotocolo($data) {

// Prepare new cURL resource
$ch = curl_init('https://script.google.com/macros/s/AKfycbyn3E-Dy9qpZbeC62NwSH00b1lIQRtx-OHbl0zZqtUoJnvcjwE/exec?disciplina=' . urlencode($data['disciplina']) . '&aluno=' . urlencode($data['aluno']) . '&email='. urlencode($data['email']) .'&sigla='. urlencode($data['sigla']) .'&link=' . urlencode($data['link']));
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);

}



$conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


$q = "SELECT * FROM " . $disciplina . " WHERE NOMEALUNO = '" . $nomealuno . "' AND EMAILALUNO = '" . $emailaluno . "' AND ATIVIDADE = '" . $atividade . "'"; 

$response = mysqli_query($conn, $q);

if ($response) {

	if (mysqli_num_rows($response) > 0) {

	} else {


		$a1 = "CREATE TABLE temp_styleinterface (id INT AUTO_INCREMENT PRIMARY KEY, duplicata TEXT)";

		$a2 = "INSERT INTO temp_styleinterface (duplicata) VALUES ((SELECT ACTUALWORK FROM aulaand WHERE NOMEALUNO='Guilherme Ranoya' AND EMAILALUNO='ranoya@gmail.com' AND ATIVIDADE='AND1' LIMIT 1))";

    	$r = "INSERT INTO " . $disciplina . " (NOMEALUNO, EMAILALUNO, ATIVIDADE, ACTUALWORK)
VALUES ('".$nomealuno."','".$emailaluno."','".$atividade."', (SELECT duplicata FROM temp_styleinterface WHERE id=1))";

		$z4 = "DROP TABLE temp_styleinterface";




		$espacotemp = mysqli_query($conn, $a1);
		if ($espacotemp) { echo "Table temporaria OK"; } else { echo "Error in save new work: " . mysqli_error($conn); }

		$duplica = mysqli_query($conn, $a2);
		if ($duplica) { echo "Faz copia OK"; } else { echo "Error in save new work: " . mysqli_error($conn); }

		$newdata = mysqli_query($conn, $r);
		if ($newdata) { echo "OK"; } else { echo "Error in save new work: " . mysqli_error($conn); }

		$apaga = mysqli_query($conn, $z4);
		if ($apaga) { echo "Joga tabela temporaria fora OK"; } else { echo "Error in save new work: " . mysqli_error($conn); }

		/*
		// https://www.ranoya.com/aulas/tryit/?embed=slides&lang=css&ref=https://www.ranoya.com/p/css&editorstartsopen=true&refheight=70&panels=0&refstartsopen=true&load&exemplo=https://www.ranoya.com/p/bookedit&indirect=true&loaddisciplina=aulaand&loadatv=styleinferfaces&loadaluno=Ricardo%20Almeida&loademail=ricardo@almeida.com
		// 
		*/
		
    $mylink = "https://www.ranoya.com/aulas/tryit/?embed=slides&lang=css&ref=https://www.ranoya.com/p/css&editorstartsopen=true&refheight=70&panels=0&refstartsopen=true&exemplo=https://www.ranoya.com/p/bookedit&indirect=true&loaddisciplina=aulaand&loadatv=".$atividade."&loadaluno=".str_replace(' ', '%20', $nomealuno)."&loademail=".$emailaluno;

	$params = array('disciplina'=>'Editorial Digital', 'sigla'=>$atividade, 'link'=>$mylink, 'aluno'=>$nomealuno, 'email'=>$emailaluno);

	crianoprotocolo($params);


	}
    



} else {

	echo "Erro na query de pesquisa" . mysqli_error($conn);

}

?>
