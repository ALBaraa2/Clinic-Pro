<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function clinicDepartment()
    {
        return $this->belongsTo(ClinicDepartment::class);
    }
}
