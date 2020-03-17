<div class="social-nav">
  <a href="{{ the_permalink() }}" id="copy-link" data-url="{{ the_permalink() }}" data-toggle="tooltip" data-placement="top" title="{{ __('Copiar enllaç', 'sage') }}" data-clipboard-text="{{ the_permalink() }}">
    <i class="far fa-link"></i>
  </a>
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ the_permalink() }}" target="_blank" rel="noopener">
    <i class="fab fa-facebook"></i>
    <span class="sr-only">{{ __('Comparteix per Facebook', 'sage') }}</span>
  </a>
  <a href="https://twitter.com/intent/tweet?text={{ the_title() }} {{ the_permalink() }}" target="_blank" rel="noopener">
    <i class="fab fa-twitter"></i>
    <span class="sr-only">{{ __('Comparteix per Twitter', 'sage') }}</span>
  </a>
  <a href="whatsapp://send?text=http://www.example.com">
    <i class="fab fa-whatsapp"></i>
    <span class="sr-only">{{ __('Comparteix per Whatsapp', 'sage') }}</span>
  </a>
  <a href="mailto:destinatari@exemple.com?&subject={{ the_title() }}&body={{ the_permalink() }}">
    <i class="far fa-envelope"></i>
    <span class="sr-only">{{ __('Comparteix per e-mail', 'sage') }}</span>
  </a>
</div>
