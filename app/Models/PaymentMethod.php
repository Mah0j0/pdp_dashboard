<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';
    protected $fillable = ['name', 'payment_date', 'status'];
    
    //has many reservations
    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
