<?php

/**
 * getStatus
 *
 * @param int $statusRegistro 
 * @return string
 */
function getStatus($statusRegistro)
{
    if ($statusRegistro == 1) {
        return "Ativo";
    } elseif ($statusRegistro == 2) {
        return "Inativo";
    } else {
        return "...";
    }
}

/**
 * formaValor
 *
 * @param float $valor 
 * @param int $decimais 
 * @return float
 */
function formataValor($valor, $decimais = 2)
{
    return number_format($valor, $decimais, ",", ".");
}