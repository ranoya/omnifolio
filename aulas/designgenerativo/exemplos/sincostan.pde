void setup() {
    size(1631,913);
}

float a = 0.9;
int raio = int(height/2.8);
int centerX=75;
int centerY=75;
int stSinX = -20;
int stCosY = -5;
int cotaY = 0;
boolean mudaRaio = false;

void mouseReleased() {
    mudaRaio = true;

    raio = dist(mouseX,mouseY,centerX,centerY);
}

void draw() {

  background(#eeeeee);

    if (mudaRaio == false){
    raio = dist(mouseX,mouseY,centerX,centerY);
    }
    centerX = width/2;
    centerY = height/2;

    stroke(#78008A);
    strokeWeight(1);
    line(centerX+cos(a)*raio,centerY+sin(a)*raio,centerX,centerY+sin(a)*raio);
    line(centerX+cos(a)*raio,centerY+sin(a)*raio,centerX+cos(a)*raio,centerY);

    noFill();
    stroke(#999999);
    strokeWeight(1);
    line(centerX,0,centerX,width);
    line(0,centerY,width,centerY);
    rect(centerX+raio,centerY,14,-14);
    fill(#999999);
    ellipse(centerX+raio+7,centerY-6,2,2);
    noFill();

    stroke(#f29610);
    if (mouseY>centerY) {

    line(0,60,cos(a)*raio+centerX,60);
    line(cos(a)*raio+centerX,55,cos(a)*raio+centerX,65);
    line(cos(a)*raio+centerX,105,cos(a)*raio+centerX, centerY + (stCosY * 3) - 50);

    } else {

    line(0,height-60,cos(a)*raio+centerX,height-60);
    line(cos(a)*raio+centerX,height-55,cos(a)*raio+centerX,height-65);
    line(cos(a)*raio+centerX,height-105,cos(a)*raio+centerX, centerY + (stCosY * 3) + 50);
    }

    if (mouseX>centerX) {
    line(120,0,120,sin(a)*raio+centerY);
    line(115,sin(a)*raio+centerY,125,sin(a)*raio+centerY);
    line(155,sin(a)*raio+centerY, centerX + 80 + (stSinX * 3.2), sin(a)*raio+centerY);
    } else {
    line(width-120,0,width-120,sin(a)*raio+centerY);
    line(width-115,sin(a)*raio+centerY,width-125,sin(a)*raio+centerY);
    line(width-155,sin(a)*raio+centerY, centerX + 150 + (stSinX * 3.2), sin(a)*raio+centerY); 
    }

    stroke(#999999);
    
    ellipse(centerX,centerY,2*raio,2*raio);
    strokeWeight(1);
    line(raio+centerX,0,raio+centerX,height);
    strokeWeight(1);
    line(centerX,centerY,centerX+raio,centerY+(tan(a)*raio));
    if (mouseX<centerX){
        line(centerX,centerY,centerX+cos(a)*raio,centerY+sin(a)*raio);
    }
    fill(#999999);
    ellipse(cos(a)*raio+centerX,sin(a)*raio+centerY,5,5);




    
    noFill();
    stroke(#78008A);
    strokeWeight(2);   
    line(centerX,centerY,centerX+cos(a)*raio,centerY+sin(a)*raio);
    line(centerX,centerY,centerX+raio,centerY);
    fill(#78008A);
    ellipse(cos(a)*raio+centerX,sin(a)*raio+centerY,5,5);
    ellipse(centerX+raio,centerY,5,5);

    stroke(#f29610);
    strokeWeight(1);
    line(raio+centerX,centerY,raio+centerX,centerY+(tan(a)*raio));
    line(centerX + 115 + (stSinX * 3.2),centerY,centerX + 115 + (stSinX * 3.2),centerY+sin(a)*raio);
    line(centerX + 110 + (stSinX * 3.2),centerY+sin(a)*raio,centerX + 120 + (stSinX * 3.2),centerY+sin(a)*raio);
    line(centerX+raio+5, centerY+(tan(a)*raio),centerX+raio-5, centerY+(tan(a)*raio));

    line(centerX,centerY + (stCosY * 3),centerX+cos(a)*raio,centerY + (stCosY * 3));
    line(centerX+cos(a)*raio, centerY - 5 + (stCosY * 3),centerX+cos(a)*raio,centerY + 5 + (stCosY * 3));
    

    noFill();
    stroke(#78008A);
    strokeWeight(2);
    if (a > 0) {
        arc(centerX, centerY, raio/2.5, raio/2.5, -0.2, a + 0.2, OPEN);
    } else {
        arc(centerX, centerY, raio/2.5, raio/2.5, a - 0.2, 0.2, OPEN);    
    }

    fill(#999999);
    textSize(12);
    text("X = " + centerX, centerX + 10,20);
    text("Y = " + centerY, 10,centerY - 8);

    fill(#f29610);
    if (mouseY>centerY) {
    text("X = " + nf(cos(a)*raio+centerX,1,2), cos(a)*raio+centerX+10, 65);
    } else {
    text("X = " + nf(cos(a)*raio+centerX,1,2), cos(a)*raio+centerX+10, height - 55);    
    }

    if (mouseX>centerX) {
    text("Y = " + nf(sin(a)*raio+centerY,1,2), 95, sin(a)*raio+centerY+15);
    } else {
    text("Y = " + nf(sin(a)*raio+centerY,1,2), width-155, sin(a)*raio+centerY+15);    
    }


    fill(#78008A);
    textSize(12);
    text(int(degrees(a)), (cos(a/2)*40) + centerX, (sin(a/2)*40) + centerY + 6);
    text('tan ' + int(degrees(a)) + ' = ' + nf(tan(a),1,2), centerX+raio+10, centerY+(tan(a)*raio)+3);
    text('cos ' + int(degrees(a)) + ' = ' + nf(cos(a),1,2), centerX-30+cos(a)*raio, centerY + stCosY);
    text('sin ' + int(degrees(a)) + ' = ' + nf(sin(a),1,2), centerX + stSinX, centerY+5+sin(a)*raio);
    
    
    /*
    text('R = '+int(raio), 10, 20);
    text('a = '+int(degrees(a)), 10, 35);
    text('COS(a)*R = '+ nf(cos(a)*raio,1,2),10,60);
    text('SIN(a)*R = '+ nf(sin(a)*raio,1,2),10,75);
    text('COS(a) = '+ nf(cos(a),1,2),10,90);
    text('SIN(a) = '+ nf(sin(a),1,2),10,105);
    text('TAN(a) = '+ nf(tan(a),1,2),10,125);
    text('SIN(a) / COS(a) = '+ nf(tan(a),1,2),10,140);
    text('SIN(a)*R / COS(a)*R = '+ nf(tan(a),1,2),10,155);
    */

    fill(#f29610);
    if (mouseY>centerY) {
    text('R = '+int(raio), centerX - 15, centerY + raio + 15);
    } else {
    text('R = '+int(raio), centerX - 15, centerY - raio - 15);
    }
    text(nf(tan(a)*raio,1,2), centerX+raio+85, centerY+ 3 + (tan(a)*raio/2));
    text(nf(cos(a)*raio,1,2), centerX-30+cos(a)*raio/2, centerY + (stCosY *2));
    text(nf(sin(a)*raio,1,2), centerX + 70 + (stSinX*2.5), centerY+5+sin(a)*raio/2);
    
    
    a = atan2(mouseY-(height/2),mouseX-(width/2));

    if (mouseX > centerX) {
    stSinX = -80;
    } else {
    stSinX = +5;
    }

    if (mouseY > centerY) {
    stCosY = -20;
    } else {
    stCosY = 20;
    }

}