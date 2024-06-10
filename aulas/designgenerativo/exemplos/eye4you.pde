

class objecto {
    
    float x = 0;
    float y = 0;
    float dx = 0;
    float dy = 0;
    float disp = 0;
    float a = 0;
    float raio = 60;
    
    objecto(float a, float b) {
     
      x = a;
      y = b;
      
    }
    
    void setp(float a, float b) {
     
      x = a;
      y = b;
      
    }
    
    void setraio(float k) {
     
      raio = k;
      
    }
      
    
     void displace() {
        
        disp = 120 + (20*raio)/dist(mouseX,mouseY,x,y);
        a = atan2(mouseY-y,mouseX-x);
        
    }
    
    void desenha() {
        
        dx = x-(cos(a)*disp);
        dy = y-(sin(a)*disp);
        //ellipse(x-(cos(a)*disp), y-(sin(a)*disp), raio,raio);
        
    }
   
    
}

objecto[] bolas = new objecto[301];
objecto[] bolasB = new objecto[301];

objecto[] bolasC = new objecto[301];
objecto[] bolasD = new objecto[301];

void setup() {
    size(1440,798);
    ellipseMode(RADIUS);
    frameRate(30);
    float ang = 0;
    
    for (int i=0; i < 301; i++) {
     
      bolas[i] = new objecto( (cos(ang)*100) + (width/2), (sin(ang)*100) + (height/2) );
      bolasB[i] = new objecto( (cos(ang)*200) + (width/2), (sin(ang)*200) + (height/2) );
      bolasC[i] = new objecto( (cos(ang)*350) + (width/2), (sin(ang)*350) + (height/2) );
      bolasD[i] = new objecto( (cos(ang)*450) + (width/2), (sin(ang)*450) + (height/2) );
      ang = ang + (PI*2/300);
      bolas[i].setraio(20 + random(10));
      bolasB[i].setraio(5 + random(1));
      
    }
    
    bolas[300] = bolas[0];
    bolasB[300] = bolasB[0];
    bolasC[300] = bolasC[0];
    bolasD[300] = bolasD[0];
  }
  
  void mousePressed() {
    float ang = 0;
    
    for (int i=0; i < 300; i++) {
     
      bolas[i].setp( (cos(ang)*30) + (width/2), (sin(ang)*30) + (height/2) );
      bolasB[i].setp( (cos(ang)*100) + (width/2), (sin(ang)*100) + (height/2) );
      ang = ang + (PI*2/300);
      
    }
    
    bolas[300] = bolas[0];
    bolasB[300] = bolasB[0];
    bolasC[300] = bolasC[0];
    bolasD[300] = bolasD[0];
    
  }
  
   void mouseReleased() {
    float ang = 0;
    
    for (int i=0; i < 300; i++) {
     
      bolas[i].setp( (cos(ang)*100) + (width/2), (sin(ang)*100) + (height/2) );
      bolasB[i].setp( (cos(ang)*300) + (width/2), (sin(ang)*300) + (height/2) );
      ang = ang + (PI*2/300);
      
    }
    
    bolas[300] = bolas[0];
    bolasB[300] = bolasB[0];
    bolasC[300] = bolasC[0];
    bolasD[300] = bolasD[0];
    
  }
  

  void draw() {
      
      
      background(#40124d);
      fill(#7E2C75);      
      for (int i=0; i < 300; i++) {
        
      bolas[i].displace();
      bolas[i].desenha();
      bolasB[i].displace();
      bolasB[i].desenha();
      bolasC[i].displace();
      bolasC[i].desenha();
      bolasD[i].displace();
      bolasD[i].desenha();
      stroke(#7E2C75);
      line(bolas[i].dx,bolas[i].dy,bolasB[i].dx,bolasB[i].dy);
      line(bolasB[i+1].dx,bolasB[i+1].dy,bolasC[i].dx,bolasC[i].dy);
      line(bolasC[i].dx,bolasC[i].dy,bolasD[i].dx,bolasD[i].dy);
      }
      
      bolas[300] = bolas[0];
      bolasB[300] = bolasB[0];
      bolasC[300] = bolasC[0];
      bolasD[300] = bolasD[0];
      
      

  }
