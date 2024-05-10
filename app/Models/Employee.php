<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address','phone', 'salary', 'deptid'];

    public function departments()
    {
        return  $this->belongsTo(Department::class);
    }

    public function attendances()
    {
        return  $this->hasMany(Attendance::class);
    }

    public function balances()
    {
        return  $this->hasMany(Balance::class);
    }

    public function trainings()
    {
        return  $this->hasMany(Training::class);
    }
}
