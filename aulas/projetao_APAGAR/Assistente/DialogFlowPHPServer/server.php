<?php

/**
  * Servidor PHP de Fulfillment para DialogFlow com funções para criação de respostas em formato Card e Speech
  * @author Prof. Guilherme Ranoya
  */


/**
 * Cria cartão como resposta à solicitação
 * @param  Array $dados['text'] mensagem texto que aparece antes do cartão
 *          	 $dados['title'] titulo do cartão
 *          	 $dados['subtitle'] subtítulo do cartão
 *          	 $dados['image'] URL com imagem para cartão
 *          	 $dados['LABEL DO BOTÃO'] URL com link para primeiro botão
 *          	 $dados['LABEL DO BOTÃO 2'] URL com link para segundo botão
 *          	 Etc.
 *          
 *          Array $context['CONTEXTO1'] valor de referência de CONTEXTO1
 *          	  Etc.
 *
 * @return json  Json com a estrutura necessária para o cartão no DialogFlow
 */
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

/**
 * Cria uma resposta de texto/fala
 * @param  Array $dados['text'] Texto para ser apresentado / falado
 * @param  Array $context['CONTEXTO1'] valor para CONTEXTO1
 *               etc.
 * @return json  Json com a estrutura da resposta em texto
 */
function mText($dados, $context) {

  $resposta = array();
  $resposta['fulfillmentMessages'] = array();
  $resposta['fulfillmentMessages'][0] = array();
  $resposta['fulfillmentMessages'][0]['platform'] = "ACTIONS_ON_GOOGLE";
  $resposta['fulfillmentMessages'][0]['simpleResponses'] = array();
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'] = array();
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0] = array();
  $resposta['fulfillmentMessages'][1] = array();
  $resposta['fulfillmentMessages'][1]['text'] = array();
  $resposta['fulfillmentMessages'][1]['text']['text'] = array();


  // Mensagens de abertura
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0]['textToSpeech'] = $dados['text'];
  $resposta['fulfillmentMessages'][0]['simpleResponses']['simpleResponses'][0]['displayText'] = $dados['text'];
  $resposta['fulfillmentMessages'][1]['text']['text'][0] = $dados['text'];


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










/**
 * Processa as mensagens vindas do DialogFlow, e encaminha para a função que deve processar os dados
 * @param  json $update dados vindos do DialogFlow
 */
function processMessage($update) {

	/**
	 * Variável com o nome do INTENT acionado no DialogFlow
	 * @var string
	 */
    $DFintent = $update["queryResult"]["intent"]["displayName"];

    /**
	 * Variável com o nome do parâmetro passado pelo DialogFlow
	 * @var string
	 */	
    //$parametros = $update["queryResult"]["outputContexts"][0]["parameters"]["VARIAVELCOMPARAMETROS"];

    
    if($DFintent == "MINHA INTENT") {

        echo mText('text' => "Resposta padrão de teste");

    }
    
}

 
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

processMessage($update);


?>
