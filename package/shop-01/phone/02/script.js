// The function that will initialize your Swiper.js instance
var doSwiper = function(){
    var swiper = new Swiper('#widget-01', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10,
    });


    var swiper = new Swiper('#product-view', {
        pagination: '.swiper-pagination',
        spaceBetween: 10,
        paginationClickable: true,
    });

};

window.addEventListener('push', doSwiper);
doSwiper();
