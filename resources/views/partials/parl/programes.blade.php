@if(isset($programes[$local->ref]))
  <h2>{{ __('Programes electorals', 'sage') }}</h2>

  <ul class="programes card-list">
    @foreach($programes[$rels[$local->ref]] as $programa)
      <li class="programa">
        <a href="{{ $programa['url'] }}" target="_blank">
          <img src="{{ $programa['image'] }}" title="{{ $programa['title'] }}" loading="lazy" data-toggle="tooltip" data-placement="bottom" alt="" />
        </a>
      </li>
    @endforeach
  </ul>

  <a href="https://compromis.net/info/transparencia/idees-i-valors/" class="apple-link">
    <span>{{ __('Tots els programes de Compromís', 'sage') }}</span>
  </a>
@endif
