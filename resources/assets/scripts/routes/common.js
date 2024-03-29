import Vue from 'vue';
import localNetwork from '../components/local-network.js';
import darkModeSwitch from '../components/dark-mode-switch.js';

export default {
  init() {
    $('[data-toggle="tooltip"]').tooltip();

    // Nav
    const brand = $('.brand');
    const nav = $('.banner-container');
    const isSingle = $('body').hasClass('single') || ($('body').hasClass('page') && !$('body').hasClass('home'));

    $(document).scroll(function() {
      const scrollTop = $(document).scrollTop()

      if (scrollTop >= 200) {
        brand.removeClass('brand-compact');
      } else if (!$('body').hasClass('nav-open') && !isSingle) {
        brand.addClass('brand-compact');
      }

      nav.toggleClass('banner-container--scrolled', scrollTop > 24)
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
    // Dark mode switch
    new Vue({ el: '#dark-mode-switch', ...darkModeSwitch });
    new Vue({ el: '#dark-mode-switch-footer', ...darkModeSwitch });
  },
  finalize() {
    $(document).ready(function () {
      let keys = [];
      const codes = {
        // lest we forget, 2020 sucked
        'M,A,D,E,I,N,Q,U,A,R,A,N,T,I,N,E': '//youtube.com/embed/nyw6oDF_wJM/?autoplay=1',
        // the veep theme song on every compromís website
        'N,E,W,O,L,T,R,A,N,O,W': '//youtube.com/embed/g2tk7ethx1Q/?autoplay=1',
        // in honor of all the doggos from unsplash who tested this site
        'H,E,R,E,B,E,D,O,G,S': '//source.unsplash.com/featured/?dog',
      };

      $(document).keydown(function (e) {
        keys.push(e.key);
        Object.keys(codes).forEach(code => {
          if (keys.toString().indexOf(code) >= 0) {
            $('body').after(`
              <div style="position:fixed; top:0; left:0; bottom:0; right:0; z-index: 10000;">
                <iframe width="100%" height="100%" src="${codes[code]}" frameborder="0"></iframe>
              </div>
            `);
            keys = [];
          }
        })
      });
    });
  },
};
