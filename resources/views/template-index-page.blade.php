{{--
  Template Name: Pàgina Buida Index
--}}

@extends('layouts.app')

@php the_post() @endphp

@section('content')
  <section class="page">
    @if($children)
      <ul class="card-list card-list-index">
        @foreach($children as $page)
          <li>
            <a class="card card-index-link" href="{{ get_permalink($page->ID) }}">
              <span>
                @if($icon = get_post_meta($page->ID, 'page_icon', true))
                  <i class="far fa-{{ $icon }}"></i>
                @endif
                {{ $page->post_title }}
              </span>
            </a>
          </li>
        @endforeach
      </ul>
    @endif
  </section>
@endsection
