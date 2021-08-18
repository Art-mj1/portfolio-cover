<?php

 $port_id= $_POST['port_id'];

 include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
 $sql_check = "SELECT * FROM portfolio_mem WHERE Portfolio_mem_id='{$port_id}'";
 
 $check_result = mysqli_query($dbConn, $sql_check);
 $is_check = mysqli_num_rows($check_result);

//  echo $is_check;

 if($is_check > 0){
  echo "
  <script>
   alert('이미 가입된 회원입니다.');
   history.go(-1);
  </script>
 ";
 } else {
  $port_pass= $_POST['port_pass'];
  $port_name=$_POST['port_name'];
  $port_email=$_POST['port_email'];
  $port_reg= date('Y-m-d');


  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql="INSERT INTO portfolio_mem(
    Portfolio_mem_id,
    Portfolio_mem_pass,
    Portfolio_mem_name,
    Portfolio_mem_email,
    Portfolio_mem_reg
  ) VALUES (
    '{$port_id}',
    '{$port_pass}',
    '{$port_name}',
    '{$port_email}',
    '{$port_reg}'
  )";
  mysqli_query($dbConn, $sql);
  echo "
    <script>
    alert('회원가입이 완료되었습니다.');
    location.href='/portfolio-cover/index.php';
    </script>
  ";
  // echo $mem_id, $mem_pass, $mem_pf, $mem_name, $mem_email;
}
?>