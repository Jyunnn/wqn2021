import Swiper from 'swiper';
// import Swiper styles
import 'swiper/swiper-bundle.css';

var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
});