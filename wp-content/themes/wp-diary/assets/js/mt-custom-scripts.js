jQuery(document).ready(function($) {

    "use strict";

    $(function() {
        $(".mt-sidebar-menu-toggle").on("click", function(e) {
            $(".sidebar-header").toggleClass("activate");
        });
        $('.sidebar-header').on("click", function(e) {
            if ( $(e.target).parents().hasClass('sticky-header-sidebar') ){
                $(".sidebar-header").addClass("activate");
            } else {
                $(".sidebar-header").removeClass("activate");
            }
        });
    });

    $('.mt-slider').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        centerMode: true,
        nextArrow: ' <span class="slick-next">Next <i class="fa fa-arrow-right"></i>   </span>',
        prevArrow: ' <span class="slick-prev"><i class="fa fa-arrow-left"></i> Previous</span>',
        centerPadding: '360px',
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 1,
                infinite: true,
                centerPadding: '200px'
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                infinite: true,
                centerPadding: '0px'
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });

    $('.mt-gallery-slider').slick({
        autoplay: false,
        infinite: true,
        nextArrow: ' <span class="slick-next"> <i class="fa fa-arrow-right"></i>   </span>',
        prevArrow: ' <span class="slick-prev"><i class="fa fa-arrow-left"></i></span>',
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    var grid = document.querySelector(
            '.wp-diary-content-masonry'
        ),
        masonry;

    if (
        grid &&
        typeof Masonry !== undefined &&
        typeof imagesLoaded !== undefined
    ) {
        imagesLoaded( grid, function( instance ) {
            masonry = new Masonry( grid, {
                itemSelector: '.hentry'
            } );
        } );
    }

    /**
     * Header Search script
     */
    $('.mt-menu-search .mt-search-icon').click(function() {
        $('.mt-menu-search .mt-form-wrap').toggleClass('search-activate');
    });

    $('.mt-menu-search .mt-form-close').click(function() {
        $('.mt-menu-search .mt-form-wrap').removeClass('search-activate');
    });


    /**
     * Settings about WOW animation
     */
    var wowOption = wpdiaryObject.wow_effect;
    if( wowOption === 'on' ) {
        new WOW().init();
    }

    /**
     * Settings about sticky menu
     */
    var stickyOption = wpdiaryObject.menu_sticky;
    if( stickyOption === 'on' ) {
        var wpAdminBar = $('#wpadminbar');
        if ( wpAdminBar.length ) {
          $(".main-menu-wrapper").sticky({topSpacing:wpAdminBar.height()});
        } else {
          $(".main-menu-wrapper").sticky({topSpacing:0});
        }
    }

    /**
     * Scroll To Top
     */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            $('#mt-scrollup').fadeIn('slow');
        } else {
            $('#mt-scrollup').fadeOut('slow');
        }
    });
    $('#mt-scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    
    /**
     * Responsive
     */
    $('.menu-toggle').click(function(event) {
        $('#site-navigation').slideToggle('slow');
    });

    /**
     * responsive sub menu toggle
     */
    $('#site-navigation .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');
    $('#site-navigation .page_item_has_children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');
    

    $('#site-navigation .sub-toggle').click(function() {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        jQuery(this).parent('.page_item_has_children').children('ul.children').first().slideToggle('1000');
        $(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
    });

    /**
     * pretty photo in gallery item
     */
    var pretty_photo = wpdiaryObject.pretty_photo;
    if( pretty_photo === 'on' ){
        $('.gallery-item a').each(function() {
            var galId = $(this).parents().eq(2).attr('id');
            $(this).attr('rel', 'prettyPhoto['+galId+']');
        });

        /**
         * Gutenberg compatible pretty photo in gallery item
         */
        $('.blocks-gallery-item a').each(function() {
            $(this).attr('rel', 'prettyPhoto[]');
        });

        /*
        * pretty photo
        */
        $("a[rel^='prettyPhoto']").prettyPhoto({
            show_title: false,
            deeplinking: false,
            social_tools: ''
        });
    }
});