void setup()
{
  size(800,400);
  background(unhex(bgcolor));
  stroke(unhex(forecolor));

}

float v = 15;
float r = 20;
float ox = 0;
float oy = 0;

float dx = random(5);
float dy = random(30);

void draw(){
 popMatrix();
 rotate(0.2);
 translate(dx,dy);
 line(ox,oy,v,sin(v) * r);
 ox = v;
 oy = sin(v) * r;
 v = v + 0.4;
 pushMatrix();


}