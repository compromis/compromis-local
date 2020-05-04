@if($local->type === 'parl')
  <span class="brand-institution d-none d-md-block">
      <img src="@asset('images/logos/' . $local->ref . '.svg')" alt="{{ $local->name }}" />
  </span>
  <span class="brand-local d-block d-md-none {{ strlen($local->name) > 14 && count(explode(' ', $local->name)) > 1 ? 'brand-local--long' : '' }}">
    {{ $local->name }}
  </span>
@else
  <span class="brand-local {{ strlen($local->name) > 14 && count(explode(' ', $local->name)) > 1 ? 'brand-local--long' : '' }}">
    {{ $local->name }}
  </span>
@endif
