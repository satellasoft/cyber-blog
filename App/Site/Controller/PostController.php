<?php

namespace App\Site\Controller;

use App\Core\Controller;

class PostController extends Controller
{

    /**
     * Carrega a página inicial do site
     *
     * @return void
     */
    public function index()
    {
    }

    public function ver()
    {
        echo 'ver';
    }

    public function ultimas()
    {
    }

    public function buscar(string $termo = ''){

        $termo = filter_var(urldecode($termo), FILTER_SANITIZE_STRING);

        dd($termo);
    }
}
