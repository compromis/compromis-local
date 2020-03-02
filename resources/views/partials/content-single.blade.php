<article @php post_class() @endphp>
  <header>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! previous_post_link('%link', '<span class="nav-icon">&lt;</span><span>%title</span>') !!}
    {!! next_post_link('<span>%link</span><span class="nav-icon">&gt;</span>') !!}
  </footer>
</article>
