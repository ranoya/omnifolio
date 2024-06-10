export default ({
    p5,
    el = 'iddoelemento',
    fcolor = '#000000',
    bgcolor = '#FFFFFF',
}) => {

    let sketch = function (p) {

        p.setup = function () {
            p.background(bgcolor);
            p.createCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.rectMode(p.RADIUS);
            p.noFill();
            p.frameRate(30);
            p.strokeWeight(0.1);
        }

        p.a = 0;
        p.s = 0.1 + p.random(0.1);
        p.l = 20 + p.random(10);

        p.draw = function () {

            p.stroke(fcolor);
            p.translate((p.a * 20) - (p.cos(p.a) * 5), (p.height / 2) - 30 + (p.cos(p.a) * 10));
            p.scale(p.a);
            p.rotate(p.a / 2);
            p.rect(0, 0, p.l, p.l);

            p.a = p.a + p.s;

            if (p.a > 100) {
                p.noLoop();
            }

        }


        p.windowResized = function () {
            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.a = 0;
            p.s = 0.1 + p.random(0.1);
            p.l = 20 + p.random(10);
        };

    }

    return new p5(sketch, el);
}