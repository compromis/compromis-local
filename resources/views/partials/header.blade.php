<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="https://compromis.net/wp-content/themes/Compromis/images/logo.svg" alt="Compromís" height="35" />
      <div class="brand-local">{!! App::get_localinfo()->name !!}</div>
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
