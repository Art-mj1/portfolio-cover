<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Font Awesome Link -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
  integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
 <!-- Reset CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/reset.css">
 <!-- Main CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/style.css">
 <!-- Media Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/media.css">
 <!-- Library CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/lib/lightslider.css">
 <link rel="stylesheet" href="/portfolio-cover/lib/animate/animate.css">
 <title>Portfolio cover</title>
</head>

<body>
 <div id="wrap">
  <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/header.php"; ?>
  <!-- Intro Section -->
  <section class="intro">
   <div class="center">

    <div class="min-image">
     <img src="/portfolio-cover/img/min-image.svg" alt="">
    </div>
    <div class="min-intro">
     <p>웹퍼블리셔 전문가를 꿈꾸는</p>
     <h2>신입 웹퍼블리셔 박민지입니다.</h2>
    </div>
   </div>
  </section>
  <!-- End of First Section -->
  <!-- Main Section -->
  <section class="main" id="main1">
   <div class="center">

    <div class="ma-one fadeInRight wow">
     <div class="image">
      <img src="/portfolio-cover/img/happybath.png" alt="">

     </div>
     <div class="show first">
      <div class="text">
       <div class="number">01</div>
       <div class="tit">Renewal Project</div>
       <div class="comment">해피바스 메인페이지의 이미지만 차용하여 구조를 직접 재구성해보았습니다.</div>
       <button type="button" class="one"><a href="/happybath/" target="_blank">자세히
         보기</a></button>
      </div>
     </div>
    </div>
    <div class="ma-one fadeInLeft wow">
     <div class="show second">
      <div class="text">
       <div class="number">02</div>
       <div class="tit">Database Project</div>
       <div class="comment">100% 데이터베이스만을 활용하여 쇼핑몰인 zay를 만들어보았습니다. </div>
       <div class="btns">
        <button type="button" class="one"><a href="/zay/index.php" target="_blank">자세히 보기</a></button>
       </div>
      </div>
     </div>
     <div class="image">
      <img src="/portfolio-cover/img/zay-image.png" alt="">
     </div>
    </div>
   </div>
  </section>
  <!-- End of Main Section -->
  <!--Main-Two section-->
  <section class="main main-two" id="main2">
   <div class="center">
    <div class="ma-one fadeInLeft wow" data-wow-delay="0.4s">

     <div class="image">
      <img src="/portfolio-cover/img/gocamp.png" alt="">
     </div>
     <div class="show">
      <div class="text">
       <div class="number">03</div>
       <div class="tit">API Proiect</div>
       <div class="comment">구글 맵을 활용하여 반경 10km, 20km , 30km 내의 캠핑장을 조회하였습니다.</div>
       <button type="button" class="one"><a href="https://www.dabipyeung.com/APIProject/minji/lbcamp
        " target="_blank">자세히 보기</a></button>
      </div>
     </div>
    </div>
    <div class="ma-one fadeInRight wow" data-wow-delay="0.6s">
     <div class="show">
      <div class="text">
       <div class="number">04</div>
       <div class="tit">React</div>
       <div class="comment">리액트를 이용하여 음식소개 및 관련정보를 담은 상세페이지를 만들었습니다.</div>
       <div class="btns">
        <button type="button" class="one"><a href="https://art-mj1.github.io/react_recipe_apps/" target="_blank">자세히
          보기</a></button>
       </div>
      </div>
     </div>
     <div class="image">
      <img src="/portfolio-cover/img/react.png" alt="">
     </div>
    </div>
   </div>
  </section>
  <!-- End of Main-Two Section -->
  <!--Graphic Section-->
  <section class="graphic" id="personal">
   <div class="center">

    <h2>Personal Work</h2>
    <div class="all" id="lightslider">
     <div class="target">
      <div class="clock pe">
       <div class="imgs"><img src="img/clock.jpg"></div>
       <h2>01</h2>
       <div class="con">
        <h3>일러스트레이터 시계</h3>
        <p> 일러스트레이터만을 사용해서 시계를 제작하였습니다. 롤렉스 시계를 모방하여 만들었습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="map pe">
       <div class="imgs"><img src="img/map.jpg"></div>
       <h2>02</h2>
       <div class="con">
        <h3>일러스트레이터 지도</h3>
        <p>일러스트레이터와 타블렛을 기반으로 서울의 BIG 5 관광명소를 그렸습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="teamwork pe">
       <div class="imgs"><img src="img/x-banner.jpg"></div>
       <h2>03</h2>
       <div class="con">
        <h3>팀워크</h3>
        <p>메가박스라는 주제로 조원끼리 나눠 작업하였고 저는 엑스베너를
         맡았습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="leaflet pe">
       <div class="imgs"><img src="img/lefleat.jpg"></div>
       <h2>04</h2>
       <div class="con">
        <h3>인디자인 3단 리플렛</h3>
        <p>'성동구 적정기술'이라는 원래의 리플렛을 인디자인으로 새롭게
         가공하였습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="cd pe">
       <div class="imgs"><img src="img/cd-cover-front.jpg"></div>
       <h2>05</h2>
       <div class="con">
        <h3>CD 자켓</h3>
        <p>포토샵을 이용하여 우주의 신비로운 느낌을 이용한 CD 및 CD자켓을 제작하였습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="event-poster pe">
       <div class="imgs"><img src="img/event-poster.jpg"></div>
       <h2>06</h2>
       <div class="con">
        <h3>행사 포스터 제작</h3>
        <p>포토샵을 이용하여 증정행사를 위한 이벤트 포스터를 제작하였습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="banner pe">
       <div class="imgs"><img src="img/timesale.jpg"></div>
       <h2>07</h2>
       <div class="con">
        <h3>타임세일배너</h3>
        <p> 일러스트를 이용하여 날짜와 시간을 모두 강조하는 타임세일 배너를 제작했습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="detail page pe">
       <div class="imgs"><img src="img/detail.jpg"></div>
       <h2>08</h2>
       <div class="con">
        <h3>상세페이지</h3>
        <p> 옷의 대표이미지만 있던 상태였기 때문에 상세페이지를 직접 제작하였습니다.</p>
       </div>
       <button type="button" class="details">더보기</button>
      </div>
      <div class="detail page pe">
       <div class="imgs homepi"><img src="img/yummyveget.jpg"></div>
       <h2>09</h2>
       <div class="con">
        <h3>UI/UX 제작 중</h3>
        <p> 옷의 대표이미지만 있던 상태였기 때문에 상세페이지를 직접 제작하였습니다.</p>
       </div>
       <div class="buttons">
        <button type="button" class="details veg"> <a href="/portfolio-cover/yummy-rest.pdf"
          target="_blank">PDF</a></button>
        <button type="button" class="details veg">WEB</button>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- End of Graphic Section -->
  <!--Profile Section-->
  <section id="profile">
   <div class="center">

    <h2>Profile</h2>
    <div class="feel">
     <div class="pic">
      <img src="img/min-background.jpg">
     </div>
     <div class="year">
      <h3>Simple Info</h3>
      <div class="ye-text">
       <p><span class="un">Univ.</span>고려대학교 고고미술사학과/한국사학과 전공</p>
       <p><span class="un">Design.</span>전)그린컴퓨터아카데미 편집디자인 교육 수료</p>
       <p><span class="un">Coding.</span>현)더조은컴퓨터아카데미 스마트웹퍼블리싱 교육 수료</p>
      </div>
      <div class="tag">
       <h3>핵심 성격 키워드</h3>
       <div class="tag-wrap">
        <div class="tag-de">
         <p>#열정신입</p>
        </div>
        <div class="tag-de">
         <p>#웹퍼블리셔</p>
        </div>
        <div class="tag-de">
         <p>#웹디자인</p>
        </div>
        <div class="tag-de">
         <p>#책임감 있는</p>
        </div>
        <div class="tag-de">
         <p>#꼼꼼한</p>
        </div>
       </div>
      </div>
     </div>
     <div class="skills">
      <h3>보유 기술들</h3>
      <div class="skill">
       <div class="skil-1">
        <img src="img/illur.png" alt="">
        <img src="img/photoshop.png" alt="">
        <img src="img/indesign.png" alt="">
        <img src="img/html.png" alt="">
        <img src="img/css.png" alt="">
       </div>
       <div class="skil-2">
        <img src="img/js.png" alt="">
        <img src="img/database.png" alt="">
        <img src="img/php.png" alt="">
        <img src="img/react-i.png" alt="">
        <img src="img/illur.png" alt="">
       </div>
      </div>
     </div>

    </div>
    <div class="mo-skills">
     <h3>보유 기술들</h3>
     <div class="mo-skill">
      <div class="mo-skil-1">
       <img src="img/illur.png" alt="">
       <img src="img/photoshop.png" alt="">
       <img src="img/indesign.png" alt="">
       <img src="img/html.png" alt="">
       <img src="img/css.png" alt="">
      </div>
      <div class="mo-skil-2">
       <img src="img/js.png" alt="">
       <img src="img/database.png" alt="">
       <img src="img/php.png" alt="">
       <img src="img/react-i.png" alt="">
       <img src="img/jquery.png" alt="">
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- End of Profile Section -->
  <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/pages/write_form.php"; ?>
  <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/footer.php"; ?>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/portfolio-cover/lib/lightslider.js"></script>
 <script src="/portfolio-cover/js/jq.lightslider.js"></script>
 <script src="/portfolio-cover/js/jq.main.js"></script>
 <script src="/portfolio-cover/js/jq.mobile.js"></script>
 <script src="/portfolio-cover/lib/wow/wow.js"></script>
 <script>
 new WOW().init();
 </script>
</body>

</html>