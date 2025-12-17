<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyAttendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'access_time',
        'access_date',
        'user_name',
        'department',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(Employee::class, 'user_id', 'user_id');
    }
}
