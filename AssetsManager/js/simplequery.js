console.log("*** Simplequery 0.1 carregado");



function simpleq(mode, parametros, callb) {


            
            console.log("Funcao SimpleQ ativada");

            serviceurl = "";

            if(mode == "AMS") {

              serviceurl = 'https://www.ranoya.com/AssetsManager/simplequery/index.php';

            }
    
            $.ajax({
              url: serviceurl,
              type: 'get',
              dataType: 'json',
              data: parametros,
              cache: false,
              success: function(json) {
             
                  callb(json);

              },
              error: function(xhr, desc, err) {

                console.log(xhr + "\n" + err);
                
              }
            }); 
}