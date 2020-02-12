<?php

namespace pokemon\Http\Controllers;

use pokemon\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba($param){
        return 'Estoy dentro de prueba controller y este es el parametro'.$param;
    }
}