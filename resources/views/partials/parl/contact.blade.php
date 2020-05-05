<div class="card contact-nav">
  <div class="contact-nav-name">
    Oficina <br>Parlamentaria 
  </div>
  <div class="contact-nav-address">
  <a class="contact-nav-link" href="https://www.google.com/maps/search/{{ $local->address_seu }}" target="_blank" rel="noopener">
      <i class="far fa-home"></i> {{ $local->address_seu }}
    </a>
    <a class="contact-nav-link" href="tel:{{ str_replace(' ', '', $local->telf) }}" target="_blank" rel="noopener">
      <i class="far fa-phone"></i> {{ $local->telf }}
    </a>
    <a class="contact-nav-link" href="mailto:{!! antispambot($local->email) !!}" target="_blank" rel="noopener">
      <i class="far fa-envelope"></i> {!! antispambot($local->email) !!}
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
      <i class="fab fa-facebook"></i> Compromís {{ $local->name }}
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
