(function ($) {
    "use strict"
    /*-------------------------------
    menu sticky active 
    --------------------------------*/
    $(window).on('scroll',function() {    
        var scroll = $(window).scrollTop();
        if (scroll < 130) {
         $(".sticky-menu").removeClass("sticky");
        }else{
         $(".sticky-menu").addClass("sticky");
        }
       });

    /* ===============================
    menu active

    ===================================*/

        $('#main_menu ul li a').click(function(){
            $('li a').removeClass('active');
            $(this).addClass('active');
            });
    /*--------------------------------------
        Mean Menu Active
    ----------------------------------------*/
    $('.menu-wapper').meanmenu({
        meanMenuContainer: '.header-area',
        meanScreenWidth: 1199,
    });
     /*------------------------------
        slick slider active home banner
    -------------------------------- */
    $(".bortoman-picture").slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        nextArrow: '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
        fade: true,
        dots: false,
        asNavFor: '.bortoman-thumb',
    });
    /*------------------------------
        slick slider active home banner thumb
    -------------------------------- */
    $(".bortoman-thumb").slick({
        infinite: true,
        autoplay: true,
        centerMode: true,
        centerPadding: '0px',
        autoplaySpeed: 5000,
        slidesToShow: 5,
        slidesToScroll: 1,
        focusOnSelect: true,
        arrows: false,
        dots: false,
        asNavFor: '.bortoman-picture',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                }
            },
            {
            breakpoint: 479,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                }
            }
        ]

    });
       
   
   
   
   })(jQuery); 
   $(window).load(function(){
    $("#preloader").fadeOut(2000);
});
   
   
       