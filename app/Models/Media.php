<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media'; //Tabla 'media'
    protected $fillable = [ //Campos que se llenaran masivamente
        'name',
        'type',
        'location',
        'dimensions',
        'price_per_day',
        'status'
    ];
    //Para tipar datos automaticamente
    protected $casts = [
        'price_per_day' => 'decimal:2',
        'status' => 'boolean',
    ];
    //Relaciones con otras entidades: un medio publicitario tendra muchas RESERVAS (Bookings)
    public function bookings()
    {
        return $this->hasMany(Bookings::class);
    }
}
