<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name','slug'];

    public function roles(){
        return $this->belongsTomany(Role::class,'roles_permissions');
    }

    public function users(){
        return $this->belongsTomany(User::class,'users_permission');
    }
}
