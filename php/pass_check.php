<?php

 $pass_val = $_GET['check_idx'];
 $pass_input = $_POST['pass_input'];
 // echo $pass_val;
 // echo $pass_input;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//디비 접속
  $sql = "SELECT * FROM portfolio_write WHERE Portfolio_idx=$pass_val";

  $result = mysqli_query($dbConn,$sql);
  $pass_record = mysqli_fetch_array($result);
  $port_pass = $pass_record['Portfolio_pass'];

  //echo $port_pass;

 
  if($pass_input != $port_pass){
   echo "
   <script>
   alert('비밀번호가 틀립니다.');
   history.go(-1);
   </script>
   ";
  } else {
   echo "
  <script>
   location.href='/portfolio-cover/pages/write_detail.php?detail_idx=<?=$pass_val?>';
  </script>
  ";
  }
  

?>