'use strict';

/**************************************************
slick
**************************************************/
$(document).ready(function() {
    $('.slider').slick({
        // setting-name:setting-value
        autoplay: true,
        adaptiveHeight: true,
        arrows: false,
        dots: true,
        infinite: true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 767,
                setting: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                }
            },
        ],
        slidesToShow: 1,
        slidesToScroll: 1,
    });
});