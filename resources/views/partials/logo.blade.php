<a class="brand {{ is_single() || (is_page() && !is_front_page()) ? '' : 'brand-compact' }}" href="{{ home_url('/') }}">
  <span class="brand-logo">
    @include('partials.compromis-logo')
    <span class="sr-only">Compromís</span>
  </span>
  <span class="brand-local {{ strlen($local->name) > 14 && count(explode(' ', $local->name)) > 1 ? 'brand-local--long' : '' }}">
    {{ $local->name }}
  </span>
</a>

