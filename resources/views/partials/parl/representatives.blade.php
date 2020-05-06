@if(!empty($regidors))
  <section>
    <h2>{{ __('Representants', 'sage') }}</h2>
    <ul class="card-list card-list-regidors mt-0">
      @foreach($regidors as $regidor)
        @include('partials.regidor')
      @endforeach
    </ul>
    @if(count($regidors) === 6)
      <a href="/representants" class="apple-link">
        <span>{{ __('Més representants', 'sage') }}</span>
      </a>
    @endif
  </section>
@endif
