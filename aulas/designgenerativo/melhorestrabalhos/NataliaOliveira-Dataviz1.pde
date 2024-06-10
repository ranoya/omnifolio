// Atividade: Dataviz #1
// Autor: Natália Maria da Silva Oliveira
// Email: nataliamsoliveira99@gmail.com

int maiorVenda;
int somaSemana;

//pontos de início das barras
int pontoInicioX = 100;
int pontoInicioY = 250;

//array de cores para livros
int[] corlivro = { color(18, 157, 212), color(50, 197, 255), color(248, 50, 255), color(255, 168, 50), color(255, 79, 50), color(50, 255, 170), color(52, 50, 255) };


void setup() {

 
  size(1426,871);
   
  // pegar maior venda para definir o fator de multiplicação dos valores 
  // para que as barras não passem um limite máximo.
  // (Jônathas me ensinou isso)
  for (int y = 0; y < quantassemanas; y++) {
      for (int z = 0; z < quantoslivros; z++) {
       somaSemana = somaSemana + vendas[y][z];    
    }
    if (somaSemana > maiorVenda) {
        maiorVenda = somaSemana;
      }
    somaSemana = 0;
  };
  
  background(244, 246, 248);
  noLoop();

}

void draw() {
    //titulo
    textSize(48);
    fill(113);
    text("Venda de livros", 100, 100);
  
  //legenda
  for (int l=0; l<quantoslivros; l++) {
    noStroke();
    fill(corlivro[l]);
    rect(pontoInicioX, 132, (550/quantoslivros), 20);
    textAlign(LEFT, CENTER);
    textSize(16);
    fill(255);
    text("Livro "+ (l+1), pontoInicioX+2, 140);
    pontoInicioX = pontoInicioX+(560/quantoslivros)+(30/quantoslivros);
  }
  
  // reseta ponto X
    pontoInicioX = 100;
        
  //linha divisória
    stroke(140);
    strokeWeight(2);
    line(1,180,width,180);
    
  //tamanho de 100% da barra e altura ajustável da barra
   float alturaBarra = 175/quantassemanas;
   float tamanhoBarra = 600;
   float pBarra = tamanhoBarra/maiorVenda;
   int porcentagemBarra = int(pBarra);
   
      
  for (int x=0; x<quantassemanas; x++) {
  
    //barras representando as semanas
    noStroke();
    fill(196);
    rect(pontoInicioX, pontoInicioY+(100*x), maiorVenda*(porcentagemBarra), alturaBarra);
    
    //número da semana
    textSize(16);
    textAlign(LEFT, BOTTOM);
    fill(113);
    text("Semana " + (x+1), pontoInicioX, (pontoInicioY-5)+(100*x));
      
    //barras representando cada livro
    for (int l=0; l<quantoslivros; l++) {
    // soma de total de livros vendidos na semana
      somaSemana = somaSemana + vendas[x][l];
      
      noStroke();
      fill(corlivro[l]);
      rect(pontoInicioX, pontoInicioY+(100*x), vendas[x][l]*porcentagemBarra, alturaBarra);
      pontoInicioX = pontoInicioX + (vendas[x][l]*porcentagemBarra);
      
    }
    
    // reseta ponto X
    pontoInicioX = 100;
    
    // número de vendas de cada livro
    for (int l=0; l<quantoslivros; l++) {
      textSize(11);
      textAlign(LEFT, TOP);
      fill(corlivro[l]);
      text(vendas[x][l], pontoInicioX, (pontoInicioY+(alturaBarra+(alturaBarra/4)))+(100*x));
      pontoInicioX = pontoInicioX + (vendas[x][l]*porcentagemBarra);
    } 
    
    // reseta ponto X
    pontoInicioX = 100;     
    
    // total de livros vendidos da semana
      textSize(12);
      textAlign(RIGHT, BOTTOM);
      fill(113);
      text("total de " + somaSemana + " livros vendidos", pontoInicioX+(tamanhoBarra-20), (pontoInicioY-5)+(100*x)); 
    // reseta soma da semana
    somaSemana = 0;
   }    
}
