<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Reset CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/reset.css">
 <!-- Main CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/style.css">
 <title>Portfolio Search</title>
</head>
<body>
 <div id="wrap">
  
 <section class="contact">
   <div class="center">
      <div class="tit_box">
        <h2>SearchResults</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est laborum.</p>
      </div>   
      <div class="comm_table comm_center">
       <ul class="comm_row">
        
       <li class="comm_tit">
        <span>번호</span>
        <span>제목</span>
        <span>내용</span>
        <span>등록일</span>
       </li>
       <?php
        $search_select=$_POST['qna_search'];
        $search_input= $_POST['search_txt'];
        // echo $search_select,$search_input;

        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        if($search_select == 'tit_search'){
         $sql_search ="SELECT * FROM portfoilo_write WHERE Portfolio_idx LIKE '%$search_input%'ORDER BY Portfolio_idx DESC";
        } else{
         $sql_search ="SELECT * FROM portfoilo_write WHERE Portfolio_tit LIKE '%$search_input%'ORDER BY Portfolio_idx DESC";
        }

        $search_result = mysqli_query($dbConn,$sql_search);
        $search_result_num = mysqli_num_rows($search_result);

        // echo $search_result_num;
        if(!$search_result_num){
         echo "
         <li>데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요.</li>
         ";
        } else{
         while($search_result_row = mysqli_fetch_array($search_result)){
          $search_idx = $search_result_row['Portfolio_idx'];
          $search_tit = $search_result_row['Portfolio_tit'];
          $search_con = $search_result_row['Portfolio_con'];
          $search_reg = $search_result_row['Portfolio_reg'];
        ?>
        <li class="comm_con">
         <span><?=$search_idx?></span>
         <span><a href="#"><?=$search_tit?></a></span>
         <span><?=$search_con?></span>
         <span><?=$search_reg?></span>
        </li>
        <?php } } ?>
       </ul>
      </div>  
      <!-- End of comm_table -->
      </div>
    </div>
 </section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
