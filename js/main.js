$(document).ready(function () {
  // 햄버거메뉴
  $(".gnb_ckbox").on("click", function () {
    if ($(this).prop("checked")) {
      $(".main_menu").animate({ right: "0" });
    } else {
      $(".main_menu").animate({ right: "-300px" });
    }
  });
  // 시너지 슬라이더
  $(".syn_slide").not('.slick-initialized').slick({
    infinite: true,
    prevArrow: $('#syn_prev'),
    nextArrow: $('#syn_next'),
  });

  $('.syn_symbol').hide();
  $('.slick-active').find('.syn_symbol').fadeIn(200);

  $(".syn_slide").on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    $('.slick-active').find('.syn_symbol').fadeOut(1000);
  });

  $(".syn_slide").on('afterChange', function (event, slick, currentSlide) {
    $('.slick-active').find('.syn_symbol').fadeIn(200);
  });

  $(".agm_slide").not('.slick-initialized').slick({
    infinite: true,
    prevArrow: $('#agm_prev'),
    nextArrow: $('#agm_next'),
  });

});
