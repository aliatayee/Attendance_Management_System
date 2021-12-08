<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model

{

    protected $table = 'attendances';
    
    
    public function employee()
    {
        return $this->belongsTo(Employee::class,'emp_id');
    }
}
