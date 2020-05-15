<header class="banner banner-partit">
  <div class="banner-local-image">
    <div class="banner-local-image-partit" style="background-image: url({{ get_header_image() }})"></div>
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
      @if(is_home())
        <a href="{{ home_url('/') }}">
          <h1><img src="@asset('images/logos/' . $local->ref . '.svg')" width="350" alt="{{ $local->name }}" /></h1>
        </a>
      @else
        @include('partials.header-title')
      @endif
    </div>
  </div>
  @yield('filter')
</header>
