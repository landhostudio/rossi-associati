(function($) {
  
  'use strict';
  
  var init = function () {
    initHeader();
    initImages();
    if ($('.carousel').length) {
      initCarousel();
    }
    initList();
    if ($('.cookies').length) {
      initCookies();
    }
  };

  function initHeader() {
    $('.toggle').click(function(event) {
      $('.header').toggleClass('header--opened');
    });
  };

  function initImages() {
    $('.page__cover').imagesLoaded().done(function(instance) {
      $('.page__image img').addClass('loaded');
    });
    $('.carousel__container').imagesLoaded().done(function(instance) {
      $('.carousel__cell img').addClass('loaded');
    });
  };

  function initCarousel() {
    
    var $carousel = $('.carousel__container').flickity({
      contain: false,
      autoPlay: 4000,
      pauseAutoPlayOnHover: false,
      percentPosition: true,
      prevNextButtons: false,
      pageDots: false,
      resize: false, // false if carousel uses per.height
      setGallerySize: false, // false if carousel uses per.height
      wrapAround: true // infinite loop
    });
    
    $carousel.on('mouseenter', function() {
      $carousel.on('mouseleave', onNavMouseleave);
    });

    function onNavMouseleave() {
      $carousel.flickity('playPlayer');
      $carousel.off('mouseleave', onNavMouseleave);
    };
    
  };

  function initList() {

    $('.list__element a').click(function(event) {

      var list_id = ($(this).attr('href'));

      $('.list__element').removeClass('list__element--active');
      $(this).parent().addClass('list__element--active');

      $('.list__item').removeClass('list__item--active');
      $('.list__item' + list_id).addClass('list__item--active');

      $('html, body').stop();
      $('html, body').animate({
        scrollTop: $('.page__body').offset().top
      }, 1000 );

      event.preventDefault();

    });

    var hash = $.trim(window.location.hash);
    if (hash) $('.list__element a[href$="'+hash+'"]').trigger('click');

  };

  function initCookies() {
    
    var cookie = Cookies.get('rossieassociati-cookies-accepted');

    if (cookie == 1) {

      $('.cookies').removeClass('cookies--not-accepted');

    } else {

      Cookies.set('rossieassociati-cookies-accepted', '0', {expires: 365});

      $('.cookies').addClass('cookies--not-accepted');

      $('.cookies .button--accept').click(function(event) {
        $('.cookies').removeClass('cookies--not-accepted');
        Cookies.set('rossieassociati-cookies-accepted', '1', {expires: 365});
      });

    };

  };

  init();

})(jQuery);
