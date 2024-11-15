<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name', 'status'];
    //has many users
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }

}
