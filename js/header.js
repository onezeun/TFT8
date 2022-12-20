$(document).ready(function () {
  $("#sch_btn").on("click", function () {
    var sch_txt = $("#sch_txt").val();

    if (sch_txt == "") {
      alert("소환사명을 입력해주세요");
    } else {
      localStorage.setItem("search_name", sch_txt);
      location.href='profile.html';
    }
  });

  // 햄버거메뉴
  $(".gnb_ckbox").on("click", function () {
    if ($(this).prop("checked")) {
      $(".main_menu").animate({ right: "0" });
    } else {
      $(".main_menu").animate({ right: "-300px" });
    }
  });
});
