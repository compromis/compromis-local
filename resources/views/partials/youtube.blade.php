{{-- For backwards compatibility with older theme only --}}
@php
  $videoLink = get_post_meta($post->ID, 'youtube', true);
  preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $videoLink, $matches);
  $videoId = $matches[0];
@endphp
@if($videoId)
  <figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
    <div class="wp-block-embed__wrapper">
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
    </div>
  </figure>
@endif
