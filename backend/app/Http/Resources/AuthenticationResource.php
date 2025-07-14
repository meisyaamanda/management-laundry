<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthenticationResource extends JsonResource
{
    // protected string $token;

    // public function __construct($resource, $token)
    // {
    //     parent::__construct($resource);
    //     $this->token = $token;
    // }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // 'token' => $this->token,
            'user' => [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
                'address' => $this->address,
                'phone_number' => $this->phone_number,
                'profile_picture' => $this->profile_picture,
            ]
        ];
    }
}
