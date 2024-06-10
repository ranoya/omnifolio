void setup() {
  
  background(#40124d);
  size(1325,836);
  frameRate(15);
  
}

int canvwidth = 500;
int canvheight = 500;


void desenho(int px, int py, int valor) {

  float angulo = (valor) / (width/4);

  pushMatrix();
  rectMode(CENTER);
  stroke(#78008A);
  noFill();
  strokeWeight(1);
  translate(px, py);
  rotate(angulo);
  rect(0, 0, 34, 34);
  rotate(angulo/2);
  rect(0, 0, 50, 50);
  rotate(angulo/2);
  rect(0, 0, 75, 75);
  popMatrix();
  
  pushMatrix();
  rectMode(CENTER);
  translate(px + 38 + 16, py + + 38 + 16);
  rotate(-2 * angulo);
  rect(0, 0, 32, 32);
  popMatrix();


}


void draw() {

  canvwidth = width;
  canvheight = height;
  
  background(#40124d);
  
  for (int v = 0; v <= (canvheight+100); v = v + 107) {
  for (int h = 0; h <= (canvwidth+100); h = h + 107) {
  
  desenho(h, v, mouseX);

  
  }
  }
  
  
  
}