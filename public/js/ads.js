const adsContainer = document.querySelector('.ads-container');
const images = adsContainer.querySelectorAll('img');
let currentImageIndex = 0;
const links = ['https://www.opel.com/', 'https://www.mini.com/', 'https://www.mazda.com/'];

images.forEach(img => {
    img.style.transition = 'all 1s';
    img.style.opacity = 0.5;
    img.style.cursor = 'pointer';
    img.addEventListener('mouseenter', function() {
        img.style.opacity = 1;
        img.style.transform = 'scale(1.1)';
    });
    img.addEventListener('mouseleave', function() {
        img.style.opacity = 0.5;
        img.style.transform = 'scale(1)';
    });
    img.addEventListener('click', function() {
        window.open(links[currentImageIndex], '_blank');
    });
});

setInterval(function() {
    images.forEach(img => {
        img.style.opacity = 0.5;
    });

    images[currentImageIndex].style.opacity = 1;
    setTimeout(function() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
    }, 1000);
}, 5000);