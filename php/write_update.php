<?php


$detail_idx = $_GET['detail_idx'];
$detail_writer = $_GET['detail_writer'];
$detail_input = $_POST['write_input'];
$detail_con = addslashes($_POST['write_con']);


 include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
 $sql= "UPDATE portfolio_write SET Portfolio_tit='{$detail_input}', Portfolio_con='{$detail_con}' WHERE Portfolio_idx=$detail_idx";

 mysqli_query($dbConn,$sql);

//  echo "
//  <script>
//  alert('수정이 완료되었습니다.');
//  history.go(-1)
//  </script>
//  ";


?>