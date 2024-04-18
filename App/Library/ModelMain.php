<?php

namespace App\Library;

class ModelMain
{
    protected $db;
    public $table;

    /**
     * construct
     */
    public function __construct() 
    {
        $this->db = new Database(
            $_ENV['DB_CONNECTION'],
            $_ENV['DB_HOST'],
            $_ENV['DB_PORT'],
            $_ENV['DB_DATABASE'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        );
    }
}