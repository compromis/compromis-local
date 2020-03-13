@extends('layouts.app')

@section('content')
  @include('partials.archive-nav')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  Archive
  <ul class="home-posts">
  @while (have_posts()) @php the_post() @endphp
    <li>
      @include('partials.content-'.get_post_type())
    </li>
  @endwhile
  </ul>

  {!! get_the_posts_navigation() !!}
@endsection
