<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

    <script type='text/javascript' src="https://www.ranoya.com/aulas/pesquisas/dev/formgrid.js"></script>
 
      <style>

        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap');

        :root {

          --formgrid-background: #FFFFFF;
          --formgrid-foreground: #000cd0;
          --formgrid-highlight: #FFFFFF;
          --formgrid-passivecolor: #000cd055;
          --formgrid-largura: 100%;
          --formgrid-fontsizecampos: 22px;
          --formgrid-fontsizelabel: 14px;
          --formgrid-font-family: 'Open Sans';
        
        }

        html {

          background-color: #000cd0;
          color: white;
        
        }

        body {


        }  

        #tela {

          position: fixed;
          top: calc(50vh - 20vh);
          left: calc(50vw - 35vw);
          width: 70vw;
          height: 20vh;
          text-align: left;
          padding: 0;
          margin: 0;
          transition: all .4s ease-in;

        }

        


      </style>


  	</head>

    
    <body>

   	  <div id="tela"></div>

      <script>

        forma = [
          {
          'label': 'ANTES DE COMEÇAR',
          'wait': 'POR FAVOR, PREENCHA AS INFORMAÇÕES',
          'botao': 'ENVIAR',
          'blockCorner': '0',
          'handler': 'https://script.google.com/macros/s/AKfycbzlG_Ctau80GhXNLOEvwY_m39I2xJ-FNENPlWpn65uNDoGKvQ0/exec',
          },
          {
            'tipo': 'singleline',
            'var': 'COMENTARIO1',
            'nome': 'O que você está esperando aprender nesta disciplina?',
            'exemplo': 'Programar com HTML.',
            'default': '',
            'maxchar': 500
          },
          {
            'tipo': 'singleline',
            'var': 'COMENTARIO2',
            'nome': 'Você tem alguma preocupação em relação à disciplina?',
            'exemplo': 'Tenho medo de não conseguir entender.',
            'default': '',
            'maxchar': 500
          },
          { 
            'tipo': 'hidden',
            'var': 'DISCIPLINA',
            'default': 'Webdesign'
          },
          { 
            'tipo': 'hidden',
            'var': 'FASE',
            'default': 'expectativa / angústia'
          }
        ];

        document.getElementById("tela").formgridstart(forma);

        function avisaparacontinuar() {

          console.log('Questionário: enviei um continue aí...');
          parent.parent.postMessage("continue");

        }
      </script>

    </body>
</html>