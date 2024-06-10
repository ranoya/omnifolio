
  void setup() {
  	size(945, 455);
  }

  void draw() {

  	fill(0);
  	textSize(28);

  	char v1 = "um nome";
  	int x = 9;
  	float y = 3.5;
  	boolean p2 = false;
  	float r = random(50);

  	text(v1, 40,40);
  	text(x, 40,80);
  	text(y, 40,120);
  	text(p2, 40,160);
  	text(r, 40, 220);
  	text("literal", 40, 260);
  	
  	v1 = "outro nome";
  	x = 11;
  	y = r;
  	r = random(100);
  	p2 = true;
  	
  	text(v1, 200,40);
  	text(x, 200,80);
  	text(y, 200,120);
  	text(p2, 200,160);
  	text(r, 200, 220);


  	exit();


  }
