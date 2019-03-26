<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idcategoria';
    public $timesttamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion'

    ];

    protected $guarded [
        
    ];
}
