@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="page-card">
      @include('partials.content-page')
    </section>
  @endwhile
@endsection

@section('sidebar')
  @if($children)
    <ul class="page-menu">
      {!! $children !!}
    </ul>
  @endif
@endsection