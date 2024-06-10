
export default ({
    p5,
    el = 'conteudopalco',
    fcolor = '#000000',
    bgcolor = '#FFFFFF',
}) => {

    let sketch = function (p) {

        p.eutorad = function (angulo) {
            return (angulo * p.PI) / 180;

        }

        p.triangulo = function (x, y, s, v, kp) {

            if (kp) {
                p.beginShape();
                p.vertex((p.cos(p.eutorad(0)) * s) + x, (p.sin(p.eutorad(0)) * s) + y);
                p.vertex((p.cos(p.eutorad(60)) * v) + x, (p.sin(p.eutorad(65)) * v) + y);
                p.vertex((p.cos(p.eutorad(120)) * s) + x, (p.sin(p.eutorad(120)) * s) + y);
                p.vertex((p.cos(p.eutorad(180)) * v) + x, (p.sin(p.eutorad(180)) * v) + y);
                p.vertex((p.cos(p.eutorad(240)) * s) + x, (p.sin(p.eutorad(240)) * s) + y);
                p.vertex((p.cos(p.eutorad(300)) * v) + x, (p.sin(p.eutorad(300)) * v) + y);
                p.vertex((p.cos(p.eutorad(360)) * s) + x, (p.sin(p.eutorad(360)) * s) + y);
                p.endShape();
            } else {
                p.beginShape();
                p.vertex((p.cos(p.eutorad(180)) * s) + x, (p.sin(p.eutorad(180)) * s) + y);
                p.vertex((p.cos(p.eutorad(120)) * v) + x, (p.sin(p.eutorad(120)) * v) + y);
                p.vertex((p.cos(p.eutorad(60)) * s) + x, (p.sin(p.eutorad(60)) * s) + y);
                p.vertex((p.cos(p.eutorad(0)) * v) + x, (p.sin(p.eutorad(0)) * v) + y);
                p.vertex((p.cos(p.eutorad(300)) * s) + x, (p.sin(p.eutorad(300)) * s) + y);
                p.vertex((p.cos(p.eutorad(240)) * v) + x, (p.sin(p.eutorad(240)) * v) + y);
                p.vertex((p.cos(p.eutorad(180)) * s) + x, (p.sin(p.eutorad(180)) * s) + y);
                p.endShape();
            }

        }

        p.desenhalinha = function (y, s, v, margin) {

            let i = 0;

            for (let k = 0; k < p.width; k = k + (s)) {

                if (i == 0) {
                    p.triangulo(k + (2 * margin), (y + s) + (1 * margin), s, v, true);
                }

                if (i == 1) {
                    p.triangulo(k - (2 * margin), y, s, v, false);
                }

                if (i == 2) {
                    p.triangulo(k + (2 * margin), y, s, v, true);

                }

                if (i == 3) {
                    p.triangulo(k - (2 * margin), (y + s) + (1 * margin), s, v, false);
                }


                i++;
                if (i > 3) {
                    i = 0;
                }
            }

        }

        p.proximalinha = function (y, s, v, margin) {

            return y + (s * 2) + (margin * 2);

        }





        p.setup = function () {
            p.createCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            // p.background(bgcolor);
            p.noStroke();
            p.fill(fcolor+"cc");
        }


        p.linhaseguinte = -100;
        p.tamanho = 13;
        p.li = 22 * p.tamanho / 32;
        p.margem = p.int(p.random(3)); // 2-3 para Tatoo Original


        p.draw = function () {

            if (p.li >= 0) {
                p.desenhalinha(p.linhaseguinte, p.tamanho, p.li, p.margem);
                p.linhaseguinte = p.proximalinha(p.linhaseguinte, p.tamanho, p.li, p.margem);
                p.li--;
            } else {

                p.noLoop();
            }


        }

        p.windowResized = function () {

            p.linhaseguinte = -100;
            p.tamanho = 13;
            p.li = 22 * p.tamanho / 32;
            p.margem = p.int(p.random(3));
            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.loop();

        };

    }

    return new p5(sketch, el);
}