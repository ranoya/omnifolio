void setup() {
    size(500,400);
    frameRate(10);
    stroke(255);
    background(#40124d);
}

int a = 10;
int b1 = 50;
int b2 = 80;

void draw() {

    line(a,a,b1,b2);

    b2 = 30;

    line(a,a,b1,b2);

}