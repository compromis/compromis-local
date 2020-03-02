<article @php post_class() @endphp>
  <header>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer class="entry-nav">
    <div class="footer-prev">
      {!! previous_post_link('%link', '<span class="nav-icon">&lt;-</span><span class="nav-text">%title</span>') !!}
    </div>
    <div class="footer-next">
      {!! next_post_link('%link', '<span class="nav-text">%title</span><span class="nav-icon">-&gt;</span>') !!}
    </div>
  </footer>
</article>
