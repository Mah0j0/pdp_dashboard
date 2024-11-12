<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name', 'lastname', 'email', 'document', 'phone_numbers', 'special_requests', 'status', 'country_id'];  
    //has one one country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    //has many reservations
    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
