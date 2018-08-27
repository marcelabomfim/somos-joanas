(function(){
  "use strict";

  jQuery(document).ready(function () {
    var swiperQuemSomos = new Swiper('#swiper-quemsomos', {
      autoplay: false,
      loop: true,
      pagination: {
        el: '#swiper-quemsomos .swiper-pagination',
      },
    });

    var swiperProfissionais = new Swiper('#swiper-profissionais', {
      autoplay: false,
      loop: true,
      pagination: {
        el: '#swiper-profissionais .swiper-pagination',
      },
    });

    jQuery('.profissionais__item').click(function () {
      var _this = jQuery(this);
      var title = _this.find('.profissionais__item-title').html();
      if (!_this.hasClass('ativo')) {
        jQuery('.profissionais__item.ativo').removeClass('ativo');
        _this.addClass('ativo');

        jQuery('.profissionais__ativo-title').html(title + '<span></span>');
      }
    });
  });

})(); 