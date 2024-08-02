<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;

class ProductosFotos extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'productos_fotos';

    public function productos()
    {
        return $this->belongsTo(Productos::class);
    }
}
