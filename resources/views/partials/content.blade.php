@php
  $secondThumbnail = false;
  $secondThumbnailIsPrimary = false;
  $hasVideoThumbnail = false;

  $hasThumbnail = has_post_thumbnail();
  $secondThumbnailIsPrimary = get_post_meta(get_the_ID(), '_second_thumbnail_is_primary', true);

  if (!$hasThumbnail || $secondThumbnailIsPrimary) {
    $secondThumbnail = get_post_meta(get_the_ID(), '_second_thumbnail', true);
    $secondThumbnailAlt = get_post_meta(get_the_ID(), '_second_thumbnail_alt', true);
  }
  
  $videoLink = get_post_meta(get_the_ID(), 'youtube', true);
  if ($videoLink) {
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $videoLink, $matches);
    $videoId = $matches[0];
    $hasVideoThumbnail = 'has-post-thumbnail';
  }
@endphp
<article @php post_class($hasVideoThumbnail) @endphp>
  <a href="{{ get_permalink() }}" class="entry-link">
    <header>
      @if($hasThumbnail && !$secondThumbnailIsPrimary)
        <div class="entry-thumbnail">
          {{ the_post_thumbnail('large', ['loading' => 'lazy']) }}
        </div>
      @elseif($secondThumbnail)
        <div class="entry-thumbnail">
          <img src="{{ $secondThumbnail }}" alt="{{ $secondThumbnailAlt }}" loading="lazy" />
        </div>
      @elseif($videoLink)
        <div class="entry-thumbnail">
          <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" loading="lazy" alt="" />
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
