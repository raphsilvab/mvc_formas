<?php
namespace app\controllers;
use app\core\Controller;

use app\models\Contador;

class ContadorController extends Controller{ 

    public function index(){

    }
    public function assinatura($sala,$nome){
        $objContador = new Contador();

        $dados["assinatura"] = $objContador->assinar($sala,$nome);
        $this->load("Index", $dados);
        
    }
    public function lista($sala){
        $objContador = new Contador();

        /*$contadores = $objContador->lista($sala);

        echo "<h1>Lista dos contadores da sala: $sala </h1><hr>".$contadores;*/
        $lista["lista"] = $objContador->lista($sala);
        $this->load("Index", $lista);
    }
    public function inserir($contador,$sala){
        $objContador = new Contador;
        /*$lista = $objContador->inserir($contador,$sala);
        echo "<h1>Lista dos contadores da sala: $sala </h1><hr>" .$lista;*/

        $data["inserir"] = $lista = $objContador->inserir($contador,$sala);
        $this->load("Index", $data);
    }
    
}