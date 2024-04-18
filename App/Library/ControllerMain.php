<?php

namespace App\Library;

class ControllerMain
{
    public $dados;
    public $model;

    /**
     * construct
     *
     * @param array $dados 
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
        $this->loadHelper("Ambiente");

        // criando o objeto do model e conectando ao Database
        $cModel = $dados['model'] . "Model";

        // verifica se o arquivo model existe para ser carrega
        if (file_exists(".." . DS . "App" . DS . "Model" . DS . $cModel . ".php")) {
            require_once ".." . DS . "App" . DS . "Model" . DS . $cModel . ".php";
            $this->model = new $cModel();       // cria o objeto model
        }
    }

    /**
     * loadHelper
     *
     * @param string $nome 
     * @return void
     */
    public function loadHelper($nome)
    {
        $nameFile = ".." . DS . "App" . DS . "Helper" . DS . "{$nome}.php";

        if (file_exists($nameFile)) {
            require_once $nameFile;
        }
    }

    /**
     * loadView
     *
     * @param string $nomeView 
     * @param array $dados 
     * @param bool $exibeCabRodape 
     * @return void
     */
    public function loadView($nomeView, $dados = [], $exibeCabRodape = true)
    {
        $this->dados    = $dados;
        $caminho        = ".." . DS . "App" . DS . "View" . DS;

        // carrega o cabeçalho
        if ($exibeCabRodape) {
            require_once $caminho . 'comuns' . DS . "cabecalho.php";
        }

        if (file_exists($caminho . $nomeView . ".php")) {
            require_once $caminho . $nomeView . ".php";
        } else {
            require_once $caminho . "comuns" . DS . "erros.php";
        }

        // carrega o rodape
        if ($exibeCabRodape) {
            require_once $caminho . 'comuns' . DS . "rodape.php";
        }
    }
}