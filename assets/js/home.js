$(document).ready(function () {
  // show more
  function doShowMore() {
    const productsGoodsCart = document.querySelectorAll('.products-goods-catalog .products-goods-cart');
    const productsShowMore = document.querySelector('.products-goods-catalog__show-more');
    for (let i = 3; i < productsGoodsCart.length; i++) {
      productsGoodsCart[i].style.display = 'none';
    }

    let countD = 3;
    productsShowMore.addEventListener('click', function () {
      const productsGoodsCart = document.querySelectorAll('.products-goods-catalog .products-goods-cart');
      countD += 3;
      if (countD <= productsGoodsCart.length) {
        for (let i = 0; i < countD; i++) {
          productsGoodsCart[i].style.display = 'block';
        }
      }
    });
  }
  doShowMore();

  // our clients slider
  function doClientsSlider() {
    $('.our-clients-slider__track').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      variableWidth: true,
      infinite: true,
      prevArrow: `<span class="our-clients-slider__prev"></span>`,
      nextArrow: `<span class="our-clients-slider__next"></span>`,
    });
    $('.our-clients-slider__prev').appendTo($('.our-clients-slider__remote'));
    $('.our-clients-slider__next').appendTo($('.our-clients-slider__remote'));
  }
  doClientsSlider();
});
