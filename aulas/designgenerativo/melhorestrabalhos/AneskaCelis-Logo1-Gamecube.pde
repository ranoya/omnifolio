//Design | UFPE | CAC | Design Generativo 2017.2 | Exercício Visual 3
// Aluna: Aneska Celis

//Logo do Gamecube

void setup() {
  size(500, 500);
  background (0);
}
void draw(){ 
noStroke(); 

//GAMECUBE LOGO Parte central (O cubo tridimencional)

fill ( 63,36,117); 
quad (210, 230, 250, 250, 250, 300, 210, 280); 
fill ( 42,12,102); 
quad (250, 250, 290, 230, 290, 280, 250, 300);
fill (147,112,219);
quad (210, 230, 250, 250, 290, 230, 250, 210);

//GAMECUBE LOGO Parte externa (O desenho que contorna o cubo feito com losangulos)

//Quad01Purple1
fill ( 42,12,102);
quad (290, 230, 310, 220, 310, 255, 290, 265);
//Quad02Purple1
fill ( 42,12,102);
quad (310, 220, 340, 205, 340, 240, 310, 255);
//Quad03Purple1
fill ( 42,12,102);
quad (310, 255, 340, 240, 340, 275,310,290);
// Quad04Purple1                              
fill ( 42,12,102);
quad (310,290, 340, 275, 340, 310, 310, 325);                              
//Quad05Purple1
fill ( 42,12,102);
quad (280, 305, 310, 290, 310, 325,280, 340);
//Quad06Purple1
fill ( 42,12,102);
quad (250, 320, 280, 305, 280, 340,250, 355);
//Quad07Purple2
fill (  63,36,117);
quad (220, 305, 250, 320, 250,355 ,220, 340);
//Quad08Purple2
fill (  63,36,117);
quad (190,290, 220 ,305 , 220,340  ,190 ,325 );
//Quad09Purple2
fill (  63,36,117);
quad (160,275, 190,290 , 190 ,325  ,160,310 );
//Quad10Purple2
fill (  63,36,117);
quad (160, 240 ,190, 255 , 190,290,160,275 );
//Quad11Purple2
fill (  63,36,117);
quad (160, 205  ,190, 220 , 190,255, 160,240 );
//Quad12Purple3
fill ( 147,112,219);
quad (160, 205  ,190, 190 , 220,205, 190,220 );
////Quad13Purple3
fill ( 147,112,219);
quad (190, 190  ,220, 175 , 250,190 ,220,205 );
////Quad14Purple3
fill ( 147,112,219);
quad ( 220, 175  ,250,160 ,280, 175, 250,190 );
////Quad15Purple3
fill ( 147,112,219);
quad (250, 190  ,280, 175 ,310,190 , 280 ,205 );
//Quad16Purple3
fill ( 147,112,219);
quad (280, 205  ,310, 190 ,320,195 , 290 ,210 );

}