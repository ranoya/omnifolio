<style>

    .supergrid {
      display: grid;
      grid-template-columns: [inicio] 1fr 1fr 1fr 1fr 1fr 1fr 1fr [fim];
      gap: 20px 40px;
      margin-bottom: 5vw;
      font-size: 12px;
      text-align: center;

    }

    .gridfour {
      display: grid;
      grid-template-columns: [inicio] 1fr 1fr 1fr 1fr [fim];
      gap: 20px 40px;
      width: calc(100% - 15px);
	  margin-bottom: 5vw;

    }

    .gridtwo {
      display: grid;
      grid-template-columns: [inicio] 1fr 1fr [fim];
      gap: 0 40px;
      width: calc(100% - 15px);
    }

    .gridfive {
      display: grid;
      grid-template-columns: [inicio] 1fr 1fr 1fr 1fr 1fr [fim];
      gap: 0 15px;
      width: calc(100% - 15px);
      font-size: 16px;
      line-height: 20px;
      text-align: left;
    }

    .linksmall {
      font-size: 16px;
      line-height: 20px;
      text-align: left;
	  color: var(--text-link, #ac229d);
      
    }

	.linksmall a {
	  color: var(--text-link, #ac229d);
	  border: 1px solid transparent;
	  transition: all 0.4s ease-in;
    -webkit-transition: all 0.4s ease-in;
    -moz-transition: all 0.4s ease-in;
    -o-transition: all 0.4s ease-in;
	text-decoration: none;
	margin-top: 4px;
	margin-bottom: 4px;

	}

	.linksmall a:hover {
		border: 1px solid var(--text-link, #ac229d);
		transition: all 0.4s ease-in;
    -webkit-transition: all 0.4s ease-in;
    -moz-transition: all 0.4s ease-in;
    -o-transition: all 0.4s ease-in;
	}

    .newlistavideos {
      width: 100%;
      padding: 0 !important;
      margin: 0 !important;
      padding-top: 100% !important;
      border: 10px solid var(--bg-color-t, rgba(98, 3, 132, 0.6));
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      

    }

    .newlistavideos:hover {
      border: 10px solid var(--iconhighlight, #f44292);
    }

    .datatable tr {
      text-align: left !important;
    }

    .datatable td {
      text-align: left !important;
    }

    .datatable th {
      text-align: left !important;
    }

	.tabelapesquisa {
        border: 1px solid var(--sumarionicon-inverse);
        border-bottom: 0 transparent none;
        border-left: 0 transparent none;
        display: grid;
        grid-template-columns: [inicio] 150px  1fr 1fr [fim];
        gap: 0 0;
        width calc(100% - 2px);
		margin-bottom: 5vw;

      }

      .tabelapesquisa2 {
        border: 1px solid var(--sumarionicon-inverse);
        border-bottom: 0 transparent none;
        border-left: 0 transparent none;
        display: grid;
        grid-template-columns: [inicio] 250px  1fr [fim];
        gap: 0 0;
        width calc(100% - 2px);
		margin-bottom: 5vw;

      }

      .tabelapesquisa span, .tabelapesquisa2 span {

        border: 0 transparent none;

      }

      .tabelapesquisa div, .tabelapesquisa2 div {
        border: 1px solid var(--sumarionicon-inverse);
        border-right: 0 transparent none;
        border-top: 0 transparent none;

        padding: 10px;
        padding-left: 30px;
        padding-right: 30px;
        font-size: 16px;
        line-height: 18px;
        text-align: left;
      }
      
      .tablehead {
        font-size: 16px;
        font-weight: 600;
        line-height: 18px;
      }

      @media screen and (min-width: 1200px) {

        .supergrid {

      grid-template-columns: [inicio] 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr [fim];
      gap: 20px 40px;

    }

      }

      @media screen and (max-width: 800px) {

        .supergrid {
      grid-template-columns: [inicio] 1fr 1fr 1fr 1fr 1fr [fim];
      gap: 20px 40px;
      margin-bottom: 5vw;
    }

    .gridfour {

      grid-template-columns: [inicio] 1fr 1fr 1fr [fim];
      gap: 20px 40px;

    }

    .gridtwo {
      grid-template-columns: [inicio] 1fr 1fr [fim];
      gap: 0 40px;
    }

    .gridfive {
      display: grid;
      grid-template-columns: [inicio] 1fr 1fr 1fr [fim];
      gap: 0 15px;
    }

    .tabelapesquisa {

        grid-template-columns: [inicio] 90px  1fr 1fr [fim];
        font-size: 14px;
        line-height: 15px;


      }

      .tabelapesquisa2 {

        grid-template-columns: [inicio] 140px  1fr [fim];
        font-size: 14px;
        line-height: 15px;

      }

      .tabelapesquisa div, .tabelapesquisa2 div {

        padding: 10px;
        padding-left: 10px;
        padding-right: 10px;

      }

      }

       @media screen and (max-width: 480px) {

        .supergrid {
      grid-template-columns: [inicio] 1fr 1fr [fim];
      gap: 20px 40px;
      margin-bottom: 5vw;
    }

    .gridfour {

      grid-template-columns: [inicio] 1fr [fim];
      gap: 20px 40px;

    }

    .gridtwo {
      grid-template-columns: [inicio] 1fr [fim];
      gap: 0 40px;
    }

    .gridfive {
      display: grid;
      grid-template-columns: [inicio] 1fr [fim];
      gap: 0 15px;
    }

      }

    </style>


<?php

/**
 * 
 * FUNÇÕES PARA CAPTURA DADOS DO BD
 * 
 */

function fromAMS($q) {
    $dbaddress = "localhost";
    $dbusername = "ranoyaco_man";
    $dbpassword = "theHelix64";
    $sqldatabase = "ranoyaco_ams";
    $dados = [];
    $connPB = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);
    if (!$connPB) {
        die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
    } 
    $responseRP = mysqli_query($connPB, $q);
    if ($responseRP) {
        //echo "<br>Query successfully executed<br>";
    } else {
        echo "<br>Error in query: " . mysqli_error($conn) . "<br>";
    }
    if (mysqli_num_rows($responseRP) > 0) {
            $linha = 0;
            $dados[$linha] = [];
            while($rowRP = mysqli_fetch_assoc($responseRP)) {
                foreach($rowRP as $key => $value) {
                    $dados[$linha][$key] = $value;
                }
            $linha++;
        }
    }
    return $dados;
}

/**
 * 
 * FUNÇÕES PARA CAPTURA DADOS DO BD
 * 
 */

function fromEDU($q) {
    $dbaddress = "localhost";
    $dbusername = "ranoyaco_man";
    $dbpassword = "theHelix64";
    $sqldatabase = "ranoyaco_edu";
    $dados = [];
    $connPB = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);
    if (!$connPB) {
        die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
    } 
    $responseRP = mysqli_query($connPB, $q);
    if ($responseRP) {
        //echo "<br>Query successfully executed<br>";
    } else {
        echo "<br>Error in query: " . mysqli_error($conn) . "<br>";
    }
    if (mysqli_num_rows($responseRP) > 0) {
            $linha = 0;
            $dados[$linha] = [];
            while($rowRP = mysqli_fetch_assoc($responseRP)) {
                foreach($rowRP as $key => $value) {
                    $dados[$linha][$key] = $value;
                }
            $linha++;
        }
    }
    return $dados;
}


$maximos = intval(date("Y"));
$minimos = 2014;

$temas = [];
$temas[2014] = "";
$temas[2015] = "Computação Vestível e Artefatos Além do Sandbox";
$temas[2016] = "";
$temas[2017] = "Computação Criativa / Arte Generativa";
$temas[2018] = "";
$temas[2019] = "Artefatos Narrativos Digitais";
$temas[2020] = "";
$temas[2021] = "Poéticas Computacionais / Tecnologias Criativas";
$temas[2022] = "Visualização de dados / Dataviz";


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js"></script>