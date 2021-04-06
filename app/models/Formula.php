<?php

namespace app\models;
use app\core\Model;

class Formula{
    public function quadrado(){
        return "(base x base)/2";
        # code...
    }
    public function triangulo(){
        return "base x altura";
        # code...
    }
    public function retangulo(){
        return "base x altura";
        # code...
    }
    public function circulo(){
        return "pi x raio * raio";
        # code...
    }
}