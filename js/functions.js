jQuery(document).ready(function(){
  
  $("#menu-home li").addClass("flex33 flex");
  $("#menu-home li a").addClass("flex100");
  $("#menu-programa-estagio li").addClass("flex14");
  $("#menu-programa-trainee li").addClass("flex20");
  
  $(".innernavigation:first-of-type li:first-child").addClass("ativo");

  // navegações internas
  $( ".innernav" ).click(function() {
    $(this).closest(".section").find(".innernav").parent().removeClass("ativo");
    $(this).parent().addClass("ativo");

    $(this).closest(".section").not("#o-programa").find(".innernavcontent li").addClass("off").removeClass("showed");

    $(this).closest(".section").find(".innernavcontent li[data-value='"+$(this).attr("data-type")+"']").removeClass("off").addClass("showed");
  });

  // depoimentos

  estagio = $('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 3,
    pager:false,
    controls:true,
    slideWidth: 300,
    slideMargin: 80,
    prevText:"",
    nextText:""
  });

  trainee = $('.bxslider2').bxSlider({
    minSlides: 1,
    maxSlides: 2,
    pager:false,
    controls:true,
    slideWidth: 450,
    slideMargin: 30,
    prevText:"",
    nextText:""
  });

  $(window).resize(function(e){
    // if ($(window).width() <= 1048) {
    //   e.preventDefault();
    //   trainee.reloadSlider({
    //     minSlides: 1,
    //     maxSlides: 2,
    //     pager:false,
    //     controls:true,
    //     slideWidth: 400,
    //     slideMargin: 20,
    //     prevText:"",
    //     nextText:""
    //   });
    // }
    // if ($(window).width() <= 910) {
    //   e.preventDefault();
    //   trainee.reloadSlider({
    //     minSlides: 1,
    //     maxSlides: 2,
    //     pager:false,
    //     controls:true,
    //     slideWidth: 350,
    //     slideMargin: 10,
    //     prevText:"",
    //     nextText:""
    //   });
    // }
    // if ($(window).width() <= 780) {
    //   e.preventDefault();
    //   trainee.reloadSlider({
    //     minSlides: 1,
    //     maxSlides: 2,
    //     pager:false,
    //     controls:true,
    //     slideWidth: 300,
    //     slideMargin: 10,
    //     prevText:"",
    //     nextText:""
    //   });
    // }
    // if ($(window).width() <= 680) {
    //   e.preventDefault();
    //   trainee.reloadSlider({
    //     minSlides: 1,
    //     maxSlides: 1,
    //     pager:false,
    //     controls:true,
    //     slideWidth: 450,
    //     slideMargin: 0,
    //     prevText:"",
    //     nextText:""
    //   });
    // }
    // if ($(window).width() <= 490) {
    //   e.preventDefault();
    //   trainee.reloadSlider({
    //     minSlides: 1,
    //     maxSlides: 1,
    //     pager:false,
    //     controls:true,
    //     slideWidth: 280,
    //     slideMargin: 0,
    //     prevText:"",
    //     nextText:""
    //   });
    // }
    // 
    if ($(window).width() < 1280) {
      e.preventDefault();
      estagio.reloadSlider({
        minSlides: 1,
        maxSlides: 3,
        pager:false,
        controls:true,
        slideWidth: 250,
        slideMargin: 40,
        prevText:"",
        nextText:""
      });
    }
    if ($(window).width() < 1080) {
      e.preventDefault();
      estagio.reloadSlider({
        minSlides: 1,
        maxSlides: 3,
        pager:false,
        controls:true,
        slideWidth: 200,
        slideMargin: 40,
        prevText:"",
        nextText:""
      });
    }
    if ($(window).width() < 890) {
      e.preventDefault();
      estagio.reloadSlider({
        minSlides: 1,
        maxSlides: 2,
        pager:false,
        controls:true,
        slideWidth: 250,
        slideMargin: 40,
        prevText:"",
        nextText:""
      });
    }
    if ($(window).width() < 640) {
      e.preventDefault();
      estagio.reloadSlider({
        minSlides: 1,
        maxSlides: 1,
        pager:false,
        controls:true,
        slideWidth: 190,
        slideMargin: 0,
        prevText:"",
        nextText:""
      });
    }
  });

  // header

  function getRelatedContent(el){
    return $($(el).attr('href'));
  }

  function getRelatedNavigation(el){
    return $('#header ul[id*="menu"] a[href=#'+$(el).attr('id')+']');
    return $('#header ul[id="navMobile"] a[href=#'+$(el).attr('id')+']');
  }

  $('#header ul[id*="menu"] a,#header ul[id="navMobile"] a').on('click',function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop:getRelatedContent(this).offset().top - 30})
  });

  var wpDefaults={
    context: window,
    continuous: true,
    enabled: true,
    horizontal: false,
    offset: 0,
    triggerOnce: false
  };

  $('.section').waypoint(function(direction) {
    getRelatedNavigation(this).toggleClass('ativo', direction === 'down');
  }, {
    offset: '30%'
  }).waypoint(function(direction) {
    getRelatedNavigation(this).toggleClass('ativo', direction === 'up');
  }, {
    offset: function() {  return -$(this).height() + 100; }
  });

  // 

  var header = $('#header').position().top;

  jQuery(window).scroll(function() {
    if($(window).scrollTop() > (header + 150)){
      jQuery('#header,#wrap').addClass('sticky');
    } else {
      jQuery("#header,#wrap").removeClass("sticky");
    }
  });

  var saveUrl = jQuery("#logo").attr("href");

  jQuery("#logo").on('click', function () {
    if (jQuery(window).width() < 860) {
      jQuery("#logo").toggleClass("openMenuMobile");
      jQuery('html, body').stop(true, false).animate({
        scrollTop: jQuery("body").offset().top
      }, 500);
      jQuery("#navMobile").toggleClass("on");
    }
  });

  jQuery("#navMobile a").on('click', function () {
    jQuery(".openMenuMobile").removeClass("openMenuMobile");
    jQuery(".on").removeClass("on");
  });

  if (jQuery(window).width() < 860) {
    jQuery("#logo").attr("href","javascript:void(0)")
  } else {
    jQuery("#logo").attr("href",saveUrl);
  }

  jQuery(window).resize(function(){
    jQuery(".openMenuMobile").removeClass("openMenuMobile");
    jQuery(".on").removeClass("on");
    // 
    if (jQuery(window).width() < 860) {
      jQuery("#logo").attr("href","javascript:void(0)")
    } else {
      jQuery("#logo").attr("href",saveUrl);
    }
  });

  $('#porque_trabalhar_trainee_slider').bxSlider({
    pagerCustom: '#porque_trabalhar_trainee_slider_pager',
    prevText:"",
    nextText:"",
    responsive: true,
    adaptiveHeight: true 
  });

  jQuery(".pg-interna.page_id_17 #areas.section #areas-de-oportunidade > div > div:first-child h1").on('click', function () {
    $(this).closest(".flex").parent().addClass("ativo");
  });

  jQuery("#areas-de-oportunidade .close").on('click', function () {
    if($(this).closest(".ativo").hasClass("ativo")){
      $(this).closest(".ativo").removeClass("ativo");
    }
  });

  $('.areas-de-oportunidade-slide').bxSlider({
    infiniteLoop: false,
    hideControlOnEnd: true,
    prevText: "",
    nextText:"",
    pager:false,
    adaptiveHeight: true 
  });

});
