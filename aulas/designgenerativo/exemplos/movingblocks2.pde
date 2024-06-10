void setup() {
  
  background(#361e73);
  size(1325,836);
  frameRate(15);
  
}


void draw() {

  float varx = mouseX;

  background(#361e73);
  stroke(#2f1c6f);
  strokeWeight(4);


  int tam = 20;

  for (int x1 = 0; x1 < width; x1 = x1 + tam) {
    for (int y1 = 0; y1 < height; y1 = y1 + tam) {

        if (random(1) < 0.5 ) {
        line(x1,y1,x1+tam,y1+tam);
      } else {
        line(x1+tam,y1,x1,y1+tam);
      }

    }

  }

  noLoop();
  
  

  
  
  
}