/*

Morgan Rose
Design Generativo 2017.2 / Prof. Guilherme Ranoya
Exercício 3 - Exercício de Logotipo 1 

Marca da McDonald's

*/

void setup() {
  //fullScreen();
  size(850, 500);
  }
  //Pode mudar o tamanho da tela para qual quiser. A marca vai escalonar e se centralizar
  
void draw() {
  float escala = width/28.7;
  if (width>height) {escala = height/25.2;};
  
  float diferencaX = ((width-height)/2)-(3.5*escala)/2;
  if (height>=width) {diferencaX = 0;};
  float diferencaY = ((height-width)/2)+(3.5*escala)/2;
  if (height<width) {diferencaY = 0;};
  
  background(230,25,25);
  beginShape();
  fill(255, 195, 35);
  noStroke();
  vertex ((0*escala)+diferencaX, (25.2*escala)+diferencaY);
  bezierVertex((0*escala)+diferencaX, (13.8*escala)+diferencaY, (3.6*escala)+diferencaX, (0*escala)+diferencaY, (8.08*escala)+diferencaX, (0*escala)+diferencaY);
  bezierVertex((10.6*escala)+diferencaX, (0*escala)+diferencaY, (12.8*escala)+diferencaX, (3.3*escala)+diferencaY, (14.2*escala)+diferencaX, (8.65*escala)+diferencaY);
  bezierVertex((15.2*escala)+diferencaX, (3.3*escala)+diferencaY, (18.1*escala)+diferencaX, (0*escala)+diferencaY, (19.9*escala)+diferencaX, (0*escala)+diferencaY);
  bezierVertex((25.1*escala)+diferencaX, (0*escala)+diferencaY, (28.8*escala)+diferencaX, (11.2*escala)+diferencaY, (28.7*escala)+diferencaX, (25.2*escala)+diferencaY);
  //e agora a parte de dentro
  vertex((25.2*escala)+diferencaX, (25.2*escala)+diferencaY);
  bezierVertex((25.2*escala)+diferencaX, (12.1*escala)+diferencaY, (23.2*escala)+diferencaX, (1.8*escala)+diferencaY, (19.9*escala)+diferencaX, (1.8*escala)+diferencaY);
  bezierVertex((18.1*escala)+diferencaX, (1.8*escala)+diferencaY, (16.1*escala)+diferencaX, (11.4*escala)+diferencaY, (16.1*escala)+diferencaX, (23.2*escala)+diferencaY);
  vertex((12.5*escala)+diferencaX, (23.2*escala)+diferencaY);
  bezierVertex((12.5*escala)+diferencaX, (11.4*escala)+diferencaY, (10.6*escala)+diferencaX, (1.8*escala)+diferencaY, (8.08*escala)+diferencaX, (1.8*escala)+diferencaY);
  bezierVertex((5.5*escala)+diferencaX, (1.8*escala)+diferencaY, (3.6*escala)+diferencaX, (12.1*escala)+diferencaY, (3.6*escala)+diferencaX, (25.2*escala)+diferencaY);
  endShape(CLOSE);
  
  noLoop();
}