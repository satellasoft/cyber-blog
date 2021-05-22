<?php

namespace App\Site\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    
    /**
     * Carrega a página inicial do site
     *
     * @return void
     */
    public function index()
    {
        $posts = [
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link'  => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link'  => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Aprenda a trocar de celular',
                'image' => null,
                'link'  => 'como-trocar-de-celular'
            ],
            [
                'title' => 'Como mudar de canal na sua TV',
                'image' => 'https://satellasoft.com/img/recomendacao/ebook-aprenda-a-planejar-seus-jogos.jpg',
                'link'  => 'como-mudar-de-canal'
            ]
        ];

        return $this->view('home.index', [
            'posts' => $posts
        ]);
    }
}
