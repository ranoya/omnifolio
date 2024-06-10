bloco[] nodes = new bloco[55];
int vwidth = width;
int vheight = height;

void setup() {
  
  size(500,500);
  background(#620384);
  stroke(#7E2C75);
  frameRate(15);

  for (int i=0; i<55; i++) {
      
      nodes[i] = new bloco();
      
    }
      
}





void draw() {
  
  vwidth = width;
  vheight = height;
    
    background(#40124d);
    
    
    for (int i=0; i<55; i++) {
      
      nodes[i].inicializah();
      nodes[i].update();
            
    }
}


class bloco {

    int firstrun = 0;
    int h = 0;
    int ix = 0;
    int fx = 0;
    int si = 5+(int)random(20);
    int sf = 5+(int)random(20);

    void inicializah() {
     
     if (firstrun == 0) {
     h = (int)random(height);
     firstrun++;
     }
      
    }

    void update() {
      

      strokeWeight(1);
      stroke(#78008A);
      fill(#78008A);

      line(ix,h,fx,h);

      if (fx >= vwidth) {

        ix += si;

      } else {

        fx += sf;

      }

      if (ix >= vwidth) {

        ix = 0;
        fx = 0;
        h = h + 10;
    
      }
      
      if (h > vheight) {
       
        h = 0;
        
      }

              
    }
      
}