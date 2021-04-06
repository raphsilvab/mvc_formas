<?php
namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller{
    
   public function index(){
       $dados["view"] = "lista";
       $this->load("template", $dados);
   } 

   public function cadastro(){
       $dados["view"] = "cadastro";
       $this->load("template",$dados);
       # code...
   }
}
