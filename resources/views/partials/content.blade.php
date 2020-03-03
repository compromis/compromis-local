<article @php post_class() @endphp>
  <a href="{{ get_permalink() }}" class="entry-link">
    <header>
      @if(has_post_thumbnail())
        <div class="entry-thumbmail">
          {{ the_post_thumbnail('large') }}
        </div>
      @endif
      <div class="entry-info">
        <h2 class="entry-title">{!! get_the_title() !!}</h2>
        @if(!has_post_thumbnail())
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
