<html>

<head>

<style>

	body {

		margin: 0;
		padding: 0;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 14px;
		color: white;

	}

	table {

		border: dashed white 1px;
		width: 100%;
		border-collapse: collapse;

	}

	td {

		text-align: center;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 14px;
		text-align: center;
		border: dashed white 1px;
		color: white;

	}


</style>

</head>

<?php

$meuxml = "<?xml version='1.0' encoding='UTF-8'?><vendas>";
$s = rand(3,7);
$p = rand(2,7);

$livs = array ( array($s) , array($p) );
$teste = array ( $s );

?>


<body>

Tabela de vendas de produtos (livros) em cada semana:<br><br>

<table>

	<tr>

		<td>SEMANA</td>

		<?php

			for ($u=0; $u < $p; $u++) {

				echo "<td>LIVRO ".$u."</td>";


			}

		?>

	</tr>

<?php

for ($l = 0; $l < $s; $l++) {

	echo "<tr><td>".$l."</td>";
	$meuxml = $meuxml . "<semana>";
	
	for ($m = 0; $m < $p; $m++) {


		$va = rand(0,14);
		echo "<td>$va</td>";
		$meuxml = $meuxml . "<livro>".$va."</livro>";
		$livs[$l][$m] = $va;



	}

	echo "</tr>";
	$meuxml = $meuxml . "</semana>";

}

$meuxml = $meuxml . "</vendas>";




$myfile = fopen("vendas.xml", "w") or die("Unable to open file!");
fwrite($myfile, $meuxml);
fclose($myfile);

?>


</table>

<?php

echo "<br>";
echo $s." Semanas<br>";
echo $p." Livros diferentes<br>";

?>

<br><br>
LIVRO 0<br>
<svg viewBox="0 0 600 180" style="width: 100%; height: 180px;">

<rect x="0" y="0" width="600" height="180" stroke="white" stroke-width="1" fill="none" />	

  <?php

  	    for ($t=0; $t<$s; $t++) {

  	    	echo "<path d='M" . (600/($s-1))*$t . ",0 " . (600/($s-1))*$t .",180' stroke='white'
  stroke-width='1' fill='none' />";

  	    }

  ?>


  <path id="lineAB" d='M
 	<?php 

 		for ($t=0; $t<$s; $t++) {

 			echo (600/($s-1))*$t . "," . (180 - (($livs[$t][0])/14)*180) . " ";


 		}

 		echo "' ";


 	?>
  stroke="red"
  stroke-width="3" fill="none" />
</svg>

</body>


</html>
