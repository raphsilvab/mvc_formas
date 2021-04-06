<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Area;

class FiguraController extends Controller{
    
   public function index(){
       $dados["view"] = "formas";
       $this->load("template", $dados);
   }
   public function changeFigura(){
       $ojbArea = new Area();
       $area = null;

       $figura = $_POST["figura"];
       $base   = $_POST["base"];
       $altura = $_POST["altura"];
       $raio   = $_POST["raio"];

       if ($figura=="quadrado") {
           $area = $ojbArea->quadrado($base);             
       }else if($figura=="triangulo"){
           $area = $ojbArea->triangulo($base,$altura);
       }else if($figura=="retangulo"){
           $area = $ojbArea->retangulo($base,$altura);
       }else if($figura=="circulo"){
           $area = $ojbArea->circulo($raio);
       }else{
           $area = 0;
       }

       
        $dados["area"] = $area;
        $dados["view"] = "formas";
        $this->load("template", $dados);
        
        
   } 
}
