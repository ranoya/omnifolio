/*
 Bacharelado em Design | UFPE | Recife | 01/11/2017
 Aluno: Ayrton Araújo Eusébio | Design Generativo 2017.2 | Prof: Guilherme Ranoya

Logo do Nintendo 64
 
*/

void setup(){
  size (600, 600);
  background (0);
}


void draw() {
    noStroke ();
  
// Parte de Dentro Verde 1    
    fill(50, 153, 0);
    beginShape();
      vertex(219,51);
      vertex(299,80);
      vertex(219,219);
      vertex(172,133);
    endShape(CLOSE);
    
// Parte de Dentro Azul 1   
    fill(0, 0, 153);
    beginShape();
      vertex(299,80);
      vertex(374,50);
      vertex(374,195);
      vertex(233,195);
    endShape(CLOSE);
    
// Parte de Dentro Azul 2    
    beginShape();
     vertex(95,321);
     vertex(95,493);
     vertex(173,458);
     vertex(173,385);
    endShape(CLOSE);
    
// Parte de Dentro Vermelha 1    
    fill(255, 9, 22);
    beginShape();
      vertex(99,158);
      vertex(211,375);
      vertex(213,210);
      vertex(171,129);
    endShape(CLOSE);
    
// Parte de Dentro Vermelha 2    
    beginShape();
      vertex(383,338);
      vertex(504,493);
      vertex(410,460);
      vertex(381,422);
      
    endShape(CLOSE);

// Parte de Dentro Verde 2    
    fill(50, 153, 0);
    beginShape();
    vertex(421,128);
    vertex(499,158);
    vertex(499,364);
    vertex(358,233);
    vertex(358,193);   
    endShape(CLOSE);

// N Verde   
    beginShape();
      vertex(15,125);
      vertex(15,460);
      vertex(95,493);
      vertex(95,321);
      vertex(217,541);
      vertex(300,577);
      vertex(300,241);
      vertex(211,205);
      vertex(211,375);
      vertex(99,158);
    endShape(CLOSE);
    
// N Azul    
    fill(0,0,153);
    beginShape();
      vertex(300,241);   
      vertex(385,205);
      vertex(499,364);
      vertex(499,158);
      vertex(584,124);
      vertex(584,460);
      vertex(504,493);
      vertex(383,338);
      vertex(383,541);
      vertex(300,577);
    endShape(CLOSE);
    
// Polígonos Amarelos    
    fill(245, 178, 1);
    beginShape();
      vertex(211,205);
      vertex(300,241); 
      vertex(385,205);
      vertex(300,168); 
    endShape(CLOSE);
    
    beginShape();
      vertex(15,125);
      vertex(99,158);
      vertex(171,129);
      vertex(92,98);
      
    endShape(CLOSE);
    
    beginShape();
      vertex(219,51);
      vertex(299,80);
      vertex(374,50);
      vertex(296,23);      
    endShape(CLOSE);
    
    beginShape();
      vertex(421,128);
      vertex(499,158);
      vertex(584,124);
      vertex(503,93);
    endShape(CLOSE);
    

  }