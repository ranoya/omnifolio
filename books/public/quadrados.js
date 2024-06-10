export default ({
    p5,
    el = 'iddoelemento',
    fcolor = '#000000',
    bgcolor = '#FFFFFF',
}) => {

    let sketch = function (p) {

        p.setup = function () {
            p.createCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);

        }

        p.draw = function () {

            p.background(bgcolor);
            p.fill(fcolor);
            p.noStroke();

            let t = p.random(80) + 20;
            p.rectMode(p.CORNER);
            p.rect(0, 0, t, t);

            t = p.random(80) + 20;
            p.rect(document.getElementById(el).clientWidth - t, document.getElementById(el).clientHeight - t, t, t);

            for (let i = 0; i < 25; i++) {

                p.rectMode(p.RADIUS);
                let tamanho = p.random(80) + 20;
                p.rect(p.random(document.getElementById(el).clientWidth), p.random(document.getElementById(el).clientHeight), tamanho, tamanho);

            }

            p.noLoop();

        }
        p.windowResized = function () {
            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
        };

    }

    return new p5(sketch, el);
}