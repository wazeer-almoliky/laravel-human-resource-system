<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'type', 'empid',  'state', 'date'];
    public $timestamps = false;

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
