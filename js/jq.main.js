function headerAni() {
  const header = document.querySelector("header");
  // console.log(header);

  document.addEventListener("scroll", function () {
    let winTop = document.documentElement.scrollTop;
    // console.log(winTop);
    const headerTP = 120;
    // console.log(headerTP);
    if (winTop >= headerTP) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });
}
headerAni();

$(function () {
  const cuttingTEXT = function () {
    // console.log($(".featured_item").length);
    for (let i = 0; i < $(".con").length; i++) {
      const textLength = $(".con").eq(i).find("p").text();
      // console.log(textLength);

      $(".con")
        .eq(i)
        .find("p")
        .text(textLength.substr(0, 40) + "...");
    }
  };
  cuttingTEXT();
});

//Mobile Menu Animation Effect
$(".menu_ico").hover(function () {
  $(this).toggleClass("active");
});

//Mobile Menu Click Effect
$(".menu_ico").click(function () {
  $(".mobile_nav").animate({ left: 0 }, 300);
  $("section").animate({ left: "60%" }, 300);
  $(".overlay").animate(
    {
      opacity: 0.7,
      left: "60%",
      width: "100%",
    },
    300
  );
});
$(".close_btn, .overlay").click(function () {
  $(".mobile_nav").animate({ left: "-60%" }, 300);
  $("section").animate({ left: 0 }, 300);
  $(".overlay").animate(
    {
      opacity: 0,
      left: 0,
      width: 0,
    },
    300
  );
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
