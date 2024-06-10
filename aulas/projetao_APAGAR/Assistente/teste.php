<?php

// função para criar um Card
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

// função para criar texto
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


// FUNÇÃO PARA FAZER UMA CÓPIA DO MODELO DE APRESENTAÇÃO DA QUEST
function makePPTCard($quest) {

        $dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_edu";

        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT id, avaliacao, pairing, siglatrabalho, fase, bloco, resumo, complementourlav, urlmodelo, disciplina, refdiscipina, filtro, slackurl, urlmaterial, urlavaliacao, urlbanner, diasemana, ano, periodo, local FROM Entregas WHERE pairing='".$quest."' LIMIT 1";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          $cartao = array();
          $contexto = array();
          $contexto['Quests'] = $quest;

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {
              
            $cartao['text'] = "Aqui está o modelo de apresentação da ".html_entity_decode($row['siglatrabalho']).":";
            $cartao['title'] = html_entity_decode($row['avaliacao']);
            $cartao['subtitle'] = "Modelos e arquivos";
            
            $cartao['Obter cópia'] = html_entity_decode($row['urlmodelo']);
            
            }
          } else {
            $cartao['text'] = "Não encontrei nenhum modelo";
          }

          echo mCard($cartao, $contexto);

          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }

}

// FUNÇÃO PARA APRESENTAR FERRAMENTAS
function tooling($f) {

  $dbaddress = "localhost";
  $dbusername = "lacombr_ranoyams";
  $dbpassword = "theHelix64";
  $sqldatabase = "lacombr_ams";
  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);
  $contexto = array("ferramentas" => $f);

  if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
  }

  $q = "SELECT id, titulo, taxo, benchmarklink, link FROM ferramentas WHERE publico='X' AND aulacin='X' AND taxo='".$f."' LIMIT 30";

  $qreturn = mysqli_query($conn, $q);

  if ($qreturn) {

    $cartao = array();
    $cartao['text'] = "Aqui estão as ferramentas e técnicas recomendadas:";
    $cartao['title'] = "";
    $cartao['subtitle'] = "Técnicas e ferramentas";

    if (mysqli_num_rows($qreturn) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($qreturn)) {
        
        foreach ($row as $key => $value) {
            
        $cartao[$row['titulo']] = html_entity_decode($row['link']);
        $cartao['title'] = html_entity_decode($row['taxo']);

        }
        
      }
    } else {
      $cartao['nada foi encontrado'] = "#";
    }

    echo mCard($cartao, $contexto);

    mysqli_close($conn);
    
    
    } else {
    return "Error in query: " . mysqli_error($conn);
    mysqli_close($conn);
  }

}

// FUNÇÃO PARA APRESENTAR TUTORIAIS
function tuts($f) {

  $contexto = array("ferramentas" => $f);
  $dbaddress = "localhost";
  $dbusername = "lacombr_ranoyams";
  $dbpassword = "theHelix64";
  $sqldatabase = "lacombr_ams";
  $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

  if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
  }

  $q = "SELECT id, titulo, taxo, learnlink FROM ferramentas WHERE ".$f."='X' AND publico='X' AND aulacin='X' LIMIT 10";

  $qreturn = mysqli_query($conn, $q);

  if ($qreturn) {

    $cartao = array();
    $cartao['text'] = "Aqui estão tutoriais para as ferramentas e técnicas recomendadas:";
    $cartao['title'] = "";
    $cartao['subtitle'] = "Tutoriais";

    if (mysqli_num_rows($qreturn) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($qreturn)) {
        
        foreach ($row as $key => $value) {
            
        $cartao[$row['titulo']] = html_entity_decode($row['learnlink']);
        $cartao['title'] = html_entity_decode($row['taxo']);

        }
        
      }
    } else {
      $cartao['nada foi encontrado'] = "";
    }

    echo mCard($cartao, $contexto);

    mysqli_close($conn);
    
    
    } else {
    return "Error in query: " . mysqli_error($conn);
    mysqli_close($conn);
  }

}

// FUNÇÃO PARA APRESENTAR PERGUNTAS DAS QUESTS
function perguntas($quest) {

        $texto = "";
        $dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_edu";

        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT id, avaliacao, pairing, siglatrabalho, fase, bloco, resumo, complementourlav, urlmodelo, disciplina, refdiscipina, filtro, slackurl, urlmaterial, urlavaliacao, urlbanner, diasemana, ano, periodo, local FROM Entregas WHERE pairing='".$quest."' LIMIT 1";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {

            $texto = "Estas são as perguntas da " . html_entity_decode($row['siglatrabalho']) . " (" . html_entity_decode($row['avaliacao']) . "):\n\n";  
              
            $texto = $texto . html_entity_decode($row['resumo']);
              
            }
          } else {
            $texto = "Desculpe... não encontrei nenhuma informação sobre isso.\n\n";
          }

          echo mText(array("text" => $texto));

          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }

}

// FUNÇÃO PARA APRESENTAR A QUEST NO TOOLKIT
function cartaoQuest($quest) {

        $dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_edu";

        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT id, avaliacao, pairing, siglatrabalho, fase, bloco, resumo, complementourlav, urlmodelo, disciplina, refdiscipina, filtro, slackurl, urlmaterial, urlavaliacao, urlbanner, diasemana, ano, periodo, local FROM Entregas WHERE pairing='".$quest."' LIMIT 1";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          $cartao = array();

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {
              
            $cartao['text'] = "Aqui estão as informações sobre a " . html_entity_decode($row['siglatrabalho']);
            $cartao['title'] = html_entity_decode($row['avaliacao']);
            $cartao['subtitle'] = html_entity_decode($row['bloco']);
            
            $cartao['Consultar'] = "https://www.ranoya.com/aulas/entregas/index.php?aula=".$row['filtro']."&trabalho=".$row['pairing'].html_entity_decode($row['complementourlav']);
            
            }
          } else {
            $cartao['nada foi encontrado'] = "";
          }

          echo mCard($cartao);

          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }

}


// FUNÇÃO PARA REGISTAR FEEDBACK NA PLANILHA DE AVALIAÇÃO
function registraFeedback($grupo, $mensagem) {

       $referenceWork = $grupo;
       $sheeturl = "https://docs.google.com/spreadsheets/d/1QOwEI88l6n1qftDaVBuTkIpebkaezywKncoKKJ_bMxI/edit";
       $nomedaplanilha = "GRUPOS";
       $spreadsheetservice = "https://script.google.com/macros/s/AKfycbykTeAwGIogjXzsm_8Xzcky-Nu00lonV0HAdz_6_r3Z6JjFSdY/exec?referencecolumn=1&reference=".urlencode($referenceWork)."&sheetheaders=1&sheetname=".$nomedaplanilha."&sheeturl=".$sheeturl."&TextoFeedback=".urlencode($mensagem);
       
       $curl = curl_init();
       curl_setopt_array($curl, array(
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $spreadsheetservice
      ));
      // Send the request & save response to $resp
      $data = curl_exec($curl);
      // Close request to clear up some resources
      curl_close($curl);

      $resposta = json_decode($data, true);

   echo mText(array("text" => $resposta['retorno']));

}






// 
//
// PROCESSA OS DADOS DO DIALOGFLOW
// 
// 

function processMessage($update, $matriz) {

    $trabalho = "";
    $ferram = "";
    $DFintent = $update["queryResult"]["intent"]["displayName"];



    // Responde à inteção enviada

    if($DFintent == "DocumentaQuests" || $DFintent == "DocumentaQuestsComContexto") {

          if ($update["queryResult"]["outputContexts"][0]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["outputContexts"][0]["parameters"]["Quests"];

          }

          if ($update["queryResult"]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["parameters"]["Quests"];

          }

          if ($trabalho == "") { 

             $trabalho = "Q1";

          }

        cartaoQuest($trabalho);

    }

    if($DFintent == "ApresentaPerguntas" || $DFintent == "ApresentaPerguntasComContexto") {

          if ($update["queryResult"]["outputContexts"][0]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["outputContexts"][0]["parameters"]["Quests"];

          }

          if ($update["queryResult"]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["parameters"]["Quests"];

          }

          if ($trabalho == "") { 

             $trabalho = "Q1";

          }

        echo perguntas($trabalho);
        
    }

    if($DFintent == "PPTApresentacao" || $DFintent == "PPTApresentacaoComContexto") {

          if ($update["queryResult"]["outputContexts"][0]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["outputContexts"][0]["parameters"]["Quests"];

          }

          if ($update["queryResult"]["parameters"]["Quests"]) {

             $trabalho = $update["queryResult"]["parameters"]["Quests"];

          }

          if ($trabalho == "") { 

             $trabalho = "Q1";

          }

        makePPTCard($trabalho);
        
    }

    if($DFintent == "ApresentaFerramentas" || $DFintent == "ApresentaFerramentasComContexto") {

        if ($update["queryResult"]["outputContexts"][0]["parameters"]["ferramentas"]) {

          $ferram = $update["queryResult"]["outputContexts"][0]["parameters"]["ferramentas"];

        }

        if ($update["queryResult"]["parameters"]["ferramentas"]) {

          $ferram = $update["queryResult"]["parameters"]["ferramentas"];

        }

        if ($ferram == "") { 

          $ferram = "presenting";

        }
        
        echo tooling($ferram);
        
    }

    if($DFintent == "ApresentaTutorial" || $DFintent == "ApresentaTutorialComContexto") {

        if ($update["queryResult"]["outputContexts"][0]["parameters"]["ferramentas"]) {

          $ferram = $update["queryResult"]["outputContexts"][0]["parameters"]["ferramentas"];

        }

        if ($update["queryResult"]["parameters"]["ferramentas"]) {

          $ferram = $update["queryResult"]["parameters"]["ferramentas"];

        }

        if ($ferram == "") { 

          $ferram = "presenting";

        }

        echo tuts($ferram);
        
    }

    if ($DFintent == "Feedback") {

        $grupo = $update["queryResult"]["parameters"]["grupo"];
        $mensagem = $update["queryResult"]["parameters"]["mensagem"];
        registraFeedback($grupo, $mensagem);

    }

    if($DFintent == "RelacaoQuests") {

        $dbaddress = "localhost";
        $dbusername = "lacombr_ranoyams";
        $dbpassword = "theHelix64";
        $sqldatabase = "lacombr_edu";
        $conn = mysqli_connect($dbaddress, $dbusername, $dbpassword, $sqldatabase);

        if (!$conn) {
          die("<br>Connection failed: " . mysqli_connect_error() . "<br>");
        }

        $q = "SELECT id, avaliacao, pairing, siglatrabalho, fase, bloco, resumo, complementourlav, urlmodelo, disciplina, refdiscipina, filtro, slackurl, urlmaterial, urlavaliacao, urlbanner, diasemana, ano, periodo, local FROM Entregas WHERE refdiscipina='projetao'";

        $qreturn = mysqli_query($conn, $q);

        if ($qreturn) {

          $cartao = array();

          if (mysqli_num_rows($qreturn) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($qreturn)) {
              
            $cartao['text'] = "Aqui estão as informações sobre todas as Quests: ";
            $cartao['title'] = "Toolkit Completo";
            $cartao['subtitle'] = html_entity_decode($row['bloco']);
            
            $cartao[html_entity_decode($row['avaliacao'])] = "https://www.ranoya.com/aulas/entregas/index.php?aula=".$row['filtro']."&trabalho=".$row['pairing'].html_entity_decode($row['complementourlav']);
            
            }
          } else {
            $cartao['nada foi encontrado'] = "";
          }

          echo mCard($cartao);

          mysqli_close($conn);
          
          
          } else {
          return "Error in query: " . mysqli_error($conn);
          mysqli_close($conn);
        }
   
    }
    

}



 
function sendMessage($parameters) {
    echo json_encode($parameters);
}
 
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

processMessage($update, $quests);


?>
