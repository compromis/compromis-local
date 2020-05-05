<?php

class WP_Widget_LanguageSwitcher extends WP_Widget {
  function __construct()
  {
    parent::__construct(
      'language_switcher',
      __('Idioma', 'sage'),
      array('description' => __('Enllaços per canviar l\'idioma', 'sage' )) 
    );
  }

  // Creating widget front-end
  public function widget($args, $instance)
  {
    $locale = get_locale();
    $valClass = ($locale === 'ca') ? 'active' : '';
    $casClass = ($locale === 'es_ES') ? 'active' : '';
    $valUrl = $instance['val'];
    $casUrl = $instance['cas'];

    echo $args['before_widget'];
    echo "<ul class='language-switcher'>";
    echo "<li class='$valClass'><a href='$valUrl'>Valencià</a></li>";
    echo "<li class='$casClass'><a href='$casUrl'>Castellano</a></li>";
    echo "</ul>";
    echo $args['after_widget'];
 }

  // Widget Backend 
  public function form($instance)
  {
    if (isset($instance['val'])) {
      $val = $instance['val'];
    } else {
      $val = '';
    }

    if (isset($instance['cas'])) {
      $cas = $instance['cas'];
    } else {
      $cas = '';
    }

    // Widget admin form
    ?>
      <p>
        <label for="<?php echo $this->get_field_id('val'); ?>"><?php _e('Valencià:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('val'); ?>" placeholder="https://" name="<?php echo $this->get_field_name('val'); ?>" type="url" value="<?php echo esc_attr($val); ?>" />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id('cas'); ?>"><?php _e('Castellà:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('cas'); ?>" placeholder="https://" name="<?php echo $this->get_field_name('cas'); ?>" type="url" value="<?php echo esc_attr($cas); ?>" />
      </p>
    <?php 
  }

  // Updating widget replacing old instances with new
  public function update($new_instance, $old_instance)
  {
    $instance = array();
    $instance['val'] = (!empty($new_instance['val'])) ? strip_tags($new_instance['val']) : '';
    $instance['cas'] = (!empty($new_instance['cas'])) ? strip_tags($new_instance['cas']) : '';

    return $instance;
  }
}
