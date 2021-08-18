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
 <link rel="stylesheet" href="/portfolio-cover/css/join.css">
 <title>Portfolio cover || Join Form</title>
</head>
<body>
  <div id="wrap">
 <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/header.php"; ?>
 <section class="join">
   <div class="center">
     <div class="form_box">
     <form action="/portfolio-cover/php/join.php" method="post" name="port_form" 
      enctype="multipart/form-data" class="port_form">
        <p>
          <label>아이디</label> <input type="text" name="port_id" placeholder="아이디" id="mem_id">
          <button type="button" class="id_check">중복체크</button>
        </p>
        <!-- 중복체크 -->
        <p>
          <label>비밀번호</label><input type="password" name="port_pass" autocomplete="off" placeholder="비밀번호">
        </p>
        <p>
          <label>비밀번호확인</label> <input type="password" name="port_pass_check" placeholder="비밀번호 확인">
        </p>
        <p>
          <label>이름</label> <input type="text" name="port_name" placeholder="이름">
        </p>
        <p>
          <label>이메일</label> <input type="text" name="port_email" placeholder="이메일">
        </p>
        <div class="submit_info">
         <button type="button" id="submit_btn">회원가입</button>
         <span> 이미 회원이시면 <a href="/portfolio-cover/pages/login_form.php">click</a></span>
        </div>
      </form>

     </div>
   </div>
 </section>



 <?php include $_SERVER["DOCUMENT_ROOT"]."/portfolio-cover/include/footer.php";?>
  </div>

  <!-- jQuery Framework Load -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/portfolio-cover/js/jq.main.js"></script>
 <script>
   $(function(){
     $(".id_check").click(function(){
      const id_val = $("#mem_id").val();
      
      $.ajax({
        url:"/portfolio-cover/php/id_check.php",
        type:'get',
        data:{id_val : id_val},
        success:function(data){
          alert(data);
        }
      });
     });
   });
 </script>
 <script>

  const submitBtn = document.querySelector('#submit_btn');
  const id_check = document.querySelector(".id_check");
  let check=false;

   id_check.addEventListener('click',function(){
     check=true;
   });
   

  submitBtn.addEventListener('click',function(){
   if(!document.port_form.port_id.value){
    alert('아이디를 입력해 주세요');
    document.port_form.port_id.focus();
    return;
    } 

    if(!document.port_form.port_pass.value){
    alert('비밀번호를 입력해 주세요');
    document.port_form.port_pass.focus();
    return;
    } 

    if(!document.port_form.port_pass_check.value){
    alert('비밀번호 확인을 입력해 주세요');
    document.port_form.port_pass_check.focus();
    return;
    } 
    if(document.port_form.port_pass.value != document.port_form.port_pass_check.value){
     alert('비밀번호와 비밀번호 확인이 다릅니다');
     document.port_form.port_pass_check.focus();
     return;
    }

    if(!document.port_form.port_name.value){
    alert('이름을 입력해 주세요');
    document.port_form.port_name.focus();
    return;
    } 

    if(!document.port_form.port_email.value){
    alert('이메일을 입력해 주세요');
    document.port_form.port_email.focus();
    return;
    } 
    
    if(!check){
      alert('아이디 중복체크를 눌러주세요');
      return;
    }
    document.port_form.submit();
  });
 </script>
</body>
</html>
