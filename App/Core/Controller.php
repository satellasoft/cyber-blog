<?php

namespace App\Core;

class Controller
{

    /**
     * Carrega uma página de template do Twig a partir do diretório e nome especificado.
     * Não informar .twig.php junto ao nome da página, pois é inserido automaticamente
     *
     * @param  string $page Diretório e página do arquivo de twig
     * @param  array $params array associativo com os parâmetros a serem passados para o twig
     * @return void Imprime o HTML gerado pelo Twig
     */
    protected function view(string $page, array $params = [])
    {
        $page = str_replace('.', '/', $page);

        $page .= '.twig.php';

        $loader = new \Twig\Loader\FilesystemLoader('../App/Site/View');

        $twig = new \Twig\Environment($loader);

        $twig->addGlobal('BASE', BASE);

        echo $twig->render($page, $params);
    }
}
