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
// フェードイン、フェードアウト

//     var $slide = $(".slide")
//   .slick({
//     fade: true,
//     speed: 500,
//     autoplaySpeed: 3000,
//     arrows: false,
//     autoplay: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     infinite: true
//   });


// ブログ記事
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

$(function() {
    $('.btn').on('click', function() {
     $.ajax({
      url: ('path/to/file.php'), // ajax通信をするファイル
      type: 'GET', // GET or POST
      data: { f: $(this).value(); },// パラメータとして渡す値の指定
      dataType: 'html', // 今回は直接htmlを出力したかったのでhtml。受け取ったデータで更に処理したい場合はjson
      cache: true, // 通信のキャッシュを残すか
      // ajax通信成功
      success: function(data) {
   // 引数でデータを受け取り
       $('#content').html(data);
      },
      // ajax通信失敗
      error: function() {
       console.log('fail');
      }
     });
    });
   });
 })
 