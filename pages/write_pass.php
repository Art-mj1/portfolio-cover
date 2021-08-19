<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Font Awesome Link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Reset CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/reset.css">
 <!-- Main CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/style.css">
 <body>
 <div id="wrap">
 <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/header.php"; ?>
 <section id="contact">
 <?php
   $pass_idx = $_GET['Portfolio_idx'];
   include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
   $sql = "SELECT * FROM portfolio_write WHERE Portfolio_idx='{$pass_idx}'";

   $pass_result = mysqli_query($dbConn, $sql);
   $pass_row = mysqli_fetch_array($pass_result);

   $pass_tit = $pass_row['Portfolio_tit'];
   $pass_pass = $pass_row['Portfolio_pass'];
   $pass_con = $pass_row['Portfolio_con'];
   $pass_reg = $pass_row['Portfoilo_reg'];

   ?>
  <div class="center">
    <div class="tit_box">
     <h2>비밀번호 입력페이지입니다.</h2>
     <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
   </div>   
 <form class="write_pass" action="/portfolio-cover/php/pass_check.php?check_idx=<?=$pass_idx?>" name="write_pass" method="post">
 <div class="write_pass">
   <label for="write_pass">비밀번호</label>
   <input type="text" name="pass_input" id="write_pass" placeholder="비밀번호를 입력해주세요">
 </div>
 <div class="pass_check">
  <button type="submit">확인</button>
 </div>
</form>
</div>
</section>
</div>
</body>

</html>