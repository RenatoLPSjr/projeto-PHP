<?php

if(!defined('C7E3L8K9E5')){
    header("Location: /");
    die("Erro: Pagina nao encontrada");
}

extract($this->data);

echo "ID: $id <br>";
echo "Titulo: $title_top <br>";