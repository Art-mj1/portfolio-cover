function headerAni() {
  const header = document.querySelector("header");
  // console.log(header);

  document.addEventListener("scroll", function () {
    let winTop = document.documentElement.scrollTop;
    // console.log(winTop);
    const headerTP = 60;
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

$(function () {
  // Mega Box Menu Show When Hovering Navigation
  $(".nav, .hidden_sub").on("mouseenter", function () {
    $(".hidden_sub").css({ display: "block" });
    $(".nav li a").css({ color: "#003946" });
    $(".hidden_sub").stop().animate({ height: "485px" }, 300);
  });
  $(".nav, .hidden_sub").on("mouseleave", function () {
    $(".hidden_sub")
      .stop()
      .animate({ height: 0 }, 300, function () {
        $(".nav li a").css({ color: "#000" });
        $(".hidden_sub").css({ display: "none" });
      });
  });
});
