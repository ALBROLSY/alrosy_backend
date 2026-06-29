<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      return[
            'pdf_src'=>$this->pdf_path ? asset('storage/'.$this->pdf_path):null,
            'activation'=>$this->activation,
        ];
    }
}
