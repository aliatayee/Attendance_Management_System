<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttDev extends Model
{
    use HasFactory;
    protected $table = 'attd_device';
    protected $fillable = [
        'uid', 'emp_id','attendance_time','attendance_date', 'state', 'type','created_at'
    ];

}
