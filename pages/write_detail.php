<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Font Awesome Link -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
  integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
 <!-- Reset CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/reset.css">
 <!-- Main CSS Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/style.css">
 <!-- Media Link -->
 <link rel="stylesheet" href="/portfolio-cover/css/media.css">
 <title>Portfolio cover || detail</title>
</head>

<body>
 <div id="wrap">
  <section id="contact">
   <div class="center">

    <?php
   $detail_idx = $_GET['detail_idx'];
   include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
   $sql = "SELECT * FROM portfolio_write WHERE Portfolio_idx='{$detail_idx}'";

   $detail_result = mysqli_query($dbConn, $sql);
   $detail_row = mysqli_fetch_array($detail_result);

   $detail_tit = $detail_row['Portfolio_tit'];
   $detail_writer = $detail_row['Portfolio_writer'];
   $detail_con = $detail_row['Portfolio_con'];
   $detail_reg = $detail_row['Portfoilo_reg'];
  
   ?>

    <div class="tit_box">
     <h2>메시지 세부페이지입니다.</h2>
     <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt<br> mollit anim id est
      laborum.</p>
    </div>

    <div class="write comm_center">
     <h4>Posted By <?=$detail_writer?> / <?=$detail_reg?></h4>
     <form class="write_form"
      action="/portfolio-cover/php/write_update.php?detail_idx=<?=$detail_idx?>&detail_writer=<?=$detail_writer?>"
      name="write_form" method="post">
      <div class="write_tit">
       <label for="write_input">제목</label>
       <input type="text" id="write_input" value="<?=$detail_tit?>" name="write_input">
      </div>
      <div class="write_con">
       <textarea name="write_con"><?=$detail_con?></textarea>
      </div>
      <div class="write_btn">

       <a href="/portfolio-cover/index.php">돌아가기</a>
       <a href="javascript:;" id="update">수정</a>
      </div>
     </form>

    </div>
    <!-- End of write -->
   </div>
  </section>
  <script>
  const upBtn = document.querySelector('#update');
  upBtn.addEventListener("click", function() {
   document.write_form.submit();
  });
  </script>
  <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/footer.php"; ?>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>