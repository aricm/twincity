(function($) {

    // Left/right aligned containers padding offset
    // to keep things lined up
    function doResizeActions() {

        var nav         = $('#mainNav');
        var padding     = $("#refContainer").offset().left;
        var windowWidth = window.innerWidth;

        if(windowWidth > 1199) {
            $(".container-r .f-info").css('padding-left', padding + 'px');
            $(".container-l .f-info").css('padding-right', padding + 'px');
        } else {
            $(".container-r .f-info").css('padding-left', '24px');
            $(".container-l .f-info").css('padding-right', '24px');
            $(".container-r .f-home .f-info").css('padding-left', '16px');
        }


        // Mobile or desktop nav
        if( windowWidth < 1050 ) {
            $(nav).removeClass('main-nav').addClass('mobile-nav');
        } else {
            $(nav).addClass('main-nav').removeClass('mobile-nav');
        }

        return true;

    }

    function onHashChange() {
        if(window.location.hash) {
            var hash = window.location.hash;
            $('body').addClass('sticky-header');
            setTimeout(function() {
                console.log(hash);
                var scrollTo = $(hash).offset().top - 70;
                $('body').animate({
                    scrollTop: scrollTo
                }, 'slow');
            }, 500);
        }
    }

    $(document).ready(function() {
        doResizeActions();
        onHashChange();
    });

    $(window).on('resize', function() {
        doResizeActions();
    });

    $(window).on('hashchange', function() {
        onHashChange();
    });

    $('.more-cory').on('click', function() {
        var more = $('.more-cory-text');
        $(more).toggleClass('open');
        // console.log($(this).text());
        if( $(more).hasClass('open') ) {
            $(this).text('Show less...');
        } else {
            $(this).text('Read more...');
        }
    });

    $(document).ready(function() {
        $('#testimonials').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            fade: true,
            prevArrow: $(".slick-testimonial-prev"),
            nextArrow: $(".slick-testimonial-next")
        }).show();

        $('.charity-carousel').slick({
            infinite: true,
            variableWidth: true,
            centerMode: true,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 6000,
            cssEase: 'linear',
            arrows: false
        }).show();

        $('#productLine').slick({
            infinite: true,
            slidesToShow: 4,
            variableWidth: true,
            slidesToScroll: 1,
            autoplay: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            prevArrow: $(".slick-product-prev"),
            nextArrow: $(".slick-product-next")
        }).show();

    });

})(jQuery);
