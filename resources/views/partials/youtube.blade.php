{{-- For backwards compatibility with older theme only --}}
@php $youtubeEmbed = get_post_meta($post->ID, 'youtube', true); @endphp
@if ($youtubeEmbed):
  <figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
    <div class="wp-block-embed__wrapper">
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ str_replace('https://youtu.be/', '', $youtubeEmbed) }}" frameborder="0" allowfullscreen></iframe>
    </div>
  </figure>
@endif
