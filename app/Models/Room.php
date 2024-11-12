<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['name', 'number', 'price', 'status', 'room_type_id', 'status_id'];
    //has one room_type
    public function room_type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }
    //has one room_status
    public function room_statuses(): BelongsTo
    {
        return $this->belongsTo(RoomStatuses::class);
    }
    //has many reservations
    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
