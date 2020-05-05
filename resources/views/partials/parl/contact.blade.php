<div class="card contact-nav">
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
  <a class="contact-nav-link" href="/contacta">
    <i class="far fa-paper-plane"></i> {{ __('Contacta', 'sage') }}
  </a>
</div>
