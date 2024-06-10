<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<?php
	require '../microposts/meta.php';
	require '../microposts/funcoesamsedu.php';
	?>

	<title>Memorial Circunstanciado</title>
	<meta property="og:title" content='Memorial Circustanciado | Biografia'>
	<meta name="description" content="Sobre o Prof. Guilherme Ranoya">
	<meta property="og:description" content="Sobre o Prof. Guilherme Ranoya">

	<script src="https://datat.vercel.app/basics.js"></script>
</head>

<body>

	<div class=" bigwhitesapce">
	</div>

	<div id="chapter">

		<h1 id="titulocapitulo" style="position: relative; z-index: 2;"> Memorial Circustanciado </h1>

		<?php
		require '../microposts/biografiaconteudo.php';
		?>


		<h1 id="parte3">O trabalho de pesquisa</h1>

		<?php
		require '../microposts/biografiapesquisa.php';
		?>


		<h1 id="parte4" style="margin-top: 5vw">A prática nos laboratórios</h1>

		<div class="corpus">
			<p>Formar pessoas é a atividade essencial do trabalho de um professor e pesquisar, e enquanto formo pessoas durante o dia, elaboro <b>coisas</b> madrugada à dentro. É no trabalho de laboratório que realizo experimento e produzo soluções materiais que dão suporte a todas as demais atividades (de ensino, de pesquisa e de extensão). Abaixo apresento as diversas soluções elaboradas nos dois laboratórios aos quais me dedico, o laboratório de Artefatos Computacionais e Materiais de Ensino (ACME), e o laboratório de Visualizações e Sentidos (VISSE).</p>
		</div>


		<?php
		require '../microposts/biografialab.php';
		?>


		<h1 id="parte5" style="margin-top: 5vw">Atuação na formação de pessoas</h1>

		<div class="corpus">
			<p>A cada disciplina lecionada, atuei na formação de estudantes em quantidades que as vezes chegaram a 100 alunos por turma. Mas além das aulas, também trabalhei de forma mais direta e imediata com a formação de professores para atividades específicas, de pesquisadores de pós-graduação, e/ou estudantes de graduação desenvolvendo atividades de extensão ou pesquisa.</p>

			<p>A relação abaixo é a de pessoas com as quais esta atuação, mais próxima e direta, se desenvolveu; isto é, pessoas com quais acredito ter tido um papel mais presente e relevante em suas respectivas formações acadêmicas:</p>
		</div>

		<?php
		require '../microposts/biografiapessoas.php';
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