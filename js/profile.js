$(document).ready(function () {
  var search_name = localStorage.getItem("search_name");
  var api_key = "RGAPI-8d85bbe7-a348-4906-96c3-062df7d0f453";
  console.log(search_name);
  $.ajax({
    url:"https://kr.api.riotgames.com/tft/summoner/v1/summoners/by-name/"+ search_name +"?api_key=" +api_key,
    type: "GET",
    dataType: "json",
  })
    .done(function (data) {
      console.log(data);
      $(".user_name").text(data.name);
      $("#user_id").val(data.id);
      $("#puuid").val(data.puuid);
      console.log(data.puuid)
    })
    .then(() => {
      var user_id = $("#user_id").val();
      $.ajax({
        url:"https://kr.api.riotgames.com/tft/league/v1/entries/by-summoner/"+ user_id +"?api_key=" +api_key,
        type: "GET",
        dataType: "json",
      }).done(function(data) {
        // 유저 티어 정보
        console.log(data);
      })
      .then(() => {
        var puuid = $("#puuid").val();
        $.ajax({
          url:"https://cors-anywhere.herokuapp.com/https://asia.api.riotgames.com/tft/match/v1/matches/by-puuid/"+ puuid +"/ids?start=0&count=20",
          type: "GET",
          dataType: "json",
        }).done(function(data) {
          // 매치ID 가져오기
          console.log(data);
        })
      })
    });
    
  // 차트
  var chartArea = document.querySelector("canvas").getContext("2d");

  // 차트를 생성한다.
  var myChart = new Chart(chartArea, {
    // ①차트의 종류(String)
    type: "bar",
    // ②차트의 데이터(Object)
    data: {
      // ③x축에 들어갈 이름들(Array)
      labels: ["#1", "#2", "#3", "#4", "#5", "#6", "#7", "#8"],
      // ④실제 차트에 표시할 데이터들(Array), dataset객체들을 담고 있다.
      datasets: [
        {
          // ⑤dataset의 이름(String)
          label: "",
          // ⑥dataset값(Array)
          data: [3, 3, 1, 5, 2, 3, 0, 3],
          // ⑦dataset의 배경색(rgba값을 String으로 표현)
          backgroundColor: [
            "#1ca983",
            "#3786c7",
            "#3786c7",
            "#3786c7",
            "#dadada",
            "#dadada",
            "#dadada",
            "#dadada",
          ],
          // ⑧dataset의 선 색(rgba값을 String으로 표현)
          borderColor: "rgba(255,255,255,0)",
          // ⑨dataset의 선 두께(Number)
          borderWidth: 1,
        },
      ],
    },
    // ⑩차트의 설정(Object)
    options: {
      plugins: {
        legend: {
          display: false,
        },
      },
      // ⑪축에 관한 설정(Object)
      scales: {
        // ⑫y축에 대한 설정(Object)
        y: {
          ticks: { beginAtZero: true, stepSize: 1 },
        },
      },
    },
  });
});
