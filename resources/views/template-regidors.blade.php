{{--
  Template Name: Regidors
--}}

@extends('layouts.app')

@section('content')
  <section class="page">
    <ul class="card-list card-list-regidors">
      @foreach($regidors as $regidor)
      @php
        $postMeta = get_post_meta($regidor->ID);
      @endphp
        <li class="card card-regidor">
          @if(has_post_thumbnail($regidor->ID))
            <a href="{{ get_permalink($regidor->ID) }}">
              <img class="card-regidor-img" src="{{ get_the_post_thumbnail_url($regidor->ID, 'medium') }}" alt="" />
            </a>
          @endif
          <div class="card-regidor-info">
            <h2 class="card-regidor-info-name">
              <a href="{{ get_permalink($regidor->ID) }}">{{ $regidor->post_title }}</a>
            </h2>
            @if(isset($postMeta['_regidor_description']) && $postMeta['_regidor_description'])
              <p class="card-regidor-info-description">
                {{ $postMeta['_regidor_description'][0] }}
              </p>
            @endif
            <ul class="card-regidor-info-social">
              @if(isset($postMeta['_regidor_email']) && $postMeta['_regidor_email'])
                <li><a href="mailto:{{ $postMeta['_regidor_email'][0] }}" target="_blank" rel="noopener"><i class="far fa-envelope"></i></a></li>
              @endif
              @if(isset($postMeta['_regidor_twitter']) && $postMeta['_regidor_twitter'])
                <li><a href="{{ $postMeta['_regidor_twitter'][0] }}" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
              @endif
              @if(isset($postMeta['_regidor_facebook']) && $postMeta['_regidor_facebook'])
                <li><a href="{{ $postMeta['_regidor_facebook'][0] }}" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
              @endif
              @if(isset($postMeta['_regidor_instagram']) && $postMeta['_regidor_instagram'])
                <li><a href="{{ $postMeta['_regidor_instagram'][0] }}" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
              @endif
            </ul>
          </div>
        </li>
      @endforeach
    </ul>
  </section>
@endsection
