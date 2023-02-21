<?php

namespace Core;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
    die("Erro: Pagina nao encontrada");
}

/**
 * Carregar as paginas das views
 */

class ConfigView
{

    public function __construct(private string $nameView, private array | string | null $data)
    {
        
    }

    public function loadView(): void
    {
        if(file_exists('app/' . $this->nameView . '.php')){
            include 'app/sts/Views/include/header.php';
            include 'app/'. $this->nameView . '.php';
            include 'app/sts/Views/include/footer.php';
        }else{
            echo "Não encontrou <br>";
        }
    }
}