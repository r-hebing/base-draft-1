<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
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
            'service_id' => $this->service_id,
            'name' => $this->name,
            'can' => $this->can,
            'oauth_scope' => $this->oauth_scope,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'service' => new ServiceResource($this->whenLoaded('service'))
        ];
    }
}