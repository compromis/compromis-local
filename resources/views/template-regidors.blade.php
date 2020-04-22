{{--
  Template Name: Regidors
--}}

@extends('layouts.app')

@section('content')
  <section class="page">
    <ul class="card-list card-list-regidors">
      @foreach($regidors as $regidor)
        @include('partials.regidor')
      @endforeach
    </ul>
  </section>
@endsection
