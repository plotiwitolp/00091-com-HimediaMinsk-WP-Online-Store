$(document).ready(function () {
  // show/hide menu & filter
  $(document).on('click', (e) => {
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
      if ($(eventTarget).hasClass('widget-title')) {
        $(eventTarget).siblings('.woocommerce-widget-layered-nav-list').toggle();
      }
    }
    toggleProductsFilterCat(e.target);
    // add/remove active class products-filter-cat__li span
    function toggleProductsFilterCatLiSpan(eventTarget) {
      if ($(eventTarget).hasClass('widget-title')) {
        if ($(eventTarget).hasClass('products-filter-cat__li_active')) {
          $(eventTarget).removeClass('products-filter-cat__li_active');
        } else {
          $(eventTarget).addClass('products-filter-cat__li_active');
        }
      }
    }
    toggleProductsFilterCatLiSpan(e.target);
    if ($(e.target).hasClass('remove')) {
      setTimeout(function () {
        location.reload();
      }, 1500);
    }
  });
  // show/hide filter
  $($('.woocommerce-widget-layered-nav-list')).each(function () {
    if ($(this).children('li').hasClass('chosen')) {
      $(this).show();
      $(this).siblings('h2').addClass('products-filter-cat__li_active');
    }
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
  // transferring tabs to the price in the product card
  $('.product > .woocommerce-tabs').appendTo($('.product > .summary'));
  // tabs in the product card
  $('.wc-tabs li:last-child').removeClass('active');
  $('.wc-tabs li:first-child').addClass('active');
  $('.wc-tabs li:last-child #tab-description').css('display', 'none');
  $('.wc-tabs li:first-child #tab-description').css('display', 'block');
  // product card gallery
  $('.woocommerce-product-gallery__image').bind('click', false);
  $('.woocommerce-product-gallery img').click(function () {
    let getvalue = $(this).attr('srcset').split(',')[3];
    let getvalueSrc = getvalue.split(' ')[1];
    $('img.wp-post-image').removeAttr('src');
    $('img.wp-post-image').removeAttr('srcset');
    $('img.wp-post-image').attr('src', getvalueSrc);
  });
  // end (document ready)
});
