<?php

/**
 * Register Regidor Post Type
 */
add_action('init', function () {
    register_post_type('regidor', [
        'labels' => [
          'name' => 'Perfils',
          'singular_name' => 'Perfil',
        ],
        'public' => true,
        'rewrite' => ['slug' => 'regidor'],
        'taxonomies' => ['type'],
        'capability_type' => 'page',
        'has_archive' => false,
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
    ]);

    register_taxonomy('type', 'regidor', [
        'labels' => [
          'name' => 'Tipus',
          'singular_name' => 'Tipus',
          'menu_name' => 'Tipus'
        ],
        'hierarchical' => true
    ]);
});

/**
 * Register regidor metabox
 */
function register_regidors_metabox () {
    add_meta_box(
        'regidors-info',
        'Informació de perfil',
        'regidors_metabox_callback',
        'regidor',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'register_regidors_metabox');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function regidors_metabox_callback ($post) {
    wp_nonce_field('regidors_save_meta_box_data', 'regidors_meta_box_nonce' );
    $description = get_post_meta($post->ID, '_regidor_description', true);
    $email = get_post_meta($post->ID, '_regidor_email', true);
    $facebook = get_post_meta($post->ID, '_regidor_facebook', true);
    $twitter = get_post_meta($post->ID, '_regidor_twitter', true);
    $instagram = get_post_meta($post->ID, '_regidor_instagram', true);

    echo '
      <style>
        .instructions {
          color: #a1a2a3;
          border-bottom: 1px #e1e2e3 solid;
          padding: 1rem 0;
        }

        .metabox-field {
          padding: 1rem 0;
          border-bottom: 1px #e1e2e3 solid;
        }

        .metabox-field label {
          font-weight: bold;
          display: block;
          margin-bottom: .5rem;
        }

        .metabox-field input {
          width: 100%;
        }
      </style>
    ';

    echo '<div class="instructions">ℹ️ Selecciona una imatge de perfil al camp de la dreta "Imatge destacada".</div>';
    echo '<div class="instructions">ℹ️ Al camp de text de dalt podeu escriure una biografia, adjuntar currículum, etc.</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_regidor_description">Descripció</label>';
    echo '<input type="text" id="_regidor_description" name="_regidor_description" value="' . esc_attr($description) . '" />';
    echo '</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_regidor_email">E-mail de contacte</label>';
    echo '<input type="email" id="_regidor_email" name="_regidor_email" value="' . esc_attr($email) . '" />';
    echo '</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_regidor_facebook">Facebook</label>';
    echo '<input type="url" id="_regidor_facebook" placeholder="https://" name="_regidor_facebook" value="' . esc_attr($facebook) . '" />';
    echo '</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_regidor_twitter">Twitter</label>';
    echo '<input type="url" id="_regidor_twitter" placeholder="https://" name="_regidor_twitter" value="' . esc_attr($twitter) . '" />';
    echo '</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_regidor_instagram">Instagram</label>';
    echo '<input type="url" id="_regidor_instagram" placeholder="https://" name="_regidor_instagram" value="' . esc_attr($instagram) . '" />';
    echo '</div>';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function regidors_metabox_save ($post_id) {
    if (!isset($_POST['regidors_meta_box_nonce'])
    || !wp_verify_nonce( $_POST['regidors_meta_box_nonce'], 'regidors_save_meta_box_data')
    || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    || !current_user_can('edit_post', $post_id)) {
        return;
    }

    update_post_meta($post_id, '_regidor_description', sanitize_text_field($_POST['_regidor_description']));
    update_post_meta($post_id, '_regidor_email', sanitize_text_field($_POST['_regidor_email']));
    update_post_meta($post_id, '_regidor_facebook', sanitize_text_field($_POST['_regidor_facebook']));
    update_post_meta($post_id, '_regidor_twitter', sanitize_text_field($_POST['_regidor_twitter']));
    update_post_meta($post_id, '_regidor_instagram', sanitize_text_field($_POST['_regidor_instagram']));
}
add_action('save_post', 'regidors_metabox_save');

/**
 * Register page metabox
 */
function register_regidors_category_metabox () {
  add_meta_box(
      'regidors-category',
      'Llistat de perfils',
      'regidors_category_metabox_callback',
      'page',
      'side'
  );
}
add_action('add_meta_boxes', 'register_regidors_category_metabox');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function regidors_category_metabox_callback ($post) {
    wp_nonce_field('regidors_category_save_meta_box_data', 'regidors_category_meta_box_nonce' );
    $selectedCategory = get_post_meta($post->ID, '_regidors_category', true);
    $categories = get_terms(['taxonomy' => 'type', 'hide_empty' => false]);
    echo '<select name="_regidors_category">';
    echo '<option value="">Tots els perfils</option>';
    foreach($categories as $category) {
      $selected = ($selectedCategory == $category->term_id) ? 'selected' : '';
      echo '<option value="' . $category->term_id . '" ' . $selected . '>' . $category->name . '</option>';
    }
    echo '</select>';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function regidors_category_metabox_save ($post_id) {
    if (!isset($_POST['regidors_category_meta_box_nonce'])
    || !wp_verify_nonce( $_POST['regidors_category_meta_box_nonce'], 'regidors_category_save_meta_box_data')
    || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    || !current_user_can('edit_post', $post_id)) {
        return;
    }

    update_post_meta($post_id, '_regidors_category', sanitize_text_field($_POST['_regidors_category']));
}
add_action('save_post', 'regidors_category_metabox_save');