
int[][] vendas;
int quantassemanas;
int quantoslivros;

void carrega() {    
  int d = day();    
  int m = month();
  int y = year();
  int h = hour();
  int min = minute();
  int s = second();
  String timestamp = d + "." + m + "." + y + "." + h + "." + min + "." + s;
  String url = "https://www.ranoya.com/aulas/designgenerativo/exercicios/vendas.xml?timestamp=" + timestamp;
  XML xml = loadXML(url);
  XML[] semana = xml.getChildren("semana");
  XML[] livros = semana[0].getChildren("livro");
  quantassemanas = semana.length;
  quantoslivros = livros.length;
  vendas = new int[semana.length][livros.length];
  for (int k = 0; k < semana.length; k++) {
    livros = semana[k].getChildren("livro");
    for (int p = 0; p < livros.length; p++) {
      vendas[k][p] = livros[p].getIntContent(); 
    } 
  }
}  


void setup() {
 
  size(500,400);
  carrega();
  
}


int semanatual = 0;

void draw() {
    
  
    background(255);
    fill(0);
      
    int blocwidth = 470/quantoslivros;
    int altura;
    
    for (int p=0; p < quantoslivros; p++) {
      
      altura = vendas[semanatual][p] * -30;
      rect(20+((p*blocwidth)),350,blocwidth-10,altura);
      
      
    }
 
  
  
}

void mouseReleased() {
  
   semanatual++;
      if (semanatual > (quantassemanas - 1)) {
        semanatual = 0;
      }
  
}
