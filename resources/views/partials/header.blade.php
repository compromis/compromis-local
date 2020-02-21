<header class="banner">
  <div class="banner-local-image" style="background: url(https://images.unsplash.com/photo-1563273410-979e8ec6bbb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2467&q=80)">
    <div class="container banner-container">
      <div class="banner-band">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="https://compromis.net/wp-content/themes/Compromis/images/logo.svg" alt="Compromís" />
          <span class="brand-local brand-local-hidden">{!! App::get_localinfo()->name !!}</span>
        </a>
        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>
      </div>
    </div>
    <div class="banner-local-name container">
      <a href="{{ home_url('/') }}">
        <h1>{!! App::get_localinfo()->name !!}</h1>
      </a>
    </div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
  </div>
</header>
