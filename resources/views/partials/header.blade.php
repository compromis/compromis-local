<header class="banner">
  <div class="banner-local-image" style="background: url(https://images.unsplash.com/photo-1563273410-979e8ec6bbb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2467&q=80)">
    <div class="container banner-container">
      <div class="banner-band">
        <div class="banner-band-row">
          <a class="brand" href="{{ home_url('/') }}">
            <img src="https://compromis.net/wp-content/themes/Compromis/images/logo.svg" alt="Compromís" />
            <span class="brand-local brand-local-hidden">{!! App::get_localinfo()->name !!}</span>
          </a>
          <button class="drawer-nav-toggle" href="#" aria-expanded="false">Menu</button>
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
