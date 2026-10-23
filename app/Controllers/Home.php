<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'titulo'  => 'Hola Mundo',
            'mensaje' => '¡Hola mundo desde CodeIgniter 4!',
        ];

        return view('hola_mundo', $data);
    }
}
