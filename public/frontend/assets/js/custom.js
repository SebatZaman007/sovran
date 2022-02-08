(function ($) {
  "use strict"; // Start of use strict

  // Preloader Start
  $(window).on('load', function () {
    $('#status').fadeOut();
    $('#preloader')
      .delay(350)
      .fadeOut('slow');
    $('body')
      .delay(350)
  });
  // Preloader End

  /// MAIN MENU SCRIPT START

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').on('click', function () {
    $('.navbar-collapse').collapse('hide');
  });

  // MAIN MENU SCRIPT END

  // Mouse Move Effect start
  $(document).mousemove(function (event) {
    var xPos = (event.clientX / $(window).width()) - 0.5,
      yPos = (event.clientY / $(window).height()) - 0.5,
      box = $('.box'),
      coord = $('.coordinates');

    TweenLite.to(box, 0.6, {
      rotationY: 5 * xPos,
      rotationX: 5 * yPos,
      ease: Power1.easeOut,
      transformPerspective: 500,
      transformOrigin: 'center'
    });
  });
  // Mouse Move Effect end

  // Veno Box
  $('.venobox').venobox();

  // Wow js
  new WOW().init();

})(jQuery); // End of use strict