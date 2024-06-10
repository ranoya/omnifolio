void setup (){
size (500, 500);
  rectMode(CENTER);
}

void draw (){
  background (255);
  
  
  
  //círculo azul
  noStroke ();
  fill(47, 95, 158);
  ellipse (250, 250, 400, 400);
  
  //círculo branco
  strokeWeight(30);
  stroke (255);
  noFill();
  ellipse (250, 250, 320, 320);
  
  stroke (255);
  strokeWeight (30);
  // linhas do "V"
  line (200, 110, 250 , 250);
  line (300, 110, 250, 250);
  //linhas internas do "W"
  line (200, 390, 250 , 250);
  line (300, 390, 250, 250);
  //linhas externas do "W"
  line(120, 160, 200, 390);
  line(380, 160, 300, 390);
  
  //linha azul que separa o "V" das linhas internas do "W", pois se eu simplesmente deixá-las separadas, as pontas ficam arrendontadas já que se trata de uma linha e não um retângulo
  noStroke();
  fill(47, 95, 158);
  rect (250, 250, 50, 15);
}