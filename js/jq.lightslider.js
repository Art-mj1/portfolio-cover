$(document).ready(function () {
  $(".target").lightSlider({
    item: 3,
    loop: false,
    slideMove: 2,
    easing: "cubic-bezier(0.25, 0, 0.25, 1)",
    speed: 600,
    responsive: [
      {
        breakpoint: 850,
        settings: {
          item: 2,
          slideMove: 1,
          slideMargin: 6,
        },
      },
      {
        breakpoint: 500,
        settings: {
          item: 1,
          slideMove: 1,
        },
      },
    ],
  });
});
