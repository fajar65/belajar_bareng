// const swiper = new Swiper("#swiper-container", {
//     slidesPerView: 1,
//     spaceBetween: 25,
//     loop: true,
//     centerSlide: true,
//     fade: true,
//     grabCursor: false,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//         dynamicBullet: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//             spaceBetweenSlides: 30,
//         },
//         1024: {
//             slidesPerView: 3,
//             spaceBetweenSlides: 30,
//         },
//         1280: {
//             slidesPerView: 4,
//             spaceBetweenSlides: 60,
//         },
//     },
// });

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});


// back to top
/**
 * Back to top button
 */
const toTop = document.querySelector(".back-to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 400) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})