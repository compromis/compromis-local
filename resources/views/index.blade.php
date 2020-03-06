@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  Home
  <ul class="home-posts">
  @php $i = 0; @endphp
  @while (have_posts())
    @php
      $i++;
      if($i > 5) break;
      the_post();
    @endphp
    <li>
      @include('partials.content-'.get_post_type())
    </li>
  @endwhile
  </ul>

  <a href="/arxiu">Arxiu</a>

  @include('partials.compromis-posts')
@endsection
