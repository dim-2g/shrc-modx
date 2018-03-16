$(function() {

    $('select.selectric').selectric({
        maxHeight: 210
    });
    $('.new-product__list').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    $('.view-product__list').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1215,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });


    $('.related-product__list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1150,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }

        ]
    });

    $('.main-navigation--mobile').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        focusOnSelect: true,
        adaptiveHeight: true,
    });

    //переключение категорий каталога
    $('[data-list]').click(function(){
        $('[data-list]').removeClass('active');
        $(this).addClass('active');

        var data_list = $(this).attr('data-list');
        $('.category-list').removeClass('active');
        $('.category-list.'+data_list).addClass('active');
        if ($(window).width()<1000) {
            selector = '.catalog-menu';
            $('html, body').animate({ scrollTop: $(selector).offset().top}, 1200);
        }

        return false;
    });

    //переключение вкладок с информацией
    $('[data-tab]').click(function(){
        $('[data-tab]').removeClass('active');
        $(this).addClass('active');

        var data_tab = $(this).attr('data-tab');
        $('.tab').removeClass('active');
        $(data_tab).addClass('active');        
        return false;
    });

    $('[toggle-class]').click(function(){
        $(this).toggleClass($(this).attr('toggle-class'));
        return false;
    })
/*
    $('.main-models__item').click(function(){
       $('.main-models__item').removeClass('active');
       $(this).addClass('active');
       return false;
    });*/

    $('.cabinet__label').click(function() {
        li = $(this).parents('li');
        li.toggleClass('open');
    });

    $('.aside-toggle').click(function() {
        sidebar = $('aside.sidebar');
        sidebar.toggleClass('open');
        return false;
    });

    $(".topmenu-toggle").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: 'mobile-menu',
        closeBtnInside: false
    });

    $(".auth-toggle").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: 'mobile-center',
        closeBtnInside: false
    });

    $('.footer-toggle').click(function() {
        obj = $('.footer__center');
        obj.toggleClass('open');
        return false;
    });


    setModelCircle = function() {
        //устанавливаем кружок-подложку
        model_active = $('.main-models__item.active');
        model_circle = $('.main-models__circle');
        if (model_active.length==1) {
            position = model_active.position();
            item_width = model_active.width();
            model_circle.addClass('active');
            model_circle.css({"left":position.left+item_width/2, "top": position.top-10});
        }
    }

    function onLoad() {
        setModelCircle();    
    }

    onLoad();
    

    model_item = '.main-models__item';
    $(document).on('click', model_item, function(){
        if ($(this).hasClass('active')) {
           return;
       }
       $(model_item).removeClass('active');
       $(this).addClass('active');
       setModelCircle();        
    });

    $(document).on('click', '[ajax-load]', function(){
        selector = $(this).attr('ajax-load');
        $(selector).css({"transition": "all 0.5s"});
        href = $(this).attr('href');
        //alert(height);
        //console.log(href);
        if ($(selector).length==0) {
            return;
        }

        $(selector).addClass('hide-ajax');
        setTimeout(function(){
            $.get(href, function(sdata){
                window.history.pushState(null, '', href);

                html = $(selector, sdata).html();
                //alert($('.test', sdata).html());
                $(selector).html(html).removeClass('hide-ajax');
                onLoad();
            });    
        }, 500);
       
        return false;
    });


    initAnimated = function() {
      var logo = anime({
            targets: '.logo-box img',
            translateY: 0
      });
    }
    

    function initCarousel(selector) {
        $carousel = $(selector);
        if ($carousel.length==0) {
            return;
        }
        figure = $carousel.find('figure');
        slides = figure.children();
        gap = $carousel.data('gap');
        n = slides.length;
        theta = 2 * Math.PI / n;
        currImage = 0;
        nav_btn = $('.main-nav');


        setupCarousel(n, $carousel.find(":first-child").width());
        setupNavigation();

        function setupCarousel(n, s) {
            var apothem = s / (2 * Math.tan(Math.PI / n));

            figure.css({"transform-origin": "50% 50% " + -apothem + "px"});
            slides.css({"padding": gap + "px"});
            slides.each(function(index, value) {
                $(this).css({
                    "transform-origin": "50% 50% " + -apothem + "px",
                    "transform": "rotateY(" + index*theta + "rad"
                });
            });
            rotateCarousel(currImage);
        }

        function rotateCarousel(imageIndex) {
            figure.css({"transform": "rotateY(" + imageIndex * -theta + "rad"});
        }

        function setupNavigation() {
            nav_btn.on('click', goCarousel);


            function goCarousel(e) {
                e.stopPropagation();

                var t = e.target;
                $carousel.removeClass('go-prev');
                $carousel.removeClass('go-next');

                direction = $(this).hasClass('next') ? "next" : "prev";

                if (direction == "next") {
                    currImage++;
                    $carousel.addClass('go-next');
                    $('[slide-index]').each(function(){
                        var ind = parseInt($(this).attr('slide-index'));
                        var new_ind = (ind - 1 == 0) ? 12 : ind - 1;
                    });
                } else {
                    currImage--;
                    $carousel.addClass('go-prev');
                    $('[slide-index]').each(function(){
                        var ind = parseInt($(this).attr('slide-index'));
                        var new_ind = (ind + 1 > 12) ? 1 : ind + 1;
                    });
                }

                var change_step = 100;
                var step_now = 0;
                var timerChangeSlide = setInterval(function() {





                    switch (step_now){
                        case 0:
                            //уменьшаем центральное изображение
                            $carousel.addClass('zoom-center');
                            $carousel.addClass('six-images');
                            nav_btn.addClass('hide');
                            break;
                        case 100:
                            $carousel.addClass('rotation');
                            $carousel.addClass('fives-images');

                            break;
                        case 1400:
                            rotateCarousel(currImage);
                            break;
                        case 1500:
                            //$carousel.addClass('six-images');
                            break;
                        case 2400:
                            if (direction == "next") {
                                $('[slide-index]').each(function(){
                                    var ind = parseInt($(this).attr('slide-index'));
                                    var new_ind = (ind - 1 == 0) ? 12 : ind - 1;
                                    $(this).attr('slide-index', new_ind);
                                });
                            } else {
                                $('[slide-index]').each(function(){
                                    var ind = parseInt($(this).attr('slide-index'));
                                    var new_ind = (ind + 1 > 12) ? 1 : ind + 1;
                                    $(this).attr('slide-index', new_ind);
                                });
                            }
                            $carousel.addClass('fives-images-hide');

                            break;
                        case 2800:

                            $carousel.removeClass('fives-images');
                            $carousel.removeClass('fives-images-hide');
                            $carousel.removeClass('rotation');
                            $carousel.removeClass('zoom-center');
                            $carousel.removeClass('six-images');

                            break;
                        case 3400:
                            nav_btn.removeClass('hide');
                            break;
                        default:
                        //$('.carousel').removeClass('rotation');
                    }
                    step_now += change_step;
                    $('title').html(step_now);

                }, change_step);

                // через 5 сек остановить повторы
                setTimeout(function() {
                    clearInterval(timerChangeSlide);

                    $('title').html('таймер остановлен');
                }, 5000);




            }
        }


    }
    initCarousel('.carousel');


});

$(document).scroll(function(){

});
$(window).resize(function(){

});

$preloader = $('.loaderArea'),
$loader = $preloader.find('.loader');

startPreloader = function() {
    $loader.fadeIn();
    $preloader.delay(350).fadeIn('slow');   
}
stopPreloader = function() {
    $loader.fadeOut();
    $preloader.delay(350).fadeOut('slow');   
}

$(window).on('load', function () {
    setTimeout(function(){
        stopPreloader();
        initAnimated(); 
    }, 500);
    
});
