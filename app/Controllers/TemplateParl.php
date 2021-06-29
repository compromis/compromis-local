<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateParl extends Controller
{
    public function modules()
    {
        return explode(',', get_option('parl_modules', 'posts,representatives,videos,programes'));
    }

    public function posts()
    {
        return get_posts([
            'numberposts' => 2,
            'category_name' => get_option('home_categories', 'blog,premsa,premsa-arxiu,general,noticies')
        ]);
    }

    public function regidors()
    {
        return get_posts([
            'post_type' => 'regidor',
            'orderby' => 'menu_order',
            'numberposts' => 6,
            'post__in' => get_option('home_regidors', false)
        ]);
    }

    public function videos()
    {
        return get_posts([
            'category_name' => 'intervencions',
            'numberposts' => 3
        ]);
    }

    public function programes() {
        return [
            'corts' => [
                [
                    'url' => 'https://imparables.compromis.net/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2019/05/portada-genaut.jpg',
                    'title' => 'Eleccions a Corts 2019'
                ],
                [
                    'url' => 'http://ambvalentia.com/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2014/10/programa.png',
                    'title' => 'Eleccions a Corts 2015'
                ],
                [
                    'url' => 'https://compromis.net/programa-2011-2015',
                    'image' => 'https://compromis.net/wp-content/uploads/2014/10/programacorts.png',
                    'title' => 'Eleccions a Corts 2011'
                ]
            ],
            'congres' => [
                [
                    'url' => 'https://n10.compromis.net/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2019/11/programa-mescompromis.png',
                    'title' => 'Eleccions Generals 10N 2019'
                ],
                [
                    'url' => 'https://imparables.compromis.net/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2019/05/portada-genaut.jpg',
                    'title' => 'Eleccions Generals 28A 2019'
                ],
                [
                    'url' => 'http://alavalenciana.org/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2014/10/programa_val.jpg',
                    'title' => 'Eleccions Generals 2016'
                ],
                [
                    'url' => 'http://eselmoment.com/programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2014/10/portada-generals.jpg',
                    'title' => 'Eleccions Generals 2015'
                ],
                [
                    'url' => 'http://joanbaldovi.com/programa',
                    'image' => 'https://joanbaldovi.com/wp-content/themes/Compromis_Institucional/images/programa.png',
                    'title' => 'Eleccions Generals 2011'
                ]
            ]
        ];
    }

    public function rels() {
        return [
            'corts' => 'corts',
            'dipalc' => 'corts',
            'dipval' => 'corts',
            'dipcas' => 'corts',
            'fvmp' => 'corts',
            'congres' => 'congres',
            'senat' => 'congres'
        ];
    }
}
