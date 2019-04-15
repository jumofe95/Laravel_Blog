<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index (){
        return 'Usuarios';
    }

    function showUser ($id) {
        return "Mostrando detalle del usuario: {$id}";
    }

    function createUser (){
        return 'Creando nuevo usuario';
    }


}
