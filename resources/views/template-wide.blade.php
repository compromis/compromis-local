{{--
  Template Name: Pàgina ampla
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="page-card is-wide">
      @include('partials.content-page')
    </section>
  @endwhile
@endsection

