class quadrado {
			
	float alfa = random(2*PI);
  float alfaz = 0;
  float tamanho = 1 + (1.5 * random(10));
	float orbita = 50 + random(1050);
  float fator = 0.2 + random(0.4);
  float orbitazeixooriginal = 0.1 + random(0.7);
  float orbitazeixo = orbitazeixooriginal;
  //float velocidadeoriginal = 0.003 + random(0.01);
  float velocidadeoriginal = 0.001 + random(0.005);
  float velocidade = velocidadeoriginal;
			
  void update() {
		
		noStroke();
		fill(290,cos(alfaz)+1,cos(alfaz)+1.5);
		rect(sin(alfa)*orbita, orbitazeixo * cos(alfa)*orbita,(tamanho + (cos(alfaz) * (tamanho*fator))),(tamanho + (cos(alfaz) * (tamanho*fator))));
		alfa = alfa + velocidade;
		alfaz = alfaz + velocidade;
		if(alfa > (PI * 2)) { alfa = 0; }
		if(alfaz > (PI *2)) { alfaz = 0; }
		orbitazeixo = orbitazeixooriginal + ((mouseY - (height/2))/500);
		
		//velocidade = velocidadeoriginal + (((mouseX-(width/2))/15400) - 0.003);
		velocidade = velocidadeoriginal + ((mouseX-(width/2))/30000);
			
	}
	
}

quadrado[] elementos = new quadrado[300];

for (int k=0; k<300;k++) {
	
	elementos[k] = new quadrado();
	
}

void setup() {
	colorMode(HSB, 360, 2, 2);
	size(1000, 500);
	
}

void draw() {
	color c = #40144D;
	background(c);
	translate(width/2,height/2);
	
	for (int i=0; i<300;i++) {
	
		elementos[i].update();
	
	}
	
}