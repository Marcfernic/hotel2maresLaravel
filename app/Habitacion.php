<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    //
    protected $table = 'habitaciones';
    protected $attributes = [
        'numero' => assertNotNull(),
    ];
}

$habitaciones = Habitacion::all();
foreach ($habitaciones as $habitacion) {
        $habitacion = new Habitacion();
        $habitacion->numero = $habitacion->numero;
        $habitacion->categoria = $habitacion->categoria;
        $habitacion->precio = $habitacion->precio;
        $insertedId = $habitacion->id;
        $habitacion->save();
    }

    /* $habitaciones = Habitacion::all();
foreach ($habitaciones as $habitacion) {
        $habitacion = new Habitacion;
        $attributes = [
            'numero' => $habitacion->numero,
            'categoria' => $habitacion->categoria,
            'precio' => $habitacion->precio
        ];
        $insertedId = $habitacion->id;
        $habitacion->save();
    }
    */
