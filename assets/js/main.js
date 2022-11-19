$(document).ready(function () {
  //
  // show/hide menu & filter
  $(document).on('click', (e) => {
    //
    // show/hide navigation__catalog
    function toggleNavigationCatNav(eventTarget) {
      const btnNavCat1 = $('.navigation__catalog-btn img:nth-child(1)');
      const btnNavCat2 = $('.navigation__catalog-btn img:nth-child(2)');
      const navigationCatNav = $('.navigation__cat-nav');
      let isParent = $(eventTarget).closest('.navigation__cat-nav').length;

      if ($(e.target).hasClass('navigation__btn')) {
        if (btnNavCat1.hasClass('navigation_active')) {
          btnNavCat1.removeClass('navigation_active');
          btnNavCat2.addClass('navigation_active');
          navigationCatNav.hide();
        } else {
          btnNavCat1.addClass('navigation_active');
          btnNavCat2.removeClass('navigation_active');
          navigationCatNav.show();
        }
      } else if (!isParent) {
        navigationCatNav.hide();
        btnNavCat1.removeClass('navigation_active');
        btnNavCat2.addClass('navigation_active');
      }
    }
    toggleNavigationCatNav(e.target);

    // show/hide products-filter-cat
    function toggleProductsFilterCat(eventTarget) {
      if ($(eventTarget).parents().hasClass('products-filter-cat__li')) {
        $(eventTarget).siblings('.products-filter-sub').toggle();
      }
    }
    toggleProductsFilterCat(e.target);

    // add/remove active class products-filter-cat__li span
    function toggleProductsFilterCatLiSpan(eventTarget) {
      if ($(eventTarget).hasClass('products-filter-cat__span')) {
        if ($(eventTarget).hasClass('products-filter-cat__li_active')) {
          $(eventTarget).removeClass('products-filter-cat__li_active');
        } else {
          $(eventTarget).addClass('products-filter-cat__li_active');
        }
      }
    }
    toggleProductsFilterCatLiSpan(e.target);

    // add/remove active class products-filter-sub__li span
    function toggleProductsFilterSubLiSpan(eventTarget) {
      if ($(eventTarget).hasClass('products-filter-sub__span')) {
        if ($(eventTarget).hasClass('products-filter-sub__li_active')) {
          $(eventTarget).removeClass('products-filter-sub__li_active');
        } else {
          $(eventTarget).addClass('products-filter-sub__li_active');
        }
      }
    }
    toggleProductsFilterSubLiSpan(e.target);
    //
    // end (document click)
  });

  // reset filter
  $('.products-filter__reset').on('click', function () {
    if ($('.products-filter-cat__span').hasClass('products-filter-cat__li_active')) {
      $('.products-filter-cat__span').removeClass('products-filter-cat__li_active');
      $('.products-filter-sub').hide();
    }
    if ($('.products-filter-sub__span').hasClass('products-filter-sub__li_active')) {
      $('.products-filter-sub__span').removeClass('products-filter-sub__li_active');
    }
  });

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

  //
  // end (document ready)
});
