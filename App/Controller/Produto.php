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
        return $this->loadView("restrita/listaProduto", $this->model->lista("descricao"));
    }
}