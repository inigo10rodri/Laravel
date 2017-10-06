@extends('layouts.principal')



@section('content')
    <form method=post action="/mensajeAgur">
        {{ csrf_field()}}
        <input type= "email" name="correo" value="Correo electronico" required></input><br>
        <input type="text" name="nombre" value="Nombre" required></input><br>
        <input type="submit" name="aceptar" value="Enviar"></input>

    </form>

@stop