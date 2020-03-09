@php
  $localInfo = App::get_localinfo();
@endphp
<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp

    <div class="footer">
      <a href="https://compromis.net">
        <img src="https://compromis.net/wp-content/themes/Compromis/images/logo-mono.svg" alt="Compromís" />
      </a>
      <div class="">
        <p>{{ date('Y') }} - Compromís per {!! $localInfo->name !!}</p>
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
    </div>
  </div>
</footer>
