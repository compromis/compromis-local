<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function local() {
        global $wpdb, $blog_id;
        return $wpdb->get_row($wpdb->prepare('SELECT * FROM webs_locals WHERE blogid = %d LIMIT 1', $blog_id));
    }

    public function headerImage() {
        return ((is_single() || is_page()) && has_post_thumbnail() && get_post_type() != 'regidor')
            ? get_the_post_thumbnail_url(null, 'cover')
            : get_header_image();
    }
}
