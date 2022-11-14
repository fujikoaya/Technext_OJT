$(function () {
    // ハンバーガーメニュー
 $('.menu-trigger').on('click', function () {
    $('.menu').toggleClass('is-active');
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



var show = 6; //最初に表示する件数
var num = 6;  //もっと見るで表示する件数
var contents = '.article-wrap'; // 対象のlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
if ($(contents).length > 6) {
    $('.more').fadeIn();
}else{
    $('.more').remove()
}
   
$('.more').on('click', function () {
  $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
  if ($(contents + '.is-hidden').length == 0) {
    $('.more').fadeOut();
  }
});
 })
 