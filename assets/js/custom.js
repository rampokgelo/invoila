$(document).ready(function() {
  $(".sidenav-toggle").on("click", function() {
    $(this).toggleClass('close-toggle');
    $('.sidenav-menu').toggleClass('show');
  });
  $('.banner-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 400,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.prev-hero'),
    nextArrow: $('.next-hero')
    // responsive: [
    //   {
    //     breakpoint: 1024,
    //     settings: {
    //       slidesToShow: 3,
    //       slidesToScroll: 3,
    //       infinite: true,
    //       dots: true
    //     }
    //   },
    //   {
    //     breakpoint: 600,
    //     settings: {
    //       slidesToShow: 2,
    //       slidesToScroll: 2
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1
    //     }
    //   }
    // ]
  });
  $('.testi-carousel').slick({
    dots: true,
    autoplay: true,
    infinite: true,
    speed: 400,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.prev-testi'),
    nextArrow: $('.next-testi')
  });
  // // Hide Header on on scroll down
  // var didScroll;
  // var lastScrollTop = 0;
  // var delta = 5;
  // var navbarHeight = $('.nav-signup-m').outerHeight();
  //
  // $(window).scroll(function(event) {
  //   didScroll = true;
  // });
  //
  // setInterval(function() {
  //   if (didScroll) {
  //     hasScrolled();
  //     didScroll = false;
  //   }
  // }, 250);
  //
  // function hasScrolled() {
  //   var st = $(this).scrollTop();
  //
  //   // Make sure they scroll more than delta
  //   if (Math.abs(lastScrollTop - st) <= delta)
  //     return;
  //
  //   // If they scrolled down and are past the navbar, add class .nav-up.
  //   // This is necessary so you never see what is "behind" the navbar.
  //   if (st > lastScrollTop && st > navbarHeight) {
  //     // Scroll Down
  //     $('.nav-signup-m').removeClass('nav-down').addClass('nav-up');
  //   } else {
  //     // Scroll Up
  //     if (st + $(window).height() < $(document).height()) {
  //       $('.nav-signup-m').removeClass('nav-up').addClass('nav-down');
  //     }
  //   }
  //
  //   lastScrollTop = st;
  // }

  var scrollTimeOut = true,
    lastYPos = 0,
    yPos = 0,
    yPosDelta = 5,
    nav = $('.nav-signup-m'),
    navHeight = nav.outerHeight(),
    setNavClass = function() {
      scrollTimeOut = false;
      yPos = $(window).scrollTop();

      if (Math.abs(lastYPos - yPos) >= yPosDelta) {
        if (yPos > lastYPos && yPos > navHeight) {
          nav.addClass('hide-nav');
        } else {
          nav.removeClass('hide-nav');
        }
        lastYPos = yPos;
      }
    };

  $(window).scroll(function(e) {
    scrollTimeOut = true;
  });

  setInterval(function() {
    if (scrollTimeOut) {
      setNavClass();
    }

  }, 250);


  $("#ex8").slider({
    tooltip: 'always',
    tooltip_position: 'bottom'
  });
  // $('.accordion-btn').on('click tap', function() {
  //   $(this).parents('.accordion-numbering').find('.number-item').toggleClass('active');
  // });

  $('.partner-logo').jScrollPane();
});
