void setup() {
  
  background(#40124d);
  size(100,100);
  frameRate(15);
  
}

int canvwidth = 500;
int canvheight = 500;
int raio = canvwidth / 5;


float alfa(int mX, int mY) {
    
  int deltaX = mouseX - mX;
  int deltaY = mouseY - mY;
  float angle = atan2(deltaY, deltaX);
  return angle;
    
  }
  
  

void draw() {

  canvwidth = width;
  canvheight = height;
  raio = canvwidth / 70;
  
  background(#40124d);
  stroke(#78008A);
  strokeWeight(1);
  
  for (int v = 0; v <= canvheight; v = v + (canvheight/30)) {
  for (int h = 0; h <= canvwidth; h = h + (canvwidth/60)) {
  
  line(h, v, h + (raio*cos(alfa(h,v))), v + (raio*sin(alfa(h,v))));
  
  }
  }
  
  
  
}

