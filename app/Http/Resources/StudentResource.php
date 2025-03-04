<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'province' => $this->province,
            'score'=> $this->score,
            'phone_number'=>$this->phone_number,
            'status' => $this->status,
            // 'status' => $this->score >= 50 ? 'pass' : 'fail',

        ];
    }
}
