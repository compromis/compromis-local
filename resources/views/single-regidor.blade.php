@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection

@section('sidebar')
  <ul>
  @foreach($regidors as $regidor)
    <li class="{{ ($regidor->ID === get_the_ID()) ? 'active' : '' }}">
      <a href="{{ get_permalink($regidor->ID) }}">
        @if(has_post_thumbnail($regidor->ID))
          <img src="{{ get_the_post_thumbnail_url($regidor->ID, 'medium') }}" alt="">
        @endif
        {{ $regidor->post_title }}
      </a>
    </li>
  @endforeach
  </ul>
@endsection