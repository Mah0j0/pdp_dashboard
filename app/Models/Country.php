<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['name', 'status'];
    //has many cities
    public function cities():HasMany
    {
        return $this->hasMany(City::class);
    }
    //has many clients
    public function clients():HasMany
    {
        return $this->hasMany(Client::class);
    }
}
