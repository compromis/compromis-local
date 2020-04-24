<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleRegidor extends Controller
{
    public function regidors()
    {
        $category = get_the_terms(get_the_ID(), 'type');
        
        $tax_query = ($category) ? [[
            'taxonomy' => 'type',
            'field' => 'term_id',
            'terms' => $category[0]->term_id
        ]] : false;

        return get_posts([
            'post_type' => 'regidor',
            'orderby' => 'menu_order',
            'nopaging' => true,
            'tax_query' => $tax_query
        ]);
    }
}
