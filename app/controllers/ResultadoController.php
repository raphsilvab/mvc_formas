<?php
namespace app\controllers;
use app\core\Controller;

class ResultadoController extends Controller{
    
   public function index(){
       $dados["view"] = "resultado";
       $this->load("template", $dados);
   } 
}
