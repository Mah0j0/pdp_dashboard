<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    protected $table = 'room_types';
    protected $fillable = ['name', 'details', 'status'];
    //has many rooms
    public function rooms():HasMany
    {
        return $this->hasMany(Room::class);
    }
}
