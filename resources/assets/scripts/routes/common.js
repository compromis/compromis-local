export default {
  init() {
    $(document).scroll(function() {
      if ($(document).scrollTop() >= 200) {
        $('.brand-local').removeClass('brand-local-hidden');
      } else {
        $('.brand-local').addClass('brand-local-hidden');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
