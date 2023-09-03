(function ($) {
  "use strict";

  var windowOn = $(window);
  ////////////////////////////////////////////////////
  //01. PreLoader Js

  var loader = document.getElementById("preloader");

  window.addEventListener("load", function () {
    loader.style.display = "none";
  });
  ////////////////////////////////////////////////////
  // 02. Mobile Menu Js
  $("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "1360",
    meanExpand: ['<i class="fal fa-plus"></i>'],
  });

  ////////////////////////////////////////////////////
  // 03. Sidebar Js
  $(".sidebar-toggle-btn").on("click", function () {
    $(".sidebar__area").addClass("sidebar-opened");
    $(".body-overlay").addClass("opened");
  });
  $(".sidebar__close-btn").on("click", function () {
    $(".sidebar__area").removeClass("sidebar-opened");
    $(".body-overlay").removeClass("opened");
  });

  ////////////////////////////////////////////////////
  // 04. Body overlay Js
  $(".body-overlay").on("click", function () {
    $(".sidebar__area").removeClass("sidebar-opened");
    $(".body-overlay").removeClass("opened");
  });

  ////////////////////////////////////////////////////
  // 05. Sticky Header Js
  windowOn.on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 100) {
      $("#header-sticky").removeClass("header__sticky");
    } else {
      $("#header-sticky").addClass("header__sticky");
    }
  });

  ////////////////////////////////////////////////////
  // 06. magnificPopup video view
  $(".btn-play").magnificPopup({
    type: "iframe",
  });

  ////////////////////////////////////////////////////
  // 07. Wow Js
  new WOW().init();

  ////////////////////////////////////////////////////
  // 08. Wow Js
  if ($(".progress-bar").length) {
    $(".progress-bar").appear(
      function () {
        var el = $(this);
        var percent = el.data("width");
        $(el).css("width", percent + "%");
      },
      {
        accY: 0,
      }
    );
  }
  ///////////////////////////////////////////////////
  // 09. case-slider Js
  $(".case-slider").owlCarousel({
    //add owl carousel in activation class
    loop: true,
    autoplay: true,
    margin: 30,
    items: 4,
    navText: [
      '<button class="nav-left"><i class="fa-thin fa-angle-left"></i></button>',
      '<button class="nav-right"><i class="fa-thin fa-angle-right"></i></button>',
    ],
    nav: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 3,
      },
    },
  });
  ///////////////////////////////////////////////////
  // 10. testimonial-slider Js
  $(".testimonial-slider").owlCarousel({
    //add owl carousel in activation class
    loop: true,
    autoplay: true,
    margin: 30,
    items: 4,
    nav: false,
    dots: true,
    dotsEach: 1,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
  ///////////////////////////////////////////////////
  // 11. attorny-slider Js
  $(".attorney-slider").owlCarousel({
    //add owl carousel in activation class
    loop: true,
    autoplay: true,
    margin: 30,
    items: 4,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 2,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 6,
      },
    },
  });
  ///////////////////////////////////////////////////
  // 12. brand-slider Js
  $(".brand-slider").owlCarousel({
    //add owl carousel in activation class
    loop: true,
    autoplay: true,
    margin: 30,
    items: 5,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 3,
      },
      767: {
        items: 3,
      },
      992: {
        items: 5,
      },
    },
  });

  ////////////////////////////////////////////////////
  // 13. Isotope Js active for Case Category
  // filter items on button click
  $(".case-category-list").on("click", "button", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  });

  // init Isotope
  var $grid = $(".grid").isotope({
    itemSelector: ".grid-item",
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: ".grid-item",
    },
  });

  ////////////////////////////////////////////////////
  // 14.Case Category List active class add
  $(".case-category-list").on("click", "button", function () {
    $(".case-category-list button.active").removeClass("active");
    $(this).addClass("active");
  });
})(jQuery);
