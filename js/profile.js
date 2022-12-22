$(document).ready(function () {
  var search_name = localStorage.getItem("search_name");
  var api_key = "RGAPI-0ab1d492-d7d9-4c85-a25a-72490f8c670a";

  // 전역 변수 설정
  var user_id;
  var puu_id;
  var match_id = [];
  var participants;
  var history_rank = [];
  var rank_list = [];
  var game_type;
  var game_time;
  var game_day;

  //시간 구하기
  const time = (seconds) => {
    var min =
      parseInt((seconds % 3600) / 60) < 10
        ? "0" + parseInt((seconds % 3600) / 60)
        : parseInt((seconds % 3600) / 60);
    var sec =
      parseInt(seconds % 60) < 10
        ? "0" + parseInt(seconds % 60)
        : parseInt(seconds % 60);
    game_time = min + ":" + sec;
  };

  //날짜 구하기
  function day(value) {
    const today = new Date();
    const timeValue = new Date(value);

    const betweenTime = Math.floor(
      (today.getTime() - timeValue.getTime()) / 1000 / 60
    );
    const betweenTimeHour = Math.floor(betweenTime / 60);
    const betweenTimeDay = Math.floor(betweenTime / 60 / 24);

    if (betweenTime < 1) {
      game_time = "방금전";
    } else if (betweenTime > 1 && betweenTime < 60) {
      game_time = `${betweenTime}분전`;
    } else if (betweenTime > 60 && betweenTime < 1440) {
      game_time = `${betweenTimeHour}시간전`;
    } else if (betweenTime > 1440) {
      game_time = `${betweenTimeDay}일전`;
    }
  }

  $.ajax({
    url:"https://kr.api.riotgames.com/tft/summoner/v1/summoners/by-name/" +search_name +"?api_key=" +api_key,
    type: "GET",
    async: false,
    dataType: "json",
    success: function () {
      $(".content").show();
      $(".err_box").hide();
    },
    error: function () {
      console.log("에러");
      $("#srch_txt").text(search_name);
      $(".content").hide();
      $(".err_box").show();
    },
  })
    .done(function (data) {
      $(".user_name").text(data.name);
      $("#u_img").attr("src","http://ddragon.leagueoflegends.com/cdn/12.23.1/img/profileicon/" +data.profileIconId +".png");
      user_id = data.id;
      puu_id = data.puuid;
    })
    .then(() => {
      $.ajax({
        url:"https://kr.api.riotgames.com/tft/league/v1/entries/by-summoner/" +user_id +"?api_key=" +api_key,
        type: "GET",
        async: false,
        dataType: "json",
      })
        .done(function (data) {
          var rm = $("#ranked_emblems");
          var rc = $(".tier_wrap");

          if (data.length === 0) {
            rm.attr("src", "../images/Emblem_Unranked.png");
            rc.css("color", "#8c8c8c");
            $("#rank").text("UNLANKED");
            $(".point_wrap").hide();
          } else {
            // 유저 티어 정보
            $(".point_wrap").show();
            $("#tier").text(data[0].tier);
            $("#rank").text(data[0].rank);
            $("#point").text(data[0].leaguePoints);

            var rank_src = "";
            var rank_color = "";
            switch (data[0].tier) {
              case "IRON":
                rank_src = "../images/Emblem_Iron.png";
                rank_color = "#40312e";
                break;
              case "BRONZE":
                rank_src = "../images/Emblem_Bronze.png";
                rank_color = "#94665b";
                break;
              case "SILVER":
                rank_src = "../images/Emblem_Silver.png";
                rank_color = "#7a8994";
                break;
              case "GOLD":
                rank_src = "../images/Emblem_Gold.png";
                rank_color = "#f5b440";
                break;
              case "PLATINUM":
                rank_src = "../images/Emblem_Platinum.png";
                rank_color = "#32aca6";
                break;
              case "DIAMOND":
                rank_src = "../images/Emblem_Diamond.png";
                rank_color = "#0f70b4";
                break;
              case "MASTER":
                rank_src = "../images/Emblem_Master.png";
                rank_color = "#734d9a";
                break;
              case "GRANDMASTER":
                rank_src = "../images/Emblem_Grandmaster.png";
                rank_color = "#ce3e37";
                break;
              case "CHALLENGER":
                rank_src = "../images/Emblem_Challenger.png";
                rank_color = "#d1b66b";
                break;
            }
            rm.attr("src", rank_src);
            rc.css("color", rank_color);
          }
        })
        .then(() => {
          $.ajax({
            url:"https://asia.api.riotgames.com/tft/match/v1/matches/by-puuid/" +puu_id +"/ids?start=0&count=20&api_key=" +api_key,
            type: "GET",
            async: false,
            dataType: "json",
          }).done(function (data) {
            // 매치ID 가져오기
            match_id = data;
          });
          match_id.map((game, i) => {
            console.log(game)
            $.ajax({url:"https://asia.api.riotgames.com/tft/match/v1/matches/" +game +"?api_key=" +api_key,type: "GET",
              async: false,
              dataType: "json",
            }).done(function (data) {
              switch (data.info.queue_id) {
                case 1090:
                  game_type = "일반";
                  break;
                case 1100:
                  game_type = "랭크";
                  break;
                case 1130:
                  game_type = "초고속모드";
                  break;
                case 1160:
                  game_type = "더블업";
                  break;
              }
              time(data.info.game_length);
              // day(data.info.game_datetime);
              // console.log(game_time);
              participants.map(participants, (player, i) => {
                if (player.puuid == puu_id) {
                  // 게임 참가자 중 검색한 유저의 정보만 배열에 넣기
                  // history_user.push(player)
                  var placement = player.placement;
                  history_rank.push(placement);
                  var background;
                  switch (placement) {
                    case 1:
                      background = 'style="background:#1ca983"';
                      break;
                    case 2:
                    case 3:
                    case 4:
                      background = 'style="background:#0f70b4"';
                      break;
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                      background = 'style="background:#ccc"';
                      break;
                  }

                  $(".chart_val").append(
                    '<div class="one_box"' +
                      background +
                      '><div class="one_txt">' +
                      placement +
                      "</div></div>"
                  );
                  $("#history_each_wrap").append(
                    '<div class="history_cont_wrap"><div class="history_rank" ' +
                      background +
                      '>#<span class="hst_rank">' +
                      player.placement +
                      '</span></div><div class="history_cont"><div class="summary"><span class="p_type">' +
                      game_type +
                      '</span> <span class="p_time">' +
                      game_time +
                      '</span> <span class="p_day">' +
                      game_day +
                      '</span></div><div class="history_flex_box"><div class="traits">특성</div><div class="augments">증강</div></div><div class="units">유닛</div></div></div>'
                  );
                }
              });
            });
          });
          // 1 ~ 8등 계산
          for (i = 1; i < 9; i++) {
            rank(history_rank, i);
          }
          // 배열 평균 구하기
          const arr_sum = history_rank.reduce(function add(sum, value) {
            return sum + value;
          }, 0);
          const arr_avg = arr_sum / history_rank.length;

          // TOP 횟수 구하기
          const top = rank_list[1] + rank_list[2] + rank_list[3];

          $("#avg_rank").text("#" + arr_avg.toFixed(1));
          $("#first_rank").text(rank_list[0]);
          $("#top_rank").text(top);
          createChart();
        });
    });

  // 최근 20판 등수별 개수 구하기
  const rank = (arr, r) => {
    var count = 0;

    for (let i = 0; i < arr.length; i++) {
      if (arr[i] == r) {
        count++;
      }
    }
    rank_list.push(count);
  };

  // 차트
  var chartArea = document.querySelector("canvas").getContext("2d");

  // 차트를 생성한다.
  const createChart = () => {
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
            data: rank_list,
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
  };
});
