<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Perfil;

class UserMetadata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
         'perfil_id', 
         'telefono', 
         'apellidos', 
         'direccion', 
         'profesion', 
         'edad'
    ];

    

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
}
