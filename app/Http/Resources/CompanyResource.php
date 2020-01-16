<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'vat_number' => $this->vat_number,
            'coc_number' => $this->coc_number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'groups' => new GroupCollection($this->whenLoaded('groups'))
        ];
    }
}