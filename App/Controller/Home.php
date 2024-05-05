<?php
// App\Controller\Home.php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    public function index()
    {
        return $this->loadView("home");
    }

    public function contato()
    {
        return $this->loadView("contato");
    }
}