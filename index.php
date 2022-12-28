<?php
// DB 연결
include 'inc/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TFT8.0 : 괴물습격</title>

  <link rel="shortcut icon" href="images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/svg.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css" />

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="js/includ.js"></script>
  <script type="text/javascript" src="js/slick.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


</head>

<body>
  <div class="wrap">
    <!-- header -->
    <header>
      <div id="header-include"></div>
    </header>

    <!-- content -->
    <main id="content" class="content">
      <section class="main_info">
        <div class="main_title_wrap">
          <h2 class="main_title txt_hide"> TEAMFIGHT TACTICS 괴물습격!</h2>
        </div>
        <!-- 모바일, 태블릿 메인 비디오 -->
        <div class="m_bg">
          <video class="video-container" autoplay muted loop>
            <source src="images/tft8.0.mp4" type="video/mp4">
          </video>
          <img src="images/m_bg01.png" alt="모바일배경" class="m_sub_bg">
          <div class="m_chr_wrap">
            <img src="images/pc_main_chr.png" alt="펭구" class="m_main_chr">
          </div>
          <button type="button" class="main_btn">무료로 플레이하기</button>
        </div>
        <!-- 데스트탑 배경 -->
        <div class="pc_bg">
          <h2 class="pc_main_title txt_hide"> TEAMFIGHT TACTICS 괴물습격!</h2>
          <img src="images/pc_bg02.png" alt="데스크탑배경" class="pc_bg_img">
          <div class="v_wrap">
            <div class="cinematic_wrap">
              <iframe class="cinematic"
                src="https://www.youtube.com/embed/4HPfUrO5fBY?autoplay=1&amp;mute=1&modestbranding=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
              <div class="lux_wrap">
                <img src="images/lux.png" alt="럭스" class="lux">
              </div>
            </div>
          </div>
          <a href="" class="y_link">전략적 팀 전투 유튜브 바로가기</a>
        </div>
      </section>

      <div class="cont_wrap">
        <section class="new_cont">
          <h2 id="new_title">새로운 게임플레이 요소!</h2>
          <div id="cst_card1" class="mb-4 cst_card new_hero">
            <img src="images/new01.jpg" alt="영웅증강소개" class="new_hero_img">
            <div class="cst_card_txt">
              <h3>영웅 증강</h3>
              <p>
                세 가지 중 하나를 선택 해
                플레이어 여러분의 슈퍼특공대를 이끌
                챔피언을 강화할 수 있습니다.
              </p>
            </div>
          </div>

          <div id="cst_card2" class="mb-4 cst_card new_threat">
            <img src="images/new02.jpg" alt="위협소개">
            <div class="cst_card_txt">
              <h3>위협</h3>
              <p>
                위협 챔피언은 파괴라는 단 하나의
                목표를 갖고 단독으로 행동하는 능력이
                뛰어납니다. 위협 챔피언은 같은 단계의
                다른 챔피언 보다 강하지만, 특성 중첩
                효과를 누릴 수 없습니다.
              </p>
            </div>
          </div>

          <div id="cst_card3" class="cst_card new_anvil">
            <img src="images/new03.jpg" alt="아이템 모루와 PvE 라운드소개">
            <div class="cst_card_txt">
              <h3>아이템 모루와 PvE 라운드</h3>
              <p>
                아이템 모루는 스테이지 4-7 PvE 라운드에
                처음으로 등장해 세 가지 조합 아이템 중 하나를
                고를 수 있게 해줍니다. 이후 완성 아이템 모루는
                스테이지 5-7 및 6-7 PvE 라운드에 등장합니다
              </p>
            </div>
          </div>
          <div class="cst_lux_wrap">
            <img src="images/cst_lux.png" alt="럭스" class="cst_lux">
          </div>
          <div class="line_wrap">
            <img src="images/main_line.png" class="main_line">
          </div>
        </section>

        <section class="syn_cont">
          <div id="syn_title" class="syn_title_wrap">
            <h2>시너지 소개</h2>
            <a href="#" class="all_view">전체보기</a>
          </div>
          <div id="syn_slide" class="syn_slide">
            <?php
              $origin_syn_data = [
                  'Gadgeteen',
                  'AnimaSquad',
                  'LaserCorps',
                  'MechaPRIME',
                  'Civilian',
                  'StarGuardian',
                  'Arsenal',
                  'Supers',
                  'Threat',
                  'ADMIN',
                  'UndergroundThe',
                  'OxForce',
              ];
              $i = 0;

              while ($i < count($origin_syn_data)) {
              $sql = "SELECT * FROM origin_synergies WHERE o_icon = '$origin_syn_data[$i]';";
              $result = mysqli_query($dbcon, $sql);
              $array = mysqli_fetch_array($result);
            ?>
            <div class="syn_card_wrap">
              <div class="syn_card">
                <div class="syn_symbol">
                  <div class="syn_icon">
                    <object type="image/svg+xml" data="images/animationsvg/<?php echo $origin_syn_data[$i]; ?>.svg" class="syn_icon_img"></object>
                  </div>
                </div>
                <div class="syn_txt">
                  <h3><?php echo $array['o_title']; ?></h3>
                  <p><?php echo $array['o_content']; ?></p>
                  <pre><?php echo $array['o_onskill']; ?></pre>
                </div>
                <?php
                $cham_sql = "SELECT o.o_title, cham.c_idx, cham.c_name, cham.c_cost, cham.c_icon, cham.c_img FROM origin_synergies o JOIN champion_origin co ON o.o_idx = co.o_idx JOIN champions cham ON co.c_idx = cham.c_idx WHERE o.o_icon = '$origin_syn_data[$i]' ORDER BY cham.c_cost;";
                $cham_result = mysqli_query($dbcon, $cham_sql);
                $cham_i = 0;
                ?>
                <div class="syn_cham_list_wrap">
                  <div class="syn_cham_list">
                  <?php while ($cham_array = mysqli_fetch_array($cham_result)) { 
                    $border_color = '';
                    switch($cham_array['c_cost']) {
                      case 1:
                        $border_color = '#ccc';
                        break;
                      case 2:
                        $border_color = '#18b48b';
                        break;
                      case 3:
                        $border_color = '#207ac7';
                        break;
                      case 4:
                        $border_color = '#c440da';
                        break;
                      case 5:
                        $border_color = '#ffb93b';
                        break;
                    };
                    ?>
                    <div class="syn_cham01" style=" border: 3px solid <?php echo $border_color; ?>"><img src="images/champions/<?php echo $cham_array['c_icon'] ?>.jpg" alt="<?php echo $cham_array['c_name'] ?>" class="syn_cham_img"></div>
                    <?php
                      if ($cham_i == 3) {
                          echo '</div>';
                          echo '<div class="syn_cham_list">';
                      };
                      $cham_i++;

                      if ($cham_i > 7) {
                        break;
                      };
                    }; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php
            $i++;
            if (count($origin_syn_data) < $i) {
                break;
            };

            };
            ?>
          </div>
          <div id="syn_slide_arrow" class="slide_arrow">
            <a href="#" id="syn_prev" class="slide_prev"><</a>
            <a href="#" id="syn_next" class="slide_next">></a>
          </div>
        </section>

        <section class="agm_cont">
          <div id="agm_title" class="syn_title_wrap">
            <h2>영웅증강</h2>
            <a href="#" class="all_view">전체보기</a>
          </div>

          <div id="agm_slide" class="agm_slide">
            <div class="agm_wrap">
              <div class="agm_hero_wrap">
                <div class="agm_hero_left">
                  <div class="agm_txt">
                    <h3>갱플랭크</h3>
                    <p>
                      <span>우세</span>
                      <span>결투가</span>
                    </p>
                    <div class="ahl_skill">
                      <p>
                        <span class="skill_title">불타는 도탄</span>
                        갱플랭크를 획득합니다.
                        갱플랭크의 스킬이 다른 대상에게
                        튀며 60%의 피해를 입힙니다.
                      </p>
                      <p>
                        <span class="skill_title">수금</span>
                        갱플랭크를 획득합니다.
                        갱플랭크를 전장에 배치하면, 아군이
                        적을 처치 시 33%의 확률로 1골드를
                        획득합니다.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="agm_hero_right">
                  <div class="agm_txt">
                    <h3>징크스</h3>
                    <p>동물특공대 익살꾼</p>
                    <div class="ahr_skill">
                      <p>
                        <span class="skill_title">신난다!</span>
                        징크스를 획득합니다.
                        징크스가 처치에 관여하면 5초 동안
                        공격 속도와 이동 속도가 110%
                        증가합니다.
                      </p>
                      <p>
                        <span class="skill_title">전부 터져라!</span>
                        징크스를 획득합니다.
                        징크스가 전장을 배치하면 모든
                        아군의 공격 속도가 9% 증가합니다.
                        각 전투에서 적을 처음 처치하면
                        이 효과가 세 배가 됩니다.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="agm_wrap">
              <div class="agm_hero_wrap">
                <div class="agm_hero_left">
                  <div class="agm_txt">
                    <h3>갱플랭크</h3>
                    <p>
                      <span>우세</span>
                      <span>결투가</span>
                    </p>
                    <div class="ahl_skill">
                      <p>
                        <span class="skill_title">불타는 도탄</span>
                        갱플랭크를 획득합니다.
                        갱플랭크의 스킬이 다른 대상에게
                        튀며 60%의 피해를 입힙니다.
                      </p>
                      <p>
                        <span class="skill_title">수금</span>
                        갱플랭크를 획득합니다.
                        갱플랭크를 전장에 배치하면, 아군이
                        적을 처치 시 33%의 확률로 1골드를
                        획득합니다.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="agm_hero_right">
                  <div class="agm_txt">
                    <h3>징크스</h3>
                    <p>동물특공대 익살꾼</p>
                    <div class="ahr_skill">
                      <p>
                        <span class="skill_title">신난다!</span>
                        징크스를 획득합니다.
                        징크스가 처치에 관여하면 5초 동안
                        공격 속도와 이동 속도가 110%
                        증가합니다.
                      </p>
                      <p>
                        <span class="skill_title">전부 터져라!</span>
                        징크스를 획득합니다.
                        징크스가 전장을 배치하면 모든
                        아군의 공격 속도가 9% 증가합니다.
                        각 전투에서 적을 처음 처치하면
                        이 효과가 세 배가 됩니다.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="agm_slide_arrow" class="slide_arrow">
            <a href="#" id="agm_prev" class="slide_prev"><</a>
            <a href="#" id="agm_next" class="slide_next">></a>
          </div>
        </section>
      </div>

      <div class="link_wrap">
        <div class="link_txt">
          <p>지금<br>시작하세요</p>
          <button type="button" class="link_btn">무료로 플레이하기</button>
        </div>
        <div class="bot_bg_wrap">
          <div class="bot_bg">
            <img src="images/mainbg/layer-2.png" alt="전장" class="bot_bg_main">
            <img src="images/mainbg/layer-1.png" alt="왼쪽" class="bot_bg_left">
            <img src="images/mainbg/layer-3.png" alt="오른쪽" class="bot_bg_right">
            <img src="images/mainbg/layer-background.png" alt="뒷배경" class="bot_bg_back">
          </div>
        </div>
      </div>
    </main>

    <!-- footer -->
    <footer>
      <div id="footer-include"></div>
    </footer>
  </div>
  <?php // DB 접속 종료
  mysqli_close($dbcon); ?>
</body>

</html>