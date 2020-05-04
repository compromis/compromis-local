<h2>Notícies</h2>

<ul class="home-posts parl-posts">
  @php global $post @endphp
  @foreach($posts as $post)
    @php setup_postdata($post) @endphp
    <li>
      @include('partials.content')
    </li>
  @endforeach
  @php wp_reset_postdata() @endphp
</ul>

<a href="/noticies" class="apple-link">
  <span>Més notícies</span>
</a>
