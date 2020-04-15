<article @php post_class() @endphp>
  <header class="entry-header">
    <div class="categories">
      @php $categories = get_the_category(); @endphp
      @if(!empty($categories))
        @foreach($categories as $category)
          <a href="{{ get_category_link($category) }}">{{ $category->name }}</a>
        @endforeach
      @endif
    </div>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @include('partials/youtube')
    @php the_content() @endphp
  </div>
  <ul class="pill-list mb-0">
    @php $tags = get_the_tags(); @endphp
    @if(!empty($tags))
      @foreach($tags as $tag)
        <li><a class="pill pill-secondary" href="{{ get_tag_link($tag) }}">{{ $tag->name }}</a></li>
      @endforeach
    @endif
  </ul>
  <footer class="entry-nav">
    <div class="footer-prev">
      {!! previous_post_link('%link', '<span class="nav-icon">←</span><span class="nav-text">%title</span>') !!}
    </div>
    <div class="footer-next">
      {!! next_post_link('%link', '<span class="nav-text">%title</span><span class="nav-icon">→</span>') !!}
    </div>
  </footer>
</article>
