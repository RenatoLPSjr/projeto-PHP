<?php

namespace Sts\Controllers;

class Empresa
{
    private array | string | null $data;
    public function index()
    {
        $this->data = [];
        $loadView = new \Core\ConfigView("sts/Views/empresa/empresa", $this->data);
        $loadView->loadView();
    }
}