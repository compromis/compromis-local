@if(is_single() || is_page())
  @php
    $title = get_the_title();
    $minFontSize = 2.5;
    $maxFontSize = 4.5;
    $maxLength = 200;
    $length = strlen($title) / $maxLength;
    $fontSize = $maxFontSize + $length * ($minFontSize - $maxFontSize);
  @endphp
  @if(get_post_type() == 'legislatura')
    <div class="banner-sup"><i class="far fa-archive"></i> <a href="/legislatura">{{ __('Treball de legislatura', 'sage') }}</a></div>
  @endif
  <h1 style="--font-size: {{ $fontSize }}">{!! $title !!}</h1>
  @if(is_single() && get_post_type() !== 'regidor')
    @include('partials.social')
  @endif
@elseif(is_post_type_archive('legislatura'))
  <h1 style="--font-size: 4.28">{{ __('Treball de legislatura', 'sage') }}</h1>
  @else
  <a href="{{ home_url('/') }}">
    <h1>{{ $local->name }}</h1>
  </a>
@endif
