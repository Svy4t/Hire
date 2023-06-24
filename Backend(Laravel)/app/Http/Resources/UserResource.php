<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'created_at' => $this->created_at,
            'date_of_birth' => $this->date_of_birth,
            'login' => $this->login,
            'name' => $this->name,
            'password' => $this->password,
            'rating' => $this->rating,
            'restriction' => $this->restraction,
            'surname' => $this->surname,
            'token' => $this->token,
            'userAdvts' => AdvtRecource::collection($this->userAdvts)
        ];
    }
}
