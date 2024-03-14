<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
  <link rel="prefetch" href="{{ $header_image }}" />
  <meta name="color-scheme" content="dark light">
  <script>
    // Render blocking js to avoid FOUC in dark theme
    var storedTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
    var prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    var isDark = storedTheme ? storedTheme === 'dark' : prefersDarkScheme.matches;
    document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');
  </script>
  @php wp_head() @endphp
  
  <script src="https://kit.fontawesome.com/02517b44a5.js" crossorigin="anonymous"></script>

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="@asset('images/favicons/favicon.ico')">
  <link rel="icon" type="image/png" sizes="32x32" href="@asset('images/favicons/favicon-32x32.png')">
  <link rel="icon" type="image/png" sizes="16x16" href="@asset('images/favicons/favicon-16x16.png')">
  <link rel="mask-icon" type="image/x-icon" href="@asset('images/favicons/safari-pinned-tab.svg')" color="#ff6720">
  <link rel="apple-touch-icon" sizes="60x60" href="@asset('images/favicons/apple-icon-60x60.png')">
  <link rel="apple-touch-icon" sizes="76x76" href="@asset('images/favicons/apple-icon-76x76.png')">
  <link rel="apple-touch-icon" sizes="120x120" href="@asset('images/favicons/apple-icon-120x120.png')">
  <link rel="apple-touch-icon" sizes="152x152" href="@asset('images/favicons/apple-icon-152x152.png')">
  <link rel="apple-touch-icon" sizes="180x180" href="@asset('images/favicons/apple-icon-180x180.png')">
  <link rel="icon" type="image/png" sizes="192x192" href="@asset('images/favicons/android-icon-192x192.png')">
  <link rel="icon" type="image/png" sizes="192x192" href="@asset('images/favicons/android-chrome-192x192.png')">
  <meta name="msapplication-TileImage" content="@asset('images/favicons/msapplication-icon-144x144.png')">

  <!-- Metatags -->
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="compromis, {{ $local->name }}, valencianisme, municipalisme, ecologisme, ecosocialisme, elecciones, eleccions, locales, locals, municipales, municipals" />

  <!-- Open Graph & Twitter -->
  <meta property="og:locale" content="{{ get_locale() }}" />
  <meta property="og:site_name" content="Compromís per {{ $local->name }}" />
  <meta property="twitter:site" content="{{ '@' }}{{ $local->twitter ?: 'compromis' }}" />
  <meta property="twitter:card" content="summary_large_image" />

  @if(is_single() || is_page())
    <meta property="og:title" content="{!! get_the_title() !!}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{!! get_the_excerpt() !!}" />
    <meta property="og:image" content="{!! get_the_post_thumbnail_url(null, 'large') !!}" />
    <meta property="og:url" content="{!! get_permalink() !!}" />
    <meta property="twitter:title" content="{!! get_the_title() !!}" />
    <meta property="twitter:description" content="{!! get_the_excerpt() !!}" />
    <meta property="twitter:image" content="{!! get_the_post_thumbnail_url(null, 'large') !!}" />
    <meta property="twitter:url" content="{!! get_permalink() !!}" />
  @else
    @if($local->type === 'partit')
      <meta property="og:title" content="{{ $local->name }}" />
      <meta property="og:type" content="website" />
      <meta property="og:description" content="A {{ $local->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
      <meta property="og:image" content="@asset('images/ogimages/' . $local->ref . '.png')" />
      <meta property="og:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
      <meta property="twitter:title" content="{{ $local->name }}" />
      <meta property="twitter:description" content="A {{ $local->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
      <meta property="twitter:image" content="@asset('images/ogimages/' . $local->ref . '.png')" />
      <meta property="twitter:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
    @else
      <meta property="og:title" content="Compromís per {{ $local->name }}" />
      <meta property="og:type" content="website" />
      <meta property="og:description" content="A Compromís {{ $local->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
      <meta property="og:image" content="@asset('images/og-image.png')" />
      <meta property="og:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
      <meta property="twitter:title" content="Compromís per {{ $local->name }}" />
      <meta property="twitter:description" content="A Compromís {{ $local->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
      <meta property="twitter:image" content="@asset('images/og-image.png')" />
      <meta property="twitter:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
    @endif
  @endif
</head>
