import Swiper from 'swiper/bundle';
// import Swiper styles
import 'swiper/swiper-bundle.css';

var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
    autoplay: {
      delay: 5000,
    },
});