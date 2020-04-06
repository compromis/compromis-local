@php
  $postMeta = get_post_meta(get_the_ID());
@endphp
<article @php post_class() @endphp>
  <div class="entry-content">
    @if(has_post_thumbnail())
      <img class="card-regidor-img" src="{{ get_the_post_thumbnail_url(get_the_ID(), 'medium') }}" alt="" />
    @endif

    @if(isset($postMeta['_regidor_description']))
      <p class="card-regidor-info-description">
        {{ $postMeta['_regidor_description'][0] }}
      </p>
    @endif

    <ul class="card-regidor-info-social">
      @if(isset($postMeta['_regidor_email']))
        <li><a href="mailto:{{ $postMeta['_regidor_email'][0] }}" target="_blank" rel="noopener"><i class="far fa-envelope"></i></a></li>
      @endif
      @if(isset($postMeta['_regidor_twitter']))
        <li><a href="{{ $postMeta['_regidor_twitter'][0] }}" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
      @endif
      @if(isset($postMeta['_regidor_facebook']))
        <li><a href="{{ $postMeta['_regidor_facebook'][0] }}" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
      @endif
      @if(isset($postMeta['_regidor_instagram']))
        <li><a href="{{ $postMeta['_regidor_instagram'][0] }}" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
      @endif
    </ul>

    @php the_content() @endphp
  </div>
</article>
