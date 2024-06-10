//Design | UFPE | CAC | Design Generativo 2017.2 | Exercício Visual 1
// Aluna: Aneska Celis

void colorcodebar(int positX,int positY,int W,int H) {
  int xA = 0 + positX;
  int finalx = W+positX;
  int yA = 0 + positY;
  int yH = H;
    noStroke();
  for (int i = xA; i < finalx; i = i + 10) {
      fill(random(255), random(255), random(255)); 
      rect(i, yA , random(10), yH); 
// (^) Setup da função para gerar barcodes com patterns diferentes e
//     com cores diferentes toda vez que for feito um no void draw.
    }
}

void setup() {  
  size(1000,800);
  background (0);  
// (^) Setup do tamanho do canvas e cor do background.
}

void draw() { 
  
  colorcodebar(0,0,250,55);      //1stTreeLine
  colorcodebar(0,57,350,55);     //2ndTreeLine
  colorcodebar(0,114,450,80);    //3rdTreeLine
  colorcodebar(0,196,550,20);    //4thTreeLine
  colorcodebar(0,218,650,90);    //5thTreeLine
  colorcodebar(0,312,750,70);    //6thTreeLine
  colorcodebar(0,385,850,35);    //7thTreeLine
  colorcodebar(0,423,950,15);    //8thTreeLine
  colorcodebar(0,444,150,275);   //TheTreeBody
   colorcodebar(190,445,50,15);    //LeafBar01
   colorcodebar(200,460,70,10);    //LeafBar02
   colorcodebar(300,450,70,30);    //LeafBar03
   colorcodebar(244,473,80,25);    //LeafBar04
   colorcodebar(330,495,30,10);    //LeafBar05
   colorcodebar(250,490,40,25);    //LeafBar06
   colorcodebar(300,510,70,15);    //LeafBar07
   colorcodebar(310,520,60,30);    //LeafBar08
   colorcodebar(240,520,100,20);   //LeafBar09
   colorcodebar(290,550,55,30);    //LeafBar10
   colorcodebar(280,570,140,15);   //LeafBar11
   colorcodebar(380,580,110,25);   //LeafBar12
   colorcodebar(370,590,80,35);    //LeafBar13
   colorcodebar(350,615,150,20);   //LeafBar14
   colorcodebar(380,630,160,35);   //LeafBar15
   colorcodebar(350,655,130,15);   //LeafBar16
   colorcodebar(430,655,100,40);   //LeafBar17
   colorcodebar(450,650,130,10);   //LeafBar18
   colorcodebar(550,659,90,15);    //LeafBar19
   colorcodebar(570,666,100,10);   //LeafBar20
   colorcodebar(520,676,60,7);     //LeafBar21
   colorcodebar(667,639,300,69);  //TheBarCode  
    noLoop();
    println("xpto");
// (^) Setup de geração de barcodes que toda vez que o programa rodar eles
//     estarão nas mesmas posições com os mesmos tamanhos, 
//     mas com patterns e cores diferentes.
}

  //  Explicação visual:
//  A ideia da imagem é que da grande árvore estão caindo pequenos códigos
// de barra que eventualmente formaram um código de barra tradicional,
// só que tudo muito colorido com cores que mudam o tempo todo.
// E o println xpto só está ai porque achei engraçado.