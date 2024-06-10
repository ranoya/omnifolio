<?php

if ($_GET['theme']) { $_SESSION['theme'] = $_GET['theme']; }
if ($_GET['bgcolor']) { $_SESSION['bgcolor'] = $_GET['bgcolor']; }
if ($_GET['forecolor']) { $_SESSION['forecolor'] = $_GET['forecolor']; }
if ($_GET['preview']) { $_SESSION['preview'] = $_GET['preview']; }

if ($_GET['preview'] == false || $_GET['preview'] == 'false') {
	$_SESSION['preview'] = NULL;
}

if ($_GET['theme'] == "default" || $_GET['theme'] == "none") { 
	$_SESSION['theme'] = NULL;
	$_SESSION['bgcolor'] = NULL;
	$_SESSION['forecolor'] = NULL;
}

if ($_GET['embed'] != "plain") {
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$_SESSION['tecidolastpage'] = $actual_link;
}
?>

		<script>
        	menusize = 220;
    	</script>

        <!-- Chrome, Firefox OS and Opera -->
  		<meta name="theme-color" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">
  		<!-- Windows Phone -->
  		<meta name="msapplication-navbutton-color" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">
  		<!-- iOS Safari -->
  		<meta name="apple-mobile-web-app-status-bar-style" content="<?php if ($_SESSION['bgcolor']) { echo "#".$_SESSION['bgcolor']; } else { echo "#FFFFFF"; } ?>">

        <script src="../referenceDocs.js"></script>

        <link rel="stylesheet" type="text/css" href="../referenceDocs.css">
		<link rel="stylesheet" type="text/css" href="../<?php 

			if ($_SESSION['theme']) {
	
				echo $_SESSION['theme'];
			} else {
	
				echo "default";
			}

			?>theme.css">

        <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">

		<meta charset="utf-8">
		<meta name = "pinterest" content = "nopin" />
		<meta name="pinterest" content="nohover">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keywords" content="html, tags, sintaxe, propriedades">
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

        <meta name="author" content="Prof. Dr. Guilherme Ranoya">
        <meta name="generator" content="artesanal" />

        <script src="https://www.ranoya.com/sumarion/sumarion.js"></script>
        <script src="../referenceDocs.js"></script>
		<script src="https://www.ranoya.com/Assets/JSLibs/AutoIndex/indexit.js"></script>
		<script src="https://www.ranoya.com/Assets/JSLibs/AutoAce/multiAce.js"></script>