<?php

namespace app\models;
use app\core\Model;


class Contador{

    public function assinar($nome,$sala){
        $resultado = "Documento assinado por " . $nome . " que trabalha na sala " . $sala;
        return $resultado;

    }

    public function lista($sala){
        $lista = "
                01 - Raphael<br>
                02 - Airton<br>
                03 - Leonardo<br>
                04 - Clarinda
                        ";
    return $lista;
    }

    public function inserir($contador,$sala){
        $lst = $this->lista($sala)."<br>05 - ".$contador;
        return $lst;
    }
    

}