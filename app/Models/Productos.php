<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias; /* importamos el Modelo Categorias */


class Productos extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'productos';

    /* Definimos la relacion con la tabla categorias */
    public function categorias()
    {
       return $this->belongsTo(Categorias::class);
    }
}
