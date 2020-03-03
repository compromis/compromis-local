<article @php post_class() @endphp>
  <header class="entry-header">
    <a href="#">Categoria del post</a>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <ul class="pill-list">
    <li><a class="pill pill-secondary" href="#">Primary</a></li>
    <li><a class="pill pill-secondary" href="#">Primary</a></li>
    <li><a class="pill pill-secondary" href="#">Primary</a></li>
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
