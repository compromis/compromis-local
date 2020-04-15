@php
  $localInfo = App::get_localinfo();
@endphp
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="@asset('../resources/assets/images/favicons/favicon.ico')">
  <link rel="icon" type="image/png" sizes="32x32" href="@asset('../resources/assets/images/favicons/favicon-32x32.png')">
  <link rel="icon" type="image/png" sizes="16x16" href="@asset('../resources/assets/images/favicons/favicon-16x16.png')">
  <link rel="mask-icon" type="image/x-icon" href="@asset('../resources/assets/images/favicons/safari-pinned-tab.svg')" color="#ff6720">
  <link rel="apple-touch-icon" sizes="60x60" href="@asset('../resources/assets/images/apple-icon-60x60.png')">
  <link rel="apple-touch-icon" sizes="76x76" href="@asset('../resources/assets/images/apple-icon-76x76.png')">
  <link rel="apple-touch-icon" sizes="120x120" href="@asset('../resources/assets/images/apple-icon-120x120.png')">
  <link rel="apple-touch-icon" sizes="152x152" href="@asset('../resources/assets/images/apple-icon-152x152.png')">
  <link rel="apple-touch-icon" sizes="180x180" href="@asset('../resources/assets/images/apple-icon-180x180.png')">
  <link rel="icon" type="image/png" sizes="192x192"  href="@asset('../resources/assets/images/android-icon-192x192.png')">
  <link rel="icon" type="image/png" sizes="192x192"  href="@asset('../resources/assets/images/android-chrome-192x192.png')">
  <meta name="msapplication-TileImage" content="@asset('../resources/assets/images/msapplication-icon-144x144.png')">

  <!-- Metatags -->
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="compromis, {{ $localInfo->name }}, valencianisme, municipalisme, ecologisme, ecosocialisme, elecciones, eleccions, locales, locals, municipales, municipals" />

  <!-- Open Graph & Twitter -->
  <meta property="og:locale" content="{{ get_locale() }}" />
  <meta property="og:site_name" content="Compromís per {{ $localInfo->name }}" />
  <meta property="twitter:site" content="{{ '@' }}{{ $localInfo->twitter ?: 'compromis' }}" />
  <meta property="twitter:card" content="summary_large_image" />

  @if(is_single() || is_page())
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{!! get_the_excerpt() !!}" />
    <meta property="og:image" content="{!! get_the_post_thumbnail_url() !!}" />
    <meta property="og:url" content="{!! get_permalink() !!}" />
    <meta property="twitter:description" content="{!! get_the_excerpt() !!}" />
    <meta property="twitter:image" content="{!! get_the_post_thumbnail_url() !!}" />
    <meta property="twitter:url" content="{!! get_permalink() !!}" />
  @else
    <meta property="og:type" content="website" />
    <meta property="og:description" content="A Compromís {{ $localInfo->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
    <meta property="og:image" content="@asset('images/og-image.png')" />
    <meta property="og:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
    <meta property="twitter:description" content="A Compromís {{ $localInfo->name }} compartim una nova manera de fer política. Junts podem aconseguir els canvis que el nostre poble necessita." />
    <meta property="twitter:image" content="@asset('images/og-image.png')" />
    <meta property="twitter:url" content="{!! 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] !!}" />
  @endif
</head>
