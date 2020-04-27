<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateIndexPage extends Controller
{
    public function children()
    {
        global $post;

        return get_pages(['child_of' => $post->ID, 'sort_column' => 'menu_order']);
    }
}
