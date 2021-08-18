<li class="comm_tit">
 <span>번호</span>
 <span>작성자</span>
 <span>제목</span>
 <span>내용</span>
 <span>등록일</span>
</li>
<?php
  $page = $_GET["page"];

  if($page == ''){
    $page == 1;
  }
   $view_per_page = 5;
   $from = ($page - 1) * $view_per_page;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql="SELECT * FROM portfolio_write ORDER BY Portfolio_idx DESC LIMIT $from, $view_per_page";

  $comm_result = mysqli_query($dbConn, $sql);
  while($comm_row = mysqli_fetch_array($comm_result)){
  $comm_idx= $comm_row['Portfolio_idx'];
  $comm_tit= $comm_row['Portfolio_tit'];
  $comm_writer= $comm_row['Portfolio_writer'];
  $comm_con= $comm_row['Portfolio_con'];
  $comm_reg= $comm_row['Portfoilo_reg'];
 ?>

 <li class="comm_con">
 <span><?=$comm_idx?></span>
  <span><a href="#"><?=$comm_writer?></a></span>
  <span><a href="#"><?=$comm_tit?></a></span>
  <span><?=$comm_con?></span>
  <span><?=$comm_reg?></span>
 </li>
<?php } ?>