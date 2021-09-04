<?php
  session_start();
  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    $userid = "";
  }
?>

<header>
 <div class="menu_ico">
  <span></span>
  <span></span>
  <span></span>
 </div>
 <!-- Mobile Navigation -->
 <nav class="mobile_nav">
  <ul class="mobile_inner">
   <li class="mobile_li">
    <div class="close_btn">
     <span></span>
     <span></span>
    </div>
   </li>
   <li class="mobile_li">
    <a href="/portfolio-cover/index.php" class="mobile_tit">HOME</a>
   </li>
   <li class="mobile_li">
    <a href="#main1" class="mobile_tit">WORK</a>
    <ul class="mobile_sub_nav">
     <li class="mobile_sub_li"><a href="#main1">Renewal&Database</a></li>
     <li class="mobile_sub_li"><a href="#main2">API&React</a></li>
    </ul>
   </li>
   <li class="mobile_li">
    <a href="#profile" class="mobile_tit">PROFILE</a>
   </li>
   <li class="mobile_li">
    <a href="#contact" class="mobile_tit">CONTACT</a>
   </li>
  </ul>
 </nav>




 <div class="menu">
  <ul class="nav">
   <li><a href="/portfolio-cover/index.php">Home</a></li>
   <li><a href="#main1">WORK</a></li>
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

 <!-- Hidden Mega Box Menu -->
 <div class="hidden_sub">
  <div class="line"></div>
  <div class="sub_nav">
   <div class="subnav_box box_1">
   </div>
   <div class="subnav_box box_2">
    <ul>
     <li><a href="#main1">Renwal&Database</a></li>
     <li><a href="#main2">API&REACT</a></li>
    </ul>
    <ul>
   </div>
   <div class="subnav_box box_3">

   </div>
   <div class="subnav_box box_4">

   </div>
  </div>
 </div>
</header>