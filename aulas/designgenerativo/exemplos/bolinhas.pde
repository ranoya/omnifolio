boolean runonce = false;

int canvwidth = width;
int canvheight = height;
 
class bolinha {
  
   float x = random(width);
   float y = random(height);
   float z = random(100);
   
   float inerciaX = 0;
   float inerciaY = 0;
   float inerciaZ = 0;
         
   float vetorX = random(9) + 1;
   float vetorY = random(9) + 1;
   float vetorZ = random(9) + 1;
   float realraio = 10;
   float raio = 10;
   
   bolinha(int novoraio) {
     
     realraio = novoraio;
     raio = 5 + (realraio * 0.01 * z); 
   }
   
   void aplicaforca(float vx, float vy, float vz) {
     
     inerciaX = inerciaX + vx;
     inerciaY = inerciaY + vy;
     inerciaZ = inerciaZ + vz;

       
   }
   
   void movimenta() {
     
       x = x + inerciaX;
       y = y + inerciaY;
       z = z + inerciaZ;
       
       raio = 5 + (realraio * 0.01 * z);
       
       if ( z > 500 - raio) {
         z = 500 - raio;
         this.aplicaforca(0,0, - 1.7 * inerciaZ);
         
       }
       
       if ( z < 0 - raio) {
         z = raio;
         this.aplicaforca(0,0, - 1.7 * inerciaZ);
         
       }
       
       
       
       if ( y > canvheight - raio && x > 200 && x < canvwidth - 200) {
        
         y = canvheight - raio;
         this.aplicaforca(0, -1.7 * inerciaY,0);
       }
       
       if ( y > canvheight + 200) {
         this.aplicaforca(0, -2.4 * inerciaY,0);
       }
              
       if ( x > canvwidth - raio) {
        
         x = canvwidth - raio;
         this.aplicaforca(-1.7 * inerciaX, 0,0);
         
       }
       
       if ( x < 0 + raio ) {
        
         x = 0 + raio;
         this.aplicaforca(-1.7 * inerciaX, 0,0);
         
       }
       
       ellipseMode(RADIUS);
       fill(#7E2C75);
       noStroke();
      
       ellipse(x,y,raio,raio);
        
   }
   

   void colisao(bolinha teste) {
      
   }
  
  
}






bolinha[] bola = new bolinha[20];


void setup() {


  background(#40124d);
  size(2500,1600);
  frameRate(60);
  for (int b=0; b < bola.length; b++) {
    
    bola[b] = new bolinha(int(random(20)));
    bola[b].aplicaforca(random(10) - 5,0,random(10) - 5);
 
  }
  
}


void draw() {

canvwidth = width;
canvheight = height;

  background(#40124d);

  for (int z=0; z < bola.length; z++) {
    
    bola[z].movimenta();
    bola[z].aplicaforca(0,0.4,0);
    

  }

    
}

