@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section class="page-card">
      @include('partials.content-page')
    </section>
  @endwhile
@endsection

@section('sidebar')
  @php
    global $post;
    if($post->post_parent) {
      $ancestors = get_post_ancestors($post->ID);
      $root = count($ancestors) - 1;
      $parent = $ancestors[$root];
      $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $parent . '&echo=0');
    } else {
      $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
    }
  @endphp

  @if($childpages)
    <ul class="page-menu">
      {!! $childpages !!}
    </ul>
  @endif
@endsection