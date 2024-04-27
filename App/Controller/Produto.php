<?php

use App\Library\ControllerMain;

class Produto extends ControllerMain
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $this->loadView("restrita/listaProduto", $this->model->lista("descricao"));
    }
}