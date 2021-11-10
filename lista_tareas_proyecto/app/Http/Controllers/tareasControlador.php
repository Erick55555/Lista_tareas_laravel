<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tareasControlador extends Controller
{
    function mostrar(){
        return view("extends");
    }

    function anadir(){
        return "anadir";
    }

    function eliminar(){
        return "eliminar";
    }
}
