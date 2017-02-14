//=include ../../bower_components/jquery/dist/jquery.js
//=include ../../bower_components/imagesloaded/imagesloaded.pkgd.js
//=include ../../bower_components/fastclick/lib/fastclick.js

$(function () {
  
  'use strict';
  
  var init = function () {
    initHeader();
    initImages();
    initList();
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

  init();
  
});
