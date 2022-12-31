<?php
  // DB 연결
  include '../inc/dbcon.php'; 
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>챔피언 TFT8.0</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">
  <link rel="stylesheet" type="text/css" href="../css/champions.css">

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/includ.js"></script>
  <script type="text/javascript" src="../js/champions.js"></script>
</head>

<body>
  <!-- header -->
  <header>
    <div id="header-include"></div>
  </header>

  <!-- content -->
  <main id="content" class="content">
    <div class="title_wrap">
      <div class="title_line"></div>
      <h2>신규시즌정보</h2>
      <div class="title_line"></div>
    </div>

    <div class="menu">
      <ul class="menu_list">
        <li class="menu1"><a href="#">챔피언</a></li>
        <li class="menu2"><a href="#">시너지</a></li>
        <li class="menu3"><a href="#">아이템</a></li>
        <li class="menu4"><a href="#">증강</a></li>
      </ul>
    </div>

    <div class="filter">
      <div class="filter_title">
        <h3>필터</h3>
        <a href="#" class="filter_toggle"></a>
      </div>
      <form>
        <div class="filter_list">
          <div class="filter_cost">
            <h4>비용</h4>
            <input type="checkbox" id="cost1" name="cost" value="1"><label for="cost1">1골드</label>
            <input type="checkbox" id="cost2" name="cost" value="2"><label for="cost2">2골드</label>
            <input type="checkbox" id="cost3" name="cost" value="3"><label for="cost3">3골드</label>
            <input type="checkbox" id="cost4" name="cost" value="4"><label for="cost4">4골드</label>
            <input type="checkbox" id="cost5" name="cost" value="5"><label for="cost5">5골드</label>
          </div>
          <div class="filter_origin">
            <h4>계열 시너지</h4>
            <input type="checkbox" id="Gadgeteen" name="origin" value="Gadgeteen"><label for="Gadgeteen"><img src="../images/synergies/Gadgeteen.svg" alt="기계유망주">기계유망주</label>
            <input type="checkbox" id="AnimaSquad" name="origin" value="AnimaSquad"><label for="AnimaSquad"><img src="../images/synergies/AnimaSquad.svg" alt="동물특공대">동물특공대</label>
            <input type="checkbox" id="LaserCorps" name="origin" value="LaserCorps"><label for="LaserCorps"><img src="../images/synergies/LaserCorps.svg" alt="레이저단">레이저단</label>
            <input type="checkbox" id="MechaPRIME" name="origin" value="MechaPRIME"><label for="MechaPRIME"><img src="../images/synergies/MechaPRIME.svg" alt="메카: 프라임">메카: 프라임</label>
            <input type="checkbox" id="Civilian" name="origin" value="Civilian"><label for="Civilian"><img src="../images/synergies/Civilian.svg" alt="민간인">민간인</label>
            <input type="checkbox" id="StarGuardian" name="origin" value="StarGuardian"><label for="StarGuardian"><img src="../images/synergies/StarGuardian.svg" alt="별 수호자">별 수호자</label>
            <input type="checkbox" id="Arsenal" name="origin" value="Arsenal"><label for="Arsenal"><img src="../images/synergies/Arsenal.svg" alt="병기고">병기고</label>
            <input type="checkbox" id="Supers" name="origin" value="Supers"><label for="Supers"><img src="../images/synergies/Supers.svg" alt="우세">우세</label>
            <input type="checkbox" id="Threat" name="origin" value="Threat"><label for="Threat"><img src="../images/synergies/Threat.svg" alt="위협">위협</label>
            <input type="checkbox" id="ADMIN" name="origin" value="ADMIN"><label for="ADMIN"><img src="../images/synergies/ADMIN.svg" alt="자동방어체계">자동방어체계</label>
            <input type="checkbox" id="UndergroundThe" name="origin" value="UndergroundThe"><label for="UndergroundThe"><img src="../images/synergies/UndergroundThe.svg" alt="지하세계">지하세계</label>
            <input type="checkbox" id="OxForce" name="origin" value="OxForce"><label for="OxForce"><img src="../images/synergies/OxForce.svg" alt="황소부대">황소부대</label>
          </div>
          <div class="filter_class">
            <h4>직업 시너지</h4>
            <input type="checkbox" id="Duelist" name="class" value="Duelist"><label for="Duelist"><img src="../images/synergies/Duelist.svg" alt="결투가">결투가</label>
            <input type="checkbox" id="Forecaster" name="class" value="Forecaster"><label for="Forecaster"><img src="../images/synergies/Forecaster.svg" alt="기상캐스터">기상캐스터</label>
            <input type="checkbox" id="Mascot" name="class" value="Mascot"><label for="Mascot"><img src="../images/synergies/Mascot.svg" alt="마스코트">마스코트</label>
            <input type="checkbox" id="Renegade" name="class" value="Renegade"><label for="Renegade"><img src="../images/synergies/Renegade.svg" alt="무법자">무법자</label>
            <input type="checkbox" id="Aegis" name="class" value="Aegis"><label for="Aegis"><img src="../images/synergies/Aegis.svg" alt="방패대">방패대</label>
            <input type="checkbox" id="Heart" name="class" value="Heart"><label for="Heart"><img src="../images/synergies/Heart.svg" alt="선의">선의</label>
            <input type="checkbox" id="Brawler" name="class" value="Brawler"><label for="Brawler"><img src="../images/synergies/Brawler.svg" alt="싸움꾼">싸움꾼</label>
            <input type="checkbox" id="Defender" name="class" value="Defender"><label for="Defender"><img src="../images/synergies/Defender.svg" alt="엄호대">엄호대</label>
            <input type="checkbox" id="Ace" name="class" value="Ace"><label for="Ace"><img src="../images/synergies/Ace.svg" alt="에이스">에이스</label>
            <input type="checkbox" id="Prankster" name="class" value="Prankster"><label for="Prankster"><img src="../images/synergies/Prankster.svg" alt="익살꾼">익살꾼</label>
            <input type="checkbox" id="Recon" name="class" value="Recon"><label for="Recon"><img src="../images/synergies/Recon.svg" alt="정찰단">정찰단</label>
            <input type="checkbox" id="Spellslinger" name="class" value="Spellslinger"><label for="Spellslinger"><img src="../images/synergies/Spellslinger.svg" alt="주문투척자">주문투척자</label>
            <input type="checkbox" id="Corrupted" name="class" value="Corrupted"><label for="Corrupted"><img src="../images/synergies/Corrupted.svg" alt="타락">타락</label>
            <input type="checkbox" id="Sureshot" name="class" value="Sureshot"><label for="Sureshot"><img src="../images/synergies/Sureshot.svg" alt="특등사수">특등사수</label>
            <input type="checkbox" id="Hacker" name="class" value="Hacker"><label for="Hacker"><img src="../images/synergies/Hacker.svg" alt="해커">해커</label>
          </div>
        </div>
      </form>
    </div>

    <div class="champions_list">
      <?php 
        $sql = "SELECT * FROM champions ORDER BY c_cost;";
        $result = mysqli_query($dbcon, $sql);

        while($array = mysqli_fetch_array($result)) {
      ?>
      <div class="cham_card">
        <div class="card_img_wrap">
          <img src="../images/champions/<?php echo $array['c_img'];?>.jpg" alt="<?php echo $array['c_name'];?>" class="card_img">
        </div>
        <div class="card_content">
          <h3><?php echo $array['c_name'];?></h3>
          <div class="cham_info">
            <?php 
              $c_idx = $array['c_idx'];

              $o_sql = "SELECT o.o_title, o.o_icon FROM champions cham JOIN champion_origin co ON cham.c_idx = co.c_idx JOIN origin_synergies o ON o.o_idx = co.o_idx WHERE cham.c_idx = $c_idx;";
              $o_result = mysqli_query($dbcon, $o_sql);
              $o_num = mysqli_num_rows($o_result);

              $c_sql = "SELECT cl.class_title, cl.class_icon FROM champions cham JOIN champion_class ccn ON cham.c_idx = ccn.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = $c_idx;";
              $c_result = mysqli_query($dbcon, $c_sql);
              $c_num = mysqli_num_rows($c_result);

              if($o_num > 1) {
                while($o_array = mysqli_fetch_array($o_result)) {
              ?>
              <p><img src="../images/synergies/<?php echo $o_array['o_icon']?>.svg" alt="<?php echo $o_array['o_title']?>" class="origin_ico"><span class="origin hide"><?php echo $o_array['o_icon']?></span><span><?php echo $o_array['o_title']?></span></p>
            <?php
                };
              } else {
                $o_array = mysqli_fetch_array($o_result);
            ?>
              <p><img src="../images/synergies/<?php echo $o_array['o_icon']?>.svg" alt="<?php echo $o_array['o_title']?>" class="origin_ico"><span class="origin hide"><?php echo $o_array['o_icon']?></span><span><?php echo $o_array['o_title']?></span></p>
            <?php
              };
              if($c_num == 0) {
                echo '';
              } else if($c_num > 1) {
                while($c_array = mysqli_fetch_array($c_result)) {
            ?>
              <p><img src="../images/synergies/<?php echo $c_array['class_icon']?>.svg" alt="<?php echo $c_array['class_title']?>"><span class="class hide"><?php echo $c_array['class_icon']?></span><span><?php echo $c_array['class_title']?></span></p>
            <?php
                };
              } else {
                $c_array = mysqli_fetch_array($c_result);
            ?>
              <p><img src="../images/synergies/<?php echo $c_array['class_icon']?>.svg" alt="<?php echo $c_array['class_title']?>"><span class="class hide"><?php echo $c_array['class_icon']?></span><span><?php echo $c_array['class_title']?></span></p>
            <?php
              };
            ?>

            <p><img src="../images/ico_cost.png" alt="코스트아이콘" class="cost_ico"><span class="cost"><?php echo $array['c_cost'];?></span></p>
          </div>
          <div class="cham_skill_top">
            <img src="../images/champions/s_<?php echo $array['c_img'];?>.png" alt="스킬이미지">
            <div class="cham_skill_info">
              <p class="cham_skill_title"><?php echo $array['c_skill_title'];?></p>
            </div>
          </div>
          <div class="cham_skill_bot">
            <?php echo $array['c_skill_content'];?>
          </div>
        </div>
      </div>
      <?php 
          };
      ?>
    </div>

  </main>

  <!-- footer -->
  <footer>
    <div id="footer-include"></div>
  </footer>
</body>

</html>