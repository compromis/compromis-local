@php
  $imageUrl = ((is_single() || is_page()) && has_post_thumbnail() && get_post_type() != 'regidor')
    ? get_the_post_thumbnail_url(null, 'cover')
    : get_header_image();
@endphp
@if($local->type === 'partit')
  @include('partials.partit.header')
@else
<header class="banner">
  <div class="banner-local-image" style="background-image: url({{ $imageUrl }})">
    <div class="container banner-container">
      <div class="banner-band">
        <div class="banner-band-row">
          @include('partials.logo')
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
              <div class="d-lg-none">
                @php dynamic_sidebar('sidebar-language') @endphp
              </div>
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
        @include('partials.header-title')
    </div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
  </div>
  @yield('filter')
</header>
@endif
