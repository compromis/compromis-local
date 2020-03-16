import ClipboardJS from 'clipboard'

export default {
  init() {
    $('[data-toggle="tooltip"]').tooltip();

    $('#copy-link').on('click', function (e) {
      e.preventDefault();
      $(this).attr('data-original-title', 'Enllaç copiat!').tooltip('show');
    });

    $('#copy-link').on('mouseout', function () {
      $(this).attr('data-original-title', 'Copiar enllaç');
    });

    new ClipboardJS('#copy-link');
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};


