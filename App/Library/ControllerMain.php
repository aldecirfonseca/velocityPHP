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
        $this->loadHelper("Crud");

        // criando o objeto do model e conectando ao Database
        $cModel = $dados['model'] . "Model";

        // verifica se o arquivo model existe para ser carrega
        if (file_exists(".." . DS . "App" . DS . "Model" . DS . $cModel . ".php")) {
            require_once ".." . DS . "App" . DS . "Model" . DS . $cModel . ".php";
            $this->model = new $cModel();       // cria o objeto model
        }
    }


    /**
     * loadModel
     *
     * @param string $nomeModel 
     * @return mixed
     */
    public function loadModel($nomeModel)
    {
        $nomeModel .= "Model";
        $caminha = ".." . DS . "App" . DS . "Model" . DS;

        if (file_exists($caminha . $nomeModel . '.php')) {
            require_once $caminha . $nomeModel . ".php";
            return new $nomeModel();
        } else {
            return null;
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
        $aDados   = $dados;
        $caminho = ".." . DS . "App" . DS . "View" . DS;

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

    /**
     * getController
     *
     * @return string
     */
    public function getController()
    {
        return $this->dados['controller'];
    }

    /**
     * getAcao
     *
     * @return string
     */
    public function getAcao()
    {
        return $this->dados['acao'];
    }

    /**
     * getId
     *
     * @return int
     */
    public function getId()
    {  
        if (isset($this->dados['get']['parametros'])) {
            $parametros = explode('/', $this->dados['get']['parametros']);
            return (isset($parametros[3]) ?  $parametros[3] : null);
        } else {
            return null;
        }
    }

    /**
     * getPost
     *
     * @return array
     */
    public function getPost()
    {
        return $this->dados['post'];
    }

    /**
     * getGet
     *
     * @return array
     */
    public function getGet()
    {
        return $this->dados['get'];
    }

    /**
     * getOutrosParametros
     *
     * @return array
     */
    public function getOutrosParametros()
    {
        return $this->dados['outrosParametros'];
    }
}