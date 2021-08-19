<?php
  session_start();
  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    $userid = "";
  }
?>

<header>
  <div class="menu">
    <ul class="nav">
      <li><a href="/portfolio-cover/index.php">Home</a></li>
      <li><a href="#">WORK</a></li>
      <li><a href="#profile">PROFILE</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
    <div class="login_info">
    <?php if(!$userid){ ?>
    <!-- 로그아웃 시 보여질 UI -->
    <a href="/portfolio-cover/pages/login_form.php">로그인</a>
    <a href="/portfolio-cover/pages/join_form.php">회원가입</a>
    <?php } else{ ?>
    <!-- 로그인 시 보여질 UI -->
     <a href="/portfolio-cover/php/logout.php">로그아웃</a>
     <a href="#"><?=$userid?></a>
    <?php } ?>
    </div>
  </div>
  </header>