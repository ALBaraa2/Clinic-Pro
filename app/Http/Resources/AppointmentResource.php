<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'doctor_id' => $this->doctor_id,
            'patient_id' => $this->patient_id,
            'clinic_department_id' => $this->clinic_department_id,
            'appointment_date' => $this->appointment_date,
            'status' => $this->status,
            'priority' => $this->priority,
            'notes' => $this->notes,
            'fee' => $this->fee,
        ];
    }
}
