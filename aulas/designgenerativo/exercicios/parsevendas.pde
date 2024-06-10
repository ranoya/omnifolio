// retire os "//" das variáveis abaixo, se você estiver usando
// o Processing IDE para Desktop, pois elas precisarão ser
// inicializadas

//int[][] vendas;
//int quantassemanas;
//int quantoslivros;

void carrega() {    
  int d = day(), m = month(), y = year(), h = hour(), min = minute(), s = second();
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
 
  // retire os "//" da função carrega(); abaixo, se você estiver usando
  // o Processing IDE para Desktop. Ela irá carregar os dados do servior
  
  //carrega();

}

void draw() {

    // variavel quantoslivros (int) registra a quantidade total de livros
    // variavel quantassemanas (int) registra a quantidade de semanas
    // array bi-dimensional vendas[s][l] registra o número de vendas
    // na semana s (int) sobre o livro l (int)
    
    // exemplo para uso das variaveis
    
    println("quantidade total de livros na tabela: " + quantoslivros);
    println("quantidade total de semanas: " + quantassemanas );
    println("quantidade de vendas do livro 0 na semana 0: " + vendas[0][0]);

}