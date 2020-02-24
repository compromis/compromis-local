<article @php post_class() @endphp>
  <a href="{{ get_permalink() }}" class="entry-link">
    <header>
      <div class="entry-thumbmail">
        <img src="https://images.unsplash.com/photo-1534361960057-19889db9621e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80" alt="" />
      </div>
      @include('partials/entry-meta')
      <h2 class="entry-title">{!! get_the_title() !!}</h2>
    </header>
  </a>
</article>
