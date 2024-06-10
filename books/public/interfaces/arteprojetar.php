<?php
session_start();
?>

<!DOCTYPE html>
	<html>
	<head>
<?php
require '../interfaces/meta.php';
?> 
		<title>A sutil arte de projetar | Ensaios sobre o design de interfaces digitais</title>
		<meta property="og:title" content="A sutil arte de projetar | Ensaios sobre o design de interfaces digitais">
  		<meta name="description" content="A sutil arte de projetar? Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
		<meta property="og:description" content="A sutil arte de projetar? Capítulo da versão digital do livro Ensaios sobre o design de interfaces digitais, do Prof. Guilherme Ranoya">
	</head>

<body>

<div class="bigwhitesapce"></div>

<div id="chapter">

<h1 id="titulocapitulo">A sutil arte de projetar</h1>

<div class="corpus">

<p>Sou arquiteto de formação, assim como todos os professores que me antecederam. Nunca tive aulas de design com um designer. Mas, como todo arquiteto de minha geração, tive excessivas horas-aula de projeto: muito mais do que consta nos atuais currículos (mais do que o dobro, para ser preciso).</p>

<p>Ao avaliar meus projetos e processo de trabalho, aqueles que me ensiaram a projetar nunca se preocuparam com algo que parece ter se tornado uma obsessão dos profissionais da atualidade: os "entregáveis", um conjunto de documentos produzidos para mostrar (para alguém) que o projeto está sendo feito, quase como um indicativo de produtividade dos projetistas. Um projeto sem uma "persona" ou sem uma "jornada do consumidor" indica (ou indicaria), hoje, que o projetista não sabe projetar.</p>

<p>Perto de toda a parafernália de documentos produzidos para um projeto contemporâneo, os processos projetuais que aprendi, em meu tempo de estudante, parecem simplórios (e, em muitos sentidos, eram mesmo, devo admitir).</p>

<p>É fato notório que muito do que se ensinava enquanto método projetual na década de 90 se resumia a um "achismo" disfarçado. As discussões sobre os projetos, muitas vezes, ficavam obstruídas pela opinião, ou gosto pessoal, completamente confundidos como se servissem como método. O que se conhecia efetivamente como ciência projetual era bastante frágil, se não, ultrapassada. Claro que já existia avanço significativo sobre o <i>Design Science</i>, mas tratamos, nesse tempo pré-internet, de um conhecimento que demorava muito tempo para chegar aqui, e mais tempo ainda para ser incorporado e ensinado.</p>

<p>Tecerei aqui alguns comentários sobre as estas três questões: a ciência projetual, a ausência dela na prática projetual, e a confusão entre projetar e documentar/comunicar um projeto:</p>

</div>

<div class="symbol"></div>

<svg class="illTypeA illLeft" viewBox="0 0 970 1398" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M465.599 355.816C453.505 80.062 420.381 0 359 0C279 0 27.0014 200 3.00061 488C-18.3334 744 99 900 239 972C374.171 1041.52 427 964 447 900C454.379 876.388 460.927 828.033 465.312 777.787L465.153 777.866C443.138 733.836 404.938 706.974 367.763 699.893C330.94 692.879 295.702 705.091 275.432 738.875C248.439 783.863 246.933 821.231 256.006 847.213C265.22 873.599 285.467 889.292 304.894 892.339C315.593 894.017 329.162 893.577 342.138 890.425C355.218 887.248 366.292 881.671 373.356 874.288C379.912 867.436 383.7 858.415 381.806 845.489C379.796 831.772 371.199 812.761 350.119 787.847L373.02 768.469C395.939 795.555 408.343 819.668 411.489 841.139C414.751 863.4 407.852 881.63 395.032 895.028C382.721 907.895 365.732 915.567 349.219 919.578C332.602 923.614 315.045 924.298 300.245 921.977C268.672 917.024 240.119 892.716 227.683 857.103C222.402 841.979 220.042 824.983 221.348 806.578L218.663 805.825C225.46 781.589 220.131 758.636 208.893 743.716C197.872 729.083 181.73 722.448 164.031 727.794C137.829 735.709 125.165 749.254 120.167 761.039C115.002 773.22 117.373 784.458 122.452 790.761C125.616 794.69 130.624 798.981 136.358 802.104C142.184 805.278 147.479 806.562 151.406 806.285C154.599 806.06 157.589 804.839 160.429 800.611C163.715 795.72 167.116 786.185 167.72 768.827L197.702 769.87C196.999 790.072 192.988 805.943 185.332 817.34C177.23 829.399 165.748 835.348 153.517 836.211C142.019 837.022 130.936 833.313 122.007 828.449C112.984 823.534 104.859 816.743 99.0896 809.582C86.2988 793.705 83.5668 770.505 92.5478 749.327C101.696 727.755 122.428 709.022 155.357 699.076C186.935 689.538 215.493 702.614 232.856 725.667C235.966 729.796 238.734 734.252 241.126 738.976C243.714 733.848 246.571 728.667 249.707 723.44C254.332 715.732 259.542 708.87 265.232 702.829L264.133 701.299C304.113 672.579 324.576 630.602 325.671 592.774C326.755 555.305 309.108 522.45 272.536 507.795C223.837 488.28 186.703 492.721 162.489 505.8C137.898 519.083 125.616 541.562 125.689 561.227C125.729 572.057 128.316 585.384 133.486 597.696C138.697 610.107 145.961 620.156 154.371 625.959C162.176 631.345 171.683 633.654 184.146 629.734C197.37 625.574 214.777 614.07 236.032 589.304L258.797 608.842C235.689 635.768 213.849 651.839 193.149 658.351C171.687 665.103 152.594 661.182 137.332 650.651C122.675 640.536 112.405 624.98 105.826 609.311C99.2053 593.545 95.7445 576.319 95.6891 561.338C95.5709 529.379 115.042 497.332 148.232 479.404C160.471 472.793 174.454 468.133 189.958 465.954C145.564 453.953 103.586 419.962 80.4119 369.302L107.693 356.822C128.17 401.588 165.417 429.757 202.325 438.121C238.883 446.405 274.523 435.42 295.951 402.359C324.484 358.333 327.284 321.039 319.116 294.759C310.821 268.069 291.13 251.685 271.82 247.967C261.185 245.919 247.609 245.889 234.531 248.59C221.349 251.312 210.088 256.503 202.773 263.637C195.984 270.257 191.886 279.142 193.331 292.126C194.865 305.904 202.798 325.202 223.004 350.83L199.445 369.404C177.478 341.54 165.917 317.012 163.516 295.445C161.026 273.084 168.553 255.105 181.828 242.159C194.578 229.726 211.822 222.646 228.464 219.21C245.211 215.752 262.781 215.675 277.492 218.508C308.874 224.551 336.569 249.832 347.764 285.855C359.087 322.287 353.481 368.753 321.126 418.675C302.639 447.198 276.212 463.337 247.464 468.705C259.065 471.22 271.16 474.925 283.695 479.948C299.215 486.167 312.165 494.849 322.604 505.3C325.352 489.648 330.689 475.161 338.32 462.558C359.73 427.201 398.897 407.589 445.59 419.74C453.537 421.808 461.048 424.189 468.13 426.845C467.756 413.625 467.344 400.782 466.894 388.307C438.272 379.53 414.607 360.04 398.43 333.899C372.516 292.021 365.977 233.776 386.023 175.284L385.699 175.193C393.465 147.5 387.404 121.172 374.445 103.966C361.703 87.0482 342.85 79.2188 322.164 85.467C292.376 94.4644 277.687 109.967 271.831 123.775C265.808 137.978 268.49 151.304 274.651 158.952C278.358 163.553 284.162 168.517 290.79 172.127C297.511 175.788 303.8 177.375 308.661 177.032C312.79 176.741 316.657 175.085 320.161 169.87C324.11 163.991 327.961 152.916 328.644 133.28L358.626 134.323C357.844 156.803 353.383 174.215 345.063 186.599C336.299 199.646 323.939 206.029 310.773 206.958C298.339 207.835 286.263 203.824 276.439 198.472C266.522 193.07 257.601 185.607 251.289 177.773C237.415 160.551 234.373 135.263 244.212 112.063C254.218 88.4676 276.976 67.7775 313.49 56.7485C348.055 46.3081 379.324 60.5791 398.409 85.9175C415.822 109.037 423.528 141.555 416.623 174.921L417.952 175.453C396.173 229.858 402.023 282.692 423.941 318.112C434.408 335.026 448.569 348.142 465.599 355.816ZM470.779 590.902C464.118 589.276 457.454 585.337 451.217 577.734C442.63 567.266 434.581 549.455 429.761 520.583L405.103 524.699C410.323 555.971 419.515 578.507 431.889 593.59C443.137 607.301 456.718 614.451 470.909 616.323C470.97 631.849 471 647.738 471 664C471 682.566 470.238 705.045 468.864 728.831C442.85 697.315 408.399 677.094 373.376 670.423C360.055 667.886 346.609 667.323 333.545 668.863C347.441 644.919 354.928 618.883 355.658 593.641C355.733 591.048 355.736 588.462 355.667 585.887L356.887 585.379C356.41 584.232 355.948 583.085 355.503 581.939C354.678 567.22 351.461 552.912 345.792 539.705C344.01 514.93 349.401 492.524 359.705 475.507C375.753 449.005 403.965 434.74 439.294 443.934C450.188 446.769 460.013 450.212 468.837 454.118C469.826 496.052 470.468 541.56 470.779 590.902ZM329 1037C381.345 1037 449 1020 485 922C521 1020 588.655 1037 641 1037C641 1037 621 1219 495 1398V1138C505.667 1135.33 522 1117 522 1101C522 1085 507 1063 485 1063C463 1063 448 1085 448 1101C448 1117 464.334 1135.33 475 1138V1398C349 1219 329 1037 329 1037ZM504.402 355.817C516.495 80.0621 549.619 0 611 0C691 0 942.998 200 966.999 488C988.333 743.999 871 899.999 731 971.999C595.829 1041.52 543 963.999 523 899.999C515.621 876.387 509.073 828.033 504.689 777.787L504.848 777.866C526.862 733.836 565.062 706.974 602.238 699.893C639.06 692.879 674.298 705.092 694.568 738.875C721.561 783.863 723.067 821.231 713.994 847.213C704.78 873.599 684.533 889.292 665.106 892.339C654.407 894.017 640.839 893.577 627.862 890.425C614.782 887.248 603.708 881.671 596.644 874.288C590.088 867.436 586.3 858.415 588.194 845.489C590.204 831.772 598.801 812.761 619.882 787.847L596.98 768.469C574.061 795.555 561.658 819.668 558.511 841.139C555.249 863.4 562.149 881.63 574.968 895.028C587.279 907.895 604.268 915.567 620.782 919.578C637.398 923.613 654.955 924.298 669.756 921.976C701.328 917.024 729.881 892.716 742.317 857.103C747.598 841.979 749.958 824.983 748.652 806.578L751.337 805.825C744.54 781.589 749.869 758.636 761.107 743.716C772.128 729.083 788.27 722.449 805.969 727.794C832.171 735.709 844.835 749.254 849.833 761.04C854.998 773.22 852.626 784.458 847.548 790.761C844.383 794.69 839.375 798.981 833.642 802.104C827.816 805.278 822.521 806.562 818.594 806.285C815.401 806.06 812.411 804.839 809.571 800.611C806.285 795.72 802.884 786.185 802.28 768.827L772.298 769.87C773.001 790.072 777.012 805.943 784.668 817.34C792.77 829.399 804.252 835.348 816.483 836.211C827.981 837.022 839.064 833.313 847.993 828.449C857.016 823.534 865.141 816.743 870.91 809.582C883.701 793.705 886.433 770.505 877.452 749.327C868.304 727.755 847.572 709.022 814.643 699.076C783.065 689.538 754.507 702.614 737.144 725.667C734.034 729.796 731.266 734.252 728.874 738.976C726.286 733.848 723.429 728.667 720.293 723.441C715.668 715.732 710.458 708.871 704.768 702.829L705.867 701.299C665.887 672.579 645.424 630.602 644.33 592.774C643.245 555.305 660.893 522.45 697.464 507.795C746.163 488.281 783.297 492.721 807.511 505.8C832.102 519.083 844.384 541.562 844.311 561.227C844.271 572.057 841.684 585.384 836.514 597.696C831.303 610.107 824.039 620.156 815.629 625.959C807.824 631.345 798.317 633.654 785.854 629.734C772.63 625.574 755.223 614.07 733.969 589.305L711.203 608.842C734.311 635.768 756.151 651.839 776.852 658.351C798.313 665.103 817.406 661.182 832.668 650.651C847.325 640.536 857.595 624.98 864.174 609.311C870.795 593.545 874.256 576.319 874.311 561.338C874.429 529.379 854.958 497.332 821.768 479.405C809.529 472.793 795.546 468.133 780.042 465.954C824.436 453.953 866.414 419.963 889.588 369.302L862.307 356.823C841.83 401.588 804.583 429.757 767.675 438.121C731.117 446.405 695.477 435.421 674.05 402.359C645.516 358.333 642.717 321.04 650.884 294.759C659.179 268.07 678.871 251.686 698.181 247.967C708.815 245.92 722.391 245.89 735.469 248.59C748.651 251.312 759.912 256.503 767.227 263.637C774.016 270.258 778.114 279.142 776.669 292.126C775.135 305.904 767.202 325.202 746.996 350.831L770.555 369.404C792.523 341.541 804.084 317.013 806.485 295.446C808.974 273.085 801.447 255.105 788.172 242.159C775.423 229.726 758.179 222.647 741.536 219.21C724.789 215.752 707.22 215.676 692.508 218.508C661.126 224.551 633.432 249.833 622.236 285.856C610.914 322.287 616.519 368.753 648.875 418.675C667.361 447.198 693.788 463.337 722.536 468.706C710.935 471.22 698.84 474.925 686.305 479.948C670.785 486.167 657.835 494.849 647.396 505.3C644.648 489.648 639.311 475.161 631.68 462.558C610.27 427.201 571.104 407.589 524.411 419.739C516.463 421.808 508.952 424.189 501.87 426.845C502.244 413.625 502.656 400.782 503.106 388.307C531.729 379.531 555.394 360.04 571.57 333.899C597.484 292.022 604.024 233.777 583.977 175.285L584.302 175.194C576.536 147.5 582.596 121.172 595.555 103.967C608.297 87.0489 627.15 79.2194 647.836 85.4677C677.624 94.465 692.313 109.967 698.169 123.776C704.192 137.978 701.511 151.305 695.349 158.953C691.642 163.554 685.838 168.517 679.21 172.128C672.489 175.789 666.201 177.376 661.339 177.033C657.21 176.742 653.343 175.086 649.839 169.87C645.89 163.992 642.039 152.916 641.356 133.281L611.374 134.324C612.157 156.804 616.617 174.215 624.937 186.599C633.702 199.646 646.061 206.03 659.228 206.959C671.661 207.836 683.737 203.824 693.561 198.473C703.478 193.071 712.4 185.608 718.711 177.774C732.585 160.552 735.627 135.264 725.788 112.063C715.782 88.4682 693.025 67.7781 656.511 56.7491C621.945 46.3087 590.676 60.5798 571.592 85.9181C554.178 109.038 546.473 141.556 553.377 174.922L552.049 175.454C573.827 229.859 567.978 282.693 546.059 318.113C535.593 335.027 521.431 348.142 504.402 355.817ZM499.221 590.902C505.882 589.276 512.546 585.336 518.783 577.734C527.37 567.266 535.419 549.454 540.239 520.583L564.898 524.699C559.677 555.971 550.485 578.506 538.112 593.59C526.864 607.301 513.282 614.45 499.091 616.323C499.03 631.848 499 647.738 499 663.999C499 682.565 499.763 705.045 501.136 728.831C527.15 697.315 561.601 677.094 596.624 670.423C609.945 667.886 623.392 667.323 636.456 668.864C622.56 644.919 615.073 618.883 614.342 593.642C614.267 591.048 614.264 588.462 614.334 585.887L613.113 585.379C613.59 584.231 614.052 583.084 614.497 581.939C615.323 567.22 618.54 552.912 624.208 539.706C625.99 514.93 620.599 492.524 610.295 475.507C594.247 449.005 566.036 434.74 530.707 443.934C519.812 446.769 509.988 450.212 501.163 454.118C500.174 496.052 499.532 541.56 499.221 590.902Z"/>
</svg>

<p>Qualquer pessoa que se interesse em estudar metodologias de projeto provavelmente o fará iniciando pelo trabalho de <a href="javascript:openMeta('fuller');">Richard Buckminster Fuller</a> e sua forma de abordar o design como um sistema. São também comuns as referências a <a href="javascript:openMeta('wiener');">Norbert Wiener</a>, que no mesmo período, desenvolvia sua teoria dos sistemas, posteriormente conhecida como cibernética.</p>

<p>Ambos autores eram amplamente conhecidos por aqui. Seus trabalhos mais relevantes datam da década de 1950, apresentados em conferências dedicadas ao estudo de métodos e metodologias (para todos os campos, não apenas o design). Eles abordam questionamentos profundos do projetar: como as decisões de projeto são tomadas? Porquê estas decisões são tomadas, e de que forma decisões que se fazem em um momento do projeto, produzem efeitos, ecos e reflexos em outros momentos e situações.</p>

<div class="symbol"></div>

<div class="corpus">

<p>Mais do que estudar um ciclo de vida projetual, organizado por etapas e estudos de diferentes aspectos sendo enfrentados enquanto ele amadurece, as discussões iniciais de nossa ciência projetual se concentravam nas escolhas, alternativas e decisões tomadas pelos projetistas. Convém dizer também que, neste momento, a perspectiva projetual se centrava neles (e não nos usuários), e desta forma, as discussões sobre métodos não poderiam abordar outra questão que não a força criativa dando forma aos artefatos em nosso entorno. O próprio conceito de <i>feedback</i>, de <a href="javascript:openMeta('wiener');">Wiener</a>, levou anos para ser incorporado como parte do processo projetual.</p>

<p>Durante as décadas de 60 e 70, os trabalhos de <a href="javascript:openMeta('alexander');">Christopher Alexander</a> trouxeram novas perspectivas para a ciência projetual. Dois aspectos me parecem, até hoje, essenciais para todo projetista na obra do autor: o primeiro, fruto das reflexões presentes em <a href="javascript:openMeta('synthesis');">Notes on the synthesis of form</a>, é o entendimento de que praticamente todas as decisões tomadas por um projetista são equivocadas, e que somente a avaliação sistemática e os testes constantes (sobre os artefatos sendo projetados) nos permitem eliminar uma visão enviesada e distorcida daquilo que estamos projetando; em síntese, o entendimento de que o pensamento individual é prejudicial ao projeto; já a segunda questão, fruto de seu trabalho em <a href="javascript:openMeta('timeless');">The timeless way of building</a>, é o entendimento de que todo projeto, no seu âmago, trabalha sobre aspectos pouco tangíveis, que <a href="javascript:openMeta('alexander');">Alexander</a> intitula de "qualidade sem nome". Em sua obra, ele circunscreve este elemento transcendental presente em todo projeto, invisível, difícil de ser explicitado e explicado, que é, definitivamente, o elemento central do trabalho de todo projetista. A "qualidade sem nome" é o mais próximo que já chegamos de delinear aquilo que realmente está em jogo em um projeto; aquilo que faz do artefato projetado um projeto realmente bom (ou ruim).</p>

<p><a href="javascript:openMeta('fuller');">Buckminster Fuller</a>, <a href="javascript:openMeta('wiener');">Wiener</a>, e posteriormente <a href="javascript:openMeta('alexander');">Alexander</a>, são reconhecidamente pioneiros na elaboração do design como uma ciência. Mas talvez não tenham sido os primeiros: <a href="javascript:openMeta('behrens');">Peter Behrens</a>, considerado o "primeiro designer industrial", professor de <a href="javascript:openMeta('lecorbu');">Le Corbusier</a>, <a href="javascript:openMeta('gropius');">Walter Gropius</a> e <a href="javascript:openMeta('mies');">Mies Van der Rohe</a>, já falava do design como um sistema (ou sistematização), na virada do século XIX para o século XX.</p>

<p>Todos eles foram essenciais para entendermos que a ciência projetual não é exatamente uma ciência como as demais: não se trata só de lidar com a prática projetual como se ela fosse um processo científico, mas de entender o próprio design como uma forma específica de conhecimento; uma forma de interpretar o mundo e nossa ação sobre ele.</p>
<!-- https://en.wikipedia.org/wiki/Design_science -->

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Todos estes autores são amplamente conhecidos, e foram devidamente estudados por aqui. Mas seus desdobramentos talvez não tenham obtido a mesma popularidade, ou talvez, simplesmente não tenham chegado em nossas terras. O enraizamento do conhecimento não é um processo trivial, e em outros tempos, demandava esforços ainda maiores do que hoje. Enquanto as escolas de design, e sua prática, floresciam pelo país, fica-me a impressão de que o aprofundamento do conhecimento, sobretudo o científico, não obteve o mesmo sucesso; ou ao menos, a discussão metodologica não progrediu. Acredito que o entendimento geral era de que as explicações fornecidas pelos autores supracitados davam conta de explicar os aspectos metodológicos do design, até então guiados pelo que chamamos hoje de design autoral, produto da reflexão e expressão individual, e, desta forma, não se fazia necessário investigar e explorar outros caminhos.</p>

<p>No lugar de uma ciência do design, vimos o enraizamento de uma cultura projetual, uma arte de projetar. Enquanto os centros de excelência buscavam elaborar formas e métodos mais eficientes e menos falíveis para se projetar, evitando (ou incorporando) erros e falhas de processo, por aqui passamos a reproduzir e repetir um formato; um jeito de fazer projeto. Permanecia a figura do projetista como um trabalhador solitário mas infalível, e capaz de responder à qualquer demanda projetual que se apresentasse. Esta figura era talhada e construída em um processo formativo penoso, constantemente submetido a duros questionamentos e investidas de profissionais mais experientes, até que fosse plenamente capaz de pensar como seus predecessores, e responder como eles aos desafios apresentados em cada projeto.</p>

<p>Esta produção de uma forma de subjetividade específica, como uma terrível fábrica capaz de modelar um jeito de pensar e agir, que entendemos como a atitude e qualidades singulares dos designers (o jeito dos designers fazerem as coisas), tem suas vantagens e desvantagens. Como uma arte, construída de forma recalcitrante, há pouco questionamento sobre a própria prática exercida (e/ou vivenciada); as respostas para estes questionamentos (quando se fazem) são geralmente de que "isso sempre foi feito assim", ou dito de outra forma, que há muito pouca consciência sobre o que se faz (ou porquê se faz o que se faz); contudo, seus resultados são profícuos e azeitados como o de um grande pintor em plena consonância com o estilo de sua época.</p>   

</div>

<p><iframe width="100%" height="500" src="https://www.youtube.com/embed/62r3UPrOS9k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<span class="legenda">O documentário Archiculture descreve claramente a cultura de projeto, matriz que forma, até hoje, grande parte dos projetistas</span></p>

<div class="corpus">

<p>A arte de projetar é um aprendizado contínuo, um conhecimento esculpido ao longo do tempo no próprio sujeito, conforme ele se dispõe a mergulhar e se envolver mais profundamente com a típica forma de agir de um verdadeiro designer. A jornada de transformação de um sujeito em um designer envolve seu investimento subjetivo na prática projetual. O projetar não é apenas um "fazer"; é também uma forma de "ser". O artefato projetado é uma expressão; uma manifestação de quem é seu criador. Seu porta-voz.</p>

<p>O que se entende sobre o projetar, conforme nos aprofundamos nesta arte, é que se trata de uma dança; de um jogo. É uma relação entre você, o projeto, e diversos outros elementos ao mesmo tempo, que exigem certas habilidades e maestrias para colocar tudo (ou quase tudo) sob controle, incluíndo nisso os aspectos invisíveis, intangíveis e transcendentes de que falava <a href="javascript:openMeta('alexander');">Chistopher Alexander</a>.</p>

<p><a href="javascript:openMeta('sicart');">Miguel Sicart</a>, ao discutir o conceito de <i>playfulnes</i> (o estado de espírito de quem se dispõe a entrar em um jogo), elabora a seguinte reflexão: <a href="javascript:openMeta('sicart22');" class="citacao">"Atletas podem jogar de forma divertida, mesmo que isso não seja eficaz para os propósitos do jogo. Muitos dos floreios com os quais Magic Johnson adornava seu jogo de basquete não eram práticos, nem orientados para a vitória; eles eram um show para o público, uma maneira de curtir o jogo enquanto ele jogava, aumentando ainda mais os limiares do jogo. Essa bela forma de jogar criou um forte contraste com o contexto sério do jogo profissional, tornando suas ações ainda mais bonitas, e a personificação do que significa jogar basquete"</a>. Este é o jogo em que um designer investe emocional e psicologicamente: um profissional hábil entrará nele para resolver o projeto, e dar uma solução prática e efetiva para o problema que lhe desafia; um profissional experiente transformará este jogo em um espetáculo; uma obra de arte para ser apreciada (não só o seu produto, mas a própria forma de criá-lo). O domínio da arte projetual fará com que ele brinque com o projeto - como Magic Johnson brincava com seus adversários em quadra - aumentando os riscos envolvidos, mas subindo o <i>threshold</i>, o mínimo aceitável, e criando grande beleza como resultado.</p>
<!-- (SICART, 2014, Pg. 22) -->

</div>

<p><iframe width="100%" height="500" src="https://www.youtube.com/embed/atn22-bmTPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<span class="legenda">A renomada designer gráfica Paula Scher fala sobre sua relação com o projeto</span></p>

<div class="corpus">

<p>Projetar, como uma arte, é uma atividade séria (não no sentido de ser solene, mas na profundidade e no envolvimento que nos exige). Demanda de nós a mesma postura e mesmo cuidado com o outro que se vê em um bom médico diante de seu paciênte. Seu observar e examinar não são uma prática protocolar ou mera formalidade: são a tentativa de decifrar o que acontece ali, tentando entender qual é o ponto de ruptura, quais são os limites presentes, na tentativa de delimitar seu próprio campo de ação sobre a situação.</p>

<p>Aprendi, como tantos de minha geração, a tratar meus projetos - mesmo os mais simples - como um denso e exaustivo exercício mental. Aprendi a dar-lhes a profundidade que eles merecem, ou traduzindo, permitir-lhes dizer aos seus usuários que foram construídos com muito cuidado, muita reflexão, e muito respeito por quem os usará. São produto de um esforço profundo; de um rigor com os detalhes e com todos os aspectos que o envolvem e foram antecipados, desde as questões simbólicas até o que será necessário em seus decorrentes processos construtivos.</p>

<p>Não sou capaz de tratar um projeto com frivolidade ou descaso, e me é doloroso observar os os atuais bachareis a fazê-lo. Trivializar a prática projetual como se fosse uma receita de bolo, ou como se cada projeto fosse irrelevante (apenas mais um) é afirmar, como decorrência, que seu próprio projetista é assim: irrelevante; apenas mais um. Resumidamente, este é o sofisticado produto da formação projetual do passado: um profissional despreparado em termos científicos, mas profundamente compromissado com aquilo que projeta, e com aqueles que serão usufrutuários do projeto.</p>

<p>Este é, obviamente, um dos lados da moeda. Um que, particularmente, tenho dificuldade de me desvenciliar por ter sido talhado como projetista através dele. Mas também é bastante claro que, independente de meu próprio posicionamento, as maneiras superficiais como os projetistas têm trabalhado seus projetos na atualidade são o sinal de algo vai mal na prática projetual. Talvez um projeto não seja um jogo; talvez ele não seja o esforço e a habilidade de se afirmar algo, sobrepondo, driblando ou angariando tantas outras afirmações e argumentos, dentro de uma arena operada por uma linguagem não-verbal. Mas ele também não é a sua transformação em um serviço desprovido de qualquer investimento emocional ou qualquer comprometimento subjetivo; esta também é uma distorção da ciência projetual.</p>

</div>    

<div class="symbol"></div>

<div class="corpus">

<p>Enquanto este formato - o jeito como projetistas deveriam ser e agir - se enraizava em nossas práticas locais, a ciência do design também caminhava a passos largos. Um <i>milestone</i> bastante popular é a consolidação da metodologia <i>Design Thinking</i>, que ganhou o mundo e passou a ser adotada como prática revolucionária do projetar. De fato, ela é bastante revolucionária quando comparada ao design autoral amplamente praticado por aqui, até o período. Mas o <i>Design Thinking</i> nada mais é do que o design participativo escandinavo, misturado com um pouco de <i>marketing</i>, transformado em um produto que poderia ser explorado como uma consultoria por seus criadores (<a href="javascript:openMeta('ideo');">IDEO</a>) junto à indústria.</p>

<!-- https://medium.com/@szczpanks/design-thinking-where-it-came-from-and-the-type-of-people-who-made-it-all-happen-dc3a05411e53 -->
<p>O <i>Design Thinking</i> é resultado de diversos avanços no pensamento projetual. Do seu tratamento científico como resultado da aplicação de um método de projeto, como proposto por <a href="javascript:openMeta('simon');">Herbert Simon</a>, passando pelo entendimento de que ele lida com problemas complexos, como definidos por <a href="javascript:openMeta('rittel');">Horst Rittel</a>, chegando à subdivisões do pensamento científico sobre o design, separado entre ciência do design (o estudo científico do que é o design e suas práticas), o design científico (o design praticado como um processo científico e metodológico), e o design como pensamento (o design como uma das diferentes formas de interpretar o mundo, em contraposição à arte, a filosofia ou à ciência). O <i>Design Thinking</i> deve muito, em termos formais, aos estudos científicos do método projetual, e em termos comerciais, a instituição do design como pensamento, que ajudou a convencer empresas a investirem nesse "molho secreto", capaz de gerar inovação e desenvolver vantagens competitivas.</p>

<p>Destas diferenças e dos questionamentos sobre a natureza do design, se desenvolveram novas abordagens que qualificavam sua prática como: 1) um processo ineficiente quando realizado individualmente; 2) um processo alienado e desconectado da realidade quando produto exclusivo da imaginação e da criatividade (do dom) dos projetistas; 3) um processo iterativo, que precisaria ser realizado inúmeras vezes até polir satisfatoriamente sua solução, isto é, produzir todo o ajuste-fino necessário para atender plenamente seus usuários; 4) uma <i>racionale</i>, isto é, uma lógica subjacente que estrutura a jornada para solução de um problema, jornada esta que auxilia o projetista a chegar em um resultado melhor; 5) uma relação que envolve inúmeros atores (clientes, usuários, <i>stakeholders</i>, etc.), que não podem ser suprimidos ou ignorados no desenvolvimento da solução.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Logicamente que, pelo nosso distanciamento de todo o processo pelo qual estas premissas ganharam forma, fomos tomados de assalto. Uma revolução, inegavelmente. Tenho absoluta clareza de como minha própria formação e prática projetual teriam enriquecido se técnicas como a de etnografia, ou mesmo de entrevistas com as pessoas envolvidas, fizessem parte do processo de projeto.</p>

<p>A atividade projetual costumava ser tratada como um processo de fazer (e refazer) com base na discussão junto a profissionais mais experientes. Ela não era ensinada como um processo baseado na análise de evidências concretas observadas em campo, ou em experiêmentos e testes para se entender como proceder em relação ao projeto. E é mais do que óbvio que caíamos nas mesmas ciladas tão bem equacionadas por <a href="javascript:openMeta('alexander');">Chistopher Alexander</a> em <a href="javascript:openMeta('synthesis');">Notes on the synthesis of form</a>.</p>

<p>Na cultura projetual do passado, insistimos que um projeto era fruto de reflexão. Mas reflexão, baseada no vazio da pura opinião, alienada de evidências, fatos, registros, e observações, não é de grande serventia. De fato, arte e ciência encontram aqui um ponto irreconciliável: enquanto a primeira é uma forma propositiva/abdutiva de entender o mundo, que não exige qualquer comprovação do que faz pois parte do pressuposto de que a reflexão que produz é sua forma de responder aos fenômenos, a segunda é profundamente pragmática, concreta, mensurável, e se pauta por explicações que podem ser averiguadas, reproduzidas, comprovadas, e também questionadas. Uma prática projetual pautada pela ciência se baseia na construção de hipóteses, e na averiguação destas hipóteses, antes que um curso de ação seja traçado.</p>

<p>Nos parecia pouco corajosa; com precauções em demasia, incapaz de se posicionar; de se afirmar. Mas a verdade é que estava bem mais em sintonia com as necessidades e expectativas das pessoas envolvidas, do que o velho "método". Costumamos diminuir o trabalho de jovens médicos exatamente da mesma forma: "só fazem alguma coisa depois de inúmeros exames... não sabem fazer nada sem os dados de um exame laboratorial, ao contrário dos mais velhos que batem o olho em você, e já sabem qual é o problema!". É desnecessário discutir o quão equivocada é essa abordagem, o quanto ela pode ser prejudicial e causar problemas, e o quanto é melhor agir em função da avaliação de dados concretos ao invés de suposições e convicções.</p>

</div>

<div class="symbol"></div>

<div class="corpus">

<p>O trabalho projetual carecia daquilo que a ciência tem de melhor: sua capacidade de observação, sua força analítica, e sua competência em responder a um problema de forma consistente. Os resultados, quando a ciência do design estava sendo aplicada, eram inegavelmente melhores (e igualmente mais caros). Estes processos acabavam limitados à grandes organizações, empresas multinacionais, e instituições capazes de arcar financeiramente com um processo trabalhoso, envolvendo pesquisa e uma diversidade de profissionais, e que, como todo projeto, poderia produzir algo questionável no final. Contudo, um projeto feito da forma "nova" poderia ser entendido; seus resultados vinham de um encaminhamento lógico, e eram acompanhados passo-a-passo. Não havia uma "caixa preta" no meio do caminho. Eram mais caros, mas eram mais <i>
accountables</i> (compreensíveis e responsabilizáveis), e, aos poucos, o mercado corporativo entendeu suas vantagens. Havia compatibilidade entre este tipo de processo e seus próprios <i>modus operandi</i>.</p>

<p>Não tardou para que o <i>trade down</i> começasse. Empresas menores, pequenos estúdios de design, e até profissionais liberais, começaram a tentar colocar em prática os mesmos procedimentos que foram construídos para o desenvolvimento de projetos realizado por equipes diversificadas dotadas de uma multiplicidade de competências e habilidades. E é claro que isto não seria possível conservando a integridade processual do que foi amadurecido durante todos estes anos por uma ciência do design. Como uma criança repetindo movimentos de operação em um telefone de disco do qual não entende minimamente o funcionamento, a aplicação dos métodos, incluíndo o <i>Design Thinking</i>, se tornou protocolar: virou uma receita de bolo, desvinculada da ciência que lhe precede. Projetar se tornou o preenchimento de documentos obrigatórios, sem qualquer entendimento de sua função real - a análise -, e principalmente, sem a aplicação dessa função real.</p>

</div>

<p><iframe style="width: 100%; height: 500px;" src="https://www.youtube.com/embed/4B8XTFgrZgg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<span class="legenda">Apresentação sobre metodologias de design em aula de projeto multidisciplinar (Projetão) na UFPE, 2020.</span></p>


<div class="corpus">

<p>Os "entregaveis", produzidos de forma irrefletida e massiva, podem servir bem como peças de comunicação, mas são péssimos como ferramenta de análise ou como registro das observações coletadas por uma equipe de projeto. Sua função original é de produzir a devida reflexão e amparar os projetistas em suas decisões. Continua sendo papel do projetista tomar uma decisão, como a de um médico definir um tratamento frente aos resultados de um exame laboratorial, mas a expectativa daqueles que exercem o design como receita de bolo é de que os próprios documentos respondam (por eles) aos problemas delineados.</p>

<p>Importa pouco se um documento como a "jornada do consumidor" está construído "da forma certa", incorporando todos os elementos que "precisam" estar registrados. Importa muito - isso sim - se a equipe envolvida no projeto entende, e se importa, com o que está em jogo para este(s) usuário(s); se entende quais são as situações em que ele(s) se encontra(m); e se vislumbram as diversas formas plausíveis para atacar o problema presente. Tudo isso à partir do que apreenderam sobre ele(s) em um processo de observação e análise (que, a título de registro, pode virar um documento de "jornada do consumidor").</p>

<p>O que se observa é uma crescente desconsideração com o próprio método, com a própria ciência projetual. E a sua substituição, como se fossem equivalentes, por técnicas e ferramentas. Saber mudar a abertura de uma lente em uma câmera fotográfica não torna ninguém um fotógrafo; Saber ligar o forno não transforma ninguém em um <i>chef de cuisine</i>, ou operar uma planilha eletrônica em gerente de um negócio. Saber construir documentos que podem (eventualmente) fazer parte de um projeto de design, ou aplicar técnicas que estão amplamente catalogadas em diversos livros de metodologia de projeto, não faz de ninguém um bom projetista. Mas claro: da mesma forma que seria estranho um bom fotógrafo não saber operar uma câmera, um <i>chef</i> ter dificuldades com um forno, ou um gestor ter pouca intimidade com planilhas eletrônicas, é incomum que um bom projetista seja incapaz de construir a documentação de seu próprio projeto.</p>  

</div>

<div class="symbol"></div>

<div class="corpus">

<p>Nesta tênue relação entre uma ciência contemporânea do design e a cultura projetual do passado, há coisas que podemos aprender: quem projeta é o próprio projetista, e não os documentos que ele possa formular para documentar sua pesquisa; a pesquisa em si também não é o projeto, mas projeto sem pesquisa é "achismo"; comunicar e apresentar um projeto (para um cliente, ou para um <i>stakeholder</i>) não é fazer projeto, e aquilo que você faz para comunicar o projeto é diferente do que você faz para resolver o projeto; "entregáveis" são perda de tempo se não forem feitos como instrumentos para análise e reflexão do que se projeta.</p>

<p>Adotar um método projetual sem conhecer e incorporar também seu <i>mindset</i> é outro equívoco claro, que pode ser tranquilamente corrigido. Todos eles, salvo algum engano, são produtos de trabalhos científicos em metodologia projetual. Conhecer esses fundamentos garante proficiência e confere grande flexibilidade na sua aplicação, e é sempre útil para quem projeta, pois permite questionar procedimentos e modificar o próprio método, as técnicas e/ou suas ferramentas, para que se adequem melhor a necessidades específicas.</p>

<p>O que a cultura projetual melhor contribuiu para a formação de projetistas foi a demonstração de que o envolvimento no projeto e o interesse do projetista sobre as questões que se fazem presentes são sensivelmente mais produtivas do que o trabalho mecânico exercido. Essa perspectiva não deve ser abandonada, e é para sustentá-la que quaisquer experimentos ou observações devem ser realizados.</p>

<p>A sentença "o sucesso é 10% inspiração e 90% transpiração" distorce totalmente como projetamos soluções: bem mais do que 50% do trabalho deve ser de análise e reflexão, e o esforço mecânico deve ser reduzido ao mínimo possível, idealmente. Projetar é, afinal, um trabalho intelectual.</p>  
</div>


<div id="bookendnav"></div>



<div id="meta">
	<div id="fuller">
		<div style="background-image:url(https://images.adsttc.com/media/images/5a66/3ff7/f197/cc48/d700/005a/newsletter/Buckminster_Fuller_Flickr_POET_ARCHITECTURE.jpg); background-size: cover; background-position: center right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Richard Buckminster Fuller<br>
		EUA, 1895 - 1983<br>
		Professor da North Carolina State University e posteriormente da Southern Illinois University Carbondale<br>
	</div>

	<div id="wiener">
		<div style="background-image:url(https://www.ams.org/images/wiener-blackboard.png); background-size: cover; background-position: top left; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Norbert Wiener<br>
		EUA, 1894 - 1964<br>
		Professor do Massachusetts Institute of Technology (MIT)<br>
	</div>

	<div id="alexander">
		<div style="background-image:url(https://3.bp.blogspot.com/-UQh6p7XBDVA/TfJX2dEtNvI/AAAAAAAAATs/MfU-Wyau6Js/s1600/Christopher-Alexander.jpg); background-size: cover; background-position: center right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Christopher Alexander<br>
		Austria, 1936<br>
		Professor emérito da Universidade da California, Berkeley<br>
	</div>

	<div id="behrens">
		<div style="background-image:url(https://cdn.stylepark.com/articles/_transformationContent8/1101012/TS_Q_PeterBehrens_161011_134430.png); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Peter Behrens<br>
		Alemanha, 1868 - 1940<br>
		Fundador do German Werkbund, professor da Escola de Belas Artes de Viena, e chefe do departamento de arquitetura na Prussian Academy of Arts de Berlin<br>
	</div>

	<div id="lecorbu">
		<div style="background-image:url(https://www.blogdaarquitetura.com/wp-content/uploads/2017/04/Le_Corbusier.jpg); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Charles-Édouard Jeanneret, "Le Corbusier"<br>
		Suiça, 1887 - 1965<br>
		Um dos mais influentes arquitetos na modernidade do século XX<br>
	</div>

	<div id="mies">
		<div style="background-image:url(https://upload.wikimedia.org/wikipedia/en/thumb/5/58/Ludwig_Mies_van_der_Rohe.jpg/220px-Ludwig_Mies_van_der_Rohe.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Ludwig Mies van der Rohe<br>
		Alemanha, 1886 - 1969<br>
		Diretor da Bauhaus, e posteriormente professor na Bauhaus de Chicago, que se tornou o Illinois Institute of Technology<br>
	</div>

	<div id="ideo">
		<div style="background-image:url(https://i.pinimg.com/originals/ff/f3/11/fff3115532a0d0a9c74e2bb451fc80e4.jpg); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		IDEO, fundada em Palo Alto, California (EUA) em 1991<br>
		Escritório internacional de design fundado por David Kelley, Tom Kelley, Bill Moggridge, e Mike Nuttall. David Kelley é fundador da escola de design da Universidade de Stanford (d.school) e Bill Moggridge do Interaction Design Institute Ivrea<br>
	</div>

	<div id="sicart">
		<div style="background-image:url(https://cdn.theatlantic.com/thumbor/fiAHeP3v5oaIE3Uz4epomNQlSi0=/144x192/media/img/authors/s/miguel-sicart/headshot/original.JPG); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Miguel Angel Sicart<br>
		Espanha<br>
		Professor da IT University Copenhagen<br>
	</div>

	<div id="sicart22">
		<div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/51ZPSIQ92xL._SY445_QL70_ML2_.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Play Matters<br>
		Miguel Sicart, 2014, MIT Press.<br>
		Citação da página 22.<br>
		<a href="https://amzn.to/2UFPJwJ" target="_blank">Amazon.com.br</a>
	</div>

	<div id="gropius">
		<div style="background-image:url(https://i.pinimg.com/originals/e2/8a/d9/e28ad9f3867a3365279bd80c91c6b0fc.png); background-size: cover; background-position: top right; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Walter Gropius<br>
		Alemanha, 1883 - 1969<br>
		Fundador da Bauhaus e posteriormente professor na Harvard Graduate School of Design<br>
	</div>

	<div id="simon">
		<div style="background-image:url(https://cdn.britannica.com/41/20941-050-C5A5B2C4/Herbert-A-Simon-1978.jpg); background-size: cover; background-position: center center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Herbert Simon<br>
		EUA, 1916 - 2001<br>
		Professor da Universidade da Califórnia, Berkeley, e posteriormente do Illinois Institute of Technology<br>
	</div>

	<div id="rittel">
		<div style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTHByZzjgyIjLv-QlHd822KWU9Vt6bej2_Qv4op6j3q9DM99Iaw&usqp=CAU); background-size: cover; background-position: top left; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Horst Hittel<br>
		Alemanha, 1930 - 1990<br>
		Professor de ciência do design na Universidade da Califórnia, Berkeley<br>
	</div>

	<div id="synthesis">
		<div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/41F%2BfsRV8aL._SX328_BO1,204,203,200_.jpg); background-size: cover; background-position: top center; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		Notes on the synthesis of form<br>
		Christopher Alexander, 1964, Harvard University Press.<br>
		<a href="https://amzn.to/2X1s7E2" target="_blank">Amazon.com.br</a>
	</div>

	<div id="timeless">
		<div style="background-image:url(https://images-na.ssl-images-amazon.com/images/I/41CJ2M0--6L._SX325_BO1,204,203,200_.jpg); background-size: cover; background-position: top left; width: 78px; height: 78px; margin-right: 30px; border: 1px solid #cccccc; float: left;"></div>
		The timeless way of building<br>
		Christopher Alexander, 1979, Oxford University Press.<br>
		<a href="https://amzn.to/2UDoeDM" target="_blank">Amazon.com.br</a>
	</div>

</div>
<div id="metacompensate"></div>

<div id="posicao"></div>
<div id="posicaocompensate"></div>

</body>

</html>
