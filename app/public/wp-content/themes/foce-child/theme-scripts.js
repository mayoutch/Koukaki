console.log("hello");

// Swiper -- pour caroussel de personnages en CoverflowEffect
//https://swiperjs.com/demos#effect-coverflow
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",

  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

// Menu burger : https://www.youtube.com/watch?v=ZGyLWixjE90
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
});
