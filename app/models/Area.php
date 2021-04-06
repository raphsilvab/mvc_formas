<?php

namespace app\models;
use app\core\Model;

class Area{
    public function quadrado($lado){
        return $lado * $lado;
        # code...
    }

    public function circulo($raio){
        return pi() * $raio * $raio;
        # code...
    }

    public function retangulo($base,$altura){
        return $base * $altura;
        # code...
    }

    public function triangulo($base,$altura){
        return $base * $altura / 2;
        # code...
    }
}