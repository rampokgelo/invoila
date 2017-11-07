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


  var slickRujuk = {
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    //swipe: false,
    asNavFor: '.rujukslide',
    prevArrow: $('.prev-rujuk'),
    nextArrow: $('.next-rujuk')
  };
  $('.rujukpict').slick(slickRujuk);
  $('.rujukcaption').slick(slickRujuk);
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

  // var maxHeight = -1;
  // $('.slick-slide').each(function() {
  //   if ($(this).height() > maxHeight) {
  //     maxHeight = $(this).height();
  //   }
  // });
  // $('.slick-slide').each(function() {
  //   if ($(this).height() < maxHeight) {
  //     $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
  //   }
  // });
  // Get titles from the DOM
  // var caradana = $("#caraPendanaan");
  // var carakonten = caradana.find("slick-active");
  //
  // if (caradana.length) {
  //
  //   caradana.slick({
  //     autoplay: true,
  //     arrows: false,
  //     dots: false,
  //     slidesToShow: 3,
  //     //centerPadding: "10px",
  //     draggable: false,
  //     infinite: true,
  //     pauseOnHover: false,
  //     swipe: false,
  //     touchMove: false,
  //     vertical: true,
  //     speed: 1000,
  //     autoplaySpeed: 5000,
  //     useTransform: true,
  //     //cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  //     adaptiveHeight: true
  //   });
  //
  //   // On init
  //   $(".slick-dupe").each(function(index, el) {
  //     $("#caraPendanaan").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
  //   });
  //
  //   // Manually refresh positioning of slick
  //   caradana.slick('slickPlay');
  // };
  // var i = 0,
  // delay = 2000,
  // animate = 300;
  // function animateList(){
  // var imax = $("ul#listCara li").length -1;
  // $("ul#listCara li:eq(" + i + ")")
  // .animate({"opacity" : "1"}, animate)
  // .animate({"opacity" : "1"}, delay)
  // .animate({"opacity" : ".3"}, animate, function(){
  //   (i == imax) ? i=0 : i++;
  //   animateList();
  // });
  //
  // };
  // animateList();
  $('#listCara').waypoint(function() {
    $('.cara-carousel li').each(function(i) {
      var $li = $(this);
      setTimeout(function() {
        $li.addClass('slide-in');
      }, i * 1200);
    });
  }, {
    offset: '100%'
  });

  // var i = 0;
  // $('#listCara').each(function() {
  //   //var hide_after = $(this).children().length;
  //   $(this).children().each(function(counter) {
  //     $(this)
  //       .delay(++i * 1500)
  //       .animate({
  //         left: 0,
  //         opacity: 1
  //       });
  //     //.delay((hide_after - counter) * 2000);
  //     //.animate({left:'100%', opacity: 0});
  //   });
  // });

});
