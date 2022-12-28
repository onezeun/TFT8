$(document).ready(function () {
  // 마우스무브 애니메이션
  let x = 0;
  let y = 0;
  let mx = 0;
  let my = 0;

  $(window).mousemove(function (e) {
    x = e.clientX - $(window).width() / 2;
    y = e.clientY - $(window).height() / 2;

    mx += (x - mx) * 0.05;
    my += (y - my) * 0.05;

    $('.m_main_chr').css({transform: 'translate(' + -(mx / 20) + 'px,' + -(my / 20) + 'px)'});
    $('.lux').css({transform: 'translate(' + -(mx / 20) + 'px,' + -(my / 20) + 'px)'});
    $('.bot_bg_left').css({transform:'scale(1.2) translate(' + -(mx / 80) + 'px,' + -(my / 80) + 'px)'});
    $('.bot_bg_right').css({transform: 'scale(1.2) translate(' + mx / 80 + 'px,' + my / 80 + 'px)'});
    $('.bot_bg_main').css({transform: 'scale(1.1) translate(' + mx / 50 + 'px,' + -(my / 50) + 'px)'});
  });

  // 스크롤 애니메이션
  $('#new_title').waypoint(
    function () {
      $('.cst_card').css({ opacity: '0' });
      $('#new_title').addClass('animate__animated animate__backInUp');
    },
    { offset: '100%' },
  );

  $('#cst_card1').waypoint(
    function () {
      $('#cst_card1').css({ opacity: '1' });
      $('#cst_card1').addClass('animate__animated animate__zoomIn');
    },
    { offset: '50%' },
  );

  $('#cst_card2').waypoint(
    function () {
      $('#cst_card2').css({ opacity: '1' });
      $('#cst_card2').addClass('animate__animated animate__zoomIn');
    },
    { offset: '50%' },
  );

  $('#cst_card3').waypoint(
    function () {
      $('#cst_card3').css({ opacity: '1' });
      $('#cst_card3').addClass('animate__animated animate__zoomIn');
    },
    { offset: '50%' },
  );

  $('#syn_title').waypoint(
    function () {
      $('#syn_slide_arrow').css({ opacity: '0' });
      $('#syn_slide').css({ opacity: '0' });
      $('#syn_title').addClass('animate__animated animate__backInUp');
    },
    { offset: '100%' },
  );

  $('#syn_slide').waypoint(
    function () {
      $('#syn_slide_arrow').css({ opacity: '1' });
      $('#syn_slide').css({ opacity: '1' });
      $('#syn_slide').addClass('animate__animated animate__zoomInUp');
      $('#syn_slide_arrow').addClass('animate__animated animate__fadeIn');
    },
    { offset: '50%' },
  );

  $('#agm_title').waypoint(
    function () {
      $('#agm_slide_arrow').css({ opacity: '0' });
      $('#agm_slide').css({ opacity: '0' });
      $('#agm_title').addClass('animate__animated animate__backInUp');
    },
    { offset: '100%' },
  );

  $('#agm_slide').waypoint(
    function () {
      $('#agm_slide').css({ opacity: '1' });
      $('#agm_slide_arrow').css({ opacity: '1' });
      $('#agm_slide').addClass('animate__animated animate__zoomInUp');
      $('#agm_slide_arrow').addClass('animate__animated animate__fadeIn');
    },
    { offset: '50%' },
  );

  // 시너지 슬라이더
  $('.syn_slide')
    .not('.slick-initialized')
    .slick({
      infinite: true,
      prevArrow: $('#syn_prev'),
      nextArrow: $('#syn_next'),
    });

  $('.syn_symbol').hide();
  $('.slick-active').find('.syn_symbol').fadeIn(200);

  $('.syn_slide').on('beforeChange',function (event, slick, currentSlide, nextSlide) {
    $('.slick-active').find('.syn_symbol').fadeOut(1000);
  });

  $('.syn_slide').on('afterChange', function (event, slick, currentSlide) {
    $('.slick-active').find('.syn_symbol').fadeIn(200);
  });

  // 증강 슬라이더
  $('.agm_slide')
    .not('.slick-initialized')
    .slick({
      infinite: true,
      prevArrow: $('#agm_prev'),
      nextArrow: $('#agm_next'),
    });

    $('.agm_slide').on('beforeChange',function (event, slick, currentSlide, nextSlide) {
      $('.slick-active').find('.agm_hero_left').fadeOut(1000).removeClass('animate__animated animate__fadeInDown');
      $('.slick-active').find('.agm_hero_right').fadeOut(1000).removeClass('animate__animated animate__fadeInUp');
    });
  
    $('.agm_slide').on('afterChange', function (event, slick, currentSlide) {
      $('.slick-active').find('.agm_hero_left').fadeIn(200).addClass('animate__animated animate__fadeInDown');
      $('.slick-active').find('.agm_hero_right').fadeIn(200).addClass('animate__animated animate__fadeInUp');
    });
});
