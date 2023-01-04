$(document).ready(function () {
  var card_value = $('.card_value').val().split(',');
  $('.filter_toggle').on('click', function () {
    $('.filter_list').slideToggle();
  });

  var ck_list = [];

  $('input[type="checkbox"]').on('change', function () {
    if ($(this).prop('checked') == true) {
      ck_list.push($(this).val());
    } else {
      ck_list.splice($.inArray($(this).val(), ck_list), 1);
    }

    $('.card_check').val(ck_list.every(item => card_value.includes(item)));

    if (!ck_list.length) {
      $('.cham_card').show();
    } else {
      $('.card_value').parents('.cham_card').hide();
      $('.card_value').each(function() {
        if(ck_list.every(item => $(this).val().split(',').includes(item))) {
          $(this).parents('.cham_card').show();
        };
      });
    };
  });
}); 

