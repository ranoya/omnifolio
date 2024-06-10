color bgcolor = #620384;
color forecolor = #fa3F7C;
color forecolor2 = #222222;

boolean animapause = false;
boolean runonce = false;
boolean ismobile = false;


void setup() {
  
  size(1260,912);
  //smooth();
  background(bgcolor);
  stroke(forecolor);
  frameRate(12);
  
}

int canvwidth = 2000;
int canvheight = 1500;
int raio = 15;
int step = 70;
boolean runonce = false;


float alfa(int mX, int mY) {
    
  int deltaX = mouseX - mX;
  int deltaY = mouseY - mY;
  float angle = atan2(deltaY, deltaX);
  return angle;
    
  }
  
  

void draw() {

  if(animapause == false && runonce == false) {
    if (ismobile == true) {
      runonce = true;
    }
  canvwidth = width;
  canvheight = height;
  
  background(bgcolor);
  stroke(forecolor);



  strokeWeight(1);

  for (int k = (step*2); k < canvheight; k = k + (4*step)) {

  }


  
  
  for (int v = 0; v < canvwidth; v = v + step) {
  for (int h = 0; h < canvwidth; h = h + step) {

  raio = 15;
  strokeWeight(40);
  colorMode(HSB, 255);
  float cs = saturation(forecolor)+5;
  float ch = hue(forecolor)-5;
  float cb = brightness(forecolor)+10;
  color newC = color(ch, cs, cb);

  
  stroke(newC);
  line(h+(random(10)-5),v+(random(10)-5), h + ((raio+random(5))*cos(alfa(h,v))), v + ((raio+random(5))*sin(alfa(h,v))));  
  
  raio = 15;
  strokeWeight(40);
  stroke(forecolor2,90);
  line(h,v, h + (raio*cos(alfa(h,v))), v + (raio*sin(alfa(h,v))));


  
  }
  }

  } else {




  }
  
  
  
}
