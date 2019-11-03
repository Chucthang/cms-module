var swiper = new Swiper('.swiper-container', {
    effect: 'fade',
    calculateHeight: true,
    slidesPerView: 1,
    touchStartPreventDefault: false,
    allowTouchMove: false,
    speed: 6000,
    loop: true,
    // autoplay: {
    //     delay: 7000,
    //     disableOnInteraction: false
    // },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

$(document).ready(function() {

    /*--------------------------------- Mở rộng addClass cho phép thực hiện Callback trong addClass -------------------------------------*/
    var oAddClass = $.fn.addClass;
    $.fn.addClass = function() {
        for (var i in arguments) {
            var arg = arguments[i];
            if (!!(arg && arg.constructor && arg.call && arg.apply)) {
                arg();
                delete arg;
            }
        }
        return oAddClass.apply(this, arguments);
    }

    /*-----------------------------------CALL BACK FORM TYPING TEXT -------------------------------------*/
    function calltxt(callback) {
        var node = document.getElementById('text_animate'),
            textContent = node.textContent;
        // debugger;
        var i = 0;
        var txt = textContent;
        var speed = 150;
        // debugger;
        textanimate();

        function textanimate() {
            // debugger;
            if (i < txt.length) {
                // debugger;
                document.getElementById("display_txtct").innerHTML += txt.charAt(i);
                i++;
                // debugger;
                setTimeout(textanimate, speed);

                if (i == txt.length) {
                    if (callback() === 'function') // kiểm tra callback là function hay kh
                    {
                        return true;
                    }
                }
            }

        }

    }

    /*----------------------------------- FORM TYPING TEXT -------------------------------------*/
    $(".text1").addClass("text1block");
    fadein();

    swiper.on('slideChangeTransitionStart', function(e) {
        // swiper.slideNext(0, 6000, false);   
        var testactive = swiper.realIndex;
        // if (jQuery(event.target)) {
        if (testactive == 0) {
            $(".text1").addClass("text1block");
            fadein();
            reset_form(); // xóa class của testactive = 1
            reset_slide_two();
        } else if (testactive == 1) {
            $(".form-one").addClass("animate_form");
            calltxt(function() {
                content_form_fadein();
            });
            fadeout(); // xóa class của testactive = 0
            reset_slide_two();
        } else if (testactive == 2) {

            slide_two();
            fadeout(); // xóa class của testactive = 0
            reset_form();
        }

        // }
    });
    /*----------------------------------------------- CLICK ACTIVE NEXT - PREV ------------------------------------*/

    $(document).on('click', ".swiper-button-prev", function(e) {

        // if (!jQuery(event.target).closest('.slideDetaill').length) {
        //     alert("prev");
        // }
        $(".swiper-button-prev").toggleClass("active-nextprev");
        if ($(".swiper-button-next").hasClass("active-nextprev")) {
            $(".swiper-button-next").toggleClass("active-nextprev");
        }

    });

    $(document).on('click', ".swiper-button-next", function(e) {

        // if (!jQuery(event.target).closest('.slideDetaill').length) {
        //     alert("next");
        // }
        $(".swiper-button-next").toggleClass("active-nextprev");
        if ($(".swiper-button-prev").hasClass("active-nextprev")) {
            $(".swiper-button-prev").toggleClass("active-nextprev");
        }

    });


    /*----------------------------------------------FUNCTION FADE IN , FADE OUT -------------------------------------*/

    function fadein() {


        $(".block1").fadeIn(3000, function() {

            $(".block2").fadeIn(500, function() {

                $(".block3").fadeIn(400);

            });
        });

    }

    function fadeout() {
        $(".block3").fadeOut(500, function() {

            $(".block2").fadeOut(500, function() {

                $(".block1").fadeOut(500, function() {


                    $(".text1").removeClass("text1block");


                });

            });

        });

    }

    function reset_form() {


        $(".animate_form").animate({ opacity: '1' }, 1000, function() {
            document.getElementById("display_txtct").innerHTML = "";

            $(".p1").animate({ opacity: '0' }, 100, function() {
                $(".p2").animate({ opacity: '0' }, 100, function() {
                    $(".month").animate({ opacity: '0' }, 1000, function() {
                        $(".form-one").removeClass("animate_form");
                        $(".btn_bride").removeClass("animate_btn");
                    });
                });
            });
        });

    }

    function content_form_fadein() {


        $(".animate_form").animate({ opacity: '1' }, 1000, function() {
            $(".p1").animate({ opacity: '1' }, 1000, function() {
                $(".p2").animate({ opacity: '1' }, 1000, function() {
                    $(".month").animate({ opacity: '1' }, 1000, function() {
                        $(".btn_bride").addClass("animate_btn");
                    });
                });
            });
        });
    }

    function slide_two() {
        $(".text_im1").animate({ right: '50vw', opacity: '1' }, 2000);
        $(".text_im2").animate({ left: '40vw', opacity: '1' }, 2000);
        $(".fa-heart").animate({ top: '-40vh', opacity: '1' }, 2000);
    }

    function reset_slide_two() {
        $('.text_im1').removeAttr('style');
        $('.text_im2').removeAttr('style');
        $('.fa-heart').removeAttr('style');
    }
});