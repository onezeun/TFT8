$(document).ready(function () {
  // 햄버거메뉴
  $(".gnb_ckbox").on("click", function () {
    if ($(this).prop("checked")) {
      $(".main_menu").animate({ right: "0" });
    } else {
      $(".main_menu").animate({ right: "-300px" });
    }
  });
});
