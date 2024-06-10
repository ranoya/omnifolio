<?php

function mCard($dados, $context) {

  $resposta = array();
  $resposta['fulfillmentMessages'] = array();
  $resposta['fulfillmentMessages'][0] = array();
  $resposta['fulfillmentMessages'][0]['platform'] = "ACTIONS_ON_GOOGLE";
  $resposta['fulfillmentMessages'][0]['simpleResponses'] = array();
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'] = array();
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0] = array();
  $resposta['fulfillmentMessages'][1] = array();
  $resposta['fulfillmentMessages'][1]['platform'] = "ACTIONS_ON_GOOGLE";  
  $resposta['fulfillmentMessages'][1]['basicCard'] = array();
  $resposta['fulfillmentMessages'][1]['basicCard']['image'] = array();
  $resposta['fulfillmentMessages'][1]['basicCard']['buttons'] = array();
  $resposta['fulfillmentMessages'][2] = array();
  $resposta['fulfillmentMessages'][2]['text'] = array();
  $resposta['fulfillmentMessages'][2]['text']['text'] = array();
  $resposta['fulfillmentMessages'][3] = array();
  $resposta['fulfillmentMessages'][3]['card'] = array();
  $resposta['fulfillmentMessages'][3]['card']['buttons'] = array();

  // Mensagens de abertura
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0]['textToSpeech'] = $dados['text'];
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0]['displayText'] = $dados['text'];
  $resposta['fulfillmentMessages'][2]['text']['text'][0] = $dados['text'];

  // Cabeçalho do cartão
  $resposta['fulfillmentMessages'][1]['basicCard']['title'] = $dados['title'];
  $resposta['fulfillmentMessages'][3]['card']['title'] = $dados['title'];
  $resposta['fulfillmentMessages'][1]['basicCard']['formattedText'] = $dados['subtitle'];
  $resposta['fulfillmentMessages'][3]['card']['subtitle'] = $dados['subtitle'];
  if ($dados['image']) {
  $resposta['fulfillmentMessages'][3]['card']['imageUri'] = $dados['image'];
  $resposta['fulfillmentMessages'][1]['basicCard']['image']['imageUri'] = $dados['image'];
  } else {
  $resposta['fulfillmentMessages'][3]['card']['imageUri'] = "";
  $resposta['fulfillmentMessages'][1]['basicCard']['image']['imageUri'] = "";  
  }
  if ($dados['label']) {
  $resposta['fulfillmentMessages'][1]['basicCard']['image']['accessibilityText'] = $dados['label'];
  }

  // Botões do cartão
  $mi = 0;
  foreach ($dados as $key => $value) {
    if ($key != "label" && $key != "image" && $key != "subtitle" && $key != "title" && $key != "text") {

    $resposta['fulfillmentMessages'][1]['basicCard']['buttons'][$mi] = array();
    $resposta['fulfillmentMessages'][3]['card']['buttons'][$mi] = array();
    $resposta['fulfillmentMessages'][1]['basicCard']['buttons'][$mi]['title'] = $key;
    $resposta['fulfillmentMessages'][3]['card']['buttons'][$mi]['text'] = $key;
    $resposta['fulfillmentMessages'][1]['basicCard']['buttons'][$mi]['openUriAction'] = array();
    $resposta['fulfillmentMessages'][1]['basicCard']['buttons'][$mi]['openUriAction']['uri'] = $value;
    $resposta['fulfillmentMessages'][3]['card']['buttons'][$mi]['postback'] = $value;
    $mi++;

    }
  }

  if ($context) {

    $resposta['outputContexts'] = array();
    $resposta['outputContexts'][0] = array();
    $resposta['outputContexts'][0]['name'] = "projects/hal-hidrmh/agent/sessions/83d47c11-0d81-0b0c-f659-5ab240b46742/contexts/disciplinaAtual";
    $resposta['outputContexts'][0]['lifespanCount'] = 5;
    $resposta['outputContexts'][0]['parameters'] = array();
    foreach ($context as $key => $value) {
      $resposta['outputContexts'][0]['parameters'][$key] = $value;
    }

  }

  return json_encode($resposta);
}



// FUNÇÃO MODIFICADA PARA CRIAÇÃO DE CARTÃO COM LINK PARA APRESENTAçÃO
function makePPTCard($quest) {

        $dbaddress = "localhost";
        $dbusername = "lacombr_hal";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_HalData";
        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT oid, trabalho, reftrabalho, siglatrabalho, fasetrabalho, resumo, complementourlav, urlmodelo, disciplina, refdiscipina, filtro, slackurl, urlmaterial, urlavaliacao, urlbanner, dia, ano, periodo, periodo, local FROM Aulastable WHERE reftrabalho ='".$quest"' LIMIT 1";

        $qreturn = mysqli_query($conn, $q);

        $cartao = array();
        $contexto = array();
        $contexto['Quests'] = $quest;

        if ($qreturn) {

          
          
          
          } else {
          echo "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }

}


makePPTCard("Q1");

?>