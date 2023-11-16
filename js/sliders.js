
const sliderNavigation = new Swiper('.slider-type1', {
    // Optional parameters
    direction: 'horizontal',
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });


const sliderPagination = new Swiper('.slider-type2', {
  
  autoplay: false,
  loop:true,
  direction: 'horizontal',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets'
  }


});