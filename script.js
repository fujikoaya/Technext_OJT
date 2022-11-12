$(function () {
    // ハンバーガーメニュー
 $('.menu-trigger').on('click', function () {
    $('.nav-list').toggleClass('is-active');
});
//   ハンバーガーメニュー
$('.menu-trigger').on('click', function () {
    $('.menu-trigger').toggleClass('active')

})
$('.menu-trigger').on('click', function () {
    if ($('.menu-trigger').hasClass('active')) {
        $('html').css('overflow-y', 'hidden');

    } else {
        /*縦スクロールバーを出す*/
        $('html').css('overflow-y', 'scroll');
    }
});


 })
 