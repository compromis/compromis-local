@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="hero-banner">
    @php dynamic_sidebar('sidebar-hero') @endphp
  </div>

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Encara no tenim notícies.', 'sage') }}
    </div>
  @else
    @php
        $i = 0;
        $homeHasHero = is_active_sidebar('sidebar-hero');
        $postsToShow = $homeHasHero ? 4 : 5;
    @endphp
    <ul class="home-posts {{ !$homeHasHero ? 'home-has-highlight' : '' }}">
    @while (have_posts())
      @php
        $i++;
        if ($i > $postsToShow) break;
        the_post();
      @endphp
      <li>
        @include('partials.content-'.get_post_type())
      </li>
    @endwhile
    </ul>
  @endif

  <a href="/arxiu-de-noticies" class="apple-link">
    <span>{{ __('Arxiu de notícies', 'sage') }}</span>
  </a>

  @include('partials.compromis-posts')
@endsection
