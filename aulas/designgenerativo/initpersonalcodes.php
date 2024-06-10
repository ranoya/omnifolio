<style> * { color: transparent; background-color: transparent; }</style>

<?php

$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_studentworks";

$nomealuno = $_COOKIE['raufpenomealuno'];
$emailaluno = $_COOKIE['raufpeemailaluno'];
//$atividade = 'logo1';
$disciplina = 'auladg';



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

function inicializa($atividade, $nomeatividade, $sigla, $nomedisciplina) {

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

      if ($atividade == "dataviz1") {

        $mylink = "https://www.ranoya.com/aulas/tryit/customeditors/vendasdataviz1.php?loadaluno=" .str_replace(' ', '%20', $nomealuno) . "&loadatv=" . $atividade . "&loademail=" . $emailaluno . "&loaddisciplina=" . $disciplina;

      } else {

        $mylink = "https://www.ranoya.com/aulas/tryit/processing/index.html?loadaluno=" . str_replace(' ', '%20', $nomealuno) . "&loadatv=" . $atividade . "&loademail=" . $emailaluno . "&loaddisciplina=" . $disciplina;

      }
    
      
    $params = array('disciplina'=>$nomedisciplina, 'sigla'=>$sigla, 'link'=>$mylink, 'aluno'=>$nomealuno, 'email'=>$emailaluno);

    crianoprotocolo($params);
    }
    

		$conteudoinicial = "// Atividade: " . $nomeatividade . "\r" . "// Autor: " . $nomealuno . "\r" . "// Email: " . $emailaluno . "\r\r\r";
		if ($atividade == "dataviz1") {

			$conteudoinicial = $conteudoinicial . "void carrega() {\r    
  int d = day(), m = month(), y = year(), h = hour(), min = minute(), s = second();\r
  String timestamp = d + \'.\' + m + \'.\' + y + \'.\' + h + \'.\' + min + \'.\' + s;\r
  String url = \'https://www.ranoya.com/aulas/designgenerativo/exercicios/vendas.xml?timestamp=\' + timestamp;\r
  XML xml = loadXML(url);\r
  XML[] semana = xml.getChildren(\'semana\');\r
  XML[] livros = semana[0].getChildren(\'livro\');\r
  quantassemanas = semana.length;\r
  quantoslivros = livros.length;\r
  vendas = new int[semana.length][livros.length];\r
  for (int k = 0; k < semana.length; k++) {\r
    livros = semana[k].getChildren(\'livro\');\r
    for (int p = 0; p < livros.length; p++) {\r
      vendas[k][p] = livros[p].getIntContent(); \r
    }\r 
  }\r
}\r  
\r
void setup() {\r
\r 
  size(150,150);\r
  // retire os \'//\' da função carrega(); abaixo, se você estiver usando\r
  // o Processing IDE para Desktop. Ela irá carregar os dados do servior\r
\r  
  //carrega();\r
\r
}\r
\r
void draw() {\r
\r
    // variavel quantoslivros (int) registra a quantidade total de livros\r
    // variavel quantassemanas (int) registra a quantidade de semanas\r
    // array bi-dimensional vendas[s][l] registra o número de vendas\r
    // na semana s (int) sobre o livro l (int)\r
\r    
    // exemplo para uso das variaveis\r
\r    
    textSize(20);\r
    text(\'livros na tabela: \'+quantoslivros,15,30);\r
    text(\'semanas na tabela: \'+quantassemanas,15,50);\r
    text(\'vendas do livro 0 na semana 0: \'+vendas[0][0],15,70);\r
\r
\r  
}\r";

		}
		
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
inicializa("logo1", "Logo #1", "DG3", "Design Generativo");
inicializa("visual1", "Visual #1", "DG1", "Design Generativo");
inicializa("dataviz1", "Dataviz #1", "DG5", "Design Generativo");

?>
