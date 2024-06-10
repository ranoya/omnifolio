void setup() {
  
  size(1325,836);
  smooth(4);
  background(#a59b04);
  stroke(#958b58);
  ellipseMode(CENTER);
  noFill();
  strokeWeight(1);
  frameRate(1);
    
}


float odd = 0;
int WEI = 0;
int HEI = 0;

void draw() {

  background(#a59b04);
  stroke(#958b58);
  
  odd=0;
  WEI = width;
  HEI = height;
  
  for (float h=-(HEI/16); h<HEI+(HEI/16); h=h+(HEI/16)) {
  for (float k=-(WEI/8); k<WEI+(WEI/8); k=k+(WEI/8)) {
  
    stroke(#958b58);
    ellipse(k+(WEI/16)+odd,h+(HEI/12),WEI/13.2, WEI/13.2);

  }
  
  if(odd==0) {
   odd=WEI/16; 
  } else {
   odd=0;
  }
  
  }
  
  
}
