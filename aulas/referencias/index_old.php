<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="generator" content="artesanal" />
    <meta name="description" content="Curadoria de referências de notícias e sites do Prof. Dr. Guilherme Ranoya">
    <meta property="og:description" content="Curadoria de referências de notícias e sites do Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="UX, User Experience, IA, Arquitetura de Informação, IxD, Design de Interação, Mídia Digital, Wearable Computing, Physical Computing, Pesquisa">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/referencias600.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/referencias600.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/referencias600.jpg" />

    <link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/referencias16.png">
    <link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/referencias57.png" />
    <link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/referencias57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/referencias72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/referencias114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/referencias144.png" /> 


	<!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="<?php if ($_GET['bgcolor']) { echo "#" . $_GET['bgcolor']; } else { echo "#FF1499"; } ?>">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="<?php if ($_GET['bgcolor']) { echo "#" . $_GET['bgcolor']; } else { echo "#FF1499"; } ?>">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php if ($_GET['bgcolor']) { echo "#" . $_GET['bgcolor']; } else { echo "#FF1499"; } ?>">
    
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
   
   	<meta name = "pinterest" content = "nopin" />
  	<meta name="pinterest" content="nohover">



    <link href='form.css' rel='stylesheet' type='text/css'>
    
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script type='text/javascript' src="https://www.ranoya.com/AssetsManager/js/ams.js"></script>
    <script type='text/javascript' src="commons.js"></script>
	<?php

		if($_GET['listtitle']) {

			echo"<title>".$_GET['listtitle']."</title>";
			echo"<meta property='og:title' content=".$_GET['listtitle'].">";

		} else {

			echo"<title>REFERÊNCIAS * RANOYA.COM</title>";
			echo"<meta property='og:title' content='REFERÊNCIAS * RANOYA.COM'>";

		}

		if($_GET['theme']) {

			echo "<link href='".$_GET['theme'].".css' rel='stylesheet' type='text/css'>";
		} else {

			echo "<link href='color.css' rel='stylesheet' type='text/css'>";
		}

	?>	
    
  </head>
  
  <body>

    <div id="tintcolor" style="position: fixed; width: 100%; height: 100%; z-index: 2;"></div>
    <div id="paineldeprojetosBackground" style="position: fixed; top:0; left:0; width: 100%; z-index: 1;"></div>

		
		<a name="topo"></a>
    
    <!-- NAVEGAÇÃO ---------------------------------------------->
    <nav>
      <div id="navblock">

			
			<svg style="width: 20px; height: 20px; float: left; vertical-align: bottom; margin-right: 7px;" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path class="logocolor" fill-rule="evenodd" clip-rule="evenodd" d="M600 0H0V600H600V0ZM279.221 147.881V288.262L145.738 244.729C139.545 242.771 134.654 241.793 131.068 241.793C126.18 241.793 121.779 243.912 117.867 248.152C113.955 252.064 112 256.793 112 262.338C112 267.229 113.305 271.467 115.912 275.055C118.846 278.314 124.387 281.25 132.535 283.859L266.508 327.881L183.875 441.359C178.334 448.859 175.562 454.729 175.562 458.967C175.562 464.838 177.52 469.891 181.43 474.131C185.668 478.043 190.721 480 196.588 480C203.434 480 210.277 475.271 217.123 465.814L299.756 351.848L382.387 465.814C389.232 475.271 396.24 480 403.412 480C408.953 480 413.68 478.043 417.592 474.131C421.83 469.891 423.947 464.838 423.947 458.967C423.947 454.729 421.34 448.859 416.125 441.359L333.492 327.881L466.975 284.348C475.451 281.738 480.992 278.641 483.6 275.055C486.533 271.467 488 267.229 488 262.338C488 256.793 486.045 252.064 482.133 248.152C478.221 243.912 473.658 241.793 468.441 241.793C465.182 241.793 460.455 242.771 454.262 244.729L320.779 288.262V147.881C320.779 137.771 318.824 130.598 314.912 126.359C311.002 122.119 306.111 120 300.244 120C294.051 120 288.998 122.119 285.088 126.359C281.176 130.598 279.221 137.771 279.221 147.881Z"/>
			</svg>

        	<p style="clear: right; vertical-align: top; margin-right: 30px; margin-top: -5px; padding-left: 27px;">	
        			<?php
        			if($_GET['listtitle']) {
						echo $_GET['listtitle'];	
					} else {

						echo "REFERÊNCIAS";
					}
					?>
        	</p>			
					<a href="javascript:filter('advertising');" id="advertising" class="filtroinativo">PROPAGANDA</a>
				  <a href="javascript:filter('apps');" id="apps" class="filtroinativo">SOFTWARE</a>
				  <a href="javascript:filter('bodyandsoul');" id="bodyandsoul" class="filtroinativo">CORPO</a>
				  <a href="javascript:filter('creativecoding');" id="creativecoding" class="filtroinativo">CÓDIGO CRIATIVO</a>
				  <a href="javascript:filter('creativelife');" id="creativelife" class="filtroinativo">CRIATIVIDADE</a>
				  <a href="javascript:filter('creativetech');" id="creativetech" class="filtroinativo">TECNOLOGIA CRIATIVA</a>
				  <a href="javascript:filter('culture');" id="culture" class="filtroinativo">CULTURA</a>
				  <a href="javascript:filter('design');" id="design" class="filtroinativo">DESIGN</a>
				  <a href="javascript:filter('games');" id="games" class="filtroinativo">JOGOS</a>
				  <a href="javascript:filter('framework');" id="framework" class="filtroinativo">FRAMEWORKS</a>
				  <a href="javascript:filter('interaction');" id="interaction" class="filtroinativo">INTERAÇÃO</a>
				  <a href="javascript:filter('emotionresearch');" id="emotionresearch" class="filtroinativo">EMOÇÃO</a>
				  <a href="javascript:filter('language');" id="language" class="filtroinativo">LINGUAGEM</a>
					<a href="javascript:filter('media');" id="media" class="filtroinativo">MÍDIA</a>
					<a href="javascript:filter('method');" id="method" class="filtroinativo">METODOLOGIA</a>
					<a href="javascript:filter('mobile');" id="mobile" class="filtroinativo">MOBILE</a>
					<a href="javascript:filter('music');" id="music" class="filtroinativo">MÚSICA</a>
					<a href="javascript:filter('physicalcomputing');" id="physicalcomputing" class="filtroinativo">COMPUTAÇÃO FÍSICA</a>
					<a href="javascript:filter('prototype');" id="prototype" class="filtroinativo">PROTOTIPAGEM</a>
					<a href="javascript:filter('readings');" id="readings" class="filtroinativo">HISTÓRIAS</a>
				<a href="javascript:filter('narratives');" id="narratives" class="filtroinativo">NARRATIVAS</a>
				<a href="javascript:filter('technology');" id="technology" class="filtroinativo">TECNOLOGIA</a>
				<a href="javascript:filter('userinterface');" id="userinterface" class="filtroinativo">INTERFACE</a>
				<a href="javascript:filter('userexperience');" id="userexperience" class="filtroinativo">EXPERIÊNCIA</a>
				<a href="javascript:filter('wearablecomputing');" id="wearablecomputing" class="filtroinativo">WEARABLES</a>
				<a href="javascript:filter('web');" id="web" class="filtroinativo">WEB</a>
				
		
			</div>
    </nav>
		
		<nav id="mobile">
      <div id="navblock">
                
             <svg style="width: 20px; height: 20px; float: left; vertical-align: bottom; margin-right: 7px;" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path class="logocolor" fill-rule="evenodd" clip-rule="evenodd" d="M600 0H0V600H600V0ZM279.221 147.881V288.262L145.738 244.729C139.545 242.771 134.654 241.793 131.068 241.793C126.18 241.793 121.779 243.912 117.867 248.152C113.955 252.064 112 256.793 112 262.338C112 267.229 113.305 271.467 115.912 275.055C118.846 278.314 124.387 281.25 132.535 283.859L266.508 327.881L183.875 441.359C178.334 448.859 175.562 454.729 175.562 458.967C175.562 464.838 177.52 469.891 181.43 474.131C185.668 478.043 190.721 480 196.588 480C203.434 480 210.277 475.271 217.123 465.814L299.756 351.848L382.387 465.814C389.232 475.271 396.24 480 403.412 480C408.953 480 413.68 478.043 417.592 474.131C421.83 469.891 423.947 464.838 423.947 458.967C423.947 454.729 421.34 448.859 416.125 441.359L333.492 327.881L466.975 284.348C475.451 281.738 480.992 278.641 483.6 275.055C486.533 271.467 488 267.229 488 262.338C488 256.793 486.045 252.064 482.133 248.152C478.221 243.912 473.658 241.793 468.441 241.793C465.182 241.793 460.455 242.771 454.262 244.729L320.779 288.262V147.881C320.779 137.771 318.824 130.598 314.912 126.359C311.002 122.119 306.111 120 300.244 120C294.051 120 288.998 122.119 285.088 126.359C281.176 130.598 279.221 137.771 279.221 147.881Z"/>
			</svg>

        		   <p style="clear: right; vertical-align: top; margin-right: 30px; margin-top: -5px;padding-left: 23px; ">
        			<?php
        			if($_GET['listtitle']) {
						echo $_GET['listtitle'];	
					} else {

						echo "REFERÊNCIAS";
					}
					?>
        		  </p><div style="height: 5px; width: 100px;">&nbsp;</div>		
				  <a href="javascript:filter('advertising');" id="madvertising" class="filtroinativo">PROPAGANDA</a>
				  <a href="javascript:filter('apps');" id="mapps" class="filtroinativo">SOFTWARE</a>
				  <a href="javascript:filter('bodyandsoul');" id="mbodyandsoul" class="filtroinativo">CORPO</a>
				  <a href="javascript:filter('creativecoding');" id="mcreativecoding" class="filtroinativo">CÓDIGO CRIATIVO</a>
				  <a href="javascript:filter('creativelife');" id="mcreativelife" class="filtroinativo">CRIATIVIDADE</a>
				  <a href="javascript:filter('creativetech');" id="mcreativetech" class="filtroinativo">TECNOLOGIA CRIATIVA</a>
				  <a href="javascript:filter('culture');" id="mculture" class="filtroinativo">CULTURA</a>
				  <a href="javascript:filter('design');" id="mdesign" class="filtroinativo">DESIGN</a>
				  <a href="javascript:filter('games');" id="mgames" class="filtroinativo">JOGOS</a>
				  <a href="javascript:filter('framework');" id="mframework" class="filtroinativo">FRAMEWORKS</a>
				  <a href="javascript:filter('interaction');" id="minteraction" class="filtroinativo">INTERAÇÃO</a>
				  <a href="javascript:filter('emotionresearch');" id="memotionresearch" class="filtroinativo">EMOÇÃO</a>
				  <a href="javascript:filter('language');" id="mlanguage" class="filtroinativo">LINGUAGEM</a>
					<a href="javascript:filter('media');" id="mmedia" class="filtroinativo">MÍDIA</a>
					<a href="javascript:filter('method');" id="mmethod" class="filtroinativo">METODOLOGIA</a>
					<a href="javascript:filter('mobile');" id="mmobile" class="filtroinativo">MOBILE</a>
					<a href="javascript:filter('music');" id="mmusic" class="filtroinativo">MÚSICA</a>
					<a href="javascript:filter('physicalcomputing');" id="physicalcomputing" class="filtroinativo">COMPUTAÇÃO FÍSICA</a>
					<a href="javascript:filter('prototype');" id="mprototype" class="filtroinativo">PROTOTIPAGEM</a>
					<a href="javascript:filter('readings');" id="mreadings" class="filtroinativo">HISTÓRIAS</a>
				<a href="javascript:filter('narratives');" id="mnarratives" class="filtroinativo">NARRATIVAS</a>
				<a href="javascript:filter('technology');" id="mtechnology" class="filtroinativo">TECNOLOGIA</a>
				<a href="javascript:filter('userinterface');" id="muserinterface" class="filtroinativo">INTERFACE</a>
				<a href="javascript:filter('userexperience');" id="muserexperience" class="filtroinativo">EXPERIÊNCIA</a>
				<a href="javascript:filter('wearablecomputing');" id="mwearablecomputing" class="filtroinativo">WEARABLES</a>
				<a href="javascript:filter('web');" id="web" class="mfiltroinativo">WEB</a>
      </div>
    </nav>
		    
    
    <!-- CONTEUDO ----------------------------------------------->     
    
    <div class="secao">
      <div class="bloco-conteudo"><a name="catalogo" style="margin-top: -30px;"></a>		
				
			<hr class="separador" style="height: 280px;"></hr>	


			<div id="paineldeprojetos" style="position: relative; z-index: 3;">
			&nbsp;	
			</div>	

            
			
      <br><br><br><br>
      
      <script>
        AddQuery({cat: 'bookmarks', render: '<?php 

        	if ($_GET['render']) { 
        		echo $_GET['render'];
        	} else {
        		echo "lista";
        	}
        	?>', divtarget: '#paineldeprojetos'});
        
      </script>
		</div>
		</div>

	
	
		<div class="secao" style="display: inline-block; text-align: center;">
 
        <div id="carregando" class="loadingsignal"><img src="https://www.ranoya.com/AssetsManager/elements/darkloading.gif" class="loadingimage" /></div>
        <hr class="separador triplegap"></hr>

    </div>

		
  
    
    <!-- RODAPÉ ------------------------------------------------->
    <div id="rodape">
      
      <div class='bloco-conteudo'>
    	<svg width="719" height="719" viewBox="0 0 719 719" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 30px; height: 30px; float: left; vertical-align: top; margin-right: 10px;">
            <g id="ranoya.com-regexredux-truewhite">
            <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M719 0H0V719H719V0ZM230.686 183.844H337.371L230.686 535.31H124L230.686 183.844ZM383.351 183.844H381.782L275.097 535.31H381.782L435.91 356.992L490.037 535.31H596.723L490.037 183.844H488.468H383.351Z" />
            </g>
        </svg>
			
        <h6>COPYRIGHT &copy; 2014, PROF. DR. GUILHERME RANOYA, dDESIGN | UFPE</h6>
					
      </div>
  
  	<script>embedchanges();</script>
    </div>
    <div id="botaogototop">

		<div id="gototop" onclick="javascript:gotoLink('#catalogo');">&nbsp;</div>
		<div id="gotobottom" onclick="javascript:gotoLink('#catalogo');">&nbsp;</div>

</div>
    
  </body>
  
</html>