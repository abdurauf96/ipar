$(document).ready(function(){
    var teng = true; 
    $(".burger__menu").click(function(){
        if(teng == true) {
            $(".header__link").css({
                'transform' : 'translate(0%)',
            });
            $(this).addClass("x");
            teng = false;
        }else{
            $(".header__link").css({
                'transform' : 'translate(100%)',
            });
            $(this).removeClass("x");
            teng = true;
        }
        
    });
    $(".slider1__wrapper").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
                }
            },
            {
                breakpoint: 450,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
                }
            }
           
            ]
    });
    
    $(".slider3__wrapper").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
                }
            }           
         ]

    });
    $(".okampaniya__right--slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
                }
            }           
         ]

    });
    $(".accordion__head").click(function(){
        if($(this).siblings(".accordion__body").is(":visible")){
            $(this).siblings(".accordion__body").slideToggle();
            $(this).toggleClass("accordion__active");
        }
        else{
            $(".accordion__body").slideUp();
            $(this).siblings(".accordion__body").slideToggle();
            $(".accordion__head").removeClass("accordion__active");  
            $(this).addClass("accordion__active");
    
        }
    });
  
    $(".exit").click(function(e){
        e.preventDefault();
        $(".modal__form").slideUp();
        $(".consult_form").slideUp();
    });
    
    $(".consult").click(function(e){
        e.preventDefault();
        $(".consult_form").slideDown();
    });
    

    $('.otprovlen__xorosho').click(function(e){
        e.preventDefault();
        $('.otprovlen').slideUp(500);
        $('.modal').slideUp(500);
    })

    /*change the js*/
    $(".s_number1").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.s_number2'
    });
    $(".s_number2").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.s_number1',
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
    /*change the end*/
    
});