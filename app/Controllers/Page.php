<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    public function children()
    {
        global $post;

        if ($post->post_parent) {
            $ancestors = get_post_ancestors($post->ID);
            $root = count($ancestors) - 1;
            $parent = $ancestors[$root];

            return wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $parent . '&echo=0');
        }

        return wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
    }
}