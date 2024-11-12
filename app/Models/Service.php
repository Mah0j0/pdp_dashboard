<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['name', 'price', 'details', 'status'];
    
    //has many reservations
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_services', 'service_id', 'reservation_id');
    }
}
