@php
  global $wp_query;
  $currentPage = get_query_var('paged');

  $wp_query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $currentPage
  ));
@endphp

@include('archive')