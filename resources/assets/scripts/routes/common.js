import Vue from 'vue';
import localNetwork from '../components/local-network.js';

export default {
  init() {
    // Nav
    const brandLocal = $('.brand-local');

    $(document).scroll(function() {
      if ($(document).scrollTop() >= 200) {
        brandLocal.removeClass('brand-local-hidden');
      } else if (!$('body').hasClass('nav-open')) {
        brandLocal.addClass('brand-local-hidden');
      }
    });

    $('.drawer-nav-toggle, .banner-overlay').on('click', function (e) {
      e.preventDefault();
      const body = $('body');
      const drawerNav = $('.drawer-nav');
      const brandLocal = $('.brand-local');
      const toggle = $('.drawer-nav-toggle');
      const expanded = toggle.attr('aria-expanded') === 'true';

      drawerNav.slideToggle().toggleClass('open');
      body.toggleClass('nav-open');
      toggle.attr('aria-expanded', !expanded);

      if (!expanded) {
        brandLocal.removeClass('brand-local-hidden');
      } else if ($(document).scrollTop() < 200) {
        brandLocal.addClass('brand-local-hidden');
      }
    });

    // Archive
    $('#cat').on('change', (event) => {
      const category = event.target.value;
      if (category > 0) {
        window.location = '/?cat=' + category;
      } else {
        window.location = '/arxiu-de-noticies';
      }
    });

    $('#months').on('change', (event) => {
      const url = event.target.value;
      if (url) {
        window.location = url;
      } else {
        window.location = '/arxiu-de-noticies';
      }
    });

    // Local network
    new Vue(localNetwork);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
