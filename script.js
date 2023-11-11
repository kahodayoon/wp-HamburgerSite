$(function () {
  $('.js-foodmenu-title--sp').click(function () {
    console.log('クリックされたよ！');
    $('.js-foodmenu').toggleClass('is-open');
    $('.js-foodmenu--background').toggleClass('is-open');
    $('.js-body').toggleClass('is-open');
  });
  $('.js-foodmenu--close').click(function () {
    $('.js-foodmenu').toggleClass('is-open');
    $('.js-foodmenu--background').toggleClass('is-open');
    $('.js-body').removeClass('is-open');
  });
  $(window).resize(function () {
    // 画面幅が変更されたときに実行させたい処理内容
    $('.js-foodmenu').removeClass('is-open');
    $('.js-foodmenu--background').removeClass('is-open');
    $('.js-body').removeClass('is-open');
  });
});
