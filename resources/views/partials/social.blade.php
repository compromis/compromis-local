<div class="social-nav">
  <a href="{{ the_permalink() }}" id="copy-link" data-url="{{ the_permalink() }}" data-toggle="tooltip" data-placement="top" title="{{ __('Copia enllaç', 'sage') }}" data-clipboard-text="{{ the_permalink() }}">
    <i class="far fa-link"></i>
  </a>
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ the_permalink() }}" target="_blank" rel="noopener" data-toggle="tooltip" data-placement="top" title="{{ __('Comparteix a Facebook', 'sage') }}">
    <i class="fab fa-facebook"></i>
  </a>
  <a href="https://twitter.com/intent/tweet?text={{ the_title() }} {{ the_permalink() }}" target="_blank" rel="noopener" data-toggle="tooltip" data-placement="top" title="{{ __('Comparteix a Twitter', 'sage') }}">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="whatsapp://send?text=http://www.example.com" data-toggle="tooltip" data-placement="top" title="{{ __('Comparteix a Whatsapp', 'sage') }}">
    <i class="fab fa-whatsapp"></i>
  </a>
  <a href="mailto:destinatari@exemple.com?&subject={{ the_title() }}&body={{ the_permalink() }}" data-toggle="tooltip" data-placement="top" title="{{ __('Comparteix per e-mail', 'sage') }}">
    <i class="far fa-envelope"></i>
  </a>
</div>
