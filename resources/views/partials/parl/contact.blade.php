<div class="card contact-nav">
  <div class="contact-nav-name">
    Oficina <br>Parlamentaria 
  </div>
  <div class="contact-nav-address">
    <a class="contact-nav-link" href="#" target="_blank" rel="noopener">
      <i class="far fa-home"></i> Carrer Corts Fals, 123
    </a>
    <a class="contact-nav-link" href="#" target="_blank" rel="noopener">
      <i class="far fa-phone"></i> 96 218 1892
    </a>
    <a class="contact-nav-link" href="#" target="_blank" rel="noopener">
      <i class="far fa-envelope"></i> corts@compromis.net
    </a>
  </div>
  <div class="contact-nav-network">
    @if($local->twitter)
      <a class="contact-nav-link" href="https://twitter.com/{{ $local->twitter }}" target="_blank" rel="noopener">
        <i class="fab fa-twitter"></i> {{ '@' . $local->twitter }}
      </a>
    @endif
    @if($local->facebook)
    <a class="contact-nav-link" href="{{ $local->facebook }}" target="_blank" rel="noopener">
      <i class="fab fa-facebook"></i> Facebook
    </a>
    @endif
    @if($local->facebook)
      <a class="contact-nav-link" href="https://instagram.com/{{ $local->instagram }}" target="_blank" rel="noopener">
        <i class="fab fa-instagram"></i> {{ '@' . $local->instagram }}
      </a>
    @endif
  </div>
    <a class="contact-nav-button" href="/contacta">
      <i class="far fa-paper-plane"></i> {{ __('Contacta', 'sage') }}
    </a>
</div>
