void setup() {
    size(1297,790);
    rectMode(RADIUS);
    noFill();
    frameRate(240);
    background(#0dbdeb);
    strokeWeight(1);
  }


float a=0;
float s=0.1 + random(0.1);
float l=20 + random(10);

  void draw() {
      
      stroke(#0dc2f2);
      translate((width/2)+cos(a)*30,(height/2));
      scale(a);
      rotate(a/2);
      rect(0,0,l,l);
      
      a = a + s;
      
      if (a > 100) {
          noLoop();
      }


  }
