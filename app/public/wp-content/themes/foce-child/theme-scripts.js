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

// Faire apparaître et disparaître le menu en full screen :
const nav = document.querySelector(".navnewmenu");
const remove = document.querySelector(".site-main");
const remove2 = document.querySelector("footer");
const body = document.querySelector("body");

burger.addEventListener("click", () => {
  // qd on clique sur le burger :
  burger.classList.toggle("active"); // le burger se transforme en croix
  nav.classList.toggle("open"); // on ouvre la navnewmenu qui comprend le menu en fullscreen
  remove.classList.toggle("remove"); // et on enlève la site-main
  remove2.classList.toggle("remove"); // .. et le footer
  body.style.height = null; // Il y avait une hauteur du body qui ajoutait du blanc & du skroll à la place des éléments retirés. Permet de supprimer cette hauteur sur laquelle je n'avais pas la main.
});
