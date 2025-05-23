bloco[] nodes = new bloco[25];
int vwidth = width;
int vheight = height;

void setup() {
  
  size(500,500);
  background(#000cd0);
  stroke(#FFFFFF);
  frameRate(15);

  for (int i=0; i<25; i++) {
      
      nodes[i] = new bloco();
      
    }
      
}





void draw() {
  
	vwidth = width;
	vheight = height;
    
    background(#000cd0);
  	
    
    for (int i=0; i<25; i++) {
      
      nodes[i].update();
      
      for (int k=0; k<10; k++) {
        
         nodes[i].checkd(nodes[k]); 
        
      }
      
    }
}


class bloco {
 
 	int limite = 0;
    int li = 0;
    float iX=random(width);
    float iY=random(height);
    float vetorX = random(6)-3;
    float vetorY = random(6)-3;
    
    void checkd(bloco C) {
      
      limite = 1+ (int)(vwidth/700);

      if(dist(iX,iY,C.iX,C.iY) < (vwidth/5) && li < limite) {
       
        strokeWeight(0);
        stroke(0);
        stroke(#FFFFFF);
        line(iX,iY,C.iX,C.iY);
        li++;
        
      }
      
    }
    
    
    void update() {
      
      li=0;
      strokeWeight(0);
      stroke(#FFFFFF);
      fill(#FFFFFF);
      ellipseMode(CENTER);
      rect(iX-5,iY-5,10,10);
    
      iX += vetorX;
      iY += vetorY;
      
      if (iX>vwidth) { iX = 0; }
      if (iX<0) { iX = vwidth; }
      if (iY>vheight) { iY = 0; }
      if (iY<0) { iY = vheight; }
          
    }
      
}