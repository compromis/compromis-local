<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateRegidors extends Controller
{
    public function regidors()
    {
        $category = get_post_meta(get_the_ID(), '_regidors_category', true);

        $tax_query = ($category) ? [[
            'taxonomy' => 'type',
            'field' => 'term_id',
            'terms' => $category
        ]] : false;

        return get_posts([
            'post_type' => 'regidor',
            'orderby' => 'menu_order',
            'nopaging' => true,
            'tax_query' => $tax_query
        ]);
    }
}
