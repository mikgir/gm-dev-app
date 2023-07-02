import './bootstrap';
import 'bootstrap/scss/bootstrap.scss';
import '@fortawesome/fontawesome-free';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import '../scss/main.scss';

import 'bootstrap/dist/js/bootstrap.min'

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import './main.js';

const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 2000,
    },
    slidesPerView: 3,
    speed: 400,
    spaceBetween: 20,
});
swiper.init('.swiper')
