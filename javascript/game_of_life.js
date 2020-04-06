'use strict';

function makearray(cols, rows) {
    var array = Array.from(Array(cols), () => new Array(rows));
    return array;
}

setHueValue();
const c = document.getElementById("Canvas");
const ctx = c.getContext("2d");
var grid;
let resolution = 7;
let cols;
let rows;

function setup() {
    cols = ceil(document.getElementById("Canvas").clientWidth / resolution);
    rows = ceil(document.getElementById("Canvas").clientHeight / resolution);
    grid = makearray(cols, rows)
    for (let i = 0; i < cols; i++) {
        for (let ii = 0; ii < rows; ii++) {
            grid[i][ii] = floor(random(2));
        }
    }
}

function draw() {


    for (let i = 0; i < cols; i++) {
        for (let ii = 0; ii < rows; ii++) {
            if (grid[i][ii] == 1) {
                let x = i * resolution;
                let y = ii * resolution;
                var hueinput = document.getElementById('hueslider');
                var hueval = hueinput.value;
                var satinput = document.getElementById('satslider');
                var satval = satinput.value;
                var luminput = document.getElementById('lumslider');
                var lumval = luminput.value;
                var rgb = HSLToRGB(hueval, satval, lumval);
                ctx.fillStyle = rgb;
                ctx.strokeStyle = "darkgrey";
                ctx.strokeRect(x + 0.5, y - 0.5, resolution - 1, resolution);
                ctx.fillRect(x, y, resolution - 1, resolution);
                ctx.rect(x, y, resolution - 1, resolution);
            } else {
                let x = i * resolution;
                let y = ii * resolution;
                ctx.fillStyle = 'whitesmoke';
                ctx.strokeStyle = "darkgrey";
                ctx.strokeRect(x + 0.5, y - 0.5, resolution - 1, resolution);
                ctx.fillRect(x, y, resolution - 1, resolution);
                ctx.rect(x, y, resolution - 1, resolution);
            }
        }
    }

    let next = makearray(cols, rows);

    for (let i = 0; i < cols; i++) {
        for (let ii = 0; ii < rows; ii++) {
            let sum = 0;
            let neighbours = countNeighbours(grid, i, ii);
            let state = grid[i][ii];

            if (state == 0 && neighbours == 3) {
                next[i][ii] = 1;
            } else if (state == 1 && (neighbours < 2 || neighbours > 3)) {
                next[i][ii] = 0;
            } else {
                next[i][ii] = state;
            }
        }
    }

    grid = next;

}

function countNeighbours(grid, x, y) {
    let sum = 0;
    for (let i = -1; i < 2; i++) {
        for (let ii = -1; ii < 2; ii++) {
            let col = (x + i + cols) % cols;
            let row = (y + ii + rows) % rows;
            sum += grid[col][row];
        }
    }
    sum -= grid[x][y];
    return sum;
}

function setHueValue() {
    var hueinput = document.getElementById('hueslider');
    var huelabel = document.getElementById('huelabel');
    var hueval = hueinput.value;
    var satinput = document.getElementById('satslider');
    var satlabel = document.getElementById('satlabel');
    var satval = satinput.value;
    var luminput = document.getElementById('lumslider');
    var lumlabel = document.getElementById('lumlabel');
    var lumval = luminput.value;
    huelabel.innerText = hueval;
    satlabel.innerText = satval;
    lumlabel.innerText = lumval;
    var sat = document.getElementById('satslider');
    sat.style.backgroundImage = 'linear-gradient(to right,  hsl(' + hueval + '%, 0%, 60%) 0%, hsl(' + hueval + '%, 100%, 60%)';

}

function HSLToRGB(h, s, l) {
    // Must be fractions of 1
    s /= 100;
    l /= 100;

    let c = (1 - Math.abs(2 * l - 1)) * s,
        x = c * (1 - Math.abs((h / 60) % 2 - 1)),
        m = l - c / 2,
        r = 0,
        g = 0,
        b = 0;

    if (0 <= h && h < 60) {
        r = c;
        g = x;
        b = 0;
    } else if (60 <= h && h < 120) {
        r = x;
        g = c;
        b = 0;
    } else if (120 <= h && h < 180) {
        r = 0;
        g = c;
        b = x;
    } else if (180 <= h && h < 240) {
        r = 0;
        g = x;
        b = c;
    } else if (240 <= h && h < 300) {
        r = x;
        g = 0;
        b = c;
    } else if (300 <= h && h < 360) {
        r = c;
        g = 0;
        b = x;
    }
    r = Math.round((r + m) * 255);
    g = Math.round((g + m) * 255);
    b = Math.round((b + m) * 255);

    return "rgb(" + r + "," + g + "," + b + ")";
}