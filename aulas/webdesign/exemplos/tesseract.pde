

void setup() {
  
  size(1200,800);
  frameRate(15);
  background(#000cd0);
  stroke(#FFFFFF);
  
}

float angulo = 0;

void forma(float a) {
  line(0,100+(sin(a)*100),200, 100+(sin(a + PI)*100));
  line(200,0,200, 100+(sin(a + PI)*100));
  line(000,200,0,100+(sin(a)*100));
  line(100+(sin(a+PI)*100),0,100+(sin(a)*100),200);
  line(0,0,100+(sin(a+PI)*100),0);
  line(100+(sin(a)*100),200,200,200);
}

void superforma(float alfa,float ini, int dx, int dy) {
  
  pushMatrix();
  translate(dx,dy);
  scale(0.25,0.25);
  
  forma(alfa+ini);
  pushMatrix();
  translate(200,200);
  scale(-1,1);
  forma(alfa+ini);
  popMatrix();
  
  pushMatrix();
  translate(200,200);
  scale(1,-1);
  forma(alfa+ini);
  popMatrix();
  
  pushMatrix();
  translate(400,400);
  scale(-1,-1);
  forma(alfa+ini);
  popMatrix();
  
  popMatrix();
  
}


void draw() {
  
  background(#000cd0);
  stroke(#00CCCC);
  strokeWeight(5);

  superforma(angulo + 0.05,0,0,0);
  
  
  
  for (int v = 0; v < height; v = v + 100) {
    
    float cresce = 0;
    
  for (int k = 0; k < width; k = k + 100) {
  
  superforma(angulo,cresce,k,v);
  
  cresce = cresce + 0.3;
  
  }
  
  angulo = angulo + 0.01;
   
  }
  
}