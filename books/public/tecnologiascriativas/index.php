<?php
session_start();
if ($_GET['theme']) { $_SESSION['theme'] = $_GET['theme']; }
if ($_GET['bgcolor']) { $_SESSION['bgcolor'] = $_GET['bgcolor']; }
if ($_GET['forecolor']) { $_SESSION['forecolor'] = $_GET['forecolor']; }

if ($_GET['theme'] == "default" || $_GET['theme'] == "none") { 
	$_SESSION['theme'] = NULL;
	$_SESSION['bgcolor'] = NULL;
	$_SESSION['forecolor'] = NULL;
}

if ($_SESSION['tecidolastpage']) { 

header('Location:' . $_SESSION['tecidolastpage']);

}
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name = "pinterest" content = "nopin" />
		<meta name="pinterest" content="nohover">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keywords" content="">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>O tecido das tecnologias criativas</title>
		<meta name="generator" content="artesanal" />
  		<meta name="description" content="livro O tecido das tecnologias criativas, do Prof. Guilherme Ranoya">
		<meta name="author" content="Prof. Dr. Guilherme Ranoya">

		<meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
		<meta property="og:type" content="article">
		<meta property="og:locale" content="pt_BR">
		<meta property="og:image:width" content="600">
    	<meta property="og:image:height" content="600">
    	<meta property="og:site_name" content="ranoya.com">
    	<meta property="og:image:type" content="image/jpeg">
    	<meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/futuro600.jpg" />
        <meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/futuro600.jpg">
        <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/futuro600.jpg" />
        <link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/futuro16.png">
        <link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/futuro57.png" />
        <link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/futuro57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/futuro72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/futuro114.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/futuro144.png" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>
		
		<!-- Chrome, Firefox OS and Opera -->
  		<meta name="theme-color" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">
  		<!-- Windows Phone -->
  		<meta name="msapplication-navbutton-color" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">
  		<!-- iOS Safari -->
  		<meta name="apple-mobile-web-app-status-bar-style" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">

		<link rel="stylesheet" type="text/css" href="../<?php 

			if ($_SESSION['theme']) {
	
				echo $_SESSION['theme'];
			} else {
	
				echo "default";
			}

			?>theme.css">

	</head>

	<style>

		@import url('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,600i,900,900i');

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
			bottom: 40vh;
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

	</style>

<body>

<div>
<a class="citacao" href="<?

if ($_GET['goto']) {
	echo $_GET['goto'];
} else {
	echo "introducao.php";
}

?>">O tecido das tecnologias criativas</a>
<p class="legenda">Prof. Dr. Guilherme Ranoya</p>
</div>

<div id="dblobis" style="position: fixed; z-index: -1; top: 0; left: -30%; width: 100%; height: 100vh;"></div>

<script type="module">
        import dblob from "../theblob.js";

        let playblob = dblob({
        p5,
          'bgcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--bg-color'),
          'fcolor': getComputedStyle(document.documentElement)
          .getPropertyValue('--text-link'),
        'el': 'dblobis'
        });

</script>









</body>

</html>
