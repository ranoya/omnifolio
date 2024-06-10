void noisee() {
  for (int j = 0; j < height; j++) { 
    for (int i = 0; i < width; i++) {
      float bri = random(-4, 4);
      color col = get(i, j);
      col = color(red(col)+bri, green(col)+bri, blue(col)+bri);
      set(i, j, col);
    }
  }
}