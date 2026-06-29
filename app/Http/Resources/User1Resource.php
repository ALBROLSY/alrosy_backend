<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class User1Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$this->user_name,
            'profile'=> new ProfileResource($this->whenLoaded('profile')),
            'file'=> new FileResource($this->whenLoaded('files')),
           
        ];
    }
}
