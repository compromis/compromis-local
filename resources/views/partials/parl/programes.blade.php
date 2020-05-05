@if(isset($programes[$local->ref]))
  <h2>{{ __('Programes electorals', 'sage') }}</h2>

  <ul class="programes">
    @foreach($programes[$rels[$local->ref]] as $programa)
      <li class="programa">
        <a href="{{ $programa['url'] }}" target="_blank">
          <img src="{{ $programa['image'] }}" title="{{ $programa['title'] }}" alt="" />
        </a>
      </li>
    @endforeach
  </ul>

  <a href="https://compromis.net/info/transparencia/idees-i-valors/" class="apple-link">
    <span>{{ __('Tots els programes de Compromís', 'sage') }}</span>
  </a>
@endif
