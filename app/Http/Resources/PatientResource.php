<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'blood_type' => $this->blood_type,
            'emergency_contact' => $this->emergency_contact,
            'allergies' => $this->allergies,
            'chronic_diseases' => $this->chronic_diseases,
        ];
    }
}
