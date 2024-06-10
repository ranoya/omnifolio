export default ({
    json = 'mydata.json',
    el,
    hue = 180,
    huestep = 90,
    alpha = 40,
    bgcolor = '#FFFFFF'
}) => {
    let allkeys = [];
    let allanos = [];
    let allmax = 0;
    let contaanos = 0;


    fetch(json).then(response => response.json()).then((
        data) => {

        for (let turma in data) {

            allanos[contaanos] = turma;
            contaanos++;

            for (let ks in data[turma]) {

                allkeys[ks] = ks;

                if (data[turma][ks] > allmax) {
                    allmax = data[turma][ks];
                }

            }
        }

        for (let turma in data) {
            for (let keys in allkeys) {

                if (data[turma][keys] == "" || data[turma][keys] == undefined) {

                    data[turma][keys] = 0;

                }

            }
        }

        console.table(data);

        let sketch = (p) => {
            p.setup = function () {

                p.colorMode(p.HSB, 255, 100, 100, 100);
                p.createCanvas(document.getElementById(el).clientWidth, document
                    .getElementById(el).clientHeight);
                p.background(255, 0, 100, 100);
                p.rR = hue;
            };

            p.draw = function () {
                p.rR = hue;
                //p.background(255, 0, 100, 100);
                p.background(bgcolor);
                p.translate(0, (p.height));
                p.fator = ((p.height - 40) / allmax) * -1;

                p.breaks = (p.width - 150) / (Object.keys(data).length - 1);

                p.noStroke();

                for (let kk in allkeys) {

                    p.rR = p.rR + huestep;
                    if (p.rR > 360) {
                        let dif = p.rR - 360;
                        p.rR = dif;
                    }

                    p.fill(p.rR, 100, 50, alpha);
                    p.beginShape();
                    p.vertex((Object.keys(data).length) * p.breaks, 0);
                    p.vertex((Object.keys(data).length) * p.breaks, 0);
                    p.vertex((Object.keys(data).length) * p.breaks, 150);
                    p.vertex((Object.keys(data).length) * p.breaks, 150);
                    p.vertex(0, 150);
                    p.vertex(0, 150);

                    p.vertex(0, data[allanos[0]][allkeys[kk]] * p.fator);

                    p.curveVertex(0, data[allanos[0]][allkeys[kk]] * p.fator);

                    for (let ano = 0; ano < (Object.keys(data).length); ano++) {


                        p.curveVertex(ano * p.breaks, data[allanos[ano]][allkeys[kk]] * p
                            .fator);

                    }

                    p.curveVertex((Object.keys(data).length) * p.breaks, data[allanos[Object
                        .keys(data)
                        .length - 1]][allkeys[kk]] * p.fator);

                    p.vertex((Object.keys(data).length) * p.breaks, 150);
                    p.endShape();

                }

                p.fill(bgcolor);
                p.rect(document.getElementById(el).clientWidth - 150, -(p.height), 150,
                    document
                    .getElementById(el).clientHeight);

                p.lastk = 0;
                for (let k = 0; k < (Object.keys(data).length); k++) {

                    p.fill(255, 0, 70, 100);
                    p.textSize(10);
                    p.text(allanos[k], (p.breaks * k) + 15, -(p.height) + 20);
                    p.fill(255, 0, 70, 100);
                    p.stroke(255, 0, 70, 100);
                    p.strokeWeight(0.5);
                    p.line((p.breaks * k), -(p.height), (p.breaks * k), -(p.height) + 100);
                    p.noStroke();

                    p.lastk = k;

                }

                for (let cat in data[allanos[p.lastk]]) {

                    p.fill(255, 0, 50, 100);
                    p.textSize(14);

                    if ((data[allanos[p.lastk]][cat] * p.fator) < -16) {

                        p.text(cat, document.getElementById(el).clientWidth - 135, 7 +
                            data[
                                allanos[p.lastk]][cat] * p.fator);

                    } else {

                        p.text(cat, document.getElementById(el).clientWidth - 135, -10);

                    }

                    p.noFill();

                }

                p.noLoop();


            };

            p.windowResized = function () {
                p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
                p.rR = hue;
            };

        };

        return new p5(sketch, el);

    });

}