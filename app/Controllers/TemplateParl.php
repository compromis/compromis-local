<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateParl extends Controller
{
    public function regidors()
    {
        return get_posts([
            'post_type' => 'regidor',
            'orderby' => 'menu_order',
            'numberposts' => 6
        ]);
    }
}
