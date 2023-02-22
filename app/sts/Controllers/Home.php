<?php

namespace Sts\Controllers;

class Home
{
    private array | string | null $data;

    public function index()
    {
        $home = new \Sts\Models\StsHome();
        $this->data = $home->index();
        $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}