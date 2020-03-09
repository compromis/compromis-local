import Vue from 'vue';
import localNetwork from '../components/local-network.js';
import ClipboardJS from 'clipboard'

export default {
  init() {
    const brandLocal = $('.brand-local');

    $(document).scroll(function() {
      if ($(document).scrollTop() >= 200) {
        brandLocal.removeClass('brand-local-hidden');
      } else if (!$('body').hasClass('nav-open')) {
        brandLocal.addClass('brand-local-hidden');
      }
    });

    $('.drawer-nav-toggle').on('click', function (e) {
      e.preventDefault();
      const body = $('body');
      const drawerNav = $('.drawer-nav');
      const brandLocal = $('.brand-local');
      const toggle = $(this);
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

    $('[data-toggle="tooltip"]').tooltip();

    $('#copy-link').on('click', function (e) {
      e.preventDefault();
      $(this).attr('data-original-title', 'Enllaç copiat!').tooltip('show');
    });

    $('#copy-link').on('mouseout', function () {
      $(this).attr('data-original-title', 'Copiar enllaç');
    });

    new ClipboardJS('#copy-link');

    new Vue(localNetwork);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
