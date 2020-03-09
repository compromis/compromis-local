<h4>Notícies de Compromis.net</h4>
<div id="compromis-posts">
  <ul class="post-list">
    <li v-for="post in posts" v-bind:key="post.id">
      <a class="post-link" v-bind:href="post.link" target="_blank" rel="noopener">
        <div class="post-thumbnail">
          <img v-bind:src="post._embedded['wp:featuredmedia'][0].media_details.sizes.thumbnail.source_url" alt="" />
        </div>
        <p class="post-content">
          <span class="post-title" v-text="post.title.rendered"></span>
        </p>
      </a>
    </li>
  </ul>

  <a class="apple-link" href="https://compromis.net" target="_blank" rel="noopener"><span>{{ __('Més notícies en compromis.net', 'sage') }}</span></a>
</div>