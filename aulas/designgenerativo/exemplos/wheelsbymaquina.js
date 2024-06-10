// Wheels by maquina
// Author: Tom Holloway @nyxtom
// https://twitter.com/nyxtom/status/1297970059126636544

// color palette

var colors = ["#ff0000", "#feb30f", "#0aa4f7", "#000000", "#ffffff"];

// set weights for each color 

var weights = [1, 1, 1, 1, 2, 5];

// scale of the vector field 
// smaller values => bigger structures  
// bigger values  ==> smaller structures 

var myScale = 2;

// number of drawing agents 

var nAgents = 2000;

let agent = [];

// set spinning direction (plus or minus)

var direction = -1;

var par = 0;


function setup() {
    createCanvas(800, 800);
    colorMode(HSB, 360, 100, 100);
    strokeCap(SQUARE);

    background(100);

    for (let i = 0; i < nAgents; i++) {
        agent.push(new Agent());
    }

}

function draw() {

    for (let i = 0; i < agent.length; i++) {
        agent[i].update();
    }

}

// select random colors with weights from palette 

function myRandom(colors, weights) {
    let sum = 0;

    for (let i = 0; i < colors.length; i++) {
        sum += weights[i];
    }

    let rr = random(0, sum);

    for (let j = 0; j < weights.length; j++) {

        if (weights[j] >= rr) {
            return colors[j];
        }
        rr -= weights[j];
    }
}

// paintining agent 


class Agent {
    constructor() {
        this.p = createVector(random(width), random(height));

        this.pOld = createVector(this.p.x, this.p.y);

        this.step = 2;

        let temp = myRandom(colors, weights);

        this.color = color(hue(temp) + randomGaussian() * 10,
            saturation(temp) + randomGaussian() * 10,
            brightness(temp) - 10, random(10, 90));

        this.strokeWidth = random(1, 15);

        this.isOutside = false;
    }

    update() {

        this.p.x += direction * vector_field(this.p.x, this.p.y).x * this.step;
        this.p.y += direction * vector_field(this.p.x, this.p.y).y * this.step;

        // hey...thanks to Danilo Gasques for suggesting the removal of 
        // this boundary check.

        /*
        if (this.p.x < 0) this.isOutside = true;
        else if (this.p.x > width)  this.isOutside = true;
        else if (this.p.y < 0)      this.isOutside = true;
        else if (this.p.y > height) this.isOutside = true; 
        
        if (this.isOutside) {
          this.p.x = random(width);
          this.p.y = random(height);
          this.pOld.set(this.p);
        }*/

        strokeWeight(this.strokeWidth);
        stroke(this.color);


        line(this.pOld.x, this.pOld.y, this.p.x, this.p.y);

        this.pOld.set(this.p);

        //this.isOutside = false;

    }

}

// vector field function 
// the painting agents follow the flow defined 
// by this function 


function vector_field(x, y) {

    x = map(x, 0, width, -myScale, myScale);
    y = map(y, 0, height, -myScale, myScale);

    let k1 = 5;
    let k2 = 3;

    let u = sin(k1 * y) + cos(k2 * y);
    let v = sin(k2 * x) - cos(k1 * x);

    return createVector(u, v);
}





// function to select 

function myRandom(colors, weights) {
    let tt = 0;
    let sum = 0;

    for (let i = 0; i < colors.length; i++) {
        sum += weights[i];
    }

    let rr = random(0, sum);

    for (let j = 0; j < weights.length; j++) {

        if (weights[j] >= rr) {
            return colors[j];
        }
        rr -= weights[j];
    }

    return tt;
}