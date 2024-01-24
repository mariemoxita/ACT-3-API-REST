<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }


public function test1(){


    $variable= array(

        "usuario"=>"Eli2300722341",
            "nombres"=>"Maria Elizabeth",
            "apellidos"=>"Ordoñez Dominguez",
            "cuidad"=>"Guayas/Guayaquil",
           

    );


return $this->response->setJson($variable);
}

public function test2(){


    $variable= array(

        "ropa"=>"Conjunto de vestir",
        "tipo de tela"=>"algodon",
        "color"=>"verde y blanco",
        "precio"=>"$30",


    );


return $this->response->setJson($variable);
}


}
