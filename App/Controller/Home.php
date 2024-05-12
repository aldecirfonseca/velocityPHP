<?php
// App\Controller\Home.php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    public function index()
    {
        return $this->loadView("home");
    }

    /**
     * produto
     *
     * @return void
     */
    public function produto()
    {
        // Carregando o model Categoria 
        $categoriaModel = $this->loadModel("Categoria");
        
        // Buscando a lista de categorias 
        $aCategoria = $categoriaModel->lista("descricao");

        return $this->loadView("produto", $aCategoria);
    }

    public function contato()
    {
        return $this->loadView("contato");
    }
}