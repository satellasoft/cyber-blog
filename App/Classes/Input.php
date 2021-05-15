<?php

namespace App\Classes;

/**
 * Gerencia os tipos de entrada GET e POST
 */
class Input
{
    /**
     * Faz uma requisição do tipo GET
     *
     * @param  string $param Nome da variável ou da query
     * @param  int $filter Constate com o filtro para a variável
     * @return string Retorna false se não encontrar ou o conteúdo encontrado
     */
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING): string
    {
        return filter_input(INPUT_GET, $param, $filter);
    }

    /**
     * Faz uma requisição do tipo POST
     *
     * @param  string $param Nome da variável ou da query
     * @param  int $filter Constate com o filtro para a variável
     * @return string Retorna false se não encontrar ou o conteúdo encontrado
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING): string
    {
        return filter_input(INPUT_POST, $param, $filter);
    }
}
