$(document).ready(function() {


    //Mobile menu 

    $('.header_mobile_menu_button').on('click', function(e) {
        e.preventDefault()
        $('.header_menu_wrap').addClass('shown');
        $('.header_menu_wrap').removeClass('hidden');
        $('.header_mobile_menu_button').addClass('hidden');
        $('.header_mobile_menu_button').removeClass('shown');
        $('.header_mobile_menu_close_button').addClass('shown');
        $('.header_mobile_menu_close_button').removeClass('hidden');
    });

    $('.header_mobile_menu_close_button').on('click', function(e) {
        e.preventDefault();
        $('.header_menu_wrap').addClass('hidden');
        $('.header_menu_wrap').removeClass('shown');
        $('.header_mobile_menu_button').addClass('shown');
        $('.header_mobile_menu_button').removeClass('hidden');
        $('.header_mobile_menu_close_button').addClass('hidden');
        $('.header_mobile_menu_close_button').removeClass('shown');
    });




    /* Slick.js http://kenwheeler.github.io/slick/
   =======================*/
    function countSlickSlides(sliderClass, counterDivClass) {
        var $slider = $('.' + sliderClass);

        var currentSlide;
        var slidesCount;
        var sliderCounter = $('.' + counterDivClass);
        

        var updateSliderCounter = function(slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            sliderCounter.text(currentSlide + ' / ' +slidesCount)
        };

        $slider.on('init', function(event, slick) {
            //$slider.append(sliderCounter);
            updateSliderCounter(slick);
        });

        $slider.on('afterChange', function(event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });
    }



    countSlickSlides('entry_slider_ul', 'entry_slider_counter');


    $('.entry_slider_ul').slick({ // Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 6, // Показывать слайдов
        slidesToScroll: 2, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate

        //mobileFirst: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    // Создать стрелки в ручном режиме
    $(".entry_slider_arrow_left").on("click", function() {
        $('.entry_slider_ul').slick("slickPrev");
    });

    $(".entry_slider_arrow_right").on("click", function() {
        $('.entry_slider_ul').slick("slickNext");
    });


    countSlickSlides('franchise_slider_ul', 'franchise_slider_counter');

    $('.franchise_slider_ul').slick({ // Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 1, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
    });
    // Создать стрелки в ручном режиме
    $(".franchise_arrow_left").on("click", function() {
        $('.franchise_slider_ul').slick("slickPrev");
    });

    $(".franchise_arrow_right").on("click", function() {
        $('.franchise_slider_ul').slick("slickNext");
    });


    countSlickSlides('franchise_bottom_slider_ul', 'franchise_bottom_slider_counter');

    $('.franchise_bottom_slider_ul').slick({ // Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 4, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate

        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    // Создать стрелки в ручном режиме
    $(".franchise_bottom_left").on("click", function() {
        $('.franchise_bottom_slider_ul').slick("slickPrev");
    });

    $(".franchise_bottom_right").on("click", function() {
        $('.franchise_bottom_slider_ul').slick("slickNext");
    });




    countSlickSlides('projects_slider_ul', 'projects_slider_counter');

    $('.projects_slider_ul').slick({ // Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 1, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
        asNavFor: '.projects_video_slider_ul',

        //mobileFirst: true,
        responsive: [
            {
                breakpoint: 999999,
                settings: 'unslick'
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    // Создать стрелки в ручном режиме
    $(".projects_slider_left").on("click", function() {
        $('.projects_slider_ul').slick("slickPrev");
    });

    $(".projects_slider_right").on("click", function() {
        $('.projects_slider_ul').slick("slickNext");
    });

    // Убрать слайдер на ширине экрана планшета и больше (слайды оставить)

    var viewportWidth = jQuery(window).width();

    if (viewportWidth > 1023) {
        $('.projects_slider_ul').slick('unslick');
    } else {
        // Do some thing
    }



    $(".projects_video_slider_ul").slick({
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 1, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
        //centerMode: true,
        asNavFor: '.projects_slider_ul',
    });

    // Создать стрелки в ручном режиме
    $(".projects_video_slider_left").on("click", function() {
        $('.projects_video_slider_ul').slick("slickPrev");
    });

    $(".projects_video_slider_right").on("click", function() {
        $('.projects_video_slider_ul').slick("slickNext");
    });

    var currentProjectsVideoSlideNum;

    $(".projects_slide_play_btn").on("click", function(e) {
        e.preventDefault();
        
        $(".projects_video_slider_wrapper").css("display", "block");
        
        var currentProjectsVideoSlide = $(this).parent().parent().parent().get(0);
        console.log(currentProjectsVideoSlide);
        currentProjectsVideoSlideNum = currentProjectsVideoSlide.getAttribute('meta-number');
        console.log(currentProjectsVideoSlideNum);
        //currentVideoSlideNum = parseInt(currentProjectsVideoSlideNum);

        $(".projects_video_slider_ul").slick('slickGoTo', currentProjectsVideoSlideNum);

    });


    $(".projects_video_slider_ul").on("afterChange", function(event, slick, currentSlide) {
        var currentProjectsVideoSlide = slick.$slides.get(currentSlide);
        var currentProjectsVideoSlideNum = currentProjectsVideoSlide.getAttribute('meta-number');

        console.log(currentProjectsVideoSlideNum);

        
        $('.projects_li_video').each(function() {
            $(this).get(0).pause();
        });
        

        setTimeout(function() {
            var nextVideoSlideNum = parseInt(currentVideoSlideNum);
            var videoToPlayWrap = $(".projects_video_slide_wrap[meta-number='" + nextVideoSlideNum + "']");
            console.log(videoToPlayWrap);
            var videoToPlay = videoToPlayWrap.find('.projects_li_video');
            console.log(videoToPlay)
            videoToPlay.get(0).play();
        }, 2500);

    });

    $(".close_projects_video").on('click', function(e) {
      e.preventDefault();
      $(".projects_video_slider_wrapper").css("display", "none");
      $('.projects_li_video').each(function() {
        $(this).get(0).pause();
      });
    });

    
    $(".projects_video_slider_wrapper").css("display", "none");






    countSlickSlides('pack_slider_ul', 'pack_slider_counter');

    $(".pack_slider_ul").slick({
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 1, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
    });

    // Создать стрелки в ручном режиме
    $(".pack_slider_left").on("click", function() {
        $('.pack_slider_ul').slick("slickPrev");
    });

    $(".pack_slider_right").on("click", function() {
        $('.pack_slider_ul').slick("slickNext");
    });

    // $(".pack_slider_ul").on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //   //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    //   var i = (currentSlide ? currentSlide : 0) + 1;
    //   $('.pack_slider_counter').text(i + ' / ' + slick.slideCount);
    // });









    countSlickSlides('feedback_slider_ul', 'feedback_slider_counter');

    $(".feedback_slider_ul").slick({
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 3, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
        asNavFor: '.feedback_video_slider_ul',


        //mobileFirst: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    // Создать стрелки в ручном режиме
    $(".feedback_arrow_left").on("click", function() {
        $('.feedback_slider_ul').slick("slickPrev");
    });

    $(".feedback_arrow_right").on("click", function() {
        $('.feedback_slider_ul').slick("slickNext");
    });



    $('.feedback_video_slider_ul').slick({ // Указываем слайдеру, в каком элементе содержатся слайды
        infinite: true, // Прокручивать бесконечно
        slidesToShow: 1, // Показывать слайдов
        slidesToScroll: 1, // Прокручивать слайдов
        arrows: false, //Стандартные стрелки
        dots: false, // Точки
        autoplay: false, // Автоплей
        autoplaySpeed: 5000,
        fade: false, // Fade or translate
        asNavFor: '.feedback_slider_ul',

    });

    // Создать стрелки в ручном режиме
    $(".feedback_video_arrow_left").on("click", function() {
        $('.feedback_video_slider_ul').slick("slickPrev");
    });

    $(".feedback_video_arrow_right").on("click", function() {
        $('.feedback_video_slider_ul').slick("slickNext");
    });

    // Убрать слайдер на ширине экрана планшета и больше (слайды оставить)

    
    var isDragging = false;
    $(".feedback_slide_inner")
    .mousedown(function() {
        isDragging = false;
    })
    .mousemove(function() {
        isDragging = true;
     })
    .mouseup(function() {
        var wasDragging = isDragging;
        isDragging = false;
        if (!wasDragging) {
            //e.preventDefault();

            $(".feedback_video_slider").css("display", "block");

            var currentFeedbackVideoSlide = $(this).get(0);
            console.log(currentFeedbackVideoSlide);
            currentFeedbackVideoSlideNum = currentFeedbackVideoSlide.getAttribute('meta-number');
            console.log(currentFeedbackVideoSlideNum);
            //currentFeedbackVideoSlideNum = parseInt(currentFeedbackVideoSlideNum);

            $(".feedback_video_slider_ul").slick('slickGoTo', currentFeedbackVideoSlideNum);
        }
    });


    // $(".feedback_slide_inner").on("click", function(e) {
    //     e.preventDefault();
        
    //     $(".feedback_video_slider").css("display", "block");
        
    //     var currentFeedbackVideoSlide = $(this).get(0);
    //     console.log(currentFeedbackVideoSlide);
    //     currentFeedbackVideoSlideNum = currentFeedbackVideoSlide.getAttribute('meta-number');
    //     console.log(currentFeedbackVideoSlideNum);
    //     //currentFeedbackVideoSlideNum = parseInt(currentFeedbackVideoSlideNum);

    //     $(".feedback_video_slider_ul").slick('slickGoTo', currentFeedbackVideoSlideNum);

    // });


    $(".close_feedback_video").on('click', function(e) {
      e.preventDefault();
      $(".feedback_video_slider").css("display", "none");
      // $('.projects_li_video').each(function() {
      //   $(this).get(0).pause();
      // });
    });

    
    $(".feedback_video_slider").css("display", "none");













    $('.calc_form_range_range_input').val('');

    //firefox
    var isFF = true;
    var addRule = (function(style) {
        var sheet = document.head.appendChild(style).sheet;
        return function(selector, css) {
            if (isFF) {
                if (sheet.cssRules.length > 0) {
                    sheet.deleteRule(0);
                }

                try {
                    sheet.insertRule(selector + "{" + css + "}", 0);
                } catch (ex) {
                    isFF = false;
                }
            }
        };
    })(document.createElement("style"));


    addRule('.calc_form_range_range_input::-moz-range-track', 'linear-gradient(to right, #d08f6d, #c15926 45%, #e9e4da 45%, #e9e4da)');

    $('.calc_form_range_range_input').on('input', function() {
        addRule($(this), 'background: linear-gradient(to right, #d08f6d, #c15926 ' + this.value + '%, #e9e4da ' + this.value + '%, #e9e4da)');
    });


    //chrome
    $('.calc_form_range_range_input').on('input', function() {
        $(this).css('background', 'linear-gradient(to right, #d08f6d, #c15926 ' + this.value + '%, #e9e4da  ' + this.value + '%, #e9e4da)');
    });




    $('.calc_form_investments_range_input').on('input', function() {
        var currentVal = ($(this).val() * 6000) + 400000;
        var textInput = $('.calc_form_investments_text_input');
        textInput.val(currentVal);
    });

    $('.calc_form_investments_text_input').on('input', function() {
        var currentVal = ($(this).val() - 400000) / 6000;
        var textInput = $('.calc_form_investments_range_input');
        
        addRule(textInput, 'background: linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da ' + currentVal + '%, #e9e4da)');
        textInput.css('background', 'linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da  ' + currentVal + '%, #e9e4da)');
    

        textInput.val(currentVal);
    });




    $('.calc_form_lumpsum_range_input').on('input', function() {
        var currentVal = ($(this).val() * 0.7) + 20;
        currentVal = currentVal.toFixed(1);

        var textInput = $('.calc_form_lumpsum_text_input');

        textInput.val(currentVal);
    });

    $('.calc_form_lumpsum_text_input').on('input', function() {
        var currentVal = ($(this).val() - 20) / 0.7;
        var textInput = $('.calc_form_lumpsum_range_input');
        
        addRule(textInput, 'background: linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da ' + currentVal + '%, #e9e4da)');
        textInput.css('background', 'linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da  ' + currentVal + '%, #e9e4da)');

        textInput.val(currentVal);
    });




    $('.calc_form_royalties_range_input').on('input', function() {
        var currentVal = ($(this).val() * 400) + 10000;
        var textInput = $('.calc_form_royalties_text_input');
        textInput.val(currentVal);
    });

    $('.calc_form_royalties_text_input').on('input', function() {
        var currentVal = ($(this).val() - 10000) / 400;
        var textInput = $('.calc_form_royalties_range_input');
        
        addRule(textInput, 'background: linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da ' + currentVal + '%, #e9e4da)');
        textInput.css('background', 'linear-gradient(to right, #d08f6d, #c15926 ' + currentVal + '%, #e9e4da  ' + currentVal + '%, #e9e4da)');

        textInput.val(currentVal);
    });














    // Прилипчивое верхнее меню

    var viewportWidth = jQuery(window).width();


    var headerH = $("#js_header").height(); //Заносим в переменные высоту Хедера и высоту с бордерами, паддингами Меню в пикселах
    
    $(document).on("scroll", function() {
        // if ((viewportWidth < 1024) || (viewportWidth > 1439)) {
        //     var documentScroll = $(this).scrollTop();// Заносим в переменную на сколько проскроллили сверху документ в пикселах

        //     if (documentScroll > headerH) {
        //         $("#js_header").addClass("fixed");// Добавление к вертикальному меня класса .fixed с position: fixed и рядом других стилевых правил
        //         //$("#js_header").css('padding-top', menuH);// Добавление к Хедеру свойства padding-top со значением высоты Меню в пикселах
        //     }
        // }        

        // else {
        //     if ((viewportWidth < 1024) || (viewportWidth > 1439)) {
        //         $("#js_header").removeClass("fixed");
        //         //$("#js_header").css('padding-top', 0);
        //     }
        // }

        var documentScroll = $(this).scrollTop();// Заносим в переменную на сколько проскроллили сверху документ в пикселах

        if (documentScroll > headerH) {
            $("#js_header").addClass("fixed");// Добавление к вертикальному меня класса .fixed с position: fixed и рядом других стилевых правил
            //$("#js_header").css('padding-top', menuH);// Добавление к Хедеру свойства padding-top со значением высоты Меню в пикселах
        } else {
            $("#js_header").removeClass("fixed");
            //$("#js_header").css('padding-top', 0);
        }
    });// При скролле документа



    //Создание плавной прокрутки для пунктов верхнего меню

    $(".header_menu li a").on("click", function(e) {
        e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

        var linkHref = $(this).attr("href");
        var blockId = linkHref.substring(1);
        blockId = '.' + blockId;

        var scrollOffset = $(''+blockId).offset().top - headerH - 38; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

        $("html, body").animate({
            scrollTop: scrollOffset
        }, 1200); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.

        var pageWidth = $(window).width();

        if (pageWidth <= 1023) {
            $('.header_menu_wrap').removeClass('shown');
            $('.header_menu_wrap').addClass('hidden');
            $('.header_mobile_menu_button').addClass('shown');
            $('.header_mobile_menu_button').removeClass('hidden');
            $('.header_mobile_menu_close_button').addClass('hidden');
            $('.header_mobile_menu_close_button').removeClass('shown');
        }
    });



    //Создание плавной прокрутки для пунктов меню футера

    $(".footer_menu li a").on("click", function(e) {
        e.preventDefault(); //Отменяет действие для клика по ссылке по умолчанию

        var linkHref = $(this).attr("href");
        var blockClass = linkHref.substring(1);
        blockClass = '.' + blockClass;

        var scrollOffset = $(''+blockClass).offset().top - headerH - 38; //Вычисляет расстояние в пикселах от верха страницы до элемента с id = "scroll-here"

        $("html, body").animate({
            scrollTop: scrollOffset
        }, 1200); //Создает прокрутку блоков html и body на значение переменной scrollOffset за время в 1200 миллисекунд. И html, и body указаны для кроссбраузерности. Только с body работает в Хроме, но не в Файрфокс. Только с html работает в Файрфокс, но не работает в Хроме.

        var pageWidth = $(window).width();

    });












    //Modals 

    $('.footer_get_call').on('click', function() {
        $('.modal_get_call').css('display', 'block');
    });
    $('.entry_button').on('click', function() {
        $('.modal_get_call').css('display', 'block');
    });
    $('.modal_get_call_close').on('click', function() {
        $('.modal_get_call').css('display', 'none');
    });


    $('.cookie_accept').on('click', function() {
        $('#cookie_notification').css('display', 'none');
    });

    $('.modal_thank_you_close').on('click', function() {
        $('.modal_thank_you').css('display', 'none');
    });


    // Функционал Contact Form 7
    $('.calc_form_wrap > div > form').addClass('calc_form');
    $('.get-plan_right > div > form').addClass('get-plan_form');
    

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.modal_get_call').css('display', 'none');
        $('.modal_thank_you').css('display', 'block');
    }, false );





    setTimeout(function() {
        $('.projects_video_slider_wrapper').css('position', 'fixed');
    }, 3000);

    $('.calc_form_right').find('input[type="checkbox"').on('change', function(e) {
        $(this).next().toggleClass('checked-span');
    });

    $('.get-plan_form').find('input[type="checkbox"').on('change', function(e) {
        $(this).next().toggleClass('checked-span');
    });
});