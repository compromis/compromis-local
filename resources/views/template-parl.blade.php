{{--
  Template Name: Oficina parlamentaria
--}}

@extends('layouts.app')

@section('content')
  @if($local->type !== 'parl')
    <p class="alert alert-warning">
      Aquesta plantilla està reservada per a oficines parlamentàries
    </p>
  @else
    @include('partials.parl.contact')
    @include('partials.parl.posts')
    @include('partials.parl.representatives')
    @include('partials.parl.videos')
    @include('partials.parl.programes')
  @endif
@endsection
