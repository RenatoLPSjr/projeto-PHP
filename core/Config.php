<?php

namespace Core;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
    die("Erro: Pagina nao encontrada");
}

abstract class Config
{
    protected function config(): void
    {
        define('URL', 'http://localhost/projeto-PHP/');
        define('URLADM', 'http://localhost/projeto-PHP/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        define('EMAILADM', 'renato.lps.jr@gmail.com');   

        //Credencias banco de Dados

        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'teste');
        define('PORT', 3306);
    }
}