import ClipboardJS from 'clipboard'

export default {
  init() {
    $('#copy-link').on('click', function (e) {
      e.preventDefault();
      $(this).attr('data-original-title', 'Enllaç copiat!').tooltip('show');
    });

    $('#copy-link').on('mouseout', function () {
      $(this).attr('data-original-title', 'Copiar enllaç');
    });

    new ClipboardJS('#copy-link');

    $('#share-button').on('click', function (e) {
      e.preventDefault()
      if (navigator.share) {
        navigator.share({
          title: $(this).data('title'),
          text: $(this).data('title'),
          url: $(this).attr('href'),
        });
      }
    });

    $(document).ready(function () {
      if (navigator.share) {
        $('#share-button').removeClass('hidden')
      }
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};


