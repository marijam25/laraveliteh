<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanetaResource extends JsonResource
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
            'Oznaka - ' => $this->resource->oznaka,
            'Temperatura - ' => $this->resource->temperatura,
            'Galaksija - ' => new GalaksijaResource($this->resource->galaksija),
        ];
    }
}
