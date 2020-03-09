<h4>Notícies de Compromis.net</h4>
<div id="compromis-posts"
  x-data="{ posts: [] }"
  x-init="
    fetch('https://compromis.net/wp-json/wp/v2/posts/?_fields=title,excerpt,link,_links.wp:featuredmedia&per_page=5&_embed&categories_exclude=1939')
      .then(response => { return response.json() })
      .then(data => { posts = data })
  ">
  <ul class="post-list">
    <template x-for="post in posts" :key="post">
      <li>
        <a class="post-link" x-bind:href="post.link" target="_blank" rel="noopener">
          <div class="post-thumbnail">
            <img x-bind:src="post._embedded['wp:featuredmedia'][0].media_details.sizes.thumbnail.source_url" alt="" />
          </div>
          <p class="post-content">
            <span class="post-title" x-text="post.title.rendered"></span>
          </p>
        </a>
      </li>
    </template>
  </ul>

  <a class="apple-link" href="https://compromis.net" target="_blank" rel="noopener"><span>{{ __('Més notícies en compromis.net', 'sage') }}</span></a>
</div>
