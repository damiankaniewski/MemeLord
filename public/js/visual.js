const element = document.querySelector('#ads-container img');
const images = ['../img/mazda.gif', '../img/mini.gif', '../img/cars.gif'];

let currentImageIndex = 0;

element.src = images[currentImageIndex];

setInterval(() => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    element.src = images[currentImageIndex];
}, 5000);