const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');

let currentIndex = 0;

function nextSlide() {
    slides[currentIndex].style.transform = 'translateX(-100%)';
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].style.transform = 'translateX(0)';
}

setInterval(nextSlide, 3000); // Cambia de diapositiva cada 3 segundos
