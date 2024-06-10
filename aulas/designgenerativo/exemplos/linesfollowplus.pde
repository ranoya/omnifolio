void setup() {
  
  background(unhex(bgcolor));
  size(800,800);
  frameRate(15);
  
}

int canvwidth = 800;
int canvheight = 800;
int raio = canvwidth / 5;


float alfa(int mX, int mY) {
    
  int deltaX = mouseX - mX;
  int deltaY = mouseY - mY;
  float angle = atan2(deltaY, deltaX);
  return angle;
    
  }
  
  

void draw() {

  canvwidth = 800;
  canvheight = 800;
  raio = canvwidth / 70;
  
  background(unhex(bgcolor));
  stroke(unhex(forecolor));
  strokeWeight(1);
  
  for (int v = 0; v <= canvheight; v = v + (canvheight/30)) {
  for (int h = 0; h <= canvwidth; h = h + (canvwidth/60)) {
  
  line(h, v, h + (raio*cos(alfa(h,v))), v + (raio*sin(alfa(h,v))));
  
  }
  }
  
  
  
}

