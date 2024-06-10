class circula {
  
  float d = 0;
  float e = 0;
  float alfa = 0;
  float s = 3;
  float beta = 0;
  
  circula(float raioI, float raioE, float step, float wide) {
   
    d = raioI;
    e = raioE;
    s = step;
    beta = wide;
    
  }
  
  void scala(float raioI, float raioE) {
   
    d = raioI;
    e = raioE;
    
  }
  
 
  void update(float angulo) {
    
    for(float k = angulo; k < angulo + beta; k = k + s) {
    
    alfa = k * PI / 180;
    line(cos(alfa)*d,sin(alfa)*d,cos(alfa)*e,sin(alfa)*e);
    
    }
    
  }
  
}


void setup() {
  
  size(4500,3000);
  background(#40124d);
  stroke(#7E2C75);
  frameRate(25);
  
}
  
  
circula c = new circula(20,100,3,60);
circula p = new circula(80,300,5,100);
circula n = new circula(80,300,2,140);
circula k = new circula(80,300,1,160);

void draw() {

  WEI = $(window).width();
  HEI = $(window).height();
  background(#40124d);
  translate(WEI/2, HEI/2);
  c.update(mouseX/1.3);
  p.update(mouseX/3);
  n.update(mouseX/-3.5);
  c.scala(WEI/15,WEI/4);
  p.scala((mouseY-50)/4, (mouseY+50)/3);
  n.scala(WEI/8,WEI/1.8);
  k.update(mouseX/-10);
  k.scala((mouseY)/10 + HEI/3, (mouseY/8) + HEI/2.5);
  
  
}