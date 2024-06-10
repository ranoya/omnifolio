/* 
UNIVERSIDADE FEDERAL DE PERNAMBUCO
CENTRO DE ARTES E COMUNICAÇÃO
DEPARTAMENTO DE DESIGN
DESIGN GENERATIVO 2017.2

PROF: Guilherme Ranoya
ALUNO: Caio Ribeiro Mota

EXERCÍCIO #3 LOGOTIPO 1
Logo do Steam
*/


void setup() { 
  size(600,600); //Aceita qualquer resolução desde que a proporção seja 1:1
}
 
void draw() { 
  background(35,31,32);
  translate(width/2, height/2);
  
 //Círculo maior
  noStroke();
  fill(255);
  ellipse(0,0,width/1.1, width/1.1);
  
 //Trapézio
  noStroke();
  fill(35,31,32); 
  quad(-width/6.5, width/9, -width/45, -width/9,
        width/4, -width/45, -width/45, width/6.1);
        
 //Círculos médios
  noStroke();
  ellipseMode(RADIUS);
  fill(35,31,32);
  ellipse(width/7, -width/9, width/6, width/6);

  ellipseMode(CENTER);
  noFill();
  stroke(255);
  strokeWeight(width/32);
  ellipse(width/7, -width/9, width/5, width/5);
  
  //Círculos pequenos
  noStroke();
  ellipseMode(RADIUS);
  fill(35,31,32);
  ellipse(-width/7.5, width/5.6, -width/8.5, width/8.5);

  ellipseMode(CENTER);
  fill(255);
  ellipse(-width/7.5, width/5.6, -width/6, width/6);

 //Retângulo arredondado
  noStroke();
  fill(35,31,32);
  rotate(PI/10);
  rect(-width/2, width/6.8, width/2.1, width/8, width/12);
}