
<?php
header('Access-Control-Allow-Origin: *');


// SETUP VARIABLES ---------------------------------------------------------------------------------

$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_edu";
$conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);


$q = "SELECT TURMA,FASE,COMENTARIO1 FROM FEEDBACK WHERE FASE='Escolha de Linguagem'"; // QUERY

$votos = array();

if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
}

$response = mysqli_query($conn, $q);



if (mysqli_num_rows($response) > 0) {

	while($row = mysqli_fetch_assoc($response)) {

		
/*
		foreach ($row as $key => $value) {

			echo "---- key: " . $key . " valor:" . $row[$key] . "\r";

		}

*/

			if (array_key_exists($row['TURMA'], $votos)) {

				if (array_key_exists($row['COMENTARIO1'], $votos[$row['TURMA']])) {
						$votos[$row['TURMA']][$row['COMENTARIO1']] = $votos[$row['TURMA']][$row['COMENTARIO1']] + 1;

						
					} else {

						$votos[$row['TURMA']][$row['COMENTARIO1']] = 1;
						
					}

				

			} else {

				$votos[$row['TURMA']] = array();
				$votos[$row['TURMA']][$row['COMENTARIO1']] = 1;

			}
        

    }
}


header('Content-Type: application/json');
echo json_encode($votos);


?>

