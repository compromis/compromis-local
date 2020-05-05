<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateParl extends Controller
{
    public function posts()
    {
        return get_posts([
            'numberposts' => 2
        ]);
    }

    public function regidors()
    {
        return get_posts([
            'post_type' => 'regidor',
            'orderby' => 'menu_order',
            'numberposts' => 6
        ]);
    }

    public function videos()
    {
        return get_posts([
            'category_name' => 'intervencions',
            'numberposts' => 3
        ]);
    }
}
