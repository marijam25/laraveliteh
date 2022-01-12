<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalaksijaResource extends JsonResource
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
            'Broj planeta - ' => $this->resource->broj_planeta,
            'Udaljenost od zemlje - ' => $this->resource->udaljenost_zemlja
        ];
    }
}
