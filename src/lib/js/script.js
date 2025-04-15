const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("open");

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line");
});
const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

ScrollReveal().reveal(".header__container p", {
    ...scrollRevealOption,
});

ScrollReveal().reveal(".header__container h1", {
    ...scrollRevealOption,
    delay: 500,
});

ScrollReveal().reveal(".header__container .btn", {
    ...scrollRevealOption,
    delay: 1000,
});

ScrollReveal().reveal(".features__grid .feature__card", {
    ...scrollRevealOption,
    interval: 300,
});

ScrollReveal().reveal(".paravoce__grid .paravoce__card", {
    ...scrollRevealOption,
    interval: 300,
});

ScrollReveal().reveal(".testimonials__grid .testimonial__card", {
    ...scrollRevealOption,
    interval: 300,
});


// carrossel 

const carousel = document.querySelector('.testimonials__carousel');
const prevButton = document.querySelector('.carousel__prev');
const nextButton = document.querySelector('.carousel__next');
let isDragging = false;
let startX;
let scrollLeft;

carousel.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

carousel.addEventListener('mouseleave', () => {
    isDragging = false;
});

carousel.addEventListener('mouseup', () => {
    isDragging = false;
});

carousel.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
});

carousel.addEventListener('touchstart', (e) => {
    isDragging = true;
    startX = e.touches[0].pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

carousel.addEventListener('touchend', () => {
    isDragging = false;
});

// Funcionalidade das setas
prevButton.addEventListener('click', () => {
    carousel.scrollLeft -= carousel.offsetWidth; // Move para a esquerda
});

nextButton.addEventListener('click', () => {
    carousel.scrollLeft += carousel.offsetWidth; // Move para a direita
});