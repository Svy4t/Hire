<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvtRecource extends JsonResource
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
            'header' => $this-> header,
            'description' => $this-> description,
            'point_meeting' => $this-> point_meeting,
            'place' => $this-> place,
            'created_at' => $this-> created_at,
            'user' => $this->user
        ];
    }
}
