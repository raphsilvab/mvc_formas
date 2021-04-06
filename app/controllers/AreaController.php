<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Area;
use app\models\Figura;
use app\models\Formula;

class AreaController extends Controller{
    
   public function index(){
       $dados["figura"] = null;
       $dados["formula"] = null;
       $dados["view"] = "formas";
       $this->load("template", $dados);
   }
   public function calcula(){
       $ojbArea = new Area();
       $objFigura = new Figura();
       $objFormula = new Formula();
       $area = null;
       $formula = null;

       $figura = $_POST["figura"];
       $base   = $_POST["base"];
       $altura = $_POST["altura"];
       $raio   = $_POST["raio"];

       if ($figura=="quadrado") {
           $area = $ojbArea->quadrado($base);
           $figura = $objFigura->quadrado();
           $formula = $objFormula->quadrado();             
       }else if($figura=="triangulo"){
           $area = $ojbArea->triangulo($base,$altura);
           $figura = $objFigura->triangulo();
           $formula = $objFormula->triangulo();
       }else if($figura=="retangulo"){
           $area = $ojbArea->retangulo($base,$altura);
           $figura = $objFigura->retangulo();
           $formula = $objFormula->retangulo();
       }else if($figura=="circulo"){
           $area = $ojbArea->circulo($raio);
           $figura = $objFigura->circulo();
           $formula = $objFormula->circulo();
       }else{
           $area = 0;
       }

       
        $dados["base"] = $base;
        $dados["altura"] = $altura;
        $dados["raio"] = $raio;
        $dados["area"] = $area;
        $dados["figura"] = $figura;
        $dados["formula"] = $formula;
        $dados["view"] = "formas";
        $this->load("template", $dados);
        
        
   }   
}
