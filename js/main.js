$(document).ready(function () {
  // 위로가기 버튼
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.go_top').fadeIn(500);
    } else {
      $('.go_top').fadeOut('slow');
    }
  });
  $('.go_top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, 200);
  });
  // 버튼 링크
  var window_width = $(window).width();
  
  $('.link_btn').on('click', function(){
    if(window_width < 1000) {
      $('.link_btn').attr('href', 'https://apps.apple.com/kr/app/%EC%A0%84%EB%9E%B5%EC%A0%81-%ED%8C%80-%EC%A0%84%ED%88%AC-%EB%A6%AC%EA%B7%B8-%EC%98%A4%EB%B8%8C-%EB%A0%88%EC%A0%84%EB%93%9C-%EC%A0%84%EB%9E%B5-%EA%B2%8C%EC%9E%84/id1480616748')
    } else {
      $('.link_btn').attr('href', 'https://download.kr.riotgames.com/league')
    };
  });

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
      $('.cst_card').removeClass('animate__animated animate__zoomIn');
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
      $('#syn_title').removeClass('animate__animated animate__backInUp');
      $('#syn_slide').removeClass('animate__animated animate__zoomInUp');
      $('#syn_slide_arrow').removeClass('animate__animated animate__fadeIn');
    },
    { offset: '50%' },
  );

  $('#syn_title').waypoint(
    function () {
      $('#new_title').removeClass('animate__animated animate__backInUp');
      $('#syn_slide').removeClass('animate__animated animate__zoomInUp');
      $('#syn_slide_arrow').removeClass('animate__animated animate__fadeIn');
      $('#syn_slide_arrow').css({ opacity: '0' });
      $('#syn_slide').css({ opacity: '0' });
      $('#syn_title').addClass('animate__animated animate__backInUp');
    },
    { offset: '100%' },
  );

  $('#syn_slide').waypoint(
    function () {
      $('.cst_card').removeClass('animate__animated animate__zoomIn');
      $('#syn_slide_arrow').css({ opacity: '1' });
      $('#syn_slide').css({ opacity: '1' });
      $('#syn_slide').addClass('animate__animated animate__zoomInUp');
      $('#syn_slide_arrow').addClass('animate__animated animate__fadeIn');
      $('#agm_title').removeClass('animate__animated animate__backInUp');
      $('#agm_slide').removeClass('animate__animated animate__zoomInUp');
      $('#agm_slide_arrow').removeClass('animate__animated animate__fadeIn');
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
      $('#syn_title').removeClass('animate__animated animate__backInUp');
      $('#syn_slide').removeClass('animate__animated animate__zoomInUp');
      $('#syn_slide_arrow').removeClass('animate__animated animate__fadeIn');
      $('#agm_slide').css({ opacity: '1' });
      $('#agm_slide_arrow').css({ opacity: '1' });
      $('#agm_slide').addClass('animate__animated animate__zoomInUp');
      $('#agm_slide_arrow').addClass('animate__animated animate__fadeIn');
    },
    { offset: '50%' },
  );

  $('.link_btn').waypoint(function() {
    $('#agm_title').removeClass('animate__animated animate__backInUp');
    $('#agm_slide').removeClass('animate__animated animate__zoomInUp');
    $('#agm_slide_arrow').removeClass('animate__animated animate__fadeIn');
  }, { offset: '100%' },);

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
  $('.agm_slide').not('.slick-initialized').slick({infinite: true,prevArrow: $('#agm_prev'), nextArrow: $('#agm_next')});
    $('.agm_slide').on('beforeChange',function (event, slick, currentSlide, nextSlide) {
      $('.slick-active').find('.agm_hero_left').removeClass('animate__animated animate__fadeInDown');
      $('.slick-active').find('.agm_hero_right').removeClass('animate__animated animate__fadeInUp');
      $('.agm_hero_left').css({"opacity" :"0"});
      $('.agm_hero_right').css({"opacity" :"0"});
    });
  
    $('.agm_slide').on('afterChange', function (event, slick, currentSlide) {
      $('.slick-active').find('.agm_hero_left').addClass('animate__animated animate__fadeInDown');
      $('.slick-active').find('.agm_hero_right').addClass('animate__animated animate__fadeInUp');
      $('.agm_hero_left').css({"opacity" :"0"});
      $('.agm_hero_right').css({"opacity" :"0"});
    });
});
