const canvas = document.getElementById('matrix');
const ctx = canvas.getContext('2d');

// Переменные для настройки
const chars = '01';
const fontSize = 16;
let columns = 0;
let drops = [];

// Функция инициализации и подстройки под размер
function setupCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Пересчитываем количество колонок исходя из новой ширины
    columns = Math.floor(canvas.width / fontSize);
    
    // Создаем массив капель заново, чтобы они заполнили весь экран
    drops = [];
    for (let x = 0; x < columns; x++) {
        // Устанавливаем случайную начальную позицию по вертикали, 
        // чтобы при изменении размера они не падали ровной линией
        drops[x] = Math.random() * -100; 
    }
}

// Запускаем настройку при загрузке
setupCanvas();

function draw() {
    // Полупрозрачный слой для создания эффекта шлейфа
    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = '#2ecc71';
    ctx.font = fontSize + 'px monospace';

    for (let i = 0; i < drops.length; i++) {
        const text = chars.charAt(Math.floor(Math.random() * chars.length));
        
        // Рисуем символ
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        // Если капля достигла низа экрана — отправляем её наверх с шансом 2.5%
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }
        
        drops[i]++;
    }
}

// Плавная отрисовка
setInterval(draw, 33);

// Слушатель изменения размера окна (включая масштаб)
window.addEventListener('resize', () => {
    setupCanvas();
});