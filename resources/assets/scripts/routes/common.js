import Vue from 'vue';
import localNetwork from '../components/local-network.js';

export default {
  init() {
    // Nav
    const brand = $('.brand');
    const isSingle = $('body').hasClass('single') || $('body').hasClass('page');

    $(document).scroll(function() {
      if ($(document).scrollTop() >= 200) {
        brand.removeClass('brand-compact');
      } else if (!$('body').hasClass('nav-open') && !isSingle) {
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
      const isSingle = $('body').hasClass('single') || $('body').hasClass('page');

      drawerNav.slideToggle().toggleClass('open');
      body.toggleClass('nav-open');
      toggle.attr('aria-expanded', !expanded);

      if (!expanded) {
        brand.removeClass('brand-compact');
      } else if ($(document).scrollTop() < 200 && !isSingle) {
        brand.addClass('brand-compact');
      }
    });

    // Archive
    $('#cat').on('change', (event) => {
      const category = event.target.value;
      if (category > 0) {
        window.location = '/?cat=' + category;
      } else {
        window.location = '/noticies';
      }
    });

    $('#months').on('change', (event) => {
      const url = event.target.value;
      if (url) {
        window.location = url;
      } else {
        window.location = '/noticies';
      }
    });

    // Local network
    new Vue(localNetwork);
  },
  finalize() {
    $(document).ready(function () {
      let keys = [];
      const codes = {
        'M,A,D,E,I,N,Q,U,A,R,A,N,T,I,N,E': 'nyw6oDF_wJM',
        'N,E,W,O,L,T,R,A,N,O,W': 'g2tk7ethx1Q',
      };

      $(document).keydown(function (e) {
        keys.push(e.key);
        Object.keys(codes).forEach(code => {
          if (keys.toString().indexOf(code) >= 0) {
            $('body').after(`
              <div style="position:fixed;top:0;left:0;bottom:0;right:0;z-index:10000">
                <iframe width="100%" height="100%" src="//youtube.com/embed/${codes[code]}/?autoplay=1" frameborder="0"></iframe>
              </div>
            `);
            keys = [];
          }
        })
      });
    });
  },
};
