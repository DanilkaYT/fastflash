const canvas = document.getElementById('cube-container');
const ctx = canvas.getContext('2d');

let width, height;
let nodes = [
    [-100, -100, -100], [-100, -100, 100], [-100, 100, -100], [-100, 100, 100],
    [100, -100, -100], [100, -100, 100], [100, 100, -100], [100, 100, 100]
];
let edges = [
    [0, 1], [1, 3], [3, 2], [2, 0], [4, 5], [5, 7], [7, 6], [6, 4],
    [0, 4], [1, 5], [2, 6], [3, 7]
];

function resize() {
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width;
    canvas.height = height;
}

window.addEventListener('resize', resize);
resize();

// Вращение узлов
function rotate(node, thetaX, thetaY) {
    let sinX = Math.sin(thetaX);
    let cosX = Math.cos(thetaX);
    let sinY = Math.sin(thetaY);
    let cosY = Math.cos(thetaY);

    let [x, y, z] = node;

    // Вращение по X
    let y1 = y * cosX - z * sinX;
    let z1 = y * sinX + z * cosX;

    // Вращение по Y
    let x2 = x * cosY + z1 * sinY;
    let z2 = -x * sinY + z1 * cosY;

    return [x2, y1, z2];
}

function draw() {
    ctx.clearRect(0, 0, width, height);
    
    // Скорость вращения
    let time = Date.now() * 0.001;
    let thetaX = time * 0.5;
    let thetaY = time * 0.3;

    let projectedNodes = nodes.map(node => {
        let rotated = rotate(node, thetaX, thetaY);
        // Простая перспектива
        let scale = 400 / (400 - rotated[2]); 
        let x = rotated[0] * scale + width / 2;
        let y = rotated[1] * scale + height / 2;
        return [x, y];
    });

    ctx.strokeStyle = '#2ecc71';
    ctx.lineWidth = 2;
    ctx.lineJoin = 'round';

    // Рисуем ребра
    edges.forEach(edge => {
        let n1 = projectedNodes[edge[0]];
        let n2 = projectedNodes[edge[1]];
        
        ctx.beginPath();
        ctx.moveTo(n1[0], n1[1]);
        ctx.lineTo(n2[0], n2[1]);
        // Эффект свечения линий
        ctx.shadowBlur = 15;
        ctx.shadowColor = '#2ecc71';
        ctx.stroke();
    });

    requestAnimationFrame(draw);
}

draw();
