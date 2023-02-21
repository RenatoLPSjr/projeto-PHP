<?php

namespace Sts\Controllers;

class Home
{
    private array $data;

    public function index()
    {
        $this->data = [];
        $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}