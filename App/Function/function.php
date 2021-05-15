<?php

/**
 * Utilizamos para debugar as instruções passadas por parâmetro.
 * 
 * Após a execução a aplicação é encerrada
 *
 * @param  mixed $param Parâmetro a ser debugado
 * @return void
 */
function dd($param = null)
{
    echo "<pre>";

    print_r($param);
    
    echo "</pre>";

    die();
}

/**
 * Redireciona o usuário para a URL especificada
 *
 * @param  string $url URL do endereço a ser redirecionado
 * @return void
 */
function redirect(string $url)
{
    header('Location: ' . $url);
}
