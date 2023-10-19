<?php

class WP_Widget_Social extends WP_Widget {
  function __construct()
  {
    parent::__construct(
      'social_plugin',
      __('Xarxes socials', 'sage'),
      array('description' => __('Plugins de xarxes socials', 'sage' )) 
    );
  }

  // Creating widget front-end
  public function widget($args, $instance)
  {
    $network = $instance['network'];
    $username = $instance['username'];
    echo $args['before_widget'];
    if ($network === 'facebook') {
      $username = (substr($username, 0, 4) === 'http') ? $username : 'https://www.facebook.com/' . $username;
      echo '<iframe src="https://www.facebook.com/plugins/page.php?href=' . urlencode($username) . '&tabs&width=361&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>';
    } else if($network === 'twitter') {
      echo '<a class="twitter-timeline" data-height="500" data-chrome="noborders nofooter transparent" data-dnt="true" href="https://twitter.com/' . $username . '">Tweets by ' . $username . '</a>';
    }
    echo $args['after_widget'];
 }

  // Widget Backend 
  public function form($instance)
  {
    global $wpdb, $blog_id;
    $info = $wpdb->get_row($wpdb->prepare('SELECT * FROM webs_locals WHERE blogid = %d LIMIT 1', $blog_id));

    if (isset($instance['network'])) {
      $network = $instance['network'];
    } else {
      $network = 'facebook';
    }

    if (isset($instance['username'])) {
      $username = $instance['username'];
    } else {
      $username = $info->facebook;
    }

    // Widget admin form
    ?>
      <p>
        <label for="<?php echo $this->get_field_id('network'); ?>"><?php _e('Xarxa social:'); ?></label> 
        <select class="widefat" id="<?php echo $this->get_field_id('network'); ?>" name="<?php echo $this->get_field_name('network'); ?>">
          <option value="facebook" <?php echo ($network === 'facebook') ? 'selected' : ''; ?>>Facebook</option>
          <option value="twitter" <?php echo ($network === 'twitter') ? 'selected' : ''; ?>>Twitter</option>
        </select>
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Usuari:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" type="text" value="<?php echo esc_attr($username); ?>" />
      </p>
      <script>
        jQuery("#<?php echo $this->get_field_id('network'); ?>").change(function (e) {
          var usernameField = jQuery("#<?php echo $this->get_field_id('username'); ?>");
          if (e.target.value === 'facebook') {
            usernameField.val('<?php echo $info->facebook; ?>');
          } else {
            usernameField.val('<?php echo $info->twitter; ?>');
          }
        });
      </script>
    <?php 
  }

  // Updating widget replacing old instances with new
  public function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['title'] = (!empty($new_instance['network'])) ? strip_tags($new_instance['network']) : '';
    $instance['username'] = (!empty($new_instance['username'])) ? strip_tags($new_instance['username']) : '';
    $instance['network'] = (!empty($new_instance['network'])) ? strip_tags($new_instance['network']) : '';

    return $instance;
  }
}
