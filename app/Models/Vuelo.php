<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    protected $table = '_vuelos';
    protected $primaryKey = 'numeroVuelo';
    public $timestamps = true;
    protected $fillable = [
        'origen', 'destino', 'numeroAsientos', 'fecha de vuelo',
    ];
}
