<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'mobile' => $this->mobile,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'api_token' => $this->api_token,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'social_accounts' => new SocialAccountCollection($this->whenLoaded('social_accounts')),
            'groups' => new GroupCollection($this->whenLoaded('groups'))
        ];
    }
}