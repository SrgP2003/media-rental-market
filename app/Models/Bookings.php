<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookings extends Model
{
    use HasFactory;
    protected $table = "bookins"; //Tabla 'bookings'
    protected $fillable = [
        'media_id',
        'customer_id',
        'starts_at',
        'ends_at',
        'total_price',
        'status',
    ];
    //Tipado de datos automatico
    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'total_price' => 'decimal:2',
    ];

    //Una reserva pertenece a un medio publicitario (Media)
    public function media() {
        return $this->belongsTo(Media::class);
    }
    //Una reserva pertenece a un cliente (Customer)
    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
