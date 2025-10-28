<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicDepartment extends Model
{
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'clinic_department_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'clinic_department_id');
    }
}
