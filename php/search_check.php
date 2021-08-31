<?php

 $search_val = $_GET['check_idx'];
 $search_input = $_POST['search_input'];
//  echo $search_val;
//  echo $search_input;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//디비 접속
  $sql = "SELECT * FROM portfolio_write WHERE Portfolio_idx=$search_val";

  $result = mysqli_query($dbConn,$sql);
  $search_record = mysqli_fetch_array($result);
  $search_pass = $search_record['Portfolio_pass'];

  //echo $port_pass;

 
  if($search_input != $search_pass){
   echo "
   <script>
   alert('비밀번호가 틀립니다.');
   history.go(-1);
   </script>
   ";
  } else {
   echo "
  <script>
   location.href='/portfolio-cover/pages/write_detail.php?detail_idx=$search_val';
  </script>
  ";
  }
  

?>