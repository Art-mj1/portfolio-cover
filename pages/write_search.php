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
 <title>Portfolio cover || search</title>
</head>
<body>
 <div id="wrap">
 <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/header.php"; ?>
 <section id="contact">
   <div class="center">
      <div class="tit_box">
        <h2>Message Result</h2>
        <p>메세지 결과 출력 화면입니다.</p>
      </div>   
      <div class="comm_table comm_center">
       <ul class="comm_row">
        
       <li class="comm_tit">
        <span>번호</span>
        <span>작성자</span>
        <span>제목</span>
        <span>내용</span>
        <span>등록일</span>
       </li>
       <?php
        $search_select=$_POST['qna_search'];
        $search_input= $_POST['search_txt'];
        // echo $search_select,$search_input;

        include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
        if($search_select == 'writer_search'){
          $sql_search ="SELECT * FROM portfolio_write WHERE Portfolio_writer LIKE '%$search_input%'ORDER BY Portfolio_idx DESC";
         } else{
          $sql_search ="SELECT * FROM  portfolio_write WHERE Portfolio_tit LIKE '%$search_input%'ORDER BY Portfolio_idx DESC";
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
          $search_writer = $search_result_row['Portfolio_writer'];
          $search_tit = $search_result_row['Portfolio_tit'];
          $search_con = $search_result_row['Portfolio_con'];
          $search_reg = $search_result_row['Portfoilo_reg'];
        ?>
        <li class="comm_con">
         <span><?=$search_idx?></span>
         <span><a href="#"><?=$search_writer?></a></span>
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
 <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/footer.php"; ?>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
