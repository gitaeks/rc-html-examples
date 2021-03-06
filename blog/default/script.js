// Initialize Swiper
var swiper = new Swiper('.swiper-container', {
    pagination: '.bar-standard .segmented-control',
    paginationClickable: true,
    effect: 'slide',
    loop: true,
    autoHeight: true,
    slideActiveClass :'active',
    bulletClass : 'control-item',
    bulletActiveClass : 'active' ,
    hashnav: true,
    paginationBulletRender: function (index, className) {
    var title;
    if (index === 0) title = '메인';
    if (index === 1) title = '카테고리'
    if (index === 2) title = '아카이브'
    if (index === 3) title = '태그'
    if (index === 4) title = '소개'
    return '<a class="' + className + '">'+title+'</a>';
    },
    onSlideChangeEnd: function (swiper) {
        $('.content').animate({scrollTop:0}, '100');
    }

});


// 포토 캡션 
var doPhotoCaption=function(){
    var img=$('.modal .rb-article').find('img');
    $(img).each(function(){
          var alt=$(this).attr('alt');
          var figure='<figure>';
          var figcaption='<figcaption>'+alt+'</figcaption>';
          $(this).wrap(figure);
          $(this).parent().append(figcaption); 
    });

}

doPhotoCaption()
