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
    <div class="parl">
      @include('partials.parl.contact')
      @foreach($modules as $module)
        @include('partials.parl.' . $module)
      @endforeach
    </div>
  @endif
@endsection
