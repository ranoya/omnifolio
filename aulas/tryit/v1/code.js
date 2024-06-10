<form id='codigo' style='position: absolute; right: 75px; top: 15px; z-index:4560;'><div id='caixa' style='background-color: grey; color: white; width: 100px; padding: 3px 5px 3px 5px; padding: 5px 7px 5px 12px; font-family: monospace; font-size: 16px;'>Código</div><textarea id='meuinput' style='font-family: monospace; font-size: 15px; line-height: 18px;'></textarea></form>

  <script>


    $('#codigo').css('left', interfX);
    $('#codigo').css('top', interfY);
    $('#meuinput').css('width', textAW);
    $('#meuinput').css('height', textAH);
    $('#meuinput').val(lastcode);

    var drag = false;
      var finalX;
      var finalY;
      var interface;

      jQuery.get('https://www.ranoya.com/aulas/tryit/code.js', function(data) {
      interface = data;
      });


      $( document ).on( 'mousemove touchmove', function( event ) {

          if (drag) {
          $('#codigo').css('position', 'absolute');
          $('#codigo').css('left', (event.pageX - 50) + 'px');
          $('#codigo').css('top', (event.pageY - 25) + 'px');
          }
          
          });

      $(document).on('mouseup touchend', function () {

          drag = false;

      });


    $('#caixa').on('mousedown touchstart', function () {

        if (!drag) {

          drag = true;

        }


      });

    $('#meuinput').change( function () {

        var xpto = $('#meuinput').val();
        lastcode = xpto;

        interfX = $('#codigo').css('left');
        interfY = $('#codigo').css('top');
        textAW = $('#meuinput').css('width');
        textAH = $('#meuinput').css('height');

        $('#xpto').html(xpto + interface);

    });

    </script>
