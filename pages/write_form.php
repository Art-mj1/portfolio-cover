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
<!-- Font Awesome Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Portfolio Writing</title>

</head>
<body>
 <div id="wrap">
  
 <section class="contact">
   <div class="center">
      <div class="tit_box">
        <h2>Leaving message </h2>
        <p>자유롭게 메시지를 남기는 곳입니다. 궁금한 점, 보완할 부분등 자유롭게 남겨주세요.</p>
      </div>   
      
      <div class="comm_table comm_center">
       <ul class="comm_row">
        <!-- ajax elements load here -->
       </ul>
      </div>  
      <!-- End of comm_table -->
      <div class="search_paging comm_center">
        <div class="search">
          <form action="/portfolio-cover/pages/write_search.php" class="search_form" name="search_form" method="post">
          <select name="qna_search">
            <option value="tit_search">제목</option>
          </select>
          <input type="text" placeholder="검색어를 입력해 주세요" name="search_txt">
          <button type="button" onclick="search_check()"><i class="fa fa-search"></i></button>

          <script>
            function search_check(){
              if(!document.search_form.search_txt.value){
              alert('검색어를 입력해 주세요.');
              document.search_form.search_txt.focus();
              return;
            }
            document.search_form.submit();
            }
          </script>
          </form>
        </div>
        <div class="paging">
          <span class="angle-double first"> <i class="fa fa-angle-double-left"></i></span>
          <span class="prev angle"> <i class="fa fa-angle-left"></i></span>
 
          <?php
          include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
          $sql_paging = "SELECT * FROM portfolio_write";

          $paging_result = mysqli_query($dbConn, $sql_paging);
          $total_record = mysqli_num_rows($paging_result);
          $paging_num = 5;

          if($total_record % $paging_num ==0){
           $total_page = floor($total_record / $paging_num);//소수점 아래 실수 버림
          } else {
            $total_page = floor($total_record / $paging_num) + 1;
          }

          for($i=1; $i<=$total_page;$i++){
          ?>
          
          <span class="num" onclick="getPage(<?=$i?>)"><?=$i?></span>
          <?php } ?>
          <span class="next angle"> <i class="fa fa-angle-right"></i></span>
          <span class="angle-double last"> <i class="fa fa-angle-double-right"></i></span>
        </div>
      </div>
      <!-- End of search paging -->
      
      <div class="write comm_center">
       <h4>글을 입력해 주세요.</h4>
        <form class="write_form" action="/portfolio-cover/php/write_insert.php" name="write_form" method="post">
         <div class="write_tit">
           <label for="write_input">제목</label>
           <input type="text" id="write_input" placeholder="제목을 입력해 주세요."name="write_input">
         </div>
         <div class="write_con">
           <textarea placeholder="내용을 입력해 주세요." name="write_con"></textarea>
         </div>
        </form>
        <div class="write_btn">
          <?php { ?>
          <button type="button" onclick="sendWrite()">글쓰기</button>
          <?php } ?>
        </div>
      </div>
      <!-- End of Write -->
    </div>
 </section>

 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/portfolio-cover/js/jq.comm_ajax.js"></script>
 <script>
    function sendWrite(){
      if(!document.write_form.write_input.value){
        alert('제목을 입력해 주세요.'); 
        return;
      }

      if(!document.write_form.write_con.value){
        alert('내용을 입력해 주세요.'); 
        return;
      }

      document.write_form.submit();
    }
 </script>
</body>
</html>
