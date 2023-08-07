// Declaracion de las variables
let btn_menu = document.getElementById('menu-btn');
let nav_bar = document.querySelector('.navbar');

btn_menu.onclick = () => {
    btn_menu.classList.toggle('fa-times');
    nav_bar.classList.toggle('active');
};

window.onscroll = () => {
    btn_menu.classList.remove('fa-times');
    nav_bar.classList.remove('active');
}

//para la funcionalidad de swiper
var swiper = new Swiper(".home-slider", {
    // centeredSlides: true,
    // slidesPerView: "auto",
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".service-slider", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        450: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});

//swiper para los clientes
var swiper = new Swiper(".reviews-slider", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        450: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});