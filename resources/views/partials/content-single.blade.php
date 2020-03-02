<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! previous_post_link('<span class="nav-icon">&lt;</span><span>%link</span>') !!}
    {!! next_post_link('<span>%link</span><span class="nav-icon">&gt;</span>') !!}
  </footer>
</article>
