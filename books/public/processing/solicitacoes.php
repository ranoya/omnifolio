<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
<?php
require '../html/meta.php';
?>
    
    <title>Solicitações | Tecnologias Criativas</title>
    
    <meta name="description" content="Solicitações | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    
    <meta property="og:title" content="Solicitações | Tecnologias Criativas">
    <meta property="og:description" content="Solicitações | O código Processing, capítulo do livro O tecido das tecnologias criativas">
    
    <script type='text/javascript' src="https://www.ranoya.com/aulas/pesquisas/dev/formgrid.js"></script>
</head>
<body>

    <script>
        sumarionsize = 220;
    </script>

    <div class="bigwhitesapce"></div>

    <div id="chapter">


 <style>

        #tela {
          width: 100%;
          text-align: left;
          padding: 0;
          margin: 0;
          transition: all .4s ease-in;
        }

        .lds-grid {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        }
        .lds-grid div {
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #fff;
        animation: lds-grid 1.2s linear infinite;
        }
        .lds-grid div:nth-child(1) {
        top: 8px;
        left: 8px;
        animation-delay: 0s;
        }
        .lds-grid div:nth-child(2) {
        top: 8px;
        left: 32px;
        animation-delay: -0.4s;
        }
        .lds-grid div:nth-child(3) {
        top: 8px;
        left: 56px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(4) {
        top: 32px;
        left: 8px;
        animation-delay: -0.4s;
        }
        .lds-grid div:nth-child(5) {
        top: 32px;
        left: 32px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(6) {
        top: 32px;
        left: 56px;
        animation-delay: -1.2s;
        }
        .lds-grid div:nth-child(7) {
        top: 56px;
        left: 8px;
        animation-delay: -0.8s;
        }
        .lds-grid div:nth-child(8) {
        top: 56px;
        left: 32px;
        animation-delay: -1.2s;
        }
        .lds-grid div:nth-child(9) {
        top: 56px;
        left: 56px;
        animation-delay: -1.6s;
        }
        @keyframes lds-grid {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
        }

      </style>

  <div id="texto">
  <a name="Solicitações" class="indice">Solicitações</a>
<h1 id='titulocapitulo'>Solicitações</h1>

  <p>Solicite por aqui a documentação e inclusão de instruções ou procedimentos relacionados ao código Processing.</p>

  <div id="tela">

  <div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

  </div>

      <script>

        forma = [
          {
          'label': '',
          'wait': 'PREENCHA O FORMULÁRIO',
          'botao': 'SOLICITAR',
          'blockCorner': '0',
          'fontsizecampos': '16px',
          'handler': 'https://script.google.com/macros/s/AKfycbzlG_Ctau80GhXNLOEvwY_m39I2xJ-FNENPlWpn65uNDoGKvQ0/exec'
          },
          { 
            'tipo': 'hidden',
            'var': 'COMENTARIO1',
            'default': 'PROCESSING'
          },
          {
            'tipo': 'multiline',
            'var': 'COMENTARIO2',
            'nome': 'Qual instrução ou procedimento?',
            'exemplo': 'Ex: como usar matriz de transformação?',
            'default': '',
            'maxchar': 500,
            'maxheight': 50,
            'alturainicial': 50,
          },
          { 
            'tipo': 'hidden',
            'var': 'DISCIPLINA',
            'default': 'Tecnologias Criativas'
          },
          { 
            'tipo': 'hidden',
            'var': 'FASE',
            'default': 'Solicitacoes'
          }
        ];

        setTimeout(function(event) {
                document.getElementById("tela").formgridstart(forma);
        }, 5000);
        
      </script>


    <hr style="width: 100%; clear: both; border-color: transparent;"></hr>

    <a name="Instruções / Procedimentos já solicitados" class="indice">Já solicitados</a>
<h2>Instruções / Procedimentos já solicitados</h2>
    <div>
        <div style="width: 100%;"><div id="langtype" style="float: right;"><code>PROCESSING</code></div><hr style="width: 100%; clear: both; border: 0;"></hr></div>
        <code>

<?php


$dbaddress = "localhost";
$dbusername = "ranoyaco_man";
$dbpassword = "theHelix64";
$sqldatabase = "ranoyaco_edu";
$conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);


$q = "SELECT FASE,COMENTARIO1,COMENTARIO2 FROM FEEDBACK WHERE FASE='Solicitacoes' AND COMENTARIO1='PROCESSING'"; // QUERY

if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
}

$response = mysqli_query($conn, $q);

if (mysqli_num_rows($response) > 0) {

	while($row = mysqli_fetch_assoc($response)) {

		echo $row['COMENTARIO2'] . "<br>";
        
    }
}

?>

        </code>

    </div>




<hr class="limpa"></hr>

    </div>

    <div id="bookendnav"></div>




    <div id="meta">
</div>
    <div id="metacompensate"></div>

    <div id="posicao"></div>
    <div id="posicaocompensate"></div>

</div>
</body>

</html>

    