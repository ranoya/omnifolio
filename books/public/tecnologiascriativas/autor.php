<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

	<script src="https://datat.vercel.app/basics.js"></script>
	<?php
	require '../tecnologiascriativas/meta.php';
	require '../microposts/funcoesamsedu.php';
	?>
	<title>Sobre o autor | Reflexões sobre o design de interfaces digitais</title>
	<meta property="og:title" content='Sobre o autor | Reflexões sobre o design de interfaces digitais'>
	<meta name="description" content="Sobre o autor. Capítulo da versão digital do livro Reflexões sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
	<meta property="og:description" content="Sobre o autor. Capítulo da versão digital do livro Reflexões sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
	<script src="https://www.ranoya.com/Assets/JSLibs/AutoAce/multiAce.js"></script>
	<script src="https://www.ranoya.com/Assets/JSLibs/AutoIndex/indexit.js"></script>
</head>

<body>

	<div class="bigwhitesapce"></div>

	<div id="chapter">

		<h1 id="titulocapitulo" style="position: relative; z-index: 2;">Sobre o autor</h1>

		<?php
		require '../microposts/biografiaconteudo.php';
		?>

		<div id="bookendnav"></div>

		<div id="meta">
			<?php
			require '../microposts/biografiareferencias.php';
			?>
		</div>

		<div id="metacompensate"></div>

		<div id="posicao"></div>
		<div id="posicaocompensate"></div>

</body>

</html>