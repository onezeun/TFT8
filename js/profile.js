$(document).ready(function () {
  var search_name = localStorage.getItem("search_name");
  var api_key = "RGAPI-e2d7e6d2-5cef-4432-b11e-7d161050683f";

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
      game_day = "방금전";
    } else if (betweenTime > 1 && betweenTime < 60) {
      game_day = `${betweenTime}분전`;
    } else if (betweenTime > 60 && betweenTime < 1440) {
      game_day = `${betweenTimeHour}시간전`;
    } else if (betweenTime > 1440) {
      game_day = `${betweenTimeDay}일전`;
    }
  }


  $.ajax({
    url: "https://kr.api.riotgames.com/tft/summoner/v1/summoners/by-name/" + search_name + "?api_key=" + api_key,
    type: "GET",
    async: false,
    dataType: "json",
    success: function () {
      $(".loading").show();
      $(".err_box").hide();
      $(".content").hide();
    },
    error: function () {
      $("#srch_txt").text(search_name);
      $(".content").hide();
      $(".err_box").show();
    },
  })
    .done(function (data) {
      $(".user_name").text(data.name);
      $("#u_img").attr("src", "http://ddragon.leagueoflegends.com/cdn/12.23.1/img/profileicon/" + data.profileIconId + ".png");
      user_id = data.id;
      puu_id = data.puuid;
    })
    .then(() => {
      $.ajax({
        url: "https://kr.api.riotgames.com/tft/league/v1/entries/by-summoner/" + user_id + "?api_key=" + api_key,
        type: "GET",
        async: false,
        dataType: "json",
      })
        .done(function (data) {
          var ranked_tft = data.find(e => e.queueType === 'RANKED_TFT')
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
            $("#tier").text(ranked_tft.tier);
            $("#rank").text(ranked_tft.rank);
            $("#point").text(ranked_tft.leaguePoints);

            var rank_src = "";
            var rank_color = "";
            switch (ranked_tft.tier) {
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
            url: 
            "https://asia.api.riotgames.com/tft/match/v1/matches/by-puuid/" + puu_id + "/ids?start=0&count=20&api_key=" + api_key,
            type: "GET",
            async: false,
            dataType: "json",
          }).done(function (data) {
            // 매치ID 가져오기
            match_id = data;
          });
          $.map(match_id, (game, i) => {
            $.ajax({
              url: "https://asia.api.riotgames.com/tft/match/v1/matches/" + game + "?api_key=" + api_key,
              type: "GET",
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
              participants = data.info.participants
              time(data.info.game_length);
              day(data.info.game_datetime);

              $.map(participants, (player, i) => {
                if (player.puuid == puu_id) {
                  // 게임 참가자 중 검색한 유저의 정보만 배열에 넣기
                  // history_user.push(player)
                  var placement = player.placement;
                  history_rank.push(placement);

                  var rank_background;
                  var chart_bg;

                  var traits = player.traits;
                  var augments = player.augments;
                  var units = player.units;

                  switch (placement) {
                    case 1:
                      chart_bg =  'style="background:#ffb93b"';
                      rank_background = 'style="background:#ffb93b"';
                      break;
                    case 2:
                    case 3:
                    case 4:
                      chart_bg =  'style="background:#9c86ad"';
                      rank_background = 'style="background:#9c86ad"';
                      break;
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                      chart_bg =  'style="background:#dadada"';
                      rank_background = 'style="background:#818181"';
                      break;
                  }

                  // 특성 --------------------------------------------------
                  var traits_list = [];
                  var arr_traits = [];
                  var obj_traits = {};
                  var t_num;
                  var t_hide;
                  var hexagon;
                  var t_icon;
                  var t_src;
                  var t_alt;
                  var tr;


                  $.map(traits, (trait, i) => {
                    if (trait.name != 'Set8_Threat') {
                      switch (trait.style) {
                        case 0:
                          hexagon = 'display: none';
                          break;
                        case 1:
                          hexagon = 'background: url(../images/hexagon/bronze.svg) no-repeat';
                          t_num = 4;
                          break;
                        case 2:
                          hexagon = 'background: url(../images/hexagon/silver.svg) no-repeat';
                          t_num = 3;
                          break;
                        case 3:
                          hexagon = 'background: url(../images/hexagon/gold.svg) no-repeat';
                          t_num = 2;
                          break;
                        case 4:
                          hexagon = 'background: url(../images/hexagon/chromatic.svg) no-repeat';
                          t_num = 1;
                          break;
                      };
                    } else {
                      hexagon = 'background: url(../images/hexagon/gold.svg) no-repeat';
                      t_num = 2;
                    }

                    // 특성 switch
                    switch (trait.name) {
                      default:
                        t_icon = 'display: none';
                        t_alt = '';
                        break;
                      case 'Set8_Ace':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Ace.svg';
                        t_alt = '에이스';
                        break;
                      case 'Set8_Admin':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/ADMIN.svg';
                        t_alt = '자동방어체계';
                        break;
                      case 'Set8_Aegis':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Aegis.svg';
                        t_alt = '방패대';
                        break;
                      case 'Set8_AnimaSquad':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/AnimaSquad.svg';
                        t_alt = '동물특공대';
                        break;
                      case 'Set8_Arsenal':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Arsenal.svg';
                        t_alt = '병기고';
                        break;
                      case 'Set8_Brawler':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Brawler.svg';
                        t_alt = '싸움꾼';
                        break;
                      case 'Set8_Civilian':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Civilian.svg';
                        t_alt = '민간인';
                        break;
                      case 'Set8_Corrupted':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Corrupted.svg';
                        t_alt = '타락';
                        break;
                      case 'Set8_Defender':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Defender.svg';
                        t_alt = '엄호대';
                        break;
                      case 'Set8_Duelist':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Duelist.svg';
                        t_alt = '결투가';
                        break;
                      case 'Set8_Forecaster':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Forecaster.svg';
                        t_alt = '기상캐스터';
                        break;
                      case 'Set8_GenAE':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Gadgeteen.svg';
                        t_alt = '기계유망주';
                        break;
                      case 'Set8_Hacker':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Hacker.svg';
                        t_alt = '해커';
                        break;
                      case 'Set8_Heart':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Heart.svg';
                        t_alt = '선의';
                        break;
                      case 'Set8_SpaceCorps':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/LaserCorps.svg';
                        t_alt = '레이저단';
                        break;
                      case 'Set8_Mascot':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Mascot.svg';
                        t_alt = '마스코트';
                        break;
                      case 'Set8_ExoPrime':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/MechaPRIME.svg';
                        t_alt = '메카: 프라임';
                        break;
                      case 'Set8_OxForce':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/OxForce.svg';
                        t_alt = '황소부대';
                        break;
                      case 'Set8_Prankster':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Prankster.svg';
                        t_alt = '익살꾼';
                        break;
                      case 'Set8_Recon':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Recon.svg';
                        t_alt = '정찰단';
                        break;
                      case 'Set8_Renegade':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Renegade.svg';
                        t_alt = '무법자';
                        break;
                      case 'Set8_Channeler':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Spellslinger.svg';
                        t_alt = '주문투척자';
                        break;
                      case 'Set8_StarGuardian':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/StarGuardian.svg';
                        t_alt = '별수호자';
                        break;
                      case 'Set8_Supers':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Supers.svg';
                        t_alt = '우세';
                        break;
                      case 'Set8_Deadeye':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Sureshot.svg';
                        t_alt = '특등사수';
                        break;
                      case 'Set8_Threat':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/Threat.svg';
                        t_alt = '위협';
                        break;
                      case 'Set8_UndergroundThe':
                        t_icon = 'display:block'
                        t_src = '../images/synergies/UndergroundThe.svg';
                        t_alt = '지하세계';
                        break;
                    };

                    if (hexagon == 'display: none') {
                      t_hide = 'display: none';
                    } else t_hide = 'display:inline-block';

                    tr = '<div class="traits" style="' + t_hide + '"><div class="hexagon" style="' + hexagon + '"><div class="trait" style="' + t_icon + '"><img src="' + t_src + '" alt="' + t_alt + '"></div></div></div>'
                    obj_traits = {
                      obj_num: t_num,
                      obj_tr: tr
                    }
                    arr_traits.push(obj_traits);
                  })

                  arr_traits.sort(function (a, b) {
                    return a.obj_num - b.obj_num
                  })

                  for (var i = 0; i < arr_traits.length; i++) {
                    traits_list.push(arr_traits[i].obj_tr);
                  }

                  // 증강 --------------------------------------------------
                  var augment;
                  var augment_list = [];
                  var champions_list = ['Galio', 'Gangplank', 'Nasus', 'Nunu', 'Nilah', 'Draven', 'Rammus', 'Lux', 'Renekton', 'Leona', 'Rell', 'Lulu', 'Leblanc', 'LeeSin', 'Riven', 'Malphite', 'Mordekaiser', 'MissFortune', 'Vi', 'Vayne', 'Belveth', 'Velkoz', 'Blitzcrank', 'Viego', 'Poppy', 'Samira', 'Sylas', 'Senna', 'Sejuani', 'Sett', 'Sona', 'Soraka', 'Sivir', 'Syndra', 'AurelionSol', 'Aphelios', 'Alistar', 'Annie', 'Ashe', 'Yasuo', 'Ekko', 'MonkeyKing', 'Urgot', 'Yuumi', 'Ezreal', 'Zac', 'Janna', 'Jax', 'Zed', 'Zoe', 'Jinx', 'Chogath', 'Camille', 'Kaisa', 'Kayle', 'Talon', 'Taliyah', 'Fiddlesticks', 'Fiora'];
                  $.map(augments, (val, i) => {
                    var hero;
                    var hero_ck = 0;

                    $.map(champions_list, (cham, i) => {
                      if(val.includes(cham) == true) {
                        hero = cham;
                        hero_ck = 1;
                      }
                    });

                    if(hero_ck == 0) {
                      augment = '<div class="augment"><img src="../images/augments/' + val + '.png" alt="'+val+'"></div>';
                      augment_list.push(augment);
                    } else {
                      augment = '<div class="augment"><img src="../images/augments/i_' + hero + '.jpg" alt="'+hero+'"></div>';
                      augment_list.push(augment);
                    };
                  });

                  // 유닛 --------------------------------------------------
                  var unit_list = [];
                  var c_src;
                  var star;
                  var cost;
                  var u_color;
                  var u_item;
                  var ch;

                  $.map(units, (unit, i) => {
                    c_src = unit.character_id
                    cost = unit.rarity;
                    
                    switch (unit.tier) {
                      case 1:
                        star = '★'
                        break;
                      case 2:
                        star = '★★'
                        break;
                      case 3:
                        star = '★★★'
                        break;
                    }

                    switch (cost) {
                      case 0:
                        u_color = '#818181'
                        break;
                      case 1:
                        u_color = '#18b48b'
                        break;
                      case 2:
                        u_color = '#207ac7'
                        break;
                      case 4:
                        u_color = '#c440da'
                        break;
                      case 6:
                        u_color = '#ffb93b'
                        break;
                    }

                    switch (unit.items.length) {
                      default:
                        u_item = '<div class="item_box"></div>'
                        break;
                      case 1:
                        u_item = '<div class="item_box"><img class="item_img" src="../images/item/' + unit.items[0] + '.png"></div>'
                        break;
                      case 2:
                        u_item = '<div class="item_box"><img class="item_img" src="../images/item/' + unit.items[0] + '.png"></div><div class="item_box"><img class="item_img" src="../images/item/' + unit.items[1] + '.png"></div>'
                        break;
                      case 3:
                        u_item = '<div class="item_box"><img class="item_img" src="../images/item/' + unit.items[0] + '.png"></div><div class="item_box"><img class="item_img" src="../images/item/' + unit.items[1] + '.png"></div><div class="item_box"><img class="item_img" src="../images/item/' + unit.items[2] + '.png"></div>'
                        break;
                    }

                    ch = '<div class="units_wrap"><div id="stars" class="stars" style="color:' + u_color + '">' + star + '</div><div class="unit_img_wrap" style="border: 3px solid ' + u_color + ';"><img class="unit_img" src="../images/unit/' + c_src + '.jpg" alt="' + c_src + '"></div><div class="item_wrap">' + u_item + '</div></div>';
                    unit_list.push(ch)
                  })

                  $(".chart_val").append(
                    '<div class="one_box"' +
                    chart_bg +
                    '><div class="one_txt">' +
                    placement +
                    '</div></div>'
                  );

                  $("#history_each_wrap").append(
                    '<div class="history_cont_wrap"><div class="history_rank"' +
                    rank_background +
                    '>#<span class="hst_rank">' +
                    player.placement +
                    '</span></div><div class="history_cont"><div class="summary"><span class="p_type">' +
                    game_type +
                    '</span> <span class="p_time">' +
                    game_time +
                    '</span> <span class="p_day">' +
                    game_day +
                    '</span></div><div class="history_flex_box"><div class="traits_wrap">' +
                    traits_list.join('') +
                    '</div><div class="augments_wrap">' +
                    augment_list.join('') +
                    '</div><div class="units_list_wrap">' +
                    unit_list.join('') +
                    '</div></div></div></div>'
                  );
                };
              });
              $(".content").show();
              $(".loading").hide();
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
              "#ffb93b",
              "#9c86ad",
              "#9c86ad",
              "#9c86ad",
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
