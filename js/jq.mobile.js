//Mobile Menu Animation Effect
$(".menu_ico").hover(function () {
  $(this).toggleClass("active");
});

//Mobile Menu Click Effect
$(".menu_ico").click(function () {
  $(".mobile_nav").animate({ left: 0 }, 300);
});
$(".close_btn, .overlay").click(function () {
  $(".mobile_nav").animate({ left: "-60%" }, 300);
});

//Mobile Menu Accordion Effect
$(".mobile_tit").click(function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(this).siblings(".mobile_sub_nav").slideUp(200);
    $(this).removeClass("rotate");
    $(".mobile_tit").removeClass("rotate");
  } else {
    $(".mobile_tit").removeClass("active");
    $(".mobile_tit").removeClass("rotate");
    $(this).addClass("active");
    $(".mobile_sub_nav").slideUp(200);
    $(this).siblings(".mobile_sub_nav").slideDown(200);
    $(this).addClass("rotate");
  }
});
