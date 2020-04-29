{{--
  Template Name: Contacta
--}}
@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
  <section class="page-card contact-page">
    @include('partials.content-page')
    <h2>Per internet o telèfon</h2>
    <ul class="contact-list-social">
      @if($local->email)
        <li>
          <i class="far fa-envelope"></i>
          <span class="sr-only">{{ __('E-mail', 'sage') }}</span>
          <a class="apple-link" href="mailto:{!! antispambot($local->email) !!}"><span>{!! antispambot($local->email) !!}</span></a>
        </li>
      @endif
      @if($local->telf)
        <li>
          <i class="far fa-phone"></i>
          <span class="sr-only">{{ __('Telèfon', 'sage') }}</span>
          <span>{{ $local->telf }}</span>
        </li>
      @endif
      @if($local->facebook)
        <li>
          <i class="fab fa-facebook"></i>
          <span class="sr-only">Facebook</span>
          <a class="apple-link" href="{{ $local->facebook }}" target="_blank" rel="noopener"><span>Compromís {{ $local->name }}</span></a>
        </li>
      @endif
      @if($local->twitter)
        <li>
          <i class="fab fa-twitter"></i>
          <span class="sr-only">Twitter</span>
          <a class="apple-link" href="https://twitter.com/{{ $local->twitter }}" target="_blank" rel="noopener"><span>{{ '@' . $local->twitter }}</span></a>
        </li>
      @endif
      @if($local->instagram)
        <li>
          <i class="fab fa-instagram"></i>
          <span class="sr-only">Instagram</span>
          <a class="apple-link" href="https://instagram.com/{{ $local->instagram }}" target="_blank" rel="noopener"><span>{{ '@' . $local->instagram }}</span></a>
        </li>
      @endif
    </ul>

    @if($local->address_seu || $local->address_grup)
      <h2>Presencial</h2>
      <ul class="address-list">
        @if($local->address_seu)
          <li>
            <div class="address-list-item">
              <i class="far fa-home"></i> 
              <address>
                <strong>{{ __('Seu local', 'sage') }}</strong>
                <p>{{ $local->address_seu }}</p>
              </address>
            </div>
            <iframe
              width="100%"
              height="300"
              src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ca&amp;q={{ $local->address_seu . ', ' . $local->name . ', Espanya' }}&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
              frameborder="0"
              scrolling="no">
            </iframe>
          </li>
        @endif
        @if($local->address_grup)
          <li>
            <div class="address-list-item">
              <i class="far fa-building"></i> 
              <address>
                <strong>{{ __('Grup municipal', 'sage') }}</strong>
                <p>{{ $local->address_grup }}</p>
              </address>
            </div>
            <iframe
              width="100%"
              height="300"
              src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=ca&amp;q={{ $local->address_grup . ', ' . $local->name . ', Espanya' }}&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
              frameborder="0"
              scrolling="no">
            </iframe>
          </li>
        @endif
      </ul>
    @endif
  </section>
@endwhile
@endsection
