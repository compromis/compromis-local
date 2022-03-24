<?php

/**
 * Register second thumbnail metabox
 */
function register_second_thumbnail_metabox () {
    add_meta_box(
        'second-info',
        'Foto de persona',
        'second_thumbnail_metabox_callback',
        'post',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'register_second_thumbnail_metabox');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function second_thumbnail_metabox_callback ($post) {
    wp_nonce_field('second_thumbnail_save_meta_box_data', 'second_thumbnail_meta_box_nonce' );
    $second_thumbnail = get_post_meta($post->ID, '_second_thumbnail', true);
    $second_thumbnail_alt = get_post_meta($post->ID, '_second_thumbnail_alt', true);
    $second_thumbnail_is_primary = get_post_meta($post->ID, '_second_thumbnail_is_primary', true);

    echo '
      <style>
        .instructions {
          color: #a1a2a3;
        }

        .metabox-field {
          padding: 1rem 0;
        }

        .metabox-field label {
          font-weight: bold;
          display: block;
          margin-bottom: .5rem;
        }

        .metabox-field input[type=text],
        .metabox-field input[type=url] {
          width: 100%;
        }
      </style>
    ';

    echo '<div class="instructions">ℹ️ Es recomana pujar fotos de persones en aquest apartat i no a la imatge destacada.<br><br>Per exemple, ací aniria la foto del regidor i a la imatge destacada una foto genèrica sobre el tema de la notícia.</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_second_thumbnail">Foto</label>';
    echo '<div style="display: flex;">';
    echo '<button class="upload-second-thumbnail button button-secondary" style="margin-right: 10px;">Pujar foto</button>';
    echo '<input type="url" placeholder="https://" name="_second_thumbnail" id="_second_thumbnail" value="' . $second_thumbnail . '" />';
    echo '</div>';
    echo '</div>';

    echo '<div class="metabox-field">';
    echo '<label for="_second_thumbnail_alt">Text descriptiu</label>';
    echo '<input type="text" placeholder="Regidor de..." name="_second_thumbnail_alt" id="_second_thumbnail_alt" value="' . $second_thumbnail_alt . '" />';
    echo '</div>';

    $checked = ($second_thumbnail_is_primary) ? 'checked' : '';
    echo '<div class="metabox-field">';
    echo '<label><input type="checkbox" name="_second_thumbnail_is_primary" value="true" ' . $checked . ' /> Utilitzar com a foto principal</label>';
    echo '</div>';
    ?>
    <script>
    jQuery(function($){
        $('.upload-second-thumbnail').on('click', function(e){
            e.preventDefault();
            aw_uploader = wp.media({
                title: 'Foto de persona',
                button: {
                    text: 'Use this image'
                },
                multiple: false
            }).on('select', function() {
                var attachment = aw_uploader.state().get('selection').first().toJSON();
                $('#_second_thumbnail').val(attachment.url);
            })
            .open();
        });
    });
    </script>
<?php
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function second_thumbnail_metabox_save ($post_id) {
    if (!isset($_POST['second_thumbnail_meta_box_nonce'])
    || !wp_verify_nonce($_POST['second_thumbnail_meta_box_nonce'], 'second_thumbnail_save_meta_box_data')
    || (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    || !current_user_can('edit_post', $post_id)) {
        return;
    }

    update_post_meta($post_id, '_second_thumbnail', sanitize_text_field($_POST['_second_thumbnail']));
    update_post_meta($post_id, '_second_thumbnail_alt', sanitize_text_field($_POST['_second_thumbnail_alt']));
    update_post_meta($post_id, '_second_thumbnail_is_primary', sanitize_text_field($_POST['_second_thumbnail_is_primary']));
}
add_action('save_post', 'second_thumbnail_metabox_save');
