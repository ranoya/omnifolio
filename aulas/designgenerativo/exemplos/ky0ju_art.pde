// autor: @ky0ju_art



int x,y,X,Y,a;
float vwidth,vheight;

void setup() {

  size(800,800);
  frameRate(100);
  background(#40124d);
  X=int(random(-2,2));
  Y=int(random(-2,2));
  x=X;
  y=Y;
}


void draw(){

vwidth = width;
vheight = height;
   
translate(vwidth/2,vheight/2);



a++;
x=x+X;
y=y+Y;

if(a%40 == 0){
  X=int(random(-2,2));
  Y=int(random(-2,2));
  fill(#7E2C75);
  ellipse(x,y,5,5);
}






stroke(#7E2C75,20);
noFill();
rect(0,0,x,y);
if (a>1600) {
   x=0;
   y=0;
   a=0;
}


}