<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;

class CorreoController extends Controller
{
    public function anadirCorreo()
    {
        //Validamos que el correo introducido sea unico en la tabla correos.
        $this->validate(request(), ['correo' => "bail|required|string|unique:correos|max:30"]);
        $this->validate(request(), ['nombre' => "bail|required|string||max:10"]);
        $correoUsuario = request()->get('correo');//nombre en el campo de la vista
        $nombreUsuario = request()->get('nombre');
        $correo = new Correo();//nuevo correo
        //Le asignamos a la variable correoUsuario el valor que contiene correo
        $correo->correo = $correoUsuario;
        $correo->nombre = $nombreUsuario;
        //guardamos
        $correo->save();
        //devolvemos la vista contenida en mensajeAgur
        return (view('/mensajeAgur'));
    }
}
