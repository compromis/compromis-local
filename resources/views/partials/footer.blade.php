<footer class="footer">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp

    <section class="footer-info">
      <div class="footer-logo">
        <a href="https://compromis.net">
          <img src="https://compromis.net/wp-content/themes/Compromis/images/logo-mono.svg" alt="Compromís" />
        </a>
      </div>
      <div class="footer-address">
        <p class="footer-address-title"><strong>{{ get_bloginfo('name') }}</strong></p>
        <ul>
          @if($local->address_seu)
            <li><i class="far fa-home"></i> <strong>Seu local</strong>: {{ $local->address_seu }}</li>
          @endif
          @if($local->address_grup)
            <li><i class="far fa-building"></i> <strong>Grup municipal</strong>: {{ $local->address_grup }}</li>
          @endif
          @if($local->email)
            <li><i class="far fa-envelope"></i> <a href="mailto:{!! antispambot($local->email) !!}">{!! antispambot($local->email) !!}</a></li>
          @endif
          @if($local->telf)
            <li><i class="far fa-phone"></i> {{ $local->telf }}</li>
          @endif
          @if($local->facebook)
            <li>
                <i class="fab fa-facebook"></i>
                <a href="{{ $local->facebook }}" target="_blank" rel="noopener">Compromís {{ $local->name }}</a>
              </a>
            </li>
          @endif
          @if($local->twitter)
            <li>
              <i class="fab fa-twitter"></i>
              <a href="https://twitter.com/{{ $local->twitter }}" target="_blank" rel="noopener">
                {{ '@' . $local->twitter }}</li>
              </a>
            </li>
          @endif
          @if($local->instagram)
          <li>
            <i class="fab fa-instagram"></i>
            <a href="https://instagram.com/{{ $local->instagram }}" target="_blank" rel="noopener">
              {{ '@' . $local->instagram }}</li>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </section>
  </div>
</footer>
