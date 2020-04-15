@php
  $isArchive = true;
@endphp
@extends('layouts.app')

@section('content')
  @include('partials.archive-nav')

  @if (!have_posts())
    <div class="mt-4 alert alert-warning">
      {{ __('No hem trobat cap notícia amb aquests paràmetres', 'sage') }}
    </div>
  @endif
  
  <ul class="archive-posts">
  @while (have_posts()) @php the_post() @endphp
    <li>
      @include('partials.content-'.get_post_type())
    </li>
  @endwhile
  </ul>

  {!! get_the_posts_navigation() !!}

@endsection
