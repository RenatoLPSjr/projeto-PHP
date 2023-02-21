<?php

namespace Sts\Controllers;

class Erro
{
    private array $data;
    public function index()
    {
        $this->data = [];
        $loadView = new \Core\ConfigView("sts/Views/erro/erro", $this->data);
        $loadView->loadView();
    }
}   