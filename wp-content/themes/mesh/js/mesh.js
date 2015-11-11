jQuery(document).ready(function($){

  //Let's do something awesome!

  if(jQuery(window).width() > 767) {
    $('.why').parallax("80%", 0.1);
    $('.where').parallax("80%", 0.1);
  }

  if( /Android/i.test(navigator.userAgent) ) {
    $('.apple').hide();
  }

  if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
    $('.google').hide();
  }

  $('.input-box input').focus(function() {
    $('.bubble').show();
    $('.bubble').removeClass('zoomOut');
    $('.bubble').addClass('zoomIn');
  });

  $('.input-box input').blur(function() {
    $('.bubble').removeClass('zoomIn');
    $('.bubble').addClass('zoomOut');
  });

  $('.frm_submit input').hover(function() {

    $('.bubble').show();
    $('.bubble').removeClass('zoomOut');
    $('.bubble').addClass('zoomIn');
  }, function() {
    $('.bubble').removeClass('zoomIn');
    $('.bubble').addClass('zoomOut');
  });


  $('.banner-partner').click(function() {

    $('.become-section').slideDown();

    if (jQuery(window).width() > 540) {
      $('.become').css('height', '850px');
    } else {
      $('.become').css('height', '1200px');
    }

    $('.banner-partner').css('background-color', '#6ec9be');
    $('.banner-driver').css('background-color', '#c2cdd0');
    $('.become-section').css('background-color', '#6ec9be');

    $('.text-driver').hide();
    $('.text-partner').show();

  });

  $('.banner-driver').click(function() {

    $('.become-section').slideDown();

    if (jQuery(window).width() > 540) {
      $('.become').css('height', '850px');
    } else {
      $('.become').css('height', '1200px');
    }

    $('.banner-driver').css('background-color', '#c2cdd0');
    $('.banner-partner').css('background-color', '#6ec9be');
    $('.become-section').css('background-color', '#c2cdd0');

    $('.text-partner').hide();
    $('.text-driver').show();
  });

  $('.go-why').click(function() {
    $('#why').ScrollTo();
  });

  $('.go-how').click(function() {
    $('#how').ScrollTo();
  });

  $('.go-where').click(function() {
    $('#where').ScrollTo();
  });

  $('.go-contact').click(function() {
    $('#contact').ScrollTo();
  });

  $('.go-partner').click(function() {
    $('#become').ScrollTo();
    $('.become-section').slideDown();
    $('.become').css('height', '1200px');

    $('.banner-partner').css('background-color', '#6ec9be');
    $('.banner-driver').css('background-color', '#c2cdd0');

    $('.become-section').css('background-color', '#6ec9be');

    $('.text-driver').hide();
    $('.text-partner').show();
  });

  $('.go-driver').click(function() {
    $('#become').ScrollTo();
    $('.become-section').slideDown();
    $('.become').css('height', '1200px');
    $('.banner-driver').css('background-color', '#c2cdd0');
    $('.banner-partner').css('background-color', '#6ec9be');

    $('.become-section').css('background-color', '#c2cdd0');

    $('.text-partner').hide();
    $('.text-driver').show();
  });


  if(jQuery(window).width() < 767) {
    $('.logo').css('margin', '15px 0');
    $('.mobile-navigation-toggle').css('margin', '15px 0');
    $('.main-navigation ul').css('margin-top', '30px');
    $('.mobile-navigation').css('margin-top', '89px');
    $('.hero-logo').css('margin-top', '0px');
  }

  $(document).scroll(function () {
    var y = $(this).scrollTop();



    if (y > 30) {
      $('.logo').css('margin', '15px 0');
      $('.mobile-navigation-toggle').css('margin', '15px 0');
      $('.main-navigation ul').css('margin-top', '30px');
      $('.mobile-navigation').css('margin-top', '89px');
      $('.hero-logo').css('margin-top', '25px');
    }

    if (y > 200 && jQuery(window).width() > 768) {
      $('.squiggle').show();
    }


    if (jQuery(window).width() > 767) {

      // Why

      if (y > 372) {
        $('.block-1').show();
      }

      if (y > 700) {
        $('.block-2').show();
      }

      if (y > 1000) {
        $('.block-3').show();
      }

      if (y > 1200) {
        $('.block-4').show();
      }

      if (y > 1400) {
        $('.block-5').show();
      }

      // How

      if (y > 1719) {
        $('.block-6').show();
      }

      if (y > 1719 && y < 2017) {
        $('.point-1').addClass('active-point');
      } else {
        $('.point-1').removeClass('active-point');
      }

      if (y > 2300) {
        $('.block-7').show();
      }

      if (y >= 2017 && y < 2300) {
        $('.point-2').addClass('active-point');
      } else {
        $('.point-2').removeClass('active-point');
      }


      if (y > 2500) {
        $('.block-8').show();
      }

      if (y >= 2300 && y < 2550) {
        $('.point-3').addClass('active-point');
      } else {
        $('.point-3').removeClass('active-point');
      }

      if (y > 2700) {
        $('.block-9').show();
      }

      if (y >= 2550 && y < 3000) {
        $('.point-4').addClass('active-point');
      } else {
        $('.point-4').removeClass('active-point');
      }

      if (y >= 2940) {
        $('.zigzag').show();
      }

      if (y >= 3100) {
        $('.cities').show();
      }

      if (y < 692) {
        $('.go-why').removeClass('active-menu');
        $('.go-contact').removeClass('active-menu');
        $('.go-how').removeClass('active-menu');
        $('.go-where').removeClass('active-menu');

        $('.ball-why').removeClass('bounceInDown');
        $('.ball-why').addClass('bounceOutUp');
      }

      if (y >= 692 && y < 2092) {

        // WHY LINK

        $('.go-why').addClass('active-menu');
        $('.go-how').removeClass('active-menu');
        $('.go-contact').removeClass('active-menu');
        $('.go-where').removeClass('active-menu');

        $('.ball-why').show();
        $('.ball-why').addClass('bounceInDown');
        $('.ball-why').removeClass('bounceOutUp');

        $('.ball-how').removeClass('bounceInDown');
        $('.ball-how').addClass('bounceOutUp');

        $('.ball-where').removeClass('bounceInDown');
        $('.ball-where').addClass('bounceOutUp');

        $('.ball-contact').removeClass('bounceInDown');
        $('.ball-contact').addClass('bounceOutUp');

      }
      if (y >= 2092 && y < 3493) {

        // HOW IT WORKS

        $('.go-how').addClass('active-menu');
        $('.go-why').removeClass('active-menu');
        $('.go-contact').removeClass('active-menu');
        $('.go-where').removeClass('active-menu');

        $('.ball-why').removeClass('bounceInDown');
        $('.ball-why').addClass('bounceOutUp');

        $('.ball-how').show();
        $('.ball-how').addClass('bounceInDown');
        $('.ball-how').removeClass('bounceOutUp');

        $('.ball-where').removeClass('bounceInDown');
        $('.ball-where').addClass('bounceOutUp');

        $('.ball-contact').removeClass('bounceInDown');
        $('.ball-contact').addClass('bounceOutUp');

      }
      if (y >= 3493 && y < 4293) {

        // LINK UP IN YOUR CITY

        $('.go-where').addClass('active-menu');
        $('.go-why').removeClass('active-menu');
        $('.go-how').removeClass('active-menu');
        $('.go-contact').removeClass('active-menu');

        $('.ball-why').removeClass('bounceInDown');
        $('.ball-why').addClass('bounceOutUp');

        $('.ball-how').removeClass('bounceInDown');
        $('.ball-how').addClass('bounceOutUp');

        $('.ball-where').show();
        $('.ball-where').addClass('bounceInDown');
        $('.ball-where').removeClass('bounceOutUp');

        $('.ball-contact').removeClass('bounceInDown');
        $('.ball-contact').addClass('bounceOutUp');

      }

      if (y >= 3500 && y <= 3800) {
        $('.ball-link').show();

      } else {
        $('.ball-link').hide();
      }

      if (y >= 4293) {

        // CONTACT

        $('.go-contact').addClass('active-menu');
        $('.go-why').removeClass('active-menu');
        $('.go-how').removeClass('active-menu');
        $('.go-where').removeClass('active-menu');

        $('.ball-why').removeClass('bounceInDown');
        $('.ball-why').addClass('bounceOutUp');

        $('.ball-how').removeClass('bounceInDown');
        $('.ball-how').addClass('bounceOutUp');

        $('.ball-where').removeClass('bounceInDown');
        $('.ball-where').addClass('bounceOutUp');

        $('.ball-contact').show();
        $('.ball-contact').addClass('bounceInDown');
        $('.ball-contact').removeClass('bounceOutUp');
      }

    } else {

      $('.block-1').show();
      $('.block-2').show();
      $('.block-3').show();
      $('.block-4').show();
      $('.block-5').show();
      $('.block-6').show();
      $('.block-7').show();
      $('.block-8').show();
      $('.block-9').show();

      $('.cities').show();

    }


  });

  $('.mobile-navigation-toggle').click(function() {
    $('.mobile-navigation-toggle i').toggleClass('fa-bars fa-close')
    $('.mobile-navigation').slideToggle();
  });

  $('.mobile-navigation li').click(function() {
    $('.mobile-navigation-toggle i').toggleClass('fa-bars fa-close')
    $('.mobile-navigation').slideToggle();
  });

  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

  if (pgurl == '#partner'){
    $('#become').ScrollTo('1000');
    $('.become-section').slideDown();
    $('.become').css('height', '1200px');

    $('.banner-partner').css('background-color', '#6ec9be');
    $('.banner-driver').css('background-color', '#c2cdd0');

    $('.become-section').css('background-color', '#6ec9be');

    $('.text-driver').hide();
    $('.text-partner').show();
    //console.log(pgurl);
  }

  if (pgurl == '#driver'){
    $('#become').ScrollTo();
    $('.become-section').slideDown();
    $('.become').css('height', '1200px');
    $('.banner-driver').css('background-color', '#c2cdd0');
    $('.banner-partner').css('background-color', '#6ec9be');

    $('.become-section').css('background-color', '#c2cdd0');

    $('.text-partner').hide();
    $('.text-driver').show();
    //console.log(pgurl);
  }

});
