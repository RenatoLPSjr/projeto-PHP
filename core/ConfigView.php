<?php

namespace Core;
/**
 * Carregar as paginas das views
 */

class ConfigView
{

    public function __construct(private string $nameView, private array $data)
    {
        
    }

    public function loadView()
    {
        if(file_exists('app/' . $this->nameView . '.php')){
            echo "Encontorou <br>";
        }else{
            echo "Não encontrou <br>";
        }
    }
}