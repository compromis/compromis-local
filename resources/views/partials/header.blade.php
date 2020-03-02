@php
  $imageUrl = (has_post_thumbnail()) ? get_the_post_thumbnail_url() : get_header_image();
@endphp
<header class="banner">
  <div class="banner-local-image" style="background-image: url({{ $imageUrl }})">
    <div class="container banner-container">
      <div class="banner-band">
        <div class="banner-band-row">
          <a class="brand" href="{{ home_url('/') }}">
            <img src="https://compromis.net/wp-content/themes/Compromis/images/logo.svg" alt="Compromís" />
            <span class="brand-local brand-local-hidden">{!! App::get_localinfo()->name !!}</span>
          </a>
          <nav class="nav-shortcut d-none d-lg-flex">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
          <button class="drawer-nav-toggle ml-auto ml-lg-0" href="#" aria-expanded="false">
            <i class="far fa-bars"></i>
            <i class="far fa-times"></i>
            <span class="sr-only">Menú</span>
          </button>
        </div>
        <div class="banner-band-row banner-band-row--nav">
          <div class="drawer-nav hidden">
            <nav class="nav-primary">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
              @endif
            </nav>
            <nav class="nav-network">
              @include('partials.network-nav')
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-local-name container">
      <a href="{{ home_url('/') }}">
        @if(is_single())
          <h1>{!! get_the_title() !!}</h1>
        @else
          <h1>{!! App::get_localinfo()->name !!}</h1>
        @endif
      </a>
    </div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
  </div>
</header>
