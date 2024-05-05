<?php

use App\Library\ControllerMain;

class  Categoria extends ControllerMain
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return $this->loadView("restrita/listaCategoria", $this->model->lista("descricao"));
    }

    /**
     * form
     *
     * @return void
     */
    public function form()
    {
        $dados = [];

        if ($this->getAcao() != "insert") {
            $dados = $this->model->getById($this->getId());
        }

        return $this->loadView("restrita/formCategoria", $dados);
    }

}