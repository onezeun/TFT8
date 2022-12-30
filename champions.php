<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>챔피언 TFT8.0</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/champions.css">

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/includ.js"></script>
  <script type="text/javascript" src="js/champions.js"></script>
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
            <input type="checkbox" id="cost1" name="cost"><label for="cost1">1골드</label>
            <input type="checkbox" id="cost2" name="cost"><label for="cost2">2골드</label>
            <input type="checkbox" id="cost3" name="cost"><label for="cost3">3골드</label>
            <input type="checkbox" id="cost4" name="cost"><label for="cost4">4골드</label>
            <input type="checkbox" id="cost5" name="cost"><label for="cost5">5골드</label>
          </div>
          <div class="filter_origin">
            <h4>계열 시너지</h4>
            <input type="checkbox" id="Gadgeteen" name="origin"><label for="Gadgeteen"><img src="./images/synergies/Gadgeteen.svg" alt="기계유망주">기계유망주</label>
            <input type="checkbox" id="AnimaSquad" name="origin"><label for="AnimaSquad"><img src="./images/synergies/AnimaSquad.svg" alt="동물특공대">동물특공대</label>
            <input type="checkbox" id="LaserCorps" name="origin"><label for="LaserCorps"><img src="./images/synergies/LaserCorps.svg" alt="레이저단">레이저단</label>
            <input type="checkbox" id="MechaPRIME" name="origin"><label for="MechaPRIME"><img src="./images/synergies/MechaPRIME.svg" alt="메카: 프라임">메카: 프라임</label>
            <input type="checkbox" id="Civilian" name="origin"><label for="Civilian"><img src="./images/synergies/Civilian.svg" alt="민간인">민간인</label>
            <input type="checkbox" id="StarGuardian" name="origin"><label for="StarGuardian"><img src="./images/synergies/StarGuardian.svg" alt="별 수호자">별 수호자</label>
            <input type="checkbox" id="Arsenal" name="origin"><label for="Arsenal"><img src="./images/synergies/Arsenal.svg" alt="병기고">병기고</label>
            <input type="checkbox" id="Supers" name="origin"><label for="Supers"><img src="./images/synergies/Supers.svg" alt="우세">우세</label>
            <input type="checkbox" id="Threat" name="origin"><label for="Threat"><img src="./images/synergies/Threat.svg" alt="위협">위협</label>
            <input type="checkbox" id="ADMIN" name="origin"><label for="ADMIN"><img src="./images/synergies/ADMIN.svg" alt="자동방어체계">자동방어체계</label>
            <input type="checkbox" id="UndergroundThe" name="origin"><label for="UndergroundThe"><img src="./images/synergies/UndergroundThe.svg" alt="지하세계">지하세계</label>
            <input type="checkbox" id="OxForce" name="origin"><label for="OxForce"><img src="./images/synergies/OxForce.svg" alt="황소부대">황소부대</label>
          </div>
          <div class="filter_class">
            <h4>직업 시너지</h4>
            <input type="checkbox" id="Duelist" name="class"><label for="Duelist"><img src="./images/synergies/Duelist.svg" alt="결투가">결투가</label>
            <input type="checkbox" id="Forecaster" name="class"><label for="Forecaster"><img src="./images/synergies/Forecaster.svg" alt="기상캐스터">기상캐스터</label>
            <input type="checkbox" id="Mascot" name="class"><label for="Mascot"><img src="./images/synergies/Mascot.svg" alt="마스코트">마스코트</label>
            <input type="checkbox" id="Renegade" name="class"><label for="Renegade"><img src="./images/synergies/Renegade.svg" alt="무법자">무법자</label>
            <input type="checkbox" id="Aegis" name="class"><label for="Aegis"><img src="./images/synergies/Aegis.svg" alt="방패대">방패대</label>
            <input type="checkbox" id="Heart" name="class"><label for="Heart"><img src="./images/synergies/Heart.svg" alt="선의">선의</label>
            <input type="checkbox" id="Brawler" name="class"><label for="Brawler"><img src="./images/synergies/Brawler.svg" alt="싸움꾼">싸움꾼</label>
            <input type="checkbox" id="Defender" name="class"><label for="Defender"><img src="./images/synergies/Defender.svg" alt="엄호대">엄호대</label>
            <input type="checkbox" id="Ace" name="class"><label for="Ace"><img src="./images/synergies/Ace.svg" alt="에이스">에이스</label>
            <input type="checkbox" id="Prankster" name="class"><label for="Prankster"><img src="./images/synergies/Prankster.svg" alt="익살꾼">익살꾼</label>
            <input type="checkbox" id="Recon" name="class"><label for="Recon"><img src="./images/synergies/Recon.svg" alt="정찰단">정찰단</label>
            <input type="checkbox" id="Spellslinger" name="class"><label for="Spellslinger"><img src="./images/synergies/Spellslinger.svg" alt="주문투척자">주문투척자</label>
            <input type="checkbox" id="Corrupted" name="class"><label for="Corrupted"><img src="./images/synergies/Corrupted.svg" alt="타락">타락</label>
            <input type="checkbox" id="Sureshot" name="class"><label for="Sureshot"><img src="./images/synergies/Sureshot.svg" alt="특등사수">특등사수</label>
            <input type="checkbox" id="Hacker" name="class"><label for="Hacker"><img src="./images/synergies/Hacker.svg" alt="해커">해커</label>
          </div>
        </div>
      </form>
    </div>

    <div class="champions_list">
      <div class="cham_card">
        <div class="card_img_wrap">
          <img src="./images/champions/Syndra.jpg" alt="챔피언사진" class="card_img">
        </div>
        <div class="card_content">
          <h3>신드라</h3>
          <div class="cham_info">
            <p><img src="./images/synergies/StarGuardian.svg" alt="계열시너지아이콘" class="origin_ico">별 수호자</p>
            <p><img src="./images/synergies/Heart.svg" alt="직업시너지아이콘">선의</p>
            <p><img src="./images/ico_cost.png" alt="코스트아이콘" class="cost_ico">5</p>
          </div>
          <div class="cham_skill_top">
            <img src="./images/champions/s_Syndra.png" alt="스킬이미지">
            <div class="cham_skill_info">
              <p class="cham_skill_title">의지의 힘</p>
            </div>
          </div>
          <div class="cham_skill_bot">
            신드라가 대기석에 있는 무작위
            챔피언에게 피해를 흡수하는 보호막을
            부여한 뒤 가장 가까운 적의 구체 안에
            있는 결투장으로 던져넘깁니다. 구체는
            적중한 적들에게 마법 피해를 입힙니다.

            전장에 던져넘겨진 챔피언의 특성은
            타락을 제외하고는 활성화되지 않습니다.
          </div>
        </div>
      </div>

      <div class="cham_card">
        <div class="card_img_wrap">
          <img src="./images/champions/Syndra.jpg" alt="챔피언사진" class="card_img">
        </div>
        <div class="card_content">
          <h3>신드라</h3>
          <div class="cham_info">
            <p><img src="./images/synergies/StarGuardian.svg" alt="계열시너지아이콘" class="origin_ico">별 수호자</p>
            <p><img src="./images/synergies/Heart.svg" alt="직업시너지아이콘">선의</p>
            <p><img src="./images/ico_cost.png" alt="코스트아이콘" class="cost_ico">5</p>
          </div>
          <div class="cham_skill_top">
            <img src="./images/champions/s_Syndra.png" alt="스킬이미지">
            <div class="cham_skill_info">
              <p class="cham_skill_title">의지의 힘</p>
            </div>
          </div>
          <div class="cham_skill_bot">
            신드라가 대기석에 있는 무작위
            챔피언에게 피해를 흡수하는 보호막을
            부여한 뒤 가장 가까운 적의 구체 안에
            있는 결투장으로 던져넘깁니다. 구체는
            적중한 적들에게 마법 피해를 입힙니다.

            전장에 던져넘겨진 챔피언의 특성은
            타락을 제외하고는 활성화되지 않습니다.
          </div>
        </div>
      </div>

      <div class="cham_card">
        <div class="card_img_wrap">
          <img src="./images/champions/Syndra.jpg" alt="챔피언사진" class="card_img">
        </div>
        <div class="card_content">
          <h3>신드라</h3>
          <div class="cham_info">
            <p><img src="./images/synergies/StarGuardian.svg" alt="계열시너지아이콘" class="origin_ico">별 수호자</p>
            <p><img src="./images/synergies/Heart.svg" alt="직업시너지아이콘">선의</p>
            <p><img src="./images/ico_cost.png" alt="코스트아이콘" class="cost_ico">5</p>
          </div>
          <div class="cham_skill_top">
            <img src="./images/champions/s_Syndra.png" alt="스킬이미지">
            <div class="cham_skill_info">
              <p class="cham_skill_title">의지의 힘</p>
            </div>
          </div>
          <div class="cham_skill_bot">
            신드라가 대기석에 있는 무작위
            챔피언에게 피해를 흡수하는 보호막을
            부여한 뒤 가장 가까운 적의 구체 안에
            있는 결투장으로 던져넘깁니다. 구체는
            적중한 적들에게 마법 피해를 입힙니다.

            전장에 던져넘겨진 챔피언의 특성은
            타락을 제외하고는 활성화되지 않습니다.
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- footer -->
  <footer>
    <div id="footer-include"></div>
  </footer>
</body>

</html>