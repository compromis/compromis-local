@php
  $localInfo = App::get_localinfo();
@endphp
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
        <p class="footer-address-title"><strong>Compromís per {!! $localInfo->name !!}</strong></p>
        <ul>
          @if($localInfo->address_grup)
            <li><i class="far fa-building"></i> <strong>Grup municipal</strong>: {!! $localInfo->address_grup !!}</li>
          @endif
          @if($localInfo->address_seu)
            <li><i class="far fa-home"></i> <strong>Seu local</strong>: {!! $localInfo->address_seu !!}</li>
          @endif
          @if($localInfo->email)
            <li><i class="far fa-envelope"></i> <a href="mailto:{!! $localInfo->email !!}">{!! $localInfo->email !!}</a></li>
          @endif
          @if($localInfo->telf)
            <li><i class="far fa-phone"></i> {!! $localInfo->telf !!}</li>
          @endif
        </ul>
      </div>
    </section>
  </div>
</footer>
