<header class="banner">
  <div class="banner-local-image" style="background-image: url(<?php header_image(); ?>)">
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
        <h1>{!! App::get_localinfo()->name !!}</h1>
      </a>
      <button>
        <i class="far fa-chevron-down"></i>
        <span class="sr-only">Tots els municipis</span>
      </button>
    </div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
  </div>
</header>
