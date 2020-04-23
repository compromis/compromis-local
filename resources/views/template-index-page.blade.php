{{--
  Template Name: Pàgina Buida Index
--}}

@extends('layouts.app')

@php the_post() @endphp

@section('content')
  <section class="page">
    <ul class="card-list card-list-index">
      <li><a class="card card-index-link" href="#"><i class="far fa-dog"></i>Menu Item</a></li>
      <li><a class="card card-index-link" href="#"><i class="far fa-hippo"></i>Menu Item</a></li>
      <li><a class="card card-index-link" href="#"><i class="far fa-spider"></i>Menu Item</a></li>
      <li><a class="card card-index-link" href="#"><i class="far fa-cat"></i>Menu Item</a></li>
    </ul>
  </section>
@endsection
