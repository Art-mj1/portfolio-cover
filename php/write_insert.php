<?php

 $write_input = $_POST['write_input'];
 $write_con = addslashes($_POST['write_con']);
 $write_reg = date("Y-m-d");

 //echo $write_input, $write_con, $write_reg;

 include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
 
 $sql= "INSERT INTO portfolio_write(
   Portfolio_tit,
   Portfolio_con,
   Portfoilo_reg
 ) VALUES(
  '{$write_input}',
  '{$write_con}',
  '{$write_reg}'
 )";

 mysqli_query($dbConn, $sql);
 echo "
 <script>
  alert('게시글 입력이 완료되었습니다.');
  location.href='/portfolio-cover/index.php';
 </script>
 ";
?>