<?php
  // DB 연결
  include 'inc/dbcon.php'; 
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TFT8.0 : 괴물습격</title>

  <link rel="shortcut icon" href="images/favicon.ico">
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
          <video class="video-container" autoplay muted loop playsinline>
            <source src="images/tft8.0.mp4" type="video/mp4">
          </video>
          <img src="images/m_bg01.png" alt="모바일배경" class="m_sub_bg">
          <div class="m_chr_wrap">
            <img src="images/pc_main_chr.png" alt="펭구" class="m_main_chr">
          </div>
          <a class="cta" href="https://apps.apple.com/kr/app/%EC%A0%84%EB%9E%B5%EC%A0%81-%ED%8C%80-%EC%A0%84%ED%88%AC-%EB%A6%AC%EA%B7%B8-%EC%98%A4%EB%B8%8C-%EB%A0%88%EC%A0%84%EB%93%9C-%EC%A0%84%EB%9E%B5-%EA%B2%8C%EC%9E%84/id1480616748">
            <span>무료로 플레이하기</span>
            <span>
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                </g>
              </svg>
            </span> 
          </a>
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
          <a href="https://www.youtube.com/channel/UCOaUTqrtz1yBBiwziVJEAmQ" class="y_link">전략적 팀 전투 유튜브 바로가기</a>
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
                    <object type="image/svg+xml" data="images/animationsvg/<?php echo $origin_syn_data[
                        $i
                    ]; ?>.svg" class="syn_icon_img"></object>
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
                      switch ($cham_array['c_cost']) {
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
                      }
                      ?>
                    <div class="syn_cham01" style=" border: 3px solid <?php echo $border_color; ?>"><img src="images/champions/<?php echo $cham_array['c_icon']; ?>.jpg" alt="<?php echo $cham_array['c_name']; ?>" class="syn_cham_img"></div>
                    <?php
                    if ($cham_i == 3) {
                        echo '</div>';
                        echo '<div class="syn_cham_list">';
                    }
                    $cham_i++;

                    if ($cham_i > 7) {
                        break;
                    }

                  } ?>
                  </div>
                </div>
              </div>
            </div>
            <?php
            $i++;
            if (count($origin_syn_data) < $i) {
                break;
            }

            }
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
            <?php
            $left_cham_sql =
                'SELECT c_idx FROM champions ORDER BY rand() LIMIT 5;';
            $left_cham_result = mysqli_query($dbcon, $left_cham_sql);

            while ($left_cham_array = mysqli_fetch_array($left_cham_result)) {

                $lc_idx = $left_cham_array['c_idx'];
                $rc_idx = $lc_idx == 59 ? $lc_idx - 1 : $lc_idx + 1;

                $lo_sql = "SELECT cham.c_name, cham.c_img, o.o_title FROM champions cham JOIN champion_origin con ON con.c_idx = cham.c_idx JOIN origin_synergies o ON con.o_idx = o.o_idx WHERE cham.c_idx = $lc_idx;";
                $lo_result = mysqli_query($dbcon, $lo_sql);
                $lo_array = mysqli_fetch_array($lo_result);

                $lcl_sql = "SELECT  cl.class_title FROM champions cham JOIN champion_class ccn ON ccn.c_idx = cham.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = $lc_idx;";
                $lcl_result = mysqli_query($dbcon, $lcl_sql);
                $lcl_array = mysqli_fetch_array($lcl_result);

                $lagm_sql = "SELECT agm.a_title, agm.a_content, agm.a_icon FROM augments agm JOIN champions cham ON agm.c_idx = cham.c_idx WHERE cham.c_idx = $lc_idx;";
                $lagm_result = mysqli_query($dbcon, $lagm_sql);

                // 오른쪽
                $ro_sql = "SELECT cham.c_name, cham.c_img, o.o_title FROM champions cham JOIN champion_origin con ON con.c_idx = cham.c_idx JOIN origin_synergies o ON con.o_idx = o.o_idx WHERE cham.c_idx = $rc_idx;";
                $ro_result = mysqli_query($dbcon, $ro_sql);
                $ro_array = mysqli_fetch_array($ro_result);

                $rcl_sql = "SELECT  cl.class_title FROM champions cham JOIN champion_class ccn ON ccn.c_idx = cham.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = $rc_idx;";
                $rcl_result = mysqli_query($dbcon, $rcl_sql);
                $rcl_array = mysqli_fetch_array($rcl_result);

                $ragm_sql = "SELECT agm.a_title, agm.a_content, agm.a_icon FROM augments agm JOIN champions cham ON agm.c_idx = cham.c_idx WHERE cham.c_idx = $rc_idx;";
                $ragm_result = mysqli_query($dbcon, $ragm_sql);

                ?>
            <div class="agm_wrap">
              <div class="agm_hero_wrap">
                <div class="agm_hero_left">
                  <div class="agm_txt">
                    <h3><?php echo $lo_array['c_name']; ?></h3>
                    <p>
                      <span><?php echo $lo_array['o_title']; ?></span>
                      <span><?php 
                      $lclass_title = $lcl_array == null ? '' : $lcl_array['class_title'];
                      echo $lclass_title;
                      ?></span>
                    </p>
                    <div class="ahl_skill">
                    <?php while (
                        $lagm_array = mysqli_fetch_array($lagm_result)
                    ) { ?>
                      <p>
                        <span class="skill_title"><?php echo $lagm_array[
                            'a_title'
                        ]; ?></span>
                        <?php echo $lagm_array['a_content']; ?>
                      </p>
                    <?php } ?>
                    </div>
                  </div>
                  <img src="./images/champions/<?php echo $lo_array['c_img']; ?>.jpg" class="agm_left_img">
                  <div class="agm_left_bg"></div>
                </div>

                <div class="agm_hero_right">
                  <div class="agm_txt">
                    <h3><?php echo $ro_array['c_name']; ?></h3>
                    <p>
                      <span><?php echo $ro_array['o_title']; ?></span>
                      <span><?php 
                      $rclass_title = $rcl_array == null ? '' : $rcl_array['class_title'];
                      echo $rclass_title;
                      ?></span>
                    </p>
                    <div class="ahl_skill">
                    <?php while (
                        $ragm_array = mysqli_fetch_array($ragm_result)
                    ) { ?>
                      <p>
                        <span class="skill_title"><?php echo $ragm_array[
                            'a_title'
                        ]; ?></span>
                        <?php echo $ragm_array['a_content']; ?>
                      </p>
                    <?php } ?>
                    </div>
                  </div>
                  <img src="./images/champions/<?php echo $ro_array['c_img']; ?>.jpg" class="agm_right_img">
                  <div class="agm_left_bg"></div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
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
          <a class="link_btn" href="#">
            <span>무료로 플레이하기</span>
            <span>
              <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                </g>
              </svg>
            </span> 
          </a>
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
    mysqli_close($dbcon); 
  ?>

  <div class="go_top">
    <img src="images/go_top.png" alt="맨위로가기버튼">
  </div>
</body>

</html>