<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$this->name,
            'age'=>$this->age,
            'height'=>$this->height,
            'weight'=>$this->weight,
            'profile_picture'=>$this->profile_picture ? asset('storage/'.$this->profile_picture):null,
            'following'=>$this->following,
            'subscription'=>$this->subscription,
        ];
    }
}
