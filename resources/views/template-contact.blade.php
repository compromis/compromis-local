{{--
  Template Name: Contacta
--}}
@php
  $localInfo = App::get_localinfo();
@endphp

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
  <section class="page-card">
    @include('partials.content-page')

    <ul>
      @if($localInfo->address_seu)
        <li>
          <p>
            <i class="far fa-home"></i> <strong>Seu local</strong>: {{ $localInfo->address_seu }}
          </p>
          <iframe
            width="100%"
            height="300"
            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ca&amp;q={{ $localInfo->address_seu . ', ' . $localInfo->name . ', Espanya' }}&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
            frameborder="0"
            scrolling="no">
          </iframe>
        </li>
      @endif
      @if($localInfo->address_grup)
        <li>
          <p><i class="far fa-building"></i> <strong>Grup municipal</strong>: {{ $localInfo->address_grup }}</p>
          <iframe
            width="100%"
            height="300"
            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ca&amp;q={{ $localInfo->address_grup . ', ' . $localInfo->name . ', Espanya' }}&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
            frameborder="0"
            scrolling="no">
          </iframe>
        </li>
      @endif
      @if($localInfo->email)
        <li><i class="far fa-envelope"></i> <a href="mailto:{{ $localInfo->email }}">{{ $localInfo->email }}</a></li>
      @endif
      @if($localInfo->telf)
        <li><i class="far fa-phone"></i> {{ $localInfo->telf }}</li>
      @endif
      @if($localInfo->facebook)
        <li>
          <a href="{{ $localInfo->facebook }}" target="_blank" rel="noopener">
            <i class="fab fa-facebook"></i> Compromís {{ $localInfo->name }}
          </a>
        </li>
      @endif
      @if($localInfo->twitter)
        <li>
          <a href="https://twitter.com/{{ $localInfo->twitter }}" target="_blank" rel="noopener">
            <i class="fab fa-twitter"></i> {{ '@' . $localInfo->twitter }}</li>
          </a>
        </li>
      @endif
      @if($localInfo->instagram)
      <li>
        <a href="https://instagram.com/{{ $localInfo->instagram }}" target="_blank" rel="noopener">
          <i class="fab fa-instagram"></i> {{ '@' . $localInfo->instagram }}</li>
        </a>
      </li>
      @endif
    </ul>
  </section>
@endwhile
@endsection
