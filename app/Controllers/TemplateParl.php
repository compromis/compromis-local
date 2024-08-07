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
                    'url' => 'https://28m.compromis.net/programa/',
                    'image' => 'https://compromis.net/wp-content/uploads/2023/05/portada-programa-28m.png',
                    'title' => 'Eleccions a Corts 2023'
                ],
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
                    'url' => 'https://sumar.compromis.net/#Programa',
                    'image' => 'https://compromis.net/wp-content/uploads/2023/07/programa-compromis-sumar.png',
                    'title' => 'Eleccions Generals 2023'
                ],
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
                    'url' => 'http://programa2011.compromis.net',
                    'image' => 'http://programa2011.compromis.net/portada.png',
                    'title' => 'Eleccions Generals 2011'
                ]
            ],
            'europarl' => [
                [
                    'url' => 'https://europa.compromis.net/#programa',
                    'image' => 'http://europarl.compromis.net/files/2024/06/Programa_Eleccions_Europees_24.jpg',
                    'title' => 'Eleccions Europees 2024'
                ],
                [
                    'url' => 'https://imparables.compromis.net/docs/programa_europa_val.pdf',
                    'image' => 'https://compromis.net/wp-content/uploads/2019/05/portada-eur.jpg',
                    'title' => 'Eleccions Europees 2019'
                ],
                [
                    'url' => 'https://euparl14.compromis.net/programa/',
                    'image' => 'https://europarl.compromis.net/wp-content/themes/Compromis_Corts/images/programaeuropees.jpg',
                    'title' => 'Eleccions Europees 2014'
                ],
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
            'senat' => 'congres',
            'europarl' => 'europarl'
        ];
    }
}
