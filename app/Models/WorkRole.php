<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkRole extends Model
{
    protected $table = 'work_roles';
    protected $fillable = ['name', 'status'];
    //has many employees
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
