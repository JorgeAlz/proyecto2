<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuidadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $menores = MenorResource::collection($this->menores);
        return [
            'id' => $this->id,
            'attributes' => parent::toArray($request)+[
                'menores' => $menores
            ]
        ];
    }
}
