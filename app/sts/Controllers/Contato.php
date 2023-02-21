<?php

namespace Sts\Controllers;

class Contato
{
    private array | string | null $data;
    public function index()
    {
        $this->data = "Teste";
        $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}