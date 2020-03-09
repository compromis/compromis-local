import Vue from 'vue';
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

    new Vue({
      el: '#locals',
      data: {
        locals: [],
        filterValue: '',
        filteredResults: [],
      },
      mounted () {
        this.fetchLocals();
      },
      watch: {
        filterValue: function () {
          this.filter();
        },
      },
      methods: {
        fetchLocals () {
          fetch('https://compromis.net/common/json_municipis.php')
            .then(response => { return response.json() })
            .then(data => { this.locals = data });
        },
        filter () {
          console.log(this.filterValue);
        },
      },
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
