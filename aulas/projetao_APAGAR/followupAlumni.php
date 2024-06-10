<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8"/>
    <title>Projetão: Alumni Follow Up</title>
    <meta name="generator" content="artesanal" />
    <meta name="description" content="Follow up dos projetos e atividades de ex-alunos de Projetão">
    <meta name="keywords" content="Follow up, Projetão, Cin, UFPE, Startups">
    <meta name="author" content="Guilherme Ranoya">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
        <link REL="SHORTCUT ICON" HREF="https://www.ranoya.com/aulas/projetao/favicon.ico">     
        <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/projetao/cover.jpg" />
        <meta property="og:image" content="https://www.ranoya.com/aulas/projetao/cover.jpg" />
        <meta property="og:image:width" content="1145" />
        <meta property="og:image:height" content="601" />
        <meta name = "pinterest" content = "nopin" />
        <meta name="pinterest" content="nohover">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="black">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="black">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script type='text/javascript' src="https://www.ranoya.com/AssetsManager/js/ams.js"></script>
    <script type='text/javascript' src="https://www.ranoya.com/EduManager/js/eie.js"></script>

    <style>

html, body {
    color: white;
    padding: 0;
    margin: 30px;
    font-family: Helvetica, Arial, sans-serif;

}

#startups, #alunos {
    width: 100%;
    margin-right: 0;
    float: left;
}

h1 {

  font-size: 28px;
  line-height: 34px;  

}

a {

    color: white;
    text-decoration: none;
    background-color: transparent;
    padding: 3px 5px 3px 5px;
    margin: -5px -3px -5px -3px;
}

a:hover {

    background-color: white;
    color: #5e0c3a;


}

.peoplebloco {
  display: inline-block;
  width: 100%;
  float: left;
  margin-top: 45px;
}

.peopleproj {

  font-size: 16px;
  line-height: 16px;
  color: rgba(255,255,255,0.5);

}

.peoplethumb {

  width: 80px;
  height: 80px;
  border-radius: 40px;
  float: left;
  vertical-align: top;
  margin-right: 15px;

}

.peoplename {

  font-size: 28px;
  line-height: 28px;
  font-weight: bold;
  clear: right;
  float: left;
  margin-bottom: 5px;
  word-break: break-word;
  width: calc(100% - 95px);

}

.peopleaction {

  float: right;
  width: calc(100% - 95px);
  font-size: 20px;
  line-height: 24px;

}

.peopleano {

  float: left;
  margin-right: 7px;
  font-size: 18px;

}



    </style>
    
  </head>
  
  <body>

    <div id="alunos">
    <h1>ALUMNI</h1>
    <div id="alumni"></div>
    </div>

    <script>
    AddQuery({cat: 'alumni', render: 'people', filter: 'aulacin', divtarget: '#alumni'});                
    ajaxexchange();
    </script>

</body>
</html>