//=include ../../bower_components/jquery/dist/jquery.js
//=include ../../bower_components/fastclick/lib/fastclick.js

$(function () {
  
  'use strict';
  
  var init = function () {
    initHeader();
  };

  function initHeader() {
    $('.toggle').click(function(event) {
      $('.header').toggleClass('header--opened');
    });
  };

  init();
  
});
