<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = ['empid',  'state', 'date','courseid'];
    public $timestamps = false;
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
