{{--
  Template Name: Contacta
--}}
@php
  $localInfo = App::get_localinfo();
@endphp

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
  <section class="page-card contact-page">
    @include('partials.content-page')
    <h2>Per internet o telèfon</h2>
    <ul class="contact-list-social">
      @if($localInfo->email)
        <li>
          <i class="far fa-envelope"></i> 
          <a class="apple-link" href="mailto:{{ $localInfo->email }}"><span>{{ $localInfo->email }}</span></a>
        </li>
      @endif
      @if($localInfo->telf)
        <li><i class="far fa-phone"></i> <span>{{ $localInfo->telf }}</span></li>
      @endif
      @if($localInfo->facebook)
        <li>
          <i class="fab fa-facebook"></i> 
          <a class="apple-link" href="{{ $localInfo->facebook }}" target="_blank" rel="noopener"><span>Compromís {{ $localInfo->name }}</span></a>
        </li>
      @endif
      @if($localInfo->twitter)
        <li>
          <i class="fab fa-twitter"></i>
          <a class="apple-link" href="https://twitter.com/{{ $localInfo->twitter }}" target="_blank" rel="noopener"><span>{{ '@' . $localInfo->twitter }}</span></a>
        </li>
      @endif
      @if($localInfo->instagram)
        <li>
          <i class="fab fa-instagram"></i> 
          <a class="apple-link" href="https://instagram.com/{{ $localInfo->instagram }}" target="_blank" rel="noopener"><span>{{ '@' . $localInfo->instagram }}</span></a>
        </li>
      @endif
    </ul>
    <h2>Presencial</h2>
    <ul class="address-list">
      @if($localInfo->address_seu)
        <li>
          <div class="address-list-item">
            <i class="far fa-home"></i> 
            <div>
              <strong>Seu local</strong> 
              <p>{{ $localInfo->address_seu }}</p>
            </div>
          </div>
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
          <div class="address-list-item">
            <i class="far fa-building"></i> 
            <div>
              <strong>Grup municipal</strong> 
              <p>{{ $localInfo->address_grup }}</p>
            </div>
          </div>
          <iframe
            width="100%"
            height="300"
            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ca&amp;q={{ $localInfo->address_grup . ', ' . $localInfo->name . ', Espanya' }}&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
            frameborder="0"
            scrolling="no">
          </iframe>
        </li>
      @endif
    </ul>
  </section>
@endwhile
@endsection
