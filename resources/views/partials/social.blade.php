<div class="social-nav">
  <a href="{{ get_the_permalink() }}" id="copy-link" data-url="{{ get_the_permalink() }}" data-toggle="tooltip" data-placement="top" title="{{ __('Copiar enllaç', 'sage') }}" data-clipboard-text="{{ the_permalink() }}">
    <i class="far fa-link"></i>
  </a>
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ get_the_permalink() }}" target="_blank" rel="noopener">
    <i class="fab fa-facebook"></i>
    <span class="sr-only">{{ __('Comparteix per Facebook', 'sage') }}</span>
  </a>
  <a href="https://twitter.com/intent/tweet?text={{ get_the_title() }} {{ get_the_permalink() }}" target="_blank" rel="noopener">
    <i class="fab fa-twitter"></i>
    <span class="sr-only">{{ __('Comparteix per Twitter', 'sage') }}</span>
  </a>
  <a href="whatsapp://send?text={{ get_the_permalink() }}">
    <i class="fab fa-whatsapp"></i>
    <span class="sr-only">{{ __('Comparteix per Whatsapp', 'sage') }}</span>
  </a>
  <a href="mailto:destinatari@exemple.com?&subject={{ get_the_title() }}&body={{ get_the_permalink() }}">
    <i class="far fa-envelope"></i>
    <span class="sr-only">{{ __('Comparteix per e-mail', 'sage') }}</span>
  </a>
  <a href="{{ get_the_permalink() }}" class="hidden" id="share-button" data-toggle="tooltip" data-placement="top" title="{{ __('Comparteix', 'sage') }}" data-title="{{ get_the_title() }}">
    <i class="far fa-share-square"></i>
    <span class="sr-only">{{ __('Altres serveis', 'sage') }}</span>
  </a>
</div>
