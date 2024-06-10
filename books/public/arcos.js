export default ({
    p5,
    el = 'iddoelemento',
    fcolor = '#000000',
    bgcolor = '#FFFFFF',
}) => {

    let sketch = function (p) {

        let centerY = 0;

        p.setup = function () {
            p.createCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.ellipseMode(p.RADIUS);
            centerY = p.random(document.getElementById(el).clientHeight);

        }

        p.draw = function () {

            let arcstart = 0;
            let arcend = 0;
            let arcweight = 100;

            p.background(fcolor);
            p.stroke(bgcolor);

            for (let i = arcweight; i <= (document.getElementById(el).clientWidth + 200); i = i + (1.5 * arcweight)) {

                arcstart = p.random(p.PI) - (p.PI / 4);
                arcend = p.random(p.PI) - (p.PI / 4);
                p.noFill();
                p.strokeCap(p.SQUARE);
                p.strokeWeight(arcweight);
                p.arc(0, centerY, i, i, arcstart, arcend, p.OPEN);

                arcweight += 3;

            }

            p.noLoop();

        }
        p.windowResized = function () {
            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
        };

    }

    return new p5(sketch, el);
}