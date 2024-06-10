export default ({
    p5,
    el = 'conteudopalco',
    fcolor = '#000000',

}) => {

    let sketch = function (p) {

        p.runonce = false;

        p.a = 0;
        p.s = 0.1 + p.random(0.1);
        p.l = 20 + p.random(10);

        p.setup = function () {
            p.createCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.ellipseMode(p.CENTER);
            p.noStroke(fcolor);
            p.noFill();
            p.rectMode(p.RADIUS);
            p.frameRate(30);
            p.strokeWeight(0.1);

        }
            
        p.draw = function () {
            
            if(p.runonce == false) {
                p.stroke(fcolor);
                p.translate((p.a*20) - (p.cos(p.a)*5),(document.getElementById(el).clientHeight/2)-30+(p.cos(p.a)*10));
                p.scale(p.a);
                p.rotate(p.a/2);
                p.rect(0,0,p.l,p.l);
      
                p.a = p.a + p.s;
      
                if (p.a > 100) {
                    p.noLoop();
                }

            }

        }

        p.windowResized = function () {

            p.runonce = false;

            p.a = 0;
            p.s = 0.1 + p.random(0.1);
            p.l = 20 + p.random(10);

            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.loop();

        };

    }

    return new p5(sketch, el);
}



