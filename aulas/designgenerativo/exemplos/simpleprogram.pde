
  void setup() {
  	size(945, 684);
  }

  void draw() {
  	if (mousePressed) {
       fill(0);
  	} else {
       fill(255);
  	}
  	ellipse(mouseX, mouseY, 80, 80);
  }
