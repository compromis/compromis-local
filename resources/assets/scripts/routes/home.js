import Vue from 'vue';

export default {
  init() {
    new Vue({
      el: '#compromis-posts',
      data: {
        posts: [],
      },
      mounted () {
        this.loadPosts();
      },
      methods: {
        loadPosts () {
          fetch('https://compromis.net/wp-json/wp/v2/posts/?_fields=title,link,_links.wp:featuredmedia&per_page=5&_embed&categories_exclude=1939')
            .then(response => { return response.json() })
            .then(data => { this.posts = data })
        },
      },
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
