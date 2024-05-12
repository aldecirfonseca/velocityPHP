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

    public function getProdutoComboBox()
    {
        $dados = $this->model->getProdutoComboBox($this->getId());

        if (count($dados) == 0) {
            $dados[] = [
                "id" => "",
                "descricao" => "... Selecione uma Categoria ..."
            ];
        }

        echo json_encode($dados);
    }
}