import Vue from 'vue';
import localNetwork from '../components/local-network.js';

export default {
  init() {
    // Nav
    const brand = $('.brand');

    $(document).scroll(function() {
      if ($(document).scrollTop() >= 200) {
        brand.removeClass('brand-compact');
      } else if (!$('body').hasClass('nav-open')) {
        brand.addClass('brand-compact');
      }
    });

    $('.drawer-nav-toggle, .banner-overlay').on('click', function (e) {
      e.preventDefault();
      const body = $('body');
      const drawerNav = $('.drawer-nav');
      const brand = $('.brand');
      const toggle = $('.drawer-nav-toggle');
      const expanded = toggle.attr('aria-expanded') === 'true';

      drawerNav.slideToggle().toggleClass('open');
      body.toggleClass('nav-open');
      toggle.attr('aria-expanded', !expanded);

      if (!expanded) {
        brand.removeClass('brand-compact');
      } else if ($(document).scrollTop() < 200) {
        brand.addClass('brand-compact');
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
