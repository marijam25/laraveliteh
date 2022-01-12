<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VanzemaljacResource extends JsonResource
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
            'Id - ' => $this->resource->id,
            'Ime - ' => $this->resource->ime,
            'Boja - ' => $this->resource->boja,
            'Visina - ' => $this->resource->visina,
            'Tezina - ' => $this->resource->tezina,
            'Planeta - ' => new PlanetaResource($this->resource->planeta),
        ];
    }
}
