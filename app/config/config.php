<?php

//se true, carrega os arquivos de produção
$prod = false;

/*
    prod.php  => produção
    local.php => QA | localhost
*/

$file = $prod ? 'prod.php' : 'local.php';

require_once('env/' . $file);
