<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function clinicDepartments()
    {
        return $this->hasMany(ClinicDepartment::class);
    }
}
