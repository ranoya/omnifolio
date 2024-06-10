<?php

$nome = $_GET['nome'];
$link = $_GET['link'];


?>


<head>


<style>

body,html {

	margin: 0;
	padding: 0;

}


#back {


 background-color: gray;
 color: white;
 font-size: 7vw;
 text-align: center;
 position: fixed;
 width: 100%;
 height: 100%;
 text-decoration: none;
 margin: 0;
 padding: 0;

}

#back:hover {

 background-color: white;
 color: grey;

}


</style>

</head>

<body>

<a href="<?php echo $link; ?>" id="back">
	<br><br><br><br>
	<?php echo $nome; ?>
</a>

</body>







