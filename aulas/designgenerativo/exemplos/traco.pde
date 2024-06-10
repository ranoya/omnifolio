void setup() {
  
  size(600,600);
  background(#40124d);
  stroke(#7E2C75);
  frameRate(25);
  
}

int anguloA = 45;
int anguloB = 280;
int aBA = 0;
int aBB = 0;
int traco = 70;

void draw() {
    translate(width/2, height/2);
    background(#40124d);
    anguloA = anguloA + 1;
    anguloB = anguloB + 2;
    aBA = anguloA;
    aBB = anguloB;
    
    for (int i=0; i<traco; i++) {
    
    float aA = (aBA * PI)/180;
    float aB = (aBB * PI)/180;
    line(sin(aA)*(width/2), cos(aA)*(height/1.5), cos(aB)*(width/1.8), sin(aB)*(height/6));
    aBA = aBA + 1;
    aBB = aBB + 2;
    if (aBA > 720) { aBA = 0; }
    if (aBB > 720) { aBB = 0; }
    
    }
    
    if (anguloA > 360) { anguloA = 0; }
    if (anguloB > 360) { anguloB = 0; }
    
    
}