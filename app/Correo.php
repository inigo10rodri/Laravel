<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    //Nombre de la tabla

    protected $table = 'correos';
    
    protected $fillable = ['correo','nombre'];
}
