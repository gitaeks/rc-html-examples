$('#widget-01 .card').click(function(){
    $('#product-view').modal({
        template: './component/modal-view.html'
    });
});

$('#product-view').on('loaded.rc.modal', function () {
    var swiper5 = new Swiper('#product-view .swiper-container', {
        pagination: '#product-view .swiper-pagination',
        spaceBetween: 0,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
})


// The function that will initialize your Swiper.js instance
var doSwiper = function(){
    var swiper = new Swiper('#widget-01 .swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 5,
    });

    var swiper2 = new Swiper('#widget-02 .swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 5,
    });

    var swiper3 = new Swiper('#widget-03 .swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 5,
    });

    var swiper4 = new Swiper('#widget-04 .swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: '2',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 10,
    });

};

window.addEventListener('push', doSwiper);
doSwiper();


// 검색 
$('#search').on('shown.rc.modal', function () {
    $('#myInput').focus()
})


// 헤더 변경
$('#category').on('shown.rc.page', function() {
    $('#view-header').removeClass('rb-hidden')
    $('#list-header').addClass('rb-hidden')
    $('#main-header').addClass('active')
    $('#main-header .btn-nav.pull-left').attr("data-history","back").removeAttr("data-drawer-open");
})
$('#category').on('hidden.rc.page', function() {
    $('#view-header').addClass('rb-hidden')
    $('#list-header').removeClass('rb-hidden')
    $('#main-header').removeClass('active')
    $('#main-header .btn-nav.pull-left').attr("data-drawer-open","left").removeAttr("data-history");
})



// Instance
snapper = new Snap({
    element: $("#drawer-left")[0],
    maxPosition: 1,
    minPosition: -1,
    transitionSpeed: 0.1,
    tapToClose: true,
    touchToDrag: true
}),
snapper.on('open', function(){
    $('.snap-content').append('<div class="backdrop" data-drawer-close="left"></div>');
});
snapper.on('close', function(){
    $(".backdrop").remove();
});
$('body').on('tap click', '[data-drawer-close="left"]', function() {
    snapper.close('left');
});
$('body').on('click', '[data-drawer-open="left"]', function() {
    snapper.open('left');
});
$('body').on('click', '[data-drawer-expand="left"]', function() {
    snapper.expand('left');
});
$('body').on('tap click','[data-drawer-toggle="left"]',function(){
    if( snapper.state().state=="left" ){
        snapper.close();
    } else {
        snapper.open('left');
    }
});
$('body').on('click', '[data-drawer-close="right"]', function() {
    snapper.close('right');
});
$('body').on('click', '[data-drawer-open="right"]', function() {
    snapper.open('right');
});
$('body').on('click', '[data-drawer-expand="right"]', function() {
    snapper.expand('right');
});
$('body').on('click','[data-drawer-toggle="right"]',function(){
    if( snapper.state().state=="right" ){
        snapper.close();
    } else {
        snapper.open('right');
    }
});


// Document Reload
$('body').on('tap', '[data-location="reload"]', function() {
    window.location.reload();
});

