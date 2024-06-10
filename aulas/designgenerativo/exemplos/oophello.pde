void setup() { 
  size(1440,821);
  background(#40124d);
  frameRate(20);
  fill(255);
  noStroke();
}

class Bola {
    int tam;
    int mx;
    int my;

    Bola(int px, int py, int t) {
        tam = t;
        mx = px;
        my = py;
    }

    void se_desenha() {
        ellipse(mx,my,tam,tam);
    }

}

Bola B1 = new Bola(30,30,50);
Bola B2 = new Bola(100,100,20);
Bola B3 = new Bola(200,150,80);

void draw() {
  
  background(#40124d);

  B1.se_desenha();
  B2.se_desenha();
  B3.se_desenha();

}