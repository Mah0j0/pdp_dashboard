<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name', 'lastname', 'email', 'document', 'phone_number', 'status', 'employee_id', 'work_role_id'];
    //has one work role
    public function work_role(): BelongsTo
    {
        return $this->belongsTo(WorkRole::class);
    }
    //has one role
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    //has many reservations
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    //belongd to one user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
