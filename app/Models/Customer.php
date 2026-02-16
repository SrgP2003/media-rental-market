<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Customer extends Model
{
    use HasFactory;
    protected $table = "customer"; //Tabla 'customer'
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    //Un cliente puede tener muchas reservas (Bookings)
    public function bookings() {
        return $this->hasMany(Bookings::class);
    }
}
