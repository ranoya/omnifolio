export default ({
    p5,
    el = 'conteudopalco',
    fcolor = '#000000',

}) => {

    let sketch = function (p) {


        p.r1s = 0;

        p.r2s = 0;
 

        p.a1 = 0;
        p.a2 = 0;

        p.c1 = 0;
        p.c2 = 0;

        p.x1 = 0;
        p.x2 = 0;

        p.c1y = 0;
        p.c2y = 0;

        p.setup = function () {
            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            p.stroke(fcolor);

            p.c1 = p.random(2) + 1.2;
            p.c2 = p.random(2) + 1.4;

            p.c1y = p.random(document.getElementById(el).clientHeight);
            p.c2y = p.random(document.getElementById(el).clientHeight);

            p.r1c = p.random(5);
            p.r2c = p.random(3);


            p.r1s = parseInt(p.random(document.getElementById(el).clientHeight));
            p.r2s = parseInt(p.random(document.getElementById(el).clientHeight));



        }
            
        p.draw = function () {
            if (p.x1 < document.getElementById(el).clientWidth || p.x2 < document.getElementById(el).clientWidth) {


                p.line(p.x1, p.c1y + (p.r1s * p.sin(p.a1)), p.x2, p.c2y + (p.r2s * p.sin(p.a2)));
  
                /*
                p.rect(p.x1 - (45 * p.cos(p.a1)), p.c1y + (p.r1s * p.sin(p.a1)), 2, 2);

                p.rect(p.x1, p.c1y + (p.r1s * p.sin(p.a1)), 2, 2);
                p.rect(p.x2, p.c2y + (p.r2s * p.sin(p.a2)), 2, 2);
                */

                p.a1 += 0.01;
                p.a2 += 0.02;
                p.x1 += p.c1 - (p.r1c * p.cos(p.a2));
                p.x2 += p.c2 - (p.r2c * p.cos(p.a1));

            } else {

            p.noLoop();
            }
                        
        } 

        p.windowResized = function () {

            p.r1s = 0;

            p.r2s = 0;
    

            p.a1 = 0;
            p.a2 = 0;

            p.c1 = 0;
            p.c2 = 0;

            p.x1 = 0;
            p.x2 = 0;

            p.c1y = 0;
            p.c2y = 0;

            p.c1 = p.random(5) + 2.5;
            p.c2 = p.random(5) + 4.5;

            p.resizeCanvas(document.getElementById(el).clientWidth, document.getElementById(el).clientHeight);
            
            p.c1y = p.random(document.getElementById(el).clientHeight);
            p.c2y = p.random(document.getElementById(el).clientHeight);

            p.r1c = p.random(3);
            p.r2c = p.random(5);


            p.r1s = parseInt(p.random(document.getElementById(el).clientHeight));
            p.r2s = parseInt(p.random(document.getElementById(el).clientHeight));

            
            p.loop();

        };

    }

    return new p5(sketch, el);
}