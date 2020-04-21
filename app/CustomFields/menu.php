<?php

function icons_custom_field($item_id) {
    $icons = [
        'document', 'inici', 'info', 'representant', 'suma',
        'noticies', 'arxiu', 'contacte', 'participa', 'agenda',
        'videos', 'enquesta', 'misc', 'bandera', 'urna', 'megafon'
    ];
    ?>
    <p class="menu-icon description description-wide">
        <label for="menu-icon-for-<?php echo $item_id ;?>">
            Icona
        </label>
        <br />
        <select name="menu-item-classes[<?php echo $item_id ;?>]" id="menu-icon-for-<?php echo $item_id ;?>">
            <?php foreach($icons as $icon): ?>
            <option value="<?php echo 'icon-' . $icon; ?>" <?php echo ('icon-' . $icon === $item->classes[0]) ? 'selected' : ''; ?>>
                <?php echo $icon; ?>
            </option>
            <?php endforeach; ?>
        </select>
    </p>
    <style>.field-css-classes { display: none; }</style>
    <?php
}

add_action('wp_nav_menu_item_custom_fields', 'icons_custom_field', 10, 2);
// add_action('wp_nav_menu_item_custom_fields_customize_template', 'icons_custom_field', 10, 2);
