$(document).ready(function () {
  var cost_list = [];
  var origin_list = [];
  var class_list = [];



  $('input[name="cost"]').on('change', function () {
    if ($(this).prop('checked') == true) {
      cost_list.push($(this).val());
    } else {
      cost_list.splice($.inArray($(this).val(), cost_list), 1);
    }

    if (!cost_list.length) {
      $('.cost').parents('.cham_card').show();
    } else {
      $('.cost').parents('.cham_card').hide();
      $.each(cost_list, function (i, val) {
        var cost_card = $('.cost:contains("' + val + '")');
        cost_card.parents('.cham_card').show();
      });
    };
  });


  $('input[name="origin"]').on('change', function () {
    if ($(this).prop('checked') == true) {
      origin_list.push($(this).val());
    } else {
      origin_list.splice($.inArray($(this).val(), origin_list), 1);
    }

    if (!origin_list.length) {
      $('.origin').parents('.cham_card').show();
    } else {
      $('.origin').parents('.cham_card').hide();
      $.each(origin_list, function (i, val) {
        var origin_card = $('.origin:contains("' + val + '")');
        origin_card.parents('.cham_card').show();
      });
    };
  });

  $('input[name="class"]').on('change', function () {
    if ($(this).prop('checked') == true) {
      class_list.push($(this).val());
    } else {
      class_list.splice($.inArray($(this).val(), class_list), 1);
    }

    if (!class_list.length) {
      $('.class').parents('.cham_card').show();
    } else {
      $('.class').parents('.cham_card').hide();
      $.each(class_list, function (i, val) {
        var class_card = $('.class:contains("' + val + '")');
        class_card.parents('.cham_card').show();
      });
    };
  });

  // $('input[type="checked"]').on('change', function () {
  //   if(!cost_list.length && !origin_list.length && !class_list.length) {
  //     $('.cham_card').show();
  //   } else if (cost_list.length || origin_list.length) {

  //   }
  // })
}); 
