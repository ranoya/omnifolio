<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="generator" content="artesanal" />
    <meta name="description" content="Painel de referências do Prof. Dr. Guilherme Ranoya">
    <meta property="og:description" content="Painel de referências do Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="UX, User Experience, IA, Arquitetura de Informação, IxD, Design de Interação, Mídia Digital, Wearable Computing, Physical Computing, Pesquisa">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/Assets/coverimages/pinboard600.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/Assets/coverimages/pinboard600.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/Assets/coverimages/pinboard600.jpg" />

    <link rel="icon" type="image/png" href="https://www.ranoya.com/Assets/coverimages/pinboard16.png">
    <link rel="shortcut icon" href="https://www.ranoya.com/Assets/coverimages/pinboard57.png" />
    <link rel="apple-touch-icon" href="https://www.ranoya.com/Assets/coverimages/pinboard57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.ranoya.com/Assets/coverimages/pinboard72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.ranoya.com/Assets/coverimages/pinboard114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.ranoya.com/Assets/coverimages/pinboard144.png" /> 


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

			echo"<title>PINBOARD * RANOYA.COM</title>";
			echo"<meta property='og:title' content='PINBOARD * RANOYA.COM'>";

		}

		if($_GET['theme']) {

			echo "<link href='".$_GET['theme'].".css' rel='stylesheet' type='text/css'>";
		} else {

			echo "<link href='color.css' rel='stylesheet' type='text/css'>";
		}

	?>	
    
  </head>
  
  <body>
		
		<a name="topo"></a>
    
    <!-- NAVEGAÇÃO ---------------------------------------------->
    <nav>
      <div id="navblock">

      <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; float: left; vertical-align: bottom; margin-right: 7px;">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0H0V16H7V8H4V6H12V8H9V16H16V0Z" class="logocolor"/>
      </svg>

        	<p style="clear: right; vertical-align: top; margin-right: 30px; margin-top: -5px; padding-left: 27px;">	
        			<?php
        			if($_GET['listtitle']) {
						echo $_GET['listtitle'];	
					} else {

						echo "PINBOARD";
					}
					?>
        	</p>
          <span id="menuopcoesA"></span>
				
		
			</div>
    </nav>
		
		<nav id="mobile">
      <div id="navblock">
        
      <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; float: left; vertical-align: bottom; margin-right: 7px;">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0H0V16H7V8H4V6H12V8H9V16H16V0Z" class="logocolor"/>
      </svg>
        		   <p style="clear: right; vertical-align: top; margin-right: 30px; margin-top: -5px;padding-left: 23px; ">
        			<?php
        			if($_GET['listtitle']) {
						echo $_GET['listtitle'];	
					} else {

						echo "PINBOARD";
					}
					?>
        	
          </p><div id="blocobranco" style="height: 5px; width: 100px;">&nbsp;</div>
          <span id="menuopcoesB"></span>
      </div>
    </nav>
		    
    
    <!-- CONTEUDO ----------------------------------------------->          
    <div class="secao">
      <div id="corpo" class="bloco-conteudo"><a name="catalogo" style="margin-top: -30px;"></a>		
				
			<hr id="blocoseparador" class="separador" style="height: 120px;"></hr>	
							
			<div id="paineldeprojetos">
			&nbsp;	
			</div>	
			
      <br><br><br><br>
      
      <script>
        AddQuery({cat: 'pinboard', render: 'images', divtarget: '#paineldeprojetos'});
        
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