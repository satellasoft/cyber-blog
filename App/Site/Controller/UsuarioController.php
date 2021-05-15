<?php

namespace App\Site\Controller;

use App\Core\Controller;

class UsuarioController extends Controller
{
    public function __construct()
    {
        // echo 'Método construtor';
    }

    public function index()
    {
        echo 'Método index';
    }

    public function teste()
    {
        echo 'método teste';
    }

    public function message(string $msg)
    {
        echo $msg;
    }
}
