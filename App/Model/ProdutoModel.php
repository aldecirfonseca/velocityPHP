<?php

use App\Library\ModelMain;

class ProdutoModel extends ModelMain
{
    public $table = "produto";

    public function getProdutoComboBox($categoria_id)
    {
        $rsc = $this->db->dbSelect(
            "SELECT p.id, p.descricao 
            FROM {$this->table} AS p
            INNER JOIN categoria AS c ON c.id = p.categoria_id
            WHERE p.categoria_id = ?
            ORDER BY p.descricao",
            [$categoria_id]
        );

        if ($this->db->dbNumeroLinhas($rsc) > 0) {
            return $this->db->dbBuscaArrayAll($rsc);
        } else {
            return [];
        }
    }
}