<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
