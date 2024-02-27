<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VueloAsiento extends Model
{
    protected $table = '_vuelos__asientos';
    public $timestamps = true;

    protected $fillable = [
        'idTipoAsiento', 'numeroVuelo', 'numeroAsiento',
    ];
}
