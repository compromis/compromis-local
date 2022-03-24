<div class="brand {{ is_single() || (is_page() && !is_front_page()) ? '' : 'brand-compact' }}"">
  <a class="brand-logo" href="https://compromis.net">
    @include('partials.logos.compromis')
    <span class="sr-only">Compromís</span>
  </a>
  <a class="brand-local {{ strlen($local->name) > 14 && count(explode(' ', $local->name)) > 1 ? 'brand-local--long' : '' }}" href="{{ home_url('/') }}">
    {{ $local->name }}
  </a>
</div>

