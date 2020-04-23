{{--
  Template Name: Llistat de perfils
--}}

@extends('layouts.app')

@php the_post() @endphp

@section('content')
  <section class="page">
    <ul class="card-list card-list-regidors">
      @foreach($regidors as $regidor)
        @include('partials.regidor')
      @endforeach
    </ul>
    @if(get_the_content())
      <div class="card mt-4">
        {!! the_content() !!}
      </div>
    @endif
  </section>
@endsection
