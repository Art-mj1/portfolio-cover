<meta charset="UTF-8">
<?php


$update_idx = $_GET['detail_idx'];
$update_writer = $_GET['detail_writer'];
$update_input = $_POST['write_input'];
$update_con = addslashes($_POST['write_con']);


 include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
 $sql= "UPDATE portfolio_write SET Portfolio_tit='{$update_input}', Portfolio_con='{$update_con}' WHERE Portfolio_idx=$update_idx";

 mysqli_query($dbConn,$sql);

 echo "
 <script>
 alert('수정이 완료되었습니다.');
 history.go(-1)
 </script>
 ";


?>