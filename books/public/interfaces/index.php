<?php
session_start();
if ($_GET['theme']) {
	$_SESSION['theme'] = $_GET['theme'];
}
if ($_GET['bgcolor']) {
	$_SESSION['bgcolor'] = $_GET['bgcolor'];
}
if ($_GET['forecolor']) {
	$_SESSION['forecolor'] = $_GET['forecolor'];
}

if ($_GET['theme'] == "default" || $_GET['theme'] == "none") {
	$_SESSION['theme'] = NULL;
	$_SESSION['bgcolor'] = NULL;
	$_SESSION['forecolor'] = NULL;
}

if ($_SESSION['interfacelastpage']) {

	header('Location:' . $_SESSION['interfacelastpage']);
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="pinterest" content="nopin" />
	<meta name="pinterest" content="nohover">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Ensaios sobre o design de interfaces digitais</title>
	<meta name="generator" content="artesanal" />
	<meta name="description" content="livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
	<meta name="author" content="Prof. Dr. Guilherme Ranoya">

	<meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
										echo $actual_link; ?>">
	<meta property="og:type" content="article">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="600">
	<meta property="og:site_name" content="ranoya.com">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/BookInterface600.jpg" />
	<meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/BookInterface600.jpg">
	<link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/BookInterface600.jpg" />
	<link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/BookInterface16.png">
	<link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/BookInterface57.png" />
	<link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/BookInterface57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/BookInterface72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/BookInterface114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/BookInterface144.png" />



	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="<?php if ($_SESSION['bgcolor']) {
											echo "#" . $_SESSION['bgcolor'];
										} else {
											echo "#FFFFFF";
										} ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php if ($_SESSION['bgcolor']) {
															echo "#" . $_SESSION['bgcolor'];
														} else {
															echo "#FFFFFF";
														} ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php if ($_SESSION['bgcolor']) {
																	echo "#" . $_SESSION['bgcolor'];
																} else {
																	echo "#FFFFFF";
																} ?>">

	<link rel="stylesheet" type="text/css" href="../<?php

													if ($_SESSION['theme']) {

														echo $_SESSION['theme'];
													} else {

														echo "default";
													}

													?>theme.css">

</head>

<style>
	@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:200,200i,400,400i,700|Montserrat:300,300i,400,600,600i,900,900i');

	a {

		font-family: Montserrat, Helvetica, Arial, sans-serif;
		font-size: 4vh;
		line-height: 4.6vh;
		text-decoration: none;
		padding: 10px;
		text-align: right;
		margin-bottom: 0;
		width: calc(100% - 20px);
		display: block;

	}

	a:hover {
		text-decoration: none;
	}

	div {
		position: fixed;
		bottom: 10vh;
		right: 3vw;
	}

	p {

		line-height: 2vh;
		margin-top: 0;
		font-size: 3vh;
		font-family: Montserrat, Helvetica, Arial, sans-serif;
		text-align: right;
		margin-bottom: 0;
		padding: 10px;

	}

	svg {
		width: 47%;
		position: fixed;
		top: calc(20px + 5vh);
		left: calc(20px + 2vw);
	}
</style>

<body>

	<div>
		<p class="legenda">Guilherme Ranoya</p>
		<a class="citacao" href="<?

									if ($_GET['goto']) {
										echo $_GET['goto'];
									} else {
										echo "./autor.php";
									}

									?>">Ensaios sobre o design de interfaces digitais</a>
	</div>

	<svg viewBox="0 0 144 144" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M95.2115 143.444L95.2115 94.6563H95.2122V94.6559H144V111.057L111.613 111.057V143.444H95.2115ZM111.613 32.386V64.7719H127.598V16.4016L80.2008 16.4016L80.2008 89.5135L80.2007 127.042H80.2009V143.444H3.53e-06V143.027V127.042V78.6721V62.2705L0 62.2701H16.4016V62.2705H32.3868V62.2704H48.7883L48.7883 111.058H32.3868L32.3868 78.6721H16.4016L16.4016 127.042H63.7992L63.7992 53.9305L63.7992 16.4016H63.799V0L144 7.01139e-06V0.416572V64.7719V81.1735L111.613 81.1735V81.1737H95.2116L95.2116 32.386L111.613 32.386ZM48.7879 1.82758e-06L48.7879 48.7877H48.7877V48.7882H3.53e-06V32.3866H32.3863V1.11064e-06L48.7879 1.82758e-06Z" />
	</svg>








</body>

</html>