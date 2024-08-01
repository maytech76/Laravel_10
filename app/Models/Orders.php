<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    // Indicar el nombre de la tabla si no sigue la convención de pluralización
    protected $table = 'orders';

    // Definir los campos que pueden ser asignados en masa
    protected $fillable = [
        'vci',
        'buy_order',
        'card_number',
        'transaction_date',
        'authorization_code',
        'payment_type_code',
        'session_id',
        'amount',
        'description'
    ];
}
