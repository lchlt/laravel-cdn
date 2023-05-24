import Swiper from "swiper";

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

new Swiper('.swiper', {
    loop: true,
    slidesPerView: 2
});
