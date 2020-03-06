<h3>Posts</h3>
<div id="compromis-posts"
  x-data="{ posts: [] }"
  x-init="
    fetch('https://compromis.net/wp-json/wp/v2/posts/?_fields=title,link,_links.wp:featuredmedia&per_page=5&_embed&categories_exclude=1939')
      .then(response => { return response.json() })
      .then(data => { posts = data })
  ">
  <ul>
    <template x-for="post in posts" :key="post">
      <li>
        <a x-bind:href="post.link" target="_blank" rel="noopener">
          <img x-bind:src="post._embedded['wp:featuredmedia'][0].media_details.sizes.thumbnail.source_url" alt="" />
          <span x-text="post.title.rendered"></span>
        </a>
      </li>
    </template>
  </ul>

  <a href="https://compromis.net" target="_blank" rel="noopener">{{ __('Més notícies en compromis.net', 'sage') }}</a>
</div>