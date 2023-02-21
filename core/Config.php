<?php

namespace Core;

abstract class Config
{
    protected function config(): void
    {
        define('URL', 'http://localhost/projeto-PHP/');
        define('URLADM', 'http://localhost/projeto-PHP/adm/');

        define('CONTROLLER', 'Home');
        define('CONTROLLERERRO', 'Erro');

        define('EMAILADM', 'renato.lps.jr@gmail.com');

        
    }
}