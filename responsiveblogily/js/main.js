$ = jQuery;

/**
 * Event function 
 * */

let cont_group_slider = $('#group_slider');

cont_group_slider.slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
});