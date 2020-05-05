@if(!empty($videos))
<h2>{{ __('Intervencions', 'save') }}</h2>

<ul class="home-posts highlighted-posts video-posts">
  @php global $post @endphp
  @foreach($videos as $post)
  @php
    setup_postdata($post);
    $videoLink = get_post_meta($post->ID, 'youtube', true);
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $videoLink, $matches);
    $videoId = $matches[0];
  @endphp
    <li>
      <article class="post">
        <a href="{{ $videoLink }}" class="entry-link" target="_blank">
          <header>
            <div class="entry-thumbnail">
              <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" alt="" />
              <span class="video-icon" aria-hidden="true">(>)</span>
            </div>
            <div class="entry-info">
              <h3 class="entry-title">{{ get_the_title() }}</h3>
            </div>
            <div class="entry-bottom">
              @include('partials/entry-meta')
            </div>
          </header>
        </a>
      </article>
    </li>
  @endforeach
  @php wp_reset_postdata() @endphp
</div>

<a href="/c/intervenions" class="apple-link">
  <span>{{ __('Més intervencions', 'sage') }}</span>
</a>
@endif
