@php
  $videoLink = get_post_meta($post->ID, 'youtube', true);
  if ($videoLink) {
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $videoLink, $matches);
    $videoId = $matches[0];
  }
@endphp
<article @php post_class() @endphp>
  <a href="{{ get_permalink() }}" class="entry-link">
    <header>
      @if(has_post_thumbnail())
        <div class="entry-thumbnail">
          {{ the_post_thumbnail('large') }}
        </div>
      @elseif($videoLink)
        <div class="entry-thumbnail">
          <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" alt="" />
        </div>
      @endif
      <div class="entry-info">
        <h3 class="entry-title">{!! get_the_title() !!}</h3>
        @if(!has_post_thumbnail() || isset($isArchive))
          <p class="entry-excerpt">{!! wp_trim_excerpt() !!}</p>
        @endif
      </div>
      <div class="entry-bottom">
        @include('partials/entry-meta')
        <span class="entry-more"><fa class="far fa-arrow-right"></i></span>
      </div>
    </header>
  </a>
</article>
