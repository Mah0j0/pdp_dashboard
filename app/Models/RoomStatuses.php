<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomStatuses extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['name'];
    //has many rooms
    public function rooms():HasMany
    {
        return $this->hasMany(Room::class);
    }
}
